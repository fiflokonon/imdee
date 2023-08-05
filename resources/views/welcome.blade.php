<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Marketing</title>
    <link rel="icon" href="img/logoimdeewith.png" type="image/png">

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
        #inscription, #connexion {
            font-family: 'Poppins', sans-serif;
            color: white;
            width: 170px;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.2)
        }
        #connexion:hover{
            background-color: #65B06D;
        }
        #inscription:hover {
            background-color: #3A6083;
        }
        @media (max-width: 767px) {
            #logo
            {
                width: 200px !important;
            }

            .btn-container button {
                margin: 0 5px;
            }

            body{
                background-repeat: no-repeat;
                background-size: auto;
                background-image: url("img/Background dégradé.png");
            }
            #inscription, #connexion{
                margin: 10px;
            }
        }

    </style>
</head>

<body class="">
    <div class="container-fluid" style="margin-top: 150px">
        <div class="row justify-content-center my-5">
            <div class="col-md-6 text-center">
                <img src="img/logoimdeewith.png" alt="Logo" id="logo" class="img-fluid" style="width: 500px;">
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-lg-12 text-center">
                <a type="button" id="inscription" class="btn mx-3 rounded-pill"  href="{{ route('register') }}" style="background-color: #65B06D;"><strong>Inscription</strong></a>
                <a type="button" id="connexion" class="btn mx-3 rounded-pill" href="{{ route('login') }}" style="background-color: #3A6083;"><strong>Connexion</strong></a>
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
