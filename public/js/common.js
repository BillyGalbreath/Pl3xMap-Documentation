const offset = 150;
function outside(e, d) {
  return e.clientX < d.left || e.clientX > d.right || e.clientY < d.top || e.clientY > d.bottom
};
window.onclick = function (e) {
  if (!outside(e, pi.getBoundingClientRect())) {
    clickPi(e)
  }
};
document.querySelectorAll('dialog').forEach(dialog => {
  dialog.addEventListener('cancel', (e) => {
    e.preventDefault();
    closeDialog(e.target)
  });
  dialog.onclick = (e) => {
    if (outside(e, e.target.getBoundingClientRect())) {
      closeDialog(e.target)
    }
  }
});
function which(e) {
  return e.altKey ? d2 : d1
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
function closeDialog(dialog) {
  dialog.classList.remove('show');
  dialog.addEventListener("transitionend", reallyCloseDialog);
  document.body.classList.remove('dialog-open')
};
function openDialog(dialog) {
  dialog.showModal();
  dialog.classList.add('show');
  document.body.classList.add('dialog-open')
};
function reallyCloseDialog(e) {
  e.target.close();
  e.target.removeEventListener("transitionend", reallyCloseDialog)
};
function clickPi(e) {
  if (logged_in === true) {
    logout.submit()
  } else if (modal(e)) {
    openDialog(which(e))
  }
};
function debounce(func, timeout = 250) {
  let timer;
  return (...args) => {
    clearTimeout(timer);
    timer = setTimeout(() => func.apply(this, args), timeout)
  }
};
