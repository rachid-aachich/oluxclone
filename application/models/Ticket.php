<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Ticket extends CI_Model {
  
  private $id;
  private $table_name = 'tickets';
  
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
    $this->db->select('tickets.*,messages.message');
    $this->db->from($this->table_name);
    $this->db->join('messages', 'messages.id = tickets.last_reply','left');
    $this->db->where('tickets.user_id',$user_id);
    $query = $this->db->get();
    return $query->result();
  }
  
  public function add($title,$message)
  {
    $data = array(
      'date_created' => date('Y-m-d h:i:s'),
      'title' => $title,
      'status' => 'submitted',
      'last_reply' => null,
      'last_updated' => date('Y-m-d h:i:s'),
      'user_id'=>1
    );
    $this->db->insert($this->table_name, $data);
    $ticket_id  = $this->db->insert_id();

    $data = array(
      'entity_id' => $ticket_id,
      'entity_type' => 'tickets',
      'title' => $title,
      'message' => $message,
      'user_id' => 1
    );
    $this->db->insert('messages', $data);
    $message_id = $this->db->insert_id();


    $data = array(
      'last_reply' => $message_id,
    );
    $this->db->where('id', $ticket_id);
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