<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php	echo LANGUAGE?>">
<head>

<?php  Loader::element('header_required'); ?>

<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="<?php echo $this->getStyleSheet('main.css')?>" type="text/css" />
<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/jmpress.js"></script>

</head>

<?php
$body_class = "is-not-edit-mode";
if ($c->isEditMode()) $body_class = "is-edit-mode";
?>
<body class="<?php echo $body_class?>">