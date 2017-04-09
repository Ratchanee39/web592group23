<?php
 use google\appengine\api\users\UserService;
 global $appid,$page,$title;
 $phpfile="new2_body_$page.php";
 if(file_exists($phpfile)){
 include($phpfile);
 }else{
 $htmlfile = "gs://$appid/$page.html";
 if(file_exists($htmlfile)){
readfile($htmlfile);
 }
 if (UserService::isCurrentUserAdmin()){
 echo "<br><a href='new1.php?p=edit&file=$page.html' class='btn btn-default'>Edit</a>";
 }
 include("new5_feedback.php");
 }
?>