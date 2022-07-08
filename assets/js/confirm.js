function deleteConfirm(event){
	Swal.fire({
		title: 'Delete Confirmation!',
		text: 'Are you sure to delete the item?',
		icon: 'warning',
		showCancelButton: true,
		cancelButtonText: 'No',
		confirmButtonText: 'Yes Delete',
		confirmButtonColor: 'red'
	}).then(dialog => {
		if(dialog.isConfirmed){
			window.location.assign(event.dataset.deleteUrl);
		}
	});
}
