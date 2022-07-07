<?php

class Account_model extends CI_Model
{
	public function deposit($deposit_count, $id)
	{
	  $current_balance = $this->db->get_where('balance', ['id' => $id]);
	  $new_balance = $current_balance + $deposit_count;
	  $this->db->update($new_balance, ['id' => $id]);
	}
  
	public function withdraw($wd_count, $id)
	{
	  $current_balance = $this->db->get_where('balance', ['id' => $id]);
	  $new_balance = $current_balance - $wd_count;
	  $this->db->update($new_balance, ['id' => $id]);
	}
}
