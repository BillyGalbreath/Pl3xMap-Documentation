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

let skipParent;
document.querySelectorAll('.page').forEach(li => {
  li.onclick = () => {
    pageId.value = li.children[1].innerHTML;
    slug.value = li.children[3].innerHTML;
    title.value = li.children[4].innerHTML;
    description.value = li.children[5].innerHTML;
    content.value = li.children[2].innerHTML?.slice(4, -3);
    isNew.value = false;
    openDialog(d0)
  };
  const handle = li.querySelector('div:first-child');
  handle.addEventListener('dragstart', (e) => {
    console.log("start", e);
    e.dataTransfer.effectAllowed = "move";
    e.dataTransfer.dropEffect = "move";
    e.dataTransfer.setDragImage(li, e.offsetX, e.offsetY);
  });
  handle.addEventListener('dragend', (e) => {
    console.log("end", e);
  });
  if (skipParent) {
    return; // only add one event to parent element
  };
  skipParent = true;
  li.parentElement.addEventListener('dragover', (e) => {
    e.preventDefault();
    //console.log(e);
  });
});
