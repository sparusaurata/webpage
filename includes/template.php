<?php 

/**
 * This file contains the core of the template.
 * You may need to read the documentation of the following functions:
 * - start_content,
 * - end_content,
 * - publications,
 * - talks.
 * You can find it in the "User functions" section, just below.
 */


/* Set to true to show more error messages. */
$debugging = true;
if ( $debugging ) {
    /* Uncomment the following line if you're trying to find the server root. */
    //echo "The current directory is " . getenv("PWD") . ".";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}


////////// USER FUNCTIONS /////////////////////////////////////////////////////

/**
 * Starts the content of the page by
 * - loading the global and local settings,
 * - displaying the HTML <head>
 * - displaying the header of the page.
 */
function start_content (
    // The link to the settings file
    $settingsfile   = "./settings.php",
    // The language of the page
    // (only useful if $settings['multilingual'] == 'static')
    $language       = null,
    // The content of the main menu:
    // either as an array,
    // or as a link to a file defining a $menu array
    $menu           = null,
    $menufile       = null,
    // The title of the page (this can be either a string, or an array indexed
    // by language identifiers)
    $title          = "Home",
    // An array indexed by language identifiers, giving the versions of the page
    // for other languages
    // (only useful if $settings['multilingual'] == 'static')
    $translations   = array()
) {
    // Check if the calling page is included in another page.
    // In this case the content should not be started a second time.
    if ( !defined("STARTED") ) {

        // Set a boolean telling includes that they're included.
        define("STARTED", true);

        // Load the settings a first time, just to get $settings['site root'].
        require($settingsfile);
        // Define the root of the website.
        // The method depend whether php is called from the command-line
        // (this is the case when a static site is generated) or from a web
        // server.
        if ( php_sapi_name() === 'cli' ) {
            $settings['server root'] = getenv('PWD') . "/";
        }
        // Load the default settings, then the custom settings again.
        include_once($settings['server root'] . "includes/default-settings.php");
        include($settingsfile);
        if ( php_sapi_name() === 'cli' ) {
            $settings['server root'] = getenv('PWD') . "/";
        }
        define("MLING",
            $settings['multilingual'] == 'static'
            or $settings['multilingual'] == 'dynamic'
        );

        // Load the page data.
        global $pagedata; $pagedata = array();
        $pagedata['language'] = get_language($language);
        if ( $menufile ) { include($settings['server root'] . $menufile); }
        $pagedata['menu'] = $menu;
        $pagedata['title'] = $title;
        if ( MLING ) {
            foreach ( $settings['languages'] as $l ) {
                if ($l != $pagedata['language']) {
                    $pagedata['translation ' . $l] = 
                        get_translation($translations, $l);
                }
            }
        }

        // Print the header.
        require($settings['server root'] . "includes/header.php");
        echo "\n<!---------- HERE THE CONTENT STARTS ------------------------------------------>\n";
    }

    else { define("INCLUDED", true); }
}


/**
 * Ends the content of the page.
 */
function end_content () {
    global $settings, $pagedata;
    
    // Check if the calling page is included in another page.
    // In this case the content should not be closed yet.
    if ( !defined("INCLUDED") ) {
        echo "\n<!---------- HERE THE CONTENT ENDS ---------------------------------------->\n";
        require($settings['server root'] . "includes/footer.php");
    }
}


/**
 * Prints a lists of publications.
 */
function publications(
    // A unique identifier of the list
    $id,
    // An array of strings, each one containing a class to be
    // passed to the list (this is intended for advanced styling)
    $class = array(),
    // The bibliographic data to be printed,
    // either as a file defining an array $data,
    // or directly as an array
    // (see bib/data-papers-example.php for formatting details)
    $datafile = null,
    $data = null,
    // Whether the chronological order should be ascending or not
    $oldfirst = false, 
    // Whether the publications should be printed in separate groups.
    // Possible values: null (no grouping), 'date' (grouping by year), 'type' 
    // (grouping by publication types as defined in $settings ['paper types']).
    // Custom values (describing a field in each element of $data) are 
    // possible, in which case the $groups must be given explicitely (following
    // the syntax of $settings ['paper types']).
    $groupby = null,
    $groups = null,
    // -- all remaining options have no effect if $groupby is null --
    // The HTML tag used for the heading of each group
    // (predefined versions are h1, h2, h3)
    $groupheadtag = "h3",
    // Whether the groups should be hideable (using the HTML <details> tag)
    $foldable = false,
    // The initial behaviour of foldable groups
    $folded = true,
    // The initial behaviour of the first group
    $firstfolded = false
) {
    global $settings, $pagedata;

    if ( $groupby == 'type' and is_null($groups) ) {
        $groups = $settings['paper types'];
    }
    elseif ( is_null($groups)
    and      !in_array($groupby, [null, 'date']) ) {
        throw new InvalidArgumentException("Function publications():
        the argument \$groupby should be null, 'date' or 'type'.");
    }

    echo get_list(
        "get_paper", $id, ["papers"] + $class,
        $datafile, $data, $oldfirst,
        $groupby, $groups, $groupheadtag,
        $foldable, $folded, $firstfolded
    );
}


/**
 * Prints a lists of talks.
 */
function talks(
    // A unique identifier of the list
    $id, 
    // An array of strings, each one containing a class to be
    // passed to the list (this is intended for advanced styling)
    $class = array(),
    // The data to be printed,
    // either as a file defining an array $data,
    // or directly as an array
    // (see bib/data-talks-example.php for formatting details)
    $datafile = null, 
    $data = null, 
    // Whether the chronological order should be ascending or not
    $oldfirst = false, 
    // Whether the talks should be printed in separate groups.
    // Possible values: null (no grouping), 'date' (grouping by year), 'type' 
    // (grouping by talk types as defined in $settings ['talk types']).
    // Custom values (describing a field in each element of $data) are 
    // possible, in which case the $groups must be given explicitely (following
    // the syntax of $settings ['talk types']).
    $groupby = null, 
    $groups = null, 
    // -- all remaining options have no effect if $groupby is null --
    // The HTML tag used for the heading of each group
    // (predefined versions are h1, h2, h3)
    $groupheadtag = "h3",
    // Whether the groups should be hideable (using the HTML <details> tag)
    $foldable = false, 
    // The initial behaviour of foldable groups
    $folded = true, 
    // The initial behaviour of the first group
    $firstfolded = false
) {
    global $settings, $pagedata;
    
    if ( $groupby == 'type' and is_null($groups) ) {
        $groups = $settings['talk types'];
    }
    elseif ( is_null($groups)
    and      !in_array($groupby, [null, 'date']) ) {
        throw new InvalidArgumentException("Function talks():
        the argument \$groupby should be null, 'date' or 'type'.");
    }

    echo get_list(
        "get_talk", $id, ["talks"] + $class,
        $datafile, $data, $oldfirst,
        $groupby, $groups, $groupheadtag,
        $foldable, $folded, $firstfolded
    );
}


////////// HTML <HEAD> ////////////////////////////////////////////////////////


function print_page_title() {
    global $settings, $pagedata;
    echo translate_if_needed($pagedata['title']);
}


function print_more_metas() {
    global $settings, $pagedata;
    foreach ( $settings['more metas'] as $key => $val ) {
        echo html_tag("meta", array(
            "name" => $key,
            "content" => translate_if_needed($val),
        )) . "\n";
    }
}


function load_favicon() {
    global $settings, $pagedata;
    if ( $settings['favicon'] ) { 
        echo t(2);
        echo html_tag("link", [ 
            "rel" => "icon", 
            "href" => $settings['site root'] . $settings['favicon'] 
        ]);
        echo t(2);
    }
}


function load_layout() {
    global $settings, $pagedata;

    $options = array(
        "rel"   => "stylesheet",
        "type"  => "text/css"
    );

    if ( $settings['katex'] ) {
        echo html_tag("link", $options + [
            "href" => $settings['site root'] . "includes/katex/katex.min.css",
            "integrity" => "sha384-nB0miv6/jRmo5UMMR1wu3Gz6NLsoTkbqJghGIsx//Rlm+ZU03BU6SQNC66uf4l5+",
            "crossorigin" => "anonymous",
        ]) . t(2);
    }

    echo html_tag("link", $options + [ 
        "href" => $settings['site root'] . $settings['layout']
    ]) . t(2);
    echo html_tag("link", $options + [ 
        "href" => $settings['site root'] . "includes/common.css" 
    ]) . t(2);
    
    echo html_tag("style", [],
        ":not(:lang(" . $pagedata['language'] . ")) {
                display: none !important;
            }",
        true, 2) . t(2);
}


function load_javascript() {
    global $settings, $pagedata;

    echo html_tag("script", [ 
        "src" => $settings['site root'] . "includes/common.js"
    ], "") . t(2);

    if ( $settings['katex'] ) {
        echo html_tag("script", array(
            "defer" => null,
            "crossorigin" => "anonymous",
            "src" => $settings['site root'] . "includes/katex/katex.min.js",
            "integrity" => "sha384-7zkQWkzuo3B5mTepMUcHkMB5jZaolc2xDwL6VFqjFALcbeS9Ggm/Yr2r3Dy4lfFg",
        ), "") . t(2);
        echo html_tag("script", array(
            "defer" => null,
            "crossorigin" => "anonymous",
            "src" => $settings['site root'] . "includes/katex/auto-render.min.js",
            "integrity" => "sha384-43gviWU0YVjaDtb/GhzOouOXtZMP/7XUzwPTstBeZFe/+rCMvRwr4yROQP43s0Xk",
            "onload" => "renderMathInElement(document.body);",
        ), "") . t(0);
    }
}


////////// HEADERS ////////////////////////////////////////////////////////////


function print_lang_menu() {
    if ( MLING ) {
        global $settings, $pagedata;

        $out = array();
        foreach ( $settings['languages'] as $l ) {
            if ($l == $pagedata['language']) {
                $link = $l;
                $param = ["class" => "current"];
            } else {
                $link = html_tag("a", [
                    "href" => $pagedata['translation ' . $l]
                ], strtoupper($l));
                $param = [];
            }
            $out[] = html_tag("span", $param, $link);
        }

        echo html_tag(
            "nav", ["id" => "nav-lang"],
            implode(t(4), $out),
            true, 3
        ) . t(3);

    }
}


function print_header () {
    global $settings, $pagedata;
    $out = "";
    foreach ( ['title', 'subtitle'] as $i => $x ) {
        if ( $settings[$x] ) {
            $out .= html_tag(
                "div", ["class" => $x],
                html_tag( "span", [], translate_if_needed($settings[$x]) ),
                true, 4
            );
            if ( !$i ) { $out .= t(4); }
        }
    }
    echo html_tag("header", [], $out, true, 3) . t(3);
}


function print_main_menu () {
    global $settings, $pagedata;
    if ( $pagedata['menu'] ) {
        $out = array();
        foreach ( $pagedata['menu'] as $i => $item ) {
            $sparams = array(); $aparams = array();
            if ( array_key_exists('url', $item) and $item['url'] ) {
                $aparams['href'] = translate_if_needed($item['url']);
                if (
                    $settings['multilingual'] == 'dynamic'
                and $pagedata['language'] != reset($settings['languages'])
                and !( array_key_exists('nolang', $item) 
                and $item['nolang'] ) 
                ) {
                    $tmp = explode('#', $aparams['href']);
                    $tmp[0] .= "?lang=" . $pagedata['language'];
                    $aparams['href'] = implode('#', $tmp);
                }
            }
            if ( array_key_exists('newtab', $item) and $item['newtab'] ) {
                $aparams['target'] = "_blank";
            }
            if ( array_key_exists('class', $item) ) {
                $sparams['class'] = $item['class'];
            }
            if ( array_key_exists('text', $item) ) {
                $out[] = html_tag("span", $sparams,
                    html_tag("a", $aparams, translate_if_needed($item['text']))
                );
            }
        }
        echo html_tag(
            "nav", ["id" => "nav-main"],
            implode(t(4), $out),
            true, 3
        ) . t(3);
    }
}


////////// LANGUAGES //////////////////////////////////////////////////////////


function get_language ( $language ) {
    global $settings, $pagedata;

    // Override the language with the one given in the URL if needed.
    if ( $settings['multilingual'] == 'dynamic' 
    and  array_key_exists('lang', $_GET) ) {    
        $language = $_GET['lang'];
    }

    // Return the language depending on the current settings.
    if ( MLING ) {
        if ( in_array($language, $settings['languages']) ) { 
            return $language; 
        } elseif ( $settings['languages'] ) { 
            return reset($settings['languages']); 
        }
    } else {
        if ( $language ) { 
            return $language; 
        } elseif ( $settings['languages'] ) { 
            return reset($settings['languages']); 
        }
    }
}


function translate_if_needed ( $argument ) {
    if ( is_string($argument) ) {
        return $argument;
    }
    
    elseif ( is_array($argument) ) {
        global $settings, $pagedata;

        if ( empty($argument) ) {
            return "";
        } elseif ( array_key_exists($pagedata['language'], $argument) ) {
            return $argument[ $pagedata['language'] ];
        } else {
            return reset($argument);
        }
    } 
    
    else {
        return "";
    }
}


function get_translation($translations, $target) {
    global $settings, $pagedata;

    if ( $settings['multilingual'] == 'dynamic' ) {
        $url = $_SERVER['PHP_SELF'];
        if ( $target != reset($settings['languages']) ) { 
            $url .= "?lang=" . $target; 
        }
        return $url;
    }

    else {
        if ( array_key_exists($target, $translations) ) {
            return $translations[$target];
        } else {
            $pathinfo =  pathinfo($_SERVER['PHP_SELF']);
            $url = $pathinfo['dirname'] . "/" . $pathinfo['filename'];
            if ( $pagedata['language'] != reset($settings['languages']) ) {
                $url = substr($url, 0, -3);
            }
            if ( $target != reset($settings['languages']) ) { 
                $url .= "-" . $target; 
            }
            return $url . "." . $pathinfo['extension'];
        }
    }
}


////////// TOOLS //////////////////////////////////////////////////////////////


function t( $tabs, $newline = true ) {
    $out = "";
    if ( $newline ) { $out .= "\n"; }
    for ( $i = 0; $i < $tabs; $i++ ) { $out .= "\t"; }
    return $out;
}


function html_tag (
    $tag, $options, $argument = null, 
    $tabsformat = false, $tabs = 0, $tabsfirst = 0
) {
    $result = "";
    if ( $tabsformat ) { $result .= t($tabsfirst, false); }
    $result .= "<" . $tag;
    foreach ( $options as $key => $val ) {
        $result .= " " . $key;
        if ( $val ) { $result .= "=\"" . $val . "\""; }
    }
    $result .= ">";
    if ( !is_null($argument) ) { 
        if ( $tabsformat ) { $result .= t($tabs+1); }
        $result .= $argument;
        if ( $tabsformat ) { $result .= t($tabs); }
        $result .= "</" . $tag . ">";
    }
    return $result;
}


////////// LISTS OF PUBLICATIONS //////////////////////////////////////////////


function get_list(
    $get_item, $id, $class,
    $datafile = null, $data = null, $oldfirst = false,
    $groupby = null, $groups = null, $groupheadtag = "h3",
    $foldable = false, $folded = true, $firstfolded = false
) {
    global $settings, $pagedata;
    $out = "";
    
    if ( $datafile ) {
        include($datafile);
    } elseif ( is_null($data) ) {
        throw new InvalidArgumentException("Function publications():
        one of the arguments \$datafile and \$data should be non-empty.");
    }
    usort($data, usorter_by_date($oldfirst));

    if ( $groupby ) {
        if ( $groupby == 'date' ) {
            $groupby = "YEAR";
            $groups = array();
            foreach ( $data as $key => $item ) {
                $year = substr($item['date'],0,4);
                $data[$key]['YEAR'] = $year;
                $groups[$year]['group'] = $year;
            }
        }

        foreach ( $groups as $groupkey => $group ) {
            $head = translate_if_needed($group['group']);
            $content = get_list(
                $get_item,
                $id . "-" . $groupkey,
                $class,
                null, 
                array_filter($data, fn($item) => $item[$groupby] == $groupkey)
            );
            if ( $content ) {
                if ( $foldable ) {
                    $class[] = $groupheadtag . "summary";
                    $attr = array("class" => implode(" ", $class));
                    if ( !$folded or !$firstfolded ) {
                        $attr["open"] = null;
                    }
                    $firstfolded = true;
                    $out .= html_tag("details", $attr,
                        html_tag("summary", [], $head) . $content
                    );
                } else {
                    $out .= html_tag(
                        $groupheadtag, 
                        ["class" => implode(" ", $class)], 
                        $head
                    );
                    $out .= $content;
                }
            }
        }
    }

    else {
        $out2 = "";
        foreach ( $data as $key => $item ) {
            $out2 .= $get_item($item, $id . "-" . $key);
        }
        if ( $out2 ) {
            $out .= html_tag(
                "ul",
                ["class" => implode(" ", $class + ["ptlist"])],
                $out2
            );
        }
    }

    return $out;
}


function usorter_by_date( $reversed = true ) {
    return function($a, $b) use($reversed) {
        $adate = new DateTime($a['date']);
        $bdate = new DateTime($b['date']);
        $difference = date_diff($bdate, $adate);
        if ( $reversed ) {
            return $difference->days * $difference->invert * (-1);
        } else {
            return $difference->days * $difference->invert;
        }
    };
}


function get_paper( $paper, $id ) {
    global $settings, $pagedata;

    $title =  html_tag("span", ["class" => "p-title"], $paper['title']);

    if ( array_key_exists('status', $paper) and $paper['status'] ) {
        $date_content = translate_if_needed(
            $settings['paper statuses'][ $paper['status'] ]
        );
    } else {
        $tmp = new DateTime($paper['date']);
        $date_content = $tmp->format('Y');
    }
    $date = html_tag("span", ["class" => "p-date"], $date_content);

    if ( array_key_exists('authors', $paper) and $paper['authors'] ) {
        $tmp = array_diff($paper['authors'], $settings['ignored authors']);
        if ( count($tmp) > 1 ) {
            $last = array_pop($tmp);
            $last2 = array_pop($tmp);
            array_push($tmp,
                $last2 . " " 
                . translate_if_needed($settings['translations']['and']) 
                . "&nbsp;" . $last
            );
        }
        if ( $tmp ) {
            $authors = html_tag("span", ["class" => "p-authors"],
                ", " . translate_if_needed($settings['translations']['with']) 
                . "&nbsp;" . implode(", ", $tmp)
            );
        } else {
            $authors = "";
        }
    } else {
        $authors = "";
    }

    if ( array_key_exists('info', $paper) and $paper['info'] ) {
        $details = translate_if_needed($paper['info']);
    } else {
        $details = "";
    }
    if ( array_key_exists('doi', $paper) and $paper['doi'] ) {
        $details .= " DOI:&nbsp;" . html_tag("a", [
            "target" => "_blank",
            "href" => "https://dx.doi.org/" . $paper['doi']
        ], $paper['doi']) . ".";
    }

    $links = "";
    if ( array_key_exists('abstract', $paper) and $paper['abstract'] ) {
        $links .= html_tag("span", [
            "class" => "link",
            "onclick" => "abstract('{$id}')"
        ], ucfirst(translate_if_needed($settings['translations']['abstract'])));
    }
    foreach ( $settings['link types'] as $ltkey => $ltval ) {
        if ( array_key_exists($ltkey, $paper) and $paper[$ltkey] ) {
            $prefix = "";
            if ( array_key_exists('prefix', $ltval) ) {
                $prefix .= $ltval['prefix'];
            }
            $links .= html_tag("a", [
                "target" => "_blank",
                "href" => $prefix . $paper[$ltkey]
            ], translate_if_needed($ltval['text']));
        }
    }

    $head = html_tag("div", ["class" => "p-head"], 
        "{$title} ({$date}){$authors}."
    );
    if ( $details ) {
        $details = html_tag("div", ["class" => "p-details"], $details);
    }
    if ( $links ) {
        $links = html_tag("div", ["class" => "p-links"], $links);
    }
    if ( array_key_exists('abstract', $paper) and $paper['abstract'] ) {
        $abstract = html_tag("div", [
            "class" => "p-abstract",
            "id" => $id . "-abstract",
            "style" => "display: none;"
        ], translate_if_needed($paper['abstract']));
    } else {
        $abstract = "";
    }

    return html_tag("li", 
        ["id" => $id], 
        $head . $details . $links . $abstract
    );
}


function get_talk( $talk, $id ) {
    global $settings, $pagedata;

    $title =  html_tag("span", ["class" => "t-title"], $talk['title']);

    $details = "";
    if ( array_key_exists('event', $talk) and $talk['event'] ) {
        $details .= ", " . translate_if_needed($talk['event']);
    }
    if ( array_key_exists('location', $talk) and $talk['location'] ) {
        $details .= " (" . translate_if_needed($talk['location']) . ")";
    }
    $date = new DateTime($talk['date']);
    $timefmt = new IntlDateFormatter(
        $pagedata['language'], 
        IntlDateFormatter::MEDIUM, 
        IntlDateFormatter::NONE
    );
    $details .= ', ' . $timefmt->format($date) . '. ';
    if ( array_key_exists('info', $talk) and $talk['info'] ) {
        $details .= translate_if_needed($talk['info']) . ' ';
    }

    $links = "";
    foreach ( $settings['link types'] as $ltkey => $ltval ) {
        if ( array_key_exists($ltkey, $talk) and $talk[$ltkey] ) {
            $prefix = "";
            if ( array_key_exists('prefix', $ltval) ) {
                $prefix .= $ltval['prefix'];
            }
            $links .= html_tag("a", [
                "target" => "_blank",
                "href" => $prefix . $talk[$ltkey]
            ], translate_if_needed($ltval['text']));
        }
    }
    if ( $links ) {
        $links = html_tag("span", ["class" => "t-links"], $links);
    }

    return html_tag("li", 
        ["id" => $id], 
        $title . $details . $links
    );
}

?>
