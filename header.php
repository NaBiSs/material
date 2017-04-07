<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>


	<!--Import Google Icon Font-->
    	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import Theme-->
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/materialize.css" media="screen"/>


	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">


  <nav>
    <div class="nav-wrapper">
      <div class="brand-logo"><?php $plxShow->mainTitle('link'); ?> <span class="nav-title"><?php $plxShow->subTitle(); ?></span></div>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
	  	<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
		<?php $plxShow->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
		<li><a href="#" data-activates="slide-out" class="second-nav"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>

