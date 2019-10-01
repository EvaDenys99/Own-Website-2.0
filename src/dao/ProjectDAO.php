<?php

require_once( __DIR__ . '/DAO.php');
class ProjectDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `projecten`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `projecten` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // public function selectByFotos(){
  //   $sql = "SELECT 'img' FROM `projecten`";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':img', $img);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }
}
