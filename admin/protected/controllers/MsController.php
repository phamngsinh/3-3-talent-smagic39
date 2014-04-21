<?php

class MsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $msValus;

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function init() {

        //setting default timezone of php
        date_default_timezone_set('Asia/Singapore');


        //set ms fields
        $msValus = array(
            //facebook sharing msgs
            'FB_APP_DETAILS' . @$_REQUEST['fb_msg_id'] => array("value4_text" => "Facebook sharing title here", "value5_text" => "Facebook sharing details here"),
            'FB_MANUAL_POPUP_BOX_GLOBAL' . @$_REQUEST['fb_msg_id'] => array("value4_text" => "[APP_TITLE]", "value5_text" => "[APP_DETAILS]"),
            'FB_INVITE_FRIENDS_GLOBAL' . @$_REQUEST['fb_msg_id'] => array("value4_text" => "Invite", "value5_text" => "Invite your friends."),
            'FB_INVITE_FRIENDS_SINGLE_ENTRY' . @$_REQUEST['fb_msg_id'] => array("value4_text" => "Invite", "value5_text" => "Invite your friends."),
            'FB_SHARING_SINGLE_ENTRY' . @$_REQUEST['fb_msg_id'] => array("value4_text" => "[ENTRY_TITLE]", "value5_text" => "[ENTRY_DETAILS]"),
            'FB_AUTO_MSG_ON_ENTRY_SUBMISSION' . @$_REQUEST['fb_msg_id'] => array("value1" => "[ENTRY_TITLE]", "value4_text" => "[ENTRY_DETAILS]", "value5_text" => "[APP_DETAILS]"),
            'FB_AUTO_MSG_ON_VOTING' . @$_REQUEST['fb_msg_id'] => array("value1" => "[ENTRY_TITLE]", "value4_text" => "[ENTRY_DETAILS]", "value5_text" => "[APP_DETAILS]"),
            //twitter sharing msgs
            'TWITTER_MESSAGE_GLOBAL' . @$_REQUEST['twitter_msg_id'] => array("value4_text" => "[APP_DETAILS]"),
            'TWITTER_MESSAGE_SINGLE_ENTRY' . @$_REQUEST['twitter_msg_id'] => array("value4_text" => "[APP_DETAILS]"),
            /////////////
            'APP_DETAILS' => array("value4_text" => "Application title here", "value5_text" => "Application details here"),
            'FACEBOOK_KEYS' => array("value4_text" => "Enter facebook api id here", "value5_text" => "Enter facebook secret key here", "value1" => "demo_app", "value2" => "publish_stream, email, user_photos, user_birthday"),
            'FACEBOOK_URLS' => array("value4_text" => "Enter facebook tab url here", "value5_text" => "Enter facebook canvas url here"),
            'adminEmail' => array('value4_text' => 'shahid@rocketunder.com'),
            'emailFrom' => array('value4_text' => 'info@ogilvyapplications'),
            'year_from' => '',
            'year_to' => '',
            'APPLICATION_TIMEZONE' => array('value1' => 'Singapore'),
            'APPLICATION_STATUS' => array('value4_text' => 'Coming Soon', 'value6_int' => 1),
            'ALLOW_BLOCK_USERS' => array('value4_text' => 'You are not allowed to view this application.', 'value6_int' => 1),
            'MOBILE_PHONES_STATUS' => array('value4_text' => 'This application can not run on mobile phones. Please use your computer\'s web browser.', 'value6_int' => 1),
            'PRELIKE_PAGE' => array('value4_text' => 'You must click on like button to see this page.', 'value1' => 'Custom HTML'),
            'ADMIN_PANEL_BRANDING' => array('value4_text' => '<p><img src="themes/shadow_dancer/images/logo.png" alt="" /></p>', 'value5_text' => '<p style="text-align: center;"><span>Copyright &copy; 2014 Fountaintechies.com. All Rights Reserved.</span><br /><span></span></p>'),
            'ADMIN_CONTACT' => array('value_contact' => ''),
            //ENTRIES Settings
            'ENTRIES_SETTINGS_ENTRIES_DEFAULT_STATUS' => array('value6_int' => 1),
            'ENTRIES_SETTINGS_ENTRIES_PER_USER' => array('value6_int' => 1000, 'value4_text' => 'Sorry! You are not allowed to add more than [VALUE] entries.', 'value5_text' => 'Thanks! Your entry has been submitted successfully.'),
            'ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY' => array('value6_int' => 600, 'value4_text' => 'Sorry! You can not add entries before 10 minutes.'),
            'ENTRIES_SETTINGS_VOTES_PER_USER' => array('value6_int' => 1000, 'value4_text' => 'Sorry! You are not allowed to add more than [VALUE] votes.', 'value5_text' => 'Thanks! Voted successfully.'),
            'ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY' => array('value6_int' => 86400, 'value4_text' => 'Sorry! You can not vote before one day on this entry.'),
        );



        if (isset($_REQUEST['refreshFBMessages'])) {

            foreach ($msValus as $name => $val) {
                $prefix = substr($name, 0, 3);

                if ($prefix == "FB_") {
                    $ms = Ms::model()->findByAttributes(array('var_name' => '' . $name . ''));
                    @$ms->delete();
                }
            }
        }


        
        //add new records if not found, update if found while taking data from the form post.
        foreach ($msValus as $name => $val) {
            $ms = Ms::model()->findByAttributes(array('var_name' => '' . $name . ''));

            if (!$ms) {
                $ms = new MS;
                $ms->var_name = $name;
                $ms->attributes = $val;
                $ms->save();
            } else {
                if (isset($_POST[$name])) {
                    $ms->attributes = $_POST[$name];
                    $ms->save();
                }
            }
        }
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('prelikeSettings', 'FacebookSharingMessages', 'TwitterSharingMessages', 'AddToFbTab', 'CategoriesMessages'),
                'roles' => array('admin', 'operator'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('contentSettings', 'applicationSettings', 'facebookSettings', 'AdminPanelBranding', 'downloads', 'DownloadAllEntries', 'DownloadPhotos', 'DownloadUsersEntries', 'DownloadVotersDetails', 'DownloadQueries', 'DownloadVotedUsersOnly', 'DownloadFbUsers', 'DownloadParticipations', 'DownloadAllQueries', 'DownloadDebateVoters'),
                'roles' => array('admin'),
            ),
            /*
              array('allow', // allow authenticated user to perform 'create' and 'update' actions
              'actions'=>array('create','updatesingle','prelikeSettings','AddToFbTab','FacebookSharingMessages','TwitterSharingMessages'),
              'users'=>array('@'),
              ),


              array('allow', // allow authenticated user to perform 'create' and 'update' actions
              'actions'=>array('applicationSettings','facebookSettings','AdminPanelBranding'),
              'roles'=>array('admin'),
              ),



              array('allow', // allow admin user to perform 'admin' and 'delete' actions
              'actions'=>array('create','updatesingle','downloads', 'DownloadAllEntries', 'DownloadPhotos', 'DownloadFbUsers','downloads','DownloadUsersEntries','DownloadVotersDetails','DownloadQueries','DownloadVotedUsersOnly','DownloadVaultUsers','AdminPanelBranding'),
              'users'=>array('admin'),
              ),


             */
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionApplicationSettings() {

        if (isset($_POST['yt0'])) {
            //save contest start date
            $start_date = $model = Ms::model()->findByAttributes(array("var_name" => "APPLICATION_START_DATE"));
            $start_date->attributes = $_REQUEST['Ms'];
            $start_date->save();
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('application_settings');
    }

    public function actionPrelikeSettings() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('prelike_settings');
    }

    public function actionFacebookSettings() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('facebook_settings');
    }

    public function actionContentSettings() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('content_settings');
    }

    public function actionFacebookSharingMessages() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('facebook_sharing_messages');
    }

    public function actionAdminPanelBranding() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('admin_panel_branding');
    }
    

    public function actionTwitterSharingMessages() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Settings updated successfully!");
        }

        $this->render('twitter_sharing_messages');
    }

    public function actionCategoriesMessages() {

        if (isset($_POST['yt0'])) {
            Yii::app()->user->setFlash('success', "Messages updated successfully!");
        }

        $this->render('categories_messages');
    }

    public function actionAddToFbTab() {

        if (isset($_POST['yt0'])) {
            //$this->redirect("https://www.facebook.com/dialog/pagetab?app_id=".$_REQUEST['FACEBOOK_KEYS[value4_text]']."&next=".$_REQUEST['FACEBOOK_KEYS[value1]']."");
        }

        $this->render('add_to_fb_tab');
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Ms;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Ms'])) {
            $model->attributes = $_POST['Ms'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Ms'])) {
            $model->attributes = $_POST['Ms'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Ms');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Ms('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Ms']))
            $model->attributes = $_GET['Ms'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Ms::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ms-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * downloads area
     */
    public function actionDownloads() {
        $this->render('downloads');
    }

    public function actionDownloadFbUsers() {



        $provider = Yii::app()->db->createCommand("select id, salutation, name, nric, email, contact_number, userid, url from tbl_users order by id asc")->queryAll();

        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('id' => 'ID', 'name' => 'Name', 'email' => 'Email Address', 'nric' => 'NRIC', 'userid' => 'Facebook ID', 'url' => 'Facebook URL', 'salutation' => 'Salutation', 'contact_number' => 'Contact Number');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/FacebookAllUsers.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadDebateVoters() {



        $provider = Yii::app()->db->createCommand("select tbl_debate.id,tbl_users.name,tbl_users.email,tbl_debate.debate_title,tbl_votings.vote_date from tbl_votings,tbl_users,tbl_debate where tbl_debate.id = tbl_votings.entry_id and tbl_users.id =  tbl_votings.user_id order by tbl_debate.id asc")->queryAll();

        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('id' => 'ID', 'name' => 'Name', 'email' => 'Email Address', 'debate_title' => 'Debate Title', 'vote_date' => 'Vote Date');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/DebateVoters.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadUsersEntries() {
        //$provider = Yii::app()->db->createCommand("select id, user_id, (select name from tbl_users where id = user_id limit 1) as user_name, total_votes, title, url, details, date from tbl_entries order by total_votes desc")->queryAll();

        $provider = Yii::app()->db->createCommand("select id, user_id, (select first_name from tbl_users where id = user_id limit 1) as first_name, (select last_name from tbl_users where id = user_id limit 1) as last_name, (select age from tbl_users where id = user_id limit 1) as age, (select gender from tbl_users where id = user_id limit 1) as gender, (select mobile_number from tbl_users where id = user_id limit 1) as contact_number , (select email from tbl_users where id = user_id limit 1) as email, (select address from tbl_users where id = user_id limit 1) as mailing_address, (select zip_code  from tbl_users where id = user_id limit 1) as postal_code, (select current_food_brand   from tbl_users where id = user_id limit 1) as current_food_brand , (select search_source  from tbl_users where id = user_id limit 1) as search_source, total_votes, total_views, details, date from tbl_entries order by total_votes desc")->queryAll();
        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        //$csv->headers = array('id'=>'ID','user_id'=>'UserID', 'user_name'=>'User Name', 'total_votes'=>'Total Votes', 'title'=>'Video Title', 'url'=>'Video Url', 'details'=> 'Video Details', 'date'=>'Date'); 

        $csv->headers = array('id' => 'ID', 'user_id' => 'UserID', 'user_name' => 'User Name', 'total_votes' => 'Total Votes', 'total_views' => 'Total Views', 'details' => 'Details', 'date' => 'Date');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/UsersEntries.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadVotersDetails() {
        //$provider = Yii::app()->db->createCommand("select id, user_id, (select name from tbl_users where id = user_id limit 1) as user_name, video_id, (select title from tbl_videos where id = video_id limit 1) as video_title, from_unixtime(vote_time) as vote_time from tbl_votings order by id asc")->queryAll();
        //$provider = Yii::app()->db->createCommand("select id, user_id, (select name from tbl_users where id = user_id limit 1) as user_name, video_id, (select title from tbl_videos where id = video_id limit 1) as title, (select details from tbl_videos where id = video_id limit 1) as details, from_unixtime(vote_time) as vote_time from tbl_votings order by id asc")->queryAll();

        $provider = Yii::app()->db->createCommand("select id, user_id, (select name from tbl_users where id = user_id limit 1) as user_name, entry_id, (select nric from tbl_users where id = user_id limit 1) as NRIC, (select name from tbl_users where id = user_id limit 1) as user_name, from_unixtime(vote_time) as vote_time from tbl_votings order by id asc")->queryAll();


        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        //$csv->headers = array('id'=>'ID','user_id'=>'UserID', 'user_name'=>'User Name', 'video_id'=>'Video ID', 'video_title'=>'Video Title',  'vote_time'=> 'Voting Time'); 
        $csv->headers = array('id' => 'ID', 'user_id' => 'UserID', 'user_name' => 'User Name', 'entry_id' => 'Submission ID', 'title' => 'Submission Title', 'details' => 'Details', 'vote_time' => 'Voting Time', "school" => "School Name", "name_manual" => "Name (manual)", "interest" => "Interest");
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/VotersDetails.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    /**
     * download users who voted but not participated
     */
    public function actionDownloadVotedUsersOnly() {
        //$provider = Yii::app()->db->createCommand("select id, user_id, (select name from tbl_users where id = user_id limit 1) as user_name, video_id, (select title from tbl_videos where id = video_id limit 1) as video_title, from_unixtime(vote_time) as vote_time from tbl_votings order by id asc")->queryAll();
        //$provider = Yii::app()->db->createCommand("select tbl_votingsid, user_id, (select name from tbl_users where id = user_id limit 1) as user_name, video_id, (select details from tbl_entries where id = video_id limit 1) as details,  vote_time from tbl_votings  left join tbl_entries on tbl_entries.user_id=tbl_votings.user_id where tbl_entries.user_id is null order by id asc")->queryAll();

        $provider = Yii::app()->db->createCommand("select tbl_votings.id, tbl_votings.user_id, (select name from tbl_users where id = tbl_votings.user_id limit 1) as user_name, video_id, (select details from tbl_entries where id = tbl_votings.video_id limit 1) as details,  vote_time from tbl_votings  left join tbl_entries on tbl_entries.user_id=tbl_votings.user_id where tbl_entries.user_id is null order by tbl_votings.id asc")->queryAll();
        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        //$csv->headers = array('id'=>'ID','user_id'=>'UserID', 'user_name'=>'User Name', 'video_id'=>'Video ID', 'video_title'=>'Video Title',  'vote_time'=> 'Voting Time'); 
        $csv->headers = array('id' => 'ID', 'user_id' => 'UserID', 'user_name' => 'User Name', 'video_id' => 'Photo ID', 'details' => 'Details', 'vote_time' => 'Voting Time');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/VotersDetailsOnly.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadQueries() {
        $provider = Yii::app()->db->createCommand("select id, first_name, last_name, age, gender, contact_number , email_address , mailing_address , postal_code , current_food_brand , search_source , date from tbl_queries order by id asc")->queryAll();

        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('id' => 'ID', 'search_source' => 'Search Source', 'search_source' => 'Where did you hear of us');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/VotersDetails.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadVaultUsers($entry_id = '') {
        if ($entry_id == '') {
            //$provider = Yii::app()->db->createCommand("select date,  (select name from tbl_users where id = tbl_videos.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_videos.user_id limit 1) as Email, values_field, kids_name, title, details, total_votes from tbl_videos order by id asc")->queryAll();
            $provider = Yii::app()->db->createCommand("select id,  (select name from tbl_users where id = tbl_wants.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_wants.user_id limit 1) as Email, (select first_name from tbl_users where id = tbl_wants.user_id limit 1) as First_Name, (select last_name from tbl_users where id = tbl_wants.user_id limit 1) as Last_Name, (select nric from tbl_users where id = tbl_wants.user_id limit 1) as NRIC, (select mobile_number from tbl_users where id = tbl_wants.user_id limit 1) as Mobile_Number, (select title from tbl_vault where id = tbl_wants.entry_id limit 1) as Title, entry_id as Entry_Id, date as Date from tbl_wants order by id asc")->queryAll();
        } else {
            $provider = Yii::app()->db->createCommand("select id,  (select name from tbl_users where id = tbl_wants.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_wants.user_id limit 1) as Email, (select first_name from tbl_users where id = tbl_wants.user_id limit 1) as First_Name, (select last_name from tbl_users where id = tbl_wants.user_id limit 1) as Last_Name, (select nric from tbl_users where id = tbl_wants.user_id limit 1) as NRIC, (select mobile_number from tbl_users where id = tbl_wants.user_id limit 1) as Mobile_Number, (select title from tbl_vault where id = tbl_wants.entry_id limit 1) as Title, entry_id as Entry_Id, date as Date from tbl_wants where entry_id='$entry_id' order by id asc")->queryAll();
        }


        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('date' => 'Date Submitted', 'values_field' => 'Value', 'other_school' => 'Other', 'kids_name' => 'Child Name', 'title' => 'Submission Title', 'details' => 'Details', 'total_votes' => 'Number of Votes');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/AllEntries.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadAllEntries() {
        //$provider = Yii::app()->db->createCommand("select date,  (select name from tbl_users where id = tbl_videos.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_videos.user_id limit 1) as Email, values_field, kids_name, title, details, total_votes from tbl_videos order by id asc")->queryAll();
        $provider = Yii::app()->db->createCommand("select date,  (select salutation from tbl_users where id = tbl_entries.user_id limit 1) as Salutation,  (select name from tbl_users where id = tbl_entries.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_entries.user_id limit 1) as Email, (select nric from tbl_users where id = tbl_entries.user_id limit 1) as NRIC, details, date, total_votes, selected_friends from tbl_entries order by id asc")->queryAll();

        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('date' => 'Date Submitted', 'values_field' => 'Value', 'other_school' => 'Other', 'kids_name' => 'Child Name', 'title' => 'Submission Title', 'details' => 'Details', 'total_votes' => 'Number of Scoops', 'selected_friends' => "Friends");
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/AllEntries.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadParticipations() {

        //$provider = Yii::app()->db->createCommand("select date,  (select name from tbl_users where id = tbl_videos.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_videos.user_id limit 1) as Email, values_field, kids_name, title, details, total_votes from tbl_videos order by id asc")->queryAll();
        $provider = Yii::app()->db->createCommand("select date,  (select name from tbl_users where id = tbl_participations.user_id limit 1) as Name,  (select email from tbl_users where id = tbl_participations.user_id limit 1) as Email, (select question from  tbl_questions where id=tbl_participations.entry_id ) as question,  FROM_UNIXTIME( time )  as submit_date, ip_address, answer_id, score  from tbl_participations order by id asc")->queryAll();

        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('date' => 'Date Submitted', 'values_field' => 'Value', 'other_school' => 'Other', 'kids_name' => 'Child Name', 'title' => 'Submission Title', 'details' => 'Details', 'total_votes' => 'Number of Votes');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/AllEntries.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    public function actionDownloadPhotos() {

        $directoryToZip = "../photos"; // This will zip all the file(s) in this present working directory

        $outputDir = "../runtime"; //Replace "/" with the name of the desired output directory.
        $zipName = "downloads.zip";

        $createZipFile = new CreateZipFile;


        //Code toZip a directory and all its files/subdirectories
        $createZipFile->zipDirectory($directoryToZip, $outputDir);

        $rand = md5(microtime() . rand(0, 999999));
        //$zipName=$rand."_".$zipName;
        $zipName = $zipName;
        $fd = fopen($zipName, "wb");
        $out = fwrite($fd, $createZipFile->getZippedfile());
        fclose($fd);
        $createZipFile->forceDownload($zipName);
        @unlink($zipName);
    }

    public function actionDownloadAllQueries() {
        $provider = Yii::app()->db->createCommand("select date,ip_address, name, email_address, contact_number, city_country, comments from tbl_queries  order by id asc")->queryAll();

        $csv = new CSVExport($provider);

        // some options are
        //$csv->callback = function($row){ return $row; };
        // human readable headers
        $csv->headers = array('date' => 'Date Submitted', 'ip_address' => 'Ip Address', 'name' => 'Name', 'email_address' => 'Email Address', 'contact_number' => 'Contact Number', 'city_country' => 'City/Country', 'comments' => 'Queries');
        // if you want to use the pagination of the CSqlDataProvider. Defaults to true
        $csv->exportFull = false;

        // retrieve csv content
        $content = $csv->toCSV(); //print_r($content); -> PROPER OUTPUT HERE
        $filename = Yii::app()->basePath . '/downloads/AllQueries.csv';
        $content = $csv->toCSV($filename, ",", "\""); //print_r($content); -> WRONG OUTPUT (FILE SIZE INSTEAD OF CONTENT)            
        Yii::app()->getRequest()->sendFile(basename($filename), @file_get_contents($filename), "text/csv"); //-> SOLUTION THAT WORKS
        exit();
    }

    ///	
}
