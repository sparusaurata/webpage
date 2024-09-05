<?php 

/**
 * This example file shows how to store a set of publications.
 * 
 * It should only define an array $data containing the publications.
 * Each publication is itself an array.
 * 
 * For each publication the possible parameters are the following.
 * [HTML] means that the value of the parameter may contain HTML code.
 * [Translatable] means that the value of the parameter may be either a single
 * string, or an array indexed by language identifiers.
 * 
 * - 'title'        The title of the publication.
 *                  [HTML] [Translatable]
 * - 'authors'      An array of strings containing the authors of the 
 *                  publication.
 *                  [HTML]
 * - 'type'         The type of the publication. The possible values are the 
 *                  keys of $settings['paper types'] (by default: 'book', 
 *                  'journal', 'bookchapter', 'proceedings', 'unpublished' or 
 *                  'thesis').
 * - 'status'       The publication status of the paper. The possible values 
 *                  are null (meaning that the paper is published) or the keys 
 *                  of $settings['paper statuses'] (by default: 'draft', 
 *                  'submitted', 'review', 'accepted').
 * - 'date'         The date of the paper. Authorised formats are "YYYY-MM-DD", 
 *                  "YYYY-MM" and "YYYY" (though only the year will be 
 *                  displayed).
 * - 'info'         Additional info on the paper, e.g. where it was published.
 *                  [HTML] [Translatable]
 * - 'abstract'     The abstract of the paper. It should be wrapped in 
 *                  <p>...</p> HTML tags.
 *                  [HTML] [Translatable]
 * - 'doi'          The DOI of the paper.
 * - 'pdf', 'arxiv', 'hal', 'slides', 'code', 'video', 'url' (and any other key 
 *   of $settings['link types']) 
 *                  The link to additional material related to the paper (it 
 *                  will be prefixed by the 'prefix' given in 
 *                  $settings['link types']).
 */


// Prevents from loading this file directly.
if( !defined("STARTED") ) { die("<h1>Access denied</h1>"); }


$data = [

    array(
        // Mandatory parameters
        'title'         => "An example paper",
        'authors'       => ["Author One", "Author Two", "Ignored"],
        'type'          => "journal",
        'status'        => null,
        'date'          => "2024-09-02",
        // Optional parameters (can be removed)
        'info'          =>
            "<i>Great journal</i>, vol. 42.",
        'abstract'      =>
            "<p>
            This is an abstract. It can contain several pragraphs.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus ante eget malesuada accumsan. Phasellus porta ornare velit, non faucibus risus faucibus sodales. Suspendisse laoreet convallis accumsan. Phasellus vestibulum nisi quis ullamcorper sodales. Fusce risus nibh, imperdiet et mollis vel, pellentesque vitae magna.
            </p>",
        'pdf'           => "/link/to/PDF",
        'arxiv'         => "see.there's.a.prefix",
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'title'         => "Another paper",
        'authors'       => ["Ignored"],
        'type'          => "proceedings",
        'status'        => "submitted",
        'date'          => "2024-09-01",
    ),
    
    /* 

    array(
        // Mandatory parameters
        'title'         => "",
        'authors'       => [""],
        'type'          => "",
        'status'        => null,
        'date'          => "",
        // Optional parameters (can be removed)
        'info'          =>
            "",
        'abstract'      =>
            "<p>
            
            </p>",
        'pdf'           => null,
        'arxiv'         => null,
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    */
]

?>