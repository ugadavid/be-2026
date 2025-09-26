<script src="/courses/BOOSTENGLISH/document/menu-loader/datasBoost.js"></script><!--<script src="datasBoost.js"></script>-->
<style type="text/css">html {
        margin: 0 !important;
        padding: 0 !important;
        width: 99% !important;
    }

    .row {
        margin: 10px !important;
        padding: 10px !important;
        width: 90% !important;
    }

    #boostMenus{
        position: relative;
        z-index: 15;
        top: 100px;
        height: calc(100vh - 50px); /* toute la hauteur de la fenêtre - le bandeau */
       /* overflow-y: auto; /* permet de scroller si le contenu est trop long */
        width: 300px;
        background-color: #243654;
        padding: 1rem;
        max-width: 300px;
    }

    .topic_arrow {
        display: inline-block;
        transition: transform 0.3s ease;
        margin-left: 0.5em;
    }

    .topic_arrow.up {
        transform: rotate(180deg);
    }

    .themes {
        display: block;
        width: 100%;
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }

    .themes_title {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .topics {
        margin-left: -1em;
    }

    .subtopics {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-out, padding 0.3s ease;
        padding: 0 0;
    }

    .subtopics.open {
            max-height: 500px; /* suffisamment grand pour les contenus */
            padding: 0.5em 0;
        }
    .subtopic_bricks {
        display: block;
        padding: 5px 10px;
        color: #000000; /* noir lisible */
        background-color: #ffffff; /* fond clair */
        border-radius: 5px;
        margin: 3px 0;
        text-decoration: none;
        font-weight: 500;
    }

    .theme-filters {
        display: flex;
        justify-content: center;
        margin: 1em 0;
        gap: 1em;
        padding: 16px;
    }

    .theme-btn {
        position: relative;
        font-size: 1.5em;
        font-weight: bold;
        padding: 2px 20px;
        border-radius: 10px;
        color: #fff;
        background-color: #F9B233;
        margin: 0 8px;
        overflow: visible; /* autorise le dépassement */
    }

    .theme-btn.active {
        background-color: white;
        color: #000;
    }
    

    .theme-btn .subtitle {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-30%);
        background-color: #eee;
        color: #222;
        font-size: 0.65em;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 0;
        padding-bottom: 0;
        border-radius: 6px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        white-space: nowrap;
        line-height: 1.2em;
    }

    #lp-menu-cloned {
        border: 1px solid #ccc;
        padding: 10px;
        max-height: 80vh;
        overflow: auto;
        background: white;
    }

    /* --- Boost'English Style Integré --- */

/* Supprimer les marges ou paddings résiduels du haut */
body {
    margin-top: 0 !important;
    padding-top: 0 !important;
    font-family: 'Arial', sans-serif;
    background-color: #f3f6fb;
    color: #222;
}

#content-section {
  margin-bottom: 0 !important; /* ou 0 si tu veux coller au footer */
}


.topic, .subtopics, .themes {
    background-image: none !important;
}

.titre1 {
    color: #fff !important;
    font-size: 14px !important;
}


/* Masquer le logo INP / UGA */
#institution_logo, .headerInstitutional, .logo_container, #header-section {
    display: none !important;
}

/* Masquer la barre grise de navigation principale */
#main_top_navbar, .main_navbar, .navbar.navbar-default {
    display: none !important;
}

/* Masquer le bouton view as */
#view_as_link {
    display: none !important;
}

/* Masquer les compteurs utilisateurs */
#user_count, #teacher_count, .user-info, .toolTitle {
    display: none !important;
}

/* Masquer les breadcrumbs */
.breadcrumb, #breadcrumbs, .page-breadcrumbs {
    display: none !important;
}

/* Masquer le logo de l'espace contenu s’il y a encore un duplicat */
#courseTitleLogo img {
    display: none !important;
}

.themes_title {
  color: #ffcf59;
  font-weight: bold;
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

.topic_title {
  background-color: #2f4d78;
  color: white;
  padding: 0.4rem 0.6rem;
  border-radius: 6px;
  margin: 0.25rem 0;
  cursor: pointer;
}

.topic_title:hover {
  background-color: #4b6da3;
}

.subtopic_title,
.brick-link {
  background-color: #31456e;
  color: #ddd;
  padding: 0.35rem 0.6rem;
  margin: 0.2rem 0;
  border-radius: 5px;
  font-size: 1.5rem;
}

.subtopic_title:hover,
.brick-link:hover {
  background-color: #4b6da3;
  color: white;
}


.scorm_item_normal, .scorm_completed, .scorm_highlight {
  background-color: #31456e;
  color: #ddd;
  padding: 0.35rem 0.6rem;
  margin: 0.2rem 0;
  border-radius: 5px;
  font-size: 1.5rem;
}

.scorm_item_normal, .scorm_completed, .scorm_highlight :hover {
  background-color: #4b6da3;
  color: white;
}

.items-list {
    font-size: 1.2rem !important;
}

.lp-subitems {
  background-color: #31456e;
  margin: 0.25rem 0 0.5rem 1rem;
  padding-left: 0.5rem;
  border-left: 2px solid #ffcf59;
}

.lp-subitems a {
  display: block;
  color: #ccc;
  font-size: 0.85rem;
  text-decoration: none;
  margin: 0.15rem 0;
}

.lp-subitems a:hover {
  color: white;
}


.theme-btn[data-theme="Everyday communication"] {
  background-color: #f5a623;
  color: #1a2a47;
}
.theme-btn .subtitle[data-theme="Everyday communication"] {
  background-color: #fad391;
  color: #1a2a47;
}
.theme-btn[data-theme="Professional Communication"] {
  background-color: #409dd4;
  color: white;
}
.theme-btn .subtitle[data-theme="Professional Communication"] {
  background-color: #a0ceea;
  color: #1a2a47;
}
.theme-btn[data-theme="Specialist Communication"] {
  background-color: #8b58c9;
  color: white;
}
.theme-btn .subtitle[data-theme="Specialist Communication"] {
  background-color: #c5ace4;
  color: #1a2a47;
}
.theme-btn[data-theme="Learning focus"] {
  background-color: #54be99;
  color: white;
}
.theme-btn .subtitle[data-theme="Learning focus"] {
  background-color: #aadfcc;
  color: #1a2a47;
  left:70%
}

.theme-btn:hover {
  filter: brightness(1.1);
}

#boostHeader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999; /* toujours au-dessus */
    background-color: #102042; /* même fond que la barre */
    padding: 0.8em 1em;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 1em;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}


/* Pour éviter que le contenu passe dessous */
.boost_content {
    margin-top: 100px; /* ajuste si nécessaire */
}

.site-name {
  font-size: 2rem;
  font-weight: bold;
  color:white;
}

