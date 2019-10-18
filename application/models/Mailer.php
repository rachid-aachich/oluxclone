<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Mailer extends CI_Model {
  
  private $id;
  private $table_name = 'mailer';
  
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
    $this->db->join('user', 'user.id = mailer.seller_id');
    $query = $this->db->get();
    return $query->result();
	}
}