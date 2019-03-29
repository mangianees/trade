<?php
$targ = $_SERVER['DOCUMENT_ROOT'].'trade/storage/app/public';
$linkf =$_SERVER['DOCUMENT_ROOT'].'public_html/storage';
symlink($targ,$linkf);
echo 'success';

