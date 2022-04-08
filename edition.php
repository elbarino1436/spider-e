<?php

try
{
$bdd = new PDO('mysql:host=projet.test;dbname=eworld', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

include('php-includes/check-login.php');
$userid = $_SESSION['userid'];
$search = $userid;
$capping = 500;
	
	
	?>

<?php








	   
	   
	   if (!empty($_FILES['avatar']) AND!empty($_FILES['avatar']['name']))
	{
	
	$taillemax=2097152;
	$extensionValides=array('jpg', 'jpeg', 'gif', 'png');
	if($_FILES['avatar']['size'] <= $taillemax)
	{
		$extensionupload = strtolower(substr(strrchr($_FILES['avatar']['name'],'.'),1));
		if(in_array($extensionupload,$extensionValides))
		{
			$chemin = "membres/avatars/".$_SESSION['id'].".".$extensionupload;
		    $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
		if($resultat)
		{
			$updatavatar = $bdd->prepare(" UPDATE income SET avatar = :avatar WHERE id = :id");
			$updatavatar->execute(array(
			'avatar'=>$_SESSION['id'].".".$extensionupload,
			'id'=>$_SESSION['id']
			));
			
			header('location: home.php?id='.$_SESSION['id']);
		}
		else
		{
			$message="erreur durant l'importation ";
		}
		}
		else
		{
			$message="le format de votre photo de profile n'est pas valide ";
		}
	} 
	else
	{
		$message="votre photo de profile ne doit pas dépasser 2MO";
	}

	}





	   
	
	
	

	
	
	


	   
	
	
	
	
	
	
	





?>





 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scal=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="auteur" content="">
<title> HOME</title>

  <link rel="icon" href="bootstrap/site/doc/4.3/assets/img/favicon.ico"> 
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
 <link href="bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="starter-template.css" rel="stylesheet">
   <script src="../../assets/js/ie-emulation-modes-warning.js"></script> 
   <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="eword/boostrap/dist/css/bootstrap.min.css"/>

 <link rel="stylesheet" href="gg.css" />
</head>







<body>

<div id="wrapper">

        
		
		
<br/><br/>

<div align="center">

<h2>EDITER MON PROFILE</h2>
<div align="light">

<form method="POST" action="" enctype="multipart/form-data">





<label>avatar:</label>
<input type="file"  name="avatar"/> <br/> <br/>
<input  a href="" class="btn btn-primary"type="submit"  value="mise a jour du profile" />


</form>
<?php if(isset($message)) { echo $message; }?>


</div>
</div>
</body>


 <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>









</html>