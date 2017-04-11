<?php if(!defined('PLX_ROOT')) exit; ?>


<ul id="slide-out" class="side-nav">
    	<li><a class="subheader"><i class="material-icons">view_list</i><?php $plxShow->lang('CATEGORIES'); ?></a></h3>

		<?php $plxShow->catList('','<li id="#cat_id"><a class="waves-effect #cat_status" href="#cat_url" title="#cat_name">#cat_name (#art_nb)</a> </li>'); ?>
		

		<li><a class="subheader"><i class="material-icons">trending_up</i><?php $plxShow->lang('LATEST_ARTICLES'); ?></a></li>

		<?php $plxShow->lastArtList('<li><a class="waves-effect #art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>

		<li><a class="subheader"><i class="material-icons">label_outline</i><?php $plxShow->lang('TAGS'); ?></a></li>

		<?php $plxShow->tagList('<li class="waveseffect tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>'); ?>

		<li><a class="subheader"><i class="material-icons">comment</i><?php $plxShow->lang('LATEST_COMMENTS'); ?></a></li>

		<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(23)</a></li>'); ?>

		<li><a class="subheader"><i class="material-icons">restore</i><?php $plxShow->lang('ARCHIVES'); ?></a></li>

		<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
</ul>


