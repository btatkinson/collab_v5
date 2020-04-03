<section class="footer">
    <div class="ft-container">
        <div class="row">
            <div class="col-sm-8  ft-links text-center">
                <h1 class="ft-sl">Site Links</h1>
                <div class="footer-menu">
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'footer-menu', 
                        'container_class' => 'custom-menu-class' ) ); 
                    ?>
                </div>
            </div>
            <div class="col-sm-4 ft-social text-center">
                <p>
                    <a href="https://www.instagram.com/cincinnati_collaborative_cacp/"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/CinciCollabLaw"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/CincinnatiCollaborativeLaw/"><i class="fab fa-facebook"></i></a>
                </p>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <p class="text-center ft-text">Copyright © 2019 Cincinnati Academy of Collaborative Professionals. All rights reserved.</p>
          </div>
        </div>
    </div>
</section>