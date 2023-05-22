<?php
$id = @$_GET["id"];
if (isset($id)) {
    $id = preg_replace("/[^a-zA-Z0-9._-]+/", "", str_replace("/", "_", $id));
}

$origin = "https://map2.pl3x.net";

$og_title = "Pl3xMap";
$og_url = "https://modrinth.com/mod/pl3xmap";
$og_image = "https://raw.githubusercontent.com/BillyGalbreath/Pl3xMap/v3/webmap/public/images/og.png";
$og_desc = "Pl3xMap is a minimalistic and lightweight world map viewer for Minecraft servers using the vanilla Minecraft rendering style";
$og_keywords = "Minecraft, Mod, Plugin, Map, Pl3x, Pl3xMap, Dynamic, Live, LiveMap, BlueMap, Dynmap, SquareMap, Bukkit, BukkitMC, Spigot, SpigotMC, Paper, PaperMC, Purpur, PurpurMC, Fabric, FabricMC, Forge, ForgeMC, Quilt, QuiltMC";
?><!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">

    <meta name="darkreader-lock" content="true">

    <title><?=$og_title?></title>

    <meta name="author" content="BillyGalbreath">
    <meta name="description" content="<?=$og_desc?>">
    <meta name="keywords" content="<?=$og_keywords?>">

    <meta property="og:url" content="<?=$og_url?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$og_title?>">
    <meta property="og:description" content="<?=$og_desc?>">
    <meta property="og:image" content="<?=$og_image?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?=str_replace(array("https://", "http://"), "", $og_url)?>">
    <meta property="twitter:url" content="<?=$og_url?>">
    <meta name="twitter:title" content="<?=$og_title?>">
    <meta name="twitter:description" content="<?=$og_desc?>">
    <meta name="twitter:image" content="<?=$og_image?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#222222">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 32x32 48x48" crossOrigin="anonymous">

    <style>
