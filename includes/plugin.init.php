<?php
function wsl_admin_menu()
{
	add_options_page('MyTieIn Social Login', 'MyTieIn Social Login', 'manage_options', 'mytiein-infusionsoft-social-login', 'wsl_render_settings' );
	
	add_action( 'admin_init', 'wsl_register_setting' );
}

add_action('admin_menu', 'wsl_admin_menu' );

function wsl_register_setting()
{
	GLOBAL $WORDPRESS_SOCIAL_LOGIN_PROVIDERS_CONFIG;

	foreach( $WORDPRESS_SOCIAL_LOGIN_PROVIDERS_CONFIG AS $item ){
		$provider_id          = @ $item["provider_id"]; 
		$require_client_id    = @ $item["require_client_id"];
		$require_registration = @ $item["new_app_link"];

		register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_enabled' );  
		register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_taggid' ); 

		if ( $require_registration ){ // require application?
			if ( $require_client_id ){ // key or id ?
				register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_app_id' ); 
			}
			else{
				register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_app_key' ); 
			}

			register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_app_secret' ); 
			register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_taggid' );
			register_setting( 'wsl-settings-group', 'wsl_settings_' . $provider_id . '_actionset' );

			
		}
	}
	
	register_setting( 'wsl-settings-group', 'wsl_settings_Infusionsoft_applicationName' );
	register_setting( 'wsl-settings-group', 'wsl_settings_Infusionsoft_passphrase' ); 
	register_setting( 'wsl-settings-group', 'wsl_settings_Infusionsoft_encryptedkey' ); 	
	register_setting( 'wsl-settings-group-customize'  , 'wsl_settings_connect_with_label' ); 
	register_setting( 'wsl-settings-group-customize'  , 'wsl_settings_social_icon_set' ); 
	register_setting( 'wsl-settings-group-customize'  , 'wsl_settings_users_avatars' ); 
	register_setting( 'wsl-settings-group-customize'  , 'wsl_settings_redirect_url' ); 

	register_setting( 'wsl-settings-group-development', 'wsl_settings_development_mode_enabled' ); 
}
