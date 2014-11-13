<?php 

class admin {

	private $_DB;

	public function admin(){
		$this->_DB=DB::getInstance();
	}

	public function cantidad_prove()
	{
		$sql = 'SELECT count(*) as a FROM proveedores';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	public function cantidad_produc()
	{
		$sql = 'SELECT count(*) as b FROM productos';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	public function cantidad_clien()
	{
		$sql = 'SELECT count(*) as c FROM persona where Id_rol=1';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}


}

?>