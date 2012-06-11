<?php
$_REQUEST['app']='register';
include_once('info.php');

$url="itms-services://?action=download-manifest&url={$infoURL}";
?>

	  				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>OTA下载 "<?php echo $name ?>"</title>
    <script type="text/javascript">
        function hideAddressBar() { window.scrollTo(0, 1); }
    </script>
    <style>
    	
    	body {
    	padding: 0px;
    	margin: 50px 0px 0px 0px;
    	width: 100%;
    	color: #FFF;
    	font-family: Helvetica;
    	background:#12579A -webkit-gradient(linear, 0 0, 0 380, from(#042153), to(#12579A)) no-repeat;
    	}
    	.mainDiv {
    	
    	padding-top: 11px;
    	
    	width: 320px;
    	height: 340px;
    	font-size: 18px
    	}
    	    	
    	.version {
    	
    	
    	margin: -16px 0px 5px 0px;
    	font-size: 13px;
    	text-align: center;
    	
    	color: #93d1fa
    	}
    	
    	a.tapLink:link,a.tapLink:visited,a.tapLink:hover {
    	margin: 10px 0px 0px 10px;
    	text-shadow: none;
    	text-decoration: none;
    	display: block;
    	height: 60px
    	}
    	.well {
    	width: 300px;
    	margin-bottom: 6px;
    	border: 1px solid rgba(108, 167, 238, 0.23);
    	background: rgba(0, 0, 0, 0.1);
    	-webkit-border-radius: 14px;
    	-moz-border-radius: 14px
    	}
    	a.tapLink div {
    	padding: 13px 18px 13px 65px;
    	
    	text-align: center;
    	font-size: 20px;
    	font-weight: bold;
    	color: #FFF;
    	text-shadow: rgba(0, 0, 0, 0.4) 0px 1px 0px
    	}
    	
    	#install {
    	
    	background-image:url("<?php echo $imgURL ?>");
    	  background-repeat:no-repeat;
    	  background-size:54px;
    	}
    	
    	ul {
    	color: #FFF;
    	text-shadow: rgba(0, 0, 0, 0.4) 0px 1px 0px
    	text-decoration: none;
    	
    	line-height: 5px;
    	
    	text-align:left;
    	font-size: 15px;
    	}
    	.copyright {
    	font-size: 14px;
    	
    
    	text-shadow: 
    	rgba(0, 0, 0, 0.4) 0px 1px 0px;
    	color: #fff;
    	}
    	.separator {
    	width: auto;
    	height: 1px;
    	background-color: #6ca7ee;
    	opacity: 0.23;
    	-moz-opacity: 0.23
    	}
    	@media all and ( orientation: landscape) {body {
    	margin: 15px 0px 0px 0px
    	}
    	
    	}
    	
    </style>
</head>

<body onload= "hideAddressBar();" onorientationchange= "hideAddressBar();">
	<center>
		<div class="mainDiv">
	  		<div class="contentDiv">
	  			<div class="well">
	  				
	  				<a id="install" class="tapLink" href="<?php echo $url ?>"><div>安装“<?php echo $name ?>”</div></a>
	  				<div class="version">版本: <?php echo $version ?></div>
	  				
	  			</div>
	  			
	  			
	    	</div>
		</div>
		
		<div class="copyright">© 2012 Plumn.com 版权所有</div>
	</center>
	

	
</body>
</html>


		
	  				
	  			
