<?php

define('PL3XMAP', true);

require_once(__DIR__ . '/php/setup.php');

if (!$logged_in) {
  header('location: /');
  die();
}

$isAdmin = true;
$og['title'] .= ' - Admin';

if (count($_POST) > 0) {
  if (isset($_POST['isNew'])) {
    var_dump($_POST);
    if (filter_var($_POST['isNew'], FILTER_VALIDATE_BOOLEAN)) {
      sql('INSERT INTO `content` (`order`, `slug`, `title`, `description`, `content`) VALUES (?, ?, ?, ?, ?);', 'issss',
        count($sections) + 1, $_POST['slug'], $_POST['title'], $_POST['description'], $_POST['content']);
    } else {
      $row = sql('UPDATE `content` SET `slug` = ?, `title` = ?, `description` = ?, `content` = ? WHERE `id` = ?;', 'ssssi',
        $_POST['slug'], $_POST['title'], $_POST['description'], $_POST['content'], filter_var($_POST['pageId'], FILTER_VALIDATE_INT));
        var_dump($row);
    }
  } else if (isset($_POST['pageIds'])) {
    $pageIds = json_decode('[' . $_POST['pageIds'] . ']', true);
    for($i = 0; $i < count($pageIds); $i++) {
      sql('UPDATE `content` SET `order` = ? WHERE `id` = ?;', 'ii', $i + 1, $pageIds[$i]);
    }
  } else if (isset($_POST['delete'])) {
    sql('DELETE FROM `content` WHERE `id` = ?', 'i', filter_var($_POST['delete'], FILTER_VALIDATE_INT));
  }
  header('HTTP/1.1 303 See Other');
  header('location: /admin');
  die();
}

require_once(__DIR__ . '/php/header.php');
?>
      <dialog id="d0">
        <form method="post" action="/admin">
          <input type="hidden" id="isNew" name="isNew" value="false">
          <input type="hidden" id="pageId" name="pageId" value="-1">
          <label><span>Slug:</span><input type="text" id="slug" name="slug" autocomplete="off"></label>
          <label><span>Title:</span><input type="text" id="title" name="title" autocomplete="off"></label>
          <label><span>Desc:</span><input type="text" id="description" name="description" autocomplete="off"></label>
          <label><span>Content:</span><textarea id="content" name="content"></textarea></label>
          <div class="buttons"><button id="cancelBtn"><span>Cancel</span></button><button id="deleteBtn"><span>Delete</span></button><button id="saveBtn"><span>Save</span></button></div>
        </form>
        <svg viewBox="0 0 32 32"><path stroke="#000000" stroke-width="2" stroke-linecap="round" d="M1 30 30 1M16 30 30 16"/></svg>
      </dialog>
      <div class="content">
        <div class="buttons"><div></div><button id="addBtn"><svg viewBox="0 0 1024 1024"><path d="M467.627 468H235.489c-24.3 0-44 19.7-44 44s19.7 44 44 44h232.138v232.138c0 24.3 19.7 44 44 44s44-19.7 44-44V556h232.138c24.3 0 44-19.7 44-44s-19.7-44-44-44H555.627V235.862c0-24.3-19.7-44-44-44s-44 19.7-44 44V468zM512 1024C229.23 1024 0 794.77 0 512S229.23 0 512 0s512 229.23 512 512-229.23 512-512 512z"/></svg><span>Add New</span></button></div>
        <ul id="pages">
<?php
foreach ($sections as $section) {
?>
          <li class="page" id="<?=$section['slug']?>">
            <div draggable="true"><svg viewBox="0 0 24 24"><path d="M3 15h18M3 9h18" stroke="#000" stroke-width="2" stroke-linecap="round"/></svg></div>
            <div style='display:none'><?=$section['id']?></div>
            <div style='display:none'><!--<?=$section['content']?>--></div>
            <div><?=$section['slug']?></div>
            <div><?=$section['title']?></div>
            <div><?=$section['description']?></div>
          </li>
<?php
}
?>
        </ul>
      </div>
<?php
require_once(__DIR__ . '/php/footer.php');
?>
  <script><?php
ob_start('minify_js');
echo 'setTimeout(() => go(window.location.pathname.split(\'/admin/\')[1], \'admin\'), 0);';
echo 'const logged_in = ' . ($logged_in ? 'true' : 'false') . ';';
require_once(__DIR__ . '/js/admin.js');
require_once(__DIR__ . '/js/common.js');
ob_end_flush();
?></script>
</body>
</html>
