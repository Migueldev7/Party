<head>
    <style>
        body {
            font-family: 'Lato', sans-serif;
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

        .container {
            margin-top: 40px;
        }

        h2 {
            background-color: #e85562;
            text-align: center;
            color: white;
            border-radius: 5px;
        }

        h5 {
            text-align: center;
            color: black;
            border: 3px solid greenyellow;
        }

        .regra {
            background-color: rgb(224, 238, 132);
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -2;
        }

        h3 {
            color: greenyellow;
            text-align: center;
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
                <div class="card mt-2 mx-auto p-4 bg-dark">
                    <div class="card-body bg-dark">

                        <div class="container">
                            <h2>REGRAS DA FESTA</h1>
                                <div class="regra">
                                    <h5>Sejam todos bem vindos, antes de aproveitarmos no sabado aqui vai algumas regras importantes</h5>
                                    <ul>

                                        <li>PROIBIDO SAIR DO SALÃO DE FESTA COM BEBIDA</li>
                                        <li>CASO SAIA DO SALÃO SILENCIO NAS AREAS EM VOLTA</li>
                                        <li> PROIBIDO FICAR SEM CAMISETA/ROUPA</li>
                                        <li> PROIBIDO FUMAR NO CONDOMINIO
                                        <li>A PARTIR DAS 23:59 ABAIXAR A MUSICA E GRITARIA
                                    </ul>
                                </div>

                                <h3>Localização</h3>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=R. Hermann Spernau, 60 - Asilo, Blumenau - SC, 89037-506&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">https://mcpenation.com</a></div>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: center;
                                            width: 600px;
                                            height: 400px;
                                            margin-left: 24px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            width: 600px;
                                            height: 400px;
                                        }

                                        .gmap_iframe {
                                            width: 600px !important;
                                            height: 400px !important;
                                        }
                                    </style>
                                </div>

                        </div>

                    </div>
                    <form action="fim.php">
                        <button type="submit" class="btn d-block btn-success btn-send mx-auto">
                            CONCORDAR COM AS REGRAS!
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>