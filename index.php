<?php include 'includes/session.php'; ?>	
<?php 
$link=mysqli_connect("localhost", "root","");
mysqli_select_db($link,"ecomm");
?>				
<?php include 'includes/header.php'; ?>
<style>
.table tr th{
    text-align:center;
    letter-spacing:1px;
}

.table div{
    padding:10px 20px;
}
</style>
<head>
<title>EDE</title>
<link rel="stylesheet" href="build/swiper.min.css">

</head>
<body class="layout-top-nav" >
<?php include 'includes/navbar.php'; ?>

<div class="wrapper">
<div class="content-wrapper" >
<section class="content">
<div class="row">
<div class="col-sm-12">
<?php
if(isset($_SESSION['error'])){
echo "
<div class='alert alert-danger'>
".$_SESSION['error']."
</div>
";
unset($_SESSION['error']);
}
?>

<?php if(isset($_SESSION['user'])){
    echo '
<div class="container table-responsive text-nowrap" style="margin-top:20px;color:white">
<table class="table table-bordered"  id="example1">
  <thead>
    <tr>
      <th scope="col">Strength</th>
      <th scope="col">Weakness</th>
      <th scope="col">opportunity</th>
      <th scope="col">Threads</th>
    </tr>
  </thead>
  <tbody style="margin:10px">
  <tr>
  <td><div>1. '.$user['strength'].'</div><br></td>
  <td><div>1. '.$user['weakness'].'</div><br></td>
  <td><div>1. '.$user['opportunity'].'</div><br></td>
  <td><div>1. '.$user['threads'].'</div><br></td>
</tr>   

<tr>
<td><div>2. '.$user['strength2'].'</div><br></td>
<td><div>2. '.$user['weakness2'].'</div><br></td>
<td><div>2. '.$user['opportunity2'].'</div><br></td>
<td><div>2. '.$user['threads2'].'</div><br></td>
</tr>

<tr>
<td><div>3. '.$user['strength3'].'</div><br></td>
<td><div>3. '.$user['weakness3'].'</div><br></td>
<td><div>3. '.$user['opportunity3'].'</div><br></td>
<td><div>3. '.$user['threads3'].'</div><br></td>
</tr> 

<tr>
<td><div>4. '.$user['strength4'].'</div><br></td>
<td><div>4. '.$user['weakness4'].'</div><br></td>
<td><div>4. '.$user['opportunity4'].'</div><br></td>
<td><div>4. '.$user['threads4'].'</div><br></td>
</tr>  


<tr>
<td><div>5. '.$user['strength5'].'</div><br></td>
<td><div>5. '.$user['weakness5'].'</div><br></td>
<td><div>5. '.$user['opportunity5'].'</div><br></td>
<td><div>5. '.$user['threads5'].'</div><br></td>
</tr>  


<tr>
<td><div>6. '.$user['strength6'].'</div><br></td>
<td><div>6. '.$user['weakness6'].'</div><br></td>
<td><div>6. '.$user['opportunity6'].'</div><br></td>
<td><div>6. '.$user['threads6'].'</div><br></td>
</tr>  

</tbody>
  </table>
  <button id="quickview" data-toggle="modal" data-target="#edit1">Update Strength</button>
<button id="quickview" data-toggle="modal" data-target="#weakness">Update Weakn..</button>
<button id="quickview" data-toggle="modal" data-target="#opportunity">Update Opport..</button>
<button id="quickview" data-toggle="modal" data-target="#threads">Update Threads</button>

';
}else{
    echo '
   <div class="container-fluid text-center" style="margin:100px auto;color:white;letter-spacing:1px;"> <h4 style="font-size:26px;text-transform:capitalize">You will not able to see Strength, Weakness, Opportunity and Threads Unitil You Login</h4>  </div>
';
}
?>

</section>
</div>
</div>
</div>
</div>
<?php include 'includes/footer.php'; ?>

</div>
</div>


<?php include 'includes/scripts.php'; ?>


</body>

</html>