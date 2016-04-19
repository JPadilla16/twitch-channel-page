<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Twitch Channel Page</title>
	</head>
	<body>
		<header>
		<h1>Data Design Project</h1>
		</header>
		<main>
			<h3>Frontend</h3><!-- Frontend Complete -->
			<ul>
				<li>The persona for a Twitch channel is gamers.</li>
				<li>Case Use: I want to watch live gameplay of "DayZ"</li>
			</ul>
			<ol start="0">
				<li>I open up Google Chrome on my Macbook.</li>
				<li>Chrome loads up with cursor blinking in the address bar. </li>
				<li>In the address bar I type <a href="http://www.twitch.tv">twitch.tv</a> and hit enter.</li>
				<li><a href="http://www.twitch.tv">Twitch</a> loads up with the
				featured channel as well as the featured games below that with a link to "see
				all live games?</li>
				<li>I then click on "see all live games" which loads up all games currently
				being streamed in order of most viewers to lowest.</li>
				<li>I scroll through the games untill I find "DayZ"</li>
				<li>Upon finding "DayZ" I select it.</li>
				<li>The browser then loads up all the channels currently streaming "DayZ"</li>
				<li>At this time i'll see if anyone I know is streaming. If not, Ill select the one
				with the most interesting title.</li>
				<li>Like magic live gameplay of "DayZ" loads up.</li>
				</ol>
			<h3>Backend</h3>
			<h4>Entities</h4>
			<ul><li>profileName</li>
				<li>profileEmail</li>
				<li>profileHashAndSalt</li>
				<li>profileURL</li>
				<li>profileBirthday</li>
			</ul>
			<h4></h4>
			<ul><li>Profile follows Profile m to n</li>
				<li>Profile subscribes Profile m to n</li>
				<li>Profile contains Avatar 1 to 1</li>
				<li>Profile messages Profile m to n</li>
				<li>Profile shares Profile m to n</li>
				<li>Profile watches channel 1 to m</li>
			</ul>
		</main>
		<footer>
			<div>&copy; 2016 JPadilla16</div>
		</footer>
	</body>
</html>