.modal-open,.sr-only,svg:not(:root){overflow:hidden}pre,textarea{overflow:auto}.text-left,caption,th{text-align:left}.btn,.text-nowrap{white-space:nowrap}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.pre-scrollable{max-height:340px}html{font-family:sans-serif;}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev,.media-object,.navbar-brand>img,.open>.dropdown-menu,article,aside,details,figcaption,figure,footer,header,hgroup,input[type=file],main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}.badge:empty,.label:empty,[hidden],template{display:none}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle,.dropdown-toggle:focus,.navbar-toggle:focus,.open>a,a:active,a:hover{outline:0}.alert .alert-link,b,dt,optgroup,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0}mark{color:#000;background:#ff0}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}.btn,.btn-group,.btn-group-vertical,.caret,.checkbox-inline,.radio-inline,img{vertical-align:middle}sup{top:-.5em}sub{bottom:-.25em}img{border:0}hr{height:0;box-sizing:content-box}*,:after,:before,input[type=checkbox],input[type=radio]{box-sizing:border-box;}code,kbd,pre,samp{font-size:1em}button{box-shadow:none!important;overflow:visible}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}.glyphicon,address{font-style:normal}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::focus-inner,input::focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::inner-spin-button,input[type=number]::outer-spin-button{height:auto}input[type=search]{box-sizing:content-box;appearance:textfield;}input[type=search]::search-cancel-button,input[type=search]::search-decoration{appearance:none}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{blockquote,img,pre,tr{page-break-inside:avoid}*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}blockquote,pre{border:1px solid #999}thead{display:table-header-group}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff!important}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}.dropdown-menu,.modal-content{background-clip:padding-box;-webkit-background-clip:padding-box}.btn,.btn-danger.active,.btn-danger:active,.btn-default.active,.btn-default:active,.btn-info.active,.btn-info:active,.btn-primary.active,.btn-primary:active,.btn-success.active,.btn-success:active,.btn-warning.active,.btn-warning:active,.btn.active,.btn:active,.form-control,.navbar-toggle,.open>.dropdown-toggle.btn-danger,.open>.dropdown-toggle.btn-default,.open>.dropdown-toggle.btn-info,.open>.dropdown-toggle.btn-primary,.open>.dropdown-toggle.btn-success,.open>.dropdown-toggle.btn-warning{background-image:none}@font-face{font-family:'Glyphicons Halflings';src:url('../fonts/glyphicons-halflings-regular.eot');src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'),url('../fonts/glyphicons-halflings-regular.woff') format('woff'),url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.img-thumbnail,body{line-height:1.42857143;background-color:#fff}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*,:after,:before{box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{margin:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;color:#333}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{background-color:transparent;color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus,input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}figure{margin:0}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.img-thumbnail,.list-inline>li,label{display:inline-block}.container .jumbotron,.container-fluid .jumbotron,.img-rounded{border-radius:6px}.img-thumbnail{max-width:100%;height:auto;padding:4px;border:1px solid #ddd;border-radius:4px;-webkit-transition:.2s ease-in-out;-o-transition:.2s ease-in-out;transition:.2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}.carousel,.checkbox,.dropdown,.dropup,.has-feedback,.input-group-btn>.btn,.radio{position:relative}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}legend,pre{color:#333}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}kbd kbd,label{font-weight:700}address,blockquote .small,blockquote footer,blockquote small,dd,dt,pre{line-height:1.42857143}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,.navbar-btn.btn-sm,h4,h5,h6{margin-top:10px;margin-bottom:10px}dl,ol,ul{margin-top:0}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}.small,small{font-size:85%}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-inline,.list-unstyled,.media-list{padding-left:0;list-style:none}pre code,table{background-color:transparent}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.breadcrumb>.active,.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover,.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.nav>li.disabled>a,.navbar-default .btn-link,.navbar-default .navbar-brand,.navbar-default .navbar-link,.navbar-default .navbar-nav>li>a,.navbar-default .navbar-text,.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:hover{color:#286090}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .form-control-feedback,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label,.text-success,a.list-group-item-success{color:#3c763d}.alert-success .alert-link,a.text-success:hover{color:#2b542c}.text-info,a.list-group-item-info{color:#31708f}.alert-info .alert-link,a.text-info:hover{color:#245269}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .form-control-feedback,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label,.text-warning,a.list-group-item-warning{color:#8a6d3b}.alert-warning .alert-link,a.text-warning:hover{color:#66512c}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .form-control-feedback,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label,.text-danger,a.list-group-item-danger{color:#a94442}.alert-danger .alert-link,a.text-danger:hover{color:#843534}.bg-primary,.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover,a.bg-primary:hover{background-color:#286090}.bg-success,.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}a.bg-success:hover{background-color:#c1e2b3}.bg-info,.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}a.bg-info:hover{background-color:#afd9ee}.bg-warning,.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}a.bg-warning:hover{background-color:#f7ecb5}.bg-danger,.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.btn-default,.form-control,.navbar-inverse .navbar-toggle .icon-bar,.table .table{background-color:#fff}a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}.table,address,dl,legend{margin-bottom:20px}ol,ul{margin-bottom:10px}.alert>p,.alert>ul,.panel>.list-group,.panel>.panel-collapse>.list-group,.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table,blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child,ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.list-inline{margin-left:-5px}.list-inline>li{padding-right:5px;padding-left:5px}legend,pre{display:block}.btn .caret,.btn-group>.btn:first-child,.col-xs-offset-0,.modal-footer .btn-block+.btn-block,dd{margin-left:0}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}code,kbd{padding:2px 4px;font-size:90%}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;-webkit-box-shadow:none;box-shadow:none}pre{padding:9.5px;margin:0 0 10px;font-size:13px;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;border-radius:0}.pre-scrollable{overflow-y:scroll}.container,.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header,.form-horizontal .form-group,.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.btn-group>.btn-group,.btn-toolbar .btn-group,.btn-toolbar .input-group,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.nav-pills>li,.pager .previous>a,.pager .previous>span{float:left}.btn-group-justified>.btn-group .btn,.col-xs-12,.nav-justified,input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.carousel-inner>.active.right,.carousel-inner>.next,.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.btn-group-justified>.btn-group .dropdown-menu,.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.caret,.nav-pills>li+li{margin-left:2px}table{border-spacing:0;border-collapse:collapse}caption{padding-top:8px;padding-bottom:8px;color:#777}.table{width:100%;max-width:100%}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.panel-group .panel-footer,.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th,.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover,.table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}fieldset,legend{padding:0;border:0}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover,.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{min-width:0;margin:0}legend{width:100%;font-size:21px;line-height:inherit;border-bottom:1px solid #e5e5e5}.form-control,output{font-size:14px;line-height:1.42857143;color:#555}label{max-width:100%;margin-bottom:5px}input[type=search]{box-sizing:border-box;appearance:none;}input[type=checkbox],input[type=radio]{margin:4px 0 0;line-height:normal}.btn-block,input[type=range]{display:block;width:100%}select[multiple],select[multiple].form-group-lg .form-control,select[multiple].form-group-sm .form-control,select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,select[multiple].input-lg,select[multiple].input-sm,select[size],textarea.form-control,textarea.form-group-lg .form-control,textarea.form-group-sm .form-control,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn,textarea.input-lg,textarea.input-sm{height:auto}output{display:block;padding-top:7px}.form-control{display:block;width:100%;height:34px;padding:6px 12px;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;-o-transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::input-placeholder{color:#999}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee;opacity:1}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date],input[type=datetime-local],input[type=month],input[type=time]{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],.input-group-sm input[type=time],input[type=date].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm,input[type=time].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],.input-group-lg input[type=time],input[type=date].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg,input[type=time].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}.checkbox-inline.disabled,.checkbox.disabled label,.radio-inline.disabled,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio label,fieldset[disabled] .radio-inline,fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.form-group-sm .form-control,.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn,.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.form-group-sm .form-control,select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn,select.input-sm{height:30px;line-height:30px}.form-group-sm .form-control-static{height:30px;padding:5px 10px;font-size:12px;line-height:1.5}.form-group-lg .form-control,.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn,.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.form-group-lg .form-control,select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn,select.input-lg{height:46px;line-height:46px}.form-group-lg .form-control-static{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .has-feedback .form-control-feedback{right:15px}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;border-radius:4px}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{pointer-events:none;cursor:not-allowed;-webkit-box-shadow:none;box-shadow:none;opacity:.65}.btn-default{color:#333;border-color:#ccc}.btn-default.active,.btn-default.focus,.btn-default:active,.btn-default:focus,.btn-default:hover,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.disabled,.btn-default.disabled.active,.btn-default.disabled.focus,.btn-default.disabled:active,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled],.btn-default[disabled].active,.btn-default[disabled].focus,.btn-default[disabled]:active,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default,fieldset[disabled] .btn-default.active,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:active,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.active,.btn-primary.focus,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.disabled,.btn-primary.disabled.active,.btn-primary.disabled.focus,.btn-primary.disabled:active,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled],.btn-primary[disabled].active,.btn-primary[disabled].focus,.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-primary.active,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:active,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge,.list-group-item.active>.badge,.nav-pills>.active>a>.badge,.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.active,.btn-success.focus,.btn-success:active,.btn-success:focus,.btn-success:hover,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.disabled,.btn-success.disabled.active,.btn-success.disabled.focus,.btn-success.disabled:active,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled],.btn-success[disabled].active,.btn-success[disabled].focus,.btn-success[disabled]:active,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success,fieldset[disabled] .btn-success.active,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:active,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.active,.btn-info.focus,.btn-info:active,.btn-info:focus,.btn-info:hover,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.disabled,.btn-info.disabled.active,.btn-info.disabled.focus,.btn-info.disabled:active,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled],.btn-info[disabled].active,.btn-info[disabled].focus,.btn-info[disabled]:active,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info,fieldset[disabled] .btn-info.active,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:active,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.active,.btn-warning.focus,.btn-warning:active,.btn-warning:focus,.btn-warning:hover,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.disabled,.btn-warning.disabled.active,.btn-warning.disabled.focus,.btn-warning.disabled:active,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled],.btn-warning[disabled].active,.btn-warning[disabled].focus,.btn-warning[disabled]:active,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning,fieldset[disabled] .btn-warning.active,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:active,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.active,.btn-danger.focus,.btn-danger:active,.btn-danger:focus,.btn-danger:hover,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.disabled,.btn-danger.disabled.active,.btn-danger.disabled.focus,.btn-danger.disabled:active,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled],.btn-danger[disabled].active,.btn-danger[disabled].focus,.btn-danger[disabled]:active,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger,fieldset[disabled] .btn-danger.active,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:active,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-group-sm>.btn,.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.alert>p+p,.btn-block+.btn-block,.panel-group .panel+.panel{margin-top:5px}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse,.tab-content>.tab-pane{display:none;visibility:hidden}.collapse.in,.tab-content>.active{display:block;visibility:visible}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;border-top:4px solid;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-header,.dropdown-menu>li>a{padding:3px 20px;white-space:nowrap;display:block;line-height:1.42857143}.dropdown-menu-right,.dropdown-menu.pull-right,.pull-right>.dropdown-menu{right:0;left:auto}.dropdown-menu .divider,.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.alert h4,.input-group-addon input[type=checkbox],.input-group-addon input[type=radio],.media:first-child{margin-top:0}.dropdown-menu>li>a{clear:both;font-weight:400;color:#333}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none}.dropdown-menu-left{right:auto;left:0}.dropdown-header{font-size:12px;color:#777}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.btn-group,.btn-group-vertical,.input-group,.input-group .form-control,.input-group-btn,.nav>li,.nav>li>a,.navbar{position:relative}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px solid}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}.btn-group,.btn-group-vertical{display:inline-block}.btn-group-justified,.input-group{display:table;border-collapse:separate}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;float:left}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover,.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group,.input-group-btn>.btn+.btn,.modal-footer .btn-group .btn+.btn{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn,.btn-group-vertical>.btn:not(:first-child):not(:last-child),.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn,.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle),.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle,.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle),.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child,.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child),.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn-lg .caret{border-width:5px 5px 0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn,.nav-justified>li,.nav-stacked>li,.nav-tabs.nav-justified>li{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{width:100%;table-layout:fixed}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon:first-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.input-group-addon:last-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.input-group-btn{font-size:0;white-space:nowrap}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{display:block}.nav>li>a{display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover,.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav>li>a>img{max-width:none}.nav-tabs,.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs-justified>li>a,.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu,.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}.nav-pills>li>a{border-radius:4px}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs-justified,.panel-group .panel-heading,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{min-height:50px;margin-bottom:20px;border:1px solid transparent}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (max-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.navbar-static-top{z-index:1000;border-width:0 0 1px}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px;font-size:18px;line-height:20px}.badge,.label{line-height:1;white-space:nowrap;vertical-align:baseline;font-weight:700}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}.breadcrumb>li,.pagination{display:inline-block}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}.navbar-form{padding:10px 15px;margin:8px -15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-radius:4px 4px 0 0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:#000}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle,.panel-default{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover,.navbar-default .navbar-link:hover,a.list-group-item .list-group-item-heading{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .btn-link,.navbar-inverse .navbar-brand,.navbar-inverse .navbar-link,.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover,.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.pager,.pagination{padding-left:0;margin:20px 0}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.pagination{border-radius:4px}.label,.pager li,.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.nav-pills>li>a>.badge,.tooltip.right{margin-left:3px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:2;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{text-align:center;list-style:none}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.list-group-item>.badge,.pager .next>a,.pager .next>span{float:right}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{padding:.2em .6em .3em;font-size:75%;color:#fff;text-align:center;border-radius:.25em}.badge,.progress-bar{font-size:12px;text-align:center}a.badge:focus,a.badge:hover,a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.btn .badge,.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-success,.progress-bar-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info,.progress-bar-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning,.progress-bar-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger,.progress-bar-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;color:#fff;background-color:#777;border-radius:10px}.jumbotron,.jumbotron .h1,.jumbotron h1,.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.panel-heading>.dropdown .dropdown-toggle,.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a,a.list-group-item-danger .list-group-item-heading,a.list-group-item-info .list-group-item-heading,a.list-group-item-success .list-group-item-heading,a.list-group-item-warning .list-group-item-heading{color:inherit}.btn-xs .badge{top:0;padding:1px 5px}.list-group-item>.badge+.badge{margin-right:5px}.jumbotron{padding:30px 15px;margin-bottom:30px;background-color:#eee}.alert,.progress,.thumbnail{margin-bottom:20px}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.jumbotron .container{max-width:100%}.thumbnail{display:block;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail a>img,.thumbnail>img{margin-right:auto;margin-left:auto}.panel-primary,a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;border:1px solid transparent;border-radius:4px}.alert h4{color:inherit}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success,.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-info,.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-warning,.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-danger,.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;line-height:20px;color:#fff;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s;-o-transition:width .6s;transition:width .6s}.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress-bar.active,.progress.active .progress-bar{-webkit-animation:2s linear infinite progress-bar-stripes;-o-animation:2s linear infinite progress-bar-stripes;animation:2s linear infinite progress-bar-stripes}.progress-striped .progress-bar-danger,.progress-striped .progress-bar-info,.progress-striped .progress-bar-success,.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media,.media-body{overflow:hidden;transform:scale(1);transform-origin:0 0}.media-body{width:10000px}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.list-group-item-heading,.media-heading{margin-top:0;margin-bottom:5px}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item{color:#555}a.list-group-item:focus,a.list-group-item:hover{color:#555;text-decoration:none;background-color:#f5f5f5}.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success:focus,a.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info:focus,a.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning:focus,a.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger:focus,a.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-text{margin-bottom:0;line-height:1.3}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.close{line-height:1}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-footer,.well{background-color:#f5f5f5}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-group,.well{margin-bottom:20px}.panel-footer{padding:10px 15px;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.list-group+.panel-footer,.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body,.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;color:#000;text-shadow:0 1px 0 #fff;opacity:.2}.carousel-caption,.carousel-control{text-shadow:0 1px 2px rgba(0,0,0,.6)}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.5}.modal-backdrop.fade,.tooltip{opacity:0}button.close{appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0;background-color:rgba(255,355,255,.9)}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:800px;margin:10px}.modal-content{position:relative;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:absolute;top:0;right:0;left:0;background-color:#000}.modal-backdrop.in{opacity:.5}.modal-header{min-height:16.42857143px;padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.lead{font-size:21px}.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}.container{width:750px}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.navbar-header,.navbar-nav>li{float:left}.col-sm-12,.form-inline .input-group>.form-control,.navbar-form .input-group>.form-control{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}.form-inline .form-control-static,.form-inline .form-group,.navbar-form .form-control-static,.navbar-form .form-group{display:inline-block}.form-inline .control-label,.form-inline .form-group,.navbar-form .control-label,.navbar-form .form-group{margin-bottom:0;vertical-align:middle}.form-inline .form-control,.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .input-group,.navbar-form .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.form-inline .checkbox,.form-inline .radio,.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label,.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio],.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback,.navbar-form .has-feedback .form-control-feedback{top:0}.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}.form-horizontal .form-group-lg .control-label{padding-top:14.333333px}.form-horizontal .form-group-sm .control-label{padding-top:6px}.navbar-right .dropdown-menu{right:auto;left:-10px}.navbar-right .dropdown-menu-left{right:auto;left:0}.nav-justified>li,.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0;border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}.nav-justified>li>a{margin-bottom:0}.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.navbar{border-radius:4px}.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important;visibility:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}.navbar-fixed-bottom,.navbar-fixed-top,.navbar-static-top{border-radius:0}.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}.navbar-toggle{display:none}.navbar-nav{float:left;margin:0}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-text{float:left;margin-right:15px;margin-left:15px}.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.container{width:970px}.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-size:12px;font-weight:400;line-height:1.4;visibility:visible}.tooltip.in{opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;text-transform:uppercase;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow,.tooltip.top-left .tooltip-arrow,.tooltip.top-right .tooltip-arrow{border-width:5px 5px 0;border-top-color:#000;bottom:0}.tooltip.top .tooltip-arrow{left:50%;margin-left:-5px}.tooltip.top-left .tooltip-arrow{right:5px;margin-bottom:-5px}.tooltip.top-right .tooltip-arrow{left:5px;margin-bottom:-5px}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow,.tooltip.bottom-left .tooltip-arrow,.tooltip.bottom-right .tooltip-arrow{border-width:0 5px 5px;border-bottom-color:#000;top:0}.tooltip.bottom .tooltip-arrow{left:50%;margin-left:-5px}.tooltip.bottom-left .tooltip-arrow{right:5px;margin-top:-5px}.tooltip.bottom-right .tooltip-arrow{left:5px;margin-top:-5px}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.42857143;text-align:left;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:left .6s ease-in-out;-o-transition:left .6s ease-in-out;transition:left .6s ease-in-out}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.active.left,.carousel-inner>.prev{left:-100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;margin-top:-10px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}.carousel-caption .btn,.text-hide{text-shadow:none}@media screen and (min-width:768px){.jumbotron{padding:48px 0}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-15px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-15px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-15px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide,.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-print,.visible-print-block,.visible-print-inline,.visible-print-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;background-color:transparent;border:0}.hidden{display:none!important;visibility:hidden!important}.affix{position:fixed}@-ms-viewport{width:device-width}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}.visible-xs,.visible-xs-block{display:block!important}table.visible-xs{display:table}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}.visible-xs-inline{display:inline!important}.visible-xs-inline-block{display:inline-block!important}.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.visible-sm,.visible-sm-block{display:block!important}table.visible-sm{display:table}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}.visible-sm-inline{display:inline!important}.visible-sm-inline-block{display:inline-block!important}.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.visible-md,.visible-md-block{display:block!important}table.visible-md{display:table}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}.visible-md-inline{display:inline!important}.visible-md-inline-block{display:inline-block!important}.hidden-md{display:none!important}}@media (min-width:1200px){.container{width:1170px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}.visible-lg,.visible-lg-block{display:block!important}table.visible-lg{display:table}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}.visible-lg-inline{display:inline!important}.visible-lg-inline-block{display:inline-block!important}.hidden-lg{display:none!important}}@media print{.visible-print,.visible-print-block{display:block!important}table.visible-print{display:table}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}.visible-print-inline{display:inline!important}.visible-print-inline-block{display:inline-block!important}.hidden-print{display:none!important}}
    </style>

    <style>
.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.hinge{-webkit-animation-duration:2s;animation-duration:2s}@-webkit-keyframes bounce{0%,100%,20%,50%,80%{-webkit-transform:translateY(0);transform:translateY(0)}40%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}60%{-webkit-transform:translateY(-15px);transform:translateY(-15px)}}@keyframes bounce{0%,100%,20%,50%,80%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}40%{-webkit-transform:translateY(-30px);-ms-transform:translateY(-30px);transform:translateY(-30px)}60%{-webkit-transform:translateY(-15px);-ms-transform:translateY(-15px);transform:translateY(-15px)}}.bounce{-webkit-animation-name:bounce;animation-name:bounce}@-webkit-keyframes flash{0%,100%,50%{opacity:1}25%,75%{opacity:0}}@keyframes flash{0%,100%,50%{opacity:1}25%,75%{opacity:0}}.flash{-webkit-animation-name:flash;animation-name:flash}@-webkit-keyframes pulse{0%,100%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}}@keyframes pulse{0%,100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1)}}.pulse{-webkit-animation-name:pulse;animation-name:pulse}@-webkit-keyframes shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}20%,40%,60%,80%{-webkit-transform:translateX(10px);transform:translateX(10px)}}@keyframes shake{0%,100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);-ms-transform:translateX(-10px);transform:translateX(-10px)}20%,40%,60%,80%{-webkit-transform:translateX(10px);-ms-transform:translateX(10px);transform:translateX(10px)}}.shake{-webkit-animation-name:shake;animation-name:shake}@-webkit-keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}100%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes swing{20%{-webkit-transform:rotate(15deg);-ms-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);-ms-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);-ms-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);-ms-transform:rotate(-5deg);transform:rotate(-5deg)}100%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}}.swing{-webkit-transform-origin:top center;-ms-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}@-webkit-keyframes tada{0%{-webkit-transform:scale(1);transform:scale(1)}10%,20%{-webkit-transform:scale(.9) rotate(-3deg);transform:scale(.9) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}40%,60%,80%{-webkit-transform:scale(1.1) rotate(-3deg);transform:scale(1.1) rotate(-3deg)}100%{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0)}}@keyframes tada{0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}10%,20%{-webkit-transform:scale(.9) rotate(-3deg);-ms-transform:scale(.9) rotate(-3deg);transform:scale(.9) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale(1.1) rotate(3deg);-ms-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}40%,60%,80%{-webkit-transform:scale(1.1) rotate(-3deg);-ms-transform:scale(1.1) rotate(-3deg);transform:scale(1.1) rotate(-3deg)}100%{-webkit-transform:scale(1) rotate(0);-ms-transform:scale(1) rotate(0);transform:scale(1) rotate(0)}}.tada{-webkit-animation-name:tada;animation-name:tada}@-webkit-keyframes wobble{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}15%{-webkit-transform:translateX(-25%) rotate(-5deg);transform:translateX(-25%) rotate(-5deg)}30%{-webkit-transform:translateX(20%) rotate(3deg);transform:translateX(20%) rotate(3deg)}45%{-webkit-transform:translateX(-15%) rotate(-3deg);transform:translateX(-15%) rotate(-3deg)}60%{-webkit-transform:translateX(10%) rotate(2deg);transform:translateX(10%) rotate(2deg)}75%{-webkit-transform:translateX(-5%) rotate(-1deg);transform:translateX(-5%) rotate(-1deg)}}@keyframes wobble{0%,100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}15%{-webkit-transform:translateX(-25%) rotate(-5deg);-ms-transform:translateX(-25%) rotate(-5deg);transform:translateX(-25%) rotate(-5deg)}30%{-webkit-transform:translateX(20%) rotate(3deg);-ms-transform:translateX(20%) rotate(3deg);transform:translateX(20%) rotate(3deg)}45%{-webkit-transform:translateX(-15%) rotate(-3deg);-ms-transform:translateX(-15%) rotate(-3deg);transform:translateX(-15%) rotate(-3deg)}60%{-webkit-transform:translateX(10%) rotate(2deg);-ms-transform:translateX(10%) rotate(2deg);transform:translateX(10%) rotate(2deg)}75%{-webkit-transform:translateX(-5%) rotate(-1deg);-ms-transform:translateX(-5%) rotate(-1deg);transform:translateX(-5%) rotate(-1deg)}}.wobble{-webkit-animation-name:wobble;animation-name:wobble}@-webkit-keyframes bounceIn{0%{opacity:0;-webkit-transform:scale(.3);transform:scale(.3)}50%{opacity:1;-webkit-transform:scale(1.05);transform:scale(1.05)}70%{-webkit-transform:scale(.9);transform:scale(.9)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes bounceIn{0%{opacity:0;-webkit-transform:scale(.3);-ms-transform:scale(.3);transform:scale(.3)}50%{opacity:1;-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05)}70%{-webkit-transform:scale(.9);-ms-transform:scale(.9);transform:scale(.9)}100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}}.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn}@-webkit-keyframes bounceInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}60%{opacity:1;-webkit-transform:translateY(30px);transform:translateY(30px)}80%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes bounceInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}60%{opacity:1;-webkit-transform:translateY(30px);-ms-transform:translateY(30px);transform:translateY(30px)}80%{-webkit-transform:translateY(-10px);-ms-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.bounceInDown{-webkit-animation-name:bounceInDown;animation-name:bounceInDown}@-webkit-keyframes bounceInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}60%{opacity:1;-webkit-transform:translateX(30px);transform:translateX(30px)}80%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes bounceInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}60%{opacity:1;-webkit-transform:translateX(30px);-ms-transform:translateX(30px);transform:translateX(30px)}80%{-webkit-transform:translateX(-10px);-ms-transform:translateX(-10px);transform:translateX(-10px)}100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.bounceInLeft{-webkit-animation-name:bounceInLeft;animation-name:bounceInLeft}@-webkit-keyframes bounceInRight{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}60%{opacity:1;-webkit-transform:translateX(-30px);transform:translateX(-30px)}80%{-webkit-transform:translateX(10px);transform:translateX(10px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes bounceInRight{0%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}60%{opacity:1;-webkit-transform:translateX(-30px);-ms-transform:translateX(-30px);transform:translateX(-30px)}80%{-webkit-transform:translateX(10px);-ms-transform:translateX(10px);transform:translateX(10px)}100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}@-webkit-keyframes bounceInUp{0%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}60%{opacity:1;-webkit-transform:translateY(-30px);transform:translateY(-30px)}80%{-webkit-transform:translateY(10px);transform:translateY(10px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes bounceInUp{0%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}60%{opacity:1;-webkit-transform:translateY(-30px);-ms-transform:translateY(-30px);transform:translateY(-30px)}80%{-webkit-transform:translateY(10px);-ms-transform:translateY(10px);transform:translateY(10px)}100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}@-webkit-keyframes bounceOut{0%{-webkit-transform:scale(1);transform:scale(1)}25%{-webkit-transform:scale(.95);transform:scale(.95)}50%{opacity:1;-webkit-transform:scale(1.1);transform:scale(1.1)}100%{opacity:0;-webkit-transform:scale(.3);transform:scale(.3)}}@keyframes bounceOut{0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}25%{-webkit-transform:scale(.95);-ms-transform:scale(.95);transform:scale(.95)}50%{opacity:1;-webkit-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1)}100%{opacity:0;-webkit-transform:scale(.3);-ms-transform:scale(.3);transform:scale(.3)}}.bounceOut{-webkit-animation-name:bounceOut;animation-name:bounceOut}@-webkit-keyframes bounceOutDown{0%{-webkit-transform:translateY(0);transform:translateY(0)}20%{opacity:1;-webkit-transform:translateY(-20px);transform:translateY(-20px)}100%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}}@keyframes bounceOutDown{0%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}20%{opacity:1;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}100%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}}.bounceOutDown{-webkit-animation-name:bounceOutDown;animation-name:bounceOutDown}@-webkit-keyframes bounceOutLeft{0%{-webkit-transform:translateX(0);transform:translateX(0)}20%{opacity:1;-webkit-transform:translateX(20px);transform:translateX(20px)}100%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}}@keyframes bounceOutLeft{0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}20%{opacity:1;-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px)}100%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}}.bounceOutLeft{-webkit-animation-name:bounceOutLeft;animation-name:bounceOutLeft}@-webkit-keyframes bounceOutRight{0%{-webkit-transform:translateX(0);transform:translateX(0)}20%{opacity:1;-webkit-transform:translateX(-20px);transform:translateX(-20px)}100%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}}@keyframes bounceOutRight{0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}20%{opacity:1;-webkit-transform:translateX(-20px);-ms-transform:translateX(-20px);transform:translateX(-20px)}100%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}}.bounceOutRight{-webkit-animation-name:bounceOutRight;animation-name:bounceOutRight}@-webkit-keyframes bounceOutUp{0%{-webkit-transform:translateY(0);transform:translateY(0)}20%{opacity:1;-webkit-transform:translateY(20px);transform:translateY(20px)}100%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}}@keyframes bounceOutUp{0%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}20%{opacity:1;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}100%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}}.bounceOutUp{-webkit-animation-name:bounceOutUp;animation-name:bounceOutUp}@-webkit-keyframes fadeIn{0%{opacity:0}100%{opacity:1}}@keyframes fadeIn{0%{opacity:0}100%{opacity:1}}.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn}@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translateY(-20px);transform:translateY(-20px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown}@-webkit-keyframes fadeInDownBig{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes fadeInDownBig{0%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.fadeInDownBig{-webkit-animation-name:fadeInDownBig;animation-name:fadeInDownBig}@-webkit-keyframes fadeInLeft{0%{opacity:0;-webkit-transform:translateX(-20px);transform:translateX(-20px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeInLeft{0%{opacity:0;-webkit-transform:translateX(-20px);-ms-transform:translateX(-20px);transform:translateX(-20px)}100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.fadeInLeft{-webkit-animation-name:fadeInLeft;animation-name:fadeInLeft}@-webkit-keyframes fadeInLeftBig{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeInLeftBig{0%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.fadeInLeftBig{-webkit-animation-name:fadeInLeftBig;animation-name:fadeInLeftBig}@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translateX(20px);transform:translateX(20px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeInRight{0%{opacity:0;-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px)}100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.fadeInRight{-webkit-animation-name:fadeInRight;animation-name:fadeInRight}@-webkit-keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.fadeInRightBig{-webkit-animation-name:fadeInRightBig;animation-name:fadeInRightBig}@-webkit-keyframes fadeInUp{0%{opacity:0;-webkit-transform:translateY(20px);transform:translateY(20px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes fadeInUp{0%{opacity:0;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}@-webkit-keyframes fadeInUpBig{0%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes fadeInUpBig{0%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.fadeInUpBig{-webkit-animation-name:fadeInUpBig;animation-name:fadeInUpBig}@-webkit-keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOutDown{0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(20px);transform:translateY(20px)}}@keyframes fadeOutDown{0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}}.fadeOutDown{-webkit-animation-name:fadeOutDown;animation-name:fadeOutDown}@-webkit-keyframes fadeOutDownBig{0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}}@keyframes fadeOutDownBig{0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}}.fadeOutDownBig{-webkit-animation-name:fadeOutDownBig;animation-name:fadeOutDownBig}@-webkit-keyframes fadeOutLeft{0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(-20px);transform:translateX(-20px)}}@keyframes fadeOutLeft{0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(-20px);-ms-transform:translateX(-20px);transform:translateX(-20px)}}.fadeOutLeft{-webkit-animation-name:fadeOutLeft;animation-name:fadeOutLeft}@-webkit-keyframes fadeOutLeftBig{0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}}@keyframes fadeOutLeftBig{0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}}.fadeOutLeftBig{-webkit-animation-name:fadeOutLeftBig;animation-name:fadeOutLeftBig}@-webkit-keyframes fadeOutRight{0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(20px);transform:translateX(20px)}}@keyframes fadeOutRight{0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}@-webkit-keyframes fadeOutRightBig{0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}}@keyframes fadeOutRightBig{0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}}.fadeOutRightBig{-webkit-animation-name:fadeOutRightBig;animation-name:fadeOutRightBig}@-webkit-keyframes fadeOutUp{0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-20px);transform:translateY(-20px)}}@keyframes fadeOutUp{0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}}.fadeOutUp{-webkit-animation-name:fadeOutUp;animation-name:fadeOutUp}@-webkit-keyframes fadeOutUpBig{0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}}@keyframes fadeOutUpBig{0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}}.fadeOutUpBig{-webkit-animation-name:fadeOutUpBig;animation-name:fadeOutUpBig}@-webkit-keyframes flip{0%{-webkit-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);transform:perspective(400px) translateZ(0) rotateY(0) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}100%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}@keyframes flip{0%{-webkit-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);-ms-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);transform:perspective(400px) translateZ(0) rotateY(0) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);-ms-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);-ms-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);-ms-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}100%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);-ms-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}.animated.flip{-webkit-backface-visibility:visible;-ms-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flip;animation-name:flip}@-webkit-keyframes flipInX{0%{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}40%{-webkit-transform:perspective(400px) rotateX(-10deg);transform:perspective(400px) rotateX(-10deg)}70%{-webkit-transform:perspective(400px) rotateX(10deg);transform:perspective(400px) rotateX(10deg)}100%{-webkit-transform:perspective(400px) rotateX(0);transform:perspective(400px) rotateX(0);opacity:1}}@keyframes flipInX{0%{-webkit-transform:perspective(400px) rotateX(90deg);-ms-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}40%{-webkit-transform:perspective(400px) rotateX(-10deg);-ms-transform:perspective(400px) rotateX(-10deg);transform:perspective(400px) rotateX(-10deg)}70%{-webkit-transform:perspective(400px) rotateX(10deg);-ms-transform:perspective(400px) rotateX(10deg);transform:perspective(400px) rotateX(10deg)}100%{-webkit-transform:perspective(400px) rotateX(0);-ms-transform:perspective(400px) rotateX(0);transform:perspective(400px) rotateX(0);opacity:1}}.flipInX{-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipInX;animation-name:flipInX}.flipInY,.flipOutX{backface-visibility:visible!important;-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important}@-webkit-keyframes flipInY{0%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}40%{-webkit-transform:perspective(400px) rotateY(-10deg);transform:perspective(400px) rotateY(-10deg)}70%{-webkit-transform:perspective(400px) rotateY(10deg);transform:perspective(400px) rotateY(10deg)}100%{-webkit-transform:perspective(400px) rotateY(0);transform:perspective(400px) rotateY(0);opacity:1}}@keyframes flipInY{0%{-webkit-transform:perspective(400px) rotateY(90deg);-ms-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}40%{-webkit-transform:perspective(400px) rotateY(-10deg);-ms-transform:perspective(400px) rotateY(-10deg);transform:perspective(400px) rotateY(-10deg)}70%{-webkit-transform:perspective(400px) rotateY(10deg);-ms-transform:perspective(400px) rotateY(10deg);transform:perspective(400px) rotateY(10deg)}100%{-webkit-transform:perspective(400px) rotateY(0);-ms-transform:perspective(400px) rotateY(0);transform:perspective(400px) rotateY(0);opacity:1}}.flipInY{backface-visibility:visible!important;-webkit-animation-name:flipInY;animation-name:flipInY}@-webkit-keyframes flipOutX{0%{-webkit-transform:perspective(400px) rotateX(0);transform:perspective(400px) rotateX(0);opacity:1}100%{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}}@keyframes flipOutX{0%{-webkit-transform:perspective(400px) rotateX(0);-ms-transform:perspective(400px) rotateX(0);transform:perspective(400px) rotateX(0);opacity:1}100%{-webkit-transform:perspective(400px) rotateX(90deg);-ms-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}}.flipOutX{-webkit-animation-name:flipOutX;animation-name:flipOutX;backface-visibility:visible!important}@-webkit-keyframes flipOutY{0%{-webkit-transform:perspective(400px) rotateY(0);transform:perspective(400px) rotateY(0);opacity:1}100%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}}@keyframes flipOutY{0%{-webkit-transform:perspective(400px) rotateY(0);-ms-transform:perspective(400px) rotateY(0);transform:perspective(400px) rotateY(0);opacity:1}100%{-webkit-transform:perspective(400px) rotateY(90deg);-ms-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}}.flipOutY{-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipOutY;animation-name:flipOutY}@-webkit-keyframes lightSpeedIn{0%{-webkit-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}60%{-webkit-transform:translateX(-20%) skewX(30deg);transform:translateX(-20%) skewX(30deg);opacity:1}80%{-webkit-transform:translateX(0) skewX(-15deg);transform:translateX(0) skewX(-15deg);opacity:1}100%{-webkit-transform:translateX(0) skewX(0);transform:translateX(0) skewX(0);opacity:1}}@keyframes lightSpeedIn{0%{-webkit-transform:translateX(100%) skewX(-30deg);-ms-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}60%{-webkit-transform:translateX(-20%) skewX(30deg);-ms-transform:translateX(-20%) skewX(30deg);transform:translateX(-20%) skewX(30deg);opacity:1}80%{-webkit-transform:translateX(0) skewX(-15deg);-ms-transform:translateX(0) skewX(-15deg);transform:translateX(0) skewX(-15deg);opacity:1}100%{-webkit-transform:translateX(0) skewX(0);-ms-transform:translateX(0) skewX(0);transform:translateX(0) skewX(0);opacity:1}}.lightSpeedIn{-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes lightSpeedOut{0%{-webkit-transform:translateX(0) skewX(0);transform:translateX(0) skewX(0);opacity:1}100%{-webkit-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}}@keyframes lightSpeedOut{0%{-webkit-transform:translateX(0) skewX(0);-ms-transform:translateX(0) skewX(0);transform:translateX(0) skewX(0);opacity:1}100%{-webkit-transform:translateX(100%) skewX(-30deg);-ms-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}}.lightSpeedOut{-webkit-animation-name:lightSpeedOut;animation-name:lightSpeedOut;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}@-webkit-keyframes rotateIn{0%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}100%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateIn{0%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(-200deg);-ms-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}100%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}}.rotateIn{-webkit-animation-name:rotateIn;animation-name:rotateIn}@-webkit-keyframes rotateInDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInDownLeft{0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}}.rotateInDownLeft{-webkit-animation-name:rotateInDownLeft;animation-name:rotateInDownLeft}@-webkit-keyframes rotateInDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInDownRight{0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}}.rotateInDownRight{-webkit-animation-name:rotateInDownRight;animation-name:rotateInDownRight}@-webkit-keyframes rotateInUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInUpLeft{0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}}.rotateInUpLeft{-webkit-animation-name:rotateInUpLeft;animation-name:rotateInUpLeft}@-webkit-keyframes rotateInUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInUpRight{0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}}.rotateInUpRight{-webkit-animation-name:rotateInUpRight;animation-name:rotateInUpRight}@-webkit-keyframes rotateOut{0%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(200deg);transform:rotate(200deg);opacity:0}}@keyframes rotateOut{0%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(200deg);-ms-transform:rotate(200deg);transform:rotate(200deg);opacity:0}}.rotateOut{-webkit-animation-name:rotateOut;animation-name:rotateOut}@-webkit-keyframes rotateOutDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}}@keyframes rotateOutDownLeft{0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}}.rotateOutDownLeft{-webkit-animation-name:rotateOutDownLeft;animation-name:rotateOutDownLeft}@-webkit-keyframes rotateOutDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}}@keyframes rotateOutDownRight{0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}}.rotateOutDownRight{-webkit-animation-name:rotateOutDownRight;animation-name:rotateOutDownRight}@-webkit-keyframes rotateOutUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}}@keyframes rotateOutUpLeft{0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}}.rotateOutUpLeft{-webkit-animation-name:rotateOutUpLeft;animation-name:rotateOutUpLeft}@-webkit-keyframes rotateOutUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}}@keyframes rotateOutUpRight{0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}}.rotateOutUpRight{-webkit-animation-name:rotateOutUpRight;animation-name:rotateOutUpRight}@-webkit-keyframes slideInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes slideInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}}.slideInDown{-webkit-animation-name:slideInDown;animation-name:slideInDown}@-webkit-keyframes slideInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes slideInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft}@-webkit-keyframes slideInRight{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes slideInRight{0%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight}@-webkit-keyframes slideOutLeft{0%{-webkit-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}}@keyframes slideOutLeft{0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}}.slideOutLeft{-webkit-animation-name:slideOutLeft;animation-name:slideOutLeft}@-webkit-keyframes slideOutRight{0%{-webkit-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}}@keyframes slideOutRight{0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}100%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}}.slideOutRight{-webkit-animation-name:slideOutRight;animation-name:slideOutRight}@-webkit-keyframes slideOutUp{0%{-webkit-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}}@keyframes slideOutUp{0%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}}.slideOutUp{-webkit-animation-name:slideOutUp;animation-name:slideOutUp}@-webkit-keyframes hinge{0%{-webkit-transform:rotate(0);transform:rotate(0);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate(80deg);transform:rotate(80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%{-webkit-transform:rotate(60deg);transform:rotate(60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}80%{-webkit-transform:rotate(60deg) translateY(0);transform:rotate(60deg) translateY(0);opacity:1;-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}100%{-webkit-transform:translateY(700px);transform:translateY(700px);opacity:0}}@keyframes hinge{0%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate(80deg);-ms-transform:rotate(80deg);transform:rotate(80deg);-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%{-webkit-transform:rotate(60deg);-ms-transform:rotate(60deg);transform:rotate(60deg);-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}80%{-webkit-transform:rotate(60deg) translateY(0);-ms-transform:rotate(60deg) translateY(0);transform:rotate(60deg) translateY(0);opacity:1;-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}100%{-webkit-transform:translateY(700px);-ms-transform:translateY(700px);transform:translateY(700px);opacity:0}}.hinge{-webkit-animation-name:hinge;animation-name:hinge}@-webkit-keyframes rollIn{0%{opacity:0;-webkit-transform:translateX(-100%) rotate(-120deg);transform:translateX(-100%) rotate(-120deg)}100%{opacity:1;-webkit-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0)}}@keyframes rollIn{0%{opacity:0;-webkit-transform:translateX(-100%) rotate(-120deg);-ms-transform:translateX(-100%) rotate(-120deg);transform:translateX(-100%) rotate(-120deg)}100%{opacity:1;-webkit-transform:translateX(0) rotate(0);-ms-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0)}}.rollIn{-webkit-animation-name:rollIn;animation-name:rollIn}@-webkit-keyframes rollOut{0%{opacity:1;-webkit-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0)}100%{opacity:0;-webkit-transform:translateX(100%) rotate(120deg);transform:translateX(100%) rotate(120deg)}}@keyframes rollOut{0%{opacity:1;-webkit-transform:translateX(0) rotate(0);-ms-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0)}100%{opacity:0;-webkit-transform:translateX(100%) rotate(120deg);-ms-transform:translateX(100%) rotate(120deg);transform:translateX(100%) rotate(120deg)}}.rollOut{-webkit-animation-name:rollOut;animation-name:rollOut}
    </style>

    <style>
