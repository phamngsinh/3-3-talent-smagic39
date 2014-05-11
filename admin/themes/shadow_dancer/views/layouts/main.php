<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">
            <div id="topnav">
                <div class="topnav_text">&nbsp;</div>
            </div>
            <div id="header">
                <div id="logo"><?php echo @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'ADMIN_PANEL_BRANDING'))->value4_text); ?></div>
            </div><!-- header -->


            <?php if (!Yii::app()->user->isGuest) { ?>

                <?php
                $this->widget('application.extensions.mbmenu.MbMenu', array(
                    'items' => array(
                        array('label' => 'Dashboard', 'url' => array('/site/index'), 'itemOptions' => array('class' => 'test')),
                        /* array('label'=>'Ice Cream',
                          'items'=>array(
                         */
                        array('label' => 'Settings',
                            'items' => array(
                                array('label' => 'Application Settings', 'url' => array('/ms/applicationSettings'), 'visible' => Yii::app()->user->checkAccess('admin')),
                                array('label' => 'Pre-like Page Settings', 'url' => array('/ms/prelikeSettings')),
                                array('label' => 'Facebook Settings', 'url' => array('/ms/facebookSettings'), 'visible' => Yii::app()->user->checkAccess('admin')),
                                array('label' => 'Content Settings', 'url' => array('/ms/contentSettings'), 'visible' => Yii::app()->user->checkAccess('admin')),
                                array('label' => 'Facebook Sharing Messages', 'url' => array('/ms/FacebookSharingMessages', 'name' => 'Common', "fb_msg_id" => 0),
                                //we can add multiple group for sharing msgs, we can pass different group id
                                ),
                                array('label' => 'Admin Panel Branding', 'url' => array('/ms/adminPanelBranding', 'name' => 'Common', "fb_msg_id" => 0), 'visible' => Yii::app()->user->checkAccess('admin')),
                                //array('label'=>'Twitter Sharing Messages', 'url'=>array('ms/TwitterSharingMessages','name'=>'Common',"twitter_msg_id"=>0)),
                                array('label' => 'Add App to Facebook Tab', 'url' => array('/ms/AddToFbTab')),
                            ),
                        ),
                        //smagic39 add more function
                        array('label' => 'Job Management', 'url' => '#',
                            'items' => array(
                                array('label' => 'Job Application', 'url' => array('/jobEmployees/apply')),
                                array('label' => 'Job Registration', 'url' => array('/jobEmployees/regCv')),
                                array('label' => 'Job Alerts', 'url' => array('/jobEmployees/alert')),
                                array('label' => 'Jobs', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Jobs', 'url' => array('/Jobs/create')),
                                        array('label' => 'Manage Jobs', 'url' => array('/Jobs/admin')),
                                    )),
                                array('label' => 'Testimonial', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Testimonial', 'url' => array('/jobTestimonialUser/create')),
                                        array('label' => 'Manage Testimonial', 'url' => array('/jobTestimonialUser/admin')),
                                    )),
                            ),
                        ),
                        // Job settings
                        array('label' => 'Job Settings', 'url' => '#',
                            'items' => array(
                                array('label' => 'Job Category', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Job Category', 'url' => array('/JobCategories/create')),
                                        array('label' => 'Manage Job Category', 'url' => array('/JobCategories/admin')),
                                    )),
                                array('label' => 'Job Type', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Job Type', 'url' => array('/JobWorktype/create')),
                                        array('label' => 'Manage Job Type', 'url' => array('/JobWorktype/admin')),
                                    )),
                                array('label' => 'Job Location', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Job Location', 'url' => array('/JobLocation/create')),
                                        array('label' => 'Manage Job Location', 'url' => array('/JobLocation/admin')),
                                    )),
                            ),
                        ),
                        // CMS
                        array('label' => 'CMS', 'url' => '#',
                            'items' => array(
                                array('label' => 'Team', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Team', 'url' => array('/jobTeams/create')),
                                        array('label' => 'Manage Team', 'url' => array('/jobTeams/admin')),
                                    )),
                                array('label' => 'About Us', 'url' => array('/jobAbout/create')),
                                array('label' => 'Contact Us', 'url' => '#', 'items' => array(
                                        array('label' => 'Application Settings', 'url' => array('/jobContactus/contact')),
                                        array('label' => 'Manage Contact', 'url' => array('/jobContactus/admin')),
                                    )),
                            ),
                        ),
                        array('label' => 'Authentications',
                            'items' => array(
                                array('label' => 'Admin Panel Users', 'visible' => Yii::app()->user->checkAccess('admin'), 'url' => array('/adminUsers/admin'),
                                    'items' => array(
                                        array('label' => 'List Admin Panel Users', 'url' => array('/adminUsers/admin')),
                                        array('label' => 'Add New Admin Panel Users', 'url' => array('/adminUsers/create')),
                                    ),
                                ),
                                array('label' => 'Change Your Password', 'url' => array('/adminUsers/changePassword')),
                            ),
                        ),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    ),
                ));
                ?> 


                <!--mainmenu -->
                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>

                <?php
            } //is logged in
            ?>


            <?php echo $content; ?>

            <div id="footer">
                <?php echo @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'ADMIN_PANEL_BRANDING'))->value5_text); ?>

            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>