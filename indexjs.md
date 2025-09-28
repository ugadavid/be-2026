## Globals / état
- urlPrefix
- myBricksLoaded
- currentLpId
- previousLpId

## MyBricks
- displayMyBricks()
- positionMyBricks()
- getStudentLpList()
- getHtmlLpLinks2()
- openBrickFromMyBricks(lpId)
- gestion fermeture (click dehors, Échap)

## Recherche
- norm(str)
- debounce(fn, delay)
- beSearchIndex (objet index → array)
- onSearch(event)
- renderResults(results)
- gestion navigation clavier
- fermeture au clic dehors

## Arborescence
- slugify(text)
- buildNamedTreeFromParcours(data)
- displayTree3(treeData)
- toggles topic/subtopic (event listeners)

## Iframe
- showInIframe(url, lpId)
- showInIframe_old(url, lpId) (vestige)
- injectCssToIframe(iframe, extraCss)
- injectCssToIframeAutoResize(iframe, extraCss)
- handleIframeLoad(event)

## LP / Progression
- moveLpMenuToMainPage()
- quickSwitchItemCustom(itemId)
- updateProgressBarCustom(progress)

## Divers
- loadBrickInDiv(brickId) (quick_view)
- outils Chamilo (gestion off-canvas menu outils)
- guide (slider gauche/droite dans be-guide)

