<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProjectDAO.php';

class ProjectsController extends Controller {

  private $ProjectDAO;

  function __construct() {
    $this->projectDAO = new ProjectDAO();
  }

  public function index() {
    $this->set('currentPage', 'home');
    $projects = $this->projectDAO->selectAll();
    $this->set('projects', $projects);
  }

  public function view() {
    $this->set('currentPage', 'detail');
    if(!empty($_GET['id'])){
      $projectId = $_GET['id'];
      $project = $this->projectDAO->selectById($projectId);
      // $opgehaaldeFotos = $this->projectDAO->selectByFotos();
      $this->set('project', $project);
      // $this->set('opgehaaldeFotos', $opgehaaldeFotos);
    }
  }

  public function about() {
    $this->set('currentPage', 'about');
  }
}
