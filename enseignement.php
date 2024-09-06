<?php

// Load the template.
require_once("./includes/template.php");

// Load the settings and print the header.
// All possible arguments of start_content() are listed in template.php.
start_content(
    title: array(
        'fr' => "Enseignement | Rémy Cerda",
        'en' => "Teaching | Rémy Cerda",
    ),
    menufile: "menu.php"
);

?>

<p lang="fr">
</p>
<p lang="en">
</p>

<?php end_content(); ?>
