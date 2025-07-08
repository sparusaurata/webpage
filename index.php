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

<p lang="fr">
<img class="me" src="fichiers/rc.jpg">
    Je suis post-doc à l'<a href="https://www.irif.fr/index" target="_blank" title="Institut de recherche en informatique fondamentale">IRIF</a>, à Paris.
    Je travaille au sein du projet <a href="https://www.irif.fr/reciprog/index" target="_blank" title="REasoning on CIrcular proofs for PROGramming">RECIPROG</a> conduit par <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a>.
</p>
<p lang="en">
    <img class="me" src="fichiers/rc.jpg">
    I'm a post-doctoral researcher at <a href="https://www.irif.fr/index" target="_blank" title="Institut de recherche en informatique fondamentale">IRIF</a>, in Paris.
    I'm working in the project <a href="https://www.irif.fr/reciprog/index" target="_blank" title="REasoning on CIrcular proofs for PROGramming">RECIPROG</a> led by <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a>.
</p>

<p lang="fr">
    Précédemment, j'étais doctorant en mathématiques à l'<a href="https://www.univ-amu.fr/" target="_blank">université d'Aix-Marseille</a>, au sein de l'équipe <a href="https://www.i2m.univ-amu.fr/equipes-scientifiques/groupe-arithmetique-geometrie-logique-et-representations-aglr/equipe-logique-de-la-programmation-ldp/" target="_blank">Logique de la programmation</a> de l'<a href="https://www.i2m.univ-amu.fr/" target="_blank" title="Institut de mathématiques de Marseille">I2M</a>. 
    Mes directeurs de thèse étaient <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a> et <a href="https://www.i2m.univ-amu.fr/perso/laurent.regnier/" target="_blank">Laurent Regnier</a>.
</p>
<p lang="en">
    Previously, I was a PhD student in Mathematics at <a href="https://www.univ-amu.fr/" target="_blank">Aix-Marseille University</a>, in the <a href="https://www.i2m.univ-amu.fr/equipes-scientifiques/groupe-arithmetique-geometrie-logique-et-representations-aglr/equipe-logique-de-la-programmation-ldp/" target="_blank">Logics of Programming</a> team of <a href="https://www.i2m.univ-amu.fr/" target="_blank" title="Institut de mathématiques de Marseille">I2M</a>. 
    My supervisors were <a href="https://www.i2m.univ-amu.fr/perso/lionel.vaux/" target="_blank">Lionel Vaux Auclair</a> and <a href="https://www.i2m.univ-amu.fr/perso/laurent.regnier/" target="_blank">Laurent Regnier</a>. 
</p>

<p lang="fr">
    En recherche, je m'intéresse principalement à des questions d'informatique théorique, à l'interface entre la logique mathématique et la théorie de la programmation. J'ai travaillé (ou travaille actuellement) sur&nbsp;:
    l'approximation de programmes, la sémantique des langages de programmation, le λ-calcul, la coinduction, la réécriture infinitaire, la dynamique topologique de la précédente, la syntaxe nominale, les logiques avec points fixes, les automates d'ordre supérieur.
    Plus de détails sur <a href="recherche.php">la page dédiée</a>.
</p>
<p lang="en">
    My research interests are mainly in Theoretical Computer science, at the interface of mathematical logic and the theory of programming.
    I have been (or am currently) working on:
    program approximation, program semantics, λ-calculus, coinduction, infinitary rewriting and its topological dynamics, nominal syntax, logics with fixed points, higher-order automata.
    See more details on <a href="recherche.php?lang=en">the dedicated page</a>.
</p>

<!------------------------------------->

<details class="h2summary" open>
<summary>
    <span lang="fr">Nouvelles</span>
    <span lang="en">News</span>
</summary>

