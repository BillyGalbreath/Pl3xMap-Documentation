<?php
$origin = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'];

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
echo $id;
if (isset($id)) {
    switch ($id) {
        case "getting-started":
            setOg($id, "Getting Started", "Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. ");
            break;
        case "how-to-install":
            setOg($id, "How to Install", "Some short text about installation");
            break;
        case "commands-and-permissions":
            setOg($id, "Commands and Permissions", "");
            break;
        case "configuration":
            setOg($id, "Configuration", "");
            break;
        case "configuration/config.yml":
            setOg($id, "Configuration - config.yml", "");
            break;
        case "configuration/colors.yml":
            setOg($id, "Configuration - colors.yml", "");
            break;
        case "configuration/player-tracker.yml":
            setOg($id, "Configuration - player-tracker.yml", "");
            break;
        case "configuration/locale":
            setOg($id, "Configuration - locale/", "");
            break;
        case "configuration/markers":
            setOg($id, "Configuration - markers/", "");
            break;
        case "addons-and-integrations":
            setOg($id, "Addons and Integrations", "");
            break;
        case "addons-and-integrations/vanishnopacket":
            setOg($id, "Addons and Integrations - VanishNoPacket", "");
            break;
        case "addons-and-integrations/chunkyborder":
            setOg($id, "Addons and Integrations - ChunkyBorder", "");
            break;
        case "addons-and-integrations/huskhomes":
            setOg($id, "Addons and Integrations - HuskHomes", "");
            break;
        case "addons-and-integrations/pl3xmap-banners":
            setOg($id, "Addons and Integrations - Pl3xMap-Banners", "");
            break;
        case "addons-and-integrations/pl3xmap-claims":
            setOg($id, "Addons and Integrations - Pl3xMap-Claims", "");
            break;
        case "addons-and-integrations/pl3xmap-mobs":
            setOg($id, "Addons and Integrations - Pl3xMap-Mobs", "");
            break;
        case "addons-and-integrations/pl3xmap-signs":
            setOg($id, "Addons and Integrations - Pl3xMap-Signs", "");
            break;
        case "addons-and-integrations/pl3xmap-warps":
            setOg($id, "Addons and Integrations - Pl3xMap-Warps", "");
            break;
        case "addons-and-integrations/deathspots":
            setOg($id, "Addons and Integrations - DeathSpots", "");
            break;
        case "internal-external-servers":
            setOg($id, "Internal and External Servers", "");
            break;
        case "world-generators":
            setOg($id, "3rd Party World Generators", "");
            break;
        case "common-questions":
            setOg($id, "Common Questions (FAQ)", "");
            break;
        case "developers":
            setOg($id, "Developers", "");
            break;
        case "developers/maven":
            setOg($id, "Developers - Maven Repo", "");
            break;
        case "developers/api":
            setOg($id, "Developers - API", "");
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

footer {
    border: 0;
    text-align: center;
    padding-bottom: 50px;
}
footer a img {
    border: 0;
    width: 80px;
    height: 15px;
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
                    <li><a href="/commands-and-permissions">Commands and Permissions</a></li>
                    <li><a href="/configuration">Configuration</a>
                        <ul class="nav">
                            <li><a href="/configuration/config.yml">config.yml</a></li>
                            <li><a href="/configuration/colors.yml">colors.yml</a></li>
                            <li><a href="/configuration/player-tracker.yml">player-tracker.yml</a></li>
                            <li><a href="/configuration/locale">locale/</a></li>
                            <li><a href="/configuration/markers">markers/</a></li>
                        </ul>
                    </li>
                    <li><a href="/addons-and-integrations">Addons and Integrations</a>
                        <ul class="nav">
                            <li><a href="/addons-and-integrations/vanishnopacket">VanishNoPacket</a></li>
                            <li><a href="/addons-and-integrations/chunkyborder">ChunkyBorder</a></li>
                            <li><a href="/addons-and-integrations/huskhomes">HuskHomes</a></li>
                            <li><a href="/addons-and-integrations/pl3xmap-banners">Pl3xMap-Banners</a></li>
                            <li><a href="/addons-and-integrations/pl3xmap-claims">Pl3xMap-Claims</a></li>
                            <li><a href="/addons-and-integrations/pl3xmap-mobs">Pl3xMap-Mobs</a></li>
                            <li><a href="/addons-and-integrations/pl3xmap-signs">Pl3xMap-Signs</a></li>
                            <li><a href="/addons-and-integrations/pl3xmap-warps">Pl3xMap-Warps</a></li>
                            <li><a href="/addons-and-integrations/deathspots">DeathSpots</a></li>
                        </ul>
                    </li>
                    <li><a href="/internal-external-servers">Internal and External Servers</a></li>
                    <li><a href="/world-generators">3rd Party World Generators</a></li>
                    <li><a href="/common-questions">Common Questions (FAQ)</a></li>
                    <li><a href="/developers">Developers</a>
                        <ul class="nav">
                            <li><a href="/developers/maven">Maven Repo</a></li>
                            <li><a href="/developers/api">API</a></li>
                        </ul>
                    </li>
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

                <section id="commands-and-permissions">
                    <h2>Commands and Permissions</h2>
                    <hr class="short">
                </section>

                <section id="configuration">
                    <h2>Configuration</h2>
                    <hr class="short">
                </section>

                <section id="configuration/config.yml">
                    <h2>config.yml</h2>
                    <hr class="short">
                </section>

                <section id="configuration/colors.yml">
                    <h2>colors.yml</h2>
                    <hr class="short">
                </section>

                <section id="configuration/player-tracker.yml">
                    <h2>player-tracker.yml</h2>
                    <hr class="short">
                </section>

                <section id="configuration/locale">
                    <h2>locale</h2>
                    <hr class="short">
                </section>

                <section id="configuration/markers">
                    <h2>markers</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations">
                    <h2>Addons and Integrations</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/vanishnopacket">
                    <h2>VanishNoPacket</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/chunkyborder">
                    <h2>ChunkyBorder</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/huskhomes">
                    <h2>HuskHomes</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/pl3xmap-banners">
                    <h2>Pl3xMap-Banners</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/pl3xmap-claims">
                    <h2>Pl3xMap-Claims</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/pl3xmap-mobs">
                    <h2>Pl3xMap-Mobs</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/pl3xmap-signs">
                    <h2>Pl3xMap-Signs</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/pl3xmap-warps">
                    <h2>Pl3xMap-Warps</h2>
                    <hr class="short">
                </section>

                <section id="addons-and-integrations/deathspots">
                    <h2>DeathSpots</h2>
                    <hr class="short">
                </section>

                <section id="internal-external-servers">
                    <h2>Internal and External Servers</h2>
                    <hr class="short">
                </section>

                <section id="world-generators">
                    <h2>3rd Party World Generators</h2>
                    <hr class="short">
                </section>

                <section id="common-questions">
                    <h2>Common Questions (FAQ)</h2>
                    <hr class="short">
                </section>

                <section id="developers">
                    <h2>Developers</h2>
                    <hr class="short">
                </section>

                <section id="developers/maven">
                    <h2>Maven Repo</h2>
                    <hr class="short">
                </section>

                <section id="developers/api">
                    <h2>API</h2>
                    <hr class="short">
                </section>

            </div>
        </div>
    </div>

    <footer>
        <p>
            <a href="https://html5.validator.nu/?doc=<?=urlencode($origin)?>" target="_blank">
                <img src="/images/valid_html5.webp" title="Valid HTML 5" alt="Valid HTML 5">
            </a>
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?=urlencode($origin)?>" target="_blank">
                <img src="/images/valid_css3.webp" title="Valid CSS 3" alt="Valid CSS 3">
            </a>
            <a href="https://html5.validator.nu/?doc=<?=urlencode($origin)?>" target="_blank">
                <img src="/images/valid_svg11.webp" title="Valid SVG 1.1" alt="Valid SVG 1.1">
            </a>
        </p>
        <p>Copyright &copy; 2020-2023 William Blake Galbreath</p>
    </footer>

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
