<?php include('header.php'); ?>

        <div class="blogSpace"></div>

        <div class="blogWrap">

        <article class="singlePost">

          <header>
            <h1>This is a blog post with a pretty picture</h1>
          </header>

            <img src="images/single-img.jpg" />

            <p class="posted">Posted in <a href="#">Blog</a> on <time>May 1, 2014</time> &bull; <a href="#">99 Comments</a></p>

            <p>Cupcake ipsum dolor sit amet liquorice I love biscuit chocolate bar. Bonbon fruitcake jelly sweet roll I love biscuit gummi bears. Bonbon powder bonbon pie carrot cake candy carrot cake sesame snaps cupcake. Chupa chups chocolate cake I love sweet roll biscuit chocolate candy. Wafer unerdwear.com marshmallow sugar plum muffin sugar plum applicake bear claw.</p>

            <p>Cupcake ipsum dolor sit <code>amet liquorice</code> I love biscuit chocolate bar. Bonbon fruitcake jelly sweet roll I love biscuit gummi bears. Bonbon powder bonbon pie carrot cake candy carrot cake sesame snaps cupcake. Chupa chups chocolate cake I love sweet roll biscuit chocolate candy. Wafer unerdwear.com marshmallow sugar plum muffin sugar plum applicake bear claw.</p>

            <p>Cupcake ipsum dolor sit amet liquorice I love biscuit chocolate bar. Bonbon fruitcake jelly sweet roll I love biscuit gummi bears. Bonbon powder bonbon pie carrot cake candy carrot cake sesame snaps cupcake. Chupa chups chocolate cake I love sweet roll biscuit chocolate candy. Wafer unerdwear.com marshmallow sugar plum muffin sugar plum applicake bear claw.</p>

            <p>Cupcake ipsum dolor sit amet liquorice I love biscuit chocolate bar. Bonbon fruitcake jelly sweet roll I love biscuit gummi bears. Bonbon powder bonbon pie carrot cake candy carrot cake sesame snaps cupcake. Chupa chups chocolate cake I love sweet roll biscuit chocolate candy. Wafer unerdwear.com marshmallow sugar plum muffin sugar plum applicake bear claw.</p>

            <script src="https://gist.github.com/angelajholden/9578728.js"></script>

<pre><code class="language-css">
.blogTitle {
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 4.5em;
  @media (max-width: 768px) {
    font-size: 3em;
  }
  @media (max-width: 360px) {
    font-size: 2.5em;
  }
}
p {
  font-size: 1.5em;
  font-weight: 300;
  margin: 0;
  @media (max-width: 768px) {
    font-size: 1.25em;
  }
}
a {
  color: #333;
  text-decoration: none;
  &:hover, &:active, &:focus {
    color: $pink;
  }
}
</code></pre>

<pre>
<code class="language-markup">
&lt;div class="headerWrap">
  &lt;div class="mainHead clearfix">
    &lt;header class="clearfix">
      &lt;a href="/angelajholden/blog">
        &lt;figure>&lt;?php include('inc/logo.svg'); ?>&lt;/figure>
        &lt;h1 class="blogTitle">Angela J. Holden&lt;/h1>
      &lt;/a>
      &lt;p>A web design blog with videos, tutorials, and snippets.&lt;/p>
    &lt;/header>

    &lt;ul class="socialIcons">
      &lt;li>&lt;a href="//facebook.com/angelajholden" target="_blank">&lt;?php include('inc/facebook.svg'); ?>&lt;/a>&lt;/li>
      &lt;li>&lt;a href="//twitter.com/angelaholden" target="_blank">&lt;?php include('inc/twitter.svg'); ?>&lt;/a>&lt;/li>
      &lt;li>&lt;a href="//google.com/+AngelaHoldenDesign" target="_blank">&lt;?php include('inc/googleplus.svg'); ?>&lt;/a>&lt;/li>
      &lt;li>&lt;a href="//github.com/angelajholden" target="_blank">&lt;?php include('inc/github.svg'); ?>&lt;/a>&lt;/li>
      &lt;li>&lt;a href="//angelaholdendesign.com" target="_blank">&lt;?php include('inc/screen.svg'); ?>&lt;/a>&lt;/li>
    &lt;/ul> 
  &lt;/div>&lt;?php //Main Head ?>
&lt;/div>&lt;?php //Header Wrap ?>
</code>
</pre>

              <ul class="singleTags">
                <li>Tags: </li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">ipsum</a></li>
                <li><a href="#">doler</a></li>
                <li><a href="#">sit</a></li>
                <li><a href="#">amet</a></li>
              </ul>

         </article>

       </div><?php //Blog Wrap ?>

<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>