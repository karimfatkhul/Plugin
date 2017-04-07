<?php
/*Plugin Name 	: Custom Notification
Plugin URI		: https://bikinwebsendiri.com/
Description		: Put some custome notice with this plugin
Author			: Fatkhul Karim
Author URI		: https://askzero.id/
Version			: 1.0
*/
function zero_admin_notices(){
	if (isset($_GET['page']) && $_GET['page'] == 'index.php')
	{
		ob_start(); ?>
		<div class="success">
			<p><strong>Welcome to Your Home</strong></p>
		</div>
		<?php
		echo "ob_get_clean()";
	}
}
add_action('admin_notices', 'zero_admin_notices');