</div>

<footer id="footer">
  <div class="fs-row">
    <div class="fs-cell fs-full-all bg-color--gray darken">
      <div class="fs-row">
        <div class='fs-cell fs-lg-10 fs-md-6 f0s-sm-3 fs-centered'>
          <div class="section">
            <div class="fs-row">  
              <?php dynamic_sidebar( 'footer-widget-area' ); ?>
              <menu id="footer-social" class="fs-cell fs-all-full">
                <a href="#" class="btn btn-nav ss-social ss-facebook"></a>
                <a href="#" class="btn btn-nav ss-social ss-twitter"></a>
                <a href="#" class="btn btn-nav ss-social ss-instagram"></a>
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
