<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Support extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    
    $this->template->displayHeader();
  }
  
  public function tickets()
  {
    $this->template->display('support/tickets');
    $this->template->displayFooter();
  }
  
  public function reports()
  {
    $this->template->display('support/reports');
    $this->template->displayFooter();
  }
  
}