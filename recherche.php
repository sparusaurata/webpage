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
    Mon principal domaine de recherche est l'informatique théorique&nbsp;:
    la logique mathématique, la théorie de la programmation et leur rapprochement au travers de la correspondance de Curry-Howard.
    Vous trouverez ci-dessous une liste de <a href="#papiers">mes papiers</a> et de <a href="#exposes">mes exposés</a> sur ces sujets.
    En outre, j'ai une formation (modeste) et un intérêt (sous-exploité) dans les domaines de la sociologie et du droit, <i>cf.</i> <a href="#shs">la section correspondante</a> pour quelques détails.
</p>
<p lang="en">
    My main research field is Theoretical Computer science:
    mathematical logics, theory of programming and computation, and their intertwining along the lines of the Curry-Howard correspondence.
    You'll find below a list of <a href="#papiers">my papers</a> and <a href="#exposes">my talks</a> on these topics.
    Besides, I have some (modest) background and (under-exploited) interests in the fields of Sociology and Law, see <a href="#shs">the corresponding section</a> for some details.
</p>

<p lang="fr">
    Mes intérêts initiaux sont la théorie de la démonstration (principalement autour de logiques sous-structurelles, comme la logique linéaire) ainsi que les sémantiques opérationnelle et dénotationnelle du λ-calcul (ou de variantes de celui-ci).
</p>
<p lang="en">
    My original background is proof theory (mostly substructural logics, like linear logic) as well as operational and denotational semantics of the λ-calculus (or variants of it).
</p>

<ul>
    <li lang="fr">
        Dans ma thèse avec <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a>, j'ai reformulé l'approximation linéaire des programmes fonctionnels (<i>alias</i> développement de Taylor pour le λ-calcul) à l'aide d'outils de réécriture infinitaire [<a href="#papiers-mi-J1">J1</a>,<a href="#papiers-mi-T1">T1</a>,<a href="#papiers-mi-P2">P2</a>,<a href="#papiers-mi-U3">U3</a>]. 
    </li>
    <li lang="en">
        During my PhD with <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a>, I have been reformulating the linear approximation of functional programs (aka Taylor expansion for the λ-calculus) using infinitary rewriting [<a href="#papiers-mi-J1">J1</a>,<a href="#papiers-mi-T1">T1</a>,<a href="#papiers-mi-P2">P2</a>,<a href="#papiers-mi-U3">U3</a>]. 
    </li>

    <li lang="fr">
        Je travaille actuellement avec <a href="https://www.irif.fr/~gmanzone/" target="_blank">Giulio Manzonetto</a> et <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> sur un raffinement de cette approximation de programmes et de la sémantique quantitative associée, dans le but de capturer le (non-)effacement de portions de programmes le long de calculs infinis [<a href="#papiers-mi-U1">U1</a>].
    </li>
    <li lang="en">
        I am currently working with <a href="https://www.irif.fr/~gmanzone/" target="_blank">Giulio Manzonetto</a> and <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> on refinements of this program approximation and the associated quantitative semantics, to capture (non-)erasure of data along infinite computations [<a href="#papiers-mi-1">U1</a>].
    </li>
</ul>

<p lang="fr">
    Plus généralement, je suis particulièrement intéressé par l'étude d'objets et de processus infinis en informatique, par exemple à l'aide de termes et de réécritures infinitaires, de techniques coinductives, de points fixes.
</p>
<p lang="en">
    More generally, I have a strong interest in studying infinite objects and processes that appear in Computer science, <i>e.g.</i> using infinitary terms and rewriting, coinduction, fixed points.
</p>

<ul>
    <li lang="fr">
        Dans le cadre de ma thèse, j'ai travaillé sur une syntaxe nominale pour des termes mixtes inductifs-coinductifs avec lieurs [<a href="#papiers-mi-P1">P1</a>]. 
    </li>
    <li lang="en">
        As part of my PhD, I worked on a nominal syntax for mixed inductive-coinductive data types with variable binding [<a href="#papiers-mi-P1">P1</a>]. 
    </li>

    <li lang="fr">
        Avec <a href="https://pguillon.perso.math.cnrs.fr/" target="_blank">Pierre Guillon</a> et <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a>, je travaille sur certaines propriétés de réécritures infinitaires en dynamique et en calculabilité.
    </li>
    <li lang="en">
        With <a href="https://pguillon.perso.math.cnrs.fr/" target="_blank">Pierre Guillon</a> and <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a>, I work on dynamical and computability properties of infinitary rewriting systems.
    </li>

    <li lang="fr">
        En ce moment, je travaille principalement sur des systèmes de preuve non-bien-fondées pour des logiques avec points fixes. En particulier, avec <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> j'étudie la réécriture infinitaire de dérivations non-bien-fondées [<a href="#papiers-mi-U2">U2</a>]. Avec <a href="https://www.irif.fr/~mellies/" target="_blank">Paul-André Melliès</a>, nous cherchons également à connecter ce formalisme avec les automates d'ordre supérieur et les questions de vérification liées.
    </li>
    <li lang="en">
        Currently, I'm mainly working on non-wellfounded proof theory for logics with fixed points. In particular, I'm investigating infinitary rewriting of non-wellfounded derivations with <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> [<a href="#papiers-mi-U2">U2</a>]. With <a href="https://www.irif.fr/~mellies/" target="_blank">Paul-André Melliès</a>, we also look for connections of this formalism with higher-order automata and verification.
    </li>
</ul>

<p lang="fr">
    Parmi les autres sujets sur lesquels j'aimerais me pencher&nbsp;: le raisonnement non-bien-fondé dans les assistants de preuve, les logiques/types sous-structurels pour la concurrence, l'approximation de calculs de processus, entre autres. 
</p>
<p lang="en">
    Among the other topics I'd like to investigate: non-wellfounded reasoning in proof assistants, substructural logics and types for concurrency, approximation of process calculi, and more.
</p>

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

<?php publications(
    id: "papiers-mi",
    datafile: "bib/data-papiers-mi.php",
    class: ["spaceabove"],
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
    Dans une autre vie, j'ai étudié la sociologie et j'ai toujours beaucoup d'intérêt pour ce domaine, même si je manque de temps pour m'y consacrer. Je me suis surtout intéressé à la sociologie de l'enseignement supérieur&nbsp;:
</p>
<p lang="en">
    In another life, I studied Sociology and I still have many interests in this field, although I lack time to devote to it. My main focus is on sociology of higher education:
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

<?php publications(
    id: "papiers-shs",
    datafile: "bib/data-papiers-shs.php",
    class: ["spaceabove"],
); ?>

<p lang="fr" class="spaceabove">
    Je termine aussi une formation de droit. La recherche associant droit et informatique semble ouvrir de nombreuses perspectives&nbsp;: j'adorerais m'impliquer dans ce genre de travaux, n'hésitez pas à me contacter à ce sujet&nbsp;!
</p>
<p lang="en" class="spaceabove">
    I'm also completing a degree in Law. There seem to be many promising lines of research joining law and computer science: I would enjoy getting involved in such work, feel free to contact me about this!
</p>

<?php end_content(); ?>
