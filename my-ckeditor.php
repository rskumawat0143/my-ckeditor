<?php
/**
 * Microsoft's my-ckeditor for WonderCMS! :)
 *
 * @author mjxl
 * @version 1.1.1
 */

global $Wcms;

if (defined('VERSION')) {
$Wcms->addListener('js', 'myckeditorJS');
$Wcms->addListener('css', 'myckeditorCSS');
}
function myckeditorJS($args)
{
  global $Wcms;
  if ($Wcms->loggedIn) {
    $script = <<<EOT
    <script src='https://code.jquery.com/jquery-3.7.1.js'></script>
    <script src='https://cdn.ckeditor.com/4.15.1/full-all/ckeditor.js'></script>
    <script src='{$Wcms->url('plugins/my-ckeditor-main/js/myckeditor.js')}'></script>
EOT;
    $args[0] .= $script;
  }
  return $args;
}

function myckeditorCSS($args)
{    
  global $Wcms;
  if ($Wcms->loggedIn) {
    $script = <<<EOT

    <link rel='stylesheet' href='{$Wcms->url('plugins/my-ckeditor-main/css/myckeditor.css')}' media='screen'>
EOT;
    $args[0] .= $script;
  }
  return $args;
}

