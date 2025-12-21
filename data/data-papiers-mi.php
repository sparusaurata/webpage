<?php 

/**
 * This example file shows how to store a set of publications.
 * 
 * It should only define an array $data containing the publications.
 * Each publication is itself an array.
 * 
 * For each publication the possible parameters are the following.
 * [HTML] means that the value of the parameter may contain HTML code.
 * [Translatable] means that the value of the parameter may be either a single
 * string, or an array indexed by language identifiers.
 * 
 * - 'title'        The title of the publication.
 *                  [HTML] [Translatable]
 * - 'authors'      An array of strings containing the authors of the 
 *                  publication.
 *                  [HTML]
 * - 'type'         The type of the publication. The possible values are the 
 *                  keys of $settings['paper types'] (by default: 'book', 
 *                  'journal', 'bookchapter', 'proceedings', 'unpublished' or 
 *                  'thesis').
 * - 'status'       The publication status of the paper. The possible values 
 *                  are null (meaning that the paper is published) or the keys 
 *                  of $settings['paper statuses'] (by default: 'draft', 
 *                  'submitted', 'review', 'accepted').
 * - 'date'         The date of the paper. Authorised formats are "YYYY-MM-DD", 
 *                  "YYYY-MM" and "YYYY" (though only the year will be 
 *                  displayed).
 * - 'info'         Additional info on the paper, e.g. where it was published.
 *                  [HTML] [Translatable]
 * - 'abstract'     The abstract of the paper. It should be wrapped in 
 *                  <p>...</p> HTML tags.
 *                  [HTML] [Translatable]
 * - 'doi'          The DOI of the paper.
 * - 'pdf', 'arxiv', 'hal', 'slides', 'code', 'video', 'url' (and any other key 
 *   of $settings['link types']) 
 *                  The link to additional material related to the paper (it 
 *                  will be prefixed by the 'prefix' given in 
 *                  $settings['link types']).
 */


// Prevents from loading this file directly.
if( !defined("STARTED") ) { die("<h1>Access denied</h1>"); }


