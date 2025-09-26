    console.log("JS chargé");
    
    var urlPrefix = "https://echamilo.univ-grenoble-alpes.fr/";
    // var urlPrefix = "";

    var tree = {};

    var myBricksLoaded = false;

    $(document).ready(
        function ()
        {

            $("#myBricks").html("<img src='"+urlPrefix+"main/img/progress_bar.gif' alt='Loading...'>");

            tree = initialize();

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

    function displayMyBricks()
    {
        if (!myBricksLoaded) {
            $("#myBricks").show(200);
            $("#myBricksArrow").addClass("up");
            getStudentLpList();
            myBricksLoaded = true;
        } else {
            if ($("#myBricks").is(":visible")) {
                $("#myBricks").hide(200);
                $("#myBricksArrow").removeClass("up");
            } else {
                $("#myBricks").show(200);
                $("#myBricksArrow").addClass("up");
            }
        }
    }


    function displayAlreadySeenLp()
    {
        var alreadySeenLps = getStudentLpList();
        var html = "";
        if (alreadySeenLps.length > 0) {
            html = getHtmlLpLinks(alreadySeenLps);
        }
        $("#myBricks").html(html);
    }

    /**
     * ajax list of lp already open by student
     * ajax call => return list of lp id student already open in this course
     * api_get_student_id
     * api_get_course
     * [ids]
     */
    function getStudentLpList()
    {
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
                    html = getHtmlLpLinks(datas);
                }
                $("#myBricks").html(html);
            },
            error: function () {
                alert('Ajax error getStudentLpList. Please contact administrator.')
            }
        });
    }


    function searchKeyword() {

        hideUnhideTopic();
        hideBrickFoundArea();

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


    /**
     * initialize tabs treeTheme treeTopic treeSubtopic
     * with datas in  parcours
     */
    function initialize()
    {
        var treeTheme = {};

        for (var i = 0; i < parcours.length; i++) {

            var themeId = parcours[i]['theme'];
            var topicId = parcours[i]['topic'];
            var subtopicId = parcours[i]['subtopic'];
            var lpId = parcours[i]['lp_id'];
            var name = parcours[i]['nom'];

            var subItem = {};
            subItem[subtopicId] = [lpId];
            var item = {};
            item[topicId] = subItem;

            // if themeId doesnt exists
            if (!treeTheme[themeId]) {
                treeTheme[themeId] = {};
            }
            if (!treeTheme[themeId][topicId]) {
                treeTheme[themeId][topicId] = {};
            }
            if (!treeTheme[themeId][topicId][subtopicId]) {
                treeTheme[themeId][topicId][subtopicId] = [];
            }
            treeTheme[themeId][topicId][subtopicId].push(lpId);
        }
        // console.log(JSON.stringify(treeTheme));
        return treeTheme;
    }

    function displayTree(treeTheme)
    {
        // theme

        var html1 = displayTheme(1, treeTheme[1]);
        var html2 = displayTheme(2, treeTheme[2]);
        var html3 = displayTheme(3, treeTheme[3]);
        var html4 = displayTheme(4, treeTheme[4]);

        $('#boostMenus').append("<div>"+html1+"</div>");
        $('#boostMenus').append("<div>"+html2+"</div>");
        $('#boostMenus').append("<div>"+html3+"</div>");
        $('#boostMenus').append("<div>"+html4+"</div>");


        // for (var index in treeTheme) {
        //     $('#boostMenus').append(displayTheme(index, treeTheme[index]));
        // }

    }

    function displayTree2(tree) {
        const container = document.getElementById("tree-container");
        container.innerHTML = "";

        Object.entries(tree).forEach(([themeName, topics]) => {
            const themeDiv = document.createElement("div");
            themeDiv.className = "theme";
            themeDiv.innerHTML = `<h2>${themeName}</h2>`;

            Object.entries(topics).forEach(([topicName, substructure]) => {
            const topicDiv = document.createElement("div");
            topicDiv.className = "topic";
            topicDiv.innerHTML = `<h3>${topicName}</h3>`;

            Object.entries(substructure).forEach(([key, value]) => {
                const sectionDiv = document.createElement("div");
                sectionDiv.className = "section";

                if (key === "_bricks") {
                value.forEach(parcours => {
                    const link = document.createElement("a");
                    link.href = getLpUrl(parcours.lp_id); // à adapter si nécessaire
                    link.textContent = parcours.nom;
                    link.className = "brick-link";
                    sectionDiv.appendChild(link);
                    sectionDiv.appendChild(document.createElement("br"));
                });
                } else {
                // subtopic case
                const subtopicTitle = document.createElement("h4");
                subtopicTitle.textContent = key;
                sectionDiv.appendChild(subtopicTitle);

                value.forEach(parcours => {
                    const link = document.createElement("a");
                    link.href = getLpUrl(parcours.lp_id);
                    link.textContent = parcours.nom;
                    link.className = "brick-link";
                    sectionDiv.appendChild(link);
                    sectionDiv.appendChild(document.createElement("br"));
                });
                }

                topicDiv.appendChild(sectionDiv);
            });

            themeDiv.appendChild(topicDiv);
            });

            container.appendChild(themeDiv);
        });
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
                    html += `<div class='subtopic_title click' onclick='showInIframe("${getLpUrl(brick.lp_id)}")'>`;
                    html += `${brick.nom}<span class='checkOk' style='display:none'></span>`;
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
                    html += `<div class='brick-link click' onclick='showInIframe("${getLpUrl(brick.lp_id)}")'>${brick.nom}</div>`;
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

            document.querySelectorAll('.bricks_list').forEach(div => {
                div.style.display = 'none';
            });

            brickList.style.display = isOpen ? 'none' : 'block';
        });
    });
}

    /**
     * display theme num div
     * @param index
     */
    function displayTheme(indexTheme, treeTopics)
    {
        if (!themes.hasOwnProperty(indexTheme)) {
            return "Theme index ["+indexTheme+"] not found.<br>";
        }

        var html = "";

        html += "<div class='themes' id='theme"+indexTheme+"'>";
        html += "   <div class='themes_title'>";
        html +=         themes[indexTheme];
        html += "   </div>";
        html += "   <div class='topics' id='topics-theme"+indexTheme+"'>";
        for (var indexTopic in treeTopics) {
            html += displayTopic(indexTheme, indexTopic, treeTopics[indexTopic]);
        }
        html += "   </div>";
        html += "</div>";

        return html;
    }


    function displayTopic(indexTheme, indexTopic, treeSubtopic)
    {

        if (!topic.hasOwnProperty(indexTopic)) {
            return "Theme index ["+topicNum+"] not found.<br>";
        }

        var html = "";
        html += "<div class='topic' id='theme"+indexTheme+"-topic"+indexTopic+"'>";
        html += "   <div class='topic_title click' onclick='hideUnhideTopic("+indexTheme+", "+indexTopic+")'>";
        html +=         topic[indexTopic];
        html +=         "<span class='topic_arrow' id='topic_arrow-"+indexTheme+"-"+indexTopic+"' style='display:none'>&or;</span>";
        html += "   </div>";
        html += "   <div style='display:none ' class='subtopics' id='subtopics-theme"+indexTheme+"-topic"+indexTopic+"'>";
        for (var indexSubtopic in treeSubtopic) {
            html += displaySubtopic(indexTheme, indexTopic, indexSubtopic, treeSubtopic[indexSubtopic]);
        }
        html += "   </div>";
        html += "</div>";
        return html;
    }

    function hideUnhideTopic(indexTheme, indexTopic)
    {
        hideBrickFoundArea();
        // hide unhide sibling element
        var itemId = "subtopics-theme"+indexTheme+"-topic"+indexTopic;
        var arrowId = "topic_arrow-"+indexTheme+"-"+indexTopic;

        $('.checkOk').fadeOut(600);

        // change visibility of subtopics
        $("div[id^='subtopics']").each(
            function (index, item) {
                if ($(this).attr("id") !== itemId) {
                    $(this).hide(200);
                    $(this).prev().children().last().removeClass('up');
                } else {
                    if ($(this).is(":visible")) {
                        $(this).hide(200);
                        $(this).prev().children().last().removeClass('up');
                    } else {
                        $(this).show(200);
                        $(this).prev().children().last().addClass('up');
                    }
                }
            }
        );
    }

    function hideBrickFoundArea()
    {
        $("#bricksFound").hide(200);
    }

    function showInIframe(lpUrl)
    {
        const iframe = document.getElementById("inlineFrameExample");
        iframe.src = lpUrl;
        //  alert("passe ici");
    }

    function getHtmlLpLinks(lpIdList)
    {
        var html= "";
        for (var i = 0; i < lpIdList.length; i++) {
            var lpId = lpIdList[i];
            var lpName = getLpName(lpId);
            var lpUrl = getLpUrl(lpId);

            if (lpId !== "") {
                alert("passe par la ?");
                html += "<div class='lpName'>";
                html += "<a href='#' class='lp_links' onclick='showInIframe(\"" + lpUrl + "\"); return false;'>" + lpName + "</a>";
                html += "</div>";
            }
        }
        return html;
    }

    function getHtmlLpLinksInFrame(lpIdList)
    {
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

    function clickSubtopic(lpIds, obj)
    {
        // got list of lpIds separate with #
        var lpIdList = lpIds.split("#");

        $('.checkOk').fadeOut(600);
        obj.fadeOut(100).fadeIn(100);
        obj.children().last().fadeIn(500);

        hideBrickFoundArea();
        $("#bricksFound").html("");

        var html = getHtmlLpLinksInFrame(lpIdList);

        $("#bricksFound").html(html);
        $("#bricksFound").show(200);

    }

    // return name of lpId according to array parcours
    function getLpName(lpId)
    {
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
    function getLpUrl(lpId)
    {
        return urlPrefix+"main/lp/lp_controller.php?cidReq=BOOSTENGLISH&id_session=0&gidReq=0&gradebook=0&origin=&action=view&isStudentView=true&lp_id="+lpId;
    }

    /**
     * construct lp url
     * https://chamilo.grenoble-inp.fr/main/lp/
     * lp_controller.php?
     * cidReq=BOOSTENGLISH&
     * id_session=0&
     * gidReq=0&
     * gradebook=0&
     * origin=&
     * action=view&
     * lp_id=1297
     */
    function displaySubtopic(indexTheme, indexTopic, indexSubtopic, treeLp)
    {

        if (!subtopic.hasOwnProperty(indexSubtopic)) {
            return "Subtopic index ["+indexSubtopic+"] not found.<br>";
        }

        var lpItems = "";
        // var lpName = treeLp[indexSubtopic][lpId];
        //
        for (var i=0; i < treeLp.length; i++) {
            lpItems += treeLp[i]+"#";
        }

        // var lpUrl = "https://chamilo.grenoble-inp.fr/main/lp/lp_controller.php?cidReq=BOOSTENGLISH&id_session=0&gidReq=0&gradebook=0&origin=&action=view&lp_id=";
        // lpUrl += lpId;
        var html = "";
        html += "<div class='subtopic_title click' onclick='clickSubtopic(\""+lpItems+"\", $(this))' id='lps-theme"+indexTheme+"-topic"+indexTopic+"-subtopic"+indexSubtopic+"'>";
        html += subtopic[indexSubtopic];
        html += "<span class='checkOk' style='display:none'></span>";
        html += "</div>";

        return html;
    }

function buildTreeFromParcours() {
    var tree = {};

    for (var i = 0; i < parcours.length; i++) {
        var item = parcours[i];
        var themeId = item.theme;
        var topicId = item.topic;
        var subtopicId = item.subtopic;
        var lpId = item.lp_id;

        if (!tree[themeId]) {
            tree[themeId] = {};
        }

        if (!tree[themeId][topicId]) {
            tree[themeId][topicId] = {};
        }

        if (!tree[themeId][topicId][subtopicId]) {
            tree[themeId][topicId][subtopicId] = [];
        }

        tree[themeId][topicId][subtopicId].push(lpId);
    }

    return tree;
}

var treeBoost = buildTreeFromParcours();
console.log(treeBoost);
console.log(JSON.stringify(treeBoost, null, 2));

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






console.log(prettyTree);
console.log(JSON.stringify(prettyTree, null, 2));
