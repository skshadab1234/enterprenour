<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ecomm";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);?>

<?php
//error_reporting(0);
include('includes/session.php');
if(strlen($_SESSION['user'])==0)
    {   
header('location:index.php');
}
	else{
$conn = $pdo->open();
	// code for billing address updation
if(isset($_POST['update'])){

	$baddress=$_POST['billingaddress'];
		$bstate=$_POST['bilingstate'];
		$bcity=$_POST['billingcity'];
		$bpincode=$_POST['billingpincode'];
		$btype=$_POST['addresstype'];

		try{
			$stmt = $conn->prepare("UPDATE users SET address='$baddress',state='$bstate',city='$bcity',pincode='$bpincode', billingad_type='$btype' where id='".$user['id']."'");
			$stmt->execute(['id'=>$user['id']]);
			$output['message'] = 'Updated';
		}
		catch(PDOException $e){
			$output['message'] = $e->getMessage();
		}
	}
	
				}

		// code for Shipping address updation
	if(isset($_POST['shipupdate']))
	{
		$saddress=$_POST['shippingaddress'];
		$sstate=$_POST['shippingstate'];
		$scity=$_POST['shippingcity'];
		$spincode=$_POST['shippingpincode'];
		$stype=$_POST['addresstype'];
		try{
			$stmt = $conn->prepare("UPDATE users SET shippingaddress='$saddress',shippingstate='$sstate',shippingcity='$scity',shippingpincode='$spincode', shippingad_type='$stype' where id='".$user['id']."'");
			$stmt->execute(['id'=>$user['id']]);
			$output['message'] = 'Updated';
		}
		catch(PDOException $e){
			$output['message'] = $e->getMessage();
		}
	}
	$pdo->close();


?>
<?php include 'includes/header.php'; ?>
<head>
<title>
Profile
</title>
<style type="text/css">

/*** START BS OVERRIDES ***/
.features {
padding: 30px 0;
}

.features .v-tabs .v-tab-head a,
.features .v-tabs a.v-tab-head {
color: white;
cursor: pointer;
text-transform: uppercase;
display: block;
padding: 15px 30px 15px 15px;
border-right: 1px solid #33cc66;
margin: 0px ;
height: 100px;
text-align: right;
font: 12px "Raleway", "franklin-gothic-urw", "Helvectica Neue", helvetica, clean, sans-serif;
}
.features .v-tabs .v-tab-head a.active, .features .v-tabs .v-tab-head a:hover,
.features .v-tabs a.v-tab-head.active,
.features .v-tabs a.v-tab-head:hover {
font-weight: bold;
color: #33cc66;
transition: 0.5s ease all;
text-decoration: none;
}
.features .v-tabs .v-tab-head a {
position: relative;
display: block;
}
.features .v-tabs .v-tab-head a.active::after, .features .v-tabs .v-tab-head a.active::before {
content: "";
border-style: solid;
border-width: 15px;
position: absolute;
right: 0;
top: 15px;
transform: rotate(90deg);
-ms-transform: rotate(90deg);
-webkit-transform: rotate(90deg);
-o-transform: rotate(90deg);
-moz-transform: rotate(90deg);
}
.features .v-tabs .v-tab-head a.active::before {
border-color: #3fcf6e transparent transparent;
}
.features .v-tabs .v-tab-head a.active::after {
margin-right: -1px;
border-color: #faf8f5 transparent transparent;
}
.features .v-tabs a.v-tab-head {
border: none;
padding: 15px 0;
text-align: left;
position: relative;
}
.features .v-tabs a.v-tab-head:after {
color: #e2dcd6;
content: "\f054";
font-family: FontAwesome;
position: absolute;
right: 10px;
top: 50%;
transform: translateY(-50%);
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-o-transform: translateY(-50%);
}
.features .v-tabs a.v-tab-head.active::after {
color: #3c6;
content: "\f078";
}
.features .v-tabs .v-tab-pane {
padding: 0 15px;
height: auto;
}
.features .v-tabs .v-tab-pane ul {
list-style: outside none none;
margin: 0;
padding: 0;
}
.features .v-tabs .v-tab-pane ul li {
color: #292929;
font-size: 16px;
padding: 15px 0;
}
.features .v-tabs .v-tab-pane ul li i {
color: #4c81b6;
cursor: pointer;
font-weight: bold;  
font-size: 12px;
}
.features .v-tabs .v-tab-pane .in {
border-top: none;
padding-top: 0;
}
.features .v-tabs .v-tab-pane .popover {
border: 1px solid #014d7e !important;
border-radius: 0;
width: auto;
margin: 10px 0 0 0;
max-width: 276px;
left: auto;
box-shadow: none;
}
.features .v-tabs .v-tab-pane .popover.bottom .arrow {
border-bottom-color: #014d7e;
}
.features .v-tabs .v-tab-pane .popover .popover-content {
font-size: 14px;
padding: 15px;
text-align: center;
}

