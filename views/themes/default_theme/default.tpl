<!--
Template Name: Default
-->

{include file="header.tpl"}

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

                {include file="sidebar.tpl"}

            </aside>

        </div>

{include file="footer.tpl"}