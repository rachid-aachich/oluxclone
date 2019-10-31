<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Report extends CI_Model {
  
  private $id;
  private $table_name = 'reports';
  
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

  public function getList()
  {
    $user_id = 1;
    $this->db->select('reports.*,messages.message,user.name seller, orders.item_type');
    $this->db->from($this->table_name);
    $this->db->join('messages', 'messages.id = reports.last_reply','left');
    $this->db->join('orders', 'orders.id = reports.order_id','left');
    $this->db->join('user', 'user.id = orders.seller_id','left');
    
    $this->db->where('reports.user_id',$user_id);
    $query = $this->db->get();
    return $query->result();
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