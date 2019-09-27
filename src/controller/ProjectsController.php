<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProjectDAO.php';

class ProjectsController extends Controller {

  private $ProjectDAO;

  function __construct() {
  }

  public function index() {
    $this->set('currentPage', 'home');
  }

  public function view() {
    $this->set('currentPage', 'detail');
  }

  public function about() {
    $this->set('currentPage', 'about');
  }
}
