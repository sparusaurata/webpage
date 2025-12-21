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

// Let's first generate my lists
$papiers_mi = publications(
    id: "papiers-mi",
    datafile: "data/data-papiers-mi.php",
    class: ["spaceabove"],
    groupby: 'type',
);
$papiers_shs = publications(
    id: "papiers-shs",
    datafile: "data/data-papiers-shs.php",
    class: ["spaceabove"],
);
$exposes = talks(
    id: "exposes",
    datafile: "data/data-exposes.php",
    groupby: "date",
    foldable: true,
);

?>

<h1 lang="fr">Recherche</h1>
<h1 lang="en">Research</h1>

<p>
    My main research field is theoretical computer science:
    mathematical logics, theory of programming and computation, and their intertwining along the lines of the Curry-Howard correspondence.
    You'll find below a list of <a href="#papiers">my papers</a> and <a href="#exposes">my talks</a> on these topics.
    Besides, I have some (modest) background and (under-exploited) interests in the fields of sociology and law, see <a href="#shs">the corresponding section</a> for some details.
</p>

<p>
    My original background is proof theory (mostly substructural logics, like linear logic) as well as operational and denotational semantics of the λ-calculus (or variants of it).
</p>
<ul>
    <li>
        During my PhD with <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a>, I have been reformulating the linear approximation of functional programs (aka Taylor expansion for the λ-calculus) using infinitary rewriting
        <?php cite('papiers-mi', 'phd', 'simulation', 'conservativity-final'); ?>. 
    </li>
    <li>
        I am currently working with <a href="https://www.irif.fr/~gmanzone/" target="_blank">Giulio Manzonetto</a> and <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> on refinements of this program approximation and the associated quantitative semantics, to capture (non-)erasure of data along infinite computations
            <?php cite('papiers-mi', 'ohana'); ?>.
    </li>
</ul>

<p>
    More generally, I have a strong interest in studying infinite objects and processes that appear in computer science, <i>e.g.</i> using infinitary terms and rewriting, coinduction, fixed points.
</p>
<ul>
    <li>
        The first part of my postdoc with <a href="https://udallago.github.io/" target="_blank">Ugo Dal Lago</a> is concerned with logical characterisations of productivity for stream programming.
    </li>
    <li>
        During my PhD, I worked on a nominal syntax for mixed inductive-coinductive data types with variable binding
        <?php cite('papiers-mi', 'nominal-mu-nu'); ?>.
        I've also been investigating coinductive infinitary rewriting of non-wellfounded derivations with <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a>
        <?php cite('papiers-mi', 'compression'); ?>.
    </li>
    <li>
        I work on other projects
        with <a href="https://pguillon.perso.math.cnrs.fr/" target="_blank">Pierre Guillon</a> and <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a> (on dynamical and computability properties of infinitary rewriting systems), and
        with <a href="https://www.irif.fr/~mellies/" target="_blank">Paul-André Melliès</a> and <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> (looking for connections between non-wellfounded proofs and higher-order automata).  
    </li>
</ul>

<!-----------------------------------> 

<h2 id="papiers">
<span lang="fr">Travaux publiés (ou pas)</span>
<span lang="en">(Un)published work</span>
</h2>

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

<?php echo $papiers_mi; ?>

<!-----------------------------------> 

<h2 id="exposes">
<span lang="fr">Exposés</span>
<span lang="en">Talks</span>
</h2>

<?php echo $exposes; ?>

<!-----------------------------------> 

<h2 id="shs">
<span lang="fr">Sciences sociales</span>
<span lang="en">Social sciences</span>
</h2>

<p lang="fr">
    Dans une autre vie, j'ai étudié la sociologie et j'ai toujours beaucoup d'intérêt pour ce domaine, même si je manque de temps pour m'y consacrer. Je me suis surtout intéressé à la sociologie de l'enseignement supérieur&nbsp;:
</p>
<p lang="en">
    In another life, I studied sociology and law and I still have many interests in these fields, although I lack time to devote to them. My main focus research-wise was on sociology of higher education:
</p>

<ul class="narrow">
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

<?php echo $papiers_shs; ?>

<?php end_content(); ?>
