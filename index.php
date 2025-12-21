<?php

// Load the template.
require_once("./includes/template.php");

// Load the settings and print the header.
// All possible arguments of start_content() are listed in template.php.
start_content(
    title: "Rémy Cerda",
    menufile: "menu.php"
);

/*
<a href="" target="_blank"></a>
<a href="" target="_blank" title=""></a>
*/

?>

<p>
    <img class="me" src="fichiers/rc.jpg">
    Post-doctoral researcher at <a href="https://disi.unibo.it/" target="_blank">Università di Bologna</a>, in <a href="https://udallago.github.io/" target="_blank">Ugo Dal Lago</a>'s group, since November&nbsp;2025.
</p>

<p>
    Previously:
</p><ul>
    <li>
        Postdoc at <a href="https://www.irif.fr/index" target="_blank" title="Institut de recherche en informatique fondamentale">IRIF</a> (Paris), in <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a>'s project <a href="https://www.irif.fr/reciprog/index" target="_blank" title="REasoning on CIrcular proofs for PROGramming">RECIPROG</a>.
    </li><li>
        PhD student in Mathematics at <a href="https://www.univ-amu.fr/" target="_blank">Aix-Marseille University</a>, in the <a href="https://www.i2m.univ-amu.fr/equipes-scientifiques/groupe-arithmetique-geometrie-logique-et-representations-aglr/equipe-logique-de-la-programmation-ldp/" target="_blank">Logics of Programming</a> team of <a href="https://www.i2m.univ-amu.fr/" target="_blank" title="Institut de mathématiques de Marseille">I2M</a>, supervised by <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a> and <a href="https://www.i2m.univ-amu.fr/perso/laurent.regnier/" target="_blank">Laurent Regnier</a>.
        I defended <a href="fichiers/papiers/these.pdf" target="_blank">my thesis</a> in June&nbsp;2024.
    </li>
</ul>

<p>
    My research interests are mainly in theoretical computer science, at the interface of mathematical logic and the theory of programming.
    I am (or have been) working on:
    program approximation, program semantics, λ-calculus, coinduction, stream programming, infinitary rewriting and its topological dynamics, nominal syntax, logics with fixed points and non-wellfounded proofs, higher-order automata.
    See more details on <a href="recherche.php">the dedicated page</a>.
</p>

<!------------------------------------->

<details class="h2summary">
<summary>Contact information</summary>

<dl>
    <dt lang="en">Office</dt>
    <dd lang="en">
        Hidden unnamed office, <a href="https://www.openstreetmap.org/way/305358153" target="_blank" title="See on the map">sede di via Ranzani 14</a> del Dipartimento di Informatica – Scienza e Ingegneria, Università di Bologna
    </dd>

    <dt>E-mail</dt>
    <dd>
        Remy <i>dot</i> Cerda <i>at</i> math <i>dot</i> cnrs <i>dot</i> fr
    </dd>
    <dd lang="fr">
        <a href="fichiers/rc.asc" target="_blank">Clé publique PGP</a>
    </dd>
    <dd lang="en">
        <a href="fichiers/rc.asc" target="_blank">PGP public key</a>
    </dd>
</dl>
</details>


<details class="h2summary">
<summary>Some links</summary>

<ul>
    <li>
        The <a href="seminar.php">theorists' seminar</a> in Bologna.
    </li><li>
        I've been organising <a href="https://conferences.cirm-math.fr/2980.html" target="_blank">a conference</a> celebrating 20 years of differential λ-calculus and differential linear logic. <a href="https://www.cirm-math.fr/Schedule/screen_display.php?id_renc=2980" target="_blank">The videos of the talks are online.</a>
    </li><li>
        Publication standards in Computer science produce poorly written research and are detrimental to scientific interactions. It is high time we <a href="https://lance.fortnow.com/papers/files/growup.pdf" target="_blank">grow up</a>.
    </li><li>
        <span style="display: inline-grid;">
            <span style="grid-row: 1; grid-column: 1; opacity: 0.7;">
                Erik&nbsp;D. Demaine
            </span>
            <span style="grid-row: 1; grid-column: 1; opacity: 0.7;">
                Martin&nbsp;L. Demaine
            </span>
        </span>, <a href="http://sigtbd.csail.mit.edu/pubs/2023/sigtbd23-paper6.pdf" target="_blank">“Every Author as First Author”</a>, <i>Proceedings of SIGTBD</i> (SIGTBD&nbsp;2023).
    </li>
</ul>
</details>

<?php end_content(); ?>
