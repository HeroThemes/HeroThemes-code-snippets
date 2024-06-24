<?php
/**
* Remove the contact support bubble from the AI Assistant by passing in an empty string
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

add_filter('ht_ai_search_text_response_after', 'ht_code_snippets_ht_return_custom_text');

function ht_code_snippets_ht_return_custom_text($response_text) {
    return '';
}
