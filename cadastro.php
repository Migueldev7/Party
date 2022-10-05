<?php

$conn = mysqli_connect('localhost:8889', 'teste', 'admin', 'festa');

$name = $_REQUEST['name'];
$convidado = $_REQUEST['convidado'];
$bebida1 = $_REQUEST['bebida1'];
$bebida2 = $_REQUEST['bebida2'];
$recado = $_REQUEST['recado'];


$query = "INSERT INTO `convidado`( `name`,`convidado`, `bebida1`, `bebida2`,`message`) VALUES ('$name','$convidado','$bebida1','$bebida2','$recado')";

mysqli_query($conn, $query);

header('location: regras.php');
