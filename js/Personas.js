const _private = new weakmap()


class Persona{


	constructor(nombre,apellido){
		
		const properties = {
			this._nombre: nombre,
			this._apellido:apellido
		}

		_private.set(this,{properties});
		
	}

	get nombre(){
		return _private.get(this).properties['_nombre'];
	}

	set nombre(newNombre){
		return _private.get(this).properties['_nombre']=nuevoNombre;
	}

	get apellido(){
		return _private.get(this).properties['_apellido'];
	}

	set apellido(newApellido){
		return _private.get(this).properties['_apellido']=nuevoNombre;
	}
}


Export class Usuario extends Persona{

	constructor(nombre,apellido,escuela,estiloPractica,usuario,clave,rol){
		
		super(nombre,apellido);

		const properties={
			this._escuela:escuela;
			this._estilo:estiloPractica;
			this._usuario:usuario;
			this._clave:clave;
			this._rol:rol;
		}
		_private.set(this,{properties});	
	}

	agregarCategoria(newCategoria=[]){
		this.categorias.push(newCategoria)
	}

	get escuela(){
		return _private.get(this).properties['_escuela'];
	}

	set escuela(newEscuela){
		return _private.get(this).properties['_escuela']=nuevoNombre;
	}

	get estilo(){
		return _private.get(this).properties['_estilo'];
	}

	set estilo(newEstilo){
		return _private.get(this).properties['_estilo']=nuevoNombre;
	}

	get usuario(){
		return _private.get(this).properties['_usuario'];
	}

	set usuario(newUsuario){
		return _private.get(this).properties['_usuario']=nuevoNombre;
	}

	get clave(){
		return _private.get(this).properties['_clave'];
	}

	set clave(newClave){
		return _private.get(this).properties['_clave']=nuevoNombre;
	}

	get rol(){
		return _private.get(this).properties['_rol'];
	}

	set rol(newRol){
		return _private.get(this).properties['_rol']=nuevoNombre;
	}

	

}


Export class Competidor extends Persona{

	constructor(nombre,apellido,edad,genero,categorias){
		super(nombre,apellido);
		
		const=properties{
			this._edad:edad;
			this._genero:genero;
			this._categorias:categorias;
		}
		
		_private.ser(this,{properties});
	}

	get edad(){
		return _private.get(this).properties['_edad'];
	}

	set edad(newEdad){
		return _private.get(this).properties['_edad']=nuevoNombre;
	}

	get genero(){
		return _private.get(this).properties['_genero'];
	}

	set genero(newGenero){
		return _private.get(this).properties['_genero']=nuevoNombre;
	}

	get categorias(){
		return _private.get(this).properties['_categorias'];
	}

	set categorias(newCategoria){
		return _private.get(this).properties['_categorias']=nuevoNombre;
	}
}



