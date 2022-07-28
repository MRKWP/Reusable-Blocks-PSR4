<?php
/**
 * @package Domain_Core
 */
namespace Domain_Core\Admin;

class ReusableBlock{

    /**
     * Default register function called by Init Class.
     *
     * @return void
     */
    public function register(){
        add_action('admin_menu',[$this, 'add_reusable_blocks_admin_menu']);
    }

    /**
     * Add reusable blocks to admin screen
     *
     * @return void
     */
    public function add_reusable_blocks_admin_menu(){
        add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
    }
}