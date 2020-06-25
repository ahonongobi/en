<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.leaderfinances.com/en/loan-calculator.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 14:39:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Simulate your credit and compare offers. We are the number 1 in funding worldwide.">
    <meta name="keywords" content="Leader Finance, leader, finance, financial, credit, loan, Personal Loan, Consumer Credit, Auto Loan Motorcycle, Automobile Credit, Loan, Student Loan, Mortgage, Loan, Investment Loan, Debt Consolidation, Short term, long-term credit, medium-term credit">
    <title>Lånesimulator | Younes Solutions</title>
    <!-- Bootstrap -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-slider.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="animsition">

    <?php include "head.php"; ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Hjmen</a></li>
                            <li class="active">Lånesimulator</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <h1 class="page-title">Lånesimulator</h1>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="btn-action"> <a href="get_loan.php" class="btn btn-default">Få et lån nå</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li><a href="#">Kalkulator for lånekvalifisering</a></li>
                            <li><a href="loan-calculator.php">Lånesimulator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light pinside40 outline">
                                        <span>Beløp på kreditt </span>
                                        <strong><span class="pull-right" id="la_value">1000</span></strong>
                                        <input type="text" data-slider="true" value="1000" data-slider-range="1000,500000" data-slider-step="1000" data-slider-snap="true" id="la">
                                        <hr>
                                        <span>Varighet (måneder) <strong><span class="pull-right"  id="nm_value">12</span> </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="12" data-slider-range="12,360" data-slider-step="12" data-slider-snap="true" id="nm">
                                        <hr>
                                        <span>Gjeldende rente %<strong><span class="pull-right"  id="roi_value">3</span>
									   </strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
									    <div class="col-md-12 ">
                                            <div class="bg-light pinside30 outline">
                                               Beløp på kreditt
                                                <h2 id='tbl_la' class="pull-right"></h2>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="bg-light pinside30 outline">
                                                Månedlig
                                                <h2 id='emi' class="pull-right"></h2>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="bg-light pinside30 outline">
                                               Total interesse
                                                <h2 id='tbl_int' class="pull-right"></h2>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="bg-light pinside30 outline">Totalt beløp som skal tilbakebetales
                                                <h2 id='tbl_full' class="pull-right"></h2></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="get_loan.php" class="btn btn-default">Abonner nå !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
    </div>
    </div>
    <?php  include "footer.php"; ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menumaker.js"></script>
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/simple-slider.js"></script>
    <script type="text/javascript" src="js/calculator.js"></script>
</body>


</html>
