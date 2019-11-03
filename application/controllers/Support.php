<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Support extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ticket');
    $this->load->model('report');
    $this->load->model('message');
  }
  
  public function tickets()
  {
    $this->template->displayHeader();
    $this->template->display('support/tickets');
    $this->template->displayFooter();
  }
  
  public function reports()
  {
    $this->template->displayHeader();
    $this->template->display('support/reports');
    $this->template->displayFooter();
  }

  public function dashboard(){
    $this->template->displayHeader();
    $this->template->display('support/dashboard');
    $this->template->displayFooter();
  }

  public function getTickets(){
    $response_data = $this->ticket->getList();
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success","response_data"=>$response_data]);
    return; 
  }

  public function getReports(){
    $response_data = $this->report->getList();
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success","response_data"=>$response_data]);
    return; 
  }

  public function getMessages(){
    if(!$_POST["operation"]) {
      header("HTTP/1.1 401 Unauthorized");
      exit;
    }

    $response_data = $this->message->getThread($_POST["entity_id"],$_POST["entity_type"]);

    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success","response_data"=>$response_data]);
    return; 
  }


  public function save(){
    if(!$_POST["operation"]) {
      header("HTTP/1.1 401 Unauthorized");
      exit;
    }

    if($_POST["operation"] == "add_ticket") $this->ticket->add($_POST["title"],$_POST["message"]);
    else if($_POST["operation"] == "add_report") $this->report->add($_POST['order_id'],$_POST["title"],$_POST["message"]);
       
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success"]);

    return; 
  }


  public function addMessage(){
    if(!$_POST["operation"]) {
      header("HTTP/1.1 401 Unauthorized");
      exit;
    }
    $this->message->add($_POST["entity_id"],$_POST["entity_type"],$_POST["message"]);
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success"]);

    return; 

  }
  
}