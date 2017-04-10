<?php include(dirname(__FILE__).'/header.php'); ?>


<div class="row">
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<div class="col s12 m4 l3">
			<div class="card" id="post-<?php echo $plxShow->artId(); ?>">
				<div class="card-image">
					<?php $plxShow->artThumbnail(); ?>
					<span class="card-title"><?php $plxShow->artTitle('link'); ?></span>
				</div>
				<div class="card-content">
              		<?php $plxShow->artChapo(); ?>
            	</div>
            	<div class="card-action">
              		<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> | <time class="art-date" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
									<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
								</time> | <?php $plxShow->artNbCom(); ?>
            	</div>


						
						

						<footer>
							<small>
								<span class="classified-in">
									<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
								</span>
								<span class="tags">
									<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
								</span>
							</small>
						</footer>

			</div>
		</div>
	<?php endwhile; ?>

					<nav class="pagination text-center">
						<?php $plxShow->pagination(); ?>
					</nav>

					<span>
						<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
					</span>

				

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			</div>


<?php include(dirname(__FILE__).'/footer.php'); ?>