.pp_gallery div,.pp_gallery ul a,.pp_social .facebook{overflow:hidden;float:left}div.pp_default .pp_bottom,div.pp_default .pp_bottom .pp_left,div.pp_default .pp_bottom .pp_middle,div.pp_default .pp_bottom .pp_right,div.pp_default .pp_top,div.pp_default .pp_top .pp_left,div.pp_default .pp_top .pp_middle,div.pp_default .pp_top .pp_right{height:13px}div.pp_default .pp_top .pp_left{background:url(../images/prettyPhoto/default/sprite.png) -78px -93px no-repeat}div.pp_default .pp_top .pp_middle{background:url(../images/prettyPhoto/default/sprite_x.png) top left repeat-x}div.pp_default .pp_top .pp_right{background:url(../images/prettyPhoto/default/sprite.png) -112px -93px no-repeat}div.pp_default .pp_content .ppt{color:#f8f8f8}div.pp_default .pp_content_container .pp_left{background:url(../images/prettyPhoto/default/sprite_y.png) -7px 0 repeat-y;padding-left:13px}div.pp_default .pp_content_container .pp_right{background:url(../images/prettyPhoto/default/sprite_y.png) top right repeat-y;padding-right:13px}div.pp_default .pp_next:hover{background:url(../images/prettyPhoto/default/sprite_next.png) center right no-repeat;cursor:pointer}div.pp_default .pp_previous:hover{background:url(../images/prettyPhoto/default/sprite_prev.png) center left no-repeat;cursor:pointer}div.pp_default .pp_expand{background:url(../images/prettyPhoto/default/sprite.png) 0 -29px no-repeat;cursor:pointer;width:28px;height:28px}div.pp_default .pp_expand:hover{background:url(../images/prettyPhoto/default/sprite.png) 0 -56px no-repeat;cursor:pointer}div.pp_default .pp_contract{background:url(../images/prettyPhoto/default/sprite.png) 0 -84px no-repeat;cursor:pointer;width:28px;height:28px}div.pp_default .pp_contract:hover{background:url(../images/prettyPhoto/default/sprite.png) 0 -113px no-repeat;cursor:pointer}div.pp_default .pp_close{width:30px;height:30px;background:url(../images/prettyPhoto/default/sprite.png) 2px 1px no-repeat;cursor:pointer}div.pp_default .pp_gallery ul li a{background:url(../images/prettyPhoto/default/default_thumb.png) center center #f8f8f8;border:1px solid #aaa}div.pp_default .pp_social{margin-top:7px}div.pp_default .pp_gallery a.pp_arrow_next,div.pp_default .pp_gallery a.pp_arrow_previous{position:static;left:auto}div.pp_default .pp_nav .pp_pause,div.pp_default .pp_nav .pp_play{background:url(../images/prettyPhoto/default/sprite.png) -51px 1px no-repeat;height:30px;width:30px}div.pp_default .pp_nav .pp_pause{background-position:-51px -29px}div.pp_default a.pp_arrow_next,div.pp_default a.pp_arrow_previous{background:url(../images/prettyPhoto/default/sprite.png) -31px -3px no-repeat;height:20px;width:20px;margin:4px 0 0}div.pp_default a.pp_arrow_next{left:52px;background-position:-82px -3px}div.pp_default .pp_content_container .pp_details{margin-top:5px}div.pp_default .pp_nav{clear:none;height:30px;width:110px;position:relative}div.dark_rounded .pp_close,div.dark_square .pp_close,div.light_rounded .pp_close,div.light_square .pp_close{width:75px;height:22px;cursor:pointer}div.pp_default .pp_nav .currentTextHolder{font-family:Georgia;font-style:italic;color:#999;font-size:11px;left:75px;line-height:25px;position:absolute;top:2px;margin:0;padding:0 0 0 10px}div.pp_default .pp_arrow_next:hover,div.pp_default .pp_arrow_previous:hover,div.pp_default .pp_close:hover,div.pp_default .pp_nav .pp_pause:hover,div.pp_default .pp_nav .pp_play:hover{opacity:.7}div.pp_default .pp_description{font-size:11px;font-weight:700;line-height:14px;margin:5px 50px 5px 0}div.pp_default .pp_bottom .pp_left{background:url(../images/prettyPhoto/default/sprite.png) -78px -127px no-repeat}div.pp_default .pp_bottom .pp_middle{background:url(../images/prettyPhoto/default/sprite_x.png) bottom left repeat-x}div.pp_default .pp_bottom .pp_right{background:url(../images/prettyPhoto/default/sprite.png) -112px -127px no-repeat}div.pp_default .pp_loaderIcon{background:url(../images/prettyPhoto/default/loader.gif) center center no-repeat}div.light_rounded .pp_top .pp_left{background:url(../images/prettyPhoto/light_rounded/sprite.png) -88px -53px no-repeat}div.light_rounded .pp_top .pp_right{background:url(../images/prettyPhoto/light_rounded/sprite.png) -110px -53px no-repeat}div.light_rounded .pp_next:hover{background:url(../images/prettyPhoto/light_rounded/btnNext.png) center right no-repeat;cursor:pointer}div.light_rounded .pp_previous:hover{background:url(../images/prettyPhoto/light_rounded/btnPrevious.png) center left no-repeat;cursor:pointer}div.light_rounded .pp_expand{background:url(../images/prettyPhoto/light_rounded/sprite.png) -31px -26px no-repeat;cursor:pointer}div.light_rounded .pp_expand:hover{background:url(../images/prettyPhoto/light_rounded/sprite.png) -31px -47px no-repeat;cursor:pointer}div.light_rounded .pp_contract{background:url(../images/prettyPhoto/light_rounded/sprite.png) 0 -26px no-repeat;cursor:pointer}div.light_rounded .pp_contract:hover{background:url(../images/prettyPhoto/light_rounded/sprite.png) 0 -47px no-repeat;cursor:pointer}div.light_rounded .pp_close{background:url(../images/prettyPhoto/light_rounded/sprite.png) -1px -1px no-repeat}div.light_rounded .pp_nav .pp_play{background:url(../images/prettyPhoto/light_rounded/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.light_rounded .pp_nav .pp_pause{background:url(../images/prettyPhoto/light_rounded/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.light_rounded .pp_arrow_previous{background:url(../images/prettyPhoto/light_rounded/sprite.png) 0 -71px no-repeat}div.light_rounded .pp_arrow_next{background:url(../images/prettyPhoto/light_rounded/sprite.png) -22px -71px no-repeat}div.light_rounded .pp_bottom .pp_left{background:url(../images/prettyPhoto/light_rounded/sprite.png) -88px -80px no-repeat}div.light_rounded .pp_bottom .pp_right{background:url(../images/prettyPhoto/light_rounded/sprite.png) -110px -80px no-repeat}div.dark_rounded .pp_top .pp_left{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -88px -53px no-repeat}div.dark_rounded .pp_top .pp_right{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -110px -53px no-repeat}div.dark_rounded .pp_content_container .pp_left{background:url(../images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat-y}div.dark_rounded .pp_content_container .pp_right{background:url(../images/prettyPhoto/dark_rounded/contentPattern.png) top right repeat-y}div.dark_rounded .pp_next:hover{background:url(../images/prettyPhoto/dark_rounded/btnNext.png) center right no-repeat;cursor:pointer}div.dark_rounded .pp_previous:hover{background:url(../images/prettyPhoto/dark_rounded/btnPrevious.png) center left no-repeat;cursor:pointer}div.dark_rounded .pp_expand{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -31px -26px no-repeat;cursor:pointer}div.dark_rounded .pp_expand:hover{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -31px -47px no-repeat;cursor:pointer}div.dark_rounded .pp_contract{background:url(../images/prettyPhoto/dark_rounded/sprite.png) 0 -26px no-repeat;cursor:pointer}div.dark_rounded .pp_contract:hover{background:url(../images/prettyPhoto/dark_rounded/sprite.png) 0 -47px no-repeat;cursor:pointer}div.dark_rounded .pp_close{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -1px -1px no-repeat}div.dark_rounded .pp_description{margin-right:85px;color:#fff}div.dark_rounded .pp_nav .pp_play{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.dark_rounded .pp_nav .pp_pause{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.dark_rounded .pp_arrow_previous{background:url(../images/prettyPhoto/dark_rounded/sprite.png) 0 -71px no-repeat}div.dark_rounded .pp_arrow_next{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -22px -71px no-repeat}div.dark_rounded .pp_bottom .pp_left{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -88px -80px no-repeat}div.dark_rounded .pp_bottom .pp_right{background:url(../images/prettyPhoto/dark_rounded/sprite.png) -110px -80px no-repeat}div.dark_rounded .pp_loaderIcon{background:url(../images/prettyPhoto/dark_rounded/loader.gif) center center no-repeat}div.dark_square .pp_content,div.dark_square .pp_left,div.dark_square .pp_middle,div.dark_square .pp_right,div.pp_overlay{background:#000}div.dark_square .pp_description{color:#fff;margin:0 85px 0 0}div.dark_square .pp_loaderIcon{background:url(../images/prettyPhoto/dark_square/loader.gif) center center no-repeat}div.dark_square .pp_expand{background:url(../images/prettyPhoto/dark_square/sprite.png) -31px -26px no-repeat;cursor:pointer}div.dark_square .pp_expand:hover{background:url(../images/prettyPhoto/dark_square/sprite.png) -31px -47px no-repeat;cursor:pointer}div.dark_square .pp_contract{background:url(../images/prettyPhoto/dark_square/sprite.png) 0 -26px no-repeat;cursor:pointer}div.dark_square .pp_contract:hover{background:url(../images/prettyPhoto/dark_square/sprite.png) 0 -47px no-repeat;cursor:pointer}div.dark_square .pp_close{background:url(../images/prettyPhoto/dark_square/sprite.png) -1px -1px no-repeat}div.dark_square .pp_nav{clear:none}div.dark_square .pp_nav .pp_play{background:url(../images/prettyPhoto/dark_square/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.dark_square .pp_nav .pp_pause{background:url(../images/prettyPhoto/dark_square/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.dark_square .pp_arrow_previous{background:url(../images/prettyPhoto/dark_square/sprite.png) 0 -71px no-repeat}div.dark_square .pp_arrow_next{background:url(../images/prettyPhoto/dark_square/sprite.png) -22px -71px no-repeat}div.dark_square .pp_next:hover{background:url(../images/prettyPhoto/dark_square/btnNext.png) center right no-repeat;cursor:pointer}div.dark_square .pp_previous:hover{background:url(../images/prettyPhoto/dark_square/btnPrevious.png) center left no-repeat;cursor:pointer}div.light_square .pp_expand{background:url(../images/prettyPhoto/light_square/sprite.png) -31px -26px no-repeat;cursor:pointer}div.light_square .pp_expand:hover{background:url(../images/prettyPhoto/light_square/sprite.png) -31px -47px no-repeat;cursor:pointer}div.light_square .pp_contract{background:url(../images/prettyPhoto/light_square/sprite.png) 0 -26px no-repeat;cursor:pointer}div.light_square .pp_contract:hover{background:url(../images/prettyPhoto/light_square/sprite.png) 0 -47px no-repeat;cursor:pointer}div.light_square .pp_close{background:url(../images/prettyPhoto/light_square/sprite.png) -1px -1px no-repeat}div.light_square .pp_nav .pp_play{background:url(../images/prettyPhoto/light_square/sprite.png) -1px -100px no-repeat;height:15px;width:14px}div.light_square .pp_nav .pp_pause{background:url(../images/prettyPhoto/light_square/sprite.png) -24px -100px no-repeat;height:15px;width:14px}div.light_square .pp_arrow_previous{background:url(../images/prettyPhoto/light_square/sprite.png) 0 -71px no-repeat}div.light_square .pp_arrow_next{background:url(../images/prettyPhoto/light_square/sprite.png) -22px -71px no-repeat}div.light_square .pp_next:hover{background:url(../images/prettyPhoto/light_square/btnNext.png) center right no-repeat;cursor:pointer}div.light_square .pp_previous:hover{background:url(../images/prettyPhoto/light_square/btnPrevious.png) center left no-repeat;cursor:pointer}div.facebook .pp_top .pp_left{background:url(../images/prettyPhoto/facebook/sprite.png) -88px -53px no-repeat}div.facebook .pp_top .pp_middle{background:url(../images/prettyPhoto/facebook/contentPatternTop.png) top left repeat-x}div.facebook .pp_top .pp_right{background:url(../images/prettyPhoto/facebook/sprite.png) -110px -53px no-repeat}div.facebook .pp_content_container .pp_left{background:url(../images/prettyPhoto/facebook/contentPatternLeft.png) top left repeat-y}div.facebook .pp_content_container .pp_right{background:url(../images/prettyPhoto/facebook/contentPatternRight.png) top right repeat-y}div.facebook .pp_expand{background:url(../images/prettyPhoto/facebook/sprite.png) -31px -26px no-repeat;cursor:pointer}div.facebook .pp_expand:hover{background:url(../images/prettyPhoto/facebook/sprite.png) -31px -47px no-repeat;cursor:pointer}div.facebook .pp_contract{background:url(../images/prettyPhoto/facebook/sprite.png) 0 -26px no-repeat;cursor:pointer}div.facebook .pp_contract:hover{background:url(../images/prettyPhoto/facebook/sprite.png) 0 -47px no-repeat;cursor:pointer}div.facebook .pp_close{width:22px;height:22px;background:url(../images/prettyPhoto/facebook/sprite.png) -1px -1px no-repeat;cursor:pointer}div.facebook .pp_description{margin:0 37px 0 0}div.facebook .pp_loaderIcon{background:url(../images/prettyPhoto/facebook/loader.gif) center center no-repeat}div.facebook .pp_arrow_previous{background:url(../images/prettyPhoto/facebook/sprite.png) 0 -71px no-repeat;height:22px;margin-top:0;width:22px}div.facebook .pp_arrow_previous.disabled{background-position:0 -96px;cursor:default}div.facebook .pp_arrow_next{background:url(../images/prettyPhoto/facebook/sprite.png) -32px -71px no-repeat;height:22px;margin-top:0;width:22px}div.facebook .pp_arrow_next.disabled{background-position:-32px -96px;cursor:default}div.facebook .pp_nav{margin-top:0}div.facebook .pp_nav p{font-size:15px;padding:0 3px 0 4px}div.facebook .pp_nav .pp_play{background:url(../images/prettyPhoto/facebook/sprite.png) -1px -123px no-repeat;height:22px;width:22px}div.facebook .pp_nav .pp_pause{background:url(../images/prettyPhoto/facebook/sprite.png) -32px -123px no-repeat;height:22px;width:22px}div.facebook .pp_next:hover{background:url(../images/prettyPhoto/facebook/btnNext.png) center right no-repeat;cursor:pointer}div.facebook .pp_previous:hover{background:url(../images/prettyPhoto/facebook/btnPrevious.png) center left no-repeat;cursor:pointer}div.facebook .pp_bottom .pp_left{background:url(../images/prettyPhoto/facebook/sprite.png) -88px -80px no-repeat}div.facebook .pp_bottom .pp_middle{background:url(../images/prettyPhoto/facebook/contentPatternBottom.png) top left repeat-x}div.facebook .pp_bottom .pp_right{background:url(../images/prettyPhoto/facebook/sprite.png) -110px -80px no-repeat}div.pp_pic_holder a:focus{outline:0}div.pp_overlay{display:none;left:0;position:absolute;top:0;width:100%;z-index:9500}div.pp_pic_holder{display:none;position:absolute;width:100px;z-index:10000}.pp_content{height:40px;min-width:40px}* html .pp_content{width:40px}.pp_content_container{position:relative;text-align:left;width:100%}.pp_content_container .pp_left{padding-left:20px}.pp_content_container .pp_right{padding-right:20px}.pp_content_container .pp_details{float:left;margin:10px 0 2px}.pp_description{display:none;margin:0}.pp_social{float:left;margin:0}.pp_social .facebook{margin-left:5px;width:55px}.pp_social .twitter{float:left}.pp_nav{clear:right;float:left;margin:3px 10px 0 0}.pp_nav p{float:left;white-space:nowrap;margin:2px 4px}.pp_nav .pp_pause,.pp_nav .pp_play{float:left;margin-right:4px;text-indent:-10000px}a.pp_arrow_next,a.pp_arrow_previous{display:block;float:left;height:15px;margin-top:3px;overflow:hidden;text-indent:-10000px;width:14px}.pp_hoverContainer{position:absolute;top:0;width:100%;z-index:2000}.pp_gallery{display:none;left:50%;margin-top:-50px;position:absolute;z-index:10000}.pp_gallery div{position:relative}.pp_gallery ul{float:left;height:35px;position:relative;white-space:nowrap;margin:0 0 0 5px;padding:0}a.pp_next,a.pp_previous{background:url(../images/prettyPhoto/light_rounded/btnNext.png) 10000px 10000px no-repeat;display:block;height:100%;width:49%;text-indent:-10000px}.pp_gallery ul a{border:1px solid rgba(0,0,0,.5);display:block;height:33px}.pp_gallery ul a img{border:0}.pp_gallery li{display:block;float:left;margin:0 5px 0 0;padding:0}.pp_gallery li.default a{background:url(../images/prettyPhoto/facebook/default_thumbnail.gif) no-repeat;display:block;height:33px;width:50px}.pp_gallery .pp_arrow_next,.pp_gallery .pp_arrow_previous{margin-top:7px!important}a.pp_next{float:right}a.pp_previous{float:left}a.pp_contract,a.pp_expand{cursor:pointer;display:none;height:20px;position:absolute;right:30px;text-indent:-10000px;top:10px;width:20px;z-index:20000}.pp_loaderIcon,a.pp_close{display:block;position:absolute}a.pp_close{right:0;top:0;line-height:22px;text-indent:-10000px}.pp_loaderIcon{height:24px;left:50%;top:50%;width:24px;margin:-12px 0 0 -12px}.pp_fade,.pp_gallery li.default a img,div.ppt{display:none}#pp_full_res{line-height:1!important}#pp_full_res .pp_inline{text-align:left}#pp_full_res .pp_inline p{margin:0 0 15px}div.ppt{color:#fff;font-size:17px;z-index:9999;margin:0 0 5px 15px}div.light_rounded .pp_content,div.pp_default .pp_content{background-color:#fff}div.facebook #pp_full_res .pp_inline,div.facebook .pp_content .ppt,div.light_rounded #pp_full_res .pp_inline,div.light_rounded .pp_content .ppt,div.light_square #pp_full_res .pp_inline,div.light_square .pp_content .ppt,div.pp_default #pp_full_res .pp_inline{color:#000}.pp_gallery li.selected a,.pp_gallery ul a:hover,div.pp_default .pp_gallery ul li a:hover,div.pp_default .pp_gallery ul li.selected a{border-color:#fff}div.dark_rounded .pp_details,div.dark_square .pp_details,div.facebook .pp_details,div.light_rounded .pp_details,div.light_square .pp_details,div.pp_default .pp_details{position:relative}div.facebook .pp_content,div.light_rounded .pp_bottom .pp_middle,div.light_rounded .pp_content_container .pp_left,div.light_rounded .pp_content_container .pp_right,div.light_rounded .pp_top .pp_middle,div.light_square .pp_content,div.light_square .pp_left,div.light_square .pp_middle,div.light_square .pp_right{background:#fff}div.light_rounded .pp_description,div.light_square .pp_description{margin-right:85px}div.dark_rounded .pp_gallery a.pp_arrow_next,div.dark_rounded .pp_gallery a.pp_arrow_previous,div.dark_square .pp_gallery a.pp_arrow_next,div.dark_square .pp_gallery a.pp_arrow_previous,div.light_rounded .pp_gallery a.pp_arrow_next,div.light_rounded .pp_gallery a.pp_arrow_previous,div.light_square .pp_gallery a.pp_arrow_next,div.light_square .pp_gallery a.pp_arrow_previous{margin-top:12px!important}div.dark_rounded .pp_arrow_previous.disabled,div.dark_square .pp_arrow_previous.disabled,div.light_rounded .pp_arrow_previous.disabled,div.light_square .pp_arrow_previous.disabled{background-position:0 -87px;cursor:default}div.dark_rounded .pp_arrow_next.disabled,div.dark_square .pp_arrow_next.disabled,div.light_rounded .pp_arrow_next.disabled,div.light_square .pp_arrow_next.disabled{background-position:-22px -87px;cursor:default}div.light_rounded .pp_loaderIcon,div.light_square .pp_loaderIcon{background:url(../images/prettyPhoto/light_rounded/loader.gif) center center no-repeat}div.dark_rounded .pp_bottom .pp_middle,div.dark_rounded .pp_content,div.dark_rounded .pp_top .pp_middle{background:url(../images/prettyPhoto/dark_rounded/contentPattern.png) top left}div.dark_rounded .currentTextHolder,div.dark_square .currentTextHolder{color:#c4c4c4}div.dark_rounded #pp_full_res .pp_inline,div.dark_square #pp_full_res .pp_inline{color:#fff}.pp_bottom,.pp_top{height:20px;position:relative}* html .pp_bottom,* html .pp_top{padding:0 20px}.pp_bottom .pp_left,.pp_top .pp_left{height:20px;left:0;position:absolute;width:20px}.pp_bottom .pp_middle,.pp_top .pp_middle{height:20px;left:20px;position:absolute;right:20px}* html .pp_bottom .pp_middle,* html .pp_top .pp_middle{left:0;position:static}.pp_bottom .pp_right,.pp_top .pp_right{height:20px;left:auto;position:absolute;right:0;top:0;width:20px}
    </style>

    <style>
body {
    background: #fff;
    color: #777777;
    font-size: 14px;
    line-height: 31px;
    letter-spacing: 0;
    font-weight: 400;
    padding: 0;
}

h1,
h2,
h3 {
    letter-spacing: 0px;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: 1.8;
    color: #242424;
}

h1 {
    font-size: 22px;
}

h2 {
    font-size: 20px;
}

h3 {
    font-size: 21px;
}

h1 a,
h2 a,
h3 a {
    text-decoration: none !important;
}

p {
    font-size: 15px;
    font-weight: 400;
    line-height: 26px;
    letter-spacing: 0;
    margin-top: 15px;
}

img.aligncenter {
    display: block;
    text-align: center;
    display: block;
    margin: 0 auto 20px auto;
    padding: 0px;
    border: 0px;
    background: none;
}

ul {
    padding: 0;
    list-style: none;
}

ol li ul li {
    padding-left: 20px;
}

img.alignleft {
    float: left;
    margin: 6px 20px 6px 0;
    display: inline;
    border: 0px;
    background: none;
    padding: 0;
    display: block;
}

img.alignright {
    padding: 0;
    float: right;
    margin: 6px 0 6px 20px;
    border: 0px;
    display: block;
    background: none;
}

blockquote {
    font-size: 16px;
    line-height: 32px;
    font-family: 'Droid Serif', Georgia, "Times New Roman", serif;
    font-weight: normal;
    font-style: italic;
    position: relative;
    width: auto;
}

blockquote small {
    display: block;
    margin-top: 20px;
}

pre {
    line-height: 18px;
    margin-bottom: 18px;
}

.btn,
a {
    outline: 0 !important;
    text-decoration: none !important;
}

ins {
    text-decoration: none;
}

sup {
    bottom: 1ex;
}

sub {
    top: .5ex;
}

p {
    padding: 0 0 20px 0;
}

.check li:before {
    content: "\f00c";
    font-family: "FontAwesome";
    font-size: 16px;
    left: 0;
    color: #242424;
    padding-right: 5px;
    position: relative;
    top: 2px;
}

.check li {
    font-size: 14px;
    list-style: none;
    margin-bottom: 4px;
}

.check {
    margin-left: 0;
    padding-left: 0
}

.section {
    padding: 180px 0;
    position: relative;
    display: block;
}

.white {
    background-color: #ffffff;
}

strong {
    color: #030303;
}

.grey {
    background-color: #f3f3f3;
}

.big-title h1 {
    font-size: 48px;
    font-weight: 300;
    margin-bottom: 0;
    text-transform: capitalize;
    padding-bottom: 0;
}

.dark-text {
    font-size: 4.125rem;
    line-height: 4.063rem;
    font-weight: 300;
}

h3 a {
    font-size: 14px;
    font-weight: bold;
}

.dark-text a {
    font-size: 14px;
    font-weight: bold;
    padding-left: 20px;
}

.dark-text hr {
    width: 130px;
    margin-left: 0;
    margin-top: 40px;
    border-width: 1px;
    border-color: #030303;
}

.intro {
    padding: 20px;
}

.intro1 {
    margin-top: 22px;
    padding: 30px 0px;
    background-color: #f3f3f3;
}

.intro1 li {
    list-style: none;
}

.intro1 a {
    color: #0E97EE !important;
}

.intro a {
    color: #030303;
    font-weight: 400;
    font-size: 16px;
}

.lead {
    text-transform: capitalize;
}

.left-align img {
    margin-top: 20px;
}

.drop-caps p:first-child::first-letter {
    color: #030303;
    display: block;
    float: left;
    font-size: 75px;
    line-height: 60px;
    text-transform: uppercase;
    margin-right: 10px;
    margin-top: 5px;
    padding: 4px;
}

.drop-caps.full p:first-child::first-letter {
    background: #030303 none repeat scroll 0 0 !important;
    color: #ffffff;
    margin-right: 15px;
    padding: 20px;
    font-size: 36px;
    font-family: Georgia;
    border-radius: 5px;
}

mark {
    background-color: #0E97EE;
    color: #ffffff;
    padding: 0 10px;
}

a:focus,
a:hover {
    color: #0E97EE;
}

.intro2 i {
    padding-right: 10px;
    font-size: 21px;
}

.intro2 {
    background-color: #0E97EE;
    border: 2px solid #2187BB;
    border-radius: 5px;
    color: #000;
    font-style: italic;
    padding: 10px 20px;
}

.intro2 p {
    padding: 0;
}

.intro2 a {
    color: #000;
    font-weight: bold;
}

.intro1 ul {
    padding: 0 30px;
}

.btn-primary {
    background-color: #0E97EE;
    border: 1px solid #2187BB;
}

.btn-primary:hover {
    background-color: #2187BB;
    border: 1px solid #0E97EE;
}

.btn-info {
    background-color: #545454;
    border: 1px solid #656565;
}

.btn-info:hover {
    background-color: #656565;
    border: 1px solid #545454;
}

.navbar-inverse .navbar-nav>.active>a,
.navbar-inverse .navbar-nav>.active>a:hover,
.navbar-inverse .navbar-nav>.active>a:focus {
    background-color: #0E97EE;
    color: #fff;
}

.navbar-inverse {
    background-color: #030303;
    border: 0;
}

.navbar-inverse li.btn {
    border-radius: 0 !important;
    padding: 0;
}

.navbar-inverse li.btn a {
    color: #ffffff !important;
}

#myBtn {
    display: none;
    position: fixed;
    z-index: 1;
    height: 40px;
    width: 40px;
    bottom: 55px;
    right: 20px;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: grey;
    color: #fff;
    cursor: pointer;
    padding: 0px;
    border-radius: 50%;
}

