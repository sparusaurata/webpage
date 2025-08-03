<?php 

/**
 * This example file shows how to store a set of talks.
 * 
 * It should only define an array $data containing the talks.
 * Each talk is itself an array.
 * 
 * For each talk the possible parameters are the following.
 * [HTML] means that the value of the parameter may contain HTML code.
 * [Translatable] means that the value of the parameter may be either a single
 * string, or an array indexed by language identifiers.
 * 
 * - 'title'        The title of the talk.
 *                  [HTML] [Translatable]
 * - 'type'         The type of the talk. The possible values are the 
 *                  keys of $settings['talk types'] (by default: 'conference', 
 *                  'seminar', 'poster', 'dissemination' or 'defence').
 * - 'date'         The date of the talk. Authorised formats are "YYYY-MM-DD", 
 *                  "YYYY-MM" and "YYYY".
 * - 'event'        The event where the talk took place.
 *                  [HTML] [Translatable]
 * - 'location'     The location of the event where the talk took place.
 *                  [HTML] [Translatable]
 * - 'info'         Additional info on the talk.
 *                  [HTML] [Translatable]
 * - 'pdf', 'arxiv', 'hal', 'slides', 'code', 'video', 'url' (and any other key 
 *   of $settings['link types']) 
 *                  The link to additional material related to the talk (it 
 *                  will be prefixed by the 'prefix' given in 
 *                  $settings['link types']).
 */


// Prevents from loading this file directly.
if( !defined("STARTED") ) { die("<h1>Access denied</h1>"); }


