<?php 

class perfil {

	private $_nombre;
	private $_iden;    
	private $_mail;
	private $_dir;    
	private $_barrio;    
	private $_tel;
	private $_contra;
	private $rutaDestino;
	private $_DB;

	public function perfil(){
		$this->_DB=DB::getInstance();
	}

	public function mostrar_cliente($correo){
		$sql = 'SELECT * FROM persona where Correo = :correo';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':correo' => $correo));
		return $sentencia->fetchAll();//fetchAll para recorrer el array de una mejor manera
	}

	public function actualizar()
	{
		$sql = 'UPDATE persona SET Nombre = :nombre, Direccion = :dir, Correo = :correo, Telefono = :tel, Barrio = :barrio, Contrasena =:cont  WHERE Identificacion = :identi';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':identi' => $this->_iden,':nombre' => $this->_nombre,':dir' => $this->_dir, ':correo'=>$this->_mail, ':tel'=>$this->_tel, ':barrio'=>$this->_barrio, ':cont'=>$this->_contra));
		return $sentencia;
	}

	public function subir_ima()
	{			
		$sql = 'UPDATE persona SET ruta = :link WHERE Identificacion = :identi';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':identi' => $this->_iden,':link' => $this->rutaDestino));
		return $sentencia;
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

	public function getrutaDestino() {
		return $this->rutaDestino;
	}

	public function setrutaDestino($rutaDestino) {
		$this->rutaDestino = $rutaDestino;
	}

	public function get_ruta() {
		return $this->_ruta;
	}

	public function set_ruta($_ruta) {
		$this->_ruta = $_ruta;
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