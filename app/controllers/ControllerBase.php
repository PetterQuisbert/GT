<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
  public function initialize()
  {

    //Add some local CSS resources
    $this->assets
      ->addCss('css/bootstrap.min.css')
      ->addCss('css/sb-admin.css')
      ->addCss('css/font-awesome.min.css');

    //and some local javascript resources
    $this->assets
      ->addJs('js/jquery.js')
      ->addJs('js/bootstrap.min.js');

  }

}
