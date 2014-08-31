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
    <div align="center">
    <h2 style="text-align: center;"class="form-signin-heading">תודה רבה על פנייתך</h2>
    <h3 style="text-align: center;"class="form-signin-heading">בקשתך תענה בהקדם</h3>
    <br>
    
        <a align="middle" href="index.html" class="btn btn-primary btn-lg active" role="button">לחזרה לדף הבית</a>
        <br>
        <br
        <p> 
            <a herf="index.html"> 
        <img src="images\YoelNaimsketch.jpg" alt="YoalNaim" align="middle" width="875px" height="375px" >
    </a></p>
    </div>

    <script>

    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

    </body>
</html>

<?php

// Pear Mail Library
require_once "Mail.php";

$from = '<from.gmail.com>';
$to = '<yoel@yoelnaim.com>';
$subject = "You got request from".$_POST['FullName'];
$body = "Hi,\n You received request from: " .$_POST['FullName'] 
        ."\n Email: ".$_POST['Email']."\n Phone".$_POST['PhoneNunber'].
        "\n Message: \n".$_POST['RequestInfo'] ;

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'out.bezeqint.net',
        'port' => '25',
        'auth' => true,
        'username' => 'yoel1',
        'password' => 'zvin1963'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
   
} else {
   
}

