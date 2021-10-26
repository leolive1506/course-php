<?php 
session_id('0sfd3i7414hju4b89037odrpv8');
require_once("config.php");
session_regenerate_id();
echo session_id();

var_dump($_SESSION);

?>