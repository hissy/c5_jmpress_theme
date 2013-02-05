<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
	<p><small>
	<?php
	$u = new User();
	if ($u->isRegistered()) { ?>
		<?php  
		if (Config::get("ENABLE_USER_PROFILES")) {
			$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
		} else {
			$userName = $u->getUserName();
		}
		?>
		<span class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
	<?php  } else { ?>
		<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
	<?php  } ?>
		<span class="copyright">&copy;<?php echo date('Y')?> <?php echo SITE?></span>
		<span class="tag-line"><?php	echo t('Built with <a href="http://www.concrete5.org/" alt="Free Content Management System" target="_blank">concrete5 - an open source CMS')?></span>
	</small></p>
</footer>

<?php if (!$c->isEditMode()) { ?>
<script type="text/javascript">
$(function() {
    $('#jmpress').jmpress({
    	stepSelector: "section"
    });
});
</script>
<?php } ?>

<?php  Loader::element('footer_required'); ?>

</body>

</html>