<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="es" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{$post.description|default:$_layoutParams.configs.app_slogan}">
        <meta name="keywords" content="{$post.keywords}">
        <meta name="author" content="{$post.author}">
        <title>{$post.title|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="{$_layoutParams.path_css}normalize.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.path_css}foundation.css" rel="stylesheet" type="text/css" />
        <script src="{$_layoutParams.path_js}vendor/modernizr.js" type="text/javascript"></script>
        <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>

        {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        
        <script src="{$js}" type="text/javascript"></script>
        
        {/foreach}
        {/if}
    </head>

    <body>
        <div class="fixed">
            <nav class="top-bar" data-topbar>
              <ul class="title-area">
                <li class="name">
                  <h1><a href="#">{$_layoutParams.configs.app_name}</a></h1>
                </li>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>
              <section class="top-bar-section">
                <ul class="left">
                {if isset($widgets.top)}
                    {foreach from=$menues.header item=tp}
                        {$tp}
                    {/foreach}
                    {foreach from=$widgets.top item=tp}
                        {$tp}
                    {/foreach} 
                {/if}
                </ul>
              </section>
            </nav>
        </div>