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

                        /* array('label'=>'Manage Categories', 'url'=>array('/icecreamCategory/admin', 'view'=>'forms')),

                          array('label'=>'Create Flavours', 'url'=>array('/flavour/create', 'view'=>'create')),

                          array('label'=>'Manage Flavours', 'url'=>array('/flavour/admin', 'view'=>'forms')),

                          ),
                          ), */



                        /* array('label'=>'Contents',
                          'items'=>array(
                         */
                        /*
                          array('label'=>'Manage Questions', 'url'=>array('/questions/admin', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart'),

                          'items'=>array(
                          array('label'=>'Add Questions', 'url'=>array('/questions/create')),
                          ),

                          ),
                         */
                        //array('label'=>'Categories Messages', 'url'=>array('/ms/CategoriesMessages','name'=>'Common',"fb_msg_id"=>0)),
                        // array('label'=>'Manage Scoops', 'url'=>array('/entries/admin', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
                        //array('label'=>'Manage Queries', 'url'=>array('/queries/admin', 'view'=>'forms')),
                        //array('label'=>'Manage Movies', 'url'=>array('#', 'view'=>'interface')),
                        //array('label'=>'Manage Photos', 'url'=>array('#', 'view'=>'Demo 404 page')),
                        //array('label'=>'Manage Facebook Users', 'url'=>array('/users/admin', 'view'=>'calendar')),
                        // array('label'=>'Manage Pages', 'url'=>array('/page/page/admin', 'view'=>'buttons_and_icons')),
                        //  ),
                        //   ),
                        //array('label'=>'Downloads', 'visible'=>Yii::app()->user->checkAccess('admin'),
                        //'items'=>array(
                        //array('label'=>'Download Facebook Users', 'url'=>array('/ms/DownloadFbUsers')),
                        //array('label'=>'Download Participations', 'url'=>array('/ms/downloadParticipations')),
                        // array('label'=>'Download Queries', 'url'=>array('/queries/downloadAllQueries')),
                        // array('label'=>'Download Entries', 'url'=>array('/ms/DownloadAllEntries')),   
                        //   array('label'=>'Download Voters List', 'url'=>array('/ms/DownloadVotersDetails')),
                        //array('label'=>'Download Photos', 'url'=>array('#')),
                        /*   ),
                          ), */
                        array('label' => 'Downloads',
                            'items' => array(
//		     array('label'=>'Manage Questions', 'url'=>array('/questions/admin', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart'),
//
//			  'items'=>array(
//                    array('label'=>'Add Questions', 'url'=>array('/questions/create')),                    		    
//                  ),
//			 
//			 ),
//		      
                                //array('label'=>'Categories Messages', 'url'=>array('/ms/CategoriesMessages','name'=>'Common',"fb_msg_id"=>0)),
                                //array('label'=>'Manage Entries', 'url'=>array('/entries/admin', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
                                // array('label'=>'Manage Queries', 'url'=>array('/queries/admin', 'view'=>'forms')),
                                //array('label'=>'Manage Movies', 'url'=>array('#', 'view'=>'interface')),
                                //array('label'=>'Manage Photos', 'url'=>array('#', 'view'=>'Demo 404 page')),
                                //array('label'=>'Manage Facebook Users', 'url'=>array('/users/admin', 'view'=>'calendar')),
                                // array('label'=>'Manage Pages', 'url'=>array('/page/page/admin', 'view'=>'buttons_and_icons')),
                                //   ),
                                //   ),
                                //array('label'=>'Downloads', 'visible'=>Yii::app()->user->checkAccess('admin'),
                                //'items'=>array(
                                //array('label'=>'Download Facebook Users', 'url'=>array('/ms/DownloadFbUsers')),
                                //array('label'=>'Download Participations', 'url'=>array('/ms/downloadParticipations')),
                                array('label' => 'Download Voters', 'url' => array('/ms/downloaddebatevoters')),
                            // array('label'=>'Download Entries', 'url'=>array('/ms/DownloadAllEntries')),   
                            //   array('label'=>'Download Voters List', 'url'=>array('/ms/DownloadVotersDetails')),
                            //array('label'=>'Download Photos', 'url'=>array('#')),
                            ),
                        ),
                        array('label' => 'Debates',
                            'items' => array(
                                array('label' => 'Create Debate', 'url' => array('/debate/create', 'view' => 'create')),
                                array('label' => 'Manage Debates', 'url' => array('/debate/admin', 'view' => 'forms')),
                                array('label' => 'Manage Voters', 'url' => array('/votings/admin', 'view' => 'forms')),
                            ),
                        ),
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
                        array('label' => 'Job Management','url' =>'#',
                            'items' => array(
                                array('label' => 'Category', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Category', 'url' => array('/JobCategories/create')),
                                        array('label' => 'Manage Category', 'url' => array('/JobCategories/admin')),
                                    )),
                                array('label' => 'Jobs', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Jobs', 'url' => array('/Jobs/create')),
                                        array('label' => 'Manage Jobs', 'url' => array('/Jobs/admin')),
                                    )),
                                array('label' => 'WorkType', 'url' => '#', 'items' => array(
                                        array('label' => 'Create WorkType', 'url' => array('/JobWorktype/create')),
                                        array('label' => 'Manage WorkType', 'url' => array('/JobWorktype/admin')),
                                    )),
                                array('label' => 'Job Location', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Job Location', 'url' => array('/JobLocation/create')),
                                        array('label' => 'Manage Job Location', 'url' => array('/JobLocation/admin')),
                                    )),
                                array('label' => 'Team', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Team', 'url' => array('/jobTeams/create')),
                                        array('label' => 'Manage Team', 'url' => array('/jobTeams/admin')),
                                    )),
                                array('label' => 'Testimonial', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Testimonial', 'url' => array('/jobTestimonials/create')),
                                        array('label' => 'Manage Testimonial', 'url' => array('/jobTestimonials/admin')),
                                    )),
                                array('label' => 'Contact Us', 'url' => '#', 'items' => array(
                                        array('label' => 'Create Contact', 'url' => array('/jobContactus/create')),
                                        array('label' => 'Manage Contact', 'url' => array('/jobContactus/admin')),
                                    )),
                                array('label' => 'About Us', 'url' => '#', 'items' => array(
                                        array('label' => 'Create', 'url' => array('/jobAbout/create')),
                                        array('label' => 'View', 'url' => array('/jobAbout/admin')),
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