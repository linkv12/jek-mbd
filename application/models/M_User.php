<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_User extends CI_Model {

  public function auth($data)
  {
    if ($this->isExist($data['email'])) {
      $this->db->where('email', $data['email']);
      $this->db->where('password', $data['password']);
      $this->db->from('user');
      $temp = $this->db->get();
      if ($temp->num_rows() == 1) {
        return $temp->row_array();
      } else {
        return null;
      }
    } else {
      return null;
    }
  }

  public function isExist($email)
  {
    $this->db->where('email', $email);
    $this->db->from('user');
    $result = $this->db->get();
    if ($result->num_rows() == 0) {
      return false;
    } else {
      return true;
    }
  }

  public function isExistUname($username)
  {
    $this->db->select('username');
    $this->db->where('username', $username);
    $this->db->from('user');
    $row_num = $this->db->get()->num_rows();
    if ( $row_num ==  0) {
      return false;
    } else {
      return true;
    }
  }


  public function register($regist_data)
  {
    if ($this->isExist($regist_data['email']) || $this->isExistUname($regist_data['username'])) {
      return false;
    } else {
      $this->db->insert('user', $regist_data);
      return true;
    }
  }

}
 ?>
