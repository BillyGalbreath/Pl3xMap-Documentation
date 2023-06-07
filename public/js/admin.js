const addBtn = document.querySelector('#addBtn');
const cancelBtn = document.querySelector('#cancelBtn');
const saveBtn = document.querySelector('#saveBtn');
const d0 = document.querySelector('#d0');

addBtn.onclick = (e) => {
    e.preventDefault();
    addBtn.blur();
    openDialog(d0)
};

cancelBtn.onclick = (e) => {
    e.preventDefault();
    cancelBtn.blur();
    closeDialog(d0)
};

openDialog(d0);