@media screen and (max-width: 768px) {
.features.light-brown {
border-top: 0 none;
}
.features h2.section-title {
font-size: 32px;
}
.features .v-tabs .v-tab-pane .in {
border-top: 1px solid #DDD;
border-bottom: 2px solid #DDD;
}
.features .popover {
margin: 10px 5% 0;
max-width: none;
width: 100%;
}
}

.profileedit td{
	padding: 20px;
	color: white;font-weight: 100;letter-spacing: 1.5px;
}
</style>
</head>
<?php include 'includes/navbar.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<div class="content-wrapper" >

<?php
if(isset($_SESSION['error'])){
echo "
<div class='callout callout-danger'>
".$_SESSION['error']."
</div>
";
unset($_SESSION['error']);
}

if(isset($_SESSION['success'])){
echo "
<div class='callout callout-success'>
".$_SESSION['success']."
</div>
";
unset($_SESSION['success']);
}
?>
<div class="row">
<div class="col-sm-12" style="padding: 20px">
<div class="light-brown features" id="features">
<section class="container-fluid">
<div class="row v-tabs">
<div class="col-sm-3 v-tab-head hidden-xs">
<a class="v-tab-link active" data-target="#coreFeatures-tab">ACCOUNT</a>
</div>
<div class="col-sm-9 v-tab-pane">
<a class="v-tab-head v-tab-link visible-xs active" data-target="#coreFeatures-tab">PRofile Details</a>
<div id="coreFeatures-tab" class="collapse fade in">
<ul>
<li>

<div class="box-header" style="color: white">
<h4 class="box-title" style="color: white;text-transform: uppercase;letter-spacing: 1px"><i class="glyphicon glyphicon-user" style="color: red"></i>&nbsp; <b>Profile Details</b></h4>
</div>

<div class="container" style="margin-top: 30px"	 >
<div class="profile-card js-profile-card" style="background: #0d0620">
<div class="profile-card__img">
<img src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>" width="100%" height="300px">
</div>

<div class="box-header" align="center"  style="margin-top: -50px">
<h4 class="box-title" style="color: white;text-transform: uppercase;" align="center">&nbsp;<b><?php echo $user['firstname'].' '.$user['lastname']; ?></b></h4>
<table  style="margin-top: 5px;color: white;font-size: 16px">

<tbody align="center" class="profileedit">
<tr>
<td >Email:</td>
<td><?php echo $user['email']; ?></td>
</tr>
<tr>
<td >Contact Info:</td>
<td><?php echo (!empty($user['contact_info'])) ? $user['contact_info'] : 'N/a'; ?></td>
</tr>
<td >Member Since:</td>
<td><?php echo date('M d, Y', strtotime($user['created_on'])); ?></td>
</tr>

</tbody>
</table>

<span class="pull-right">
<a href="#edit" class="btn btn-success btn-flat btn-sm" id="quickview" data-toggle="modal"><i class="fa fa-edit" style="color: white"></i>  &nbsp;&nbsp; Edit</a>
</span>
</div>
</div>

</div>
</ul>
</div>

<?php include 'includes/profile_modal.php'; ?>

</div>
</div>
</div>
<?php include 'includes/footer.php'; ?>

</div>

</div>
</div>

</div>
<?php include 'includes/scripts.php'; ?>
<!-- JS -->
<script type="text/javascript">
$(document).ready(function() {

$('[data-toggle="popover"]').popover({trigger: 'hover'});

$('.v-tab-head .v-tab-link').mouseover(tabHandler);
$('.v-tab-head.v-tab-link').click(tabHandler);

});

var tabHandler = function(e) {
e.preventDefault();

var target = $($(this).data('target')),
tabLink = $('.v-tab-link[data-target="' + $(this).data('target') + '"]');

tabPanelToShow(tabLink);
tabLinkToActivate(target);

};

var tabPanelToShow = function(elem) {
$('.v-tab-link').removeClass('active').parent().find(elem).addClass('active');
};

var tabLinkToActivate = function(elem) {
$('.v-tab-pane').children('div').removeClass('in').parent().find(elem).addClass('in');
};

</script>

<script type="text/javascript">
//material contact form animation
$(".contact-form")
.find(".form-control")
.each(function () {
var targetItem = $(this).parent();
if ($(this).val()) {
$(targetItem)
.find("label")
.css({
top: "-6px"
, fontSize: "16px"
, color: "#33cc66"
});
}
});
$(".contact-form")
.find(".form-control")
.focus(function () {
$(this)
.parent(".input-block")
.addClass("focus");
$(this)
.parent()
.find("label")
.animate({
top: "-6px"
, left: "10px"
, fontSize: "16px"
, color: "#fff"
}
, 200
);
});
$(".contact-form")
.find(".form-control")
.blur(function () {
if ($(this).val().length == 0) {
$(this)
.parent(".input-block")
.removeClass("focus");
$(this)
.parent()
.find("label")
.animate({
top: "20px"
, left: "10px"
, fontSize: "16px"
}
, 300
);
}
});
</script>
</body>
</html>