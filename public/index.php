<?php

define('PL3XMAP', true);

include('php/header.php');

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
<?php

include('index.css');

?>
    </style>
</head>

<body>
    <button onclick="goto()" id="topBtn" title="Go to top"><svg width="32" height="38" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg></button>

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

    <p id="pi">&pi;</p>

    <dialog id="d1"><form method="post" action="/"><input type="text" name="pl3x"><br><input type="password" name="map"><input type="submit" hidden></form></dialog>
    <dialog id="d2"><form method="post" action="/"><input type="text" name="pl3x"><br><input type="password" name="map"><br><input type="password" name="v3"><input type="submit" hidden></form></dialog>

    <script>
<?php

include('index.js');

?>
    </script>

</body>

</html>
