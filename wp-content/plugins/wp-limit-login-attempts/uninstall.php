<?php 

//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

    global $wpdb;
    $tablename = $wpdb->prefix."limit_login"; 

    if($wpdb->get_var("SHOW TABLES LIKE '$tablename'") == $tablename ){
        $sql = "DROP TABLE `$tablename`;";  
        $wpdb->query($sql);
    }

?>