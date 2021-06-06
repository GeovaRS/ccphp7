<?php
 class Usuario {
  private $idUsuario;
  private $desLogin;
  private $desSenha;
  private $dtCadastro;

  public function getIdUsuario() {
   return $this->idUsuario;
  }

  public function setIdUsuario($value) {
   $this->idUsuario = $value;
  }

  public function getDesLogin() {
   return $this->desLogin;
  }

  public function setDesLogin($value) {
   $this->desLogin = $value;
  }

  public function getDesSenha() {
   return $this->desSenha;
  }

  public function setDesSenha($value) {
   $this->desSenha = $value;
  }

  public function getDtCadastro() {
   return $this->dtCadastro;
  }

  public function setDtCadastro($value) {
   $this->dtCadastro = $value;
  }

  public function loadById($id) {
   $sql = new Sql();

   $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",
   array(":ID"=>$id));
   // if(isset($results[0])) {}
   if(count($results) > 0) {
    $row = $results[0];
    $this->setIdUsuario($row['idusuario']);
    $this->setDesLogin($row['deslogin']);
    $this->setDesSenha($row['dessenha']);
    $this->setDtCadastro(new DateTime($row['dtcadastro']));
   }
  }

  public function __toString() {
   return json_encode(array(
    "idusuario"=>$this->getIdUsuario(),
    "deslogin"=>$this->getDesLogin(),
    "dessenha"=>$this->getDesSenha(),
    "dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
   ));
  }
 }
?>
