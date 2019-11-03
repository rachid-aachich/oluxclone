<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Message extends CI_Model {
  
  private $id;
  private $table_name = 'messages';
  
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

  public function getThread($entity_id,$entity_type)
  {
    $filter = array('entity_id' => $entity_id, 'entity_type' => $entity_type);
    $user_id = 1;
    $this->db->select('*');
    $this->db->from($this->table_name);
    $this->db->where($filter);
    $this->db->order_by("date_created", "asc");
    $query = $this->db->get();
    return $query->result();
  }
  
  public function add($entity_id,$entity_type,$message)
  {
    $data = array(
        'entity_id' => $entity_id,
        'entity_type' => $entity_type,
        'message' => $message,
        'date_created'=>date('Y-m-d h:i:s'),
        'user_id' => 1
    );
    $this->db->insert($this->table_name, $data);
    $message_id = $this->db->insert_id();

    $data = array(
        'last_reply' => $message_id,
    );
    $this->db->where('id', $entity_id);
    $this->db->update($entity_type, $data);
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