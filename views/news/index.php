<div id="container">
	<div id="content">
		<div id="wrapper">
		<?php foreach ($news as $news_item): ?>
		<h1><?php echo $news_item['title'] ?></h1>
			<div id="main">
				<?php echo $news_item['text'] ?>
			</div>
			<p><a href="news/<?php echo $news_item['slug'] ?>">View article</a> - Link not working yet!</p>
			<?php endforeach ?>
		</div>
	</div>
</div>