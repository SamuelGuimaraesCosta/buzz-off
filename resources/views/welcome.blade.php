<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buzz-Off</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet">
</head>

<body class="antialiased bg-dark">
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-2" href="#">
            <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" width="40" height="34" class="d-inline-block align-text-top">
        </a>
        <span class="navbar-text flex-fill text-center fw-bold fs-4 border-bottom border-top">
            Seja Bem-vindo(a) ao Buzz-Off!
        </span>
    </nav>
    <div class="container-fluid bg-secondary d-flex justify-content-center align-items-center vh-100">
        <div class="card bg-dark">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="p-2 mx-autos">
                    <span class="fw-bold fs-2 align-baseline me-5 border-bottom text-light">Usuário: Samuel Guimarães da Costa</span>
                    <button type="button" class="btn btn-outline-warning p-2" onclick="location.reload();">
                        <i class="fa fa-arrow-right fa-lg"></i> Logout
                    </button>
                    <button type="button" class="btn btn-outline-primary p-2" onclick="location.reload();">
                        <i class="fa fa-rotate-right fa-lg"></i> Atualizar
                    </button>
                    <button type="button" class="btn btn-outline-danger p-2" onclick="location.reload();">
                        <i class="fa fa-power-off fa-lg"></i> Desligar
                    </button>
                </div>
            </div>
            <div class="card-body">


                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="border border-primary rounded text-center">
                                <div class="p-2 ">
                                    <h5 class="text-light">Ativação</h5>
                                    <input type="radio" class="btn-check" name="options-base" id="option0" autocomplete="off" checked>
                                    <label class="btn btn-outline-light"" for=" option0">Manual</label>

                                    <input type="radio" class="btn-check" name="options-base" id="option1" autocomplete="off">
                                    <label class="btn btn-outline-light"" for=" option1">Auto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="border border-primary rounded text-center">
                                <div class="p-2">
                                    <h5 class="text-light">LED`s</h5>
                                    <button type="button" class="btn btn-success">
                                        <i class="bi bi-lightbulb-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-success">
                                        <i class="bi bi-lightbulb-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-success">
                                        <i class="bi bi-lightbulb-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-success">
                                        <i class="bi bi-lightbulb-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="bi bi-lightbulb-off"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="border border-primary rounded text-center">
                                <div class="p-2">
                                    <h5 class="text-light">Som</h5>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">6 dB: Baixa Atividade</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar fixed-bottom navbar-dark bg-dark">
        <span class="navbar-text flex-fill text-center fw-bold fs-4 border-bottom border-top">
            Lucas Danilo | João Victor | Pedro Igor | Samuel Guimarães
        </span>
    </nav>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>