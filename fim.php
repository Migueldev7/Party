<head>
    <style>
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -2;
        }

        h4 {
            color: white;
            margin-left: 18rem;
        }

        h3 {
            color: greenyellow;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<body>
    <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-dark">
                    <div class="card-body bg-dark">

                        <div class="confirmados">
                            <h3>CONFIRMADOS</h3>
                            <?php
                            $conn = mysqli_connect('localhost:8889', 'teste', 'admin', 'festa');
                            $tarefas = mysqli_query($conn, "SELECT * FROM convidado")
                                or die("Falied to query database");
                            while ($tarefa = mysqli_fetch_assoc($tarefas)) {
                                echo '<table>
                                    <tr>
                                        <td><h4>' . $tarefa['name'] . '</h4></td>
                                     </tr>
                            </table>';
                            }
                            ?>
                        </div>
                        <form action="regras.php">
                            <button type="submit" class="btn d-block btn-success btn-send mx-auto">
                                Regras
                            </button>
                        </form>
                        <form action="localizacao.php">
                            <button type="submit" class="btn d-block btn-primary btn-send mx-auto">
                                Localização
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>