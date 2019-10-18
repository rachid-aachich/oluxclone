<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class User extends CI_Model {
  
  private $id;
  private $table_name = 'cpanel';
  
  public function __construct()
  {
    parent::__construct();
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
  
  public function checkLogin($login, $password)
  {
    $hash = hash('sha256', $password);
    $query = $this->db->get_where('user', array('login' => $login, 'password' => $hash));
    return $query->num_rows() > 0 ? TRUE : FALSE;
  }
  
  
	public function getList()
	{
		$query = $this->db->get($this->table_name);
		return $query->result();
	}
}