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
        'title'         => "Taylor Approximation and Infinitary λ-Calculi",
        'authors'       => ["R.C."],
        'type'          => "thesis",
        'status'        => null,
        'date'          => "2024-06-10",
        'info'          => array(
            'fr' => "Thèse de doctorat (version pré-soutenance).
                Sous la direction de L.&nbsp;Vaux Auclair et L.&nbsp;Regnier.",
            'en' => "PhD thesis (pre-defense version).
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
        'title'         => "Nominal Algebraic-Coalgebraic Data Types, with 
            Applications to Infinitary λ-Calculi. A fanfiction on
            <a href=\"https://lmcs.episciences.org/865\"
            target=\"_blank\">[KPSdV'13]</a>",
        'authors'       => ["R.C."],
        'type'          => "proceedings",
        'status'        => "accepted",
        'date'          => "2024-04-19",
        'info'          => array(
            'en' => "Extended abstract accepted by
                <a href=\"https://www.irif.fr/users/saurin/fics2024/index.html\"
                target=\"_blank\">FICS 2024</a>.
                See Chapter&nbsp;1 of my thesis for more details.",
            'fr' => "Version courte acceptée pour communication à
                <a href=\"https://www.irif.fr/users/saurin/fics2024/index.html\"
                target=\"_blank\">FICS 2024</a>.
                Plus de détails dans le chapitre&nbsp;1 de ma thèse.",
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
    ),

    array(
        'title'         => "How To Play The Accordion.
            On the (Non-)Conservativity of the Reduction Induced by the
            Taylor Approximation of λ-Terms",
        'authors'       => ["R.C.", "L.&nbsp;Vaux&nbsp;Auclair"],
        'type'          => "unpublished",
        'status'        => "draft",
        'date'          => "2023-05-03",
        'abstract'      =>
            "<p>
            The Taylor expansion, which stems from Linear Logic and its 
            differential extensions, is an approximation framework for the 
            λ-calculus (and many of its variants). 
            The reduction of the approximants of a λ-term induces a reduction 
            on the λ-term itself, which enjoys a simulation property: 
            whenever a term reduces to another, the approximants reduce 
            accordingly. In recent work, we extended this result to an 
            infinitary λ-calculus (namely, \(\Lambda_{\infty}^{001}\)).
            </p><p>
            This short paper solves the question whether the converse property 
            also holds: if the approximants of some term reduce to the 
            approximants of another term, 
            is there a β-reduction between these terms?
            </p><p>
            This happens to be true for the λ-calculus, as we show, 
            but our proof fails in the infinitary case. 
            We exhibit a counter-example, refuting the conservativity for 
            \(\Lambda_{\infty}^{001}\). 
            </p>",
        'pdf'           => "./fichiers/papiers/conservativity.pdf",
        'arxiv'         => "2305.02785",
    ),
    
    array(
        'title'         => "Finitary Simulation of Infinitary β-Reduction
            via Taylor Expansion, and Applications",
        'authors'       => ["R.C.", "L.&nbsp;Vaux&nbsp;Auclair"],
        'type'          => "journal",
        'status'        => null,
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