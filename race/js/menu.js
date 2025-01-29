const elements = {
  menu: document.querySelector('.hamburger-menu'),
  line1: document.querySelector('#line1'),
  line2: document.querySelector('#line2'),
  line3: document.querySelector('#line3'),
  links: document.querySelector('.links'),
  wrapper: document.querySelector('.header #wrapper'),
  menu_wrapper: document.querySelector('.menu_wrapper'),
  mob_wrapper: document.querySelector('#mob-wrapper'),
  logo: document.querySelector('.logo')
};

elements.menu.addEventListener('click', () => {
  ['line1', 'line2', 'line3', 'links', 'wrapper', 'mob_wrapper', 'menu_wrapper, logo'].forEach(key => {
    elements[key].classList.toggle(`${key}-active`);
  });

  if (!elements.links.classList.contains('links-active')) {
    setTimeout(() => {
      elements.links.style.display = 'none';
    }, 50);
  } else {
    elements.links.style.display = 'flex';
  }
});
