<?php

$conn = mysql_connect("localhost:3307","root","PassWord1992");
mysql_select_db("mynewdatabase") or die(mysql_error());
$imageId=$_GET["image_id"];
$sql = "SELECT * FROM c_images WHERE imageId='$imageId'"; 
$result = mysql_query($sql);

?>

<html lang="he">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>העלאה לקרוסלה</title>

         <!-- Bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href="css/mystyle.css" rel="stylesheet" media="screen">
         <link href="css/styles.css" rel="stylesheet" media="screen">
         <link href="css/SignIn.css" rel="stylesheet" media="screen">
         <link href="css/ImageUp.css" rel="stylesheet" media="screen">

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
     
        <?php
        while($row = mysql_fetch_array($result)) {
        ?>
        
        <img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" alt="noText" style="width: 200px; height: 200px;">
        <form name="cust" id="custform" action="Submit.php" method="post"
              <?php
              $DebuggingFlag = FALSE;
              if($DebuggingFlag==FALSE) {
                  echo "onsubmit=return validateInfo()";
              }
             ?> 
            >
        </form>
        
        <?php
        }
        mysql_close($conn);
        ?> 
                
    </body>
    
</html>
