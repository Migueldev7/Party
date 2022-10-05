<?php

$conn = mysqli_connect('localhost:8889', 'teste', 'admin', 'festa');


<?php
$conn = mysqli_connect('localhost:8889', 'teste', 'admin', 'festa');
$tarefas = mysqli_query($conn, "SELECT * FROM convidado")
    or die("Falied to query database");
while ($tarefa = mysqli_fetch_assoc($tarefas)) {
    echo '<li> <p> ' . $tarefa['name'] . '</p></li>';
}
?>