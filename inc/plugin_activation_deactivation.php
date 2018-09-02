<?php
	 function plugin_activation(){
		if(version_compare(get_bloginfo('version'),'4.0.0','<=')){
        wp_die('Please Update Your WordPress Version. Your need at least 4.0 or above for acyivate this plugin..!');
		}
	}
    function plugin_deactivation(){
        delete_option('rewrite_rules');
    }

?>