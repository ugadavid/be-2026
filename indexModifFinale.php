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
  z-index: 1000;
}

/* Quand le menu est visible */
#myBricks.active {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}


</style>
<div id="boostWrapper">
<div id="boostHeader"><a href="https://echamilo.univ-grenoble-alpes.fr/courses/BOOSTENGLISH/index.php?id_session=0"><img alt="" height="50px" src="https://boost-english.fr/images/logo.png" width="45px" /></a>
<p class="site-name">&nbsp;Boost&#39;English</p>

<div class="theme-filters" id="themeFilters"><button class="theme-btn" data-theme="Everyday communication">Everyday<br />
<span class="subtitle" data-theme="Everyday communication">Communication</span></button><button class="theme-btn" data-theme="Professional Communication">Professional<br />
<span class="subtitle" data-theme="Professional Communication">Communication</span></button><button class="theme-btn" data-theme="Specialist Communication">Specialist<br />
<span class="subtitle" data-theme="Specialist Communication">Communication</span></button><button class="theme-btn" data-theme="Learning focus">Learning<br />
<span class="subtitle" data-theme="Learning focus">Focus</span></button><input class="searchField" id="searchField" onfocus="$(this).select()" size="20" type="text" value="Type a keyword" />
<div>&nbsp;
<div class="titre1 inline_block"><span id="myBricksToggle" class="click" onclick="displayMyBricks()">My bricks</span></div>

<div id="myBricksArrow">&or;</div>
</div>
</div>
</div>

<div id="myBricks">&nbsp;</div>

<div class="right_block">
<div id="accueil">
<h1 class="titre1">Welcome to Boost&#39;English!</h1>

<p>A platform designed to help you work efficiently on your English. Click <strong><u><a href="https://videos.univ-grenoble-alpes.fr/video/4867-boostenglish/" target="_blank">here</a></u></strong> &nbsp;to see how it&nbsp;works. Explore and enjoy!</p>
<iframe allowfullscreen="" height="454" src="https://videos.univ-grenoble-alpes.fr/video/4867-boostenglish/?is_iframe=true" style="padding: 0; margin: 0; border:0" title="Boost'English" width="800"></iframe></div>
</div>

<div id="boostMenus">&nbsp;</div>

<div id="lpMenuContainer">&nbsp;</div>

<div id="iframeMainContent">
<p class="titre1" id="bricks_found">Bricks found</p>
<iframe id="inlineFrameExample" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&amp;layer=mapnik" title="Inline Frame Example"></iframe>

<div id="bricksFound" style="display:none;">&nbsp;</div>
</div>
</div>
<script>

    var urlPrefix = "https://echamilo.univ-grenoble-alpes.fr/";
    var myBricksLoaded = false;
    let currentLpId = null;
    let previousLpId = null;

    $(document).ready(
        function ()
        {
            document.getElementById("inlineFrameExample").style.display = "none";
            document.getElementById("bricks_found").style.display = "none";
            
            $("#myBricks").html("<img src='"+urlPrefix+"main/img/progress_bar.gif' alt='Loading...'>");
            $('#searchField').keypress(
                function(event){
                    var keycode = (event.keyCode ? event.keyCode : event.which);
                    if (keycode == '13'){
                        searchKeyword();
                    }
                    // Stop the event from propogation to other handlers
                    // If this line will be removed, then keypress event handler attached
                    // at document level will also be triggered
                    event.stopPropagation();
                });
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

    //  ICIETLA
    function displayMyBricks() {
        const panel = document.getElementById("myBricks");
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


    function searchKeyword() {
        hideAccueil(0);
        hideBrickFoundArea();
        document.getElementById("inlineFrameExample").style.display = "none";
        document.getElementById("bricks_found").style.display = "block";

        var word = $("#searchField").val().trim().toLowerCase();
        var results = [];

        for (var i=0; i < parcours.length; i++) {
            var tags = parcours[i]['tags'];
            for (var j = 0; j < tags.length; j++) {
                if (tags[j].trim().toLowerCase() === word) {
                    results.push(parcours[i]['lp_id']);
                }
            }
        }

        var html = getHtmlLpLinks(results);
        if (html === "") {
            html = "Keyword '"+word+"' not found";
        }

        $("#bricksFound").html(html);
        $("#bricksFound").show(200);

    }


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
        console.log('showInIframe('+lpUrl+')');
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

    //  ICIETLA ADD
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


    //  ICIETLA ADD
    function openBrickFromMyBricks(lpId){
        // 1) Ouvrir la colonne gauche existante
        const boostMenus = document.getElementById("boostMenus");
        if (boostMenus) {
            boostMenus.style.display = "flex";   // tu utilises déjà "flex" ailleurs
        }
        hideAccueil(0);                        // tu le fais déjà quand on navigue

        // 2) Si la brique existe dans l’arbre, ouvrir les bons panneaux et la surligner
        const brickEl = document.getElementById('brick-' + lpId);
        if (brickEl) {
            // ouvrir le sous-topic qui contient la brique
            const sub = brickEl.closest('.subtopic_bricks');
            if (sub && sub.style.display === 'none') {
            sub.style.display = 'block';
            const subToggle = document.querySelector(`.subtopic_title[data-subtopic-id="${sub.id}"]`);
            subToggle?.classList.add('open');
            }
            // ouvrir le topic parent (même logique que ton listener .topic_title)
            const topicToggle = brickEl.closest('.topic')?.querySelector('.topic_title');
            if (topicToggle) {
            const targetId = topicToggle.getAttribute('data-toggle');
            const subtopics = document.getElementById(targetId);
            const arrow = topicToggle.querySelector('.topic_arrow');
            document.querySelectorAll('.subtopics').forEach(s => { if (s.id !== targetId) s.classList.remove('open'); });
            document.querySelectorAll('.topic_arrow').forEach(a => a.classList.remove('up'));
            subtopics?.classList.add('open');
            arrow?.classList.add('up');
            }
            // focus doux sur la brique
            setTimeout(() => brickEl.scrollIntoView({behavior:'smooth', block:'center'}), 50);
        }

        // 3) Charger la brique dans l’iframe (ton flux normal)
        showInIframe(getLpUrl(lpId));

        // 4) Fermer le dropdown My bricks (optionnel, plus propre)
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

    //  ICIETLA
    var prettyTree = buildNamedTreeFromParcours(parcours, themes, topic, subtopic);
    displayTree3(prettyTree);
    document.getElementById("boostMenus").style.display = "none";

    // Fonction pour filtrer les thèmes affichés
    document.querySelectorAll(".theme-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            hideAccueil(0);
            const selectedTheme = btn.getAttribute("data-theme");

            // Toggle active state
            document.querySelectorAll(".theme-btn").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            document.getElementById("boostMenus").style.display = "flex";

            // Affiche uniquement le thème correspondant
            ICIETLA
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
</script>