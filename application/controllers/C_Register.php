<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Register extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_User');
  }


  public function index()
  {
    // code...
    $this->load->view('V_Register');
  }


  public function register()
  {
    $data = array('username' => $this->input->post('user_name'),
                  'email' => $this->input->post('user_email'),
                  'password' => $this->input->post('user_passw'),
                  );
    $repass = $this->input->post('confirm_pass');

    if ($repass == $data['password']) {
      $res = $this->M_User->register($data);
      if ($res) {
        $this->session->set_userdata('regist_succ' , 'success');
        #redirect (site_url().C_Login ,'refresh');
      } else {
        $this->session->set_userdata('regist_fail' , 'failed');
        #redirect (site_url().C_Register, 'refresh');
      }
    } else {
      $this->session->set_userdata('regist_fail' , 'password');
      #redirect (site_url().C_Register, 'refresh');
    }
  }


}
 ?>
