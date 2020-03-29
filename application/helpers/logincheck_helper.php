<?php

function check_login() {
	$ci =& get_instance();
	$userid_session = $ci->session->userdata('userid');
	$roleid_session = $ci->session->userdata('roleid');

	if (!$userid_session) {
		$ci->session->set_flashdata('error_message','Sila log masuk');
		redirect('auth');
	}
	// else {
	// 	if($level_session)
	// 	{		
	// 		$menu = $ci->uri->segment(1); 
	// 		$submenu = $ci->uri->segment(2); 

	// 		$queryMenu =  $ci->db->get_where('menu', ['menu_url' => $menu])->row_array();
	// 		$menu_id = $queryMenu['menu_id'];

	// 		$userAccess =  $ci->db->get_where('menu_access', [
	// 			'id_user_level' => $level_session,
	// 			'menu_id' => $menu_id
	// 			]);

	// 		if ($userAccess->num_rows()<1 AND ($level_session != 1 AND $level_session != 7)) {
	// 			redirect('auth/blockpage');
	// 		}
	// 	}else{
	// 		redirect('auth/blockpage');
	// 	}

	// }
}
