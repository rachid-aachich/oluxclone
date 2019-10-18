<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Auth extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('user');
  }
  
  public function Signup()
  {

  }
  
  public function Login()
  {
    if(isLoggedIn())
      redirect($this->template->getBaseUrl());
    
    $error = '';
    if(isset($_POST['login']) || isset($_POST['password']))
    {
      $login = $_POST['login'];
      $password = $_POST['password'];
      
      if($this->user->checkLogin($login, $password))
      {
        sessionLogin(USER_ROLE);
        redirect($this->template->getBaseUrl());
      }
      else
      {
        $error = 'Login and/or password incorrect';
      }
    }
    
    $this->template->assign('error', $error);
    $this->template->display('auth/login');
  }
  
  public function recover()
  {
    
  }
  
  public function Logout()
  {
    sessionLogout();
    redirect($this->template->getBaseUrl());
  }
  
}