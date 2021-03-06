<a href="#main" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
<?php if ($main_menu): ?>
    <a href="#main-nav" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
<?php endif; ?>
<!-- /#skipnav -->

<?php if (($page['header']) || ($page['language_switcher'])): ?>


    <div id="header" class="clearfix header" role="banner">
        <!-- barra de accesos directos fija -->
        <?php if ($user->uid): ?>
            <div id="barra-administracion" class="barra-administracion">
                <div class="row">
                    <div class="col-md-9">
                        <?php if ($page['admin_shortcuts']): ?>
                            <div id="admin-shortcuts" class="admin-shortcuts clearfix">  <?php print render($page['admin_shortcuts']); ?> </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if ($secondary_nav): ?>
                            <div id="secondary_nav" class="admin-secondary_nav clearfix"> <?php print render($secondary_nav); ?> </div>
                        <?php endif; ?>
                    </div>
                </div> 
            </div>
        <?php endif; ?>
        <!-- /#admin-shortcuts -->
            <div class="row">
                <div class="col-md-3">
                    <?php if ($logo): ?> 
                        <div id="logo" class="site-logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" role="presentation" /> </a></div>
                    <?php endif; ?>
                </div>
                <div class="<?php if ($page['language_switcher']): print 'col-md-7';
                                     else: print 'col-md-9';
                                  endif;?>">
                    <?php if ($page['header']): ?>
                        <div id="header-content" class="row-fluid header-content"><?php print render($page['header']); ?></div>
                        <!-- /#header-content -->
                    <?php endif; ?> 
                </div>
                <?php if ($page['language_switcher']): ?>
                    <div class="col-md-2">
                        <div id="language-switcher" class="language-switcher"> <?php print render($page['language_switcher']); ?> </div>
                    </div>     
                <?php endif; ?>          
            </div>
        </div>
    <?php endif; ?>
    <!-- barra de accesos directos fija  -->

    <!-- /#logo -->

    <?php if ($page['navigation']): ?>
        <div id="logo-navigation" class="clearfix logo-navigation">
            <div class="row">
                <div class="col-md-3">
                  
                </div>

                <div class="col-md-9">   
                    <?php if ($page['navigation']): ?>
                        <div id="navigation" class="perfiles"> <?php print render($page['navigation']); ?></div>
                    <?php endif; ?> 
                </div>
            </div>
        </div>   
    <?php endif; ?>

    <!-- carrusel -->
    <?php if ($page['main_carrusel']): ?>
        <div id="carrusel" class="clearfix banner" role="banner">
            <!-- <div class="row">
                <div class="col-md-12"> -->
            <div id="main_carrusel" class="row-fluid carrusel"><?php print render($page['main_carrusel']); ?></div>
            <!-- /#header-content -->
            <!--     </div>
            </div> -->
        </div>
    <?php endif; ?>
    <!-- carrusel  -->    

    <div id="main" class="clearfix main" role="main">

        <!--   <div class="container">  -->
        <?php if (!($is_front)): ?>
            <div class="row">
                <div id="breadcrumb">
                <?php if ($breadcrumb): ?>    
                    <?php print $breadcrumb; ?>
                <?php endif; ?>
                </div>
            </div>
         
        <?php endif; ?>
        <?php if ($page['main_top']): ?>
            <div class="row">
                <div id="main-top" class="row-fluid main-top"> <?php print render($page['main_top']); ?> </div>
            </div>
        <?php endif; ?>
        <?php if ($page['main_upper']): ?>
           <div id="main-upper" class="row-fluid main-upper"> 
                    <div class="row">
                       <?php print render($page['main_upper']); ?> 
                    </div>
           </div>
        <?php endif; ?>

        <?php
        if (!($is_front)) print '<div class="row">';
        else print '<div class="row">';
        ?> 
<!---
        <?php if ($title): ?>
            <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
        <?php endif; ?>
-->
        <?php
        if (!($is_front)) print '<div class="cuerpo">';
        else print '<div class="cuerpo_principal">';
        ?>   

        <div id="main-content<?php
        if (($is_front)): print '-frontpage';
        endif;
        ?>" class="main-content">          

<?php if ($page['sidebar_first']): ?>
                <div id="sidebar-first" class="sidebar col-md-3 site-sidebar-first">
                    <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
                </div>
                <!-- /#sidebar-first -->
            <?php endif; ?>
            <div id="content" class="mc-content <?php
            if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'col-md-6';
            elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'col-md-9';
            else: print 'col-md-12';
            endif;
            ?>">
                <div id="content-wrapper" class="content-wrapper">
                    <div id="content-head" class="row-fluid content-head">
                        <?php if ($page['highlighted']): ?>
                            <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
                        <?php endif; ?>
                        <?php print render($title_prefix); ?>

                        <?php print render($title_suffix); ?>
                        <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
                            <div class="tabs"> <?php print render($tabs); ?> </div>
                        <?php endif; ?>
                        <?php if ($messages): ?>
                            <div id="console" class="clearfix"><?php print $messages; ?></div>
                        <?php endif; ?>
                        <?php if ($page['help']): ?>
                            <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
                            <?php endif; ?>
                        <?php if ($action_links): ?>
                            <ul class="action-links">
                        <?php print render($action_links); ?>
                            </ul>
                    <?php endif; ?>
                    </div>
                    <?php if ($page['content_top']): ?>
                        <div id="content-top" class="row-fluid content-top"> <?php print render($page['content_top']); ?> </div>
                    <?php endif; ?>
                    <?php if ($page['content_upper']): ?>
                        <div id="content-upper" class="row-fluid content-upper"> <?php print render($page['content_upper']); ?> </div>
<?php endif; ?>
                    <?php if (($page['content']) || ($feed_icons)): ?>

                        <div id="content-body" class="row-fluid content-body">  <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>

                    <?php endif; ?>
                    <?php if ($page['content_lower']): ?>
                        <div id="content-lower" class="row-fluid content-lower"> <?php print render($page['content_lower']); ?> </div>
                    <?php endif; ?>
<?php if ($page['content_bottom']): ?>
                        <div id="content-bottom" class="row-fluid content-bottom"> <?php print render($page['content_bottom']); ?> </div>
<?php endif; ?>
                </div>
                <!-- /#content-wrap --> 
            </div>
            <!-- /#content -->
<?php if ($page['sidebar_second']): ?>
                <div id="sidebar-second" class="sidebar col-md-3 site-sidebar-second">
                    <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
                </div>
                <!-- /#sidebar-second -->
            <?php endif; ?>
<!-- row y cuerpo -->
</div></div>
       
</div>  <!--  main-content -->
        <!--  </div> -->
        <?php if ($page['main_lower']): ?>
            <section id="main-lower" class="row-fluid main-lower panel-pane"> <?php print render($page['main_lower']); ?> </section>
<?php endif; ?>
<?php if ($page['main_bottom']): ?>
            <div id="main-bottom" class="row-fluid main-bottom"> <?php print render($page['main_bottom']); ?> </div>
    <?php endif; ?>

    </div>
    <!-- /#main, /#main-wrapper -->
<?php if ($page['footer']): ?>
        <div id="footer" class="clearfix site-footer" role="contentinfo">

            <div id="footer-content" class="row-fluid footer-content"> <?php print render($page['footer']); ?> </div>

        </div>
        <!-- /#footer -->
    <?php


 endif; 
