<?php
$origin = "https://map2.pl3x.net";

$og_title = "Pl3xMap";
$og_url = "https://modrinth.com/mod/pl3xmap";
$og_image = $origin . "/images/og_large.png";
$og_large_image = true;
$og_desc = "Pl3xMap is a minimalistic and lightweight world map viewer for Minecraft servers using the vanilla Minecraft rendering style";
$og_keywords = "Minecraft, Mod, Plugin, Map, Pl3x, Pl3xMap, Dynamic, Live, LiveMap, BlueMap, Dynmap, SquareMap, Bukkit, BukkitMC, Spigot, SpigotMC, Paper, PaperMC, Purpur, PurpurMC, Fabric, FabricMC, Forge, ForgeMC, Quilt, QuiltMC";

function setOg($id, $title, $desc) {
    global $origin, $og_title, $og_url, $og_image, $og_large_image, $og_desc;
    $og_title .= " - " . $title;
    $og_url = $origin . "/" . $id;
    $og_image = $origin . "/images/og_small.png";
    $og_large_image = false;
    $og_desc = $desc;
}

$id = @$_GET["id"];
if (isset($id)) {
    switch ($id) {
        case "getting-started":
            setOg($id, "Getting Started", "Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. ");
            break;
        case "how-to-install":
            setOg($id, "How to Install", "Some short text about installation");
            break;
        case "how-to-theme":
            setOg($id, "How to Install Theme", "blah blah blah");
            break;
        case "necessary-plugins":
            setOg($id, "Necessary Plugins", "");
            break;
        case "creating-blog-pages":
            setOg($id, "Creating Blog Pages", "");
            break;
        case "revolution-slider":
            setOg($id, "Revolution Slider", "");
            break;
        case "how-to-use-optional-panel":
            setOg($id, "How to Use Option Panel", "");
            break;
        case "how-to-use-optional-panel/general-options":
            setOg($id, "How to Use Option Panel - General Options", "");
            break;
        case "how-to-use-optional-panel/style-options":
            setOg($id, "How to Use Option Panel - Style Options", "");
            break;
        case "how-to-use-optional-panel/header-options":
            setOg($id, "How to Use Option Panel - Header Options", "");
            break;
        case "how-to-use-optional-panel/font-options":
            setOg($id, "How to Use Option Panel - Font Options", "");
            break;
        case "how-to-use-optional-panel/slider-options":
            setOg($id, "How to Use Option Panel - Slider Options", "");
            break;
        case "how-to-use-optional-panel/page-options":
            setOg($id, "How to Use Option Panel - Page Options", "");
            break;
        case "how-to-use-optional-panel/import-export":
            setOg($id, "How to Use Option Panel - Import & Export", "");
            break;
        case "support-desk":
            setOg($id, "Support Desk", "");
            break;
        case "files-and-sources":
            setOg($id, "Files & Sources", "");
            break;
        case "version-history-changelog":
            setOg($id, "Version History (Changelog)", "");
            break;
        case "copyright-and-license":
            setOg($id, "Copyright and license", "");
            break;
    }
}
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title><?=$og_title?></title>

    <meta name="author" content="William Blake Galbreath">
    <meta name="description" content="<?=$og_desc?>">
    <meta name="keywords" content="<?=$og_keywords?>">

    <meta property="og:url" content="<?=$og_url?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$og_title?>">
    <meta property="og:description" content="<?=$og_desc?>">
    <?php if (isset($og_image)) {?><meta property="og:image" content="<?=$og_image?>"><?php } ?>
    <?php if ($og_large_image) {?><meta name="twitter:card" content="summary_large_image"><?php } ?>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#222222">
    <meta name="darkreader-lock" content="true">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 32x32 48x48" crossOrigin="anonymous">

    <style>
