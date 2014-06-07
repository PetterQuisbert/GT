<?php

class IndexController extends ControllerBase {

  public function indexAction() {
    $this->view->categories = Categories::find();
    $this->view->subCategories = Categories::find();
  }

}

