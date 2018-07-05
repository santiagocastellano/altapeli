<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<style>
	.primero,.segundo {
		display:none;
		padding:5px;
		border:1px solid #ccc;
		background-color:#f1f1f1;
		position:relative;
		width:200px;
	}
	#segundo {
		position:absolute;
		top:100px;
	}
	/* Al pasar el mouse por encima del div mostramos el div con la
		clase ".primero". Esta clase, tiene que estar dentro del id
		"primero" para que pueda funcionar
	 */
	#primero:hover .primero {
		display:block;
	}
	#segundo:hover .segundo {
		display:block;
	}
	</style>
</head>
 
<body>
	<ul>
		<li id="primero">mostrar el primer div oculto
			<div class="primero">Contenido del primer div</div>
		</li>
		<li id="segundo">mostrar el segundo div oculto
			<div class="segundo">Contenido del segundo div</div>
		</li>
	</ul>
</body>
</html>