const offset = 150;
const topBtn = document.getElementById('topBtn');
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('nav a');
const pi = document.querySelector('#pi');
let current;
setTimeout(() => go(window.location.pathname.substring(1)), 0);
window.onscroll = function () { onScroll() };
window.onkeydown = function(e) {
  const el = document.activeElement;
  if (keyedButton(e, el)) {
    activate(el)
  }
};
window.onkeyup = function(e) {
  const el = document.activeElement;
  if (keyedButton(e, el)) {
    deactivate(el)
  }
};
window.onclick = function (e) {
  if (!outside(e, pi.getBoundingClientRect())) {
    click(e)
  }
};
document.querySelectorAll('dialog').forEach(dialog => dialog.onclick = (e) => {
  if (outside(e, e.target.getBoundingClientRect())) e.target.close()
});
navLinks.forEach(link => {
  link.onclick = (e) => {
    e.preventDefault();
    go(link.getAttribute('href').substring(1))
  }
});
const setCur = debounce((cur) => {
  window.history.replaceState(null, 'title', (current = cur)?.getAttribute('href') ?? '/')
});
function keyedButton(e, el) {
  return el?.matches('input[type=button], input[type=submit]') && (e.keyCode === 32 || e.keyCode === 13)
};
function activate(el) {
  el.classList.add('active');
  el.onblur = () => deactivate(el)
};
function deactivate(el) {
  el.classList.remove('active');
  el.onblur = undefined
};
function modal(e) {
  return e.shiftKey && e.ctrlKey
};
function outside(e, d) {
  return e.clientX < d.left || e.clientX > d.right || e.clientY < d.top || e.clientY > d.bottom
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
function which(e) {
  return e.altKey ? '#d2' : '#d1'
};
function check(links, id) {
  links.push(document.querySelector('nav a[href$=\'' + id + '\']'));
  if (id?.includes('/')) {
    check(links, id.substring(0, id.indexOf('/')))
  }
};
function go(id) {
  const el = id ? document.getElementById(id) : undefined;
  const top = (el?.offsetTop ?? 0) - offset / 2;
  window.scrollTo({ top: top, behavior: 'smooth' });
  document.documentElement.scrollTo({ top: top, behavior: 'smooth' });
  window.history.pushState(null, 'title', '/' + (el?.id ?? ''))
};
function debounce(func, timeout = 250) {
  let timer;
  return (...args) => {
    clearTimeout(timer);
    timer = setTimeout(() => func.apply(this, args), timeout)
  }
};
/*
drag
dragend    x
dragenter
dragexit   x
dragleave  x
dragover   x
dragstart  x
drop
*/
function hideBorders() {
  draggables.forEach(draggable => {
    draggable.classList.remove('dragtobottom');
    draggable.classList.remove('dragtomiddle');
    draggable.classList.remove('dragtotop');
  });
};
const containers = document.querySelectorAll('ul.nav');
const draggables = document.querySelectorAll('li[draggable="true"]');
draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', (e) => {
    draggable.classList.add('dragging');
    e.dataTransfer.effectAllowed = 'move';
    e.dataTransfer.setDragImage(new Image(), 0, 0);
  });
  draggable.addEventListener('dragend', (e) => {
    draggable.classList.remove('dragging');
    hideBorders();
    draggable.style.backgroundColor = 'none';
  });
});
containers.forEach(container => {
  container.addEventListener('dragexit', (e) => {
    hideBorders()
  });
  container.addEventListener('dragleave', (e) => {
    hideBorders()
  });
  container.addEventListener('dragover', (e) => {
    hideBorders();
    e.preventDefault();
    e.dataTransfer.dropEffect = 'move';
    const data = dragData(container, e);
    const draggable = document.querySelector('.dragging');
    if (data.element == null) {
      //container.appendChild(draggable);
      //container.lastElementChild.classList.add('dragtobottom');
    } else {
      //container.insertBefore(draggable, afterElement);
      switch(data.side) {
        case 'top':
          data.element.classList.add('dragtotop');
          break;
        case 'middle':
          data.element.classList.add('dragtomiddle');
          break;
        case 'bottom':
          data.element.classList.add('dragtobottom');
          break;
      }
    }
  });
});
function dragData(container, e) {
  const arr = [...container.querySelectorAll('li[draggable="true"]')].reverse();
  for (let i = 0; i < arr.length; i++) {
    const box = arr[i].getBoundingClientRect();
    if (e.clientY >= box.top && e.clientY <= box.bottom) {
      const match = arr[i].lastElementChild.matches('ul.subnav');
      const height = (box.bottom - box.top) / (match ? 3 * 3 : 3);
      if (e.clientY >= box.bottom - height) {
        if (i - 1 >= 0) {
          return {element: arr[i - 1],side: 'top'}
        } else {
          return {element: arr[i],side: 'bottom'}
        }
      };
      if (e.clientY <= box.top + height) {
        return {element: arr[i],side: 'top'}
      };
      return {element: arr[i],side: 'middle'}
    }
  }
};