$data = [
    /* 

    array(
        // Mandatory parameters
        'bibid'         => "",
        'title'         => "",
        'authors'       => [""],
        'type'          => "",
        'status'        => null,
        'date'          => "",
        // Optional parameters (can be removed)
        'info'          =>
            "",
        'abstract'      =>
            "<p>
            
            </p>",
        'pdf'           => null,
        'arxiv'         => null,
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    */

    array(
        // Mandatory parameters
        'bibid'         => "conservativity-final",
        'title'         => "How to play the Accordion.
            Uniformity and the (non-)conservativity of the
            linear approximation of the λ-calculus",
        'authors'       => ["R.C.", "Lionel Vaux Auclair"],
        'type'          => "journal",
        'status'        => "submitted",
        'date'          => "2025-11-24",
        // Optional parameters (can be removed)
        'info'          =>
            "Extended and improved version of [<a href=\"#papiers-mi-P2\">P1</a>].",
        'abstract'      =>
            "<p>
            Twenty years after its introduction by Ehrhard and Regnier, differentiation in λ-calculus and in linear logic is now a celebrated tool. In particular, it allows to establish a Taylor expansion formula for various λ-calculi, hence providing a theory of linear approximations for these calculi. In the pure λ-calculus,  the linear approximants of λ-terms supporting this Taylor expansion are the terms of a so-called resource calculus, which is equipped with a finitary (strongly normalising) reduction; and the efficiency of this linear approximation is expressed by results stating that the (possibly) infinitary β-reduction of λ-terms is simulated by the reduction of their Taylor expansions, which is induced by the iterated reduction of resource terms. In terms of rewriting systems, resource reduction (operating on infinite linear combinations of Taylor approximants) is an extension of β-reduction.
            </p><p>
            In this article, we address the converse property, conservativity: do all reductions between Taylor expansions arise from actual β-reductions? We show that if we restrict the setting to finite terms and β-reduction sequences, then the linear approximation is conservative. However, as soon as one allows infinitary reduction sequences this property is broken. We design a counter-example, the Accordion. Then we show how restricting the reduction of the Taylor approximants allows to build a conservative extension of the β-reduction preserving good simulation properties; this restriction relies on uniformity, a property that was already at the core of Ehrhard and Regnier's pioneering work. Finally, we extend our work to β\(\bot\)-reductions, which play a key role in λ-calculus as they relate a λ-term to its Böhm tree.
            </p>",
        'pdf'           => "./fichiers/papiers/conservativity-lmcs.pdf",
        'arxiv'         => "2305.02785",
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'bibid'         => "compression",
        'title'         =>
            "Compression for Coinductive Infinitary Rewriting: A Generic Approach, with Applications to Cut-Elimination for Non-Wellfounded Proofs",
        'authors'       => ["R.C.", "Alexis Saurin"],
        'type'          => "proceedings",
        'status'        => "review",
        'date'          => "2025-10-09",
        // Optional parameters (can be removed)
        'abstract'      =>
            "<p>
            Infinitary rewriting, i.e. rewriting featuring possibly infinite terms and sequences of reduction, is a convenient framework for describing the dynamics of non-terminating but productive rewriting systems. In its original definition based on metric convergence of ordinal-indexed sequences of rewriting steps, a highly desirable property of an infinitary rewriting system is Compression, i.e. the fact that rewriting sequences of arbitrary ordinal length can always be ‘compressed’ to equivalent sequences of length at most ω.
            </p><p>
            Since then, the standard examples of infinitary rewriting systems have been given another equivalent presentation based on coinduction. In this work, we extend this presentation to the rewriting of arbitrary non-wellfounded derivations and we investigate compression in this setting. We design a generic proof of compression, relying on a characterisation factorising most of the proof and identifying the key property a compressible infinitary rewriting system should enjoy.
            </p><p>
            As running examples, we discuss first-order rewriting and infinitary λ-calculi. For the latter, compression can in particular be seen as a justification of its coinductive presentation in the literature. As a more advanced example, we also address compression of cut-elimination sequences in the non-wellfounded proof system μMALL∞ for multiplicative-additive linear logics with fixed points, which is a key lemma of several cut-elimination results for similar proof systems.
            </p>",
        'pdf'           => "./fichiers/papiers/compression.pdf",
        'arxiv'         => "2510.08420",
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'bibid'         => "lazy-abstract",
        'title'         => 
            "The lazy evaluation of the λ-calculus enjoys linear approximation, and that’s all",
        'authors'       => ["R.C."],
        'type'          => "unpublished",
        'date'          => "2025-07-19",
        // Optional parameters (can be removed)
        'info'          => array(
            'en' => "Abstract presented to the 9th International Workshop on Trends in Linear Logic and Interactions (<a href=\"https://lipn.univ-paris13.fr/TLLA/2025/\" target=\"_blank\">TLLA&nbsp;2025</a>).",
            'fr' => "Résumé présenté au 9th International Workshop on Trends in Linear Logic and Interactions (<a href=\"https://lipn.univ-paris13.fr/TLLA/2025/\" target=\"_blank\">TLLA&nbsp;2025</a>).",
        ),
        'abstract'      =>
            "<p>
            The advent of a linear approximation of the λ-calculus based on Taylor expansion allowed for a renewal and a refinement of the classic approach based on continuous approximation. The major property of the linear approximation, known as the Commutation theorem, relates the infinitary head normalisation of a λ-term towards its Böhm tree to the (finitary) normalisation of its Taylor expansion, that is, the sum of its multilinear approximants.
            This approximation theory is therefore related to the standard evaluation of λ-terms, that retains head normal forms as meaningful prefixes of information ; in this work, we adapt it to the lazy evaluation where weak head normal forms play this role. We introduce a lazy resource λ-calculus and the corresponding Taylor expansion, and show that it simulates the 101-infinitary λ-calculus. In particular, we obtain a Commutation theorem with respect to Lévy-Longo trees.
            This shows that a second normal form model enjoys a linear approximation, out of the \(2^c\) existing normal form models (where \(c\) is the cardinality of the continuum). We conclude by noticing that there cannot be such a linear approximation for all other such models, and in particular for Berarducci trees.
            </p>",
        'pdf'           => "./fichiers/papiers/lazy-taylor-tlla.pdf",
        'html'          => "https://drops.dagstuhl.de/storage/00lipics/lipics-vol337-fscd2025/html/LIPIcs.FSCD.2025.12/LIPIcs.FSCD.2025.12.html",
        'arxiv'         => null,
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'bibid'         => "compression-abstract",
        'title'         => 
            "Compression for Coinductive Infinitary Rewriting (A Preliminary Account)",
        'authors'       => ["R.C.", "Alexis Saurin"],
        'type'          => "unpublished",
        'date'          => "2025-07-14",
        // Optional parameters (can be removed)
        'info'          => array(
            'en' => "Abstract presented to the 12th International Workshop on Higher-Order Rewriting (<a href=\"https://hor2025.github.io/\" target=\"_blank\">HOR&nbsp;2025</a>).
            <b>Read the real paper [<a href=\"#papiers-mi-P4\">P3</a>] instead.</b>",
            'fr' => "Résumé présenté au 12th International Workshop on Higher-Order Rewriting (<a href=\"https://hor2025.github.io/\" target=\"_blank\">HOR&nbsp;2025</a>).
            <b>Lire plutôt le vrai article [<a href=\"#papiers-mi-P4\">P3</a>].</b>",
        ),
        'abstract'      =>
            "<p>
            In “traditional” infinitary rewriting based on ordinal-indexed rewriting sequences and strong Cauchy convergence, a key property of rewriting systems is compression, that is, the fact that rewriting sequences of arbitrary ordinal length can be compressed to sequences of length ω. Famous examples of compressible systems are left-linear first-order systems and infinitary λ-calculi.
            In this work, we investigate compression in the equivalent setting of coinductive infinitary rewriting, which we recall in a slightly augmented form: we extend it to rewriting of (possibly non-wellfounded) derivations in an arbitrary sytem of derivation rules. Then we define the coinductive counterpart of compressed rewriting sequences, and we present a general coinductive procedure turning arbitrary infinitary rewriting derivations into compressed ones, without relying on convergence. The coinductive presentation of the two aforementioned examples are endowed with compression lemmas as instances of our general method.
            </p>",
        'pdf'           => "./fichiers/papiers/compression-hor.pdf",
        'arxiv'         => null,
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
    ),

    array(
        // Mandatory parameters
        'bibid'         => "ohana",
        'title'         => 
            "Ohana trees and Taylor expansion for the λI-calculus.
            No variable gets left behind or forgotten!",
        'authors'       => ["R.C.", "G.&nbsp;Manzonetto", "A.&nbsp;Saurin"],
        'type'          => "proceedings",
        'date'          => "2025-07-07",
        // Optional parameters (can be removed)
        'info'          => 
            "<i>10th International Conference on Formal Structures for Computation and Deduction (FSCD&nbsp;2025)</i>, LIPIcs vol.&nbsp;337.",
        'abstract'      =>
            "<p>
            Although the λI-calculus is a natural fragment of the λ-calculus, obtained by forbidding the erasure, its equational theories did not receive much attention. The reason is that all proper denotational models studied in the literature equate all non-normalizable λI-terms, whence the associated theory is not very informative. The goal of this paper is to introduce a previously unknown theory of the λI-calculus, induced by a notion of evaluation trees that we call ‘Ohana trees’. The Ohana tree of a λI-term is an annotated version of its Böhm tree, remembering all free variables that are hidden within its meaningless subtrees, or pushed into infinity along its infinite branches.
            </p><p>
            We develop the associated theories of program approximation: the first approach—more classic—is based on finite trees and continuity, the second adapts Ehrhard and Regnier’s Taylor expansion. We then prove a Commutation Theorem stating that the normal form of the Taylor expansion of a λI-term coincides with the Taylor expansion of its Ohana tree. As a corollary, we obtain that the equality induced by Ohana trees is compatible with abstraction and application. We conclude by discussing the cases of Lévy-Longo and Berarducci trees, and generalizations to the full λ-calculus.
            </p>",
        'pdf'           => "./fichiers/papiers/ohana.pdf",
        'arxiv'         => "2505.06193",
        'hal'           => null,
        'code'          => null,
        'video'         => null,
        'url'           => null,
        'slides'        => null,
        'doi'           => "10.4230/LIPIcs.FSCD.2025.12",
    ),

    array(
        'bibid'         => "phd",
        'title'         => "Taylor Approximation and Infinitary λ-Calculi",
        'authors'       => ["R.C."],
        'type'          => "thesis",
        'date'          => "2024-06-10",
        'info'          => array(
            'fr' => "Thèse de doctorat.
                Sous la direction de L.&nbsp;Vaux Auclair et L.&nbsp;Regnier.",
            'en' => "PhD thesis.
                Under the supervision of L.&nbsp;Vaux Auclair et L.&nbsp;Regnier.",
        ),
        'pdf'           => "./fichiers/papiers/these.pdf",
        'hal'           => "tel-04664728",
        'abstract'      => array(
            'en' => "<p>
                Since its introduction by Church, the λ-calculus has played a major role in a century of development in theoretical computer science and mathematical logic, as well as in the birth of numerous programming languages. A crucial property of this calculus is that it is not normalising in general, leading to growing interest in finding approximations to its dynamics. The “classic” approximation tools, which emerged in the 1970s in the wake of Scott's semantics, are essentially semantic. The tools based on Taylor expansion, introduced in the 2000s by Ehrhard and Regnier, conversely propose a dynamic approximation of the β-reduction. Drawing its inspiration from the development of linear logic, Taylor expansion translates the λ-calculus into a multilinear “resource” calculus, equipped with finitary dynamics. A commutation theorem (between approximation and normalisation) makes this approach particularly effective, and justifies its success. The notion of Böhm tree is central to this line of research. Associated with the idea that normalising terms are not the only computationally meaningful ones, it generalises the notion of normal form by constituting an “infinite normal form”. Understanding the coinductive nature of this object led in the 1990s to the introduction of infinitary λ-calculi. In these calculi, terms and reductions can be infinite and, in the case of the 001-infinitary calculus, the Böhm tree is the notion of infinite normal form (without quotes).
                </p><p>
                The idea guiding this thesis is that the 001-infinitary λ-calculus lends itself to a generalisation of the Taylor approximation where, in particular, Böhm trees would be “ordinary citizens”. The approximation of the finite λ-calculus, and in particular its normalisation properties, then becomes a special case of the approximation of the infinitary calculus. This is enabled by the main result of the thesis, which establishes that the dynamics of the resource calculus is able to simulate the infinitary β-reduction via Taylor expansion. 
                </p><p>
                To arrive at this result, we first make a diversion via an abstract presentation of a “mixed” (inductive and coinductive) higher-order syntax, using a nominal formalism generalising recent work on coalgebraic types with binders. This allows us to formally define coalgebras of α-equivalence classes of infinite λ-terms (Chapter 1). In a second step, we define infinitary λ-calculi using a coinductive presentation, then recall their main properties as well as their connection with classical theories of approximation of the β-reduction (Chapter 2). Then, we present the resource λ-calculus as a special case of a rewriting with sums, and distinguish its qualitative and quantitative flavours (Chapter 3). In a second part devoted to the Taylor approximation itself, we begin by introducing the Taylor expansion of infinitary λ-terms and prove the announced simulation theorem, in its qualitative and quantitative forms. We demonstrate the effectiveness of this theorem by putting it at work, proposing in particular a new confluence proof for the 001-infinitary λ-calculus (Chapter 4). We also consider the conservativity of the simulation property, and demonstrate the surprising existence of a counterexample to this converse property (Chapter 5). Finally, we extend our work to the lazy setting, i.e. the setting related to the 101-infinitary λ-calculus, and we prove a commutation theorem for Lévy-Longo trees (Chapter 6).
                </p>",
            'fr' => "<p>
                Depuis son introduction par Church, le λ-calcul a joué un rôle majeur dans un siècle de développement de l'informatique théorique et de la logique mathématique, mais aussi dans la naissance de nombreux langages de programmation. Une propriété cruciale de ce calcul est qu'il n'est pas normalisant en général, de sorte qu'un intérêt croissant a porté sur la recherche d'approximations de sa dynamique. Les outils « classiques » d'approximation, nés dans les années 1970 dans le sillage des sémantiques de Scott, sont essentiellement sémantiques. Les outils basés sur le développement de Taylor, introduits dans les années 2000 par Ehrhard et Regnier, proposent à l'inverse une approximation dynamique de la β-réduction. Puisant ses inspirations dans le développement de la logique linéaire, le développement de Taylor traduit le λ-calcul vers un calcul « à ressources » multilinéaire, muni d'une dynamique finitaire. Un théorème de commutation (entre approximation et normalisation) fait notamment l'efficacité de cette approche, et en justifie le succès. La notion d'arbre de Böhm est centrale dans cette ligne de recherche. Née de l'idée que les termes normalisants ne sont pas les seuls à avoir un sens calculatoire, elle généralise la notion de forme normale en constituant une «forme normale à l'infini». La compréhension de la nature coinductive de cet objet a mené dans les années 1990 à l'introduction de λ-calculs infinitaires. Dans ces calculs, les termes et les réductions peuvent être infinis et, dans le cas du calcul 001-infinitaire, l'arbre de Böhm est la notion de forme normale à l'infini (sans guillemets).
                </p><p>
                L'idée qui guide cette thèse est que le λ-calcul 001-infinitaire se prête à une généralisation de l'approximation de Taylor où, en particulier, les arbres de Böhm seraient des «citoyens ordinaires». L'approximation du λ-calcul fini, et notamment de ses propriétés de normalisation, devient alors un cas particulier de l'approximation du calcul infinitaire. Cela est permis par le principal résultat de la thèse, qui établit que la dynamique du calcul à ressources est à même de simuler la β-réduction infinitaire via le développement de Taylor.
                </p><p>
                Pour arriver à ce résultat, nous faisons d'abord un détour par une présentation abstraite d'une syntaxe « mixte » (inductive et coinductive) d'ordre supérieur, à l'aide d'un formalisme nominal généralisant des travaux récents introduisant des types coalgébriques avec lieurs. Cela nous permet de définir formellement des coalgèbres de classes d'α-équivalence de λ-termes infinitaires (chapitre 1). Dans un second temps, nous définissons les λ-calculs infinitaires à l'aide d'une présentation coinductive, puis nous rappelons leurs principales propriétés ainsi que leur lien avec les théories classiques de l'approximation de la β-réduction (chapitre 2). Ensuite, nous présentons le λ-calcul à ressources comme un cas particulier d'une réécriture avec sommes, et distinguons ses versions qualitative et quantitative (chapitre 3). Dans une seconde partie consacrée à l'approximation de Taylor proprement dite, nous commençons par introduire le développement de Taylor des λ-termes infinitaires et prouvons le théorème de simulation annoncé, dans sa forme qualitative puis quantitative. Nous démontrons l'efficacité de ce théorème en le mettant à l'œuvre, proposant notamment une nouvelle preuve de confluence pour le λ-calcul 001-infinitaire (chapitre 4). Nous nous penchons également sur la conservativité de la propriété de simulation, et démontrons l'existence surprenante d'un contre-exemple à cette propriété réciproque (chapitre 5). Enfin, nous étendons notre travail au cadre paresseux, c'est-à-dire celui du λ-calcul 101-infinitaire, et nous démontrons un théorème de commutation pour les arbres de Lévy-Longo (chapitre 6). 
                </p>",
        )
    ),

    array(
        'bibid'         => "nominal-mu-nu",
        'title'         => "Nominal Algebraic-Coalgebraic Data Types, with 
            Applications to Infinitary λ-Calculi. A fanfiction on
            <a href=\"https://lmcs.episciences.org/865\"
            target=\"_blank\">[KPSdV'13]</a>",
        'authors'       => ["R.C."],
        'type'          => "proceedings",
        'date'          => "2025-11-04",
        'info'          => array(
            'en' =>
                "Proceedings of the Twelfth Workshop on Fixed Points in Computer Science (FICS&nbsp;2024),
                <a href=\"https://eptcs.org/content.cgi?FICS2024\" target=\"_blank\">EPTCS&nbsp;435</a>.
                See Chapter&nbsp;1 of my thesis for a longer version.",
            'fr' =>
                "Actes du Twelfth Workshop on Fixed Points in Computer Science (FICS&nbsp;2024),
                <a href=\"https://eptcs.org/content.cgi?FICS2024\" target=\"_blank\">EPTCS&nbsp;435</a>.
                Version plus détaillée dans le chapitre&nbsp;1 de ma thèse.",
        ),
        'abstract'      => 
            "<p>
            Ten years ago, it was shown that nominal techniques can be used to 
            design coalgebraic data types with variable binding, so that 
            α-equivalence classes of infinitary terms are directly endowed with 
            a corecursion principle. We introduce “mixed” binding signatures, 
            as well as the corresponding type of mixed inductive-coinductive 
            terms. We extend the aforementioned work to this setting.
            In particular, this allows for a nominal description of the sets 
            \(\Lambda^{abc}\) of \(abc\)-infinitary λ-terms (for
            \(a,b,c \in \{0,1\}\)) and of capture-avoiding substitution on 
            α-equivalence classes of such terms.
            </p>",
        'pdf'           => "fichiers/papiers/nominal-nu-mu-fics.pdf",
        'long'          => "fichiers/papiers/nominal-nu-mu.pdf",
        'doi'           => "10.4204/EPTCS.435.5",
        'arxiv'         => "2511.02595",
    ),

    array(
        'bibid'         => "conservativity",
        'title'         => "How to play the Accordion.
            Uniformity and the (non-)conservativity of the
            linear approximation of the λ-calculus",
        'authors'       => ["R.C.", "L.&nbsp;Vaux&nbsp;Auclair"],
        'type'          => "proceedings",
        'date'          => "2025-02-24",
        'info'          => 
            "<i>42nd International Symposium on Theoretical Aspects of Computer Science (STACS 2025)</i>, LIPIcs vol.&nbsp;327.
            <b>Read the extended version [<a href=\"#papiers-mi-J2\">J2</a>] instead.</b>",
        'abstract'      =>
            "<p>
            Twenty years after its introduction by Ehrhard and Regnier, differentiation in λ-calculus and in linear logic is now
            a celebrated tool. In particular, it allows to write the Taylor formula in various λ-calculi, hence providing a theory of linear approximations for these calculi. In the standard λ-calculus, this linear approximation is expressed by results stating that the (possibly) infinitary β-reduction of λ-terms is simulated by the reduction of their Taylor expansion: in terms of rewriting systems, the resource reduction (operating on Taylor approximants) is an extension of the β-reduction.
            </p><p>
            In this paper, we address the converse property, conservativity: are there reductions of the Taylor approximants that do not arise from an actual β-reduction of the approximated term? We show that if we restrict the setting to finite terms and β-reduction sequences, then the linear approximation is conservative. However, as soon as one allows infinitary reduction sequences this property is broken. We design a counter-example, the Accordion. Then we show how restricting the reduction of the Taylor approximants allows to build a conservative extension of the β-reduction preserving good simulation properties. This restriction relies on uniformity, a property that was already at the core of Ehrhard and Regnier's pioneering work.
            </p>",
        'pdf'           => "./fichiers/papiers/conservativity.pdf",
        'doi'           => "10.4230/LIPIcs.STACS.2025.23",
        'arxiv'         => "2305.02785v4",
    ),
    
    array(
        'bibid'         => "simulation",
        'title'         => "Finitary Simulation of Infinitary β-Reduction
            via Taylor Expansion, and Applications",
        'authors'       => ["R.C.", "L.&nbsp;Vaux&nbsp;Auclair"],
        'type'          => "journal",
        'date'          => "2023-12-20",
        'info'          =>
            "<i>Logical Methods in Computer Science</i>,
            Vol.&nbsp;19, no.&nbsp;4.",
        'abstract'      =>
            "<p>
            Originating in Girard's Linear logic, Ehrhard and Regnier's Taylor 
            expansion of λ-terms has been broadly used as a tool to approximate 
            the terms of several variants of the λ-calculus. Many results arise 
            from a Commutation theorem relating the normal form of the Taylor 
            expansion of a term to its Böhm tree. This led us to consider 
            extending this formalism to the infinitary λ-calculus, since the 
            \(\Lambda_{\infty}^{001}\) version of this calculus has Böhm trees 
            as normal forms and seems to be the ideal framework to reformulate 
            the Commutation theorem.
            </p><p>
            We give a (co-)inductive presentation of
            \(\Lambda_{\infty}^{001}\). We define a Taylor expansion on this 
            calculus, and state that the infinitary β-reduction can be 
            simulated through this Taylor expansion. The target language is the 
            usual resource calculus, and in particular the resource reduction 
            remains finite, confluent and terminating. Finally, we state the 
            generalised Commutation theorem and use our results to provide 
            simple proofs of some normalisation and confluence properties in 
            the infinitary λ-calculus. 
            </p>",
        'important'     => true,
        'doi'           => "10.46298/LMCS-19(4:34)2023",
        'pdf'           => "./fichiers/papiers/simulation.pdf",
        'arxiv'         => "2211.05608",
        'hal'           => null,
    ),
    /*
    array(
        // Mandatory parameters
        'title'         => "Développement de Taylor et λ-calcul infinitaire",
        'authors'       => ["R.C."],
        'type'          => "thesis",
        'status'        => null,
        'date'          => "2020-08-26",
        // Optional parameters (can be removed)
        'infofr'        =>
            "Mémoire de recherche dans le cadre d'un M2 d'informatique.
            Sous la direction de L.&nbsp;Vaux Auclair.",
        'info'          =>
            "Second year Master thesis in Computer science, as part of a 
            research internship. Under the supervision of L.&nbsp;Vaux
            Auclair.",
    ),
    
    array(
        // Mandatory parameters
        'title'         => "Equivalence of Three Categorical Notions of Model 
            for Dependent Types",
        'authors'       => ["R.C."],
        'type'          => "thesis",
        'status'        => null,
        'date'          => "2017-08-22",
        // Optional parameters (can be removed)
        'infofr'        =>
            "Mémoire de recherche dans le cadre d'un M1 d'informatique.
            Sous la direction de T.&nbsp;Streicher.",
        'info'          =>
            "First year Master thesis in Computer science, as part of a 
            research internship. Under the supervision of T.&nbsp;Streicher.",
    ),
*/
]

?>