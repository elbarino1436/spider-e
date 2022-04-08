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
include('php-includes/connect.php');

$userid = $_SESSION['userid'];
$userid2 = $_SESSION['userid'];
$search = $userid;
$search2 = $userid2;




function tree_data($userid){
global $con;
$data = array();
$query = mysqli_query($con,"select * from tree where userid='$userid'");
$result = mysqli_fetch_array($query);
$data['left'] = $result['left'];
$data['right'] = $result['right'];
$data['leftcount'] = $result['leftcount'];
$data['rightcount'] = $result['rightcount'];
return $data;
}


 
 


 
if(isset($_GET['search-id'])){
$search_id = mysqli_real_escape_string($con,$_GET['search-id']);
if($search_id!=""){
$query_check = mysqli_query($con,"select * from user where cle='$search_id'");
if(mysqli_num_rows($query_check)>0){
$search = $search_id;
}
else{
echo '<script>alert("Access Denied");window.location.assign("tree.php");</script>';
}
}
else{
echo '<script>alert("Access Denied");window.location.assign("tree.php");</script>';
} 
} 

$data = tree_data($search);




$total = $data['leftcount'] + $data['rightcount'];

$tcom = 0.06;
$tcomleft = $tcom * $data['leftcount'];
$tcomright = $tcom * $data['rightcount'];
$comtotal = $tcomleft + $tcomright;


$tcom3 = 0.03;
$tcomleft3 = $tcom3 * $data['leftcount'];
$tcomright3 = $tcom3 * $data['rightcount'];
$comtotal3 = $tcomleft3 + $tcomright3;


$nivoD = $data['leftcount'];
$nivoG = $data['rightcount'];




if ($nivoD > 1 OR $nivoG > 1 ) 
 {
	
  if ($nivoD <= 3 OR $nivoG <= 3)
	{
   
	   
$nivo1 =  $nivoD + $nivoG;



 }
 }











function tree_data2($userid2){
global $con;
$data2 = array();
$query = mysqli_query($con,"select * from tree2 where userid2='$userid2'");
$result = mysqli_fetch_array($query);
$data2['left'] = $result['left'];
$data2['right'] = $result['right'];
$data2['leftcount'] = $result['leftcount'];
$data2['rightcount'] = $result['rightcount'];
return $data2;
}


$data2 = tree_data2($search2);



$total2 = $data2['leftcount'] + $data2['rightcount'];

$tcom2 = 3;
$tcomleft2 = $tcom2 * $data2['leftcount'];
$tcomright2 = $tcom2 * $data2['rightcount'];
$comtotal2 = $tcomleft2 + $tcomright2;


$tcomc2 = 1.5;
$tcomleftc2 = $tcomc2 * $data2['leftcount'];
$tcomrightc2 = $tcomc2 * $data2['rightcount'];
$comtotalc2 = $tcomleftc2 + $tcomrightc2;





















