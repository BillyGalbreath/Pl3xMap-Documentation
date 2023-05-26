<?php

if (!defined('PL3XMAP')) {
  header('Location: /');
  die();
}

include('php/origin.php');
include('php/db.php');

$og_title = 'Pl3xMap';
$og_url = $origin . '/';
$og_image = $origin . '/images/og_large.png';
$og_large_image = true;
$og_desc = 'Pl3xMap is a minimalistic and lightweight world map viewer for Minecraft servers using the vanilla Minecraft rendering style';
$og_keywords = 'Minecraft, Mod, Plugin, Map, Pl3x, Pl3xMap, Dynamic, Live, LiveMap, BlueMap, Dynmap, SquareMap, Bukkit, BukkitMC, Spigot, SpigotMC, Paper, PaperMC, Purpur, PurpurMC, Fabric, FabricMC, Forge, ForgeMC, Quilt, QuiltMC';

function setOg($id, $title, $desc) {
  global $origin, $og_title, $og_url, $og_image, $og_large_image, $og_desc;
  $og_title .= ' - ' . $title;
  $og_url .= $id;
  $og_image = $origin . '/images/og_small.png';
  $og_large_image = false;
  $og_desc = $desc;
}

$id = @$_GET['id'];
if (isset($id)) {
  switch ($id) {
    case 'getting-started':
      setOg($id, 'Getting Started', 'Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. Testing some description for the og embeds. ');
      break;
    case 'how-to-install':
      setOg($id, 'How to Install', 'Some short text about installation');
      break;
    case 'commands-and-permissions':
      setOg($id, 'Commands and Permissions', '');
      break;
    case 'configuration':
      setOg($id, 'Configuration', '');
      break;
    case 'configuration/config.yml':
      setOg($id, 'Configuration - config.yml', '');
      break;
    case 'configuration/colors.yml':
      setOg($id, 'Configuration - colors.yml', '');
      break;
    case 'configuration/player-tracker.yml':
      setOg($id, 'Configuration - player-tracker.yml', '');
      break;
    case 'configuration/locale':
      setOg($id, 'Configuration - locale/', '');
      break;
    case 'configuration/markers':
      setOg($id, 'Configuration - markers/', '');
      break;
    case 'addons-and-integrations':
      setOg($id, 'Addons and Integrations', '');
      break;
    case 'addons-and-integrations/vanishnopacket':
      setOg($id, 'Addons and Integrations - VanishNoPacket', '');
      break;
    case 'addons-and-integrations/chunkyborder':
      setOg($id, 'Addons and Integrations - ChunkyBorder', '');
      break;
    case 'addons-and-integrations/huskhomes':
      setOg($id, 'Addons and Integrations - HuskHomes', '');
      break;
    case 'addons-and-integrations/pl3xmap-banners':
      setOg($id, 'Addons and Integrations - Pl3xMap-Banners', '');
      break;
    case 'addons-and-integrations/pl3xmap-claims':
      setOg($id, 'Addons and Integrations - Pl3xMap-Claims', '');
      break;
    case 'addons-and-integrations/pl3xmap-mobs':
      setOg($id, 'Addons and Integrations - Pl3xMap-Mobs', '');
      break;
    case 'addons-and-integrations/pl3xmap-signs':
      setOg($id, 'Addons and Integrations - Pl3xMap-Signs', '');
      break;
    case 'addons-and-integrations/pl3xmap-warps':
      setOg($id, 'Addons and Integrations - Pl3xMap-Warps', '');
      break;
    case 'addons-and-integrations/deathspots':
      setOg($id, 'Addons and Integrations - DeathSpots', '');
      break;
    case 'internal-external-servers':
      setOg($id, 'Internal and External Servers', '');
      break;
    case 'world-generators':
      setOg($id, '3rd Party World Generators', '');
      break;
    case 'common-questions':
      setOg($id, 'Common Questions (FAQ)', '');
      break;
    case 'developers':
      setOg($id, 'Developers', '');
      break;
    case 'developers/maven':
      setOg($id, 'Developers - Maven Repo', '');
      break;
    case 'developers/api':
      setOg($id, 'Developers - API', '');
      break;
  }
}
