<!DOCTYPE html>
<html>
<head>
<title>Shbadvriksh</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<style type="text/css">
/************Footer************/
footer {
  color: #686868;

  text-decoration: none;
}
footer .copyright {
  margin-top: 50px;
  letter-spacing: -0.5px;
}

.f-list {
	float: right;
	text-decoration: none;
     margin-right: 30px;
     margin-bottom: 60px;
}
.f-list li {
  display: inline-block;
  position: relative;
  margin-left: 57px;
  font-size: 16px;
  letter-spacing: -0.5px;
}
.f-list li a {
  color: #9c9c9c;
}
.f-list a:hover,
.f-list li.current a {
  color: #3e3e3e;
}

/* Tooltip*/
[data-tooltip] {
	position: relative;
	
	cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
	opacity: 0;
	pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
	position: absolute;
	bottom: 150%;
	left: 50%;
	margin-bottom: 20px;
	margin-left: -80px;
	padding: 7px;
	width: 130px;
	-webkit-border-radius: 3px;
	-moz-border-radius:    3px;
	border-radius:         3px;
	background-color: #000;
	background-color: hsla(0, 0%, 20%, 0.9);
	color: #fff;
	content: attr(data-tooltip);
	text-align: center;
	font-size: 14px;
	line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
	position: absolute;
	bottom: 150%;
	left: 50%;
	margin-left: -5px;
	width: 0;
	border-top: 20px solid #000;
	border-top: 20px solid hsla(0, 0%, 1%, 0.6);
	border-right: 5px solid transparent;
	border-left: 5px solid transparent;
	content: " ";
	font-size: 0;
	line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
	visibility: visible;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
	opacity: 1;
}

</style>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inspired Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
 <script type="text/javascript" src="js/move-top.js"></script>
 <script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>

					    <script src="js/jquery.wmuSlider.js"></script>
				<script>				
					 $('.example1').wmuSlider({
						 pagination:false,
					});         
				</script> 	
          	         

</head>
<body>
	<!--header-->
	<div class="container">
		<div class="header">
			<div class="header-top">
				<div class="logo">
					<a href="index.html"><img src="" alt="" ></a>
				</div>

				<div class="header-top-on">
					<ul class="social-in">
						<li><a href="#" data-tooltip="Like On Facebook"><i> </i></a></li>						
						<li><a href="#" data-tooltip="Share On Twitter"><i class="tin"> </i></a></li>
						<li><a href="#" data-tooltip="Google+"><i class="message"> </i></a></li>
					</ul>
				</div>
			</div>

			<!---->