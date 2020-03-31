<div class="navbar navbar-expand-lg navbar-light">
	<div class="text-center d-lg-none w-100">
		<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
			<i class="icon-unfold mr-2"></i>
			Footer
		</button>
	</div>

	<div class="navbar-collapse collapse" id="navbar-footer">
		<span class="navbar-text ml-lg-auto">
			Copyright &copy; 2020. Sekolah Menengah Kebangsaan Kinarut Papar
		</span>
	</div>
</div>

 <!-- Modal Logout -->
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered"><!-- modal-dialog-centered -->
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title"><b>Anda pasti ?</b></h4>
        </div>
        <div class="modal-body">
          <h6>Sila tekan "Log Keluar" di bawah jika anda sudah bersedia untuk menamatkan sesi semasa anda.</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <a href="<?= base_url(); ?>auth/logout" type="button" class="btn btn-info">Log Keluar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
	// user log history 
	$userid = $this->session->userdata('userid');
	$server_name= $_SERVER['SERVER_NAME']; 
	$http_host = $_SERVER['HTTP_HOST']; 
	$request_time = $_SERVER['REQUEST_TIME']; 
	$http_user_agent = $_SERVER['HTTP_USER_AGENT']; 

	$data = array(
	    'user_id' => $userid,
	    'ROUTE' => current_url(),
	    'IP_ADDRESS' => $this->input->ip_address(),
	    'TYPE' => $this->session->flashdata('typeAction'),
	    'REQUEST_TIME' => date('Y-m-d H:i:s'),
	    'HTTP_USER_AGENT' => $http_user_agent,
	    // 'SCRIPT_NAME' => $script_name,
	);

	$this->db->insert('schema_user_logs', $data);
?>

<script src="<?= base_url(); ?>/vendor/assets/js/input_restriction.js"></script>


<?php if ($this->session->flashdata('success_message')) { ?>
 <script type="text/javascript">
       $(document).ready(function(){
        new PNotify({
            title: '<b><i class="icon-info22 mr-2 icon-1x"></i> NOTIFIKASI</b>',
            text: '<?= $this->session->flashdata('success_message') ?>',
            addclass: 'alert alert-success alert-styled-right',
            type: 'success'
        },{
            timer: 400
        });
        unset($_SESSION['success_message']); // unset message
     });
 </script>
<?php } else if ($this->session->flashdata('err_message')) { ?>
<script type="text/javascript">
       $(document).ready(function(){
        new PNotify({
            title: '<b> <i class="icon-warning2 mr-2 icon-1x"></i>RALAT </b>',
            text: '<?= $this->session->flashdata('err_message') ?>',
            addclass: 'alert alert-danger alert-styled-right',
            type: 'error'
        },{
            timer: 400
        });

     });

    unset($_SESSION['err_message']); // unset message
 </script>  
<?php } ?>


