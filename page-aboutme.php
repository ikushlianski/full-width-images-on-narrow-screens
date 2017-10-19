<?php

 /**
  * The template for displaying front page
  * Template Name: Ilya Online About Me
  *
  *
  * @package Ilyaonline
  */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="" role="main">
		<header class="page-heading section">
			<h1 class="page-title"><?php _e('My personality', 'ilyaonline') ?></h1>
			<div class="skill-short-description"><?php _e('My IT knowledge is like small bricks. I dream of building beautiful houses', 'ilyaonline'); ?></div>
		</header><!-- .page-header -->
		<div class="questions_wrapper">
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('Why did you start learning code?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('I have always thought I could program, because a PC was around in my life from early childhood, but it mostly didn\'t go further than advanced Word and Excel, Photoshop or Game Maker.', 'ilyaonline') ?></p>
					<p><?php _e('Then an idea about a Minsk tourism marketing service came to my mind in 2015, but after a year of endless Joomla plugins and CSS/html tweaking of default templates I finally understood I would not make a worthy service without decent knowledge of programming.', 'ilyaonline') ?></p>
					<p><?php _e('It was scary at first, but then I loved the freedom of opportunities that open up to a programmer and many other ideas have come to me since then, some of which have become equally attractive as the tourism marketing project.', 'ilyaonline') ?></p>
					<p><?php _e('I always code with scaling in mind. Projects will scale even if we do not think they will. So I always keep scaling in mind when coding.', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('Aren\'t you afraid of difficulties in programming?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('There have already been a number of problems I had to solve when learning proramming basics.', 'ilyaonline') ?></p>
					<p><?php _e('You know that feeling when you stumble upon something and cannot figure out what\'s wrong. Then, sometimes after long hours, you figure out... And you become a better coder.', 'ilyaonline') ?></p>
					<p><?php _e('This feeling is AMAZING! It is worth those "wasted" hours of banging your head against the wall.', 'ilyaonline') ?></p>
					<p><?php _e('Sometimes it is really disheartening to see the same error popping up again and again. But overall I am ready to face the numerous challengies, because, again, they make me better.', 'ilyaonline') ?></p>
					<p><?php _e('The less I know about a particular technology the more vigorous I am to master it and understanding finally comes!', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('How do you learn code?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('I believe in the power of spaced repetition and use Anki software to learn code theory. Anki helps me learn basic and advanced syntax, which does not replace practice but significantly reduces time one would waste searching and reading docs for things they once did but forgot.', 'ilyaonline') ?> <span><a href="<?php
					if (pll_current_language() == "en") :
						echo 'https://en.wikipedia.org/wiki/Spaced_repetition';
					endif;
					if (pll_current_language() == "ru") :
						echo 'https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B2%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BF%D0%BE%D0%B2%D1%82%D0%BE%D1%80%D0%B5%D0%BD%D0%B8%D1%8F';
					endif;
					?>" target="_blank"><?php _e('What is spaced repetition?', 'ilyaonline') ?></a></span></p>
					<p><?php _e('In general learning stages are usually as follows:', 'ilyaonline') ?></p>
          <ol>
            <li><?php _e('theory from a book or a video tutorial', 'ilyaonline') ?></li>
            <li><?php _e('practice some basic examples of particular pieces of the technology learned', 'ilyaonline') ?></li>
            <li><?php _e('spaced repetition of the basics during a couple of weeks', 'ilyaonline') ?></li>
            <li><?php _e('see some real example of app building using this technology', 'ilyaonline') ?></li>
            <li><?php _e('build something of my own using this knowledge and googling things I do not know on the go.', 'ilyaonline') ?></li>
          </ol>
					<p><?php _e('I think one can code something even knowing only basics. There will always be things you do not know about a specific technology, so sitting and endlessly absorbing information is useless. Better code something simple but working. I wish I used this approach earlier.', 'ilyaonline') ?></p>
					<p><?php _e('In addition to tutorials I also read industry blogs and sites like habrahabr.ru, CSS Tricks and others. Reading docs as a regular tutorial is a worthy option sometimes, too.', 'ilyaonline') ?></p>
					<p><?php _e('Frequent visitor of Codepen when learning frontend.', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('Are you good at maths?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('I am a linguist by profession and the syntax of programming languages is like a piece of cake for me. I had good and great marks at school in all subjects, including maths and physics, but math exercises did not go beyond the standard level.', 'ilyaonline') ?></p>
					<p><?php _e('Difficult math tasks are always a challenge for me and I do not love them, but when it comes to coding challenges, it looks more interesting and real-life-oriented, which makes me believe that I will be able to cope even with harder tasks if faced them.', 'ilyaonline') ?></p>
					<p><?php _e('Now it\'s time for algorithms and data structures in my life if I really want to eventually become a senior coder.', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('What kind of IT job would you prefer?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('I would prefer to work with JS-based web apps and sites. I don\'t mind using HTML5/CSS3 one day, Javascript/Angular next day and then a bit of (or entirely) Laravel or Node as soon as I learn them.', 'ilyaonline') ?></p>
					<p><?php _e('It would be a nice experience to be able to touch in real life the technologies I know only slightly.', 'ilyaonline') ?></p>
					<p><?php _e('In general I am interested in both frontend and backend.', 'ilyaonline') ?></p>
					<p><?php _e('Working with JS-based hybrid mobile apps is another promising prospect.', 'ilyaonline') ?></p>
					<p><?php _e('I may consider taking some managerial path in the future to use my knowledge of finance and psychology as well as quench managerial hunger.', 'ilyaonline') ?></p>
					</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('What are your concerns about the new job?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('One of the main concerns is that I might work slower than expected through lack of production experience, but maybe I underestimate my abilities...', 'ilyaonline') ?></p>
					<p><?php _e('I am a bit afraid of being thrown into thousands of lines of production code without me having time to figure how things work here. Hope to avoid this situation.', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('What about your personal qualities and overall attitude to work?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('I am a person who tends to avoid conflicts and try to collaborate even with difficult people. I prefer to solve problems constructively making concessions and expecting others to do the same.', 'ilyaonline') ?></p>
					<p><?php _e('I am professional in my attitude to work and cannot let my teammates down.', 'ilyaonline') ?></p>
					<p><?php _e('Being a team player at work I love spending time with my family or alone out of work. Honestly, I don\'t like noisy parties and crowds of people all the time. Better learn something new, watch a quality movie or go for a walk.', 'ilyaonline') ?></p>
          <p><?php _e('I not only listen to other people, but also hear them. I perceive objective criticism calmly and think of it as a stimulus to my further growth.', 'ilyaonline') ?></p>
					<p><?php _e('However, I would love to meet new interesting people, especially IT professionals, and learn from them, draw inspiration or maybe collaborate on some new projects. Speaking in public is one of my strong points, I am not afraid of that at all.', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('Do you have hobbies?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('After becoming able to code things on my own I got a lot of new ideas which I never thought I would be able to implement myself: own services, advertizing, projects to improve my city Minsk and even the whole country in terms of social and political life.', 'ilyaonline') ?></p>
					<p><?php _e('I love politics, but since Belarus is an authoritarian country and politics actually does not exist here, I have "put aside" politological stuff until better times.', 'ilyaonline') ?></p>
					<p><?php _e('I love Sweden and Nordic countries for their attitude to life and calmness. I have lived in Sweden for about nine months and fell in love with it. Maybe I will work or live there once.', 'ilyaonline') ?></p>
					<p><?php _e('My other interest lies in football, but I don\'t watch it much, only a bit of Bundesliga and English Premier League.', 'ilyaonline') ?></p>
					<p><?php _e('Maybe a bit weird to call it a hobby, but I love taking an English Longman dictionary and just learning new words and phrases. Having a decent level of English now, I do hope I will once be able to come close to speaking English as a native speaker.', 'ilyaonline') ?></p>
					<p><?php _e('I drink a lot of coffee and tea, often with something sweet :)', 'ilyaonline') ?></p>
				</div>
			</div>
			<div class="aboutMeBlock">
				<div class="aboutMeQuestion"><?php _e('What technologies will you study in the future?', 'ilyaonline') ?></div>
				<div class="aboutMeAnswer">
					<p><?php _e('Please see the list of skills I plan to acquire in the future, near or far:', 'ilyaonline') ?> <a href="<?php
					if (pll_current_language() == "en") :
						echo get_tag_link(250);
					endif;
					if (pll_current_language() == "ru") :
						echo get_tag_link(252);
					endif;
					?>"><?php _e('Future skills', 'ilyaonline') ?></a></p>
					<p><?php _e('I watch numerous YouTube channels to follow the trending technologies and webdev news. If I see that a technology is getting more and more popular and increasing number of tutorials is created for it, I think whether I absolutely need this technology and monitor the local job market to make the final decision.', 'ilyaonline') ?></p>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
