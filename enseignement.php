<?php

// Load the template.
require_once("./includes/template.php");

// Load the settings and print the header.
// All possible arguments of start_content() are listed in template.php.
start_content(
    title: array(
        'fr' => "Rémy Cerda | Enseignement",
        'en' => "Rémy Cerda | Teaching",
    ),
    menufile: "menu.php"
);

?>

<p lang="fr">
    J'ai enseigné comme doctorant chargé d'enseignement (2020-2023, 64&nbsp;HETD/an) puis comme <abbr title="Attaché temporaire d'enseignement et de recherche">ATER</abbr> (2023-2024, 192&nbsp;HETD/an) au sein de la <a href="https://sciences.univ-amu.fr/" target="_blank">Faculté des sciences</a> de l'université d'Aix-Marseille.
</p>
<p lang="en">
    I've been teaching as a PhD student (2020-2023, 64&nbsp;hours/year) and as a teaching associate (<abbr title="Attaché temporaire d'enseignement et de recherche">ATER</abbr>, 2023-2024, 192&nbsp;hours/year) within the <a href="https://sciences.univ-amu.fr/" target="_blank">Faculty of Sciences</a> of Aix-Marseille University. See the details below (in French).
</p>

<dl>
    <dt>Département de mathématiques</dt>
    <dd><b>Logique et calculabilité</b>, CM-TD, M1 IMD.</dd>
    <dd><b>Algèbre linéaire</b>, CM-TD, L1 (portail).</dd>
    <dd><b>Langage mathématique</b>, CM-TD, L1 (portail) et L1 aménagée en deux ans, avec P.&nbsp;Dehornoy et L.&nbsp;Vaux&nbsp;Auclair.</dd>
    <dd><b>Fondements et analyse</b>, TD, L1 MIASHS, avec M.&nbsp;Quatrini.</dd>
    <dd><b>Outils mathématiques</b>, CM-TD, L1 aménagée en deux ans.</dd>

    <dt>Département d'informatique</dt>
    <dd><b>Algorithmique des graphes</b>, CM-TD, L2 MIASHS, avec H.&nbsp;Daudé.</dd>
    <dd><b>Calculabilité</b>, TD, L3 Informatique, avec K.&nbsp;Perrot.</dd>
    <dd><b>Structures discrètes</b>, TP, L2 Informatique, avec A.&nbsp;Milani.</dd>
    <dd><b>Mise en œuvre informatique</b> (introduction à l'algorithmique), TD-TP, L1 (portail), avec L.&nbsp;Becerra.</dd>
    <dd><b>Bases de données</b>, TD-TP, L3 Informatique, avec L.&nbsp;Santocanale.</dd>
</dl>

<p>
    Voir le détail des heures pour
    <a href="https://sciences.gdep.univ-amu.fr/service/2023/D01/U2397/" target="_blank">23-24</a>,
    <a href="https://sciences.gdep.univ-amu.fr/service/2022/D01/U2397/" target="_blank">22-23</a>,
    <a href="https://sciences.gdep.univ-amu.fr/service/2021/D01/U2397/" target="_blank">21-22</a>,
    <a href="https://sciences.gdep.univ-amu.fr/service/2020/D01/U2397/" target="_blank">20-21</a>.
</p>


<?php end_content(); ?>
