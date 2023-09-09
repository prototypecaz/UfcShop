<script type="text/javascript">




</script>

<?php


session_start();
$_SESSION['user']="";
http_response_code(302);
header("Location: ./");
exit();


?>
