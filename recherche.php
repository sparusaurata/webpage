<?php

// Load the template.
require_once("./includes/template.php");

// Load the settings and print the header.
// All possible arguments of start_content() are listed in template.php.
start_content(menufile: "menu.php");

?>

<h1 lang="fr">Recherche</h1>
<h1 lang="en">Research</h1>

<!-----------------------------------> 

<h2 id="papiers">
<span lang="fr"></span>
<span lang="en">(Un)published work</span>
</h2>

<?php publications(
    id: "papiers-mi",
    datafile: "bib/data-papiers-mi.php",
); ?>

<!-----------------------------------> 

<h2 id="exposes">
<span lang="fr">Exposés</span>
<span lang="en">Talks</span>
</h2>

<?php talks(
    id: "exposes",
    datafile: "bib/data-exposes.php",
    groupby: "date",
    foldable: true,
); ?>

<!-----------------------------------> 

<h2 id="socio">
<span lang="fr">Sciences sociales</span>
<span lang="en">Social sciences</span>
</h2>

<p lang="fr">
</p>
<p lang="en">
</p>

<?php publications(
    id: "papiers-shs",
    datafile: "bib/data-papiers-shs.php",
); ?>

<?php end_content(); ?>
