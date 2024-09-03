<?php 

/**
 * This example file shows how to store a menu.
 * 
 * It should only define an array $menu containing the menu items.
 * Each item is itself an array.
 * 
 * For each item the possible parameters are the following.
 * [HTML] means that the value of the parameter may contain HTML code.
 * [Translatable] means that the value of the parameter may be either a single
 * string, or an array indexed by language identifiers.
 * 
 * - 'text'         The text that will be displayed in the menu.
 *                  [HTML] [Translatable]
 * - 'url'          The URL to which the item links. This can be a relative 
 *                  path, an anchor link or an outer link. 
 * - 'newtab'       A boolean indicating whether the link should be opened in a
 *                  new tab (this is intended for outer links).
 * - 'class'        Any class to be passed to the link (this is intended for
 *                  advanced styling).
 * - 'nolang'       By default, when $settings['multilingual'] == 'dynamic',
 *                  the menu links are suffixed with ?lang=xx, where xx is the
 *                  identifier of the current language. This boolean locally
 *                  turns this behaviour off.
 */


// Prevents from loading this file directly.
if( !defined("STARTED") ) { die("<h1>Access denied</h1>"); }


$menu = [

    array(
        'text'      => array(
            "en" => "An inner link", 
            "fr" => "Un lien interne"
        ),
        'url'       => "./index.php",
    ),

    array(
        'text'      => array(
            "en" => "An anchor link", 
            "fr" => "Une ancre"
        ),
        'url'       => "#anchor",
        'nolang'    => true,
    ),

    array(
        'text'      => array(
            "en" => "An outer link", 
            "fr" => "Un lien externe"
        ),
        'url'       => "https://another.website",
        'newtab'    => true,
        'nolang'    => true,
    ),

    /*

    array(
        'text'      => array(
            "en" => "", 
            "fr" => ""
        ),
        'url'       => "",
        // Optional parameters (can be removed)
        'newtab'    => false,
        'class'     => "",
        'nolang'    => false,
    ),

    */
    
];

?>