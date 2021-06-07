<?php
 class Usuario {
  private $idUsuario;
  private $desLogin;
  private $desSenha;
  private $dtCadastro;

  public function __construct($login = "", $password = "") {
   $this->setDesSenha($login);
   $this->setDesSenha($password);
  }

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

  public function getData() {
   return json_encode(array(
    "idusuario"=>$this->getIdUsuario(),
    "deslogin"=>$this->getDesLogin(),
    "dessenha"=>$this->getDesSenha(),
    "dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
   ));
  }

  public function setData($data) {
   $this->setIdUsuario($data['idusuario']);
   $this->setDesLogin($data['deslogin']);
   $this->setDesSenha($data['dessenha']);
   $this->setDtCadastro(new DateTime($data['dtcadastro']));
  }

  public function loadById($id) {
   $sql = new Sql();

   $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",
   array(":ID"=>$id));
   // if(isset($results[0])) {}
   if(count($results) > 0) {
    // $row = $results[0];
    // $this->setIdUsuario($row['idusuario']);
    // $this->setDesLogin($row['deslogin']);
    // $this->setDesSenha($row['dessenha']);
    // $this->setDtCadastro(new DateTime($row['dtcadastro']));

    $this->setData($results[0]);
   }
  }

  public static function getList() {
   $sql = new Sql();
   return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
  }

  public static function search($login) {
   $sql = new Sql();
   return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin
   LIKE :SEARCH ORDER BY deslogin", array(":SEARCH"=>"%".$login."%"));
  }

  public function login($login, $password) {
   $sql = new Sql();
   $results = $sql->select("SELECT * FROM tb_usuarios
   WHERE deslogin = :LOGIN and dessenha = :PASSWORD", array(
    ":LOGIN"=>$login,
    ":PASSWORD"=>$password));
   // if(isset($results[0])) {}
   if(count($results) > 0) {
    // $row = $results[0];
    // $this->setIdUsuario($row['idusuario']);
    // $this->setDesLogin($row['deslogin']);
    // $this->setDesSenha($row['dessenha']);
    // $this->setDtCadastro(new DateTime($row['dtcadastro']));

    $this->setData($results[0]);
   } else {
    throw new Exception("Login e/ou senha inválidos.");
   }
  }

  public function insert() {
   $sql = new Sql();
   $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
    ":LOGIN"=>$this->getDesLogin(),
    ":PASSWORD"=>$this->getDesSenha()
   ));

   if(count($results) > 0) {
    $this->setData($results[0]);
   }
  }

  public function update($login, $password) {
   $this->setDesLogin($login);
   $this->setDesSenha($password);

   $sql = new Sql();

   $sql->execQuery("UPDATE tb_usuarios
   SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
    ':ID'=>$this->getIdUsuario(),
    ':LOGIN'=>$this->getDesLogin(),
    ':PASSWORD'=>$this->getDesSenha()
   ));
  }

  public function __toString() {
   // return json_encode(array(
   //  "idusuario"=>$this->getIdUsuario(),
   //  "deslogin"=>$this->getDesLogin(),
   //  "dessenha"=>$this->getDesSenha(),
   //  "dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
   // ));

   return $this->getData();
  }
 }
?>
