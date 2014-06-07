<?php

class ProjectsController extends ControllerBase {

  public function indexAction() {
    $this->view->projects = Projects::find();
  }

  public function showAction($projectId) {
    $this->view->project = Projects::findFirstById($projectId);
  }

  public function addAction() {
    if ($this->request->isPost()) {
      $project = new Projects();
      $project->name = $this->request->getPost('name');
      $project->description = $this->request->getPost('description');
      $project->gestion_id = "2014";
      $project->save();

      return $this->dispatcher->forward(array(
        'action' => 'show',
        'params' => array($project->id)
      ));
    }
  }

}

