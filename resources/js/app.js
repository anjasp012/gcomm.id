// ============================================================
//  GCOMM — Premium Animation System v2
//  GSAP + ScrollTrigger + Custom FX
// ============================================================

document.addEventListener('DOMContentLoaded', () => {

  gsap.registerPlugin(ScrollTrigger);

  // ──────────────────────────────────────────────────────────
  // 0. SMOOTH PAGE ENTRANCE
  // ──────────────────────────────────────────────────────────
  gsap.from('body > *', {
    opacity: 0,
    duration: 0.5,
    ease: 'power2.out',
    clearProps: 'opacity',
  });

  // ──────────────────────────────────────────────────────────
  // 1. HERO — homepage title slide-up
  // ──────────────────────────────────────────────────────────
  const heroLines = document.querySelectorAll('.hero-title-line');
  if (heroLines.length) {
    const tl = gsap.timeline({ defaults: { ease: 'expo.out' } });
    tl.to('.hero-badge', { opacity: 1, y: 0, duration: 0.9, delay: 0.1 })
      .to(heroLines, { y: '0%', duration: 1.1, stagger: 0.13 }, '-=0.6')
      .to('.hero-desc',  { opacity: 1, y: 0, duration: 0.9 }, '-=0.7')
      .to('.hero-btn',   { opacity: 1, y: 0, duration: 0.8, stagger: 0.1 }, '-=0.65');
  }

  // ──────────────────────────────────────────────────────────
  // 2. FLOATING PARTICLES (hero section background)
  // ──────────────────────────────────────────────────────────
  const heroSection = document.querySelector('.hero-particles');
  if (heroSection) {
    for (let i = 0; i < 28; i++) {
      const dot = document.createElement('span');
      dot.className = 'particle-dot';
      dot.style.cssText = `
        position:absolute;
        border-radius:50%;
        pointer-events:none;
        left:${Math.random() * 100}%;
        top:${Math.random() * 100}%;
        width:${2 + Math.random() * 4}px;
        height:${2 + Math.random() * 4}px;
        background:rgba(255,255,255,${0.1 + Math.random() * 0.35});
        z-index:1;
      `;
      heroSection.appendChild(dot);
      gsap.to(dot, {
        y: `${-40 - Math.random() * 60}px`,
        x: `${(Math.random() - 0.5) * 40}px`,
        opacity: 0,
        duration: 4 + Math.random() * 5,
        repeat: -1,
        delay: Math.random() * 5,
        ease: 'power1.inOut',
        yoyo: false,
      });
    }
  }

  // ──────────────────────────────────────────────────────────
  // 3. ANIMATED GRADIENT MESH (hero overlay)
  // ──────────────────────────────────────────────────────────
  const mesh = document.querySelector('.hero-mesh');
  if (mesh) {
    gsap.to(mesh, {
      backgroundPosition: '100% 100%',
      duration: 12,
      ease: 'sine.inOut',
      repeat: -1,
      yoyo: true,
    });
  }

  // ──────────────────────────────────────────────────────────
  // 4. SCROLL REVEAL — fade + slide up (.reveal)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.reveal').forEach((el) => {
    gsap.fromTo(el,
      { opacity: 0, y: 60 },
      {
        scrollTrigger: { trigger: el, start: 'top 88%', toggleActions: 'play none none none' },
        opacity: 1, y: 0, duration: 1, ease: 'expo.out',
      }
    );
  });

  // ──────────────────────────────────────────────────────────
  // 5. STAGGER REVEAL — children pop in one by one (.reveal-stagger)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.reveal-stagger').forEach((group) => {
    gsap.fromTo(Array.from(group.children),
      { opacity: 0, y: 50, scale: 0.96 },
      {
        scrollTrigger: { trigger: group, start: 'top 85%', toggleActions: 'play none none none' },
        opacity: 1, y: 0, scale: 1,
        duration: 0.8, ease: 'expo.out', stagger: 0.12,
      }
    );
  });

  // ──────────────────────────────────────────────────────────
  // 6. CLIP-PATH WIPE REVEAL — dramatic section reveal (.reveal-wipe)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.reveal-wipe').forEach((el) => {
    gsap.fromTo(el,
      { clipPath: 'inset(0 100% 0 0)' },
      {
        scrollTrigger: { trigger: el, start: 'top 85%' },
        clipPath: 'inset(0 0% 0 0)',
        duration: 1.1, ease: 'expo.out',
      }
    );
  });

  // ──────────────────────────────────────────────────────────
  // 7. COUNTER ANIMATION (.count-up data-target="500" data-suffix="+")
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.count-up').forEach((el) => {
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    ScrollTrigger.create({
      trigger: el, start: 'top 85%', once: true,
      onEnter: () => {
        gsap.to({ val: 0 }, {
          val: target, duration: 2.2, ease: 'power2.out',
          onUpdate() { el.textContent = Math.round(this.targets()[0].val) + suffix; },
        });
      },
    });
  });

  // ──────────────────────────────────────────────────────────
  // 8. TYPEWRITER EFFECT (.typewriter data-words="a,b,c")
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.typewriter').forEach((el) => {
    const words = (el.dataset.words || el.textContent).split(',');
    const speed = +el.dataset.speed || 75;
    const pause = +el.dataset.pause || 1600;
    let wi = 0, ci = 0, deleting = false;

    function tick() {
      const word = words[wi % words.length];
      el.textContent = deleting
        ? word.substring(0, ci - 1)
        : word.substring(0, ci + 1);
      deleting ? ci-- : ci++;

      let delay = deleting ? speed / 2 : speed;
      if (!deleting && ci === word.length) { delay = pause; deleting = true; }
      else if (deleting && ci === 0) { deleting = false; wi++; delay = 400; }
      setTimeout(tick, delay);
    }
    setTimeout(tick, 800);
  });

  // ──────────────────────────────────────────────────────────
  // 8b. TYPEWRITER ONCE — type full text once, no delete
  //     Add class="typewriter-once" to any <p> or <span>
  //     Optionally: data-speed="30" data-delay="900"
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.typewriter-once').forEach((el) => {
    const fullText = el.textContent.trim();
    const speed    = +(el.dataset.speed  || 22);
    const delay    = +(el.dataset.delay  || 900);
    el.textContent = '';
    el.style.minHeight = '1em'; // prevent layout jump

    let i = 0;
    function typeChar() {
      if (i < fullText.length) {
        // group whitespace as single token for speed
        el.textContent += fullText[i++];
        const jitter = fullText[i - 1] === ' ' ? 0 : Math.random() * 20 - 8;
        setTimeout(typeChar, speed + jitter);
      }
    }

    // If inside hero, start after entrance animation; otherwise on scroll
    const inHero = el.closest('section')?.classList.contains('bg-slate-950') ||
                   el.closest('.hero-particles') ||
                   el.closest('section:first-of-type');
    if (inHero) {
      setTimeout(typeChar, delay);
    } else {
      ScrollTrigger.create({
        trigger: el, start: 'top 88%', once: true,
        onEnter: () => setTimeout(typeChar, 150),
      });
    }
  });

  // ──────────────────────────────────────────────────────────
  // 9. TEXT SCRAMBLE on hover (.scramble-hover)
  // ──────────────────────────────────────────────────────────
  const CHARS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  document.querySelectorAll('.scramble-hover').forEach((el) => {
    const original = el.textContent;
    let frame = 0, raf;
    el.addEventListener('mouseenter', () => {
      cancelAnimationFrame(raf);
      let iteration = 0;
      const scramble = () => {
        el.textContent = original.split('').map((ch, i) =>
          i < iteration
            ? original[i]
            : ch === ' ' ? ' ' : CHARS[Math.floor(Math.random() * CHARS.length)]
        ).join('');
        if (iteration < original.length) { iteration += 0.35; raf = requestAnimationFrame(scramble); }
        else el.textContent = original;
      };
      raf = requestAnimationFrame(scramble);
    });
  });

  // ──────────────────────────────────────────────────────────
  // 10. MAGNETIC BUTTONS (.magnetic)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.magnetic').forEach((btn) => {
    btn.addEventListener('mousemove', (e) => {
      const rect = btn.getBoundingClientRect();
      const x = (e.clientX - rect.left - rect.width / 2) * 0.35;
      const y = (e.clientY - rect.top - rect.height / 2) * 0.35;
      gsap.to(btn, { x, y, duration: 0.4, ease: 'power2.out' });
    });
    btn.addEventListener('mouseleave', () => {
      gsap.to(btn, { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1, 0.4)' });
    });
  });

  // ──────────────────────────────────────────────────────────
  // 11. 3D TILT on cards (.tilt-card)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.tilt-card').forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const r = card.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width - 0.5;
      const y = (e.clientY - r.top) / r.height - 0.5;
      gsap.to(card, {
        rotateY: x * 12, rotateX: -y * 12,
        transformPerspective: 900, duration: 0.3, ease: 'power2.out',
      });
      // inner shine
      const shine = card.querySelector('.card-shine');
      if (shine) {
        shine.style.background = `radial-gradient(circle at ${(x + 0.5) * 100}% ${(y + 0.5) * 100}%, rgba(255,255,255,0.18) 0%, transparent 65%)`;
      }
    });
    card.addEventListener('mouseleave', () => {
      gsap.to(card, { rotateY: 0, rotateX: 0, duration: 0.7, ease: 'elastic.out(1, 0.5)' });
      const shine = card.querySelector('.card-shine');
      if (shine) shine.style.background = 'transparent';
    });
  });

  // ──────────────────────────────────────────────────────────
  // 12. PARALLAX on hero background images (.parallax-img)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.parallax-img').forEach((img) => {
    gsap.to(img, {
      scrollTrigger: {
        trigger: img.closest('section') || img.parentElement,
        start: 'top top', end: 'bottom top', scrub: 1.5,
      },
      y: '18%', ease: 'none',
    });
  });

  // ──────────────────────────────────────────────────────────
  // 13. CURSOR GLOW (desktop only)
  // ──────────────────────────────────────────────────────────
  if (window.innerWidth > 768) {
    const glow = document.createElement('div');
    glow.id = 'cursor-glow';
    document.body.appendChild(glow);
    document.addEventListener('mousemove', (e) => {
      gsap.to(glow, { left: e.clientX, top: e.clientY, duration: 0.55, ease: 'power2.out' });
    });
  }

  // ──────────────────────────────────────────────────────────
  // 14. HORIZONTAL SCROLL REVEAL for section headings (.reveal-left)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.reveal-left').forEach((el) => {
    gsap.fromTo(el,
      { opacity: 0, x: -60 },
      {
        scrollTrigger: { trigger: el, start: 'top 88%' },
        opacity: 1, x: 0, duration: 1, ease: 'expo.out',
      }
    );
  });
  document.querySelectorAll('.reveal-right').forEach((el) => {
    gsap.fromTo(el,
      { opacity: 0, x: 60 },
      {
        scrollTrigger: { trigger: el, start: 'top 88%' },
        opacity: 1, x: 0, duration: 1, ease: 'expo.out',
      }
    );
  });

  // ──────────────────────────────────────────────────────────
  // 15. SECTION BORDER LINE DRAW (.line-draw)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.line-draw').forEach((el) => {
    gsap.fromTo(el,
      { scaleX: 0, transformOrigin: 'left center' },
      {
        scrollTrigger: { trigger: el, start: 'top 90%' },
        scaleX: 1, duration: 1.1, ease: 'expo.out',
      }
    );
  });

  // ──────────────────────────────────────────────────────────
  // 16. IMAGE REVEAL with clip-path (.img-reveal)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.img-reveal').forEach((img) => {
    gsap.fromTo(img,
      { clipPath: 'inset(0 0 100% 0)', opacity: 1 },
      {
        scrollTrigger: { trigger: img, start: 'top 85%' },
        clipPath: 'inset(0 0 0% 0)', duration: 1.2, ease: 'expo.out',
      }
    );
  });

  // ──────────────────────────────────────────────────────────
  // 17. AMBIENT FLOATING — logo, badges, icons (.float-slow)
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('.float-slow').forEach((el, i) => {
    gsap.to(el, {
      y: '-12px', duration: 3 + i * 0.4,
      ease: 'sine.inOut', repeat: -1, yoyo: true, delay: i * 0.3,
    });
  });

  // Navbar scroll handled by layout.blade.php inline script

  // ──────────────────────────────────────────────────────────
  // 19. SHIMMER on CTA buttons (.shimmer)
  // ──────────────────────────────────────────────────────────
  // (handled via CSS ::after — see app.css)

  // ──────────────────────────────────────────────────────────
  // 20. ACTIVE NAV LINK INDICATOR — subtle scale pulse
  // ──────────────────────────────────────────────────────────
  document.querySelectorAll('#main-nav ul a.text-accent').forEach((link) => {
    gsap.to(link, {
      scale: 1.05, duration: 1.2, ease: 'sine.inOut', repeat: -1, yoyo: true,
    });
  });

});
