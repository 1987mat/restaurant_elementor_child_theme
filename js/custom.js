const header = document.querySelector('header');
const headerHeight = header.clientHeight;
let previousScroll = 0;

// Transparent header on scroll
window.addEventListener('scroll', () => {
  if (window.innerWidth >= 992) {
    animateHeader();
  }
});

function animateHeader() {
  let currentScroll = window.scrollY;

  if (currentScroll >= previousScroll && currentScroll >= headerHeight) {
    header.classList.add('transparent');
  } else {
    header.classList.remove('transparent');
  }

  previousScroll = currentScroll;
}
