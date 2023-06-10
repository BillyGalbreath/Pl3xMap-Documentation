const addBtn = document.querySelector('#addBtn');
const cancelBtn = document.querySelector('#cancelBtn');
const isNew = document.querySelector('#isNew');
const d0 = document.querySelector('#d0');
const pageId = document.querySelector('#pageId');
const slug = document.querySelector('#slug');
const title = document.querySelector('#title');
const description = document.querySelector('#description');
const content = document.querySelector('#content');

addBtn.onclick = (e) => {
  e.preventDefault();
  addBtn.blur();
  pageId.value = -1;
  slug.value = '';
  title.value = '';
  description.value = '';
  content.value = '';
  isNew.value = true;
  openDialog(d0)
};

cancelBtn.onclick = (e) => {
  e.preventDefault();
  cancelBtn.blur();
  closeDialog(d0)
};

const entries = document.querySelectorAll('.page_entry');
entries.forEach(entry => {
  entry.onclick = (e) => {
    pageId.value = entry.children[1].innerHTML;
    slug.value = entry.children[3].innerHTML;
    title.value = entry.children[4].innerHTML;
    description.value = entry.children[5].innerHTML;
    content.value = entry.children[2].innerHTML;
    isNew.value = false;
    openDialog(d0)
  }
});
