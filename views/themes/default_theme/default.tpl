<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="es" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="{$_layoutParams.ruta_css}normalize.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.ruta_css}foundation.css" rel="stylesheet" type="text/css" />
        <script src="{$_layoutParams.ruta_js}vendor/modernizr.js" type="text/javascript"></script>
        <script src="{$_layoutParams.ruta_js}tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="{$_layoutParams.ruta_js}tiny.js" type="text/javascript"></script>
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
                    {foreach from=$widgets.top item=tp}
                        {$tp}
                    {/foreach}
                {/if}
                </ul>
              </section>
            </nav>
        </div>


          <div class="row">
     
            <div class="large-9 columns" role="content">
         
              <article>

                <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                    
                    {if isset($_error)}
                    <div id="error">{$_error}</div>
                    {/if}

                    {if isset($_mensaje)}
                    <div id="mensaje">{$_mensaje}</div>
                    {/if}

                    {include file=$_contenido}
                    
                </article>
            </div>

            <aside class="large-3 columns">

                {if isset($widgets.sidebar)}
                    {foreach from=$widgets.sidebar item=wd}
                        {$wd}
                    {/foreach}
                {/if}

            </aside>

        </div>

            <footer class="row">
            <div class="large-12 columns">
              <hr/>
              <div class="row">
                <div class="large-6 columns">
                  <p>Copyright &copy; 2015 <a href="http://www.dlancedu.com" target="_blank">{$_layoutParams.configs.app_company}</p>
                </div>
              </div>
            </div>
          </footer>

        <!-- javascript -->
        <script type="text/javascript">
            var _root_ = '{$_layoutParams.root}';
        </script>
        
        {if isset($_layoutParams.jsPlugin) && count($_layoutParams.jsPlugin)}
            {foreach item=plg from=$_layoutParams.jsPlugin}
                <script src="{$plg}" type="text/javascript"></script>
            {/foreach}
        {/if}
        
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}
        <script src="{$_layoutParams.ruta_js}vendor/jquery.js"></script>
        <script src="{$_layoutParams.ruta_js}foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>