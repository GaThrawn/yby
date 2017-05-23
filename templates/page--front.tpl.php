<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<head>
<!--CDN links for TweenLite, CSSPlugin, and EasePack-->
	
 	<script src="/sites/all/themes/yby/js/lib/greensock/TweenMax.min.js"></script>
    <script src="/sites/all/themes/yby/js/lib/greensock/plugins/ScrollToPlugin.min.js"></script>
    <script src="/sites/all/themes/yby/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script src="/sites/all/themes/yby/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script src="/sites/all/themes/yby/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>




</head>
  <!--    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>-->
<script>
	// init controller
	var controller = new ScrollMagic.Controller();
</script>
<div class="main-container container-fluid<?php print $container_class; ?>">
   

    <!-- Hero -->
    <div class="row-fluid fronthero">
        <div class=""> <?php if ($page['hero']): ?><?php print render($page['hero']); ?><?php endif; ?></div>
    </div>
 <!-- Menu -->
    <div id="trigger1"></div><div id="pin1">
   <div id="pin1" class="row menu-color navbar">
        <div class="logo"> 
            <?php if ($logo): ?>
        <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive"/>
        </a>
                  <?php endif; ?></div>
        <div class="">
            <div class="menu-container">
              
                <?php if ($page['menu']): ?><?php print render($page['menu']); ?><?php endif; ?></div>
        </div>
    </div></div></div>
    
    <script>
	$(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 900})
						.setPin("#pin1")
						.addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
						.addTo(controller);
	});
</script>
<!-- fronblocks -->
  
        <section id="section1" class="section1">
             <div class="row-fluid" >
         <?php if ($page['section1']): ?><?php print render($page['section1']); ?><?php endif; ?>
    </div>
    </section>
    
    
   

    <section id="secimgspc1" class="secimgspc1">
    <div class="row-fluid" >
         <?php if ($page['secimgspc1']): ?><?php print render($page['secimgspc1']); ?><?php endif; ?>
    </div>
    
    </section>
 <div id="section1trig">&nbsp;</div>
        <section id="section2" class="section2">
             <div class="row-fluid" >
         <?php if ($page['section2']): ?><?php print render($page['section2']); ?><?php endif; ?>
     </div>
    </section>

 <script>								
	// Picture tween
	var tween = TweenMax.fromTo("#frontbook", 3,
						{scale:0.8, opacity:.6},
						{scale:1, opacity: 1, repeat: 0, yoyo: false, ease: Circ.easeInOut});
	// Picture scene
	var scene = new ScrollMagic.Scene({triggerElement: "#section1trig", duration: 400, offset: -100})
				
										.setTween(tween)
										//.addIndicators({name: "Section1"})
										.addTo(controller);
    </script>

    <section id="secimgspc2" class="secimgspc2">
    <div class="row-fluid" >
         <?php if ($page['secimgspc2']): ?><?php print render($page['secimgspc2']); ?><?php endif; ?>
    </div>
    </section>
    <section id="section3" class="section3">
        <div class="row-fluid" >
         <?php if ($page['section3']): ?><?php print render($page['section3']); ?><?php endif; ?>
     </div>
    </section>
    <section id="secimgspc3" class="secimgspc3">
    <div class="row-fluid" >
         <?php if ($page['secimgspc3']): ?><?php print render($page['secimgspc3']); ?><?php endif; ?>
    </div>
    </section>
     <section id="section4" class="section4">
        <div class="row-fluid" >
            
       <div class="col-sm-6" ><div class="twoaccrossbtma">     
         <?php if ($page['section4a']): ?><?php print render($page['section4a']); ?><?php endif; ?>
      </div></div>
        <div class="col-sm-6" ><div class="twoaccrossbtmb section4a"><div class="darkhover1" >
         <?php if ($page['section4b']): ?><?php print render($page['section4b']); ?><?php endif; ?>
      </div></div></div>
         </div>
    </section>
     <section id="secimgspc4" class="secimgspc4">
    <div class="row-fluid" >
         <?php if ($page['secimgspc4']): ?><?php print render($page['secimgspc4']); ?><?php endif; ?>
    </div>
    </section>
    <section id="section5" class="section5">
        <div class="row-fluid" >
         <?php if ($page['section5']): ?><?php print render($page['section5']); ?><?php endif; ?>
     </div>
    </section>


</div>
</div>

        
<!--
<?php if (!empty($page['footer'])): ?>
  <footer class="footer menu-color <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>-->