#inlineFrameExample {
    /*border: 1px solid #000;*/
    border: 0;
    position: relative;
    /*top: 120px;
    left: 300px;*/
    width: calc(100% - 300px);
    height: calc(100vh - 120px); /* toute la hauteur dispo */
    z-index: 9999;       /* 🔥 priorité max */
    background: #f3f6fb;   /* au cas où l’iframe ait des transparences */
}


#boostWrapper {
    position: relative;
    z-index: 10;
    background-color: #f3f6fb;
    width: 100%;
    margin: 0 !important;
    padding: 0 !important;
}

#iframeMainContent {
  position: relative;
  z-index: 10;
  background-color: yellow;
  width: 100%;
}

#course_tools > .row:first-child {
    position: relative;
    width: 100%;
    padding-right: 0 !important;
    padding-left: 0 !important;
    margin-right: 0 !important;
    margin-left: 0 !important;
    background-color: #f3f6fb;
}

#accueil {
    position: relative;
    width: 100%;
    top: 20px;
    padding-right: 0 !important;
    padding-left: 10px !important;
    margin-right: 0 !important;
    margin-left: 0 !important;
}



@media (max-width: 768px) {
  #boostHeader {
    flex-direction: column;
    align-items: stretch;
  }
}




@media (min-width: 1200px) {
    .container {
        width: auto !important;
    }
}
@media (min-width: 992px) {
    .container {
        width: auto !important;
    }
}
@media (min-width: 768px) {
    .container {
        width: auto !important;
    }
}



.container {
    padding-right: 0 !important;
    padding-left: 0 !important;
    margin-right: auto !important;
    margin-left: auto !important;
}

.page-course {
    padding: 0 !important;
}



.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9
 {
    position: relative !important;
    min-height: 1px !important;
    padding-right: 0 !important;
    padding-left: 0 !important;
}

/* Conteneur du dropdown */
#myBricks {
  position: fixed;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  padding: 10px 15px;
  width: 280px;
  max-height: 400px;
  overflow-y: auto;

  /* état caché */
  opacity: 0;
  transform: translateY(-10px);
  pointer-events: none;

  /* animation */
  transition: opacity 0.3s ease, transform 0.3s ease;
  z-index: 10001;
}

#myBricksBackdrop{
  position: fixed;
  inset: 0;
  background: transparent;   /* ou rgba(0,0,0,.05) si tu veux un léger voile */
  display: none;
  z-index: 10000;            /* sous le panel, au-dessus du reste (et de l’iframe) */
}

/* Quand le menu est visible */
#myBricks.active {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}

#myBricks.active + #myBricksBackdrop{
  display: block;
}








/* Panneau */
/* Conteneur: invisible par défaut */
.be-offcanvas{ position:fixed; inset:0; display:none; z-index: 10000; }

/* État ouvert – classe unique pour éviter les collisions */
.be-offcanvas.is-open-be{ display:block; }

/* Backdrop: couvre l’écran, sous le panel */
.be-offcanvas__backdrop{
  position:fixed; inset:0;
  background: rgba(0,0,0,.35);
  z-index: 1;
  pointer-events: auto;   /* capte les clics pour fermer */
}

/* Panel: au-dessus du backdrop */
.be-offcanvas__panel{
  position:fixed; right:0; top:0; height:100%;
  width:min(520px, 92vw);
  background:#fff;
  box-shadow:-12px 0 30px rgba(0,0,0,.25);
  padding:16px; overflow:auto;
  border-left:4px solid #4A90E2;
  font-family:"Lexend",system-ui,sans-serif;
  z-index: 2;
}

a#be-tools-btn.be-theme-btn {
  display: inline;              /* comme les autres liens */
  background: none;             /* pas de fond */
  color: #F5A623;               /* ou ta couleur de thème */
  padding: 0;                   /* pas de padding bouton */
  border: none;                 /* pas de bordure */
  cursor: pointer;
  font-size: 1.2rem;
  line-height: 1;
  opacity: .95;
}

a#be-tools-btn.be-theme-btn:hover {
  text-decoration: underline;   /* comme les autres liens du footer */
}

/* (Facultatif) Bouton de fermeture  */
.be-close{ border:0; background:#eb6628; color:#fff; padding:.45rem .7rem; border-radius:.5rem; cursor:pointer; }

/* Option: masquer le bloc natif une fois déplacé */
/*#course_tools{ display:none !important; }*/
.title-tools{ display:none !important; }
.course-tools-author{ display:none !important; }
.course-tools-interaction{ display:none !important; }
.course-tools-administration{ display:none !important; }
.row .course-tool {   display: none !important; }

/* Dans le panneau, on force l’affichage de ces blocs */
#be-tools-host .title-tools,
#be-tools-host .course-tools-author,
#be-tools-host .course-tools-interaction,
#be-tools-host .course-tools-administration,
#be-tools-host .course-tool {
  display:block !important;
}

/* Optionnel: grille plus lisible dans le panneau */
#be-tools-host .course-tools-author,
#be-tools-host .course-tools-interaction,
#be-tools-host .course-tools-administration{
  display:grid !important;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 10px;
}





#be-search-results{
  position:absolute; top:100%; left:0; right:0; margin-top:6px;
  background:#fff; border-radius:8px; box-shadow:0 8px 24px rgba(0,0,0,.15);
  max-height:60vh; overflow:auto; z-index:10002; padding:6px;
  font-family:"Lexend",system-ui,sans-serif;
}
#be-search-results .item{ padding:8px 10px; border-radius:6px; cursor:pointer; }
#be-search-results .item:hover, #be-search-results .item.active{ background:#f2f6ff; }



footer .sub-footer .row .col-md-4:nth-child(2) {
  display: flex;
  justify-content: center;
  align-items: center;
}


/* === Footer Boost === */
footer {
  background: #102042;                 /* bleu foncé BE */
  color: #fff;
  margin-top: 24px;
  font-family: "Lexend", system-ui, sans-serif;
}

footer .sub-footer {
  padding: 14px 12px;
}

footer .session-teachers,
footer .teachers,
footer .software-name {
  font-size: 1.2rem;
  line-height: 1;
  opacity: .95;
}

/* Liens footer */
footer a {
  color: #F5A623;                      /* jaune/orangé BE */
  text-decoration: none;
}
footer a:hover { text-decoration: underline; }

/* Nettoyage blocs vides si Chamilo les rend visibles */
footer .pre-footer,
footer .extra-footer {
  display: none !important;
}

/* Aligner le “Powered by Chamilo ©2025” à droite sur desktop */
@media (min-width: 768px) {
  footer .text-right { text-align: right; }
}




