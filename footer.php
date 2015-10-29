</div>

<div class="fs-row">
  <div class="fs-cell fs-all-full">
    <div id="mailing-list">
      <div class="fs-row">
        <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
          <hr class="invisible compact">
          <div class="text-right"><a href="#" data-swap-target="#mailing-list" class="mailing-toggle ss-gizmo ss-delete"></a></div>
          <div class="text-center">
            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer id="footer">
  <div class="fs-row">
    <div class="fs-cell fs-full-all bg-color--gray darken interior">
      <div class="fs-row">
        <div class='fs-cell fs-lg-10 fs-md-6 f0s-sm-3 fs-centered'>
          <div class="section">
            <div class="fs-row">  
              <?php dynamic_sidebar( 'footer-widget-area' ); ?>
              <menu id="footer-social" class="fs-cell fs-all-full">
                <a href="https://www.facebook.com/cciteam" class="btn btn-nav ss-social ss-facebook"></a>
                <a href="https://www.linkedin.com/company/2086741" class="btn btn-nav ss-social ss-linkedin"></a>
                <a href="https://instagram.com/cciteam" class="btn btn-nav ss-social ss-instagram"></a>
              </menu>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</div><!--Wrapper-->

<?php include locate_template('parts/mobile-menu.php' ); ?>

<?php wp_footer(); ?>

</body>
</html>