$data = [

    /* 

    array(
        // Mandatory parameters
        'title'         => "",
        'type'          => "",
        'date'          => "",
        // Optional parameters (can be removed)
        'event'         => "",
        'location'      => "", 
        'info'          => "",
        'pdf'           => null,
        'video'         => null,
        'slides'        => null,
    ),

    */

    array(
        // Mandatory parameters
        'title'         => 
            "Confluence of 001- and 101-infinitary λ-calculi by linear approximation",
        'type'          => "conference",
        'date'          => "2025-09-02",
        // Optional parameters (can be removed)
        'event'         => 
            "<a href=\"https://iwc2025.github.io/\" target=\"_blank\">IWC&nbsp;2025</a>",
        'location'      => "Leipzig", 
        'info'          => "",
        'pdf'           => "./fichiers/exposes/simulation-iwc.pdf",
        'video'         => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'title'         => 
            "The lazy evaluation of the λ-calculus enjoys linear approximation, and that's all",
        'type'          => "conference",
        'date'          => "2025-07-20",
        // Optional parameters (can be removed)
        'event'         => 
            "<a href=\"https://lipn.univ-paris13.fr/TLLA/2025/\" target=\"_blank\">TLLA&nbsp;2025</a>",
        'location'      => "Birmingham", 
        'info'          => "",
        'pdf'           => "./fichiers/papiers/lazy-taylor-tlla.pdf",
        'video'         => null,
        'slides'        => "./fichiers/exposes/lazy-taylor-tlla-slides.pdf",
    ),

    array(
        // Mandatory parameters
        'title'         =>
            "Ohana trees and Taylor expansion for the λI-calculus. No variable gets left behind or forgotten!",
        'type'          => "conference",
        'date'          => "2025-07-18",
        // Optional parameters (can be removed)
        'event'         => 
            "<a href=\"https://fscd2025.github.io/\" target=\"_blank\">FSCD&nbsp;2025</a>",
        'location'      => "Birmingham", 
        'info'          => "",
        'pdf'           => "./fichiers/papiers/ohana.pdf",
        'video'         => null,
        'slides'        => "./fichiers/exposes/ohana-fscd.pdf",
    ),

    array(
        // Mandatory parameters
        'title'         => "Compression for Coinductive Infinitary Rewriting
            (A Preliminary Account)",
        'type'          => "conference",
        'date'          => "2025-07-14",
        // Optional parameters (can be removed)
        'event'         => 
            "<a href=\"https://hor2025.github.io/\" target=\"_blank\">HOR&nbsp;2025</a>",
        'location'      => "Birmingham", 
        'info'          => "",
        'pdf'           => "./fichiers/papiers/compression-hor.pdf",
        'video'         => null,
        'slides'        => "./fichiers/exposes/compression-hor-slides.pdf",
    ),

    array(
        // Mandatory parameters
        'title'         => 
            "Linear approximation of functional programs, revisited",
        'type'          => "seminar",
        'date'          => "2025-04-02",
        // Optional parameters (can be removed)
        'event'         => "Séminaire APR",
        'location'      => "LIP6, Paris", 
        'info'          => null,
        'pdf'           => null,
        'video'         => null,
        'slides'        => "./fichiers/exposes/2025 04 02 séminaire lip6.pdf",
    ),

    array(
        // Mandatory parameters
        'title'         => 
            "Continous and linear approximations for the λ-calculus",
        'type'          => "dissemination",
        'date'          => "2025-03-26",
        // Optional parameters (can be removed)
        'event'         => "M2 LMFI",
        'location'      => "Université Paris Cité", 
        'info'          => array(
            "fr" => "Séance invitée dans le cours spécialisé <a href=\"https://master.math.u-paris.fr/modules/m2lmfi-ppcs/\" target=\"_blank\">Linear Logic and Quantitative Semantics</a>.",
            "en" => "Invited lecture for the “cours spécialisé” <a href=\"https://master.math.u-paris.fr/modules/m2lmfi-ppcs/\" target=\"_blank\">Linear Logic and Quantitative Semantics</a>.",
        ),
        'pdf'           => "./fichiers/exposes/2025 03 26 LMFI continuous and linear approx.pdf",
        'video'         => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'title'         => "How to Play the Accordion: Uniformity and the (Non-)Conservativity of the Linear Approximation of the λ-Calculus",
        'type'          => "conference",
        'date'          => "2025-03-05",
        // Optional parameters (can be removed)
        'event'         => "STACS 2025",
        'location'      => "Jena", 
        'info'          => "",
        'pdf'           => null,
        'video'         => null,
        'slides'        => "./fichiers/exposes/conservativity-stacs.pdf",
    ),

    array(
        // Mandatory parameters
        'title'         => "The missing ingredient in the linear approximation of the λ-calculus (and other autobiographical stuff)",
        'type'          => "seminar",
        'date'          => "2024-11-28",
        // Optional parameters (can be removed)
        'event'         => "PPS “back to work” day",
        'location'      => "IRIF, Paris", 
        'info'          => "",
        'pdf'           => null,
        'video'         => null,
        'slides'        => "./fichiers/exposes/2024 11 28 autobiographie pps.pdf",
    ),

    array(
        // Mandatory parameters
        'title'         => "The linear approximation of the λ-calculus:
            A new presentation of an old thing",
        'type'          => "seminar",
        'date'          => "2024-09-26",
        // Optional parameters (can be removed)
        'event'         => "séminaire LoVe",
        'location'      => "LIPN, Villetaneuse", 
        'info'          => "",
        'pdf'           => null,
        'video'         => null,
        'slides'        => "./fichiers/exposes/2024 09 26 taylor lipn.pdf",
    ),

    array(
        'title'         => 
            "Taylor Approximation and Infinitary λ-Calculi",
        'event'         => 
            "<span lang=\"fr\">Soutenance de thèse</span>
            <span lang=\"en\">PhD thesis defense</span>", 
        'type'          => "conference",
        'date'          => "2024-06-10",
        'location'      => "Marseille", 
        'important'     => false,
        'slides'        => "./fichiers/exposes/soutenance.pdf",
    ),

    array(
        'title'         => 
            "Nominal Algebraic-Coalgebraic Data Types, with 
            Applications to Infinitary λ-Calculi. A fanfiction on
            <a href=\"https://lmcs.episciences.org/865\"
            target=\"_blank\">[KPSdV'13]</a>",
        'event'         => 
            "<a href=\"https://www.irif.fr/users/saurin/fics2024/index.html\" 
            target=\"_blank\">FICS 2024</a>", 
        'type'          => "conference",
        'date'          => "2024-02-19",
        'location'      => "Naples", 
        'important'     => false,
        'pdf'           => "./fichiers/papiers/nominal-nu-mu-fics.pdf",
        'video'         => null,
        'slides'        => "./fichiers/exposes/nominal-nu-mu-slides-fics.pdf",
    ),

    array(
        'title'         =>
            "Nominal Algebraic-Coalgebraic Data Types,
            with Applications to Infinitary λ-Calculi",
        'event'         => "Séminaire Logique & Interactions",
        'type'          => "seminar",
        'date'          => "2023-11-23",
        'location'      => "I2M, Marseille",
    ),

    array(
        'title'         => "Uniformity and the Taylor expansion of 
            infinitary λ-terms",
        'event'         => "Groupe de travail Sémantique", 
        'type'          => "seminar",
        'date'          => "2023-11-14",
        'location'      => "IRIF, Paris", 
        'important'     => false,
        'slides'        => "./fichiers/exposes/uniformity-irif.pdf",
    ),

    array(
        'title'         => "How To Play The Accordion.
            On the (Non-)Conservativity of the Reduction Induced by the Taylor 
            Approximation of λ-Terms",
        'event'         => "<a href=\"https://lipn.univ-paris13.fr/TLLA/2023/\" 
            target=\"_blank\">TLLA 2023</a>", 
        'type'          => "conference",
        'date'          => "2023-07-01",
        'location'      => "Rome", 
        'important'     => false,
        'pdf'           => "./fichiers/papiers/conservativity-short.pdf",
        'video'         => null,
        'slides'        => "./fichiers/exposes/conservativity-tlla.pdf",
    ),

    array(
        'title'         => "Category theory stories 3: Where
            \( P \wedge (Q_1 \\vee Q_2) \Leftrightarrow
            (P \wedge Q_1) \\vee (P \wedge Q_2) \)",
        'event'         => 
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2023-04-20",
        'location'      => "I2M-CPT, Marseille", 
        'info'          => array(
            'fr' => "Exposé introductif sur les adjonctions.",
            'en' => "Introductory talk about adjoint functors.",
        ),
    ),

    array(
        'title'         =>
            "La réduction du λ-calcul à ressources induit une extension conservative de la β-réduction des λ-termes",
        'event'         => "Séminaire Logique & Interactions",
        'type'          => "seminar",
        'date'          => "2023-03-02",
        'location'      => "I2M, Marseille",
    ),

    array(
        'title'         => "Taylor Expansion for the Infinitary λ-Calculus",
        'event'         => "
            <span lang=\"fr\">
                Journées du groupe de travail SCALP
            </span>
            <span lang=\"en\">
                SCALP Working Group Days
            </span>", 
        'type'          => "conference",
        'date'          => "2023-02-16",
        'location'      => "CIRM, Marseille", 
        'slides'        => "./fichiers/exposes/simulation-scalp.pdf",
    ),

    array(
        'title'         => "Taylor Expansion as a Finitary Approximation
        Framework for the Infinitary λ-Calculus",
        'event'         => "
            <span lang=\"fr\">
                école d'hiver «&nbsp; Les mathématiques discrètes et la
                logique&nbsp;: des mathématiques à l'informatique&nbsp;»
            </span>
            <span lang=\"en\">
                “Discrete mathematics and logic: Between mathematics and 
                computer science” winter school
            </span>", 
        'type'          => "poster",
        'date'          => "2023-01-18",
        'location'      => "CIRM, Marseille", 
        'pdf'           => "./fichiers/exposes/simulation-poster-cirm23.pdf",
    ),

    array(
        'title'         => "Taylor expansion for the infinitary λ-calculus",
        'event'         => "Séminaire PPS", 
        'type'          => "seminar",
        'date'          => "2023-01-12",
        'location'      => "IRIF, Paris", 
        'important'     => false,
        'slides'        => "./fichiers/exposes/simulation-irif.pdf",
    ),

    array(
        'title'         => "Des preuves qui calculent",
        'event'         => "Journée des doctorant⋅es de l'ED 184", 
        'type'          => "dissemination",
        'date'          => "2023-01-11",
        'location'      => "Marseille", 
        'important'     => false,
        'slides'        => null,
    ),

    array(
        'title'         => "Category theory stories 2: Where a real number is
            nonnegative whenever it is greater than all negative numbers",
        'event'         => 
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2022-12-08",
        'location'      => "I2M-CPT, Marseille", 
        'info'          => array(
            'fr' => "Exposé introductif sur le lemme de Yoneda.",
            'en' => "Introductory talk about the Yoneda lemma.",
        ),
    ),

    array(
        'title'         => "Category theory stories 1: Where we'll discover
            proofs by induction",
        'event'         => 
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2022-11-17",
        'location'      => "I2M-CPT, Marseille", 
        'info'          => array(
            'fr' => "Exposé introductif autour des F-algèbres initiales.",
            'en' => "Introductory talk about initial F-algebras.",
        ),
    ),

    array(
        'title'         => "Calculs impossibles et calculs difficiles",
        'event'         => 
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2022-05-19",
        'location'      => "I2M-CPT, Marseille", 
        'info'          => array(
            'fr' => 
                "Deux exposés introductifs sur les machines de Turing et la
                calculabilité.",
            'en' =>
                "Two introductory talks about Turing machines and
                computability.",
        ),
        'slides'        => "./fichiers/exposes/2022 05 12 calculabilite.pdf",
    ),

    array(
        'title'         => "De toute façon les maths c'est que du calcul",
        'event'         =>
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2022-05-04",
        'location'      => "I2M, Marseille", 
        'info'          => array(
            'fr' => "Exposé introductif sur la correspondance de Curry-Howard.",
            'en' => "Introductory talk about the Curry-Howard correspondence.",
        ),
    ),

    array(
        'title'         => "Taylor Expansion for the Infinitary λ-Calculus",
        'event'         => "Journées nationales du GdR IM", 
        'type'          => "poster",
        'date'          => "2022-04-01",
        'location'      => "CNRS, Lille", 
        'pdf'           => "./fichiers/exposes/simulation-poster-jnim22.pdf",
    ),

    array(
        'title'         => "Comment développer une preuve en série entière
            (ou presque)",
        'event'         =>
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2021-12-02",
        'location'      => "I2M-CPT, Marseille",
    ),

    array(
        'title'         => "Développement de Taylor en λ-calcul infinitaire",
        'event'         => "Séminaire Logique & Interactions", 
        'type'          => "seminar",
        'date'          => "2021-11-25",
        'location'      => "I2M, Marseille", 
        'info'          => array(
            'fr' => "Deux exposés.",
            'en' => "Two talks.",
        ),
    ),

    array(
        'title'         => "Calcul et Raisonnement sont dans un bateau",
        'event'         => "Journée de rentrée du M1 MAAP", 
        'type'          => "dissemination",
        'date'          => "2021-09-03",
        'location'      => "Marseille", 
    ),

    array(
        'title'         => "Lambda-calcul et correspondance de Curry-Howard",
        'event'         =>
            "<span lang='en'>PhD student's seminar</span>
            <span lang='fr'>Séminaire des doctorant⋅es</span>", 
        'type'          => "dissemination",
        'date'          => "2021-03-16",
        'location'      => "I2M, Marseille", 
    )
];

?>
