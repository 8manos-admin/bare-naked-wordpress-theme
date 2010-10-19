<aside>
<?php
	dynamic_sidebar('sidebar');
	if(is_user_logged_in()){
		dynamic_sidebar('sidebar-pruebas');
	}
?>
</aside>
