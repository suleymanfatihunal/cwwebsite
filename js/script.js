const navLinks = document.querySelectorAll('.navbar a');
const sections = document.querySelectorAll('section');

const offset = 100;

window.addEventListener('scroll', () => {
  let fromTop = window.scrollY + offset;

  sections.forEach(section => {
    let sectionId = section.getAttribute('id');
    let link = document.querySelector(`.navbar a[href="#${sectionId}"]`);

    if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
      navLinks.forEach(navLink => {
        if (navLink === link) {
            
          navLink.style.color = 'transparent';
          navLink.style.background = 'linear-gradient(to top, #d97ef9, #4dfcf2)';
          navLink.style['-webkit-background-clip'] = 'text';
          navLink.style['-moz-background-clip'] = 'text';
          navLink.style['-ms-background-clip'] = 'text';
          navLink.style['background-clip'] = 'text';
        } else {

          navLink.style.color = 'white';
          navLink.style.background = 'none';
        }
      });
    }
  });
});
      window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        const offset = 100;

        if (window.scrollY > offset) {
          header.classList.add('sticky-header');
        } else {
          header.classList.remove('sticky-header');
        }
      });


 
ScrollReveal({
  reset: true,
  distance:'80px',
  duration:2000,
  delay:200
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form', { origin: 'bottom' });
ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });

const typed = new Typed('.multiple-text',{
    strings :['Frontend Developer','Designer','İnformatics Student'],
    typeSpeed:90,
    backSpeed:90,
    backDelay:1000,
    loop:true
});