<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
<div id="jmpress" data-template="auto">
	
	<section>
		<?php	 print $innerContent; ?>
	</section>
	
</div>
	
<?php $this->inc('elements/footer.php'); ?>
