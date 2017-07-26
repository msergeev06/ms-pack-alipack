<?php

$packageName = 'alipack';

include_once ($_SERVER["DOCUMENT_ROOT"]."/msergeev_config.php");
MSergeev\Core\Lib\Loader::IncludePackage($packageName);
__include_once(MSergeev\Core\Lib\Loader::getTemplate($packageName)."header.php");

MSergeev\Core\Lib\Buffer::addCSS(MSergeev\Core\Lib\Loader::getTemplate($packageName)."css/style.css");
MSergeev\Core\Lib\Buffer::addJS(MSergeev\Core\Lib\Config::getConfig("CORE_ROOT")."js/jquery-1.11.3.min.js");
MSergeev\Core\Lib\Buffer::addJS(MSergeev\Core\Lib\Loader::getTemplate($packageName)."js/script.js");
\MSergeev\Core\Lib\Plugins::includeBootstrapCss();
\MSergeev\Core\Lib\Plugins::includeBootstrapJs();

$path=MSergeev\Core\Lib\Loader::getSitePublic($packageName);