?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mlml Website  - Pin</title>
	

  

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" role="navigation" style="margin-bottom: 0">
	
		
		
			<a href=""  class="navbar-brand" >  BUREAU DE Mr : <?php echo $search; ?> </a>  
			               
                      
	</nav>
 
 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('php-includes/menu.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">MON COMPTE / E-WORLD-B</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
               
			   
			   
			  <!-- /.panel-heading -->
                        
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                  <div class="panel-body">      
           </table>




INS-600F-com(45CFA & 22.4 CFA)67.5/ENTREE
<br/>                                								
                                 
<br/><br/>
 <table class="table table-striped table-bordered table-hover" >
<tr>
<th>STAGE</th>
<th>Pers/S</th>
<th>COM/FCFA</th>
<th>NIVEAU</th>
<th>STOTAL</th>
</tr>

<tr class="success">
<td>2</td>
<td>4</td>
<td>270F</td>
<td></td>
<td>2400F</td>
</tr>

<tr class="warning" >
<td>4</td>
<td>16</td>
<td>1800F</td>
<td></td>
<td>9600F</td>
</tr>

<tr>
<td>6</td>
<td>64</td>
<td>4.320F</td>
<td></td>
<td>38.400F</td>
</tr>

<tr class="info" >
<td>8</td>
<td>256</td>
<td>17.280F</td>
<td></td>
<td>153.600F</td>
</tr>

<tr class="danger">
<td>10</td>
<td>1024</td>
<td>69.120F</td>
<td></td>
<td>614.400F</td>
</tr>

<tr>
<td>Total</td>
<td>1364</td>
<td>92.070F</td>
<td></td>
<td>818.400F</td>
</tr>

</table>

<br/><br/><br/><br/><br/>


ins-30.000F CFA-com(2250F & 1125F)-3375F/ENTREE
<br/>
<table class="table table-striped table-bordered table-hover" >
<tr>
<th>STAGE</th>
<th>Pers/S</th>
<th>COM/FCFA</th>
<th>NIVO</th>
<th>STOTAL</th>
</tr>

<tr class="success">
<td>2</td>
<td>4</td>
<td>13.500F</td>
<td></td>
<td>120.000F</td>
</tr>

<tr class="warning" >
<td>4</td>
<td>16</td>
<td>54.000F</td>
<td></td>
<td>480.000F</td>
</tr>

<tr>
<td>6</td>
<td>64</td>
<td>216.000F</td>
<td></td>
<td>1.920.000F</td>
</tr>

<tr class="info" >
<td>8</td>
<td>256</td>
<td>864.000F</td>
<td></td>
<td>7.680.000F</td>
</tr>

<tr class="danger">
<td>10</td>
<td>1024</td>
<td>3.456.000F</td>
<td></td>
<td>30.720.000F</td>
</tr>

<tr>
<td>Total</td>
<td>1364</td>
<td>4.603.000F</td>
<td></td>
<td>40.920.000F</td>
</tr>

</table>

         
	</div>
	
                                      
                                    </div>
									
									<br/>
									
									
									
									                    	
									
									
									
									
									
                                    
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                           
			   
			   
			   
			   <!-- /.panel-heading -->
                        
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                  <div class="panel-body">      
                                           								
                                 </table>




INS-1.500.000F-com(112.500F & 56.250F)168.750F/ENTREE 
<br/>
<br/><br/>
 <table class="table table-striped table-bordered table-hover" >
<tr>
<th>STAGE</th>
<th>Pers/S</th>
<th>COMMISSION</th>
<th>NIVEAU</th>
<th>SOMME/TOTAL</th>
</tr>

<tr class="success">
<td>2</td>
<td>4</td>
<td>675.000F</td>
<td></td>
<td>6 000 000F</td>
</tr>

<tr class="warning" >
<td>4</td>
<td>16</td>
<td>2.700.000F</td>
<td></td>
<td>24 000 000F</td>
</tr>

<tr>
<td>6</td>
<td>64</td>
<td>10.800.000F</td>
<td></td>
<td>96 000 000F</td>
</tr>

<tr class="info" >
<td>8</td>
<td>256</td>
<td>43.200.000F</td>
<td></td>
<td>384 000 000F</td>
</tr>

<tr class="danger">
<td>10</td>
<td>1024</td>
<td>172.800.000F</td>
<td></td>
<td>1 536 000 000F</td>
</tr>

<tr>
<td>Total</td>
<td>1364</td>
<td>230.175.000F</td>
<td></td>
<td>2 046 000 000F</td>
</tr>

</table>

<br/><br/><br/><br/><br/>


ins-76.725.000-com(5.754.375F & 2.877.187F)8.631.562F/TETE
<br/>
<table class="table table-striped table-bordered table-hover" >
<tr>
<th>STAGE</th>
<th>Pers/S</th>
<th>COMMISSION</th>
<th>NIVEAU</th>
<th>SOMME/TOTAL</th>
</tr>

<tr class="success">
<td>2</td>
<td>4</td>
<td>34.526.248F</td>
<td></td>
<td>306.900.000F</td>
</tr>

<tr class="warning" >
<td>4</td>
<td>16</td>
<td>138.104.992F</td>
<td></td>
<td>1.227.600.000F</td>
</tr>

<tr>
<td>6</td>
<td>64</td>
<td>552.419.968F</td>
<td></td>
<td>4.910.400.000F</td>
</tr>

<tr class="info" >
<td>8</td>
<td>256</td>
<td>2.209.679.872F</td>
<td></td>
<td>19.641.600.000F</td>
</tr>

<tr class="danger">
<td>10</td>
<td>1024</td>
<td>8.838.719.488F</td>
<td></td>
<td>78.566.400.000F</td>
</tr>

<tr>
<td>Total</td>
<td>1364</td>
<td>11.773.450.568F</td>
<td></td>
<td>104.652.900.000F</td>
</tr>

</table>

         
	</div>
	
                                      
                                    </div>
									
									<br/>
									
									
									
									                    	
									
									
									
									
									
                                    
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                          
			   <br/><br/><br/><br/>
			   
			   <div class="col-lg-3"> 
<div class="panel panel-default">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Compte 2</h4>
                            </div>
                            <div class="panel-body">
							<div align="center" class="panel panel-default">
                                <h2><?php echo $comtotal3  ?> FCFA</h2> 
                            </div>
                            	                        </div>
                        </div>
						
						<div class="panel panel-default">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">commission-Total</h4>
                            </div>
                            <div class="panel-body">
							<div align="center"class="panel panel-default">
                                <h2><?php echo $comtotal  ?> FCFA</h2>
                            </div>
                            	                         </div>
                        </div>
						
						
						<div class="panel panel-default">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Activation compte 3</h4>
                            </div>
                            <div class="panel-body">
							<div align="center" class="panel panel-default">
                               <h2><?php echo $comtotal2  ?> FCFA</h2>
                            </div>
                            	                         </div>
                        </div>
						
						
						<div class="panel panel-default">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">commission-Total</h4>
                            </div>
                            <div class="panel-body">
							<div align="center" class="panel panel-default">
                              <h2> <?php echo $comtotalc2  ?> FCFA</h2>
                            </div>
                            	                       </div>
                        </div>
			  

















              </div>  
			   
			   
			   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
