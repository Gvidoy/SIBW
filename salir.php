<?php

session_start();
unset ($SESSION['mail']);
session_destroy();

echo('<script type="text/javascript">location.href="index.php?sec=hotel";</script>');

?>