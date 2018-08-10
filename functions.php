<?php

//Async scripts
function add_async_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_async = array( 'bootstrap', 'bravad-js');
   
   foreach($scripts_to_async as $async_script) {
      if ($async_script === $handle) {
         return str_replace(' src', ' async="async" src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

//Remove query string from javascripts and styles
function remove_script_version( $src ){ 
    $parts = explode( '?', $src );  
    return $parts[0]; 
} 
add_filter( 'script_loader_src', 'remove_script_version', 15, 1 ); 
add_filter( 'style_loader_src', 'remove_script_version', 15, 1 );