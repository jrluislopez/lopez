
<link rel="stylesheet" type="text/css" href="fondo.css">
                <div class="fond">
<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $basededatos ="lopez";

        $conexion = mysqli_connect($host, $username, $password, $basededatos);


        if($conexion->connect_errno > 0){
    die('Error: No es posible establecer la conexión: [' . $link->connect_error . ']');
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, nombre, nombrereal, poderes, primeraaparicion, bio FROM equipoazul");
  $stmt->execute();
}

$id=$conexion -> real_escape_string($_POST['id']);
$extraerdato = $conexion->query("SELECT * FROM equipoazul where id=$id");
$fetch = mysqli_fetch_array($extraerdato);
$id = $fetch['id'];
$nombre = $fetch['nombre'];
$nombrereal = $fetch['nombrereal'];
$poderes = $fetch['poderes'];
$primeraaparicion = $fetch['primeraaparicion'];
$bio = $fetch['bio'];
$imagen = $fetch['imagen'];

  ?>

<center> <div class="personaje">
  <div class="nombre">Nombre Clave: <?php echo $nombre = $fetch['nombre']; ?><br></div> <br>
  <div class="nombre" >Nombre Real: <?php echo $nombrereal = $fetch['nombrereal']; ?><br></div><br>
  <div class="nombre">Poderes: <?php echo $poderes = $fetch['poderes']; ?><br></div><br>
  <div class="nombre">Primera Aparicion: <?php echo $primeraaparicion = $fetch['primeraaparicion']; ?><br></div><br>
  <div class="nombre">Bio: <?php echo $bio = $fetch['bio']; ?></div><br>
    <div class="foto"  ><img width="500" src="data:image/jpeg;base64,<?php echo  base64_encode($fetch['imagen']); ?>"></div>
<body background="espacio.gif">
</div> </center>
</div>
<!--hecho por lopez->