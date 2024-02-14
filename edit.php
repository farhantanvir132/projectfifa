<?php
require("dbcon.php");


function img_upload($img){

     $tmp_location =$img['tmp_name'];
     $img_name = random_int(111,999).$img['name'];
     $new_location = UPLOAD_SRC.$img_name;
   if(!move_uploaded_file($tmp_location,$new_location)){
        
       header("location: admindashboard.php?alert=img_upload");
       exit;
   }
   else{
    return $img_name;
   }
}

if(isset($_POST['submit'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupa`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }


}

if(isset($_POST['submit2'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupb`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }
}
if(isset($_POST['submit3'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupc`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }

}
if(isset($_POST['submit4'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupd`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }


}
if(isset($_POST['submit5'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupe`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }
}
if(isset($_POST['submit6'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupf`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }
}
if(isset($_POST['submit7'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `groupg`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }
}
if(isset($_POST['submit8'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   
   $img_path = img_upload($_FILES['flag']);

   $query="INSERT INTO `grouph`(`flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES 
   ('$img_path','$_POST[team]','$_POST[mp]','$_POST[L]','$_POST[D]','$_POST[W]','$_POST[Pts]')";
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
   else{
    header("location: standingadmin.php?alert=Failed");
   }
}
if(isset($_POST['submitBGK'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);

   }
   
   $img_path1 = img_upload($_FILES['image']);

   $query1=" INSERT INTO `brazilgk`(`image`, `name`, `matches`, `gs`, `type`) VALUES
    ('$img_path1','$_POST[name]','$_POST[matches]','$_POST[gs]','$_POST[type]')";
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
   else{
    header("location: braGK.php?alert=Failed");
   }
}
if(isset($_POST['submitBDF'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   
   $img_path1 = img_upload($_FILES['image']);

   $query1=" INSERT INTO `brazildf`(`image`, `name`, `matches`, `goal`,`assist`, `type`) VALUES
    ('$img_path1','$_POST[name]','$_POST[matches]','$_POST[goal]','$_POST[assist]','$_POST[type]')";
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
   else{
    header("location: braGK.php?alert=Failed");
   }
}

if(isset($_POST['submitBMD'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);

   }
   
   $img_path1 = img_upload($_FILES['image']);

   $query1=" INSERT INTO `brazilmd`(`image`, `name`, `matches`, `goal`,`assist`, `type`) VALUES
   ('$img_path1','$_POST[name]','$_POST[matches]','$_POST[goal]','$_POST[assist]','$_POST[type]')";
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
   else{
    header("location: braGK.php?alert=Failed");
   }
}
if(isset($_POST['submitBFD'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);

   }
   
   $img_path1 = img_upload($_FILES['image']);

   $query1=" INSERT INTO `brazilfd`(`image`, `name`, `matches`, `goal`,`assist`, `type`) VALUES
   ('$img_path1','$_POST[name]','$_POST[matches]','$_POST[goal]','$_POST[assist]','$_POST[type]')";
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
   else{
    header("location: braGK.php?alert=Failed");
   }
}
if(isset($_POST['submitMN'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);

   }
   
   $img_path1 = img_upload($_FILES['image']);
   $query1=" INSERT INTO `brazilmn`(`image`, `name`, `matches`) VALUES
   ('$img_path1','$_POST[name]','$_POST[matches]')";
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
   else{
    header("location: braGK.php?alert=Failed");
   }
}
if(isset($_GET['id'])){
   $query7="DELETE FROM `brazilgk` WHERE `id`='$_GET[id]'";
  if(mysqli_query($con,$query7)){
  header("location: viewbrazilplayer.php?");
  }
 else{
  header("location: viewbrazilplayer.php?alert=Failed");
 }
 }
 if(isset($_GET['iddf'])){
   $query7="DELETE FROM `brazildf` WHERE `id`='$_GET[iddf]'";
  if(mysqli_query($con,$query7)){
  header("location: viewbrazilplayer.php?");
  }
 else{
  header("location: viewbrazilplayer.php?alert=Failed");
 }
 }
 if(isset($_GET['idmd'])){
   $query7="DELETE FROM `brazilmd` WHERE `id`='$_GET[idmd]'";
  if(mysqli_query($con,$query7)){
  header("location: viewbrazilplayer.php?");
  }
 else{
  header("location: viewbrazilplayer.php?alert=Failed");
 }
 }
 if(isset($_GET['idfd'])){
   $query7="DELETE FROM `brazilfd` WHERE `id`='$_GET[idfd]'";
  if(mysqli_query($con,$query7)){
  header("location: viewbrazilplayer.php?");
  }
 else{
  header("location: viewbrazilplayer.php?alert=Failed");
 }
 }
 if(isset($_GET['idmn'])){
   $query7="DELETE FROM `brazilmn` WHERE `id`='$_GET[idmn]'";
  if(mysqli_query($con,$query7)){
  header("location: viewbrazilplayer.php?");
  }
 else{
  header("location: viewbrazilplayer.php?alert=Failed");
 }
 }
 if(isset($_POST['ins'])){
   header("location:buttons.php?");
  }
  if(isset($_POST['up'])){
   header("location:view.php?");
  }
  if(isset($_POST['ins1'])){
   header("location:brazil.php?");
  }
  if(isset($_POST['up1'])){
   header("location:viewbrazilplayer.php?");
  }
  if(isset($_POST['ins2'])){
   header("location:buttonsfixtureadmin.php?");
  }
  if(isset($_POST['up2'])){
   header("location:viewfixture.php?");
  }

  if(isset($_POST['submitgrp'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_path7 = img_upload($_FILES['flag']);
   $query9="INSERT INTO `groups`(`flag`, `team`) VALUES ('$img_path7','$_POST[team]')";
   if(mysqli_query($con,$query9)){
    header("location: viewgroup.php?");
   }
   else{
    header("location: groupform.php?alert=Failed");
   }


}
if(isset($_POST['submitfixture'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_pathone = img_upload($_FILES['flagone']);
   $img_pathtwo = img_upload($_FILES['flagtwo']);
   $query10= "INSERT INTO `groupstage`(`flagone`, `flagtwo`, `groupname`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`,`wp1`,`drw`,`wp2`, `sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
   ('$img_pathone','$img_pathtwo','$_POST[groupname]','$_POST[teamone]','$_POST[teamtwo]','$_POST[scoreone]','$_POST[scoretwo]','$_POST[tm]','$_POST[dt]', '$_POST[status]','$_POST[wp1]','$_POST[drw]','$_POST[wp2]','$_POST[sog1]','$_POST[sog2]','$_POST[possession1]','$_POST[possession2]','$_POST[pass1]','$_POST[pass2]')";
    
   if(mysqli_query($con,$query10)){
    header("location: viewfixture.php?");
   }
   else{
    header("location: fixture.php?alert=Failed");
   }
}
if(isset($_POST['submitfixture1'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   $img_pathone = img_upload($_FILES['flagone']);
   $img_pathtwo = img_upload($_FILES['flagtwo']);

   $query11="INSERT INTO `knockoutstage`(`flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`,`wp1`,`drw`,`wp2`,`sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
   ('$img_pathone','$img_pathtwo','$_POST[teamone]','$_POST[teamtwo]','$_POST[scoreone]','$_POST[scoretwo]','$_POST[tm]','$_POST[dt]', '$_POST[status]','$_POST[wp1]','$_POST[drw]','$_POST[wp2]','$_POST[sog1]','$_POST[sog2]','$_POST[possession1]','$_POST[possession2]','$_POST[pass1]','$_POST[pass2]')";
   if(mysqli_query($con,$query11)){
    header("location: viewfixture.php?");
   }
   else{
    header("location: fixture.php?alert=Failed");
   }


}
if(isset($_POST['submitfixture2'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_pathone = img_upload($_FILES['flagone']);
   $img_pathtwo = img_upload($_FILES['flagtwo']);


   $query12="INSERT INTO `quarterfinal`(`flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`,`wp1`,`drw`,`wp2`,`sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
    ('$img_pathone','$img_pathtwo','$_POST[teamone]','$_POST[teamtwo]','$_POST[scoreone]','$_POST[scoretwo]','$_POST[tm]','$_POST[dt]', '$_POST[status]','$_POST[wp1]','$_POST[drw]','$_POST[wp2]','$_POST[sog1]','$_POST[sog2]','$_POST[possession1]','$_POST[possession2]','$_POST[pass1]','$_POST[pass2]')";
   
   if(mysqli_query($con,$query12)){
    header("location: viewfixture.php?");
   }
   else{
    header("location: fixture.php?alert=Failed");
   }


} 
if(isset($_POST['submitfixture3'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_pathone = img_upload($_FILES['flagone']);
   $img_pathtwo = img_upload($_FILES['flagtwo']);


   $query13="INSERT INTO `semifinal`(`flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`,`wp1`,`drw`,`wp2`,`sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
    ('$img_pathone','$img_pathtwo','$_POST[teamone]','$_POST[teamtwo]','$_POST[scoreone]','$_POST[scoretwo]','$_POST[tm]','$_POST[dt]', '$_POST[status]','$_POST[wp1]','$_POST[drw]','$_POST[wp2]','$_POST[sog1]','$_POST[sog2]','$_POST[possession1]','$_POST[possession2]','$_POST[pass1]','$_POST[pass2]')";
   
   if(mysqli_query($con,$query13)){
    header("location: viewfixture.php?");
   }
   else{
    header("location: fixture.php?alert=Failed");
   }

}

if(isset($_POST['submitfixture4'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);

   }
   
   $img_pathone = img_upload($_FILES['flagone']);
   $img_pathtwo = img_upload($_FILES['flagtwo']);
  
   $query14="INSERT INTO `final`(`flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`,`wp1`,`drw`,`wp2`,`sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
     ('$img_pathone','$img_pathtwo','$_POST[teamone]','$_POST[teamtwo]','$_POST[scoreone]','$_POST[scoretwo]','$_POST[tm]','$_POST[dt]', '$_POST[status]','$_POST[wp1]','$_POST[drw]','$_POST[wp2]','$_POST[sog1]','$_POST[sog2]','$_POST[possession1]','$_POST[possession2]','$_POST[pass1]','$_POST[pass2]')";
   
   
   if(mysqli_query($con,$query14)){
    header("location: viewfixture.php?");
   }
   else{
    header("location: fixture.php?alert=Failed");
   }
}

?>