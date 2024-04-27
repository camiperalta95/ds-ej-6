<?php
$nombre= $_POST['n'];
$apellido= $_POST['ap'];
$documento= $_POST['doc'];
$domicilio= $_POST['dom'];
$localidad= $_POST['lo'];
$provincia= $_POST['pro'];
$fechadenacimiento= $_POST['fe'];
$telefono= $_POST['tel'];
$email= $_POST['email'];

echo 'Los datos ingresados son:';
echo '<br>';
echo 'Nombre:' .$nombre;
echo '<br>';
echo 'Apellido:' .$apellido;
echo '<br>';
echo 'Documento' .$documento;
echo '<br>';
echo 'Domicilio' .$domicilio;
echo '<br>';
echo 'localidad' .$localidad;
echo '<br>';
echo 'provincia' .$provincia;
echo '<br>';
echo 'fecha de nacimiento' . $fechadenacimiento;
echo '<br>';
echo 'telefono' . $telefono;
echo '<br>';
echo 'email' .$email;

