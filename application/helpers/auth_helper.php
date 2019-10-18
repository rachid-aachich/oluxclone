<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function sessionLogin($role)
{
  $_SESSION['logged'] = TRUE;
  $_SESSION['role'] = $role;
}

function sessionLogout() 
{
  $_SESSION['logged'] = FALSE;
  $_SESSION['role'] = NULL;
}

function isLoggedIn()
{
  return $_SESSION['logged'] === TRUE;
}

function userRole()
{
  return $_SESSION['role'];
}