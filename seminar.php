<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bologna seminar on Theory of software systems</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9;">

    <style>
        body { max-width: 1400px; }
        div.talk { margin-bottom: 15px; }
        details.abstract { font-size: 80%; margin-top: 5px; }
        details.abstract summary { font-variant: small-caps; }
    </style>
</head>

<body>
<h1>Bologna seminar on Theory of software systems</h1>

<ul>
    <li>
        Usual date and time: every two weeks, on Wednesday at 11:00.
    </li><li>
        Usual location: <a href="https://www.openstreetmap.org/way/149787788" target="_blank">mura Anteo Zamboni 7</a>, ground floor, aula Busi.
    </li><li>
        Talks are streamed for remote attendance. The link is sent in the announcement emails.
    </li><li>
        Mailing list for announcements: <a href="https://lists.cs.unibo.it/mailman3/postorius/lists/olas_meeting.lists.cs.unibo.it/" target="_blank">subscribe here</a>.
    </li>
</ul>

<?php $talks = array(
    /*
    array(
        'DATETIME'      => "2026-MM-DD 11:00",
        'SPEAKER'       => NULL,
        'AFFILIATION'   => "",
        'TITLE'         => NULL,
        'LOCATION'      => "aula Busi",
        'ABSTRACT'      => NULL
    ),
    */
    array(
        'DATETIME'      => "2026-03-04 11:00",
        'SPEAKER'       => NULL,
        'AFFILIATION'   => "",
        'TITLE'         => NULL,
        'LOCATION'      => "aula Busi",
        'ABSTRACT'      => NULL
    ),
    array(
        'DATETIME'      => "2026-02-18 11:00",
        'SPEAKER'       => NULL,
        'AFFILIATION'   => "",
        'TITLE'         => NULL,
        'LOCATION'      => "aula Busi",
        'ABSTRACT'      => NULL
    ),
    array(
        'DATETIME'      => "2026-02-04 11:00",
        'SPEAKER'       => 
            "<a href='https://www.i2m.univ-amu.fr/perso/remy.cerda/' target='_blank'>Rémy Cerda</a>",
        'AFFILIATION'   => "Unibo",
        'TITLE'         =>
            "Infinitary rewriting and the linear approximation of functional programs",
        'LOCATION'      => "aula Busi",
        'ABSTRACT'      =>
            "A standard technique in λ-calculus is <i>continuous</i> program approximation, where the semantics of a program is described as a limit of finite approximants. It can be refined into a <i>linear</i> approximation where an operation of Taylor expansion takes a program to a power series of finite approximants. In this talk, I rebuild this longstanding line of work using what can arguably be presented as the “missing ingredient”, infinitary rewriting. Depending on the time remaining and the wishes of the audience, I will show a few other interesting results or questions around the lines of an infinitary Curry-Howard correspondence."
    ),
    array(
        'DATETIME'      => "2026-01-21 11:00",
        'SPEAKER'       =>
            "<a href='https://www.irif.fr/users/lancelot/index' target='_blank'>Adrienne Lancelot</a>",
        'AFFILIATION'   => "Unibo",
        'TITLE'         => NULL,
        'LOCATION'      => "aula Busi",
        'ABSTRACT'      => NULL
    ),
    array(
        'DATETIME'      => "2025-11-19 14:00",
        'SPEAKER'       => 
            "<a href='https://jad-issa.com/pages/jad-issa.html' target='_blank'>Jad Issa</a>",
        'AFFILIATION'   => "CEA Paris-Saclay, Université de Lorraine",
        'TITLE'         => "Static analysis of quantum/classical programs using hybrid path-sums",
        'LOCATION'      => "aula Busi",
        'ABSTRACT'      => NULL
    ),
); 

// The HTML format for printing a talk
$format = <<<EOT
    <div class="talk">
    <div>DTIME3, LOCATION</div>
    <div><b>TLINE</b></div>
    ALINE
    </div>
EOT;
$format_titleline = "SPEAKER</b> (AFFILIATION), <b>TTEXT";
$format_titletext = "“<i>TITLE</i>”";
$format_abstractline = <<<EOT
    <details class="abstract"><summary>Abstract.</summary> ABSTRACT</details>
EOT;

// Format the data and sort it chronologically
foreach ( array_keys($talks) as $i ) {
    // date and time
    $talks[$i]['DTIME2'] =
        DateTime::createFromFormat('Y-m-d H:i', $talks[$i]['DATETIME']);
    $talks[$i]['DTIME3'] = $talks[$i]['DTIME2']->format('D j M Y, H:i');
    // titleline and titletext
    if ( is_null($talks[$i]['SPEAKER']) ) {
        $talks[$i]['TLINE'] = "TBA";
    } else {
        if ( is_null($talks[$i]['TITLE']) ) {
            $talks[$i]['TTEXT'] = "TBA";
        } else {
            $talks[$i]['TTEXT'] = strtr($format_titletext, $talks[$i]);
        }
        $talks[$i]['TLINE'] = strtr($format_titleline, $talks[$i]);
    }
    // abstract
    if ( is_null($talks[$i]['ABSTRACT']) ) {
        $talks[$i]['ALINE'] = "";
    } else {
        $talks[$i]['ALINE'] = strtr($format_abstractline, $talks[$i]);
    }
}
usort($talks, fn($a, $b) => $a['DTIME2'] <=> $b['DTIME2']);

// Prints the talks
function print_talks($upcoming) {
    global $talks, $format;
    $now = new DateTime();
    if ( $upcoming ) {
        foreach ( $talks as $t ) {
            if ( $t['DTIME2'] >= $now ) {
                echo strtr($format, $t);
            }
        }
    } else {
        foreach ( array_reverse($talks) as $t ) {
            if ( $t['DTIME2'] < $now ) {
                echo strtr($format, $t);
            }
        }
    }
}
?>

<h2>Upcoming talks</h2>
<?php print_talks(true); ?>

<h2>Past talks</h2>
<?php print_talks(false); ?>

</body>

</html>
