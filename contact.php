<html lang="he" >
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>צור קשר</title>

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
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="http://code.jquery.com/jquery.min.js">
	 </script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js">
	 </script>
         
         <form class="form-horizontal" role="form" action="submit.php" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">שם הפונה</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputEmail2" name='FullName' placeholder="שם הפונה">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">כתובת דוא''ל</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3" name='Email' placeholder="כתובת דוא''ל">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">טלפון</label>
    
    <div class="col-sm-10" >
      <input type="phone" class="form-control" id="inputPassword4" name='PhoneNunber' placeholder="טלפון">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">תיאור הפנייה</label>
    <div class="col-sm-10">
        <input type="textarea" class="form-control" id="inputPassword5" name='RequestInfo' placeholder="תיאור הפנייה">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
   </body>
</html>

