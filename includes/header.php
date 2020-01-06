    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="./images/favicon.jpg" rel="icon">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

<!-- Magnify -->
<link rel="stylesheet" href="magnify/magnify.min.css">
<link rel="stylesheet" type="text/css" href="includes/mediaquery.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
<!-- Paypal Express -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<!-- Google Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Custom CSS -->
<style type="text/css">
/* width */
::-webkit-scrollbar {
width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
box-shadow: inset 0 0 5px grey;
}

/* Handle */
::-webkit-scrollbar-thumb {
background: grey;
border-radius: 10px;
}

body{
font-family: 'Alatsi', sans-serif;
}
.content-wrapper{
    background-image: linear-gradient(254deg, #5909b3, #7f0dff);
}
.control-label{
    margin-bottom:10px;
    text-transform:uppercase;
    letter-spacing:1px;
}
.form-control{
    background:none;
    border:none;
    color:white;
    margin-bottom:10px;
    border-bottom:1px solid white;

}

.h-bg{
    color:white;
    width:100%;
}
.modal.fade{
backdrop-filter:blur(5px);
background:rgba(0,0,0,0.5)
}

.modal-content, .modal-header {
background-image: linear-gradient(254deg, #5909b3, #7f0dff);
border-radius: 5px;
}

.modal-body p{
color:white;
}
.modal-title{
padding:10px 20px;
}
.modal.fade{
backdrop-filter: blur(4px)
}
html{
scroll-behavior: smooth;
}
.search-icon {
position: relative;
float: right;
width: 615px;
height: 25px;
top: -35px;
right: 5px;
color: red;
background-color: white;
border: none;
font-weight: bolder;
}
.btn-success, #quickview{
border: none;
color: #ffffff;
cursor: pointer;
border: 0.25rem;
padding: 0 18px;
max-width: 150px;
min-width: 136px;
font-size: 14px;
min-height: 40px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
background: #7f0dff;
font-weight: 500;
font-family: "Rubik", sans-serif;
margin-right: 10px;
text-transform: capitalize;
background-image: linear-gradient(254deg, #5909b3, #7f0dff);
transition-property: background;
transition-duration: 1s;
transition-timing-function: linear;
}

#quickview{
background: none;
margin-left: 50px;
line-height: 40px;
border: 1px solid white;color: white;
}

.profile-card {
width: 100%;
min-height: auto;
box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
background: #fff;
border-radius: 12px;
max-width: 700px;
position: relative;
margin-top: 50px;

}

.profile-card__img {
width: 150px;
height: 150px;
margin-left: auto;
margin-right: auto;
transform: translateY(-70%);
border-radius: 70%;
overflow: hidden;
position: relative;
z-index: 4;
box-shadow: 0px 5px 50px 0px #6c44fc, 0px 0px 0px 7px rgba(107, 74, 255, 0.5);
}
@media screen and (max-width: 576px) {
.profile-card__img {
width: 120px;
height: 120px;
}
}
.profile-card__img img {
display: block;
width: 100%;
height: 100%;
object-fit: cover;
border-radius: 20%;    
}

.navbar-custom-menu .nav1 li{
    padding:10px;
    list-style-type:none;

}

.navbar-custom-menu .nav1 li a{
    }    </style>
</head>