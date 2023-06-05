<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

$openli = false;
$subnav = false;
echo '      <nav class="docs-sidebar">' . "\n";
echo '        <ul class="nav">' . "\n";
foreach ($sections as $section) {
  if ($section['slug'] === 'introduction') {
    continue;
  }
  if (str_contains($section['slug'], '/')) {
    if (!$subnav) {
      $subnav = true;
      echo "\n" . '            <ul class="subnav">' . "\n";
    }
    echo '              <li><a href="/' . $section['slug'] . '">' . $section['title'] . '</a></li>' . "\n";
  } else {
    if ($subnav) {
      $subnav = false;
      echo '            </ul>' . "\n";
    }
    if ($openli) {
      echo '</li>' . "\n";
    }
    echo '          <li><a href="/' . $section['slug'] . '">' . $section['title'] . '</a>';
    $openli = true;
  }
}
if ($subnav) {
  echo '            </ul>' . "\n";
  echo '          </li>' . "\n";
}
echo '        </ul>' . "\n";
echo '      </nav>' . "\n";
