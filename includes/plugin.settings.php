<?php
function wsl_render_settings()
{
	if ( ! wsl_check_requirements() ){
		include "plugin.fail.php";

		exit();
	}

	GLOBAL $WORDPRESS_SOCIAL_LOGIN_PROVIDERS_CONFIG;

	$wslp = @ (int) $_REQUEST["wslp"];

	if( $wslp < 1 || $wslp > 7 ){
		$wslp = 1;
	}

	include "plugin.settings/plugin.settings.0.php";

}

function wsl_check_requirements()
{
	if
	(
		   ! version_compare( PHP_VERSION, '5.2.0', '>=' )
		|| ! isset( $_SESSION["wsl::plugin"] )	
		|| ! function_exists('curl_init')
		|| ! function_exists('json_decode')
		||   extension_loaded('oauth')  
	)
	return false;
	
	return true;
}
