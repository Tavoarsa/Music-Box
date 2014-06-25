<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			background-image: url("http://blog.bharatbook.com/wp-content/uploads/2014/02/music-backgrounds.jpg");
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
			
		}

		.boxform {
			width: 300px;
			height: 50px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -280px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 35px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	
<!--	
 <form name="form" method="post" action="musicController/index" enctype="multipart/form-data">
   
    
<p><span class="Estilo2">Archivo de Audio:</p>
    <input type="file" name="file"  size="100" /><br>
    <input type="submit" name="btn" value="Subir"  size="100" />
    <input type="button" name="btn" value="Descargar"  size="100" />
</form> 

<form action="musicController.php" method="post">
<p>
Escriba su nombre:<br>
<input type="text" name="nombre" size="30">
</p>
<p>
Elija el archivo de audio para convertir:<br>
<input type="file" name="ubicacion" size="40">
</p>
<div>
<input type="submit" value="Subir">
<input type="button" value="Descargar">
</div>
</form>--><div class="boxform">
{{ Form::open(array('url' => 'datos', 'role' => 'form')) }}
	{{ Form::label('nombre', 'Nombre:')}}
    {{ Form::text('nombre', '')}}<br><br>
    {{ Form::label('archivo', 'Elija el archivo para convertir:')}}
    {{ Form::file('archivo', '')}}<br><br>
    {{ Form::submit('subir', array('id' => 'submit'))}}
    {{ Form::button('descargar', array('id' => 'button'))}}
	{{ Form::close() }}
	</div>


</body>
</html>

