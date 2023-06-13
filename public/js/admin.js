addBtn.onclick = (e) => {
  e.preventDefault();
  e.target.blur();
  pageId.value = -1;
  slug.value = '';
  title.value = '';
  description.value = '';
  content.value = '';
  isNew.value = true;
  deleteBtn.style.display = 'none';
  openDialog(d0)
};

cancelBtn.onclick = (e) => {
  e.preventDefault();
  e.target.blur();
  closeDialog(d0)
};

deleteBtn.onclick = (e) => {
  e.preventDefault();
  fakeForm('delete', pageId.value)
};

let curDrag;
pages.querySelectorAll('li.page').forEach(li => {
  li.onclick = () => {
    pageId.value = li.children[1].innerHTML;
    slug.value = li.children[3].innerHTML;
    title.value = li.children[4].innerHTML;
    description.value = li.children[5].innerHTML;
    content.value = li.children[2].innerHTML?.slice(4, -3);
    isNew.value = false;
    deleteBtn.style.display = 'block';
    openDialog(d0)
  };
  const handle = li.querySelector('div:first-child');
  handle.addEventListener('dragstart', (e) => {
    e.dataTransfer.effectAllowed = "move";
    e.dataTransfer.setDragImage(li, e.offsetX, e.offsetY);
    li.classList.add('dragging')
  });
  handle.addEventListener('dragend', () => {
    li.classList.remove('dragging');
    const pageIds = [];
    pages.querySelectorAll('li').forEach(page => {
      pageIds.push(Number(page.children[1].innerHTML))
    });
    fakeForm('pageIds', pageIds)
  });
});
pages.addEventListener('dragenter', (e) => {
  e.preventDefault()
});
pages.addEventListener('dragleave', (e) => {
  e.preventDefault()
});
pages.addEventListener('dragover', (e) => {
  e.preventDefault();
  const next = [...pages.querySelectorAll('li.page:not(.dragging)')].find(li => {
    const box = li.getBoundingClientRect();
    return e.clientY <= box.top + box.height / 2
  });
  if (curDrag !== next) {
    pages.insertBefore(document.querySelector('li.dragging'), curDrag = next)
  }
});

function fakeForm(name, value) {
  const input = document.createElement('input');
  input.setAttribute('type', 'hidden');
  input.setAttribute('name', name);
  input.setAttribute('value', value);
  const form = document.createElement('form');
  form.appendChild(input);
  form.method = 'post';
  form.action = '/admin';
  document.body.appendChild(form);
  form.submit()
};