<dl>
    <dt lang="fr">Mai 2025</dt>
    <dt lang="en">May 2025</dt>
    <dd lang="fr">
        Notre <a href="./fichiers/papiers/ohana.pdf" target="_blank">papier</a> sur les «&nbsp;Ohana trees&nbsp;» (avec Giulio Manzonetto et Alexis Saurin) a été accepté à <a href="https://fscd2025.github.io/" target="_blank">FSCD&nbsp;2025</a>.
    </dd>
    <dd lang="en">
        Our <a href="./fichiers/papiers/ohana.pdf" target="_blank">paper</a> on «&nbsp;Ohana trees&nbsp;» (with Giulio Manzonetto and Alexis Saurin) has been accepted at <a href="https://fscd2025.github.io/" target="_blank">FSCD&nbsp;2025</a>.
    </dd>

    <dt lang="fr">Fév. 2025</dt>
    <dt lang="en">Feb. 2025</dt>
    <dd lang="fr">
        Notre article <a href="https://doi.org/10.4230/LIPIcs.STACS.2025.23" target="_blank">«&nbsp;How To Play The Accordion&nbsp;»</a> (avec Lionel Vaux Auclair), autour de la conversativité de l'approximation de Taylor du λ-calcul, a paru dans les actes de <a href="https://www.stacs2025.de/" target="_blank">STACS 2025</a>.
    </dd>
    <dd lang="en">
        Our paper <a href="https://doi.org/10.4230/LIPIcs.STACS.2025.23" target="_blank">“How To Play The Accordion”</a> (with Lionel Vaux Auclair), about conservativity properties for the Taylor approximation of the λ-calculus, just appeared in the proceedings of <a href="https://www.stacs2025.de/" target="_blank">STACS 2025</a>.
    </dd>

    <dt>Oct. 2024</dt>
    <dd lang="fr">
        Le 1er&nbsp;octobre, je commence un post-doc à l'<a href="https://www.irif.fr/index" target="_blank" title="Institut de recherche en informatique fondamentale">IRIF</a>, avec <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a> au sein du projet <a href="https://www.irif.fr/reciprog/index" target="_blank" title="REasoning on CIrcular proofs for PROGramming">RECIPROG</a>.
    </dd>
    <dd lang="en">
        On Oct.&nbsp;1st, I start a post-doc at <a href="https://www.irif.fr/index" target="_blank" title="Institut de recherche en informatique fondamentale">IRIF</a>, in <a href="https://www.irif.fr/users/saurin/index" target="_blank">Alexis Saurin</a>'s project <a href="https://www.irif.fr/reciprog/index" target="_blank" title="REasoning on CIrcular proofs for PROGramming">RECIPROG</a>.
    </dd>

    <dt lang="fr">Juin 2024</dt>
    <dt lang="en">June 2024</dt>
    <dd lang="fr">
        Ma soutenance de thèse a lieu le 10&nbsp;juin.
        Voir <a href="fichiers/papiers/these.pdf" target="_blank">mon manuscrit</a>, intitulé <i>Taylor expansion and Infinitary λ-calculi</i>, et <a href="fichiers/exposes/soutenance.pdf" target="_blank">les diapos</a> de la soutenance.
    </dd>
    <dd lang="en">
        My PhD defence takes place on June&nbsp;10th.
        See <a href="fichiers/papiers/these.pdf" target="_blank">the manuscript</a>, entitled <i>Taylor expansion and Infinitary λ-calculi</i>, and <a href="fichiers/exposes/soutenance.pdf" target="_blank">the slides</a> of the defence.
    </dd>

    <dt lang="fr">Mai 2024</dt>
    <dt lang="en">May 2024</dt>
    <dd lang="fr">
        J'ai co-organisé <a href="https://conferences.cirm-math.fr/2980.html" target="_blank">une conférence</a> pour les 20&nbsp;ans de la logique linéaire diférentielle et du λ-calcul différentiel. 
        <a href="https://www.cirm-math.fr/Schedule/screen_display.php?id_renc=2980" target="_blank">Les vidéos des exposés</a> sont en ligne&nbsp;!
    </dd>
    <dd lang="en">
        We've been organising <a href="https://conferences.cirm-math.fr/2980.html" target="_blank">a conference</a> celebrating 20 years of differential λ-calculus and differential linear logic. 
        <a href="https://www.cirm-math.fr/Schedule/screen_display.php?id_renc=2980" target="_blank">The videos of the talks</a> are now online!
    </dd>
</dl>

<p lang="fr">
    Voir aussi une <a href="recherche.php#exposes">liste d'exposés récents</a> avec leurs diapos.
