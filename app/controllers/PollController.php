<?php

class PollController extends ControllerBase {
  public function indexAction() {
    $this->view->polls = Polls::find();
  }

  public function showAction($pollId) {
    $this->view->poll = Polls::findFirstById($pollId);
    $this->view->options = PollsOptions::find(array(
      'polls_id = ?0',
      'bind' => array($pollId),
      'order' => 'number_votes DESC'
    ));
  }

  public function voteAction($optionId) {
    $option = PollsOptions::findFirstById($optionId);
    $option->number_votes++;
    $option->save();

    return $this->dispatcher->forward(array(
      'action' => 'show',
      'params' => array($option->polls_id)
    ));
  }

  public function addAction($pollId) {
    if ($this->request->isPost()) {
      $option = new PollsOptions();
      $option->polls_id = $pollId;
      $option->name = $this->request->getPost('name');
      $option->number_votes = 0;
      $option->save();

      return $this->dispatcher->forward(array(
        'action' => 'show',
        'params' => array($pollId)
      ));
    }
  }
}

