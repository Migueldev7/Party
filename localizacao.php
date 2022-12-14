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
                        <br>
                        <form action="regras.php">
                            <button type="submit" class="btn d-block btn-success btn-send mx-auto">
                                Regras
                            </button>
                        </form>
                        <form action="fim.php">
                            <button type="submit" class="btn d-block btn-primary btn-send mx-auto">
                                confirmados
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>