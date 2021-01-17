  	<footer>
      <div class="wrap">
        <div class="footer-logo">
          <svg><use xlink:href="#logo" /></svg>
        </div>
        <a class="footer-link" href="#about">About</a>
        <a class="footer-link" href="#projects">Work</a>
        <a class="footer-link" href="#contact">Contact</a>
        <?php include(locate_template("template-parts/resume/resume.php")); ?>
        <div class="footer-socials">
          <a class="footer-socials-link" target="_blank" href="https://github.com/mattmaneval" title="Github">
            <svg><use xlink:href="#github"/></svg>
          </a>
          <a class="footer-socials-link" target="_blank" href="https://codepen.io/mattmaneval" title="CodePen">
            <svg><use xlink:href="#codepen"/></svg>
          </a>
          <a class="footer-socials-link" target="_blank" href="https://www.instagram.com/mattmaneval/" title="Instagram">
            <svg><use xlink:href="#instagram"/></svg>
          </a>
          <a class="footer-socials-link" target="_blank" href="https://twitter.com/mattwmaneval" title="Twitter">
            <svg><use xlink:href="#twitter"/></svg>
          </a>
          <a class="footer-socials-link" target="_blank" href="https://open.spotify.com/artist/6YNCxvcxSDg3aQRlUbEW1I" title="Spotify">
            <svg><use xlink:href="#music"/></svg>
          </a>
          <a class="footer-socials-link" target="_blank" href="https://www.linkedin.com/in/matthew-maneval-785613143/" title="Linkedin">
            <svg><use xlink:href="#linkedin"/></svg>
          </a>
        </div>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1-wordmark.png" alt="Matt Maneval wordmark"> -->
        <!-- <div class="footer-flex">
          <p>This website runs on Wordpress and is hosted by WP Engine. It was designed and built by me (tools: Atom, MAMP, Gulp, GitHub). </p>
          <p>The type is set in "Joyride" by Type Juice, "Fanwood" by Barry Schwartz and "League Spartan" by Caroline Hadilaksono, Micah Rich & Tyler Finck ( Source: The League of Moveable Type).</p>
          <p>The icons are from the <a href="https://feathericons.com/">Feather Icons</a> collection, created by Cole Bemis.</p>
          <p>Elements of this site were inspired by <a href="https://brittanychiang.com/">Brittany Chiang</a>'s absolutely killer webstite.</p>
        </div>
      </div> -->
  	</footer>
  <?php wp_footer(); ?>
  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.13'><\/script>".replace("HOST", location.hostname));
  //]]></script>
  </body>
</html>
