## Globals / état
- urlPrefix : base des URLs Chamilo.
- myBricksLoaded : booléen qui évite rechargements multiples du menu.
- currentLpId : suivi de la brique ouverte.
- previousLpId : suivi de la brique ouverte.

## MyBricks
- displayMyBricks() : récupère les LP et affiche le menu perso.
- positionMyBricks() : ajuste la position du menu (au clic).
- getStudentLpList() : requête Ajax qui renvoie les LP d’un étudiant.
- getHtmlLpLinks2() : construit le HTML du menu LP.
- openBrickFromMyBricks(lpId) : ouvre une brique dans l’iframe.
- gestion fermeture (click dehors, Échap) : ferme le menu au clic dehors / Échap.

## Recherche
- norm(str) : normalise une chaîne (supprime accents, etc.).
- debounce(fn, delay) : wrapper anti-répétition d’une fonction.
- beSearchIndex (objet index → array) : index de recherche (clé → objets LP).
- onSearch(event) : handler input recherche, filtre l’index.
- renderResults(results) : affiche les résultats filtrés.
- gestion navigation clavier : ↑/↓ pour parcourir, Entrée pour ouvrir.
- fermeture au clic dehors : clic dehors ferme résultats.

## Arborescence
- slugify(text) : crée un id safe à partir d’un texte.
- buildNamedTreeFromParcours(data) : transforme JSON parcours → arbre nommé.
- displayTree3(treeData) : rend l’arbre dans le DOM avec toggle.
- toggles topic/subtopic (event listeners) : clics sur topic/subtopic pour ouvrir/fermer.

## Iframe
- showInIframe(url, lpId) : affiche un LP dans l’iframe.
- showInIframe_old(url, lpId) (vestige) : ancienne version (dépréciée).
- injectCssToIframe(iframe, extraCss) : ajoute des styles custom dans le contenu iframe.
- injectCssToIframeAutoResize(iframe, extraCss) : idem + ajuste hauteur automatiquement.
- handleIframeLoad(event) : hook sur chargement de l’iframe.

## LP / Progression
- moveLpMenuToMainPage() : déplace menu LP du DOM interne vers la page principale.
- quickSwitchItemCustom(itemId) : override de la fonction Chamilo pour charger un item (via Ajax).
- updateProgressBarCustom(progress) : rafraîchit la barre de progression.

## Divers
- loadBrickInDiv(brickId) (quick_view) : charge une brique dans un < div > (vue rapide).
- outils Chamilo (gestion off-canvas menu outils) : gère ouverture/fermeture du panneau outils.
- guide (slider gauche/droite dans be-guide) : système de slider horizontal dans la div #be-guide.

