<?php
/**
* Overide kb_fe_embed_get_embed_enabled filter
* Front end AI assistant will be disabled
*/

//late filer
add_filter( 'kb_fe_embed_get_embed_enabled', '__return_false', 95, 1);