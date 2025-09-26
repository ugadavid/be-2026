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
    document.querySelectorAll(".theme-btn").forEach(btn => {
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









    (function(){
  const btn     = document.getElementById('be-tools-btn');
  const sheet   = document.getElementById('be-tools');
  const closeBt = document.getElementById('be-tools-close');
  const host    = document.getElementById('be-tools-host');

  // construit le panneau quand les blocs sont présents
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
        // enlève d’éventuels display inline hérités
        clone.style.removeProperty('display');
        clone.querySelectorAll('[style]').forEach(n => n.style.removeProperty('display'));
        wrap.appendChild(clone);
      });

      host.appendChild(wrap);
      found++;
    });
    return found > 0;
  }

  // ouvre/ferme
  function openPanel(){
    // si les blocs ne sont pas encore au DOM (lazy), on réessaie un court instant
    if (!buildToolsPanel()){
      setTimeout(buildToolsPanel, 150);
    }
    sheet.classList.add('open');
    document.body.classList.add('be-lock');
  }
  function closePanel(){
    sheet.classList.remove('open');
    document.body.classList.remove('be-lock');
  }

  btn?.addEventListener('click', openPanel);
  closeBt?.addEventListener('click', closePanel);
  sheet?.querySelector('.be-offcanvas__backdrop')?.addEventListener('click', closePanel);
  document.addEventListener('keydown', (e)=>{ if(e.key==='Escape') closePanel(); });
})();