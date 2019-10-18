<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Admins extends CI_Model {
  
  private $id;
  private $table_name = 'admin';
  
  public function __construct()
  {
    parent::__construct();
  }
  
  public function checkLogin($login, $password)
  {
    $hash = hash('sha256', $password);
    $query = $this->db->get_where('admin', array('login' => $login, 'password' => $hash));
    return $query->num_rows() > 0 ? TRUE : FALSE;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }
  
  public function getId()
  {
    return $this->id;
  }
  
  public function add()
  {
    
  }
  
  public function update()
  {
    
  }
  
  public function get()
  {
    
  }
  
  public function remove()
  {
    
  }
  
}