<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    </head>

    <body>
        <?php //Yii::app()->bootstrap->register(); ?>
        <div class="" id="page">

            <div class="navbar">
                <div class="navbar navbar-inverse">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">Project name</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->
                        <div class="nav-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="home"><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/index">Home</a></li>
                                <li class="photo"><a " href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/photo/index">Photo</a></li>
                                <li class="upload"><a " href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/photo/upload">Upload</a></li>
                                <li class="about"><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/about">About</a></li>
                                <li class="contact"><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/contact">Contact</a></li>                             
                                <li class="news"><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/news">News</a></li>                             
                                <li class="put news"><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/news/form">Put news</a></li>                             
                                <li class="login"><a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/login">Login</a></li>                             

                            </ul>
                            <!-- .nav, .navbar-search, .navbar-form, etc -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="container content-center">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if (isset($this->breadcrumbs)): ?>
                            <?php
                            $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links' => $this->breadcrumbs,
                            ));
                            ?><!-- breadcrumbs -->
                        <?php endif ?>

                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="row footer-main-row">

                <div id="footer">
                    Copyright &copy; <?php echo date('Y'); ?> by Kotmonstr.<br/>
                    All Rights Reserved.<br/>
                    <?php
                    echo Yii::powered() . ' v ';
                    $a = new YiiBase;
                    echo $a->getVersion();
                    ?>
                </div><!-- footer -->

            </div><!-- page -->
            </div><!-- page -->



    </body>
</html>