#myBtn:hover {
    background-color: #404040;
}

html.dark body {
    background: #222;
    color: #aaa;
}

html.dark h1,
html.dark h2,
html.dark h3 {
    color: #dbdbdb;
}

html.dark hr {
    border-color: #111;
}

html.dark .docs-sidebar .nav>li>a {
    color: #eee;
}

html.dark .dark-text hr {
    border-color: #fcfcfc;
}

html.dark strong {
    color: #fcfcfc;
}

html.dark .intro1 {
    background-color: #0c0c0c;
}

html.dark .intro1 a {
    color: #F16811 !important;
}

html.dark a {
    color: #CC8548;
}

html.dark .intro2 a {
    color: #000;
}

html.dark a:hover {
    color: #F16811;
}

html.dark .intro2 {
    background-color: #F16811;
    border-color: #DE7844;
}

html.dark .btn-primary {
    background-color: #F16811;
    border-color: #DE7844;
    color: #000;
}

html.dark .btn-primary:hover {
    background-color: #DE7844;
    border-color: #F16811;
}

html.dark .btn-info {
    background-color: #ABABAB;
    border-color: #9A9A9A;
    color: #000;
}

html.dark .btn-info:hover {
    background-color: #9A9A9A;
    border-color: #ABABAB;
}

#mode {
    cursor: pointer;
    position: fixed;
    right: 16px;
    top: 16px;
    z-index: 1;
    border-radius: 16px;
    line-height: 0;
}

