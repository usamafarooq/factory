<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $this->view('component/header', $vars, $return); // header
        $this->view($template_name, $vars, $return); // view
        $this->view('component/footer', $vars, $return); // footer
    }
}