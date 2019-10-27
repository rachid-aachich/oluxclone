<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Account extends CI_Controller {
  
  
  public function __construct()
  {
    parent::__construct();
    
    $this->template->displayHeader();
  }
  
  public function settings()
  {
    $this->template->display('account/settings');
    $this->template->displayFooter();
  }
  
  public function orders()
  {
    $this->template->display('account/orders');
    $this->template->displayFooter();
  }
  
  public function balance()
  {
    $this->template->display('account/balance');
    $this->template->displayFooter();
  }
  
}