#mode svg {
    width: 20px;
    padding: 12px;
    box-sizing: content-box;
}

html.dark #mode .light {
    display: none;
}

html #mode .light {
    display: block;
}

html.dark #mode .dark {
    display: block;
}

html #mode .dark {
    display: none;
}

.body {
    position: relative;
}

.sub-title {
    font-size: 30px;
    margin-top: 50px;
    margin-bottom: 10px;
    padding-bottom: 0;
}

.sub-title a {
    font-size: 16px;
}

.section.docs-heading {
    padding: 60px 0;
}

.affix {
    position: static;
}

@media (min-width: 992px) {

    .affix,
    .affix-bottom {
        width: 213px
    }

    .affix {
        position: fixed;
        top: 20px
    }

    .affix-bottom {
        position: absolute
    }

    .affix .bs-docs-sidenav,
    .affix-bottom .bs-docs-sidenav {
        margin-top: 0;
        margin-bottom: 0
    }
}

@media (min-width: 1200px) {

    .affix,
    .affix-bottom {
        width: 263px
    }
}

@media (min-width: 768px) {
    .docs-sidebar {
        padding-top: 20px;
        padding-left: 20px
    }
}

.docs-sidebar .nav>li>a {
    color: #111;
    border-left: 2px solid transparent;
    padding: 0 20px;
    font-size: 15px;
    font-weight: 400;
}

