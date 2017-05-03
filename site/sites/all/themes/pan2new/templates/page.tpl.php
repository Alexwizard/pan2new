<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page" class=".container-fluid">

    <header class="header" id="header" role="banner">

        <div id="menu-wrap">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Меню</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <?php print render($page['menu']); ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div></div>
            <?php if (!user_is_logged_in()): ?>
                <div class="login-link">
                    <a href="/user"> Войти </a>
                </div>
            <?php else: ?>
                <div class="my-orders-link">
                    <a href="/my-orders/"> Мои заказы </a>
                </div>
            <?php endif; ?>
            <div id="tel-numbers">
                <div><span class="code">+38</span> 066 07-000-30</div>
                <div class="devider"></div>
                <div><span class="code">+38</span> 096 07-000-30</div>
                <div class="devider"></div>
                <div class="suffix-3">044 337-00-30</div>
                <div class="backcall">Обратный звонок</div>
            </div>
        </div>
        <?php print render($page['menu2']); ?>
        <?php print render($page['slider']); ?>
        <!--    --><?php //if ($logo): ?>
        <!--      <a href="--><?php //print $front_page; ?><!--" title="-->
        <?php //print t('Home'); ?><!--" rel="home" class="header__logo" id="logo"><img src="-->
        <?php //print $logo; ?><!--" alt="--><?php //print t('Home'); ?><!--" class="header__logo-image" /></a>-->
        <!--    --><?php //endif; ?>
        <!---->
        <!--    --><?php //if ($site_name || $site_slogan): ?>
        <!--      <div class="header__name-and-slogan" id="name-and-slogan">-->
        <!--        --><?php //if ($site_name): ?>
        <!--          <h1 class="header__site-name" id="site-name">-->
        <!--            <a href="--><?php //print $front_page; ?><!--" title="-->
        <?php //print t('Home'); ?><!--" class="header__site-link" rel="home"><span>-->
        <?php //print $site_name; ?><!--</span></a>-->
        <!--          </h1>-->
        <!--        --><?php //endif; ?>
        <!---->
        <!--        --><?php //if ($site_slogan): ?>
        <!--          <div class="header__site-slogan" id="site-slogan">--><?php //print $site_slogan; ?><!--</div>-->
        <!--        --><?php //endif; ?>
        <!--      </div>-->
        <!--    --><?php //endif; ?>
        <!---->
        <!--    --><?php //if ($secondary_menu): ?>
        <!--      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">-->
        <!--        --><?php //print theme('links__system_secondary_menu', array(
        //          'links' => $secondary_menu,
        //          'attributes' => array(
        //            'class' => array('links', 'inline', 'clearfix'),
        //          ),
        //          'heading' => array(
        //            'text' => $secondary_menu_heading,
        //            'level' => 'h2',
        //            'class' => array('element-invisible'),
        //          ),
        //        )); ?>
        <!--      </nav>-->
        <!--    --><?php //endif; ?>
        <!---->
        <!--    --><?php //print render($page['header']); ?>

    </header>

    <div id="main">

        <?php print $messages; ?>
        <?php if (drupal_is_front_page()): ?>
            <div id="directions-wrap">
                <div class="container text-center">
                    <?php print render($page['directions']); ?>
                </div>
            </div>


            <div id="calculator-wrap">
                <?php print render($page['calculator']); ?>
                <div class="ajax-loading"></div>
            </div>


            <div id="work-wrap">
                <?php print render($page['work']); ?>
            </div>

        <?php endif; ?>

        <div id="content" class="column" role="main">

            <?php # print $breadcrumb; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
                <div class="title-wrapper">
                    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
                </div>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print render($tabs); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>

        </div>

        <div class="form-bg">
            <div class="form-place">
                <div class="close-form"> X</div>
                <?php print render($page['form']); ?>
            </div>
        </div>

        <?php
        // Render the sidebars to see if there's anything in them.
        //   $sidebar_first  = render($page['sidebar_first']);
        //   $sidebar_second = render($page['sidebar_second']);
        ?>

    </div>

</div>

<div id="bottom-wrap">
    <?php print render($page['bottom']); ?>
</div>
