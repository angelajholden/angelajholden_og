<?php 
/*
* Template Name: Process
*/
get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="wrap clearfix">

  	<p>Nothing is more important than having a process for how the work will get done. Most people are having a website built for the first time, and I think clients should have a very good idea of what to expect before they start.</p>

		<!--<h2>My web design process</h2>

		<ol>
		<li>Initial Meeting</li>
		<li>Proposal</li>
		<li>Kick Off</li>
		<li>Content</li>
		<li>Styleguide</li>
		<li>Mockups</li>
		<li>Website Build</li>
		<li>Quality Control</li>
		<li>Launch</li>
		<li>Organic SEO</li>
		<li>Maintenance</li>
		</ol>-->

		<div class="process">
			<article class="left-content">
				<h3>Initial Meeting</h3>
				<p>Our first meeting is where we get to know each other and I can learn more about your project. This is where you tell me about your business, audience and goals. We’ll talk about how the website should function, the experience you want users to have, and the look and feel the site should convey. I’ll also ask you questions about your current web site, your hosting company, domain name, content, images, branding and budget.</p>
			</article>
			<div class="right-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="right-content">
				<h3>Proposal</h3>
				<p>After our initial meeting I’ll send you a proposal with options for different levels of service and pricing. I generally create one or two packages based on what you’ve told me you want, and include a scope of work that defines each option along with the timeframe to get it done.</p>
			</article>
			<div class="left-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="left-content">
				<h3>Kick Off</h3>
				<p>When the proposal is accepted and we agree on a price, I’ll invoice you for a down payment on the project. Depending on the scope of your project, a down payment is typically 30%-50% of the total cost.</p>
				<p>During the kick off meeting I’ll give you a checklist of items I need to start work. These are things like access to your hosting account, content, images, and logo files. I’ll give you a detailed timeline so you know when to expect deliverables, and we’ll talk about the best way to communicate, and how deliverables will be presented.</p>
			</article>
			<div class="right-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="right-content">
				<h3>Content</h3>
				<p>Whether your existing content needs copy editing, or you’ve asked for new content, it’s important this is in progress before I start designing the site. This can also include keyword research for Search Engine Optimization.</p>
				<p>For new content we’ll arrange a time to meet so I can interview you about your brand and message. Then I’ll start writing content that organically uses the keywords important for good SEO. If you’re providing content, or you’d like to reuse the content on your current website, we’ll talk about the best way to transfer it.</p>
			</article>
			<div class="left-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="left-content">
				<h3>Styleguide</h3>
				<p>A Styleguide is a document that represents typography, color scheme, links and buttons, and how your logo is used. It doesn’t determine the layout or functionality of your website, but rather it defines important design and user experience elements. It’s meant to be a starting point for look and feel.</p>
			</article>
			<div class="right-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="right-content">
				<h3>Mockups</h3>
				<p>This step in the process is a mockup of what your website’s homepage will look like. This document combines design elements from the Styleguide with a layout to represent about 50% of what your overall website will look like. Additional mockups are created for inner pages based on the scope of your project and functionality of the site.</p>
			</article>
			<div class="left-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="left-content">
				<h3>Website Build</h3>
				<p>The website build is my favorite part of the process! This usually takes three to four weeks and it’s what I’ve spent my career as a web designer learning how to do. The internet is rapidly changing and I spend countless hours staying current on design and development best practices.</p>
				<p>When I start this step, I’ll send you a link so you can see the site while I’m building it. I’ll give you regular updates on my progress, and I’ll tell you when it’s appropriate to give me feedback, and when I want you to hold off on feedback until I’m finished.</p>
			</article>
			<div class="right-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="right-content">
				<h3>Quality Control</h3>
				<p>I have a top to bottom approach to quality control. From the header to the footer, I look at every part of the site in all modern browsers, iPad, iPhone and Android devices. I check the site for responsiveness, accessibility, load time, image and file optimization. Then I test the contact forms on both desktop and mobile devices.</p>
			</article>
			<div class="left-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="left-content">
				<h3>Launch</h3>
				<p>When the site is ready, I’ll launch it on your server and invoice you for the remaining amount due. On launch day I’ll perform a second round of quality control and watch the site for 24 hours to make sure it performs as expected.</p>
			</article>
			<div class="right-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="right-content">
				<h3>Organic SEO</h3>
				<p>For every site I build I provide 30 days of Organic Search Engine Optimization. I’ll implement a Google analytics tracking code and add your site to Google Search Console. If this is a website re-design, I’ll create 301 redirects so your old links get redirected to your new website.</p>
			</article>
			<div class="left-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

		<div class="process">
			<article class="right-content">
				<h3>On-going Services</h3>
				<p>For a monthly fee I can help you maintain your new website. Maintenance includes database backups, version control, WordPress core and plugin updates, and content updates. If you’re interested in on-going services I can give you a separate estimate based on what you need.</p>
			</article>
			<div class="left-image" style="background-image:url(http://placehold.it/768x768);"></div>
		</div>

	    </section>

	    <?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>