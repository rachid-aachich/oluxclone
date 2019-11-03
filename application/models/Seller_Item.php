<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Seller_Item extends CI_Model {
  
  private $id;
  private $table_name = 'seller_items';
  
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
  
  public function add($name,$type,$price,$description/*,$seller_id*/)
  {
    $data = array(
      'item_name' => $name,
      'item_price' => $price,
      'item_type' => $type,
      'item_description' => $description,
      'seller_id' => 1
    );
    $this->db->insert($this->table_name, $data);
  }
  
  public function update($id,$name,$type,$price,$description/*,$seller_id*/)
  {
    $data = array(
      'item_name' => $name,
      'item_price' => $price,
      'item_type' => $type,
      'item_description' => $description,
      'seller_id' => 1
    );
    $this->db->where('id', $id);
    $this->db->update($this->table_name, $data);
  }
  
  public function get($id = FALSE)
  {
    $id = $id ? $id : $this->id;
  }
  
  public function remove($id)
  {
    $this->db->delete($this->table_name, array('id' => $id));
  }
  
  public function getList($seller_id = 1)
  {
    $this->db->select('*');
    $this->db->from($this->table_name);
    $this->db->where('seller_id',$seller_id);
    $query = $this->db->get();
    return $query->result();
  }
}