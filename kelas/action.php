<?php
include ("../koneksi.php") ;

//var_dump($test);die;


if(isset($_POST)) {
	if($_POST['action'] == "edit"){
    	$sql = mysql_query("
    	UPDATE `kelas` SET `nama` = '{$_POST['nama']}'
    	WHERE `id` = '{$_POST['id']}'
   		");
    		if($sql) {
     	 		header("Location: index.php");
   			} 

  }elseif ($_POST['action'] =="create") {
   		$sql=mysql_query("INSERT INTO `kelas`	 
    			VALUES (NULL, '{$_POST['nama']}')");

    		if($sql){
    	 	   	header("Location: index.php");
    		}
  }elseif ($_POST['action'] == "delete"){
         $sql=mysql_query("DELETE FROM `kelas` WHERE `id` 
         = '{$_POST['id']}'");
        
         if($sql){
         header("Location: index.php");
        }
    }else{
    	header("Location: index.php");
  }
}