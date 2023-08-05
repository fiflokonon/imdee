<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Marketing</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("img/Background dégradé.png");
        }

        @media (max-width: 767px) {
            #logo
            {
                width: 200px !important;
            }

            .btn-container button {
                margin: 0 5px;
            }
        }

    </style>
</head>

<body class="bg-success">
<div class="container" style="margin-top: 150px;">
    <div class="row justify-content-center my-5">
        <div class="col-lg-4 float-start" style="margin-top: 80px; padding: 20px;">
            <img src="img/logoimdeewith.png" alt="Logo" id="logo" class="img-fluid" style="width: 400px;">
        </div>
        <div class="col-lg-6 float-end ">
            <div class="row justify-content-center">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-8 white_card pt-4" style="height: 300px;">
                    <form method="POST" action="{{ route('connexion') }}">
                        @csrf
                        <h4 class="text-center" style="color: #65B06D; font-weight: bolder; font-family: 'Poppins', sans-serif;">Se connecter</h4>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                        </div>
                        <div class="mb-3 float-end text-black-50">
                            <a href="" class="text-decoration-underline">Mot de passe oublié?</a>
                        </div>
                        <button type="submit" class="btn w-100 text-light" style="background-color: #3A6083">Connexion</button>
                        <div class="mb-3 mt-3 text-black-50 text-center">
                            Vous n'avez de compte? <a href="{{ route('register') }}" class="text-decoration-underline">S'inscrire</a>
                        </div>
                    </form>
                </div>
            </div>
            <!--<div class="white_card card_height_250">
                <div class="white_card_body">
                    <form>
                        <h2 class="text-center" style="color: green; font-weight: bolder; font-family: 'DejaVu Serif Condensed';">Se connecter</h2>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                        </div>
                        <div class="mb-3 float-end text-black-50">
                            <a href="" class="text-decoration-underline">Mot de passe oublié?</a>
                        </div>
                        <a type="submit" class="btn btn-primary w-100">Connexion</a>
                        <div class="mb-3 mt-3 text-black-50 text-center">
                            Vous n'avez de compte? <a href="{{ route('register') }}" class="text-decoration-underline">S'inscrire</a>
                        </div>
                    </form>
                </div>
            </div>-->
        </div>
    </div>
</div>
<script src="js/jquery1-3.4.1.min.js"></script>

<script src="js/popper1.min.js"></script>

<script src="js/bootstrap1.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>
<script src="js/chart.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/am_chart/amcharts.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>
<script src="vendors/chart_am/core.js"></script>
<script src="vendors/chart_am/charts.js"></script>
<script src="vendors/chart_am/animated.js"></script>
<script src="vendors/chart_am/kelly.js"></script>
<script src="vendors/chart_am/chart-custom.js"></script>

<script src="js/custom.js"></script>
</body>

</html>
