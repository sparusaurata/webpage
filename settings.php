<?php

/**
 * This is an example settings file. Most settings are just the default.
 * To change your custom settings, edit this file (or whichever file is
 * loaded by the start_content() function).
 * 
 * If you want to start a new settings file, use a copy of
 * includes/default-settings.php. 
 */

// Initialisation
$settings = array();
global $settings;


////////// GLOBAL SETTINGS ////////////////////////////////////////////////////


/**
 * The path to the root of the website, starting from the (virtual) root of the 
 * web server. If the URL to your website is https://www.site.ext/path/to/site,
 * this should be set to "/path/to/site/". 
 */
$settings['site root'] = "/";


/**
 * The path to the directory on the (physical) server corresponding to the
 * root of the website, i.e. the directory where the documents are stored.
 * 
 * This is the first thing you should check if the site is just a blank page.
 * Activate debugging in includes/template.php and read the error messages.
 */
$settings['server root'] = $_SERVER['DOCUMENT_ROOT'] . $settings['site root'];


/**
 * Add any <meta> tags here, to specify e.g. the author or a description.
 * Syntax:
 *      $settings['more_metas'] = array(
 *          "name" => *content*,
 *          ...
 *      )
 * The *content* can be a single string, or an array of strings whose keys are
 * language identifiers.
 */
$settings['more metas'] = array();


/**
 * The path to the favicon of the website (the value of $settings['root'] will
 * be added as a prefix).
 * Set to null to leave it unspecified (e.g. if the favicon is already
 * specified on the server).
 */
$settings['favicon'] = null;


/** 
 * The text of the title and subtitle of the website, that will be displayed
 * in the header of each page (if not set to null).
 * They can be a single string, or an array of strings whose keys are
 * language identifiers.
 */
$settings['title'] = "Title of the website";
$settings['subtitle'] = array(
    "en" => "This is the English version",
    "fr" => "Ceci est la version française",
);


////////// LAYOUT /////////////////////////////////////////////////////////////


/**
 * Specify the path to the CSS layout of the website.
 * Instead of modifying the default stylesheets, it is advised to modify a
 * copy and to reference the copy in the following option. 
 * The value of $settings['root'] will be added as a prefix of the given
 * path.
 */
$settings['layout']  = "includes/default-layout.css";


////////// LANGUAGES //////////////////////////////////////////////////////////


/**
 * Whether the website is translated in several languages.
 * The three options are:
 *  - 'static', i.e. there is a copy of each page in each language (which
 *    is the only way to handle multiple languages is PHP is not available
 *    on your web server),
 *  - 'dynamic', i.e. each page contains a copy of its content in each
 *    language,
 *  - any other value is interpreted as negative.
 */
$settings['multilingual'] = "dynamic";


/**
 * The identifier(s) of the language(s) of the website.
 * This array should never be empty.
 * If several languages are given, the first one will be treated as the 
 * default language.
 * If $settings['multilingual'] is not set to 'static' or 'dynamic', only the
 * first language will be considered.
 */
$settings['languages'] = ['en', 'fr'];


////////// ADDITIONAL COMPONENTS //////////////////////////////////////////////


/**
 * Whether KaTeX should be loaded. This component is used to render math
 * inside the webpages.
 * See https://katex.org/ for licensing and technical information.
 */
$settings['katex'] = true;


////////// LISTS OF PUBLICATIONS AND TALKS ////////////////////////////////////


/**
 * Translations used in the lists of publications and talks.
 */
$settings['translations']['abstract'] = array(
    'en' => "abstract",
    'fr' => "résumé",
);
$settings['translations']['and'] = array(
    'en' => "and",
    'fr' => "et",
);
$settings['translations']['with'] = array(
    'en' => "with",
    'fr' => "avec",
);


/**
 * The different types of publications. This will be used e.g. when the
 * publications are grouped by type (in the given order!).
 * 'item' and 'group' can be either a single string, or an array
 * indexed by language identifiers.
 */
