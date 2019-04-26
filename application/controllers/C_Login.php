<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_User');
  }

  public function index()
  {
    // code...
    $this->load->view('V_Login');
  }


  public function login()
  {
    $data = array('email' => $this->input->post('user_email'),
                  'password' => $this->input->post('user_pass'));

    $result = $this->M_User->auth($data);
    if ($result != null) {
      if (isset($_POST['remember-me']) && $_POST['remember-me'] == 'on') {
        $cookies =array('name' => 'logged',
                       'value' => $result['idUser'],
                       'expire' => 3600);
        set_cookie($cookies);
        $this->session->set_userdata($result);
        echo "success";
        redirect(site_url() , 'refresh');
      } else {
        echo "not success";
        $this->session->set_userdata($result);
        redirect(site_url(), 'refresh');
      }
    } else {
      redirect(site_url() , 'refresh');
    }
  }

  public function logout()
  {
    delete_cookie("logged");
    $this->session->sess_destroy();
    redirect(site_url(), 'refresh');
  }
}
 ?>
