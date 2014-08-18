<?php
if(count($_FILES) > 0) {
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        mysql_connect("localhost:3307","root","PassWord1992");
        mysql_select_db ("mynewdatabase");
        $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
        $imageDesc = $_POST["desc"];
        $sql = "INSERT INTO c_images(imageType ,imageData,imageDesc)
            VALUES('{$imageProperties['mime']}', '{$imgData}','$imageDesc')";
            $current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
            if(isset($current_id)) {
                header("Location: listImages.php");
            }
    }
}
?>

<html lang="he">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>העלאת תמונות</title>

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
        
        <div class="container">
            <form class="form-signin" role="form" name="frmImage" enctype="multipart/form-data" action="" method="post">
                <h2 class="form-signin-heading">העלאת תמונות</h2>
                <input type="file" class="form-control" name="userImage" placeholder="אנא בחר תמונה" required="" autofocus="">
                <input type="textarea" class="form-control" name="desc" placeholder="אנא רשום תיאור תמונה" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">העלאה</button>
                <div>
                    <a href="AllImages.php"><button class="btn btn-lg btn-primary btn-block">לצפייה בכל התמונות</button></a>
                </div>
            </form>

        </div> <!-- /container -->
        
    </body>
</html>