/* ===== Didacticiel BE ===== */
.be-guide { 
  background:#fff; border:1px solid #e6e6e6; border-radius:12px; padding:14px; box-shadow:0 6px 20px rgba(0,0,0,.06); 
  font-family:"Lexend",system-ui,sans-serif; 
  max-width: 1000px;       /* largeur max (plus petit que l’écran) */
  height: 300px;
  margin: 0 auto;          /* centrer horizontalement */
  text-align: left;      /* tout centrer */
}
.be-guide__viewport { position:relative; }
.be-slide { display:none; }
.be-slide.is-active { display:block; animation: beFade .2s ease; }
@keyframes beFade { from{opacity:0; transform:translateY(4px)} to{opacity:1; transform:none} }

.be-cols { display:grid; grid-template-columns: 1fr 1fr; gap:16px; }
.be-col h3 { margin:0 0 6px; color:#263c6e; }
.be-col p { margin:0; line-height:1.5; font-size:1.5rem; }

.be-fr h3 { color:#263c6e; }
.be-en h3 { color:#eb6628; }

.be-guide__controls { display:flex; align-items:center; justify-content:center; gap:8px; margin-top:12px; }
.be-nav { background:#263c6e; color:#fff; border:0; border-radius:10px; padding:6px 10px; cursor:pointer; font-weight:700; margin-top: 20px;}
.be-nav:hover{ background:#2f4b8a; }
.be-dots { display:flex; gap:6px; align-items:center; }
.be-dot { width:10px; height:10px; border-radius:50%; background:#d0d6e2; border:0; cursor:pointer; }
.be-dot[aria-selected="true"] { background:#4A90E2; }

/* Responsive : une colonne sur mobile */
@media (max-width: 720px){
  .be-cols { grid-template-columns: 1fr; }
}
</style>
<div id="boostWrapper">
<div id="boostHeader"><a href="https://echamilo.univ-grenoble-alpes.fr/courses/BOOSTENGLISH/index.php?id_session=0"><img alt="" height="50px" src="https://boost-english.fr/images/logo.png" width="45px" /></a>
<p class="site-name">&nbsp;Boost&#39;English</p>

<div class="theme-filters" id="themeFilters"><button class="theme-btn" data-theme="Everyday communication">Everyday<br />
<span class="subtitle" data-theme="Everyday communication">Communication</span></button><button class="theme-btn" data-theme="Professional Communication">Professional<br />
<span class="subtitle" data-theme="Professional Communication">Communication</span></button><button class="theme-btn" data-theme="Specialist Communication">Specialist<br />
<span class="subtitle" data-theme="Specialist Communication">Communication</span></button><button class="theme-btn" data-theme="Learning focus">Learning<br />
<span class="subtitle" data-theme="Learning focus">Focus</span></button>

<div id="searchWrapper" style="position:relative; display:inline-block;"><input class="searchField" id="searchField" onfocus="$(this).select()" size="20" type="text" value="Type a keyword" />
<div id="be-search-results" style="display:none;">&nbsp;</div>
</div>

<div>&nbsp;
<div class="titre1 inline_block"><span class="click" id="myBricksToggle" onclick="displayMyBricks(event)">My bricks</span></div>

<div id="myBricksArrow">&or;</div>
</div>
</div>
</div>

<div id="myBricks">&nbsp;</div>

<div aria-hidden="true" id="myBricksBackdrop">&nbsp;</div>

<div class="right_block">
<div id="accueil">&nbsp;<br />
&nbsp;<br />
&nbsp;
<div aria-label="Boost'English tutorial" class="be-guide" id="be-guide" role="region">
<div aria-live="polite" class="be-guide__viewport"><!-- Slide 1 -->
<section class="be-slide" data-step="1">
<div class="be-cols">
<div class="be-col be-en">
<h3>🚀 Welcome to Boost&rsquo;English</h3>

<p>Welcome to <em>Boost&rsquo;English</em>, your space to improve your English at your own pace. Each activity is a <strong>brick</strong>: a small, focused learning mission.</p>
</div>

<div class="be-col be-fr">
<h3>🚀 Bienvenue sur Boost&rsquo;English</h3>

<p>Bienvenue dans <em>Boost&rsquo;English</em>, ton espace pour progresser en anglais &agrave; ton rythme. Chaque activit&eacute; est une <strong>brique</strong> : une petite mission claire, utile et motivante.</p>
</div>
</div>
</section>
<!-- Slide 2 -->

<section class="be-slide" data-step="2">
<div class="be-cols">
<div class="be-col be-en">
<h3>🧩 Find your bricks (My Bricks)</h3>

<p>The <strong>My Bricks</strong> menu shows the bricks you&rsquo;ve started or that are assigned to you &mdash; a personal shortcut to pick up where you left off.</p>
</div>

<div class="be-col be-fr">
<h3>🧩 Trouver tes briques (My Bricks)</h3>

<p>Le menu <strong>My Bricks</strong> affiche les briques que tu as d&eacute;j&agrave; commenc&eacute;es ou qui te sont attribu&eacute;es. C&rsquo;est ton raccourci perso pour reprendre o&ugrave; tu en &eacute;tais.</p>
</div>
</div>
</section>
<!-- Slide 3 -->

<section class="be-slide" data-step="3">
<div class="be-cols">
<div class="be-col be-en">
<h3>📂 Explore by themes and bricks</h3>

<p>Pick a main <strong>theme</strong> at the top. On the left: <strong>topic &rarr; subtopic (optional) &rarr; bricks</strong>. Expand/collapse to explore.</p>
</div>

<div class="be-col be-fr">
<h3>📂 Explorer par th&egrave;mes et parcours</h3>

<p>En haut, choisis un <strong>th&egrave;me</strong>. &Agrave; gauche : <strong>topic &rarr; subtopic (parfois) &rarr; briques</strong>. D&eacute;plie/replie pour explorer facilement.</p>
</div>
</div>
</section>
<!-- Slide 4 -->

<section class="be-slide" data-step="4">
<div class="be-cols">
<div class="be-col be-en">
<h3>▶️ Start a brick</h3>

<p>Click a brick to open it in-page. The first time, steps unlock <strong>in order</strong>. Later, you can revisit freely.</p>
</div>

<div class="be-col be-fr">
<h3>▶️ Lancer une brique</h3>

<p>Clique sur une brique pour l&rsquo;ouvrir dans la page. La premi&egrave;re fois, les &eacute;tapes se d&eacute;bloquent <strong>dans l&rsquo;ordre</strong>. Ensuite, tu peux revenir librement.</p>
</div>
</div>
</section>
<!-- Slide 5 -->

<section class="be-slide" data-step="5">
<div class="be-cols">
<div class="be-col be-en">
<h3>📊 Track your progress</h3>

<p>Your progress is saved automatically (completed bricks). You can resume anytime.</p>
</div>

<div class="be-col be-fr">
<h3>📊 Suivre ta progression</h3>

<p>Ton avancement est enregistr&eacute; automatiquement (briques &ldquo;compl&eacute;t&eacute;es&rdquo;). Tu peux reprendre l&agrave; o&ugrave; tu t&rsquo;&eacute;tais arr&ecirc;t&eacute;.</p>
</div>
</div>
</section>
<!-- Slide 6 -->

<section class="be-slide" data-step="6">
<div class="be-cols">
<div class="be-col be-en">
<h3>🤝 Need help?</h3>

<p>Contact your teachers via the footer. Boost&rsquo;English evolves: in class, you may also contribute (feedback, activities).</p>
</div>

<div class="be-col be-fr">
<h3>🤝 Besoin d&rsquo;aide ?</h3>

<p>Contacte les enseignants via le footer. Boost&rsquo;English est vivant : en cours, tu pourras aussi contribuer (feedback, activit&eacute;s).</p>
</div>
</div>
</section>
</div>
<!-- Controls -->

<div class="be-guide__controls"><button aria-label="Previous" class="be-nav be-prev">&lsaquo;</button>

<div aria-label="Steps" class="be-dots" role="tablist">&nbsp;</div>
<button aria-label="Next" class="be-nav be-next">&rsaquo;</button></div>
</div>
</div>

<div id="boostMenus">&nbsp;</div>

<div id="lpMenuContainer">&nbsp;</div>

<div id="iframeMainContent"><iframe id="inlineFrameExample" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&amp;layer=mapnik" title="Inline Frame Example"></iframe></div>
</div>
<!--<button id="be-tools-btn" class="be-theme-btn" style="background:#263c6e">Chamilo tools</button>--><!-- Panneau latéral + backdrop -->

<aside aria-hidden="true" class="be-offcanvas" id="be-tools">
<div aria-label="Chamilo tools" aria-modal="true" class="be-offcanvas__panel" role="dialog"><button class="be-close" id="be-tools-close">✕</button>

<div id="be-tools-host"><!-- on déplacera #course_tools ici --></div>
</div>

<div class="be-offcanvas__backdrop">&nbsp;</div>
</aside>
<script>

    var urlPrefix = "https://echamilo.univ-grenoble-alpes.fr/";
    var myBricksLoaded = false;
    let currentLpId = null;
    let previousLpId = null;

    $(document).ready(
        function ()
        {
            document.getElementById("inlineFrameExample").style.display = "none";
            $("#myBricks").html("<img src='"+urlPrefix+"main/img/progress_bar.gif' alt='Loading...'>");
        }
    );

    function hideAccueil(display) {
        const accueil = document.getElementById("accueil");
        if (display) {
            if (accueil) accueil.style.display = "block";
        } else {
            if (accueil) accueil.style.display = "none";
        }
    }


    function displayMyBricks(ev) {
        // 1) empêcher que le clic sur le bouton remonte jusqu'au document
        if (ev) ev.stopPropagation();

        const panel = document.getElementById("myBricks");
        const backdrop = document.getElementById("myBricksToggle");

        // toggle
        panel.classList.toggle("active");
        if (panel.classList.contains("active")) {
            positionMyBricks();          // <-- place le menu sous le lien
            if (typeof getStudentLpList === 'function') getStudentLpList();
        }
    }



function positionMyBricks() {
  const btn   = document.getElementById('myBricksToggle');
  const panel = document.getElementById('myBricks');
  if (!btn || !panel) return;

  const r = btn.getBoundingClientRect(); // coords dans la fenêtre

  // largeur réelle du panneau (si caché, on force un calcul)
  const wasHidden = !panel.classList.contains('active');
  if (wasHidden) {
    panel.style.visibility = 'hidden';
    panel.classList.add('active');         // activer pour mesurer offsetWidth
  }
  const pw = panel.offsetWidth || 280;
  if (wasHidden) {
    panel.classList.remove('active');
    panel.style.visibility = '';
  }

  // position sous le bouton (+8px de marge)
  let left = r.left - 40;
  let top  = r.bottom + 50;

  // éviter que ça dépasse à droite
  const margin = 16;
  const maxLeft = window.innerWidth - pw - margin;
  if (left > maxLeft) left = Math.max(margin, maxLeft);

  panel.style.left = Math.round(left) + 'px';
  panel.style.top  = Math.round(top)  + 'px';
}



    /**
     * ajax list of lp already open by student
     * ajax call => return list of lp id student already open in this course
     * api_get_student_id
     * api_get_course
     * [ids]
     */
    function getStudentLpList() {
        // local test
        // var html = getHtmlLpLinks([1298,1301,1302]);
        // $("#myBricks").html(html);
        // return;
        // end of local test

        $.ajax({
            url : "/main/inc/ajax/lp.ajax.php?a=get_student_course_lp_list",
            type: 'POST',
            dataType : 'json',
            async: true,
            success: function(datas) {
                var html = "";
                if (datas.length > 0) {
                    html = getHtmlLpLinks2(datas);
                }
                $("#myBricks").html(html);
            },
            error: function () {
                alert('Ajax error getStudentLpList. Please contact administrator.')
            }
        });
    }

    function getBrickPath(lpId){
  for (let i=0;i<parcours.length;i++){
    const p = parcours[i];
    if (String(p.lp_id) === String(lpId)){
      return {
        theme : themes[p.theme],
        topic : topic[p.topic],
        subtopic : p.subtopic !== null ? subtopic[p.subtopic] : null
      };
    }
  }
  return null;
}


    // ---- helpers
function norm(s){
  return (s||"").toString().toLowerCase()
    .normalize("NFD").replace(/[\u0300-\u036f]/g,"")
    .replace(/\s+/g," ").trim();
}
function debounce(fn,ms){ let t; return (...a)=>{ clearTimeout(t); t=setTimeout(()=>fn(...a),ms); }; }

// ---- index léger (noms + tags)
const beSearchIndex = (window.parcours||[]).map(p=>({
  lp_id: p.lp_id,
  name: p.nom,
  hay: norm([p.nom, ...(p.tags||[])].join(" "))
}));

const $input = $('#searchField');
const $box   = $('#be-search-results');

function renderResults(items){
  if (!items.length){
    $box.html('<div class="item">No result</div>').show();
    return;
  }
  const html = items.slice(0,20).map(it =>
    `<div class="item" data-lp="${it.lp_id}">${it.name}</div>`
  ).join('');
  $box.html(html).show();

  // click -> open
  $box.find('.item').on('click', function(){
    const lp = this.getAttribute('data-lp');
    $box.hide(); $input.blur();
    if (typeof openBrickFromMyBricks === 'function') openBrickFromMyBricks(lp);
  });
}

const onSearch = debounce(function(){
  const q = norm($input.val());
  if (!q){ $box.hide(); return; }
  const terms = q.split(' ');
  const found = beSearchIndex.filter(it => terms.every(t => it.hay.includes(t)));
  renderResults(found);
}, 120);

// ---- wiring
$(document).ready(function(){
  // recherche en live
  $input.on('input', onSearch);

  // navigation clavier
  $input.on('keydown', function(e){
    const $items = $box.find('.item');
    if (!$items.length) return;
    let $cur = $items.filter('.active');
    let i = $items.index($cur);

    if (e.key === 'ArrowDown'){ e.preventDefault(); $cur.removeClass('active'); i=Math.min(i+1, $items.length-1); $items.eq(i).addClass('active'); }
    if (e.key === 'ArrowUp'){   e.preventDefault(); $cur.removeClass('active'); i=Math.max(i-1, 0);            $items.eq(i).addClass('active'); }
    if (e.key === 'Enter'){     e.preventDefault(); ($cur[0]||$items[0]).click(); }
    if (e.key === 'Escape'){    e.preventDefault(); $box.hide(); }
  });

  // clic dehors -> fermer
  $(document).on('click', function(e){
    if (!$(e.target).closest('#searchWrapper').length) $box.hide();
  });

  // focus -> select (tu l'avais déjà via onfocus)
});


    function slugify(str) {
    return str.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") // enlève les accents
              .replace(/\s+/g, '-')       // remplace les espaces par des tirets
              .replace(/[^\w\-]+/g, '')   // supprime les caractères spéciaux
              .replace(/\-\-+/g, '-')     // remplace les tirets doubles
              .replace(/^-+/, '')         // supprime les tirets en début
              .replace(/-+$/, '');        // supprime les tirets en fin
    }

    function displayTree3(tree) {
        const container = document.getElementById("boostMenus");
        container.innerHTML = "";

        Object.entries(tree).forEach(([themeName, topics]) => {
            let html = "";
            html += "<div class='themes'>";
            html += `   <div class='themes_title'>${themeName}</div>`;
            html += "   <div class='topics'>";

            const themeSlug = slugify(themeName);

            Object.entries(topics).forEach(([topicName, substructure]) => {
                const topicSlug = slugify(topicName);
                const toggleId = `subtopics-${themeSlug}-${topicSlug}`;

                html += "<div class='topic'>";
                html += `<div class='topic_title click' data-toggle='${toggleId}'>${topicName}<span class='topic_arrow'>&or;</span></div>`;
                html += `<div class='subtopics' id='${toggleId}'>`;

                // Bricks sans subtopic
                if (substructure._bricks) {
                    substructure._bricks.forEach(brick => {
                        const brickId = `brick-${brick.lp_id}`;
                        html += `<div class='subtopic_title click brick' id='${brickId}' onclick='showInIframe("${getLpUrl(brick.lp_id)}")'>`;
                        html += `${brick.nom}<span class='checkOk' style='display:none'></span>`;
                        html += `<div class='lp-subitems' id='lp-subitems-${brick.lp_id}'></div>`;
                        html += "</div>";
                    });
                }

                // Subtopics avec toggle
                Object.entries(substructure).forEach(([subtopicName, bricks]) => {
                    if (subtopicName === "_bricks") return;

                    const subtopicSlug = slugify(subtopicName);
                    const subtopicId = `bricks-${themeSlug}-${topicSlug}-${subtopicSlug}`;

                    html += `<div class='subtopic_title click' data-subtopic-id='${subtopicId}'>`;
                    html += `${subtopicName}<span class='checkOk' style='display:none'></span>`;
                    html += "</div>";

                    html += `<div class='subtopic_bricks' id='${subtopicId}' style='display:none; padding-left: 1em;'>`;
                    bricks.forEach(brick => {
                        const brickId = `brick-${brick.lp_id}`;
                        html += `<div class='brick-link click brick' id='${brickId}' onclick='showInIframe("${getLpUrl(brick.lp_id)}")'>`;
                        html += `${brick.nom}`;
                        html += `<div class='lp-subitems' id='lp-subitems-${brick.lp_id}'></div>`;
                        html += `</div>`;
                    });
                    html += "</div>";
                });

                html += "   </div></div>"; // close subtopics + topic
            });

            html += "   </div></div>"; // close topics + themes
            container.innerHTML += html;
        });

        // Gestion des toggles des subtopics
        document.querySelectorAll('.subtopic_title[data-subtopic-id]').forEach(el => {
            el.addEventListener('click', () => {
                const targetId = el.dataset.subtopicId;
                const brickList = document.getElementById(targetId);

                const isOpen = brickList.style.display === 'block';

                document.querySelectorAll('.subtopic_bricks').forEach(div => {
                    div.style.display = 'none';
                });

                brickList.style.display = isOpen ? 'none' : 'block';
            });
        });
    }


    
    function hideBrickFoundArea() {
        $("#bricksFound").hide(200);
    }


    function showInIframe(lpUrl) {
        hideAccueil(0);
        const iframe = document.getElementById("inlineFrameExample");
        iframe.src = lpUrl;
        iframe.style.display = "block";

        // 🔑 Stocker lp_id pour l'utiliser plus tard
        previousLpId = currentLpId;
        currentLpId = new URL(lpUrl).searchParams.get("lp_id");
        
        //injectCssToIframe();
        document.getElementById("inlineFrameExample").onload = handleIframeLoad;
        //document.getElementById("inlineFrameExample").onload = injectCssToIframe;
    }

    function handleIframeLoad() {
        injectCssToIframe();
        moveLpMenuToMainPage();
    }


    function quickSwitchItemCustom(toItemId, cId = 0, lpId = 0, userId = 0, sessionId = 0, focus = 0) {
        const $ = window.jQuery; // sécurité, au cas où
        const iframe = document.getElementById('inlineFrameExample');
        const iframeSrc = document.querySelector('#atoc_' + toItemId)?.getAttribute('data-src');
        const currentItemIdInput = document.querySelector('#currentItemId');
        const ajaxUrl = document.querySelector('#ajaxUrl')?.value;
        const currentItemId = currentItemIdInput?.value || 0;

        if (!iframe || !iframeSrc || !ajaxUrl) {
            console.warn("Impossible de lancer quickSwitchItemCustom : iframe ou lien ou ajax manquant");
            return;
        }

        document.querySelector('#toItemId').value = toItemId;

        const fromToc = document.getElementById('toc_' + currentItemId);
        const toToc = document.getElementById('toc_' + toItemId);

        const toCompleted = toToc?.classList.contains('scorm_completed');
        const fromCompleted = fromToc?.classList.contains('scorm_completed');

        // Visuellement on peut afficher un loader par exemple :
        if (toToc) toToc.classList.add('loading');

        fetch(ajaxUrl, {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: new URLSearchParams({
            a: 'switch_lp_item_to',
            to_item_id: toItemId,
            from_item_id: currentItemId,
            to_completed: toCompleted,
            from_completed: fromCompleted,
            c_id: cId || document.querySelector('#cId')?.value,
            lp_id: lpId || document.querySelector('#lpId')?.value,
            user_id: userId || document.querySelector('#userId')?.value,
            session_id: sessionId || document.querySelector('#sessionId')?.value,
            time: Date.now() // tu peux utiliser ton propre système de temps si besoin
            })
        })
        .then(r => r.json())
        .then(data => {
            if (data.error) {
            alert(data.error);
            return;
            }

            // Mise à jour des classes
            if (fromToc) {
            fromToc.classList.remove('scorm_highlight');
            if (data.status_from === 'completed') {
                fromToc.classList.remove('scorm_not_attempted');
                fromToc.classList.add('scorm_completed');
            }
            }

            if (toToc) {
            toToc.classList.add('scorm_highlight');
            if (data.status_to === 'completed') {
                setTimeout(() => {
                toToc.classList.remove('scorm_not_attempted');
                toToc.classList.add('scorm_completed');
                updateProgressBarCustom();
                }, 30000); // autoCompleteTime
            }
            }

            // Mise à jour de l’iframe externe
            iframe.src = iframeSrc;

            // Mise à jour de l’état courant
            currentItemIdInput.value = toItemId;

            // Scroll dans le menu
            if (focus && toToc) toToc.scrollIntoView({ behavior: 'smooth', block: 'center' });

            updateProgressBarCustom();
        })
        .catch(error => {
            console.error("Erreur AJAX quickSwitchItemCustom :", error);
        });
    }

    function updateProgressBarCustom() {
        const completed = document.querySelectorAll('.scorm_item_normal.scorm_completed').length;
        const total = document.querySelectorAll('.scorm_item_normal').length;
        const percent = total > 0 ? Math.round((completed / total) * 100) : 0;
        const bar = document.getElementById('progress_bar_value');
        if (bar) {
            bar.style.width = percent + '%';
            bar.setAttribute('aria-valuenow', percent);
            bar.textContent = percent + '%';
        }
    }


    function loadBrickInDiv(lpId) {
        const url = `https://echamilo.univ-grenoble-alpes.fr/main/lp_quick_view/lp_quick_view.php?cidReq=BOOSTENGLISH&id_session=0&gidReq=0&gradebook=0&origin=&lp_id=${lpId}`;

        fetch(url)
            .then(res => res.text())
            .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, "text/html");

            // 🔍 Tu peux cibler n'importe quelle partie
            const lpContent = doc.querySelector(".content_section") || doc.body;
            const lpNav = doc.querySelector(".lp_navigation");
            console.log(lpNav);

            const container = document.getElementById("bricksFound");
            container.innerHTML = "";

            // 👉 Insertion personnalisée
            if (lpNav) container.appendChild(lpNav.cloneNode(true));
            if (lpContent) container.appendChild(lpContent.cloneNode(true));
            })
            .catch(err => {
            console.error("Erreur lors du chargement :", err);
            document.getElementById("bricksFound").innerHTML = "<p>Erreur de chargement de la brique.</p>";
        });
    }

    function injectCssToIframe() {
        const iframe = document.getElementById("inlineFrameExample");
        const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

        const style = iframeDoc.createElement("style");
        style.innerHTML = `
            /* Cacher le menu gauche */
            #learning_path_left_zone,
            .sidebar-scorm {
            display: none !important;
            }

            /* Forcer la colonne de droite à prendre toute la place */
            #learning_path_right_zone {
            left: 0 !important;
            width: 100% !important;
            }

            /* Forcer le conteneur global à s'afficher normalement */
            #learning_path_main {
            display: flex !important;
            flex-direction: column !important;
            }

            /* Nettoyer les paddings/marges de la colonne de droite */
            #learning_path_right_zone .lp-view-zone-container {
            padding: 0 !important;
            }

            /* Étendre les contenus à 100% */
            .lp-view-tabs,
            .tab-content,
            .tab-pane,
            #wrapper-iframe,
            iframe#content_id {
            width: 100% !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            }

            /* Masquer la barre de navigation */
            #lp_navigation_elem,
            .navegation-bar {
            display: none !important;
            }

            /* Ajustement du body au besoin */
            body {
            background: white !important;
            overflow: hidden !important;
            }
        `;
        iframeDoc.head.appendChild(style);
    }


    function moveLpMenuToMainPage() {
        const iframe = document.getElementById("inlineFrameExample");
        const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

        // 1. Récupérer le menu
        const lpMenu = iframeDoc.querySelector("#learning_path_toc");

        if (!lpMenu) {
            console.warn("❌ Menu LP introuvable dans l'iframe");
            return;
        }

        // 1bis. Supprimer tous les anciens sous-menus LP
        //document.querySelectorAll(".lp-subitems").forEach(e => e.remove());
        // 🔁 Nettoyer uniquement l’ancien conteneur si défini
        if (previousLpId) {
            const previousTarget = document.getElementById("lp-subitems-" + previousLpId);
            if (previousTarget) {
                previousTarget.innerHTML = ""; // Nettoyage
            }
        }

        // 2. Cloner le menu pour éviter de le couper de son contexte interne
        const menuClone = lpMenu.cloneNode(true);
        // 🔥 Supprimer le titre h1.scorm-title si présent
        const title = menuClone.querySelector('h1.scorm-title');
        if (title) title.remove();
        //menuClone.id = "lp-menu-cloned"; // Nouveau nom unique


        // 3. Cibler la div où tu veux afficher le menu dans ta page (à toi de créer ce conteneur)
        const target = document.getElementById(`lp-subitems-${currentLpId}`);
        //const target = document.getElementById("lpMenuContainer");

        if (!target) {
            console.warn("❌ Pas de conteneur dans la page principale pour afficher le menu LP !");
            return;
        }

        // 4. Vider et injecter
        target.innerHTML = ""; // Nettoyage
        target.appendChild(menuClone);

        console.log("✅ Menu LP injecté dans la page principale !");


        // 5. Mise à jour dynamique des liens dans le menu injecté
        menuClone.querySelectorAll('a.items-list').forEach(link => {
            const onclickAttr = link.getAttribute('onclick');
            if (onclickAttr && onclickAttr.startsWith('quickSwitchItem(')) {
                // Extraire les arguments de quickSwitchItem(...)
                const match = onclickAttr.match(/quickSwitchItem\(([^)]+)\)/);
                if (match) {
                    const args = match[1].split(',').map(s => s.trim());
                    const toItemId = args[0];

                    // Remplacer le handler onclick
                    link.removeAttribute('onclick');
                    link.addEventListener('click', () => {
                        quickSwitchItemCustom(...args);
                    });

                    // Bonus : pointer aussi l’iframe avec le bon contenu
                    const dataSrc = iframeDoc.getElementById('atoc_' + toItemId)?.getAttribute('data-src');
                    if (dataSrc) {
                        const atoc = document.getElementById('atoc_' + toItemId);
                        if (atoc) {
                            atoc.setAttribute('data-src', dataSrc);
                        }
                    }
                }
            }
        });


        
    }





    function getHtmlLpLinks(lpIdList) {
        var html= "";
        for (var i = 0; i < lpIdList.length; i++) {
            var lpId = lpIdList[i];
            var lpName = getLpName(lpId);
            var lpUrl = getLpUrl(lpId);

            if (lpId !== "") {
                html += "<div class='lpName'>";
                html += "<a href='#' class='lp_links' onclick='showInIframe(\"" + lpUrl + "\"); return false;'>" + lpName + "</a>";
                html += "</div>";
            }
        }
        return html;
    }

    //  Construit le menu de MyBricks
    function getHtmlLpLinks2(lpIdList) {
        var html= "";
        for (var i = 0; i < lpIdList.length; i++) {
            var lpId = lpIdList[i];
            
            var lpName = getLpName(lpId);
            if (lpId !== "") {
            html += "<div class='lpName'>";
            html += "<a href='#' class='lp_links' onclick='openBrickFromMyBricks(" + lpId + "); return false;'>" + lpName + "</a>";
            html += "</div>";
            }
        }
        return html;
    }

    function openBrickFromMyBricks(lpId){
  // 1) Ouvrir la colonne gauche existante
  const boostMenus = document.getElementById("boostMenus");
  if (boostMenus) boostMenus.style.display = "flex";
  hideAccueil(0);

  // 2) Ouvrir les bons panneaux et centrer la brique
  const brickEl = document.getElementById('brick-' + lpId);
  if (brickEl) {
    // Ouvrir le sous-topic contenant la brique (si présent)
    const sub = brickEl.closest('.subtopic_bricks');
    if (sub && sub.style.display === 'none') {
      sub.style.display = 'block';
      const subToggle = document.querySelector(`.subtopic_title[data-subtopic-id="${sub.id}"]`);
      subToggle?.classList.add('open');
    }

    // Ouvrir le topic parent
    const topicToggle = brickEl.closest('.topic')?.querySelector('.topic_title');
    if (topicToggle) {
      const targetId  = topicToggle.getAttribute('data-toggle');
      const subtopics = document.getElementById(targetId);
      const arrow     = topicToggle.querySelector('.topic_arrow');

      document.querySelectorAll('.subtopics').forEach(s => {
        if (s.id !== targetId) s.classList.remove('open');
      });
      document.querySelectorAll('.topic_arrow').forEach(a => a.classList.remove('up'));

      subtopics?.classList.add('open');
      arrow?.classList.add('up');
    }

    setTimeout(() => brickEl.scrollIntoView({behavior:'smooth', block:'center'}), 50);
  }

  // 2bis) Déterminer automatiquement le thème
  let selectedTheme = null;

  // a) depuis le DOM (prioritaire)
  const themeEl = brickEl ? brickEl.closest('.themes') : null;
  if (themeEl) {
    selectedTheme = themeEl.querySelector('.themes_title')?.textContent.trim();
  }

  // b) fallback depuis les données si nécessaire
  if (!selectedTheme && typeof parcours !== 'undefined') {
    for (let i=0;i<parcours.length;i++){
      if (String(parcours[i].lp_id) === String(lpId)) {
        selectedTheme = themes[parcours[i].theme];
        break;
      }
    }
  }

  // Filtrer l’affichage des thèmes si on a pu déterminer le bon
  if (selectedTheme) {
    document.querySelectorAll(".themes").forEach(t => {
      const title = t.querySelector(".themes_title")?.textContent.trim();
      t.style.display = (title === selectedTheme) ? "block" : "none";
    });
  }

  // 3) Charger la brique dans l’iframe
  showInIframe(getLpUrl(lpId));

  // 4) Fermer le dropdown My bricks
  document.getElementById("myBricks")?.classList.remove("active");
}


    function getHtmlLpLinksInFrame(lpIdList) {
        var html= "";
        for (var i = 0; i < lpIdList.length; i++) {
            var lpId = lpIdList[i];
            var lpName = getLpName(lpId);
            var lpUrl = getLpUrl(lpId);

            if (lpId !== "") {
                showInIframe(lpUrl);
            }
        }
        return html;
    }

    // return name of lpId according to array parcours
    function getLpName(lpId) {
        var i = 0;
        while (i < parcours.length && i < 9999) {
            if (parcours[i]['lp_id'] == lpId) {
                return parcours[i]['nom'];
            }
            i++;
        }
        return "";
    }

    // return URL of lpId
    function getLpUrl(lpId) {
        return urlPrefix+"main/lp/lp_controller.php?cidReq=BOOSTENGLISH&id_session=0&gidReq=0&gradebook=0&origin=&action=view&isStudentView=true&lp_id="+lpId;
    }

    
    function buildNamedTreeFromParcours(parcours, themes, topic, subtopic) {
        const tree = {};

        parcours.forEach(p => {
            const themeName = themes[p.theme];
            const topicName = topic[p.topic];
            const subtopicName = p.subtopic !== null ? subtopic[p.subtopic] : null;

            if (!tree[themeName]) {
                tree[themeName] = {};
            }

            if (!tree[themeName][topicName]) {
                tree[themeName][topicName] = {};
            }

            if (subtopicName) {
                if (!tree[themeName][topicName][subtopicName]) {
                    tree[themeName][topicName][subtopicName] = [];
                }
                tree[themeName][topicName][subtopicName].push({
                    nom: p.nom,
                    lp_id: p.lp_id
                });
            } else {
                if (!tree[themeName][topicName]._bricks) {
                    tree[themeName][topicName]._bricks = [];
                }
                tree[themeName][topicName]._bricks.push({
                    nom: p.nom,
                    lp_id: p.lp_id
                });
            }
        });

        return tree;
    }

    var prettyTree = buildNamedTreeFromParcours(parcours, themes, topic, subtopic);
    displayTree3(prettyTree);
    document.getElementById("boostMenus").style.display = "none";

    // Fonction pour filtrer les thèmes affichés
    document.querySelectorAll(".theme-btn[data-theme]").forEach(btn => {
        btn.addEventListener("click", () => {
            hideAccueil(0);
            const selectedTheme = btn.getAttribute("data-theme");

            // Toggle active state
            document.querySelectorAll(".theme-btn").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            document.getElementById("boostMenus").style.display = "flex";

            // Affiche uniquement le thème correspondant
            document.querySelectorAll(".themes").forEach(theme => {
                if (theme.querySelector(".themes_title").textContent.trim() === selectedTheme) {
                    theme.style.display = "block";
                } else {
                    theme.style.display = "none";
                }
            });
        });
    });

    document.querySelectorAll('.topic_title').forEach(el => {
        el.addEventListener('click', () => {
            const targetId = el.dataset.toggle;

            // Fermer tous les autres sous-menus
            document.querySelectorAll('.subtopics').forEach(sub => {
                if (sub.id !== targetId) {
                    sub.classList.remove('open');
                }
            });

            // Réinitialiser les flèches
            document.querySelectorAll('.topic_arrow').forEach(arrow => {
                if (arrow !== el.querySelector('.topic_arrow')) {
                    arrow.classList.remove('up');
                }
            });

            const subtopics = document.getElementById(targetId);
            const arrow = el.querySelector('.topic_arrow');

            const isOpen = subtopics.classList.contains('open');

            // Fermer tous
            document.querySelectorAll('.subtopics').forEach(sub => sub.classList.remove('open'));
            document.querySelectorAll('.topic_arrow').forEach(arrow => arrow.classList.remove('up'));

            if (!isOpen) {
                subtopics.classList.add('open');
                arrow.classList.add('up');
            }
        });
    });

    //console.log(prettyTree);
    //console.log(JSON.stringify(prettyTree, null, 2));


    // Fermer le menu "My bricks" si clic en dehors
    // 2) clic à l'extérieur => fermer
    // Clic dehors dans le document
    document.addEventListener("click", (e) => {
        const panel    = document.getElementById("myBricks");
        const toggle   = document.getElementById("myBricksToggle");
        if (!panel?.classList.contains("active")) return;

        if (panel.contains(e.target) || toggle?.contains(e.target)) return;

        panel.classList.remove("active");
    });

    // Clic sur le backdrop
    document.getElementById("myBricksBackdrop")?.addEventListener("click", () => {
        document.getElementById("myBricks")?.classList.remove("active");
    });

    // 3) bonus: Échap pour fermer
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            document.getElementById("myBricks")?.classList.remove("active");
        }
    });




