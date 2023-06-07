const btn = document.querySelector('.addBtn');
const d0 = document.querySelector('#d0');
btn.onclick = (e) => {
    e.preventDefault();
    btn.blur();
    openDialog(d0)
};