.docs-sidebar .nav .nav>li>a {
    padding-left: 40px;
    font-size: 14px;
}

.docs-sidebar .nav>li:not(.active)>a:hover {
    color: #0E97EE;
    text-decoration: none;
    background-color: transparent;
    border-left-width: 1px;
    border-left-color: #0E97EE;
}

.docs-sidebar .nav>li>a:focus {
    text-decoration: none;
    background-color: transparent;
}

.docs-sidebar .nav>.active>a {
    color: #0E97EE;
    text-decoration: none;
    background-color: transparent;
    border-left-color: #0E97EE;
}

.docs-sidebar .nav>.active>a,
.docs-sidebar .nav>.active:hover>a,
.docs-sidebar .nav>.active:focus>a {
    font-weight: 700;
}

.docs-sidebar .nav .nav>.active>a,
.docs-sidebar .nav .nav>.active:hover>a,
.docs-sidebar .nav .nav>.active:focus>a {
    font-weight: 500;
}

@media (min-width: 992px) {
    .docs-sidebar .nav ul {
        display: none;
        padding-bottom: 10px;
    }

    .docs-sidebar .nav>.active>ul {
        display: block
    }
}

.syntaxhighlighter {
    background-color: #2b303b !important;
    padding: 15px 0;
    margin: 2em 0 1em 0 !important;
}

