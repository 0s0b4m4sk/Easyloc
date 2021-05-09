<?php
function init_php_session() : bool
{
	if(!session_id())
	{
		session_start();
		session_regenerate_id();
		return true ; 
	}

	return false ; 
}



function clean_php_session(): void 
{
	session_unset();
	session_destroy();
}

function is_connect (): bool 
{

}


function is_admin(): bool
{
	//si user_rang = 1 alors user is admin 
	// sinon user 
}

?>