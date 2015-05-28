<!--
Template Name: Posts/Pages
-->

{include file="post_header.tpl"}

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

                    <div class="title"><h2>{$post.title}</h2></div>

                    {$post.content}
                    
                </article>
            </div>

            <aside class="large-3 columns">

                {include file="sidebar.tpl"}

            </aside>

        </div>

{include file="footer.tpl"}