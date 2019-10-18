<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('cpanel');
    $this->load->model('rdp');
    $this->load->model('ssh');
    $this->load->model('mailer');
    $this->load->model('shell');
    $this->load->model('smtp');
    $this->load->model('lead');
  }
  
  public function list($type = 'rdp')
  {
    $whitelist = array('rdp', 'cpanel', 'shell', 'ssh', 'mailer', 'smtp', 'lead');
    
    if(!in_array($type, $whitelist))
      show_404();
    
    $this->template->displayHeader();
    
    $data = $this->{$type}->getList();

    $item_template = '';
	

    foreach($data as $key => $item)
    {
      if(isset($item->https)) {
        if($item->https == 1) {
          $this->template->assign('lock', 'fa-lock');
          $this->template->assign('https', 'https');
          $this->template->assign('color', '#18BC9C');
        } else {
          $this->template->assign('lock', 'fa-lock-open');
          $this->template->assign('https', 'http');
        }
      }
      
      $webmail = isset($item->webmail) && $item->webmail == 0 ? 'No' : 'Yes';
      $this->template->assign('webmail', $webmail);
      
      $whm = isset($item->whm) && $item->whm == 0 ? 'No' : 'Yes';
      $this->template->assign('whm', $whm);
      
      $this->template->assignObject($item, ['https', 'webmail', 'whm']);
      $item_template = $this->template->load_template($type . '_item');
    }

    
    $this->template->assign('items', $item_template);
    $this->template->display(strtolower($type));
    
    $this->template->displayFooter();
  }
  
}