document.addEventListener("DOMContentLoaded", function () {
    // Trouver la colonne centrale du footer
    const footerColCenter = document.querySelector(
        "footer .sub-footer .row .col-md-4:nth-child(2)"
    );

    if (!footerColCenter) {
        console.warn("Impossible de trouver la colonne centrale du footer.");
        return;
    }

    // Créer le lien Chamilo tools
    const link = document.createElement('a');
    link.id = 'be-tools-btn';
    link.href = '#';
    link.textContent = 'Chamilo tools';
    link.className = 'be-theme-btn'; // tu gardes ton style si besoin

    // Insérer le bouton dans le footer
    footerColCenter.appendChild(link);
});




    (function(){
  const sheet   = document.getElementById('be-tools');
  const closeBt = document.getElementById('be-tools-close');
  const host    = document.getElementById('be-tools-host');

  function buildToolsPanel(){
    if (!host) return;
    host.innerHTML = '';

    const sections = [
      { sel: '.course-tools-author',         title: 'Authoring' },
      { sel: '.course-tools-interaction',    title: 'Interaction' },
      { sel: '.course-tools-administration', title: 'Administration' },
      { sel: '.course-tool',                 title: 'Student tools' },
    ];

    let found = 0;
    sections.forEach(({sel, title}) => {
      const nodes = document.querySelectorAll(sel);
      if (nodes.length === 0) return;

      const wrap = document.createElement('section');
      const h = document.createElement('h3');
      h.textContent = title;
      h.style.margin = '0 0 .5rem 0';
      wrap.appendChild(h);

      nodes.forEach(src => {
        const clone = src.cloneNode(true);
        clone.style.removeProperty('display');
        clone.querySelectorAll('[style]').forEach(n => n.style.removeProperty('display'));
        wrap.appendChild(clone);
      });

      host.appendChild(wrap);
      found++;
    });
    return found > 0;
  }

  function openPanel(){
    if (!buildToolsPanel()){
      setTimeout(buildToolsPanel, 150);
    }
    sheet.classList.add('is-open-be');
  }
  function closePanel(){
    sheet.classList.remove('is-open-be');
  }

  // 🔹 DÉLÉGATION : capte les clics sur le bouton même si inséré plus tard
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('#be-tools-btn');
    if (trigger) {
      e.preventDefault();
      openPanel();
    }
  });

  closeBt?.addEventListener('click', closePanel);
  sheet?.querySelector('.be-offcanvas__backdrop')?.addEventListener('click', closePanel);
  document.addEventListener('keydown', (e)=>{ if(e.key==='Escape') closePanel(); });
})();


