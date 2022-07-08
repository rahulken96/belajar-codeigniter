<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
  <main class="main">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

		<?php if ($this->session->flashdata('masuk_admin')) : ?>
			<script>
				Swal.fire({
					title: 'Selamat Datang !',
					text: '<?= $this->session->flashdata('masuk_admin') ?>',
					icon: 'info',
				}).then(dialog => {
					Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000,
						timerProgressBar: true,
						didOpen: (toast) => {
							toast.addEventListener('mouseenter', Swal.stopTimer)
							toast.addEventListener('mouseleave', Swal.resumeTimer)
						}
					})
				});
			</script>
		<?php endif ?>

    <div class="content">
      <h1>Beranda</h1>

      <div style="display:flex; gap: 1em">
        <div class="card text-center" style="width: 100px;">
          <h2>
            <?= $article_count ?>
          </h2>
          <p><a href="<?= site_url('admin/post') ?>">Artikel</a></p>
        </div>
        <div class="card text-center" style="width: 100px;">
          <h2>
            <?= $feedback_count ?>
          </h2>
          <p><a href="<?= site_url('admin/feedback') ?>">Feedback</a></p>
        </div>
      </div>

      <?php $this->load->view('admin/_partials/footer.php') ?>
    </div>
  </main>
</body>

</html>
