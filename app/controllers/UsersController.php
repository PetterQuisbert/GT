<?php

class UsersController extends \Phalcon\Mvc\Controller {

  public function indexAction() {
    $this->view->users = Users::find();
  }

  public function showAction($userId) {
    $this->view->user = Users::findFirstById($userId);
  }

  public function addAction() {
    if ($this->request->isPost()) {
      $user = new Users();
      $user->name = $this->request->getPost('name');
      $user->last_name = $this->request->getPost('last_name');
      $user->mail = $this->request->getPost('mail');
      $user->mail = $this->request->getPost('address');
      $user->save();

      return $this->dispatcher->forward(array(
        'action' => 'show',
        'params' => array($user->id)
      ));
    }
  }

}

