<?php
/**
* Changes Logs Tab
*/
if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}
?>
<div class="dct-section dct-changelog">
<p></p>
 <?php
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_URL, dct_changelogs );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            $result = curl_exec( $ch );
            echo preg_replace( "/<script.*?\/script>/s", "", $result );
        ?>
</div>		