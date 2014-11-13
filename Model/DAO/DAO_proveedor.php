<?php 

class proveedor {

	private $_razonsocial;
	private $_nit; 
	private $_nombre;   
	private $_mail;	
	private $_tel;    
	private $_cel;
	private $_DB;

	public function proveedor(){
		$this->_DB=DB::getInstance();
	}

	public function mostrar(){
		$sql = 'SELECT (select descripcion from marca as m where p.Id_marca=m.Id_marca)Id_Marca,Identificacion,Nom_pro,Correo,Telefono,Celular FROM proveedores as p';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	public function mostrar_proveedor(){
		$sql = 'SELECT * FROM proveedores as p where Identificacion= :iden';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':iden'=> $this->_nit));
		return $sentencia->fetchAll();
	}

	public function registro(){
		$sql = 'INSERT INTO proveedores(Id_Marca,Identificacion,Nom_pro,Correo,Telefono,Celular) VALUES (:razon, :iden, :nom, :correo, :tel, :cel)';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':razon' => $this->_razonsocial, ':iden' => $this->_nit, ':nom' => $this->_nombre, ':correo'=>$this->_mail, ':tel'=>$this->_tel, ':cel'=>$this->_cel));
		return $sentencia;
	}

	public function actualizar()
	{
		$sql = 'UPDATE proveedores SET Id_Marca = :razon,Nom_pro = :nom, Correo = :correo, Telefono = :tel, Celular =:cel  WHERE Identificacion = :iden';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':iden' => $this->_nit,':razon' => $this->_razonsocial,':nom' => $this->_nombre, ':correo'=>$this->_mail, ':tel'=>$this->_tel, ':cel'=>$this->_cel));
		return $sentencia;
	}

	public function identificacion(){
        $sql = 'SELECT Identificacion FROM proveedores WHERE Identificacion= :iden';
        $sentencia = $this->_DB->prepare($sql);
        $sentencia->execute(array(':iden' => $this->_nit));
        // $res = $sentencia->fetchAll();
        // var_dump($res);
        // exit();
        return $sentencia->fetchAll();
    }

	public function llenarcombomarca()
	{
		$sql = 'SELECT * FROM marca';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();	
	}

	public function get_razonsocial() {
		return $this->_razonsocial;
	}

	public function get_nombre() {
		return $this->_nombre;
	}

	public function get_tel() {
		return $this->_tel;
	}

	public function get_cel() {
		return $this->_cel;
	}

	public function get_nit() {
		return $this->_nit;
	}

	public function get_mail() {
		return $this->_mail;
	}

	public function set_mail($_mail) {
		$this->_mail = $_mail;
	}

	public function set_razonsocial($_razonsocial) {
		$this->_razonsocial = $_razonsocial;
	}

	public function set_nombre($_nombre) {
		$this->_nombre = $_nombre;
	}

	public function set_cel($_cel) {
		$this->_cel = $_cel;
	}

	public function set_tel($_tel) {
		$this->_tel = $_tel;
	}

	public function set_nit($_nit) {
		$this->_nit = $_nit;
	}
}
?>