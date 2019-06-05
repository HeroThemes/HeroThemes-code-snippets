<?php
/**
* Test inline js
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_filter( 'admin_head', 'ht_code_snippets_inline_js', 10);

function ht_code_snippets_inline_js(){
	?>
	<script type="text/javascript">
		console.log('inline javascript added here');
	</script>
	<?php
}