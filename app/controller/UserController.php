<?php
namespace App\Controller;

require_once '../app/controller/ViewController.php';

class UserController extends ViewController
{
  public function loginAction(array $unfilteredRequestParams)
  {
    if (isset($unfilteredRequestParams['password'])) {
      sleep(1);
    }
    $this->view->addVars($unfilteredRequestParams);
    $this->view->render('login', ['email' => 'a@b.com']);
  }
}
