const offset = 150;
const pi = document.querySelector('#pi');
function outside(e, d) {
  return e.clientX < d.left || e.clientX > d.right || e.clientY < d.top || e.clientY > d.bottom
};
window.onclick = function (e) {
  if (!outside(e, pi.getBoundingClientRect())) {
    click(e)
  }
};
document.querySelectorAll('dialog').forEach(dialog => dialog.onclick = (e) => {
    if (outside(e, e.target.getBoundingClientRect())) e.target.close()
  });
function which(e) {
  return e.altKey ? '#d2' : '#d1'
};
function modal(e) {
  return e.shiftKey && e.ctrlKey
};
function go(id, base = '') {
  const el = id ? document.getElementById(id) : undefined;
  const top = (el?.offsetTop ?? 0) - offset / 2;
  window.scrollTo({ top: top, behavior: 'smooth' });
  document.documentElement.scrollTo({ top: top, behavior: 'smooth' });
  window.history.pushState(null, 'title', '/' + base + (el?.id ?? ''))
};
function click(e) {
  if (logged_in === true) {
    pi.querySelector('form').submit()
  } else {
    if (modal(e)) document.querySelector(which(e)).showModal()
  }
};
function debounce(func, timeout = 250) {
  let timer;
  return (...args) => {
    clearTimeout(timer);
    timer = setTimeout(() => func.apply(this, args), timeout)
  }
};
