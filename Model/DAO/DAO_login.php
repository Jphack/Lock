<?php 

class usuario {

    private $_nombre;
    private $_iden;    
    private $_mail;
    private $_dir;    
    private $_barrio;    
    private $_tel;
    private $_contra;
    private $_DB;

    public function usuario(){
        $this->_DB=DB::getInstance();
    }

    public function login_usu(){

        $sql = 'SELECT * FROM persona WHERE Contrasena= :pass AND Correo= :mail';
        $sentencia = $this->_DB->prepare($sql);
        $sentencia->execute(array(':pass' => $this->_contra, ':mail' => $this->_mail));
        // $res = $sentencia->fetchAll();
        // var_dump($res);
        // exit();
        return $sentencia->fetchAll();
    }

    public function registro(){

        $sql = 'INSERT INTO persona(Nombre,Identificacion,Direccion,Correo,Telefono,Barrio,Contrasena) VALUES (:nombre, :identificacion, :direccion, :correo, :telefono, :barrio, :contrasena)';
        $sentencia = $this->_DB->prepare($sql);
        $sentencia->execute(array(':nombre' => $this->_nombre, ':identificacion' => $this->_iden, ':direccion' => $this->_dir, ':correo'=>$this->_mail, ':telefono'=>$this->_tel, ':barrio'=>$this->_barrio, ':contrasena'=>$this->_contra));
        // $res = $sentencia->fetchAll();
        // var_dump($res);
        // exit();
        return $sentencia;
    }
    
    public function identificacion(){
        $sql = 'SELECT Identificacion FROM persona WHERE Identificacion= :iden';
        $sentencia = $this->_DB->prepare($sql);
        $sentencia->execute(array(':iden' => $this->_iden));
        // $res = $sentencia->fetchAll();
        // var_dump($res);
        // exit();
        return $sentencia->fetchAll();
    }

    public function get_contra() {
        return $this->_contra;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function get_dir() {
        return $this->_dir;
    }

    public function get_tel() {
        return $this->_tel;
    }

    public function get_iden() {
        return $this->_iden;
    }

    public function get_barrio() {
        return $this->_barrio;
    }

    public function get_mail() {
        return $this->_mail;
    }

    public function set_mail($_mail) {
        $this->_mail = $_mail;
    }

    public function set_contra($_contra) {
        $this->_contra = $_contra;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function set_iden($_iden) {
        $this->_iden = $_iden;
    }

    public function set_tel($_tel) {
        $this->_tel = $_tel;
    }

    public function set_barrio($_barrio) {
        $this->_barrio = $_barrio;
    }

    public function set_dir($_dir) {
        $this->_dir = $_dir;
    }
}
?>