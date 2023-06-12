let current;
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('nav a');
const setCur = debounce((cur) => {
  document.title = cur ? title + ' - ' + htmlDecode(cur.innerHTML) : title;
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
function htmlDecode(input) {
  return new DOMParser().parseFromString(input, "text/html").documentElement.textContent
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

document.querySelectorAll('.pageContent').forEach(el => {
  el.innerHTML = el.innerHTML?.slice(4, -3);
  el.querySelectorAll('pre code').forEach(code => {
    code.innerHTML = code.innerHTML
      ?.replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;")
  })
});
