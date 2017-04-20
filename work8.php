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
<h4> <a style="color:Red"href="/">กลับสู่หน้าหลัก</a> </h4>
<header class="page-header text-center">
<h1 style="color:#FF8C00"><marquee behavior="alternate">MBPJ Cartoon online</marquee>
</h1>

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
 background: url(llll.jpg)
}


</style>

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
