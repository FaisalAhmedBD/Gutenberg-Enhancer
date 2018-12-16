<?php

defined('ABSPATH') || exit;

//add action enque block editor assets
add_action('enqueue_block_editor_assets','gutenberg_customizer_basic_block_enqueue_block_editor_assets');

function gutenberg_customizer_basic_block_enqueue_block_editor_assets(){

    wp_enqueue_script(

        // scirpt name,
        'gutenberg-customizer-basic-block',

        // full url of the script 
        plugins_url('index.build.js',__FILE__),

        // dependencies this script needs
        array('wp-blocks','wp-i18n','wp-element'),

        //script version number
        filemtime(plugin_dir_path(__FILE__) . 'index.build.js')

    );

}

?>