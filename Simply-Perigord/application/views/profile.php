<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>Profile
    </title>
    <?php $this->load->view("common/header-links.php");?>
    </style>
  </head>
<body class="page-template page-template-user-dashboard page-template-user-dashboard-php page page-id-464 logged-in mkd-core-1.0 mkdf-social-login-1.0 mkd-re-1.1.1 zuhaus child-child-ver-1.0.0 zuhaus-ver-1.1.1 mkdf-grid-1200 mkdf-sticky-header-on-scroll-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header wpb-js-composer js-comp-ver-5.4.4 vc_responsive" itemscope itemtype="">
  <div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">
      <?php $this->load->view("common/header");?>
      <div class="mkdf-content" >
        <div class="mkdf-content-inner">
          <div class="mkdf-title-holder mkdf-centered-type mkdf-preload-background mkdf-has-bg-image mkdf-bg-parallax" style="height: 340px;background-image:url(images/dashboard-title-img.jpg);" data-height="340">
            <div class="mkdf-title-image">
              <img itemprop="image" src="images/dashboard-title-img.jpg" alt="a" />
            </div>
            <div class="mkdf-title-wrapper" style="height: 340px">
              <div class="mkdf-title-inner">
                <div class="mkdf-grid">
                  <h1 class="mkdf-page-title entry-title" style="color: #ffffff">User Dashboard
                  </h1>
                  <h4 class="mkdf-page-subtitle" style="color: #ffffff">Your personal realty hub
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="mkdf-container">
            <div class="mkdf-container-inner clearfix">
              <div class="mkdf-membership-main-wrapper clearfix">
                <?php $this->load->view("common/dashboard-top-bar"); ?>
                <div class="mkdf-membership-dashboard-content-holder">
                  <div class="mkdf-membership-dashboard-page">
                    <div class="mkdf-membership-dashboard-page-content">
                      <div class="mkdf-profile-image">
                        <img src="http://1.gravatar.com/avatar/acd6ce71156dbd131a656d319314a2f3?s=96&#038;d=mm&#038;r=g" width="96" height="96" alt="" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 photo avatar-default" />       
                      </div>
                      <p>
                        <span>First Name:
                        </span>
                      </p>
                      <p>
                        <span>Last Name:
                        </span>
                      </p>
                      <p>
                        <span>Licence:
                        </span>
                      </p>
                      <p>
                        <span>Email:
                        </span>xeneration90@gmail.com
                      </p>
                      <p>
                        <span>Desription:
                        </span>
                      </p>
                      <p>
                        <span>Website:
                        </span>
                        <a href="" target="_blank">
                        </a>
                      </p>
                    </div>
                  </div>    
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- close div.content_inner -->
      </div>  
      <!-- close div.content -->
      <?php $this->load->view("common/footer"); ?>
    </div>
  </div>
  <?php $this->load->view("common/footer-links"); ?>
</body>
</html>
