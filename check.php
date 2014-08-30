
<html lang="he">
<head>
<meta http-equiv="Content-Type" content="text/html">
 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href="css/mystyle.css" rel="stylesheet" media="screen">
         <link href="css/styles.css" rel="stylesheet" media="screen">
<title>Show images in folder</title>
<style type="text/css">
body {
    margin: 0 auto 20px;
    padding: 0;
    background: #acacac;
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
}
table {
    width: 100%;
}
img {
    display: block;
    margin: 20px auto 10px;
    max-width: 900px;
    outline: none;
}
img:active {
    max-width: 100%;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="http://code.jquery.com/jquery.min.js">
	 </script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js">
	 </script>
        <?php
        
$salt = '4ElBv9_ xduzWMF^ebaX+ZY Epk0ChtVyszLNTh2iIHovCJk-c4wuyIb95Nh'; // Random hard to guess string

$user = 'gali';   // stored user name
$hash = '4176428148bf5358975c0b8df8cc9dbb9645ace3';  // stored password galinaim

// http://online-code-generator.com/sha1-hash-with-optional-salt.php for changing password with salt
$input_user = $_POST['UN'];   // in this example, should be "user"
$input_pass = $_POST['Pass'];   // in this example, should be "foo"

if ($user === $input_user && sha1( $input_pass . $salt ) === $hash) {

ImageUploadWizard();

} else {
   echo "\n Wrong password...";
}
/*
            echo $_POST['UN'];
            echo $_POST['Pass'];
            if((strcmp ( "gali" , $_POST['UN']) == 0 ) &&
                    (strcmp ( "123" , $_POST['Pass']) == 0 ))      
            {
                echo "You connected!";
            }
            else
            {
               
                 echo "Wrong details";
            }

*/
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
//Wizaed for uploading images
function ImageUploadWizard() {
    
 echo
    ' <h1> Carousel image preview</h1>
    <!--carousel -->
<div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" align="middle" style="padding-top: 60px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images\CarouselImages\0.jpg" alt="First" width="875px" height="375px">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images\CarouselImages\1.jpg" alt="Third" width="875px" height="375px">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	<div class="item">
      <img src="images\CarouselImages\2.jpg" alt="Forth" width="875px" height="375px">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	<div class="item">
      <img src="images\CarouselImages\3.jpg" alt="Fifth" width="875px" height="375px">
      <div class="carousel-caption">
        ...
      </div>
    </div>
      
      <div class="item">
      <img src="images\CarouselImages\4.jpg" alt="sixth" width="875px" height="375px">
      <div class="carousel-caption">
        ...
      </div>
    </div>

  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
<h1> Choose images:</h1>';
    
$folder = 'images/CarouselImages/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
echo '<table>';
for ($i = 0; $i < $count; $i++) {
    echo '<tr><td>';
    echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'" /></a>';
    echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
    echo   '<form enctype="multipart/form-data" action="uploadImages.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    Choose a file to upload:
    <br>
    <br>
    <input name="uploaded_file" type="file" style="padding-right: 600px;"/>
        <br>
    <br>
    <input type="submit" value="uploadImages"/>

    <input type="hidden" name="imageName" value="'.$i.'">
    
  </form> ';
    echo '</td></tr>';
    
}
echo '</table>';
}


?>
        
    </body>

</html>