</p>
<p lang="en">
    See also a <a href="recherche.php#exposes">list of recent talks</a> with their slides.
</p>
</details>

<!------------------------------------->

<details class="h2summary">
<summary>
    <span lang="fr">Coordonnées</span>
    <span lang="en">Contact information</span>
</summary>

<dl>
    <dt lang="fr">Bureau</dt>
    <dt lang="en">Office</dt>
    <dd lang="fr">
        Bâtiment <a href="https://www.openstreetmap.org/way/286296494" target="_blank" title="Voir sur la carte">Sophie Germain</a>,
        3e&nbsp;étage, bureau&nbsp;3057<br>
        8 place Aurélie Nemours, Paris (13e)
    </dd>
    <dd lang="en">
        <a href="https://www.openstreetmap.org/way/286296494" target="_blank" title="See on the map">Sophie Germain</a> building,
        3rd&nbsp;floor, office&nbsp;3057<br>
        8 place Aurélie Nemours, Paris (13e)
    </dd>

    <dt>E-mail</dt>
    <dd>
        remy <i>dot</i> cerda <i>at</i> math <i>dot</i> cnrs <i>dot</i> fr
    </dd>
    <dd lang="fr">
        <a href="fichiers/rc.asc" target="_blank">Clé publique PGP</a>
    </dd>
    <dd lang="en">
        <a href="fichiers/rc.asc" target="_blank">PGP public key</a>
    </dd>
</dl>
</details>

<!------------------------------------->

<details class="h2summary">
<summary>
    <span lang="fr">Et aussi</span>
    <span lang="en">And also</span>
</summary>

<ul>
    <li lang="fr">
        <a href="https://tcs4f.org/" target="_blank" title="Theoretical computer scientists for future">TCS4F</a>&nbsp;: engagement pour une recherche durable en informatique théorique.<br>
        Également, <a href="https://framaforms.org/limitation-de-lavion-dans-les-laboratoires-de-mathematiques-horizon-2030-1689587773" target="_blank">643&nbsp;mathématicien⋅nes français⋅es</a> s'engagent à réduire le recours à l'avion et appellent leurs tutelles à l'action.
    </li>
    <li lang="en">
        <a href="https://tcs4f.org/" target="_blank" title="Theoretical computer scientists for future">TCS4F</a>: a pledge for sustainable research in theoretical computer science.<br>
        Also, <a href="https://framaforms.org/limitation-de-lavion-dans-les-laboratoires-de-mathematiques-horizon-2030-1689587773" target="_blank">643&nbsp;French mathematicians</a> commit to reducing air travel and call on their authorities to take action.
    </li>

    <li lang="fr">
        Les standards de publication en informatique produisent de la recherche mal écrite et nuisent aux interactions scientifiques.
        Il serait <a href="https://lance.fortnow.com/papers/files/growup.pdf" target="_blank">temps de grandir</a>.
    </li>
    <li lang="en">
        Publication standards in Computer science produce poorly written research and are detrimental to scientific interactions. It is high time we <a href="https://lance.fortnow.com/papers/files/growup.pdf" target="_blank">grow up</a>.
    </li>

    <li>
        <span style="display: inline-grid;">
            <span style="grid-row: 1; grid-column: 1; opacity: 0.7;">
                Erik&nbsp;D. Demaine
            </span>
            <span style="grid-row: 1; grid-column: 1; opacity: 0.7;">
                Martin&nbsp;L. Demaine
            </span>
        </span>, <a href="http://sigtbd.csail.mit.edu/pubs/2023/sigtbd23-paper6.pdf" target="_blank">“Every Author as First Author”</a>, <i>Proceedings of SIGTBD</i> (SIGTBD&nbsp;2023).
    </li>

    <li lang="fr">
        J'utilise la <a href="https://www.i2m.univ-amu.fr/wp-content/uploads/2021/12/delta_logo.png" target="_blank">notation de Krivine</a>.
    </li>
    <li lang="en">
        I use the <a href="https://www.i2m.univ-amu.fr/wp-content/uploads/2021/12/delta_logo.png" target="_blank">Krivine notation</a>.
    </li>
</ul>
</details>

<?php end_content(); ?>
