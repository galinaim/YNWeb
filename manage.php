<html lang="he">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>כניסת מנהלים</title>

         <!-- Bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href="css/mystyle.css" rel="stylesheet" media="screen">
         <link href="css/styles.css" rel="stylesheet" media="screen">
         <link href="css/SignIn.css" rel="stylesheet" media="screen">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <div class="container">

        <form class="form-signin" role="form" name="sign" action="check.php" method="post" onsubmit="validate1();">
        <h2 class="form-signin-heading">כניסת מנהלים</h2>
        <input type="textarea" class="form-control" name="UN" placeholder="שם משתמש" required="" autofocus="">
        <input type="password" class="form-control" name="Pass" placeholder="סיסמה" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">כניסה</button>
      </form>

    </div> <!-- /container -->

    <script>

    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

    </body>
</html>