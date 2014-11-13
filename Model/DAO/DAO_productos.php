<?php 

class productos {
	
	private $_nompro;
	private $_precio;    
	private $_des;
	private $_cat;
	private $_subcat;	
	private $_mar;
	private $rutaDestino;
	private $_DB;

	public function productos(){
		$this->_DB=DB::getInstance();
	}

	public function agregarproducto()
	{
		$sql = 'INSERT INTO productos(Nombre_del_Producto) VALUES (:nombrepro)';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':nombrepro' => $this->_nompro));
		return $sentencia;
	}

	public function agregardetalle()
	{
		$sql = 'INSERT INTO detalle_producto(Valor,Descripcion,ruta,Id_productos,Id_marca,Id_categoria,Id_sub_categoria) VALUES (:valor,:des,:ruta,:prod,:mar,:cat,:subcat)';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':valor' => $this->_precio,':des' => $this->_des,':ruta' =>$this->rutaDestino,':prod' =>$this->_nompro,':mar' =>$this->_mar,':cat' =>$this->_cat,':subcat' =>$this->_subcat));
		return $sentencia;
	}
	public function llenarcomboproductos()
	{
		$sql = 'SELECT * FROM productos order by Nombre_del_Producto asc';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();	
	}

	public function llenarcombomarca()
	{
		$sql = 'SELECT * FROM marca order by Descripcion asc';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();	
	}

	public function categorias()
	{
		$sql = 'SELECT * FROM categoria';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	public function subcategorias()
	{
		$sql = 'SELECT * FROM sub_categoria where Id_categoria= :q';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute(array(':q'=> $this->_cat));
		return $sentencia->fetchAll();
	}

	public function codparaimg()
	{
		$sql = 'SELECT MAX(Id_Detalle_Producto) FROM detalle_producto';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	public function mostrardetalle(){
		$sql = 'SELECT (select Nombre_del_Producto from productos as p where p.Id_Productos=d.Id_Productos)Id_productos,Descripcion,Valor,Cantidad,(select Descripcion from marca as m where m.Id_Marca=d.Id_marca)Id_marca FROM detalle_producto as d';
		$sentencia = $this->_DB->prepare($sql);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	public function get_nompro() {
		return $this->_nompro;
	}

	public function get_precio() {
		return $this->_precio;
	}

	public function get_des() {
		return $this->_des;
	}
	public function set_nompro($_nompro) {
		$this->_nompro = $_nompro;
	}

	public function get_cat() {
		return $this->_cat;
	}
	public function get_subcat() {
		return $this->_subcat;
	}
	public function get_mar() {
		return $this->_mar;
	}
	public function getrutaDestino() {
		return $this->rutaDestino;
	}
	public function setrutaDestino($rutaDestino) {
		$this->rutaDestino = $rutaDestino;
	}
	public function set_mar($_mar) {
		$this->_mar = $_mar;
	}
	public function set_subcat($_subcat) {
		$this->_subcat = $_subcat;
	}
	public function set_cat($_cat) {
		$this->_cat = $_cat;
	}

	public function set_precio($_precio) {
		$this->_precio = $_precio;
	}

	public function set_des($_des) {
		$this->_des = $_des;
	}
}

?>