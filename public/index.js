let current;
const topBtn = document.getElementById('topBtn');
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('nav a');
const setCur = debounce((cur) => {
  window.history.replaceState(null, 'title', (current = cur)?.getAttribute('href') ?? '/')
});
window.onscroll = function () {
  onScroll()
};
navLinks.forEach(link => {
  link.onclick = (e) => {
    e.preventDefault();
    go(link.getAttribute('href').substring(1))
  }
});
function check(links, id) {
  links.push(document.querySelector('nav a[href$=\'' + id + '\']'));
  if (id?.includes('/')) {
    check(links, id.substring(0, id.indexOf('/')))
  }
};
function onScroll() {
  if (window.scrollY > 1000) {
    topBtn.classList.add('shown')
  } else {
    topBtn.classList.remove('shown')
  };
  let cur;
  const links = [];
  for (let i = 0; i < sections.length; i++) {
    const min = sections[i].offsetTop - offset;
    const max = sections[i + 1]?.offsetTop - offset;
    if (window.scrollY >= min && (isNaN(max) || window.scrollY < max)) {
      check(links, sections[i].id)
    }
  };
  navLinks.forEach(link => {
    if (links.includes(link)) {
      link?.parentElement.classList.add('active');
      cur = link
    } else {
      link?.parentElement.classList.remove('active')
    }
  });
  if (current != cur) {
    setCur(cur)
  }
};
