<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- custom CSS stylesheet -->
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>CSS Mockup Activity</title>
</head>
<section class="sfooter">
<div class="sfooter-content">
	<!-- HEADER -->
	<header>
		<div class="container">
			<h1 id="header">Dylan McDonald:~$</h1>
			<em id="em">Computer Scientist. Cat Lover. Picard Fan.</em>
		</div>
	</header>
	<!-- INSTRUCTIONS PANEL -->
	<section>
		<div id="divBackgroundColor">
		<div id="divMargin" class="container">
			<!-- WELCOME IMAGE -->
			<img id="welcomeToMyPageImg" src="images/welcome.gif" alt="welcome to my homepage">
			<div class="instructions-wrapper">
				<div id="centerAndPadding" class="instructions-content">
					<img id="imgcaptain" src="images/captain-janeway.png" alt="captain janeway" />
					<h2>Instructions</h2>
					<ol>
						<li>Fork and clone the following GitHub repository, and create a new project and deployment.<br>
							<a href="https://github.com/GKephart/css-challenge" target="_blank">https://github.com/GKephart/css-challenge</a></li>
						<li>Edit the stylesheet, adding CSS to make the page look like the mockup. <a href="images/mockup.png" target="_blank">Mockup Image</a></li>
						<li>Have fun! The solution will be demonstrated in class. <small>(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧</small></li>
					</ol>
				</div>
			</div><!--/.instructions-->
		</div>
		</div><!--/.container-->
	</section>
	<!-- ABOUT ME -->
	<section>
	<div class="about-me">
		<div id="aDayFontcolor"  class="container">
			<img id="imgStunning" src="images/stunning.jpg" alt="captain picard" />
			<h2>A Day in the Life...</h2>
			<p>Engage! Some days you get the bear, and some days the bear gets you. I'd like to think that I haven't changed those things, sir. Did you come here for something in particular or just general Riker-bashing? That might've been one of the shortest assignments in the history of Starfleet.</p>
			<p>Hiss and stare at nothing then run suddenly away. Bare fangs at toy run hide in litter box until treats are fed toy mouse squeak roll over yet stare at the wall, play with food and get confused by dust. Chase dog then run away drink water out of the faucet for find a way to fit in tiny box. <span>Groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!</span></p>
			<div class="clearfix"></div>
		</div>
	</div>
	</section>
	<!-- PROFESSIONAL SKILLZ -->
	<section>
		<div id="divMargin2" class="container">
			<h2 id="tableH2">Summary of Profe$$ional Skillz</h2>
			<table>
				<tr>
					<th>Languages</th>
					<th>Software</th>
					<th>Other</th>
				</tr>
				<tr>
					<td>Java</td>
					<td>Kali Linux</td>
					<td>Certified Ethical Hacker</td>
				</tr>
				<tr>
					<td>PHP</td>
					<td>Metasploit</td>
					<td>Star Trek Trivia Champion</td>
				</tr>
				<tr>
					<td>Klingon</td>
					<td>Microsoft Office</td>
					<td>Meme Master</td>
				</tr>
			</table>
		</div>
<!--/.container-->
	</section>
	<!-- CONTACT FORM -->
	<section id="contactFormBackground">
		<div id="centerForm" class="container">
			<div class="form-wrapper">
				<h2>Contact Me! I &lt;3 to fix printers!</h2>
				<form>
					<div>
						<label for="name">Name</label><br />
						<input type="text" name="name" id="name" />
					</div>
					<div>
						<label for="email">Email</label> <br />
						<input type="email" name="email" id="email" />
					</div>
					<div>
						<label for="subject">Subject</label><br />
						<input type="text" name="subject" id="subject" />
					</div>
					<div>
						<label for="message">Message</label><br />
						<textarea name="message" id="message" cols="30" rows="10" maxlength="1000" placeholder="1000 characters max"></textarea>
					</div>
					<button type="reset">Reset</button>
					<button type="submit">Send!</button>
				</form>
			</div>
		</div>
</section>
<!--/.sfooter-content-->
		<section id="backgroundColor">
			<footer class="footer">
				<div id="footerFontColor" class="container">
					<h4 id="centerFooter">Best viewed with Netscape Navigator. Proudly hosted by GeoCities.</h4>
				</div>
			</footer>
		</section>
		</div>
	</section>
</html>