:root {
  --bg-color: #222222;
  --text-dark: #111111;
  --text-normal: #aaaaaa;
  --text-bright: #eeeeee;
  --accent-color: #0e97ee;
}
* {
    margin: 0;
    padding: 0;
    border: 0;
}
html,body {
    background: var(--bg-color);
    color: var(--text-normal);
    line-height: 31px;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.wrapper {
    max-width: 1140px;
    margin: 0 auto;
}

ul {
    list-style: none;
}

header {
    padding: 60px 0 80px;
    text-align: center;
}

header p {
    padding: 15px 0 20px;
    font-size: 21px;
    font-weight: 300;
    line-height: 1.4;
    text-transform: capitalize;
}

.inner {
    display: flex;
    min-height: 100vh;
}

.content {
    margin: 0 0 0 10px;
    flex-grow: 2;
    min-height: 200vh;
}

.content section {
    min-height: 100vh;
}

nav {
    width: 263px;
    padding: 20px 0 100px 20px;
    position: sticky;
    top: 20px;
    align-self: flex-start;
}

nav a {
    display: block;
    padding: 0 20px;
    font-size: 15px;
    line-height: 31px;
}

nav a,
nav .nav .active .nav a {
    font-weight: 400;
    border-left: 2px solid transparent;
    transition: color 0.075s linear;
}

nav .active a:hover {
    padding: 0 20px;
}

nav a:hover,
nav .nav .active .nav a:hover {
    padding: 0 20px 0 21px;
    color: var(--accent-color);
    border-left: 1px solid var(--accent-color);
}

nav .nav .active .nav a,
nav .nav .active .nav .active a:hover {
    padding: 0 20px 0 40px;
}

nav .nav .active .nav a:hover {
    padding: 0 20px 0 41px;
}

nav .active a,
nav .nav .active .nav .active a {
    font-weight: 700;
    border-left: 2px solid var(--accent-color);
}

nav .nav .nav {
    display: none;
}

nav .nav .active .nav {
    display: block;
}

#topBtn {
    pointer-events: none;
    cursor: default;
    position: fixed;
    bottom: 55px;
    right: 20px;
    height: 40px;
    width: 40px;
    font-size: 18px;
    background-color: grey;
    color: #fff;
    border-radius: 50%;
    border: none;
    outline: 0;
    z-index: 1;
    opacity: 0;
    transition: all 0.1s ease-in-out;
}

#topBtn.shown {
    pointer-events: all;
    cursor: pointer;
    opacity: 1;
}

#topBtn:hover {
    background-color: #404040;
}

h1 {
    margin: 20px 0 0;
    font-size: 48px;
    font-weight: 300;
    line-height: 1.8;
    color: var(--text-bright);
}
h2 {
    margin: 20px 0 10px;
    font-size: 41px;
    font-weight: 300;
    line-height: 41px;
    color: var(--text-bright);
}

hr {
    margin: 40px 0 0;
    border-top: 1px solid var(--text-dark);
}

hr.short {
    width: 130px;
    border-top: 1px solid var(--text-normal);
}

a {
    color: var(--text-bright);
    text-decoration: none;
}
    </style>
</head>

