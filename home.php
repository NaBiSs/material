<?php include(dirname(__FILE__).'/header.php'); ?>


<div class="row">
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<div class="col s12 m6 l4">
			<div class="card" id="post-<?php echo $plxShow->artId(); ?>">
				<div class="card-image">
					<?php $plxShow->artThumbnail(); ?>
					<time class="chip" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
					<span class="card-title"><?php $plxShow->artTitle('link'); ?></span>
					<a class="btn-floating halfway-fab waves-effect waves-light red" href='#' data-activates='dropdown1'><i class="material-icons">add</i></a>
					<ul id='dropdown1' class='dropdown-content'>
    					<li><a href="#!">one</a></li>
    					<li><a href="#!">two</a></li>
    					<li class="divider"></li>
    					<li><a href="#!">three</a></li>
    					<li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    					<li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  					</ul>
        
				</div>
				<div class="card-content">
              		<?php $plxShow->artChapo(); ?>
            	</div>
            	<div class="card-action">
              		<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> |  | <?php $plxShow->artNbCom(); ?>
            	</div>


							<small>
								<span class="classified-in">
									<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
								</span>
								<span class="tags">
									<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
								</span>
							</small>

			</div>
		</div>
	<?php endwhile; ?>
</div>
					<div class="pagination">
						<?php $plxShow->pagination(); ?>
					</div>

					<span>
						<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
					</span>

				

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			


<?php include(dirname(__FILE__).'/footer.php'); ?>