$settings['paper types'] = array(
    'book' => array(
        'icon'      => "includes/icons/1f4d8.svg",
        'item'  => array(
            'en' => "Book",
            'fr' => "Livre",
        ),
        'group'    => array(
            'en' => "Books",
            'fr' => "Livres",
        ),
    ),
    'journal' => array(
        'icon' => "includes/icons/1f4c4.svg",
        'item'  => array(
            'en' => "Journal article",
            'fr' => "Article dans une revue",
        ),
        'group'    => array(
            'en' => "Journal articles",
            'fr' => "Articles dans une revue",
        ),
    ),
    'bookchapter' => array(
        'icon' => "includes/icons/1f4d6.svg",
        'item'  => array(
            'en' => "Book chapter",
            'fr' => "Chapitre d'ouvrage",
        ),
        'group'    => array(
            'en' => "Book chapters",
            'fr' => "Chapitres d'ouvrages",
        ),
    ),
    'proceedings' => array(
        'icon' => "includes/icons/1f4ac.svg",
        'item'  => array(
            'en' => "Conference article",
            'fr' => "Article dans les actes d'une conférence",
        ),
        'group'    => array(
            'en' => "Conference proceedings",
            'fr' => "Actes de conférences",
        ),
    ),
    'unpublished' => array(
        'icon' => "includes/icons/1f4dd.svg",
        'item'  => array(
            'en' => "Unpublished",
            'fr' => "Non publié",
        ),
        'group'    => array(
            'en' => "Unpublished work",
            'fr' => "Travaux non publiés",
        ),
    ),
    'thesis' => array(
        'icon' => "includes/icons/1f393.svg",
        'item'  => array(
            'en' => "Thesis",
            'fr' => "Mémoire",
        ),
        'group'    => array(
            'en' => "Theses",
            'fr' => "Mémoires",
        ),
    )
);


/**
 * The possible statuses of a publication.
 * There sould *not* be a 'published' status: published publications will
 * be given a null status.
 * The statuses can be described by a single string, or by an array indexed
 * by language identifiers.
 */

 $settings['paper statuses'] = array(
    'draft' => array(
        'en' => "unpublished",
        'fr' => "non publié",
    ),
    'submitted' => array(
        'en' => "submitted",
        'fr' => "soumis",
    ),
    'review' => array(
        'en' => "under review",
        'fr' => "en révision",
    ),
    'accepted' => array(
        'en' => "to appear",
        'fr' => "à paraître",
    )
);


/**
 * An array of authors that will not be printed.
 * This intended for the (variants of the) name of the website's author, so
 * that only the name of their co-authors will appear.
 */
$settings['ignored authors'] = ["Ignored"];


/**
 * The different types of talks. This will be used e.g. when the
 * talks are grouped by type (in the given order!).
 * 'item' and 'group' can be either a single string, or an array
 * indexed by language identifiers.
 */
$settings['talk types'] = array(
    'conference' => array(
        'icon'      => "includes/icons/1f399.svg",
        'item'  => array(
            'en' => "Conference or workshop",
            'fr' => "Conférence ou colloque",
        ),
        'group'    => array(
            'en' => "Conferences and workshops",
            'fr' => "Conférences et colloques",
        ),
    ),
    'seminar' => array(
        'icon' => "includes/icons/1f6e0.svg",
        'item'  => array(
            'en' => "Seminar",
            'fr' => "Séminaire",
        ),
        'group'    => array(
            'en' => "Seminars",
            'fr' => "Séminaires",
        ),
    ),
    'poster' => array(
        'icon' => "includes/icons/1f5fa.svg",
        'item'  => "Poster",
        'group' => "Posters",
    ),
    'dissemination' => array(
        'icon' => "includes/icons/1f37f.svg",
        'item'  => array(
            'en' => "Non-specialist talk",
            'fr' => "Exposé grand public",
        ),
        'group'    => array(
            'en' => "Non-specialist talks",
            'fr' => "Exposés pour non-spécialistes",
        ),
    ),
    'defence' => array(
        'icon' => "includes/icons/1f393.svg",
        'item'  => array(
            'en' => "Defence",
            'fr' => "Soutenance",
        ),
        'group'    => array(
            'en' => "Defences",
            'fr' => "Soutenances",
        ),
    )
);


/**
 * The different types of links related to a publication or a talk.
 * The 'text' can be a single string, or an array indexed by language 
 * identifiers.
 * An optional 'prefix' will be prepended to the URLs.
 */
$settings['link types'] = array(
    'pdf' => array(
        'text' => "PDF",
    ),
    'arxiv' => array(
        'prefix' => "https://arxiv.org/abs/",
        'text' => "arXiv",
    ),
    'hal' => array(
        'prefix' => "https://hal.archives-ouvertes.fr/",
        'text' => "HAL",
    ),
    'slides' => array(
        'text' => array(
            'fr' => "Diapos",
            'en' => "Slides"
        )
    ),
    'code' => array(
        'text' => "Code",
    ),
    'video' => array(
        'text' => array(
            'fr' => "Vidéo",
            'en' => "Video"
        )
    ),
    'url' => array(
        'text' => array(
            'fr'  => "Lien",
            'en'  => "URL",
        )
    ),
);



?>