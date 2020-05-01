<?php
/**
* Disable theme admin redirect
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/


add_filter( 'disable_theme_admin_redirect', '__return_true' );