.syntaxhighlighter a,
.syntaxhighlighter div,
.syntaxhighlighter code,
.syntaxhighlighter table,
.syntaxhighlighter table td,
.syntaxhighlighter table tr,
.syntaxhighlighter table tbody,
.syntaxhighlighter table thead,
.syntaxhighlighter table caption,
.syntaxhighlighter textarea {
    line-height: 1.3em !important;
}

.syntaxhighlighter .line.alt1 {
    background-color: #2b303b !important;
}

.syntaxhighlighter .line.alt2 {
    background-color: #2b303b !important;
}

.syntaxhighlighter .string,
.syntaxhighlighter .string a {
    color: #90be8c !important;
}

.syntaxhighlighter .color1,
.syntaxhighlighter .color1 a {
    color: #d08770 !important;
}

.syntaxhighlighter .plain,
.syntaxhighlighter .plain a {
    color: #c0c5ce !important;
}

.syntaxhighlighter .keyword {
    color: #bf616a !important;
}

.syntaxhighlighter .gutter {
    color: #757a84 !important;
}

.syntaxhighlighter .line.highlighted.alt1,
.syntaxhighlighter .line.highlighted.alt2 {
    background-color: #333E49 !important;
}

.syntaxhighlighter .gutter .line.highlighted {
    background-color: #343d46 !important;
    color: #757a84 !important;
}

.syntaxhighlighter .value {
    color: #96b5b4 !important;
}

.syntaxhighlighter .color3,
.syntaxhighlighter .color3 a {
    color: #b48ead !important;
}

.syntaxhighlighter .js.keyword {
    color: #b48ead !important;
}
    </style>

    <link rel="stylesheet" type="text/css" href="/js/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="/js/syntax-highlighter/styles/shThemeRDark.css" media="all">
</head>