(function(){
  const guide = document.getElementById('be-guide');
  if (!guide) return;

  const slides = Array.from(guide.querySelectorAll('.be-slide'));
  const dotsWrap = guide.querySelector('.be-dots');
  const prevBtn = guide.querySelector('.be-prev');
  const nextBtn = guide.querySelector('.be-next');

  // Crée les dots
  slides.forEach((_, i) => {
    const b = document.createElement('button');
    b.className = 'be-dot';
    b.type = 'button';
    b.setAttribute('role', 'tab');
    b.setAttribute('aria-label', 'Step ' + (i+1));
    b.addEventListener('click', () => go(i));
    dotsWrap.appendChild(b);
  });

  let idx = 0;
  const total = slides.length;

  function render(){
    slides.forEach((s,i) => s.classList.toggle('is-active', i===idx));
    dotsWrap.querySelectorAll('.be-dot').forEach((d,i) => {
      d.setAttribute('aria-selected', i===idx ? 'true' : 'false');
    });
    // focus management accessible : mettre le focus sur le titre de la slide
    const h = slides[idx].querySelector('h3');
    if (h) h.setAttribute('tabindex', '-1'), h.focus({preventScroll:true});
    // mémoriser la dernière étape
    try{ localStorage.setItem('beGuideIdx', String(idx)); }catch(e){}
  }

  function go(i){
    idx = Math.max(0, Math.min(total-1, i));
    render();
  }

  // boutons
  prevBtn.addEventListener('click', () => go(idx-1));
  nextBtn.addEventListener('click', () => go(idx+1));

  // clavier
  guide.addEventListener('keydown', (e)=>{
    if (e.key === 'ArrowRight') go(idx+1);
    if (e.key === 'ArrowLeft')  go(idx-1);
  });

  // swipe (simple)
  let sx=null; guide.addEventListener('touchstart',e=>{ sx=e.touches[0].clientX; });
  guide.addEventListener('touchend',e=>{ if(sx==null) return; const dx=e.changedTouches[0].clientX - sx; if (dx<-40) go(idx+1); if (dx>40) go(idx-1); sx=null; });

  // init à la dernière étape consultée
  const saved = parseInt(localStorage.getItem('beGuideIdx')||'0',10);
  idx = isNaN(saved)?0:Math.max(0, Math.min(total-1, saved));
  render();
})();




</script></div>
