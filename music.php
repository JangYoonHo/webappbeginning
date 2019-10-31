<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>
		
		<!-- Ex 1: Number of Songs (Variables) -->
		<p>
			I love music.
			<?php
			$song_count = 200;
			$song_hour = (int)20;
			print "I have $song_count total songs, \n";
			print "which is over $song_hour hours of music!"
			?>
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<!-- Ex 3: Query Variable -->
		<div class="section">
			<h2>Billboard News</h2>
			<ol>
			<?php 
			$loop_bound = 5;
			$news = $_GET["newspages"];
			for ($i=0;$i<$news;$i++){ ?>
				<li> <a href="https://www.billboard.com/archive/article/2019<?=10-$i?>">2019-<?= 11-$i?></a></li>
			<?php }?>
			</ol>
		</div>

		<!-- Ex 4: Favorite Artists (Arrays) -->
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
			<ol>
			<?php $art = array("Guns N' Roses", "Green Day", "Blink182", "Queen");
			$fav = file("favorite.txt");
			for ($i = 0; $i < count($fav); $i++) { ?>
				<li> <a href="http://en.wikipedia.org/wiki/<?=$fav[$i][0]?>_<?=$fav[$i][1]?>"><?= $fav[$i] ?> </li><!--Green Day의 경우에는 링크에 Green_Day 이렇게 연결되도록 하고 싶은데 어떻게 하면 되나요?-->
			  <?php } ?>         
			</ol>
		</div>
		
		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<ul id="musiclist">
			<?php
			$music = glob("lab5/musicPHP/songs/*.mp3");
			foreach ($music as $musiclist) { ?>
				<li><?= $musiclist ?></li>
			<?php }?>
			</ul>
			<ul>
			<?php 
			foreach (scandir("lab5/musicPHP/songs") as $musiclist) {
			$size = filesize($musiclist)/1024;?>
    		<li><?= $musiclist?> <?= $size?></li>
  			<?php } ?>
			</ul>
				<!--<li class="mp3item">
					<a href="lab5/musicPHP/songs/paradise-city.mp3">paradise-city.mp3</a>
				</li>
				
				<li class="mp3item">
					<a href="lab5/musicPHP/songs/basket-case.mp3">basket-case.mp3</a>
				</li>

				<li class="mp3item">
					<a href="lab5/musicPHP/songs/all-the-small-things.mp3">all-the-small-things.mp3</a>
				</li>-->

				<!-- Exercise 8: Playlists (Files) -->
				<ul id="musiclist">
				<?php
				$music2 = glob("lab5/musicPHP/songs/*.m3u");
				foreach ($music2 as $musiclist2) { ?>
				<li><?= $musiclist2 ?></li>
				<?php }?>
				</ul>
				<!--<li class="playlistitem">326-13f-mix.m3u:
					<ul>
						<li>Basket Case.mp3</li>
						<li>All the Small Things.mp3</li>
						<li>Just the Way You Are.mp3</li>
						<li>Pradise City.mp3</li>
						<li>Dreams.mp3</li>
					</ul> -->
			
		</div>

		<div>
			<a href="https://validator.w3.org/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://jigsaw.w3.org/css-validator/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
