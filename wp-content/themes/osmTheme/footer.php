    
        
        </div>
        <?php wp_footer() ?>
        <footer>
            <?php 
                wp_nav_menu([
                    'theme_location'    => 'footer',
                    'container'         => false,
                    'menu_class'        => 'navbar-nav mr-auto'
                    ]) 
            ?>
        </footer>
    </body>

</html>