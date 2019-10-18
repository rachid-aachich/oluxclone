<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Admin extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admins');    
  }
  
  public function login()
  {
    if(isLoggedIn())
      redirect($this->template->getBaseUrl());
    
    $error = '';
    if(isset($_POST['login']) || isset($_POST['password']))
    {
      $login = $_POST['login'];
      $password = $_POST['password'];
      
      if($this->admins->checkLogin($login, $password))
      {
        sessionLogin(ADMIN_ROLE);
        redirect($this->template->getBaseUrl());
      }
      else
      {
        $error = 'Login and/or password incorrect';
      }
    }
    
    $this->template->assign('error', $error);
    $this->template->display('admin/login');
  }
  
  public function logout()
  {
    sessionLogout();
    redirect($this->template->getBaseUrl());
  }
  
}