<body data-spy="scroll" data-target=".docs-sidebar" data-offset="0">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
            document.documentElement.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    </script>

    <div id="wrapper">

        <div class="container">

            <section id="top" class="section docs-heading">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>Pl3xMap Documentation</h1>
                            <p class="lead">Minimalistic and lightweight world map viewer for<br>Minecraft servers using the vanilla rendering style</p>
                        </div>
                    </div>
                </div>
                <hr>
            </section>

            <div class="row">
                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200">
                        <ul class="nav">
                            <li><a href="/getting-started">Getting Started</a></li>
                            <li><a href="/how-to-install">How to Install WordPress</a></li>
                            <li><a href="/how-to-theme">How to Install Theme</a></li>
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
                </div>
                <div class="col-md-9">

                    <section class="welcome">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Introduction</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 full">
                                        <div class="intro1">
                                            <ul>
                                                <li><strong>Item Name : </strong>Gather Responsive Event Template</li>
                                                <li><strong>Item Version : </strong> v 1.0</li>
                                                <li><strong>Author : </strong> <a href="http://themeforest.net/user/surjithctly" target="_blank">Surjith S M</a></li>
                                                <li><strong>Support Forum : </strong> <a href="https://support.surjithctly.in/forums" target="_blank">https://support.surjithctly.in/forums</a></li>
                                                <li><strong>License : </strong> <a href="#" target="_blank">Un License</a></li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>First of all, Thank you so much for purchasing this template and for being my loyal customer.
                                                <strong>You are awesome!</strong>
                                                <br> You are entitled to get free lifetime updates to this product + exceptional support from the author directly.
                                            </p>
                                            <p>This documentation is to help you regarding each step of customization. Please go through the documentation carefully to understand how this template is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize this template. You may learn basics <a href="http://www.w3schools.com/" target="_blank">at w3schools</a>, <a href="https://developer.mozilla.org/" target="_blank">mozilla mdn pages</a> and <a href="http://learn.shayhowe.com/html-css/building-your-first-web-page/" target="_blank">shayhowe tutorials</a>. </p>
                                            <h3>Requirements</h3>
                                            <p>You will need the following sofwares to customize this template.</p>
                                            <ol>
                                                <li>Code Editing Software (eg: Dreamweaver, Sublime Text or Notepad)</li>
                                                <li>Web Browser for testing (eg: Google Chrome or Mozilla Firefox)</li>
                                                <li>FTP Tool to upload files to Server (eg: <a href="https://filezilla-project.org/download.php?type=client" target="_blank">FileZilla</a>) </li>
                                            </ol>
                                            <div class="intro2 clearfix">
                                                <p><i class="fa fa-warning"></i> Be careful while editing the template. If not edited properly, the design layout may break completely.
                                                    <br> No support is provided for faulty customization.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="getting-started" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Getting Started</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                <h3>Bootstrap Grid System</h3>
                                <pre class="brush: html; highlight: [2,4]">
                                    $lt;div class="container">
                                        $lt;div class="row">
                                            $lt;div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                YOUR CODES GOES HERE
                                            $lt;/div>
                                        $lt;/div>
                                    $lt;/div>
                                </pre>
                                <p>Our you can use the grid system with 2 columns like this;</p>
                                <pre class="brush: html">
                                    $lt;div class="container">
                                        $lt;div class="row">
                                            $lt;div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                YOUR CODES GOES HERE
                                            $lt;/div>
                                            $lt;div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                YOUR CODES GOES HERE
                                            $lt;/div>
                                        $lt;/div>
                                    $lt;/div>
                                </pre>
                                <p>Our you can use the grid system with 3 columns like this;</p>
                                <pre class="brush: html">
                                    $lt;div class="container">
                                        $lt;div class="row">
                                            $lt;div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                YOUR CODES GOES HERE
                                            $lt;/div>
                                            $lt;div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                YOUR CODES GOES HERE
                                            $lt;/div>
                                            $lt;div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                YOUR CODES GOES HERE
                                            $lt;/div>
                                        $lt;/div>
                                    $lt;/div>
                                </pre>
                            </div>
                        </div>
                    </section>

                    <section id="how-to-install" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Install WordPress</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="intro2 clearfix">
                            <p><i class="fa fa-wordpress"></i> Lorem the It is a long established fact that a reader will be distracted..
                                <br> Please read more about WordPress here. <a href="#">WordPress Installation via FTP.</a>
                            </p>
                        </div>
                        <hr>
                        <h3>Upload via WordPress Admin</h3>
                        <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="media">
                                    <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/snFzbPm_RUE?origin=<?=$origin?>" frameborder="0" allowfullscreen></iframe>-->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="how-to-theme" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Install Theme</h2>
                                <hr>
                            </div>
                        </div>
                        <h3>Upload via WordPress Admin</h3>
                        <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                        <hr>
                        <h3>Upload via FTP Server</h3>
                        <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/yQnQyI5WlKs?origin=<?=$origin?>" frameborder="0" allowfullscreen></iframe>-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/z0kEVwJB_go?origin=<?=$origin?>" frameborder="0" allowfullscreen></iframe>-->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="necessary-plugins" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Necessary Plugins</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/images/plugin1.webp" alt="" class="img-responsive img-thumbnail">
                                <h3>Plugin name #1</h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="/images/plugin2.webp" alt="" class="img-responsive img-thumbnail">
                                <h3>Plugin name #2</h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="/images/plugin3.webp" alt="" class="img-responsive img-thumbnail">
                                <h3>Plugin name #3</h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                            </div>
                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="creating-blog-pages" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Creating Blog Pages</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                                <h3 id="creating-blog-pages_wordpress-blog-page">WordPress Blog Page -</h3>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                                <h3 id="creating-blog-pages_blog-post-sections">Blog Post Sections -</h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                                <h3 id="creating-blog-pages_create-blog-gallery">Create Blog Gallery -</h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="revolution-slider" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Install Revolution Slider</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <div class="col-md-6">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                                <h3>Installation Slider</h3>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                                <h3>Updating Slider</h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section id="how-to-use-optional-panel" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Use Option Panel</h2>
                                <hr id="how-to-use-optional-panel_general-options">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>General Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                        <hr id="how-to-use-optional-panel_style-options">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>Style Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                        <hr id="how-to-use-optional-panel_header-options">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>Header Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                        <hr id="how-to-use-optional-panel_font-options">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>Font Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                        <hr id="how-to-use-optional-panel_slider-options">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>Slider Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                        <hr id="how-to-use-optional-panel_page-options">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>Page Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                        <hr id="how-to-use-optional-panel_import-export">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/images/thumbnail.webp" data-rel="prettyPhoto"><img src="/images/thumbnail.webp" alt="thumbnail" title="thumbnail" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="col-md-8">
                                <h3>Import & Export Options - </h3>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                        </div>
                    </section>

                    <section id="support-desk" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Support Desk</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Please remember you have purchased a very affordable theme and you have not paid for a full-time web design agency. Occasionally we will help with small tweaks, but these requests will be put on a lower priority due to their nature. Support is also 100% optional and we provide it for your connivence, so please be patient, polite and respectful.</p>
                                <p>Please visit our <a href="http://themeforest.net/user/yourusername"><strong>profile page</strong></a> or ask question <a href="mailto:yourusername@gmail.com">@yourusername</a></p>
                                <strong>Support for my items includes:</strong>
                                <ul>
                                    <li>* Responding to questions or problems regarding the item and its features</li>
                                    <li>* Fixing bugs and reported issues</li>
                                    <li>* Providing updates to ensure compatibility with new software versions</li>
                                </ul>
                                <strong>Item support does not include:</strong>
                                <ul>
                                    <li>* Customization and installation services</li>
                                    <li>* Support for third party software and plug-ins</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <strong>Before seeking support, please...</strong>
                                <ul>
                                    <li>* Make sure your question is a valid Theme Issue and not a customization request.</li>
                                    <li>* Make sure you have read through the documentation and any related video guides before asking support on how to accomplish a task.</li>
                                    <li>* Make sure to double check the theme FAQs.</li>
                                    <li>* Try disabling any active plugins to make sure there isn't a conflict with a plugin. And if there is this way you can let us know.</li>
                                    <li>* If you have customized your theme and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                                    <li>* Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                                    <li>* Make sure to state the name of the theme you are having issues with when requesting support via ThemeForest.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section id="files-and-sources" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Files & Sources</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Included Stylesheets</strong>
                                <p>These are the primary CSS files used for general front-end styling. Use these to customize your theme even further. All included JavaScript codes under <strong>yourthemename/css/</strong></p>
                                <ul>
                                    <li>1. style.css - Primary stylesheet</li>
                                    <li>2. bootstrap.css - Bootstrap stylesheet</li>
                                    <li>3. owl-carousel.css - OWL Carousel</li>
                                    <li>4. fontawesome.css - FontAwesome Font Icons stylesheet</li>
                                    <li>5. custom.css - Pathos Color Schemes stylesheet</li>
                                    <li>6. prettyPhoto.css - Lightbox effect css file</li>
                                    <li>7. flexslider.css - Flexslider css file</li>
                                    <li>8. et-line.css - Elegant icons css file</li>
                                    <li>9. carousel.css - OWL Carousel css file</li>
                                    <li>10. animate.css - CSS3 animations css file</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <strong>Included JavaScript</strong>
                                <p>These are the various attribution inks to the Javascript files included or modified to work with in this theme. All included JavaScript codes under <strong>yourthemename/js/</strong></p>
                                <ul>
                                    <li>1. bootstrap.js - Bootstrap JavaScript</li>
                                    <li>2. custom.js - All JavaScript Plugins</li>
                                    <li>3. retina.js - Retina JavaScript</li>
                                    <li>4. jquery.js - Base JavaScript</li>
                                    <li>5. prettyPhoto.js - Lightbox JavaScript</li>
                                    <li>6. owl-carousel.js - Lightbox JavaScript</li>
                                    <li>7. revslider.js - Revolution Slider JavaScript</li>
                                    <li>8. flexslider.js - Flexslider JavaScript</li>
                                    <li>9. awesome-grid.nin.js - Awesome grid portfolio JavaScript</li>
                                    <li>10. circle.js - Coming soon page JavaScript</li>
                                    <li>11. contact.js - Contact form validate JavaScript</li>
                                    <li>12. isotope.js - Masonry Portfolio JavaScript</li>
                                    <li>13. progress.js - Progress bar JavaScript</li>
                                    <li>14. rotate.js - Text rotate effect JavaScript</li>
                                    <li>15. wow.js - CSS3 animation JavaScript</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section id="version-history-changelog" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Version History (Changelog)</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>You can find the version history (changelog.txt) file on <strong>yourthemename-full.zip</strong> folder or you can check changelog on theme sale page.</p>
                                <p>Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. No guarantees, but I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section.</p>
                                <hr>
                                <h3>Changelog</h3>
                                <pre class="brush: html">

-----------------------------------------------------------------------------------------
Version 3.8.4 - May 7th, 2015
-----------------------------------------------------------------------------------------

- new revolution slider plugin version
- fixed security issue with xss vulnerability
- improved demo importer for certain server environments
- updated WooCommerce template files for the outdated message in system status
- added suhosin check in system status 
- added information that explains ZipArchive is required on your server for importing demos 
- portfolio Grid template improvement
- added more information to demo popup message for individual demo requirements
- RTL style improvements
- breadcrumb function improved for various areas

-----------------------------------------------------------------------------------------
Version 3.8.3 - May 7th, 2015
-----------------------------------------------------------------------------------------
- fixed responsive / retina issue for larger logos
- fusion slider now uses responsive headings all the time
- dropped custom Avada styles for select boxes in IE since it is not supported
- fixed compatibility issue with Category Order and Taxonomy Terms Order plugin
- fixed issue of full width background being affected by padding options
- tested and fixed hellobar issue 
- typography settings now apply to single post pages
- improved smooth scroll in certain situations
- youtube & vimeo videos will show at normal size in light box as long as video embed link is not used
- fixed issue of "fixed" featured image mode not working for carousels / recent work
- fixed issue of header tagline font not working with font options

-----------------------------------------------------------------------------------------
Version 3.8.2 - May 7th, 2015
-----------------------------------------------------------------------------------------
- fixed formatting issues with Turkish language files 
- letter spacing menu option improvement
- improved fusion slider max content width setting
- removed the "disable first featured image on products" setting since it does not apply
- improved portfolio featured image loading
- removed encoding from tracking code, space before head, space before body, and custom CSS to stop it from parsing code within TO and removing special characters e.g. +
- woo login box now shows login fields for logged out users
- woo cart / my account links now show on mobile 
- fixed button styling issue with gravity forms

                                </pre>
                            </div>
                        </div>
                    </section>

                    <section id="copyright-and-license" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Copyright and license</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Code released under the <a href="#" target="_blank">Un License</a> License.</p>
                                <p>For more information about copyright and license check <a href=" https://choosealicense.com/licenses/unlicense/" target="_blank">choosealicense.com</a>.</p>
                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </div>

    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/syntax-highlighter/scripts/shCore.js"></script>
    <script src="/js/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script src="/js/syntax-highlighter/scripts/shBrushCss.js"></script>

<?php
if (isset($id)) {
?>
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                let top = $('#<?= $id ?>')?.offset()?.top ?? 0
                if (top > 0) {
                    $('html,body').animate({
                        scrollTop: top
                    }, 500)
                }
            }, 0);
        });
    </script>

<?php
}
?>
</body>

</html>