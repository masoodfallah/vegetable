<?php
/**
 * @package     .Site
 * @subpackage  Templates.pesteh3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$user = JFactory::getUser();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Output as HTML5
$doc->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/template.js');


// Add Stylesheets
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/custom.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/bootstrap/css/bootstrap.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/fa/css/font-awesome.min.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/fa/css/Pe-icon-7-stroke.css');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <jdoc:include type="head"/>
    <!--[if lt IE 9]>
    <script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->
</head>
<body>

<?php
$mainClass = 'blogPage';

if (JFactory::getApplication()->getMenu()->getActive() != '')
    if (JFactory::getApplication()->getMenu()->getActive()->alias == 'home'):
        $mainClass = '';
    endif; ?>

<div class="main-wrapper  <?php echo $mainClass ?>  ">


    <!-- Header -->
    <header id="sp-header" class="flex">
        <div class="container">
            <div class="row" style="position: relative;">


                <!--LOGO-->
                <div id="sp-logo" class="col-xs-8 col-sm-8 col-md-3">
                    <div class="sp-column ">
                        <a class="logo" href="/">
                            <img class="sp-default-logo" src="templates/pesteh3/css/img/logo.png"
                                 alt="masood website logo">
<!--                            <p style="font-size: 30px">لوگو سی پل</p>-->
                            <!--<img class="sp-retina-logo" src="templates/pesteh3/css/img/logo.png" alt="لوگو سیکور" width="200" height="80">-->
                        </a>
                    </div>
                </div>


                <!--MENU-->
                <div id="sp-menu" class="col-xs-1 col-sm-1 col-md-7 " >
                    <nav class="menu-contain">
                        <jdoc:include type="modules" name="menu"/>
                    </nav>
                </div>


                    <!--shoppingcart-->
<!--                <div id="sp-shoppingcart" class="col-xs-1 col-sm-1 col-md-1 no-gutter">-->
<!--                    <div class="sp-column no-gutter">-->
<!--                        <jdoc:include type="modules" name="shoppingcart"/>-->
<!--                        <a class="shoppingcart" href="/">-->
<!--                            <i class="pe pe-7s-cart" aria-hidden="true"></i>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->


                <!--SEARCH-->
                <div id="sp-topsearch" class="col-xs-2 col-sm-2 col-md-2 no-gutter">
                    <div class="sp-column no-gutter">
                        <jdoc:include type="modules" name="search"/>
                        <a class="search" href="/">
                            0936-739-9611 &nbsp; مسعود فلاح
<!--                            <i class="pe-7s-search" aria-hidden="true"></i>-->
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </header>


    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->


    <?php if ($this->countModules('slider')) : ?>
        <div class="slider">
            <jdoc:include type="modules" name="slider" style="none"/>
        </div>
    <?php endif; ?>



    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->

    <?php if ($this->countModules('ourcustomer')) : ?>
        <div class="ourcustomer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <jdoc:include type="modules" name="ourcustomer" style="xhtml"/>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->

    <?php
    $cssclass = '';

    if (JFactory::getApplication()->getMenu()->getActive() != ''):

        if (JFactory::getApplication()->getMenu()->getActive()->alias == 'blog'): ?>
            <div class=" blogHead ">
                <div class="blogCover"></div>
            </div>
        <?php endif; ?>

        <?php if (JFactory::getApplication()->getMenu()->getActive()->alias == 'contactus'): ?>
        <div class=" contactHead ">
            <div class="contactCover"></div>
        </div>


    <?php endif; ?>
    <?php endif; ?>


    <?php
    $menu = JFactory::getApplication()->getMenu();
    $lang = JFactory::getLanguage();
    if ($menu->getActive() != $menu->getDefault($lang->getTag())) :?>

        <div class="breadCrump">
            <div class="container">
                <jdoc:include type="modules" name="breadCrump" style="none"/>
            </div>
        </div>

    <?php endif; ?>


    <div class="container">

        <?php if ($this->countModules('right')) : ?>
            <!--right-->
            <div class="right col-md-3 col-sm-4 pull-right">
                <jdoc:include type="modules" name="right" style="xhtml"/>
            </div>

            <?php $cssclass = ' col-md-9 col-sm-8 content '; ?>

        <?php endif; ?>


        <div class=" <?php echo $cssclass; ?>">
            <jdoc:include type="component"/>
        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->

    <?php if ($this->countModules('contactPage') || $this->countModules('contactPage-map')) : ?>
        <div class="container contactUsPage">

            <!--contactPage-->
            <div class="col-sm-6 pull-right">
                <div class=" contactPage">
                    <jdoc:include type="modules" name="contactPage" style="xhtml"/>
                </div>
            </div>

            <!--contactPage-map-->
            <div class="col-sm-6 pull-right">
                <div class=" contactPage-map">
                    <jdoc:include type="modules" name="contactPage-map" style="xhtml"/>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->

</div>

<div class="clearfix "></div>

<div class="footer">
    <div class="container">
        <div class="row" style="position: relative;">

            <!--aboutus-->
            <?php if ($this->countModules('aboutus')) : ?>
                <div class="col-sm-4 pull-right">
                    <div class="sppb-icon aboutus">
                        <jdoc:include type="modules" name="aboutus" style="xhtml"/>
                    </div>
                </div>
            <?php endif; ?>


            <!--latestNews-->
            <?php if ($this->countModules('latestNews')) : ?>
                <div class="col-sm-4 pull-right">
                    <div class="sppb-icon latestNews">
                        <jdoc:include type="modules" name="latestNews" style="xhtml"/>
                    </div>
                </div>
            <?php endif; ?>


            <!--contactus-->
            <?php if ($this->countModules('popularTag')) : ?>
                <div class="col-sm-4 pull-right">
                    <div class="sppb-icon popularTag">
                        <jdoc:include type="modules" name="popularTag" style="xhtml"/>
                    </div>
                </div>
            <?php endif; ?>


        </div>
    </div>
</div>


<?php if ($this->countModules('footer')) : ?>
    <div class="footer-inner">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-6">
            <jdoc:include type="modules" name="footer" style="xhtml"/>
        </div>
    </div>
<?php endif; ?>


</body>
</html>


<script>
    jQuery("document").ready(function ($) {

        $(document).scroll(function () {
            if ($(window).scrollTop() > 0) {
                $('#sp-header').addClass('sticky animated fadeInDown');

            } else {
                $('#sp-header').removeClass('sticky animated fadeInDown');
            }
        });
    });
</script>
