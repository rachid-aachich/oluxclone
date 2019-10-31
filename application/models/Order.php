<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Order extends CI_Model {
  
  private $id;
  private $table_name = 'orders';
  
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
    $this->db->select('orders.*,user.name seller, seller_items.item_name , seller_items.item_price');
    $this->db->from($this->table_name);
    $this->db->join('user', 'user.id = orders.seller_id','left');
    $this->db->join('seller_items', 'orders.item_id = seller_items.id');
    $this->db->where('orders.user_id',$user_id);
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