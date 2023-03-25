            <footer>
                <div class="footer_down">
                    <div class="container">
                        Criado com ❤️ por OlaOrmundos
                    </div>
                </div>
            </footer>
            <script type="text/javascript">
                var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
            </script>
        <?php wp_footer(); ?>
        <style type="text/css">
            .post_title a{
                color: <?php echo esc_html( get_theme_mod('olmb7_cortitulo') ); ?>;
            }
            .post_button{
                background-color: <?php echo esc_html( get_theme_mod('olmb7_corbotao') ); ?>;
            }
        </style>
    </body>
</html>