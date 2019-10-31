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
  
  public function add($order_id,$title,$message)
  {
    $data = array(
      'date_created' => date('Y-m-d h:i:s'),
      'order_id' => $order_id,
      'status' => 'submitted',
      'last_reply' => null,
      'last_updated' => date('Y-m-d h:i:s'),
      'user_id'=>1
    );
    $this->db->insert($this->table_name, $data);
    $report_id  = $this->db->insert_id();

    $data = array(
      'entity_id' => $report_id,
      'entity_type' => 'reports',
      'title' => $title,
      'message' => $message,
      'user_id' => 1
    );
    $this->db->insert('messages', $data);
    $message_id = $this->db->insert_id();


    $data = array(
      'last_reply' => $message_id,
    );
    $this->db->where('id', $report_id);
    $this->db->update($this->table_name, $data);
    
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