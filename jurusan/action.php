<?php
include ("koneksi.php") ;

if(isset($_POST)) {
	if($_POST['action'] == "edit"){
    	$sql = mysql_query("
    	UPDATE `jurusan` SET `nama` = '{$_POST['nama']}'
    	WHERE `id` = '{$_POST['id']}'
   		");
    		if($sql) {
     	 		header("Location: index.php");
   			} 

  }elseif ($_POST['action'] =="create") {
   		$sql=mysql_query("INSERT INTO `jurusan`	 
    			VALUES (NULL, '{$_POST['nama']}')");

    		if($sql){
    	 	   	header("Location: index.php");
    		}
  }elseif ($_POST['action'] == "delete"){
    $sql=mysql_query("DELETE FROM `jurusan` WHERE `id` 
    = '{$_POST['id']}'");
        
        if($sql){
        header("Location: index.php");
        }
    }else{
    	header("Location: index.php");
  }
}