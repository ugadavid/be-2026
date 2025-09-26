function injectCssToIframeAutoResize() {
  const iframe = document.getElementById("inlineFrameExample");
  const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

  // --- CSS d'hygiène (inchangé) ---
  const style = iframeDoc.createElement("style");
  style.innerHTML = `
    #learning_path_left_zone, .sidebar-scorm { display:none !important; }
    #learning_path_right_zone { left:0 !important; width:100% !important; }
    #learning_path_main { display:flex !important; flex-direction:column !important; }

    #learning_path_right_zone .lp-view-zone-container {
      padding:16px 0 0 0 !important;
      padding-left:0 !important; padding-right:0 !important; padding-bottom:0 !important;
    }

    .lp-view-tabs, .tab-content, .tab-pane, #wrapper-iframe, iframe#content_id {
      width:100% !important; height:auto !important; margin:0 !important; padding:0 !important; max-width:100% !important;
    }

    #lp_navigation_elem, .navegation-bar { display:none !important; }

    html, body {
      background:#fff !important;
      overflow-x:hidden !important;
      overflow-y:auto !important;
      min-height:0 !important;
    }

    img, video, canvas, svg { max-width:100% !important; height:auto !important; }
  `;
  iframeDoc.head.appendChild(style);

  // --- Auto-resize robuste ---
  const MIN   = 800;   // hauteur mini de confort
  const EXTRA = 40;    // petit coussin
  const MAX   = 20000; // garde-fou anti "km"

  let lastH = 0;
  let rafId = null;

  function measureDocHeight(doc) {
    const b = doc.body, e = doc.documentElement;
    return Math.max(
      b?.scrollHeight || 0, b?.offsetHeight || 0, b?.clientHeight || 0,
      e?.scrollHeight || 0, e?.offsetHeight || 0, e?.clientHeight || 0
    );
  }

  function resizeIframe() {
    cancelAnimationFrame(rafId);
    rafId = requestAnimationFrame(() => {
      try {
        // neutralise l’effet 100vh pendant la mesure
        const prev = iframe.style.height;
        iframe.style.height = '1px';

        const hIntr = measureDocHeight(iframeDoc);
        const next  = Math.min(Math.max(hIntr + EXTRA, MIN), MAX);

        if (Math.abs(next - lastH) > 2) {
          iframe.style.height = next + 'px';
          lastH = next;
        } else {
          iframe.style.height = prev || (MIN + 'px');
        }
      } catch (e) {
        // en cas de pépin, on remet au moins la hauteur mini
        iframe.style.height = MIN + 'px';
        console.warn('resizeIframe error:', e);
      }
    });
  }

  // 1) premier calcul
  resizeIframe();

  // 2) re-calcul si ça bouge
  new ResizeObserver(resizeIframe).observe(iframeDoc.documentElement);
  new MutationObserver(resizeIframe).observe(iframeDoc, {subtree:true, childList:true, attributes:true, characterData:true});
  iframeDoc.querySelectorAll('img').forEach(img => { if (!img.complete) img.addEventListener('load', resizeIframe, {once:true}); });

  // 3) tardifs (fonts/images)
  iframeDoc.fonts?.ready.then(resizeIframe).catch(()=>{});
  setTimeout(resizeIframe, 300);
  setTimeout(resizeIframe, 1000);
}
