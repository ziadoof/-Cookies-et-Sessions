<?php
include '../login.php';
session_start();
$user=$_POST['loginname'];
$error['user']='';
if (!empty($user))
  {
      session_unset();
      $_SESSION['user']=$user;
      setcookie('Cookie Factory', 'Cart', time() + 1*3600);
      $_SESSION['Pecan nuts']= 0;
      $_SESSION['Chocolate chips']= 0;
      $_SESSION['Chocolate cookie']= 0;
      $_SESSION['M&M cookies']= 0;
      $_SESSION['article']= 0;
      header('Location: index.php');

  }
  else
      {
          $error['user'] ='Please enter the username !';
      }

