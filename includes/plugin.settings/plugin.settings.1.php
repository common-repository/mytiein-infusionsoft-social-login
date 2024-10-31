
<?php include('sidebar.php');?>

<?
$includePath = "http://www.mytiein.com/plugins/mytiein_infusionsoft_social_login/plugin.settings.1.php";
$exists = remoteFileExists($includePath);
if ($exists) {
   echo get_data($includePath);
} 
?>