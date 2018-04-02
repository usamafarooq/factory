<?php
error_reporting(0);


class Logout extends MY_Controller
{
	
	public function destroy()
  {
    $this->session->sess_destroy();
      redirect(base_url().'login/');

  }


}
