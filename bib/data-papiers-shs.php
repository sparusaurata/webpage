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

    array(
        'title'         => "Coller en mathématiques. Rite disciplinaire et 
            formation des élites",
        'authors'       => ["R.C."],
        'type'          => "thesis",
        'status'        => null,
        'date'          => "2019-09-05",
        'info'        => array(
            'fr' => 
                "Mémoire de recherche dans le cadre d'un M1 de sciences sociales.
                Sous la direction d'E.&nbsp;Picard.",
            'en' =>
                "First year Master thesis in Social sciences. Under the 
                supervision of E.&nbsp;Picard.",
        ),
    ),
    array(
        'title'         => "Pêcher des poissons pour leur apprendre à
            nager&nbsp;? II.&nbsp;En «&nbsp;colles&nbsp;», les mathématiques au 
            service d'une formation élitiste",
        'authors'       => ["R.C."],
        'type'          => "bookchapter",
        'status'        => NULL,
        'date'          => "2023-10-30",
        'info'          =>
            "In <span style=\"font-variant-ligatures: none;\"
            >P.-M.</span>&nbsp;Menger, P.&nbsp;Verschueren (dir.),
            <i>Le Monde des mathématiques</i>,
            éd. du Seuil (actes du colloque
            «&nbsp;Mathématiques, communautés et institutions&nbsp;»,
            Collège de France, 2020).",
        'abstract'      =>
            "<p>
            L'importance persistante des mathématiques dans l'accès à une 
            grande part des filières d'élite en France pousse à s'interroger 
            sur le rôle concret joué par cette discipline et ses cadres 
            d'enseignement dans la (re)production d'une «&nbsp;jeunesse 
            dominante&nbsp;». Étudiant dans trois lycées prestigieux les 
            «&nbsp;colles&nbsp;» de mathématiques, interrogations orales au 
            cœur du dispositif pédagogique des classes préparatoires, nous 
            montrons que l'apprentissage et l'évaluation des savoirs y sont le 
            support d'une prise en charge institutionnelle des élèves (au moins 
            autant que l'inverse) visant à leur transmettre des dispositions 
            qui excèdent largement le seul cadre des mathématiques. La 
            structure des jugements mathématiques des interrogateurs fait 
            apparaître une valeur <i>d'autonomie</i>, nourrie de la dualité 
            rigueur/intuition classique en mathématiques, qui renouvelle 
            l'idéologie du don bourdieusienne et interfère avec le passé social 
            des élèves — au risque d'agir en différenciant leurs trajectoires.
            </p>",
        'pdf'           => "./fichiers/papiers/colles.pdf",
        'url'           => "https://www.seuil.com/ouvrage/le-monde-des-mathematiques-collectif/9782021530704",
    ),
]

?>