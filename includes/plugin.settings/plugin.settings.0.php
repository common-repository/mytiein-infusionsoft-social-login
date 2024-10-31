<?
add_action( 'admin_print_scripts', 'load_scripts' );
add_action( 'admin_print_styles' , 'load_styles' );
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'jquery-ui-core' );
wp_enqueue_script( 'jquery-ui-tabs' );
wp_enqueue_style ( 'jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/base/jquery-ui.css' );
global $wpdb;
function get_data($url)
{
	$ch = curl_init();
	$userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
function remoteFileExists($url) {
    $curl = curl_init($url);

    //don't fetch the actual page, you only want to check the connection is ok
    curl_setopt($curl, CURLOPT_NOBODY, true);

    //do request
    $result = curl_exec($curl);

    $ret = false;

    //if request did not fail
    if ($result !== false) {
        //if request was ok, check response code
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  

        if ($statusCode == 200) {
            $ret = true;   
        }
    }

    curl_close($curl);

    return $ret;
}
?>
<style type="text/css"> 
h3{
font-size: 1.17em;
margin: 1em 0;

display: inline-block;
}
#wsl_setup_form .inputgnrc, #wsl_setup_form select {
    font-size: 15px;
    padding: 6px 3px; 
    border: 1px solid #CCCCCC;
    border-radius: 4px 4px 4px 4px;
    color: #444444;
    font-family: arial;
    font-size: 16px;
    margin: 0;
    padding: 3px;
    width: 300px;
} 
#wsl_setup_form .inputsave {
    font-size: 15px;
    padding: 6px 3px;  
    color: #444444;
    font-family: arial;
    font-size: 18px;
    margin: 0;
    padding: 3px;
    width: 400px;
	height: 40px;
} 
#wsl_setup_form ul {
    list-style: none outside none; 
}
#wsl_setup_form .cgfparams ul {
    padding: 0;
	margin: 0;
}
#wsl_setup_form ul li {
    color: #555555;
    font-size: 13px;
    margin-bottom: 10px;
    padding: 0;
}
#wsl_setup_form ul li label {
    color: #000000;
    display: block;
    font-size: 14px;
    font-weight: bold;
	padding-bottom: 5px;
}
#wsl_setup_form .cfg { 
	background: #f5f5f5;
	float: left;
	border-radius: 2px 2px 2px 2px;
	border: 1px solid #AAAAAA;
	margin: 0 0 0 30px;
	width:95%;
}
#wsl_setup_form .cgfparams {
   padding: 8px;
   float: left;
   border-right: 1px solid black;
}
#wsl_setup_form .cgftip {
   margin-left: 340px;
   padding: 20px;
   min-height: 202px; 
   width: 770px;
   width: 600px; 
   padding-top: 1px;
	width: 450px;
} 

/* tobe fixed .. */
#footer {
    display:none; 
}
#wsl_setup_form p {
	font-size: 14px;
}
.wsl_label_notice {
    background-color: #BFBFBF; 
    border-radius: 3px 3px 3px 3px;
    color: #FFFFFF;
    font-size: 9.75px;
    font-weight: bold;
    padding: 1px 3px 2px;
    text-transform: uppercase;
    white-space: nowrap;
}
 .videoPlayer{
 border-left: 1px solid #AAA;
margin-left: 450px;
padding: 10px;
min-height: 202px;
width: 770px;
width: 600px;
padding-top: 1px;
width: 325px;
}
#wsl_setup_form .inputgnrc, #wsl_setup_form select { 
    font-size: 14px; 
}
#infusbody{
	display:none;
}
	
#tabs{
width: 851px;
float: left;
}
.ui-tabs .ui-tabs-panel {
padding:0px !important;
}
</style> 
<script type="text/javascript" charset="utf8" >
	jQuery(document).ready(function($) {
		$("#tabs").tabs({ selected: 1 });
	 	$('#infusbody').css('display','block');
    	$('#msg').hide();
    	
		
	});
</script>
<div id="msg" style="font-size:largest;">

Loading, please wait...
</div>
<div id="infusbody">
<h2 style="padding-bottom: 10px;">MyTieIn Infusionsoft Social Login 
	<span class="wsl_label_notice">Beta</span>
	
<?php
	if( get_option( 'wsl_settings_development_mode_enabled' ) ){
		?>
			<small style="color:red;font-size: 14px;">(Development Mode On)</small>
		<?php
	}
?>
</h2>  


<div id="tabs" stye="width: 900px;">
	<ul class="tabNavigation">
		<li><a href="#tab1">Overview</a></li>
		<li><a href="#tab2">Providers setup</a></li>
		<li><a href="#tab3">Customize</a></li>
		<li><a href="#tab4">Insights</a></li>
		<li><a href="#tab5">Diagnostics</a></li>
		<li><a href="#tab6">Help</a></li>
	</ul>

	<div id="tab1">
		<?php include('overview.php');?>
	</div>
	<div id="tab2">
		<?php include('providersetup.php');?>	
	</div>
	<div id="tab3">
		<?php include('customize.php');?>		
	</div>
	<div id="tab4">
		<?php include('insights.php');?>	
	</div>
	<div id="tab5">
		<?php include('diagnose.php');?>
	</div>
	<div id="tab6">
		<?php include('info.php');?>	
	</div>
	</div>
	<div style="float:right;">
	<?php include('sidebar.php');?>
	</div>
</div>
