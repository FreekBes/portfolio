<?PHP
	// error_reporting(E_ALL); ini_set('display_errors', 1);

	// FROM https://stackoverflow.com/questions/3776682/php-calculate-age
	//date in mm/dd/yyyy format; or it can be in other formats as well
	$birthDate = "10/21/1999";
	//explode the date to get month, day and year
	$birthDate = explode("/", $birthDate);
	//get age from date or birthdate
	$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
		? ((date("Y") - $birthDate[2]) - 1)
		: (date("Y") - $birthDate[2]));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Freek Bes</title>
		<meta name="title" content="Freek Bes" />
		<meta name="description" content="Hi! My name is Freek. I'm a <?PHP echo $age; ?> years old guy who enjoys programming, playing videogames and taking pictures." />
		<meta itemprop="description" content="Hi! My name is Freek. I'm a <?PHP echo $age; ?> years old guy who enjoys programming, playing videogames and taking pictures." />
		<link rel="image_src" href="https://freekb.es/imgs/me.jpg" />
		<meta name="url" content="https://freekb.es/" />
		<meta name="identifier-url" content="https://freekb.es/" />
		<meta name="subject" content="Freek Bes" />
		<meta name="keywords" content="portfolio, about, freek bes, online" />
		<meta name="robots" content="all" />
		<meta name="language" content="EN" />
		<meta name="theme-color" content="#0000CC" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128984799-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-128984799-1');
		</script>

		<meta name="og:description" property="og:description" content="Hi! My name is Freek. I'm a <?PHP echo $age; ?> years old guy who enjoys programming, playing videogames and taking pictures." />
		<meta property="og:description" property="og:description" content="Hi! My name is Freek. I'm a <?PHP echo $age; ?> years old guy who enjoys programming, playing videogames and taking pictures." />
		<meta name="og:type" property="og:type" content="website" />
		<meta property="og:type" property="og:type" content="website" />
		<meta name="og:image" property="og:image" content="https://freekb.es/imgs/me.jpg" />
		<meta property="og:image" property="og:image" content="https://freekb.es/imgs/me.jpg" />
		<meta itemprop="image" content="https://freekb.es/imgs/me.jpg">
		<meta name="og:image:alt" property="og:image:alt" content="Image of Freek Bes" />
		<meta property="og:image:alt" property="og:image:alt" content="Image of Freek Bes" />
		<meta name="og:image:type" property="og:image:type" content="image/jpeg" />
		<meta property="og:image:type" property="og:image:type" content="image/jpeg" />
		<meta name="og:image:width" property="og:image:width" content="320" />
		<meta property="og:image:width" property="og:image:width" content="320" />
		<meta name="og:image:height" property="og:image:height" content="320" />
		<meta property="og:image:height" property="og:image:height" content="320" />
		<meta name="og:url" property="og:url" content="https://freekb.es/" />
		<meta property="og:url" property="og:url" content="https://freekb.es/" />
		<meta name="og:site_name" property="og:site_name" content="Freek Bes" />
		<meta property="og:site_name" property="og:site_name" content="Freek Bes" />

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="Freek Bes" />
		<meta name="twitter:description" content="Hi! My name is Freek. I'm a <?PHP echo $age; ?> years old guy who enjoys programming, playing videogames and taking pictures." />
		<meta name="twitter:image" content="https://freekb.es/imgs/me.jpg" />
		<meta name="twitter:image:alt" content="Image of Freek Bes" />
		<meta name="twitter:creator" content="@FreekBes" />
		<meta name="twitter:creator:id" content="@FreekBes" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="icon" type="image/ico" href="favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
		<link href="styles.css" rel="stylesheet" />
	</head>
	<body>
		<main class="content">
			<header>
				<h1>Freek Bes</h1>
			</header>

			<section class="card">
				<header class="card-title"><h2>About me</h2></header>
				<div class="card-content">
					<div class="aboutme">
						<figure>
							<img id="me" src="imgs/me.jpg" alt="Freek Bes" />
						</figure>
						<p>Hi! My name is Freek. I'm a <?PHP echo $age; ?> years old guy who enjoys programming, playing videogames, producing music, and taking pictures. Currently working at Codam Coding College, which is part of the <a href="https://en.wikipedia.org/wiki/42_(school)" target="_blank">42 Network</a>.<br><br>This is my little portfolio on the Internet, which includes links to my projects and social media. If you'd like to see my work experience, schooling and other stuff, please check my <a href="https://www.linkedin.com/in/freek-bes/" target="_blank">LinkedIn</a> instead.</p>
					</div>
				</div>
			</section>

			<section class="card">
				<header class="card-title"><h2>Projects</h2></header>
				<div class="card-content">
					<div class="project">
						<figure>
							<img class="project-img" src="imgs/project-monospace-icon.png" alt="Monospace icon" />
						</figure>
						<div class="projectdetails">
							<a href="/monospace/" target="_blank"><h3>Monospace</h3></a>
							<span class="projectinfo">I release trance music on various streaming platforms as <i>Monospace</i>.<br/>Scroll down for a playlist on Spotify.</span>
						</div>
					</div>
					<div class="project">
						<figure>
							<img class="project-img" src="imgs/project-improvedintra-icon.png" alt="Improved Intra icon" />
						</figure>
						<div class="projectdetails">
							<a href="https://chrome.google.com/webstore/detail/hmflgigeigiejaogcgamkecmlibcpdgo" target="_blank"><h3>Improved Intra 42</h3></a>
							<span class="projectinfo">I created a browser extension that improves 42's Intra page (an internal website of the school I'm attending), used weekly by over 4,000 students.</span>
						</div>
					</div>
					<div class="project">
						<figure>
							<img class="project-img" src="imgs/project-spotify-icon.png" alt="spotify web controller icon" />
						</figure>
						<div class="projectdetails">
							<a href="https://freekb.es/spotify/#" target="_blank"><h3>Spotify Remote Web Controller</h3></a>
							<span class="projectinfo">A controller for Spotify playback, on the web. Targeted for Android GO. Built from scratch in 2 days.</span>
						</div>
					</div>
					<div class="project">
						<figure>
							<img class="project-img" src="imgs/project-meirlbot-icon.png" alt="me_irl_bot icon" />
						</figure>
						<div class="projectdetails">
							<a href="https://github.com/FreekBes/insta_reddit_bot" target="_blank"><h3>me_irl_bot</h3></a>
							<small class="isnomore">Deactivated by Instagram</small><br>
							<span class="projectinfo">A bot which automatically pulled posts from <a href="https://www.reddit.com/r/me_irl" target="_blank">/r/me_irl</a> multiple times an hour, and uploaded them to Instagram. It had over 200.000 followers.</span>
						</div>
					</div>
					<div class="project">
						<figure>
							<img class="project-img" src="imgs/project-tuneplay-icon.png" alt="TunePlay icon" />
						</figure>
						<div class="projectdetails">
							<a href="https://www.tuneplay.net/" target="_blank"><h3>TunePlay</h3></a>
							<small class="isnomore">No longer accessible</small><br>
							<span class="projectinfo">An open music player which played music from YouTube, Soundcloud, Deezer, Mixcloud and Spotify. It was available on the web, Windows and Android.</span>
						</div>
					</div>
				</div>
			</section>

			<section class="card">
				<header class="card-title"><h2>More projects</h2></header>
				<div class="card-content">
					<p style="text-align: center;">I also have a few smaller open source projects listed on <a href="https://github.com/FreekBes" target="_blank">my GitHub profile</a>.</p>
				</div>
			</section>

			<section class="card">
				<header class="card-title"><h2>My music</h2></header>
				<div class="card-content notopmargin nobottommargin">
				<iframe src="https://open.spotify.com/embed/playlist/1dfMGfODANrodocj7SLTat" width="100%" height="500" style="width: 100%; height: 500px; background: #C02020;" frameborder="0" allowtransparency="false" allow="encrypted-media"></iframe>
				</div>
			</section>

			<section class="card">
				<header class="card-title"><h2>Social Media</h2></header>
				<div class="card-content">
					<ul class="nobullets floaty">
						<li><a class="social" title="Instagram" href="https://www.instagram.com/freekbes" target="_blank"><img class="favicon vertalign" src="imgs/icon-ig.png" alt="Instagram" /><span class="favicon-name vertalign">freekbes</span></a></li>
						<li><a class="social" title="Bluesky" href="https://bsky.app/profile/freekb.es" target="_blank"><img class="favicon vertalign" src="imgs/icon-bluesky.png" alt="Bluesky" /><span class="favicon-name vertalign">freekb.es</span></a></li>
						<li><a class="social" title="LinkedIn" href="https://www.linkedin.com/in/freek-bes/" target="_blank"><img class="favicon vertalign" src="imgs/icon-linkedin.png" alt="LinkedIn" /><span class="favicon-name vertalign">freek-bes</span></a></li>
						<li><a class="social" title="Spotify" href="https://open.spotify.com/user/freekbes" target="_blank"><img class="favicon vertalign" src="imgs/icon-spotify.png" alt="Spotify" /><span class="favicon-name vertalign">freekbes</span></a></li>
						<li><a class="social" title="Trakt.tv" href="https://trakt.tv/users/freekeh99" target="_blank"><img class="favicon vertalign" src="imgs/icon-trakt.png" alt="Trakt.tv" /><span class="favicon-name vertalign">Freekeh99</span></a></li>
						<li><a class="social" title="Last.fm" href="https://www.last.fm/user/freekbes" target="_blank"><img class="favicon vertalign" src="imgs/icon-lastfm.png" alt="Last.fm" /><span class="favicon-name vertalign">freekbes</span></a></li>
						<li><a class="social" title="YouTube" href="https://www.youtube.com/user/freekbladtv" target="_blank"><img class="favicon vertalign" src="imgs/icon-yt.png" alt="YouTube" /><span class="favicon-name vertalign">Freek Bes</span></a></li>
						<li><a class="social" title="Soundcloud" href="https://soundcloud.com/freekbes" target="_blank"><img class="favicon vertalign" src="imgs/icon-sc.png" alt="Soundcloud" /><span class="favicon-name vertalign">freekbes</span></a></li>
						<li><a class="social" title="Discogs" href="https://www.discogs.com/user/freekbes" target="_blank"><img class="favicon vertalign" src="imgs/icon-discogs.png" alt="Discogs" /><span class="favicon-name vertalign">freekbes</span></a></li>
						<li><a class="social" title="Steam" href="https://steamcommunity.com/id/freekeh99" target="_blank"><img class="favicon vertalign" src="imgs/icon-steam.png" alt="Steam" /><span class="favicon-name vertalign">Freekeh99</span></a></li>
						<li><a class="social" title="Nintendo Switch Online" href="javascript:prompt('Add me on your Nintendo Switch!', 'SW-4217-5410-8236')" target="_self"><img class="favicon vertalign" src="imgs/icon-switch.png" alt="Switch" /><span class="favicon-name vertalign">SW-4217-5410-8236</span></a></li>
						<li><a class="social" title="GitHub" href="https://github.com/FreekBes" target="_blank"><img class="favicon vertalign" src="imgs/icon-github.png" alt="Github" /><span class="favicon-name vertalign">FreekBes</span></a></li>
						<li><a class="social" title="Twitch" href="https://www.twitch.tv/freekbes" target="_blank"><img class="favicon vertalign" src="imgs/icon-twitch.png" alt="Twitch" /><span class="favicon-name vertalign">freekbes</span></a></li>
					</ul>
				</div>
			</section>

			<?PHP
				require_once("spotifyapi.php");
				$spotifyData = json_decode(file_get_contents("spotify.json"), true);
				if ($spotifyData["initialized"] === true) {
					if ($spotifyData["expires_on"] <= time()) {
						// refresh access token
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL,"https://accounts.spotify.com/api/token");
						curl_setopt($ch, CURLOPT_POST, 1);
						// $spotifyClientId and $spotifyClientId are set in spotifyapi.php
						curl_setopt($ch, CURLOPT_USERPWD, $spotifyClientId.":".$spotifyClientSecret);
						curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('grant_type' => 'refresh_token', 'refresh_token' => $spotifyData["refresh_token"])));
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($ch);
						curl_close($ch);

						$newData = array();
						$newData["initialized"] = true;
						if ($response !== false ) {
							echo '<!-- NOTICE FOR FREEK: SPOTIFY AUTHORIZATION TOKEN REFRESHED -->';
							$jsonResponse = json_decode($response, true);
							// echo json_encode($jsonResponse, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
							$newData["access_token"] = $jsonResponse["access_token"];
							$newData["expires_on"] = time() + intval($jsonResponse["expires_in"]);
							$newData["refresh_token"] = $spotifyData["refresh_token"];
							file_put_contents("spotify.json", json_encode($newData, JSON_UNESCAPED_UNICODE));
							$spotifyData = $newData;
						}
						else {
							echo '<!-- NOTICE FOR FREEK: COULD NOT REFRESH SPOTIFY AUTHORIZATION -->';
							$newData["access_token"] = null;
							$newData["expires_on"] = 0;
							$newData["refresh_token"] = $spotifyData["refresh_token"];
							file_put_contents("spotify.json", json_encode($newData, JSON_UNESCAPED_UNICODE));
							$spotifyData = $newData;
						}
					}

					if (!empty($spotifyData["access_token"])) {
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL,"https://api.spotify.com/v1/me/player/recently-played?limit=1");
						$authorization = "Authorization: Bearer ".$spotifyData["access_token"];
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						$response = curl_exec($ch);
						curl_close($ch);

						if ($response !== false ) {
							$lastPlayed = json_decode($response, true)["items"][0];
							?>
							<!-- The following card might appear improperly indented. This is because the HTML code is created on the server-side, by PHP. -->
							<section class="card">
								<header class="card-title"><h2><span style="vertical-align: baseline;">Last played </span><small style="vertical-align: baseline; font-size: small;">via </small><img src="imgs/logo-spotify.png" style="vertical-align: -4px; height: 16px;" alt="Spotify" /></h2></header>
								<div class="card-content notopmargin">
									<table class="yir-table">
										<tr>
											<td class="image"><a href="<?PHP echo $lastPlayed["track"]["album"]["external_urls"]["spotify"]; ?>" style="display: block; width: inherit;" target="_blank" title="View album on Spotify"><img src="<?PHP echo $lastPlayed["track"]["album"]["images"][1]["url"]; ?>" style="background: #1DB954;" alt="Cover art" /></a></td>
											<td class="info">
												<div class="toptext"><a href="<?PHP echo $lastPlayed["track"]["external_urls"]["spotify"]; ?>" target="_blank" title="Play track on Spotify"><?PHP echo htmlspecialchars($lastPlayed["track"]["name"]); ?></a></div>
												<div class="bottomtext">
													<?PHP for ($i = 0; $i < count($lastPlayed["track"]["artists"]); $i++) {
														?>
														<a href="<?PHP echo $lastPlayed["track"]["artists"][$i]["external_urls"]["spotify"]; ?>" target="_blank" title="View artist on Spotify"><?PHP echo htmlspecialchars($lastPlayed["track"]["artists"][$i]["name"]); ?></a><?PHP if ($i != count($lastPlayed["track"]["artists"])-1) { echo ', '; } ?>
														<?PHP
													}
													?>
												</div>
												<div class="extratext">Track played on <?PHP echo date("l \\t\h\\e jS \of F \a\\t H:i", strtotime($lastPlayed["played_at"])); ?> UTC</div>
											</td>
										</tr>
									</table>
								</div>
							</section>
							<?PHP
						}
						else {
							echo '<!-- NOTICE FOR FREEK: COULD NOT FETCH LAST PLAYED TRACK FROM SPOTIFY -->';
						}
					}
					else {
						echo '<!-- NOTICE FOR FREEK: SPOTIFY ACCESS TOKEN EMPTY -->';
					}
				}
				else {
					echo '<!-- NOTICE FOR FREEK: SPOTIFY AUTHORIZATION WAS NOT INITIALIZED -->';
				}
			?>

			<section class="card">
				<header class="card-title"><h2>Last watched <small><small>via Trakt.tv</small></small></h2></header>
				<div class="card-content notopmargin nobottommargin">
					<a href="https://trakt.tv/users/freekeh99" target="_blank" style="display: block;"><img style="width: 100%; background: #000000;" alt="This widget doesn't seem to be working right now..." src="https://widgets.trakt.tv/users/99c23c354770e5e30080302e27c89ccc/watched/banner@2x.jpg?image_only=1" /></a>
				</div>
			</section>
		</main>
	</body>
</html>
