<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.leaderfinances.com/en/# by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 14:39:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Are you eligible for the loan? Check your eligibility for credit now!">
    <meta name="keywords" content="Leader Finance, leader, finance, financial, credit, loan, Personlig lån, Consumer Credit, Auto Loan Motorcycle, Automobile Credit, Loan, Student Loan, Mortgage, Loan, Investment Loan, Debt Consolidation, Short term, long-term credit, medium-term credit">
    <title>Kalkulator for lånekvalifisering | Younes Solutionss</title>
    <!-- Bootstrap -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
   <?php include "head.php"; ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Hjmen</a></li>
                            <li class="active">Kalkulator for lånekvalifisering</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <h1 class="page-title">Kvalifikasjonskalkulator</h1>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="btn-action"> <a href="get_loan.php" class="btn btn-default">Få et lån nå</a> </div>
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
                    <div class="loan-eligibility-block">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="mb20">Sjekk hvorvidt du er lånbar</h2>
                                <form name="formval2" class="form-horizontal loan-eligibility-form">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="input" class="control-label">Type lån etterspurt</label>
                                            <div class="input-group">
												<select id="input" class="form-control" name="int_rate2" autocomplete="off" required="required">
													<option value="">Velg din formel</option>
													<option value="2.5">Personlig lån</option>
													<option value = "3.5"> Billån </option>
                                                    <option value = "2.7"> Utdanningslån </option>
                                                    <option value = "1.7"> Eiendomslån </option>
                                                    <option value = "2"> Investeringslån </option>
                                                    <option value = "3"> Gjeldskonsolidering </option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="input" class="control-label">Søknadsbeløp</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$ / €</span>
                                                <input type="number" min="0" class="form-control input-sm" id="input" name="pr_amt2" placeholder="Angi lånet du har søkt om" autocomplete="off" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="input" class="control-label">Tilbakebetalingstid</label>
                                            <input type="number" min="0" max="20"class="form-control" id="input" name="period2" placeholder="(på flere år)" autocomplete="off" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="input" class="control-label">Månedlig nettoinntekt</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$ / €</span>
                                                <input type="number" min="0" class="form-control" id="input" name="NetIncome" placeholder="Legg inn den månedlige nettoinntekten" autocomplete="off" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="input" class="control-label">Eksisterende låneforpliktelser</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$ / €</span>
                                                <input type="number" min="0" value="0" class="form-control" id="input" Name="ExLoan" placeholder="(per måned)" autocomplete="off" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="button" class="btn btn-default" onclick="eligiable()">Check</button>
                                            <button type="reset" class="btn btn-primary">Nullstille </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
						
                            <div class="col-md-6">
                                <h2 class="mb40">Er du kvalifisert for hvor mye?</h2>
                                <div class="loan-eligibility-info">
                                    <form name="formval3" class="">
                                        <div class="form-group">
                                            <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text" name="field13">
                                            </output>
                                            <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-amount" name="field11"></output>
                                        </div>
                                        <div class="form-group">
                                            <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text" name="field12"></output>
                                        </div>
                                    </form>
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
    <script type="text/javascript" src="js/loan-elgiblity.js"></script>
</body>


<!-- Mirrored from www.leaderfinances.com/en/# by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 14:39:52 GMT -->
</html>
