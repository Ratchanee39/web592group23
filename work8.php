

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
 <title><?= $page ?> </title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <link rel="stylesheet"
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>

<header class="page-header text-center">
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
                        <a class="page-scroll" href="index.php">หน้าหลัก</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=gartoon">การ์ตูนทั้งหมดในเว็บ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=movie">Movie ตอนพิเศษ</a>
                    </li>
					<li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=type">หมวดหมู่</a>
                    </li>
					 <li>
                        <a class="page-scroll" href="https://web592group23.appspot.com/work8.php?p=game"> game Cartoon</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="work8.php">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
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
     background:#CD5C5C;
   }
   .panel{
   background: #BEBEBE;
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
body{
 background: url(header.jpg)
}


</style>
 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>043-632596</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">MBPJ_2017@gmail.com</a></p>
                </div><br><br>
				<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="copyright" align=center>&copy; Copyright 2017 MBPJ การ์ตูนออนไลน์ | การ์ตูน  ซับไทย พากย์ไทย Movie ตอนพิเศษ และการ์ตูนที่จบแล้ว
				 </div>
            </div>
        </div>
    </section>
	  <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

 <footer class="text-center page-footer">

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
</html>