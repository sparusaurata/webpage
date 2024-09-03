<?php

/**
 * This example file shows how a webpage is built using the template.
 * You may use it as a model.
 * 
 * Warning: the calls to the functions start_content, end_content, publications
 * and talks use the syntax of named parameters available since PHP 8
 * (https://wiki.php.net/rfc/named_params). If you use an older version of PHP,
 * you should use the old syntax instead.
 */


// Load the template.
require_once("./includes/template.php");

// Load the settings and print the header.
// All possible arguments of start_content() are listed in template.php.
start_content(menufile: "menu.php");

?>

<p lang="fr">
    Ceci est un exemple de site. Grâce à KaTeX, je peux écrire des maths 
    au milieu du texte&nbsp;: \( e^{i\pi} + 1 = 0 \),
    mais aussi en mode <i>display</i>&nbsp;:
    \[ f(x) = \int_{-\infty}^\infty
    f(\hat\xi)\,e^{2 \pi i \xi x}
    \,\mathrm{d}\xi. \]
</p>
<p lang="en">
    This is an example website. Thanks to KaTeX, I can write inline math:
    \( e^{i\pi} + 1 = 0 \), but also write it in display mode:
    \[ f(x) = \int_{-\infty}^\infty
    f(\hat\xi)\,e^{2 \pi i \xi x}
    \,\mathrm{d}\xi. \]
</p>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et sem quis nibh interdum pharetra eu nec risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla non mi vel ligula iaculis rutrum. Vestibulum id nibh pretium, facilisis mauris vel, fermentum dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi euismod dignissim est, non pellentesque risus tincidunt quis. Nunc vitae porta lectus. Curabitur id arcu dui. 
</p>

<!----------------------------------------------------------------------------->
<h1 id="anchor">
    <span lang="fr">Recherche</span>
    <span lang="en">Research</span>
</h1>
<!----------------------------------------------------------------------------->

<!---------------------------------------->
<h2 lang="fr">Travaux</h2>
<h2 lang="en">Published work</h2>
<!---------------------------------------->

<?php publications(
    id: "papers",
    datafile: "./bib/data-papers-example.php",
    groupby: "type",
); ?>


<!---------------------------------------->
<h2 lang="fr">Exposés</h2>
<h2 lang="en">Talks</h2>
<!---------------------------------------->

<?php talks(
    id: "talks",
    datafile: "./bib/data-talks-example.php",
); ?>

<?php end_content(); ?>
