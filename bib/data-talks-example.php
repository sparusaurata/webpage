<?php 

/**
 * This example file shows how to store a set of talks.
 * 
 * It should only define an array $data containing the talks.
 * Each talk is itself an array.
 * 
 * For each talk the possible parameters are the following.
 * [HTML] means that the value of the parameter may contain HTML code.
 * [Translatable] means that the value of the parameter may be either a single
 * string, or an array indexed by language identifiers.
 * 
 * - 'title'        The title of the talk.
 *                  [HTML] [Translatable]
 * - 'type'         The type of the talk. The possible values are the 
 *                  keys of $settings['talk types'] (by default: 'conference', 
 *                  'seminar', 'poster', 'dissemination' or 'defence').
 * - 'date'         The date of the talk. Authorised formats are "YYYY-MM-DD", 
 *                  "YYYY-MM" and "YYYY".
 * - 'event'        The event where the talk took place.
 *                  [HTML] [Translatable]
 * - 'location'     The location of the event where the talk took place.
 *                  [HTML] [Translatable]
 * - 'info'         Additional info on the talk.
 *                  [HTML] [Translatable]
 * - 'pdf', 'arxiv', 'hal', 'slides', 'code', 'video', 'url' (and any other key 
 *   of $settings['link types']) 
 *                  The link to additional material related to the talk (it 
 *                  will be prefixed by the 'prefix' given in 
 *                  $settings['link types']).
 */


// Prevents from loading this file directly.
if( !defined("STARTED") ) { die("<h1>Access denied</h1>"); }


$data = [

    array(
        // Mandatory parameters
        'title'         => "A great talk",
        'type'          => "conference",
        'date'          => "2024-09-02",
        // Optional parameters (can be removed)
        'event'         => "a nice conference",
        'location'      => "Mars", 
        'info'          => "Invited talk.",
        'pdf'           => "/link/to/my.pdf",
        'slides'        => "/link/to/my.slides",
    ),

    array(
        // Mandatory parameters
        'title'         => "Another talk",
        'type'          => "seminar",
        'date'          => "2024-09-01",
    ),

    /* 

    array(
        // Mandatory parameters
        'title'         => "",
        'type'          => "",
        'date'          => "",
        // Optional parameters (can be removed)
        'event'         => "",
        'location'      => "", 
        'info'          => "",
        'pdf'           => null,
        'video'         => null,
        'slides'        => null,
    ),

    */

];

?>
