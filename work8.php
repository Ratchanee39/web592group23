<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/anime/ani-9/ani879.ani), url(http://cur.cursors-4u.net/anime/ani-9/ani879.png), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2009/04/13/super-kawaii-cute-cat-kaoani.html" target="_blank" title="Super Kawaii Cute Cat Kaoani"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Super Kawaii Cute Cat Kaoani" style="position:absolute; top: 0px; right: 0px;" /></a>
<!doctype html>
<?php
error_reporting(0);
 $appid = "web592group23.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='main';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }
 
 use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}

 
?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?= $page ?> </title>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <link rel="stylesheet"
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>


    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
 <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">MBPJ Cartoon online </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="work8.php">หน้าหลัก</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=gartoon">การ์ตูนทั้งหมดในเว็บ</a>
                    </li>
					<li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=gartoonfan">การ์ตูนแฟนตาซี</a>
                    </li>
					<li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=gartoonfing">การ์ตูนต่อสู้</a>
                    </li>
					<li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=gartooncommady">การ์ตูนคอมเมดี้</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=movie">Movie ตอนพิเศษ</a>
                    </li>
					 <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=game"> game Cartoon</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=about">ติดต่อเรา</a></h5>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<center><br>
	<marquee behavior="alternate" direction="up" width="80%">
	<marquee direction="right" behavior="alternate"><h1 style="color:#FF6600"><br>Welcome to the MBPJ Cartoon online </h1></marquee></marquee>
                <hr>
               <h4 style="color:#FF6600">มีการ์ตูนให้เลือกชมมากมายทั้ง การ์ตูน ซับไทย พากย์ไทย Movie ตอนพิเศษ และการ์ตูนที่จบแล้ว</h4>
				<br>
<div class="row">
<div id="home" align="center">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
   <li data-target="#myCarousel" data-slide-to="4"></li>
   <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active"> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ACjY37mquNI" frameborder="0" allowfullscreen> alt="banner" class="picz"</iframe></a>=
        </div>


        <!-- #Item 1 -->
 
        <!-- Item 1 -->
        <div class="item">
          <a href="conbuil.php"> <iframe width="560" height="315" src="https://www.youtube.com/embed/gpId-8EQn28" frameborder="0" allowfullscreen> alt="banner" class="picz"</iframe></a>
        </div> 
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
           <a href="confac.php"><iframe width="560" height="315" src="https://www.youtube.com/embed/lXavedXHHPk" frameborder="0" allowfullscreen>alt="banner" class="picz"</iframe> </a>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 --> 
        <div class="item">
           <a href="connoc.php"><iframe width="560" height="315" src="https://www.youtube.com/embed/sIZ5xw84mWQ" frameborder="0" allowfullscreen> alt="banner" class="picz"</iframe></a>
        </div>
		
		 <!-- Item 1 -->
        <div class="item">
           <a href="conste.php"><iframe width="560" height="315" src="https://www.youtube.com/embed/9upSmXCyUCo" frameborder="0" allowfullscreen> alt="banner" class="picz"</iframe></a>
        </div>
        <!-- #Item 1 -->

	 <!-- Item 1 -->
        <div class="item">
           <a href="constes.php"><iframe width="560" height="315" src="https://www.youtube.com/embed/-g7_egpVI7U" frameborder="0" allowfullscreen>alt="banner" class="picz"</iframe></a>
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left" style="background-color:#ff0; padding-left:8px; padding-right:10px; padding-top:5px; padding-bottom:5px;"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right" style="background-color:#ff0; padding-left:8px; padding-right:10px; padding-top:5px; padding-bottom:5px;""></i></span></a>
    </div></center>
<!-- #Slider Ends -->
<br><br>

<body background = "header.jpg" bgproperties="fixed">

<div class="container">
<div class="col-sm-3">
<?php panel_include("User","work8_user.php"); ?>
<?php panel_include("Menu","work8_menu.php"); ?>
</div> 
<div class="col-sm-9">
<?php panel_include($title,"work8_body.php" ,"primary"); ?>
</div>
</div>

<style>
   .nav-pills li.active a{
     background:#FF99CC	;
   }
   .panel{
   background: url(hh.jpg);
box-shadow: 5px 20px 60px #aea;
   }
   .panel-primary .panel-heading{
     background:#87CEFA;
box-shadow: 5px 20px 60px #aea;
   }
.panel-default .panel-heading{
     background:#87CEFA;
box-shadow: 5px 20px 60px #aea;
   }



</style>
 <center>
 <footer class="text-center page-footer">
 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 style="color:#FF6633" class="section-heading">Contact</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                   <h5 style="color:#FF6633"><p>043-632596</p></h5>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                     <h5 style="color:#FF6633"><p>MBPJ_2017@gmail.com</a></p>
                </div><br><br>
				<div class="col-lg-8 col-lg-offset-2 text-center">
				<h5 style="color:#FF6633"><p class="copyright" align=center>&copy; Copyright 2013-2016 Blackrock Digital LLC.</h5>
				 </div>
            </div>
	      </div>
		  </section>
    </center>

	    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>



 <?php
			 readfile("gs://$appid/footer.html");
			 use google\appengine\api\users\UserService;
             if (UserService::isCurrentUserAdmin()){
			 echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
			 echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
			 }
			?><br>
			
			
			
 </footer>
 </body>

</html>


