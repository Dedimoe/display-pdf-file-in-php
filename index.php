<?php
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=dummy.pdf");
@readfile('dummy.pdf');
?>
