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