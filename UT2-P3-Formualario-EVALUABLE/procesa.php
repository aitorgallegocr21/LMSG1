<?php
 $nombre =   isset( $_GET['nombre'] ) ? $_GET['nombre'] : '';
 $apellidos =   isset( $_GET['apel'] ) ? $_GET['apel'] : '';
 $pass= isset($_GET['password']) ? $_GET['password'] :'';
 $edad =   isset( $_GET['edad'] ) ? $_GET['edad'] : '';
 $sexo =  isset( $_GET['sexo'] ) ? $_GET['sexo'] : '';
 $correo =  isset( $_GET['correo'] ) ? $_GET['correo'] : '';
 $poblacion =  isset( $_GET['poblacion'] ) ? $_GET['poblacion'] : '';
 $desc =  isset( $_GET['desc'] ) ? $_GET['desc'] : '';
 $condiciones =  isset( $_GET['condiciones'] ) ? $_GET['condiciones'] : '';
 $masinf=   $_GET['masinf'];
 $foto =  isset( $_GET['foto'] ) ? $_GET['foto'] : '';
 
 $contenido= '
<html> 
<head> 
  	<title>Restringir por edad</title> 
</head> 

<body> 
 <p>Nombre: '.$nombre.';</p>
 <p>Apellidos: '.$apellidos.';</p>

 <p>Edad: '.$edad.';</p>
 <p>sexo: '.$sexo.';</p>
 <p>email: '.$correo.';</p>
 <p>población: '.$poblacion.';</p>
 
 <p>Descripción: '.$desc.';</p>
 <p>Condiciones: '.$condiciones.';</p>
 
 <p>Más información: '.$masinf.';</p>
 <p>Foto: '.$foto.';</p>
 
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body> 
</html>';
/*

<?php 
$nombre =   isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
$apellidos =   isset( $_POST['apellidos'] ) ? $_POST['apellidos'] : '';
$edad =   isset( $_POST['edad'] ) ? $_POST['edad'] : '';
$estudios =  isset( $_POST['estudios'] ) ? $_POST['estudios'] : '';
$edad =  isset( $_POST['edad'] ) ? $_POST['edad'] : '';
$curso =  isset( $_POST['curso'] ) ? $_POST['cursos'] : '';
$opciones =  isset( $_POST['opciones'] ) ? $_POST['opciones'] : '';
$marcas =  isset( $_POST['marcas'] ) ? $_POST['marcas'] : '';
$resultado =  isset( $_POST['resultado'] ) ? $_POST['resultado'] : '';
$descripcion =  isset( $_POST['descripcion'] ) ? $_POST['descripcion'] : '';
$contenido = '
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <bod
                        <p>Titulo: '.$titulo.' </p>
                        <p>Técnica: '.$tecnica.' </p>

                         <hr>

                    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	