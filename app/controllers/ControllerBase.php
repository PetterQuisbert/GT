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
      ->addJs('js/gt.js')
      ->addJs('js/bootstrap.min.js')
      ->addJs('js/jquery.tablesorter.js')
      ->addJs('js/tables.js');
//      ->addJs('js/chart-data-morris.js');


    $this->view->categories = Categories::find();
    $this->view->subCategories = Categories::find();

  }

}
