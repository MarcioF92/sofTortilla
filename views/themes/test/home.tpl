<!DOCTYPE html>

<html>
    <head>
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="{$_layoutParams.ruta_css}estilos.css" rel="stylesheet" type="text/css" />
        <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
        <script src="{$_layoutParams.root}public/js/jquery.validate.js" type="text/javascript"></script>
    
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        
        <script src="{$js}" type="text/javascript"></script>
        
        {/foreach}
        {/if}
    </head>

    <body>
        <body>
            <div id="main">
                <h1>Home</h1>
                <div id="header">
                    <div id="logo">
                        <h1>{$_layoutParams.configs.app_name}</h1>
                    </div>

                    <div id="menu">
                        <div id="top_menu">
                            <!--<ul>
                            {if isset($_layoutParams.menu)}
                            {foreach item=it from=$_layoutParams.menu}
                            
                            {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                                
                                {assign var="_item_style" value='current'}
                                
                            {else}
                            
                                {assign var="_item_style" value=''}
                                
                            {/if}
                            
                            <li><a class="{$_item_style}" href="{$it.enlace}">{$it.titulo}</a></li>

                            {/foreach}
                            {/if}
                            </ul>-->
                            <p>El Menú del default sidebar</p>

                            {if isset($widgets.sidebar)}

                                {foreach from=$widgets.sidebar item=wd}
                                    {$wd}
                                {/foreach}
                            {/if}

                            {if isset($widgets.top)}
                                {foreach from=$widgets.top item=tp}
                                    {$tp}
                                {/foreach}
                            {/if}
                            <p>Termina el menú</p>
                        </div>
                    </div>
                </div>

                <div id="content">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                    
                    {if isset($_error)}
                    <div id="error">{$_error}</div>
                    {/if}

                    {if isset($_mensaje)}
                    <div id="mensaje">{$_mensaje}</div>
                    {/if}

                    {include file=$_contenido}
                    
                </div>

            <div id="footer">
                Copyright &copy; 2012 <a href="http://www.dlancedu.com" target="_blank">{$_layoutParams.configs.app_company}</a>
            </div>
        </div>

        <!-- javascript -->
        <script type="text/javascript">
            var _root_ = '{$_layoutParams.root}';
        </script>
        
        {if isset($_layoutParams.js_plugin) && count($_layoutParams.js_plugin)}
            {foreach item=plg from=$_layoutParams.js_plugin}
                <script src="{$plg}" type="text/javascript"></script>
            {/foreach}
        {/if}
        
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}
    </body>
</html>