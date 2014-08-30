
<html lang="he">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>בדיקה</title>

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
        
        <?php
        
       
            
            if((strcmp ( "gali" , $_POST['UN']) == 0 ) &&
                    (strcmp ( "123" , $_POST['Pass']) == 0 ))      
            {
                echo "You connected!";
            }
            else
            {
               
                 echo "Wrong details";
            }

/*
 
$connect = mysql_connect("localhost:3307", "root", "PassWord1992");

if(!$connect){

die(mysql_error());

}
else {
    echo "You are connected! ";
}



//Selecting database

$select_db = mysql_select_db("testing", $connect);

if(!$select_db){

die(mysql_error());

}
else {
    echo "Very connected!";
}

$User = $_POST['sign']['UN'];
$Password = $_POST['sign']['Pass'];

echo $User;
echo $Password;
*/
function SignIn() {
    
session_start(); //starting the session for user profile page

if(!empty($_POST['UN'])) {
    $query = mysql_query("SELECT * FROM user where UserName = '$User' AND Password = '$Password'") or die(mysql_error());
    $row = mysql_fetch_array($query) or die(mysql_error());
    
    if(!empty($row['UserName']) AND !empty($row['Password'])) {
        $_SESSION['UserName'] = $row['Password'];
        echo "ההתחברות הושלמה בהצלחה";
        echo "<a href='images.php'><button class='btn btn-lg btn-primary btn-block' type='submit'>מעבר לקבצי התמונות</button></a>";
    }
    
    else {
        echo "ההתחברות לא צלחה. אנא נסו שוב.";
    }
}
}

if(isset($_POST['submit'])) {
    SignIn();
}
?>
        
    </body>

</html>