<body>
    <button onclick="goto()" id="topBtn" title="Go to top">
        <svg width="32" height="38" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
    </button>

    <div class="wrapper">

        <header>
            <h1>Pl3xMap Documentation</h1>
            <p>Minimalistic and lightweight world map viewer for<br>Minecraft servers using the vanilla rendering style</p>
            <hr>
        </header>

        <div class="inner">

            <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200">
                <ul class="nav">
                    <li><a href="/getting-started">Getting Started</a></li>
                    <li><a href="/how-to-install">How to Install</a></li>
                    <li><a href="/how-to-install-theme">How to Install Theme</a></li>
                    <li><a href="/necessary-plugins">Necessary Plugins</a></li>
                    <li><a href="/creating-blog-pages">Creating Blog Pages</a></li>
                    <li><a href="/revolution-slider">Revolution Slider</a></li>
                    <li><a href="/how-to-use-optional-panel">How to Use Option Panel</a>
                        <ul class="nav">
                            <li><a href="/how-to-use-optional-panel/general-options">General Options</a></li>
                            <li><a href="/how-to-use-optional-panel/style-options">Style Options</a></li>
                            <li><a href="/how-to-use-optional-panel/header-options">Header Options</a></li>
                            <li><a href="/how-to-use-optional-panel/font-options">Font Options</a></li>
                            <li><a href="/how-to-use-optional-panel/slider-options">Slider Options</a></li>
                            <li><a href="/how-to-use-optional-panel/page-options">Page Options</a></li>
                            <li><a href="/how-to-use-optional-panel/import-export">Import & Export</a></li>
                        </ul>
                    </li>
                    <li><a href="/support-desk">Support Desk</a></li>
                    <li><a href="/files-and-sources">Files & Sources</a></li>
                    <li><a href="/version-history-changelog">Version History (Changelog)</a></li>
                    <li><a href="/copyright-and-license">Copyright and license</a></li>
                </ul>
            </nav>

            <div class="content">

                <section>
                    <h2>Introduction</h2>
                    <hr class="short">
                </section>

                <section id="getting-started">
                    <h2>Getting Started</h2>
                    <hr class="short">
                </section>

                <section id="how-to-install">
                    <h2>How to Install</h2>
                    <hr class="short">
                </section>

                <section id="how-to-install-theme">
                    <h2>How to Install Theme</h2>
                    <hr class="short">
                </section>

                <section id="necessary-plugins">
                    <h2>Necessary Plugins</h2>
                    <hr class="short">
                </section>

                <section id="creating-blog-pages">
                    <h2>Creating Blog Pages</h2>
                    <hr class="short">
                </section>

                <section id="revolution-slider">
                    <h2>Revolution Slider</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel">
                    <h2>How to Use Option Panel</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/general-options">
                    <h2>General Options</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/style-options">
                    <h2>Style Options</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/header-options">
                    <h2>Header Options</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/font-options">
                    <h2>Font Options</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/slider-options">
                    <h2>Slider Options</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/page-options">
                    <h2>Page Options</h2>
                    <hr class="short">
                </section>

                <section id="how-to-use-optional-panel/import-export">
                    <h2>Import & Export</h2>
                    <hr class="short">
                </section>

                <section id="support-desk">
                    <h2>Support Desk</h2>
                    <hr class="short">
                </section>

                <section id="files-and-sources">
                    <h2>Files & Sources</h2>
                    <hr class="short">
                </section>

                <section id="version-history-changelog">
                    <h2>Version History (Changelog)</h2>
                    <hr class="short">
                </section>

                <section id="copyright-and-license">
                    <h2>Copyright and license</h2>
                    <hr class="short">
                </section>

            </div>
        </div>
    </div>

<script>
const offset = 150
const topBtn = document.getElementById('topBtn')
const sections = document.querySelectorAll('section')
const navLinks = document.querySelectorAll('nav a')
let current
setTimeout(() => goto(window.location.pathname.substring(1)), 0)
window.onscroll = function() {onScroll()}
navLinks.forEach(link => {
  link.onclick = (e) => {
    e.preventDefault()
    goto(link.getAttribute('href').substring(1))
  }
})
const setCur = debounce((cur) => {
  window.history.replaceState(null, "title", (current = cur)?.getAttribute('href') ?? '/')
})
function onScroll() {
  if (window.scrollY > 1000) {
    topBtn.classList.add('shown')
  } else {
    topBtn.classList.remove('shown')
  }
  let cur
  const links = []
  for (let i = 0; i < sections.length; i++) {
    const min = sections[i].offsetTop - offset
    const max = sections[i + 1]?.offsetTop - offset
    if (window.scrollY >= min && (isNaN(max) || window.scrollY < max)) {
      check(links, sections[i].id)
    }
  }
  navLinks.forEach(link => {
    if (links.includes(link)) {
      link?.parentElement.classList.add('active')
      cur = link
    } else {
      link?.parentElement.classList.remove('active')
    }
  })
  if (current != cur) {
    setCur(cur)
  }
}
function check(links, id) {
    links.push(document.querySelector('nav a[href$=\'' + id + '\']'))
  if (id?.includes('/')) {
    check(links, id.substring(0, id.indexOf('/')))
  }
}
function goto(id) {
  const el = id ? document.getElementById(id) : undefined
  const top = (el?.offsetTop ?? 0) - offset / 2
  window.scrollTo({top: top,behavior: 'smooth'})
  document.documentElement.scrollTo({top: top,behavior: 'smooth'})
  window.history.pushState(null, "title", "/" + (el?.id ?? ''))
}
function debounce(func, timeout = 250) {
  let timer
  return (...args) => {
    clearTimeout(timer)
    timer = setTimeout(() => func.apply(this, args), timeout)
  }
}
</script>

</body>

</html>
