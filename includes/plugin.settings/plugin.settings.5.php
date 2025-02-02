
		<?php include('sidebar.php');?>
		<div style="margin-left:10px;">
		<form method="post" id="wsl_setup_form" action="options.php">  
		<?php settings_fields( 'wsl-settings-group-development' );
			$assets_base_url1 = MYTIEIN_INFUS_SOCIAL_LOGIN_PLUGIN_URL . '/assets';
			?>
		
		<h3>Infusionsoft Platform</h3>
		
		<p style="margin-left:25px;"> Before you begin you will need to download the <a href="<?php echo $assets_base_url1;?>/InfusionsoftTags.csv">cvs</a> file and upload it to your Infusionsoft platform.
		</p>
		<h3>Requirements test</h3> 
		
		<p style="margin-left:25px;"> 
			Please click on the button below to make sure your server settings meet this plugin requirements:
			
			<br />
			<br />
			<a class="button-primary" href='<?php echo MYTIEIN_INFUS_SOCIAL_LOGIN_PLUGIN_URL ?>/diagnostics.php?url=http://www.example.com' target='_blank'>Run the plugin diagnostics</a>
		</p>
		
		<br />
		
		<h3>Development mode</h3> 
		
		<p style="margin-left:25px;"> 
			By enabling the development mode, this plugin will generate and display a complete technical reports when something goes wrong. 
		
			<br />
			This report can help your figure out the root of any issues you may runs into, or you can also send it to the plugin developer.
			
			<br />
			Its recommend to set the Development mode to <b style="color:red">Disabled</b> on production.
			
		
			<br />
			<br />
			<select name="wsl_settings_development_mode_enabled">
				<option <?php if(   get_option( 'wsl_settings_development_mode_enabled' ) ) echo "selected"; ?> value="1">Enabled</option>
				<option <?php if( ! get_option( 'wsl_settings_development_mode_enabled' ) ) echo "selected"; ?> value="0">Disabled</option> 
			</select>
			<input type="submit" class="button-primary" value="Save" />
		</p>
		
		</form>
		</div>
		
