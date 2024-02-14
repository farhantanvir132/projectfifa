<?php
require("dbcon.php");


function img_upload($img){

     $tmp_location =$img['tmp_name'];
     $img_name = random_int(111,999).$img['name'];
     $new_location = UPLOAD_SRC.$img_name;
   if(!move_uploaded_file($tmp_location,$new_location)){
        
       header("location:admindashboard.php?alert=img_upload");
       exit;
   }
   else{
    return $img_name;
   }
}

if(isset($_POST['update'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupa` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupa` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update1'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupb` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupb` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update2'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupc` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupc` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update3'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupd` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupd` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update4'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupe` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupe` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update5'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupf` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupf` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update6'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `groupg` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `groupg` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}
if(isset($_POST['update7'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path = img_upload($_FILES['flag']);
   $query="UPDATE `grouph` SET
  `flag`='$img_path',`team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   else{
      $query="UPDATE `grouph` SET
      `team`='$_POST[team]',`mp`='$_POST[mp]',`L`='$_POST[L]',`D`='$_POST[D]',`W`='$_POST[W]',`Pts`='$_POST[Pts]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query)){
    header("location: view.php?");
   }
}

if(isset($_POST['updateplayer'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   if(is_uploaded_file($_FILES['image']['tmp_name'])){
   $img_path1 = img_upload($_FILES['image']);
   $query1="UPDATE `brazilgk` SET
  `image`='$img_path1',`name`='$_POST[name]',`matches`='$_POST[matches]',`gs`='$_POST[gs]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   else{
      $query1="UPDATE `brazilgk` SET
     `name`='$_POST[name]',`matches`='$_POST[matches]',`gs`='$_POST[gs]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
}
if(isset($_POST['updateplayer1'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   if(is_uploaded_file($_FILES['image']['tmp_name'])){
   $img_path1 = img_upload($_FILES['image']);
   $query1="UPDATE `brazildf` SET
  `image`='$img_path1',`name`='$_POST[name]',`matches`='$_POST[matches]',`goal`='$_POST[goal]',`assist`='$_POST[assist]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   else{
      $query1="UPDATE `brazildf` SET
     `name`='$_POST[name]',`matches`='$_POST[matches]',`goal`='$_POST[goal]',`assist`='$_POST[assist]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
}
if(isset($_POST['updateplayer2'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   if(is_uploaded_file($_FILES['image']['tmp_name'])){
   $img_path1 = img_upload($_FILES['image']);
   $query1="UPDATE `brazilmd` SET
  `image`='$img_path1',`name`='$_POST[name]',`matches`='$_POST[matches]',`goal`='$_POST[goal]',`assist`='$_POST[assist]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   else{
      $query1="UPDATE `brazilmd` SET
     `name`='$_POST[name]',`matches`='$_POST[matches]',`goal`='$_POST[goal]',`assist`='$_POST[assist]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
}
if(isset($_POST['updateplayer3'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   if(is_uploaded_file($_FILES['image']['tmp_name'])){
   $img_path1 = img_upload($_FILES['image']);
   $query1="UPDATE `brazilfd` SET
  `image`='$img_path1',`name`='$_POST[name]',`matches`='$_POST[matches]',`goal`='$_POST[goal]',`assist`='$_POST[assist]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   else{
      $query1="UPDATE `brazilfd` SET
     `name`='$_POST[name]',`matches`='$_POST[matches]',`goal`='$_POST[goal]',`assist`='$_POST[assist]',`type`='$_POST[type]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query1)){
    header("location: viewbrazilplayer.php?");
   }
}
if(isset($_POST['updatemanager'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   if(is_uploaded_file($_FILES['image']['tmp_name'])){
   $img_path2 = img_upload($_FILES['image']);
   $query2="UPDATE `brazilmn` SET
  `image`='$img_path2',`name`='$_POST[name]',`matches`='$_POST[matches]' WHERE id= $_POST[id]";
   }
   else{
      $query2="UPDATE `brazilmn` SET
     `name`='$_POST[name]',`matches`='$_POST[matches]' WHERE id= $_POST[id]";
   }
   if(mysqli_query($con,$query2)){
    header("location: viewbrazilplayer.php?");
   }
}

if(isset($_POST['updategrp'])){

   foreach($_POST as $key1=> $value1){
    $_POST[$key1]=mysqli_real_escape_string($con,$value1);
   }
   if(is_uploaded_file($_FILES['flag']['tmp_name'])){
   $img_path11 = img_upload($_FILES['flag']);
   $query1="UPDATE `groups` SET `flag`='$img_path11',`team`='$_POST[team]' WHERE id=$_POST[id]";
   }
   else{
      $query1="UPDATE `groups` SET `team`='$_POST[team]' WHERE id=$_POST[id]";
   }
   if(mysqli_query($con,$query1)){
    header("location: viewgroup.php?");
   }
}


if(isset($_POST['updategroupstage'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }

   if(is_uploaded_file($_FILES['flagone']['tmp_name']) && is_uploaded_file($_FILES['flagtwo']['tmp_name'])){
    $img_path1 = img_upload($_FILES['flagone']);
    $img_path2 = img_upload($_FILES['flagtwo']);

   $query="UPDATE `groupstage` SET
   `flagone`='$img_path1',`flagtwo`='$img_path2',`groupname`='$_POST[groupname]',`teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]',`sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id]";
   }
   else{
      $query="UPDATE `groupstage` SET
      `groupname`='$_POST[groupname]',`teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]', `sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id] ";
   }

   if(mysqli_query($con,$query)){
    header("location: viewfixture.php?");
   }
}
if(isset($_POST['updateknockoutstage'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flagone']['tmp_name']) && is_uploaded_file($_FILES['flagtwo']['tmp_name'])){
      $img_path1 = img_upload($_FILES['flagone']);
      $img_path2 = img_upload($_FILES['flagtwo']);
   
      $query="UPDATE `knockoutstage` SET
      `flagone`='$img_path1',`flagtwo`='$img_path2',`teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]' ,`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]',`sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id]";
      }
      else{
         $query="UPDATE `knockoutstage` SET
         `teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]', `sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id] ";
      }
      if(mysqli_query($con,$query)){
       header("location: viewfixture.php?");
      }
}
if(isset($_POST['updatequarterfinal'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flagone']['tmp_name']) && is_uploaded_file($_FILES['flagtwo']['tmp_name'])){
      $img_path1 = img_upload($_FILES['flagone']);
      $img_path2 = img_upload($_FILES['flagtwo']);
    
      $query="UPDATE `quarterfinal` SET
      `flagone`='$img_path1',`flagtwo`='$img_path2',`teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]',`sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id]";
      }
      else{
         $query="UPDATE `quarterfinal` SET
         `teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]', `sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id] ";
      }

      if(mysqli_query($con,$query)){
       header("location: viewfixture.php?");
      }
}
if(isset($_POST['updatesemifinal'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flagone']['tmp_name']) && is_uploaded_file($_FILES['flagtwo']['tmp_name']) ){
      $img_path1 = img_upload($_FILES['flagone']);
      $img_path2 = img_upload($_FILES['flagtwo']);
    
      $query="UPDATE `semifinal` SET
      `flagone`='$img_path1',`flagtwo`='$img_path2',`teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]',`sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id]";
      }
      else{
         $query="UPDATE `semifinal` SET
         `teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]', `sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id] ";
      }

      if(mysqli_query($con,$query)){
       header("location: viewfixture.php?");
      }
}
if(isset($_POST['updatefinal'])){

   foreach($_POST as $key=> $value){
    $_POST[$key]=mysqli_real_escape_string($con,$value);
   }
   if(is_uploaded_file($_FILES['flagone']['tmp_name']) && is_uploaded_file($_FILES['flagtwo']['tmp_name'])){
      $img_path1 = img_upload($_FILES['flagone']);
      $img_path2 = img_upload($_FILES['flagtwo']);

      $query="UPDATE `final` SET
      `flagone`='$img_path1',`flagtwo`='$img_path2',`teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]',`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]',`sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id]";
      }
      else{
         $query="UPDATE `final` SET
         `teamone`='$_POST[teamone]',`teamtwo`='$_POST[teamtwo]',`scoreone`='$_POST[scoreone]',`scoretwo`='$_POST[scoretwo]',`tm`='$_POST[tm]',`dt`='$_POST[dt]' ,`status`='$_POST[status]',`wp1`='$_POST[wp1]',`drw`='$_POST[drw]',`wp2`='$_POST[wp2]', `sog1`='$_POST[sog1]',`sog2`='$_POST[sog2]',`possession1`='$_POST[possession1]',`possession2`='$_POST[possession2]',`pass1`='$_POST[pass1]',`pass2`='$_POST[pass2]' WHERE id=$_POST[id] ";
      }

      if(mysqli_query($con,$query)){
       header("location: viewfixture.php?");
      }
}
?>




