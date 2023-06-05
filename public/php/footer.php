<?php

if (!defined('PL3XMAP')) {
  header('location: /');
  die();
}

?>
    </div>
  </div>
  <footer>
    <p>
      <a href="https://html5.validator.nu/?doc=<?=$origin_encoded?>" target="_blank"><img src="/images/valid_html5.webp" title="Valid HTML 5" alt="Valid HTML 5"></a>
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?=$origin_encoded?>" target="_blank"><img src="/images/valid_css3.webp" title="Valid CSS 3" alt="Valid CSS 3"></a>
      <a href="https://html5.validator.nu/?doc=<?=$origin_encoded?>" target="_blank"><img src="/images/valid_svg11.webp" title="Valid SVG 1.1" alt="Valid SVG 1.1"></a>
    </p>
    <p>Copyright &copy; 2020-2023 William Blake Galbreath</p>
  </footer>
  <div id="pi"><?=$logged_in ? 'X' : '&pi;'?></div>
