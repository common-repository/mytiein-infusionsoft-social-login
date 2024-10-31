<?php
$infusionSoftTags = Array(
	Array(
		"tag_id" 		=> 1000,
		"tag_name" 		=> "Google",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1001,
		"tag_name" 		=> "Facebook",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1002,
		"tag_name" 		=> "Twitter",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1003,
		"tag_name" 		=> "Windows Live",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1004,
		"tag_name" 		=> "MySpace",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1005,
		"tag_name" 		=> "Foursquare",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1006,
		"tag_name" 		=> "LinkedIn",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1007,
		"tag_name" 		=> "Yahoo!",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1008,
		"tag_name" 		=> "AOL",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1009,
		"tag_name" 		=> "Last.FM",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1010,
		"tag_name" 		=> "Identica",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1011,
		"tag_name" 		=> "Gowalla",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1012,
		"tag_name" 		=> "Tumblr",
		"tag_category" 	=> "Wordpress Tags"
	),
	Array(
		"tag_id" 		=> 1014,
		"tag_name" 		=> "Goodreads",
		"tag_category" 	=> "Wordpress Tags"
	)
);
$WORDPRESS_SOCIAL_LOGIN_PROVIDERS_CONFIG = ARRAY(
	ARRAY( 
		"provider_id"       => "Infusionsoft",
		"provider_name"     => "Infusionsoft", 
		"require_client_id" => TRUE, 
		"new_app_link"      => "http://www.infusionsoft.com", 
	)
	,
	ARRAY( 
		"provider_id"       => "Facebook",
		"provider_name"     => "Facebook", 
		"require_client_id" => TRUE, 
		"new_app_link"      => "https://www.facebook.com/developers/", 
	)
	,
	ARRAY(
		"provider_id"       => "Google",
		"provider_name"     => "Google",
		"callback"          => TRUE,
		"require_client_id" => TRUE,
		"new_app_link"      => "https://code.google.com/apis/console/", 
	) 
	,
	ARRAY( 
		"provider_id"       => "Twitter",
		"provider_name"     => "Twitter", 
		"new_app_link"      => "https://dev.twitter.com/apps", 
	)
	,
	ARRAY( 
		"provider_id"       => "Live",
		"provider_name"     => "Windows Live", 
		"require_client_id" => TRUE,
		"new_app_link"      => "https://manage.dev.live.com/ApplicationOverview.aspx", 
	)
	,
	ARRAY( 
		"provider_id"       => "MySpace",
		"provider_name"     => "MySpace", 
		"new_app_link"      => "http://www.developer.myspace.com/", 
	)
	,
	ARRAY( 
		"provider_id"       => "Foursquare",
		"provider_name"     => "Foursquare",
		"callback"          => TRUE,
		"require_client_id" => TRUE, 
		"new_app_link"      => "https://www.foursquare.com/oauth/", 
	)
	,
	ARRAY( 
		"provider_id"       => "LinkedIn",
		"provider_name"     => "LinkedIn", 
		"new_app_link"      => "https://www.linkedin.com/secure/developer", 
	)
	,
	ARRAY( 
		"provider_id"       => "Yahoo",
		"provider_name"     => "Yahoo!", 
		"new_app_link"      => NULL, 
	)
	,
	ARRAY( 
		"provider_id"       => "AOL",
		"provider_name"     => "AOL", 
		"new_app_link"      => NULL, 
	)
	,
	ARRAY( 
		"provider_id"       => "LastFM",
		"provider_name"     => "Last.FM", 
		"new_app_link"      => "http://www.lastfm.com/api/account", 
	)
	,
	ARRAY( 
		"provider_id"       => "Identica",
		"provider_name"     => "Identica", 
		"new_app_link"      => "http://identi.ca/settings/oauthapps/new", 
	)
	,
	ARRAY( 
		"provider_id"       => "Gowalla",
		"provider_name"     => "Gowalla", 
		"require_client_id" => TRUE,
		"callback"          => TRUE,
		"new_app_link"      => "http://gowalla.com/api/keys", 
	)
	,
	ARRAY( 
		"provider_id"       => "Tumblr",
		"provider_name"     => "Tumblr", 
		"new_app_link"      => "http://www.tumblr.com/oauth/apps", 
	),
	ARRAY( 
		"provider_id"       => "Goodreads",
		"provider_name"     => "Goodreads", 
		"callback"          => TRUE,
		"new_app_link"      => "http://www.goodreads.com/api", 
	)	
);
