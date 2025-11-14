const phrases = [
        "Frontend Developer !",
        "Backend Developer !",
        "Fullstack Developer !"
        ];

        const el = document.getElementById('typewriter');
        const TYPING_SPEED = 100; // ms per char
        const PAUSE = 1800; // pause between phrases
        let phraseIndex = 0;
        let charIndex = 0;
        let typing = true;

        function type() {
        const current = phrases[phraseIndex];
        if (charIndex <= current.length) {
            el.textContent = current.slice(0, charIndex);
            charIndex++;
            setTimeout(type, TYPING_SPEED);
        } else {
            // finished phrase, pause then erase
            setTimeout(erase, PAUSE);
        }
        }

        function erase() {
        const current = phrases[phraseIndex];
        if (charIndex >= 0) {
            el.textContent = current.slice(0, charIndex);
            charIndex--;
            setTimeout(erase, TYPING_SPEED / 2);
        } else {
            phraseIndex = (phraseIndex + 1) % phrases.length;
            setTimeout(type, 300);
        }
        }

        // start
        document.addEventListener('DOMContentLoaded', () => {
        type();
        });


        // -----------------------------
  // JavaScript minimal et fiable
  // -----------------------------
  (function(){
    const form = document.getElementById('contactForm');
    const toastContainer = document.getElementById('toastContainer');

    // Utilitaire simple : affiche un toast et le supprime après duration ms
    function showToast(message, type = 'success', duration = 6000) {
      const toast = document.createElement('div');
      toast.textContent = message;
      // style simple (tu peux remplacer par classes Tailwind)
      toast.style.minWidth = '200px';
      toast.style.marginTop = '8px';
      toast.style.padding = '10px 14px';
      toast.style.borderRadius = '8px';
      toast.style.boxShadow = '0 4px 12px rgba(0,0,0,0.08)';
      toast.style.opacity = '0';
      toast.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
      toast.style.transform = 'translateY(8px)';
      if (type === 'success') {
        toast.style.background = '#16a34a'; // vert
        toast.style.color = 'white';
      } else {
        toast.style.background = '#dc2626'; // rouge
        toast.style.color = 'white';
      }
      toastContainer.appendChild(toast);

      // show
      requestAnimationFrame(() => {
        toast.style.opacity = '1';
        toast.style.transform = 'translateY(0)';
      });

      // hide after duration
      setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(8px)';
        // remove after transition
        setTimeout(() => toast.remove(), 300);
      }, duration);
    }

    form.addEventListener('submit', async function(e) {
      e.preventDefault();

      const fd = new FormData(form);

      // Récupère token CSRF : on l'a mis en meta
      const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': csrf,
            'Accept': 'application/json'
          },
          body: fd
        });

        // Si statut 2xx => response.ok === true
        if (response.ok) {
          // On peut lire le JSON si le serveur en renvoie
          // mais ici on n'a pas besoin d'afficher tout le payload
          // simplement dire "succès"
          showToast(' ✅ Message envoyé avec succès !', 'success', 6000);
          form.reset();
        } else {
          // réponse non-ok (ex: 422 validation ou 500)
          showToast('Erreur de connexion ou envoi (réponse serveur)', 'error', 6000);
        }

      } catch (err) {
        // Erreur réseau (serveur down, CORS, etc.)
        console.error('Fetch error:', err);
        showToast('Erreur de connexion au serveur', 'error', 6000);
      }
    });
  })();

  const  scrollUp = () => {
            const scrollUpBtn = document.getElementById("scroll-up")

            if(this.scrollY >=250) {
                scrollUpBtn.classList.remove("-bottom-1/2")
                scrollUpBtn.classList.add("bottom-4")
            } else {
                scrollUpBtn.classList.add("-bottom-1/2")
                scrollUpBtn.classList.remove("bottom-4")
            }
        }

        window.addEventListener("scroll", scrollUp)


const sr = ScrollReveal({
            origin: "top",
            distance: "60px",
            duration: 2500,
            delay: 300,
            reset: true
        })

        sr.reveal (`.home__content, .about__top, .portfolio__card, .portfolio__top, .contact__top, .footer__bottom`)
        sr.reveal (`.about__leaf`, {delay:100, origin: "right"})
        sr.reveal (`.home__image`, { delay: 500, scale: 0.5 })
        sr.reveal (`.service__card`, { interval: 100})

        sr.reveal (`.about__item__img-1`, { origin: "right", interval: 100})
        sr.reveal (`.about__item__content-1`, { origin: "left", interval: 100})

        sr.reveal (`.portfolio__item__text-1`, { origin: "left"})


        sr.reveal (`.skills__itms__progress-1`, { origin: "bottom"})



