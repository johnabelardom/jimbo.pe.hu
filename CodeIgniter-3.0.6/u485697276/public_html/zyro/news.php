<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>News</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="News" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.35" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1469326523" rel="stylesheet" type="text/css" />
	<link href="css/news.css?ts=1469326523" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="/gallery/question-mark-ts1469323908.png" type="image/png" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance23" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu menu-landing"></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance23'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); })(); </script></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance26" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(news);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance26");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance26").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 240px;">
	
<div id="wb_element_instance24" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">I <i class="icon-wb-logo"></i><a href="http://zyro.com/" target="_blank" title="Zyro - Website Builder">Zyro</a></div></div><div id="wb_element_instance25" class="wb_element"><iframe width="200" height="140" style="width: 200px; height: 140px;" scrolling="no" allowTransparency="true" src="https://www.facebook.com/plugins/like.php?locale=en_US&amp;href=http%3A%2F%2Fwww.facebook.com%2Fjenusits&amp;layout=standard&amp;show_faces=true&amp;width=200&amp;height=140&amp;action=like&amp;colorscheme=dark" frameborder="0"></iframe></div><div id="wb_element_instance27" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(160);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
