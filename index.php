<?php
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=a.pdf");
@readfile('a.pdf');
?>
