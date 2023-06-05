const btn = document.querySelector('.addBtn');
btn.onclick = (e) => {
    e.preventDefault();
    btn.blur();
    d0.showModal();
};
const d0 = document.querySelector('#d0');
d0.showModal();
