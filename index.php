<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festa-08/10</title>
    <style>
        body {
            background-color: red;
        }

        h1 {
            margin-bottom: 40px;
        }

        label {
            color: #333;
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
            color: blue;

        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;

        }



        .card {
            margin-left: 10px;
            margin-right: 10px;
        }

        li {
            list-style: none;

        }

        h1 {
            border-radius: 10px;
            text-align: center;

        }

        .regra {
            background-color: rgb(224, 238, 132);
        }

        .container {
            margin-top: 30px;
        }

        h5 {
            background-color: violet;
            border-radius: 5px;

        }

        img {
            width: 200px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -2;
        }

        body {
            position: relative;
        }

        body::before {
            content: '';
            inset: 0;
            position: fixed;
            z-index: -1;
            background-color: rgba(0%, 0%, 0%, 0.5);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4">
    </video>
    <div class="container">

        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mx-auto py-0 bg-light">
                    <div class="card-body pt-0 px-md-4 px-1 bg-ligth">
                        <div class="container">
                            <h1>Welcome to the party, baby!</h1>
                            <form id="contact-form" role="form" action="cadastro.php" method="post">
                                <div class="controls">
                                    <div class="row gy-3 mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Seu Nome</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Coloca seu nome aqui pf..." required="required" data-error="Firstname is required.">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Convidado</label>
                                                <input id="form_lastname" type="text" name="convidado" class="form-control" placeholder="O do convidado vai aqui...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-3 mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Bebida Principal</label>
                                                <select id="form_need" name="bebida1" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Bebida 1--</option>
                                                    <option>Vodka</option>
                                                    <option>Vinho campo largo</option>
                                                    <option>Whysk</option>
                                                    <option>Ernegetico</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Acompanhamento</label>
                                                <select id="form_need" name="bebida2" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Bebida 2--</option>
                                                    <option>Vodka</option>
                                                    <option>Vinho campo largo</option>
                                                    <option>Whysk</option>
                                                    <option>Ernegetico</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row gy-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Deixe um Recadinho XD</label>
                                                <textarea id="form_message" name="recado" class="form-control" placeholder="Era uma vez...." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-center my-4">
                                            <div class="col-md-6 my-auto">
                                                <h5 class="text-center px-2 p-1">
                                                    Faça seu pix aqui!
                                                    <!-- <span class="d-none d-md-inline">&#8594;</span>  -->
                                                    <span class="">&#8595;</span> 
                                                </h5>
                                            </div>

                                            <div class="col-md-6 text-center">
                                                <img src="codigo.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn d-block btn-primary btn-send mx-auto">
                                    Confirmar Presença
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>