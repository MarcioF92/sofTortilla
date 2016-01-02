        </div> <!-- Content -->

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
        <script src="{$_layoutParams.path_js}vendor/jquery.js"></script>
        <script src="{$_layoutParams.path_js}foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>