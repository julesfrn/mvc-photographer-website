<a href="/"><h1 class="menu__title">Martin <span>Bruno</span></h1></a>
<div class="menu__burger-wrapper">
  <img src="/public/pictos/burger.png">
</div>
<nav class="menu__nav">
  <ul>
    <li><a href="">Index</a></li>
    <li><a href="#">Books</a></li>
    <li><a href="?action=showAbout">Infos</a></li>
  </ul>
</nav>
<?php if ($shouldShowSocials === true) { ?>
<ul class="menu__pictos">
  <li>
    <a href="#">
      <canvas id="wave"></canvas>
    </a>
  </li>
  <li>
    <a href="https://www.instagram.com/martinbrunophoto/" target="_blank">
      <img src="/public/pictos/insta.png" alt="réseau social instagram">
    </a>
  </li>
</ul>
<?php } ?>
