<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
?>

<section
	data-x="<?php	echo $th->filterNonAlphaNum($dataX)?>"
	data-y="<?php	echo $th->filterNonAlphaNum($dataY)?>"
	data-z="<?php	echo $th->filterNonAlphaNum($dataZ)?>"
	data-scale="<?php	echo $th->filterNonAlphaNum($dataScale)?>"
	data-rotate="<?php	echo $th->filterNonAlphaNum($dataRotate)?>"
	<?php if ($boxStyle == 1) { ?>
	class="noborder"
	<?php } ?>>
<?php	echo $content?>
</section>


