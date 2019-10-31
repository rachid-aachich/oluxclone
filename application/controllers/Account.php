<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Account extends CI_Controller {
  
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('order');
  }
  
  public function settings()
  {
    $this->template->displayHeader();
    $this->template->display('account/settings');
    $this->template->displayFooter();
  }
  
  public function orders()
  {
    $this->template->displayHeader();
    $this->template->display('account/orders');
    $this->template->displayFooter();
  }
  
  public function balance()
  {
    $this->template->displayHeader();
    $this->template->display('account/balance');
    $this->template->displayFooter();
  }
  

  public function getOrders(){
    $response_data = $this->order->getList();
    header('Content-type: application/json');
    echo json_encode(["response_type"=>"success","response_data"=>$response_data]);
    return; 
  }
}