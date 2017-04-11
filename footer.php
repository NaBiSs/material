<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer class="footer">
		<div class="container">
			<p>
				<?php $plxShow->mainTitle('link'); ?> - <?php $plxShow->subTitle(); ?> &copy; 2017
			</p>
			<p>
				<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				<?php $plxShow->httpEncoding() ?> - 
				<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			</p>
			<ul class="menu">
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			</ul>
		</div>
	</footer>

	<script type="text/javascript" src="<?php $plxShow->template(); ?>/inc/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/inc/materialize/dist/js/materialize.min.js"></script>
	<script>
		$(".second-nav").sideNav({
			edge: 'right',
			draggable: true
		});
		$(this).add('.btn-floating').dropdown({
      		inDuration: 300,
      		outDuration: 225,
      		constrainWidth: false, // Does not change width of dropdown to that of the activator
      		hover: true, // Activate on hover
      		gutter: 0, // Spacing from edge
      		belowOrigin: true, // Displays dropdown below the button
      		alignment: 'left', // Displays dropdown with edge aligned to the left of button
      		stopPropagation: true // Stops event propagation
    		}
  		);
	</script>
</body>

</html>
