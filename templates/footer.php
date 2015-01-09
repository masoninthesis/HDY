<hr>
<br>

<div id="footer-optin" class="text-center">
  <div class="container">
    <!-- <?php dynamic_sidebar('sidebar-footer'); ?> -->
    <h2>To read or to write, the choice is yours. <strong>How dare you?</strong></h2>
    <form class="jack-form">
      <div>
        <input class="email" type="email" placeholder="Email address ...">
        <input class="btn btn-sub"type="submit" value="Subscribe">
      </div>
    </form>
    <ul class="social">
      <li class="twitter">
        <a href="https://twitter.com/howdareyou" class="twitter-follow-button" data-show-count="false">Follow @timelyapp</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </li>
      <li class="fb-tablet">
        <div class="fb-like" data-href="https://www.facebook.com/howdareyou" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
      </li>
    </ul>
  </div>
</div>

<footer id="footer-wrapper" class="text-center">
  <div class="container">
    <div class="footer">
      <div class="footer_content">
        <div class="col-sm-12">
          <ul>
            <li><a href="http://twitter.com/howdareyou" target="_blank">Twitter (@howdareyou)</a>|</li>
            <li><a href="http://facebook.com/howdareyou" target="_blank">Facebook</a>|</li>
            <li><a href="http://howdareyou.io/contact">Contact</a>|</li>
            <li><a href="http://howdareyou.io/press">Press</a>|</li>
            <li><a href="http://howdareyou.io/about">Company</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright text-center">
        <p>Copyright &copy; <?php echo date("Y") ?> Made with love by Jackalope. All rights reserved.</p>
        <?php get_template_part( 'assets/img/svg/inline', 'hdy.svg' ); ?>
      </div>
    </div><!--footer-->
  </div>
</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <center><svg width="30" height="33" class="logo logo-modal"><?php get_template_part( 'assets/img/svg/inline', 'logo.svg' ); ?></center>
      <center><h3>To read or to write, the choice is yours. <strong>How dare you?</strong></h3></center>
      <div class="modal-body">
        <center class="modal-form">
          <form class="form-inline" id="before_header" action="//jackalope.us9.list-manage.com/subscribe/post?u=74a8ddb6f1ff4b3eeb5966632&amp;id=322fc5ebb8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
            <button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="btn btn-sub" type="submit" value="Submit" tabindex="501">Subscribe</button>
          </form>
          <ul class="social">
            <li class="twitter">
              <a href="https://twitter.com/howdareyou" class="twitter-follow-button" data-show-count="false">Follow @timelyapp</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </li>
            <li class="fb-phone">
              <div class="fb-like" data-href="https://www.facebook.com/howdareyou" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
            </li>
          </ul>
        </center>
      </div><!-- /optin -->
    </div>
  </div>
</div>
