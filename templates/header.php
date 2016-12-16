<?php $url = str_replace( home_url(), "", get_permalink() ); 
  $page_url = str_replace('/', '', $url);
  $enterprise = ['enterprise','application-management','infrastructure','training','contact-us-enterprise','about-us-enterprise'];

  $page_enterprise = in_array($page_url,$enterprise);
  $business = ( $page_enterprise ) ? '':'active';
  $enterprise = ( $page_enterprise ) ? 'active':'';
?>
<header class="navbar-top">
  <div class="nav-primary-wrap <?php echo ($page_enterprise) ? 'enterprise' : ''; ?>">
    <div class="row">
      <div class="nav-primary col-xs-12 no-padding">
        <div class="menu-wrap col-xs-12 text-right margin-top-20">
          <div class="small-menu d-inline-block">
            <div class="menu-item sm-first <?php echo $business ?>"><a href="home">Dynamic Business</a></div>
            <div class="menu-item sm-second <?php echo $enterprise ?>"><a href="enterprise">Enterprise</a></div>
          </div>

          <div class="menu-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x-icon.png" alt="naevette logo">
          </div>
        </div>
        
        
        <div class="main-menu">
          <?php if( $page_enterprise ){?>
            <?php wp_nav_menu(array('menu' => 'Enterprise')); ?>
          <?php }else{ 
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
          } ?>
        </div>

      </div>

    </div>
  </div>
  <div class="contact_wrap bg-primary">
    <div class="container header-wrap">
      <div class="hidden-sm-down">
        <div class="contact_info">Call us 1300 788 397 &nbsp; <span>| </span> &nbsp;<a href="#">info@naevette.com.au</a></div>
        <div class="contact_social d-inline-block">
          &nbsp; | &nbsp;
          <a href="https://plus.google.com/102642677666749663270/posts" target="_blank"><img class="social-icon-small" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-google-plus.png" alt="google-plus"></a>
          <a href="https://www.facebook.com/naevette" target="_blank"><img class="social-icon-small" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-facebook.png" alt="facebook"></a>
          <a href="https://www.linkedin.com/company/naevette-pty-ltd" target="_blank"><img class="social-icon-small" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-linkin.png" alt="linkin"></a>
        </div>
      </div>
      <div class="menu-icon-small">
        <div class="icon-1"></div>
        <div class="icon-2"></div>
        <div class="icon-3"></div>
      </div>
      <div class="hidden-md-up"><a href="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/naevette-logo.png" alt="naevette logo" width="162px"></a></div>
    </div>
  </div>
  <nav class="nav-wrap hidden-sm-down">
    <div class="container">
      <div class="row header-wrap">
        <div class="logo col-xs-12 col-md-4 no-padding-left">
          <a href="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/naevette-logo.png" alt="naevette logo" width="190px"></a>
        </div>
        <div class="nav-main col-xs-12 col-md-8 text-right padding-right-20">
            <div class="small-menu">
              <div class="menu-item sm-first <?php echo $business ?>"><a href="home">Dynamic Business</a></div>
              <div class="menu-item sm-second <?php echo $enterprise ?> "><a href="enterprise">Enterprise</a></div>
            </div>
            <div class="menu-icon-wrap d-inline-block">
              <div class="menu-icon">
                <div class="icon-1"></div>
                <div class="icon-2"></div>
                <div class="icon-3"></div>
              </div>
            </div>
        </div>
      </div>
    </div>
    
  </nav>

</header>
<div class="header-dummy"></div>
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


