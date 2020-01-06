<?php include 'includes/header.php' ?>
<style type="text/css">
.sticky {
position: fixed;
top: 0;
width: 100%;
}

.sticky + #myHeader {
padding-top: 102px;
}

#myHeader{
	background-image: linear-gradient(254deg, #5909b3, #7f0dff);
}

.navbar-brand{
	font-size: 25px;
	width: 300px;
	letter-spacing: 2px;
	font-weight: 700;
}

</style>
<body class="layout-top-nav">
    
<header class="main-header">
<nav class="navbar navbar-static-top"  id="myHeader" style="padding: 10px;">
		<button type="button" class="navbar-toggle collapsed" >
	<i class="fa fa-bars"></i>
</button>
<div class="navbar-header"> 
<a href="index.php" class="navbar-brand" >
ENTERPRENOUR
</a>
</div>
<div class="collapse navbar-collapse " id="navbar-collapse" >

<div class="navbar-custom-menu" >
<ul class="nav1 navbar-nav pull-right">

<?php
if(isset($_SESSION['user'])){
$image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
echo '
<li class="dropdown1 user user-menu">
<a  class="dropdown-toggle1" data-toggle="modal" data-target="#profile">
<img src="'.$image.'" class="user-image"  alt="User Image" >
</a>
</li>
';
}
else{
echo "
";
?>
<li><a href='login.php'  class='login' style="color: white;font-weight:600;">LOGIN</a></li>
<li><a href='signup.php' class='login'  style="color: white;font-weight:600;">SIGNUP</a></li>
<?php
}
?>
</ul>
</div>
</nav>
</header>
</div>
<?php include 'includes/sidebar_modal.php'; ?>
<?php include 'includes/profile_modal.php'; ?> 
</body>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
if (window.pageYOffset > sticky) {
header.classList.add("sticky");
} else {
header.classList.remove("sticky");
}
}
</script>
