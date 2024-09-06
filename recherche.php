<?php

// Load the template.
require_once("./includes/template.php");

// Load the settings and print the header.
// All possible arguments of start_content() are listed in template.php.
start_content(
    title: array(
        'fr' => "Rémy Cerda | Recherche",
        'en' => "Rémy Cerda | Research",
    ),
    menufile: "menu.php"
);

?>

<h1 lang="fr">Recherche</h1>
<h1 lang="en">Research</h1>

<p lang="fr">
    Je fais principalement des mathématiques et de l'informatique théorique. Vous trouverez ci-dessous une liste de <a href="#papiers">mes papiers</a> et de <a href="#exposes">mes exposés</a> dans ces domaines.
</p>
<p lang="en">
    I'm mainly doing mathematics and theoretical computer science.
    You'll find below a list of <a href="#papiers">my papers</a> and <a href="#exposes">my talks</a> in these areas.
</p>

<p lang="fr">
    En outre, j'ai une formation (modeste) et un intérêt (sous-exploité) dans les domaines de la sociologie et du droit, <i>cf.</i> <a href="#shs">la section correspondante</a> pour quelques détails.
</p>
<p lang="en">
    Besides, I have some (modest) background and (under-exploited) interests in the fields of sociology and law, see <a href="#shs">the corresponding section</a> for some details.
</p>

<p>
    <span lang="fr">
        Vous pouvez aussi trouver des informations sur vos réseaux sociaux préférés&nbsp;:
    </span>
    <span lang="en">
        You can also find some information on your favourite social media:
    </span>
    <a href="https://dblp.org/pid/333/1354.html" target="_blank">DBLP</a>,
    <a href="https://orcid.org/0000-0003-0731-6211" target="_blank">ORCID</a>,
    <a href="https://arxiv.org/a/cerda_r_1" target="_blank">arXiv</a>.
</p>

<!-----------------------------------> 

<h2 id="papiers">
<span lang="fr">Travaux publiés (ou pas)</span>
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

<h2 id="shs">
<span lang="fr">Sciences sociales</span>
<span lang="en">Social sciences</span>
</h2>

<p lang="fr">
    Dans une autre vie, j'ai étudié la sociologie et j'ai toujours beaucoup d'intérêt pour ce domaine, même si je manque de temps. Je me suis surtout spécialisé dans la sociologie de l'enseignement supérieur&nbsp;:
</p>
<p lang="en">
    In another life, I studied sociology and I still have many interests in this field, although I lack time. My main focus is on sociology of higher education:
</p>

<ul>
    <li lang="fr">curricula en mathématiques&nbsp;: définition et transmission de savoirs pratiques par l'enseignement des mathématiques,</li>
    <li lang="en">mathematical curricula: the definition and the transmission of practical knowledge through the teaching of mathematics,</li>

    <li lang="fr">institutions d'élite dans l'enseignement supérieur,</li>
    <li lang="en">elite institutions in higher education,</li>

    <li lang="fr">santé étudiante (santé mentale en particulier),</li>
    <li lang="en">student health (in particular mental health),</li>

    <li lang="fr">élections étudiantes et engagement politique dans l'enseignement supérieur.</li>
    <li lang="en">student elections and political engagement in higher education.</li>
</ul>

<p lang="fr">
    Voici une liste de mes travaux écrits dans ce domaine.
</p>
<p lang="en">
    Here is a list of my written work in this domain.
</p>

<?php publications(
    id: "papiers-shs",
    datafile: "bib/data-papiers-shs.php",
); ?>

<p lang="fr">
    Je termine aussi une formation de droit. La recherche associant droit et informatique a le vent en poupe&nbsp;: j'adorerais m'impliquer dans ce genre de travaux, n'hésitez pas à me contacter à ce sujet&nbsp;!
</p>
<p lang="en">
    I'm also completing a degree in law. There seems to be a trend around research joining law and computer science: I would enjoy getting involved in such research, feel free to contact me about this!
</p>

<?php end_content(); ?>
