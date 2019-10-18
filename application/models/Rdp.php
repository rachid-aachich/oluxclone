<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Rdp extends CI_Model {
  
  private $id;
  private $table_name = 'rdp';
  
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
  
	public function getList()
	{
    $this->db->select('*');
    $this->db->from($this->table_name);
    $this->db->join('user', 'user.id = rdp.seller_id');
    $query = $this->db->get();
    return $query->result();
	}
}