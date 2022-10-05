<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>


<div class="container">
    <div class=" text-center mt-5 ">

        <h1>AOBA QUE BOM QUE VC CONFIRMOU!</h1>



    </div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <?php
                        $conn = mysqli_connect('localhost:8889', 'teste', 'admin', 'festa');
                        $tarefas = mysqli_query($conn, "SELECT * FROM convidado")
                            or die("Falied to query database");
                        while ($tarefa = mysqli_fetch_assoc($tarefas)) {
                            echo '<li><h1>' . $tarefa['name'] . '</h1> ' . $tarefa['message'] . ' <p></p></li>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>