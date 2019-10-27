<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Seller extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('seller_Item'); 
  }
  
  public function index()
  {
    $this->template->displayHeader();
    $this->template->display('seller_items');
    $this->template->displayFooter();
  }


  public function get_items(){
    $response_data = $this->seller_Item->getList();
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success","response_data"=>$response_data]);
    return; 
  }


  public function save(){
    if(!$_POST["operation"]) {
      header("HTTP/1.1 401 Unauthorized");
      exit;
    }

    $allowedTypes = ["cpanel","leads","rdp","shell","ssh"];

    $errors = [];

    if(!in_array($_POST["type"], $allowedTypes)) array_push($errors,"Wrong item type");
    if(!is_numeric($_POST["price"])) array_push($errors,"Invalid price");
    

    if(!empty($errors)){
      header('Content-type: application/json');
      echo json_encode(["response_type"=>"error","response_data"=>$errors]);
      return;
    }

    if($_POST["operation"] == "add") $this->seller_Item->add($_POST["name"],$_POST["type"],$_POST["price"],$_POST["description"]);
    else $this->seller_Item->update($_POST["item_id"],$_POST["name"],$_POST["type"],$_POST["price"],$_POST["description"]);
       
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success"]);
    return; 
  }


  public function delete(){
    if(!$_POST["item_id"]) {
      header("HTTP/1.1 401 Unauthorized");
      exit;
    }
    $this->seller_Item->remove($_POST["item_id"]);
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success"]);
    return; 
  }

}