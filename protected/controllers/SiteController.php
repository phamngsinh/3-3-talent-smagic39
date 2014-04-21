<?php

class SiteController extends Controller {

    public $fb;
    public $i;
    public $settings;
    public $fbConfigurations;
    public $image_folder;
    public $nowUserName;
    public $nowUserFbId;
    public $nowUserTableId;
    protected $isExpired;
    protected $facebook;
    protected $user;
    public $canvasPage;
    public $tabUrl;
    public $rs;
    public $appUrl;

    /**
     * Declares class-based actions.
     */
    public function __construct($id, $module = null) {
        $this->image_folder = Yii::app()->basePath . '/../photos';

        $timezone = Ms::model()->findByAttributes(array('var_name' => 'APPLICATION_TIMEZONE'))->value1;

        TimezoneController::set($timezone);



        $this->settings = array(
            'videos_per_user' => Ms::model()->findByAttributes(array('var_name' => 'videos_per_user'))->value6_int,
            'votes_per_user' => Ms::model()->findByAttributes(array('var_name' => 'votes_per_user'))->value6_int,
            'votes_after_every' => Ms::model()->findByAttributes(array('var_name' => 'votes_after_every'))->value6_int,
            'videos_default_status' => Ms::model()->findByAttributes(array('var_name' => 'videos_default_status'))->value6_int,
            'tabUrl' => Ms::model()->findByAttributes(array('var_name' => 'tab_url'))->value4_text,
            'adminEmail' => Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text,
            ''
        );

        $this->fbConfigurations = Yii::app()->params['facebook'];

        $this->isExpired = (Ms::model()->findByAttributes(array('var_name' => 'APPLICATION_STATUS'))->value6_int == "2") ? 1 : 0;

        $this->canvasPage = @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_URLS'))->value5_text);

        $this->tabUrl = @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_URLS'))->value4_text);

        $this->appUrl = "https://apps.facebook.com/do_debate";

        $rs = new AppRestrictions($id, $module = null);

        $rs->statusChecking();

        $rs->deviceChecking();




        //code param is given by fb when app is first time permitted.
        if (!isset($_REQUEST['signed_request']) or isset($_REQUEST['code']) or isset($_REQUEST['tabs_added'])) {
            if (!Yii::app()->request->isAjaxRequest) {
                if (!isset($_REQUEST['by_ajax'])) {
                    $rs->redirectToProfileTab($this->tabUrl);
                }
            }
        }

        if (!Yii::app()->request->isAjaxRequest) {
            if (!isset($_REQUEST['by_ajax'])) {
                $rs->prelikeChecking($this->tabUrl);
            }
        }

        $rs->blockUnblockUsers(Yii::app()->session['fbId']);

        $this->rs = $rs;

        parent::__construct($id, $module);
    }

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex($id = '') {



        $this->facebookAuthenticate();

        if ($id == '') {

            $date = date("m/d/Y");

            $todays_date = date("Y-m-d");

            /* $q = new CDbCriteria( array(
              'condition' => "start_date <= :match",    // no quotes around :match
              'condition' => "end_date >= :matchs",
              'params'    => array('is_featured'=>'feature',':match' => $date , ':matchs' => $date)  // Aha! Wildcards go here
              ) );
             */


            //$array['debates'] = Debate::model()->findAllByAttributes(array("is_featured"=>"feature","start_date"=>$date,"expire_date"=>$date));

            $array['debates'] = Yii::app()->db->createCommand("select * from tbl_debate where is_featured = 'feature' and start_date <= '" . $todays_date . "' and expire_date >= '" . $todays_date . "' order by id limit 1")->queryRow();
        } else {

            $array['debates'] = Yii::app()->db->createCommand("select * from tbl_debate where id=" . $id)->queryRow();
        }



        $array['debates_normal'] = Debate::model()->findAllByAttributes(array("is_featured" => "normal"));

        /* echo '<pre>';

          print_r($array['debates']);

          echo '</pre>';

          exit; */

        if (count($array['debates']) > 0) {

            $id = $array['debates']['id'];

            if ($id != '') {

                $array['favour_vote'] = $this->noofvote($id, 1);

                $array['against_vote'] = $this->noofvote($id, 0);
            }
        }

        $array['favour_voting'] = Votings::model()->findAllByAttributes(array("entry_id" => $id, "vote_type" => 1));

        $array['against_voting'] = Votings::model()->findAllByAttributes(array("entry_id" => $id, "vote_type" => 0));

        //$array['user'] = $this->user;

        $this->render('index', $array);
    }

    public function actionComment() {

        echo 'Do Debate';
    }

    function actionLoadarea($id) {

        //------------------ areas -------------- */

        if ($id == '') {
            $areadetail = AreaDetail::model()->findAll();

            foreach ($areadetail as $t) {
                $areadetail_array[$t->area_detail_id] = $t->attributes;
            }

            $array['areadetail_data'] = $areadetail_array;
        } else {
            $areadetail = AreaDetail::model()->findAll("area_id=" . $id);

            foreach ($areadetail as $t) {
                $areadetail_array[$t->area_detail_id] = $t->attributes;
            }

            $array['areadetail_data'] = $areadetail_array;
        }
        // --------------------------------------- */

        $this->renderPartial('area', $array);
    }

    function actionZipcode($code) {

        //------------------ areas -------------- */

        if ($code == '') {
            $areadetail = AreaDetail::model()->findAll();

            foreach ($areadetail as $t) {
                $areadetail_array[$t->area_detail_id] = $t->attributes;
            }

            $array['areadetail_data'] = $areadetail_array;
        } else {
            $match = addcslashes($code, '%_'); // escape LIKE's special characters
            $q = new CDbCriteria(array(
                'condition' => "zip_code LIKE :match", // no quotes around :match
                'params' => array(':match' => "%$match%")  // Aha! Wildcards go here
                    ));
            $areadetail = AreaDetail::model()->findAll($q);

            foreach ($areadetail as $t) {
                $areadetail_array[$t->area_detail_id] = $t->attributes;
            }
            if (isset($areadetail_array)) {
                $array['areadetail_data'] = $areadetail_array;
            } else {

                echo 'No record found';
                die();
            }
        }
        // --------------------------------------- */

        $this->renderPartial('area', $array);
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionList($type) {

        if ($type == 'grand') {

            $type = 1;
        } elseif ($type == 'd') {

            $type = 2;
        }

        $array['category'] = IcecreamCategory::model()->findAllByAttributes(array("icecream_category_id" => $type));

        $array['flavours'] = Flavour::model()->findAllByAttributes(array("icecream_category_id" => $type));

        /* echo '<pre>';
          print_r($array['category']);
          echo '</pre>'; */

        $user_id = 1;


        /* $criteria=new CDbCriteria;
          $model = new Entries;
          $criteria->select='id';
          $criteria->addCondition('fb_user='.$user_id);
          $data['scoops'] = $model->count($criteria); */

        // ------------------------------------------
        // ----------- all scoops to friends ------

        $array['data'] = Entries::model()->findAllByAttributes(array('fb_user' => $user_id));


        //------------------ areas -------------- */

        $area = Area::model()->findAll();

        foreach ($area as $t) {
            $area_array[$t->area_id] = $t->attributes;
        }

        $array['area_data'] = $area_array;

        // --------------------------------------- */
        //------------------ areas detail -------------- */

        $areadetail = AreaDetail::model()->findAll();

        foreach ($areadetail as $t) {
            $areadetail_array[$t->area_detail_id] = $t->attributes;
        }

        $array['areadetail_data'] = $areadetail_array;

        $this->render('list', $array);
    }

    public function actionIndivual($id) {


        // ------------------ ice cream flavours

        $flavours = Flavour::model()->findAll();

        foreach ($flavours as $t) {
            $arr[$t->flavour_id] = $t->attributes;
        }

        $array['flavour_data'] = $arr;


        // --------- number of scoops ----------

        $array['flavours'] = Flavour::model()->findAllByAttributes(array("flavour_id" => $id));

        $user_id = 1;

        $array['data'] = Entries::model()->findAllByAttributes(array('fb_user' => $user_id));


        //------------------ areas -------------- */

        $area = Area::model()->findAll();

        foreach ($area as $t) {
            $area_array[$t->area_id] = $t->attributes;
        }

        $array['area_data'] = $area_array;

        // --------------------------------------- */
        //------------------ areas detail -------------- */

        $areadetail = AreaDetail::model()->findAll();

        foreach ($areadetail as $t) {
            $areadetail_array[$t->area_detail_id] = $t->attributes;
        }

        $array['areadetail_data'] = $areadetail_array;

        $this->render('indivual', $array);
    }

    public function actionAjaxform() {

        $model = new Entries;

        // $user_id = $this->facebookAuthenticate();
        //$user_id = $this->user->id;
        $user_id = 1;
        $flavour_id = $_POST['flavour'];
        $detail = $_POST['peronal'];
        $unique_id = rand() . "-" . time();

        $friendsIds = $_POST['friend'];

        $friends = explode(",", $friendsIds);


        foreach ($friends as $friend) {
            $model = new Entries;
            $model->date = new CDbExpression('NOW()');
            $model->ip_address = $_SERVER['REMOTE_ADDR'];
            $model->user_id = $user_id;
            $model->fb_user = $friend;
            $model->unique_id = $unique_id;
            $model->details = $detail;
            $model->category = $flavour_id;

            $model->save();

            /*
             * publising msg on facebook on entry submission
             */
            $sMsgs = new SharingMessages(0);

            $entry = $model;

            $autoMsg = $sMsgs->FB_AUTO_MSG_ON_ENTRY_SUBMISSION($this->nowUserName, $entry->user->name, "", $entry->details);
            $entryUrl = $this->canvasPage . "/entry-site-{$entry->id}.html";
            $thumbUrl = $this->canvasPage . '/admin/uploads/188x200/' . $entry->flavour->pic;

            $this->facebook->publishStream(stripslashes($autoMsg['DETAILS']), $entryUrl, $thumbUrl, stripslashes($autoMsg['TITLE']), stripslashes($autoMsg['APP_DETAILS']));
        }
    }

    /* public function sendEmail($model)
      {

      $body = '';
      foreach($_POST['Queries'] as $key=>$fields)
      {
      if($fields!='')
      {
      $body.= "<b>".CHtml::activeLabel($model,$key). "</b> : ".$fields."<br /><br />";
      }
      }

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      $send_from = @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'emailFrom'))->value4_text);

      $headers.="From: {$send_from}\r\nReply-To: {$model->email_address}";

      $to = @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'adminEmail'))->value4_text);

      mail($to,'Hangout Contact Us',$body,$headers);

      } */

    function facebookAuthenticate() {
        $facebook = new FacebookController();
        $facebook->saveUserToDb($facebook); //save user into db, only call once on first action where FacebookController is called.

        $fbId = $facebook->fbUser['id'];



        $user = Users::model()->findByAttributes(array("userid" => $fbId));



        $this->user = $user;
        $this->facebook = $facebook;
        $this->nowUserName = $user->name;

        Yii::app()->session['fbId'] = $fbId;



        if (isset($_REQUEST['signed_request'])) {
            Yii::app()->session['signed_request'] = $_REQUEST['signed_request'];
        } else {
            echo "Error! Invalid Signed Request";
            exit;
        }

        return $facebook;
    }

    private function voteValidations($entryId) {


        if (!isset($this->user->id)) {
            echo json_encode(array('msg' => 'invalid_user'));
            Yii::app()->end();
        }



        $total_votings = Votings::model()->countByAttributes(array('fb_user' => $this->user->userid, 'entry_id' => $entryId));



        $votes_per_user_model = MsValues::get("ENTRIES_SETTINGS_VOTES_PER_USER");



        if ($total_votings >= $votes_per_user_model->value6_int) {

            $type = Votings::model()->findByAttributes(array('fb_user' => $this->user->userid, 'entry_id' => $entryId));

            echo json_encode(array('flag' => 'vote_limit_exceeded', 'msg' => str_replace("[VALUE]", $votes_per_user_model->value6_int, $votes_per_user_model->value4_text), 'total_videos' => $this->settings['votes_per_user'], 'type' => $type->vote_type));
            Yii::app()->end();
        }


        //restrict to vote before given duration limit
        $last_voting = Votings::model()->findByAttributes(array('fb_user' => $this->user->userid, 'entry_id' => $entryId), array("order" => 'id desc'));

        if (isset($last_voting->id)) {
            $votes_duration_model = MsValues::get("ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY");
            if (time() - $last_voting->vote_time < $votes_duration_model->value6_int) {
                echo json_encode(array('flag' => 'voting_too_early', 'msg' => str_replace("[VALUE]", $votes_duration_model->value6_int, $votes_duration_model->value4_text), 'time_left' => $last_voting->vote_time + $votes_duration_model->value6_int - time()));
                Yii::app()->end();
            }
        }
    }

    public function ActionDoVoteUp($entryId, $voteValue, $votetype) {


        $this->facebookAuthenticate();

        $this->voteValidations($entryId);


        $voting = new Votings();
        $voting->entry_id = $entryId;
        $voting->user_id = $this->user->id;
        $voting->fb_user = $this->user->userid;
        $voting->ip_address = $_SERVER['REMOTE_ADDR'];
        $voting->vote_time = time();
        $voting->vote_date = new CDbExpression('NOW()');
        $voting->vote_value = $voteValue;
        $voting->vote_type = $votetype;
        $voting->save();


        $entry = Debate::model()->findByPk($entryId);
        /* $entry->total_votes = $entry->total_votes + $voteValue;
          $entry->save(); */


        /*
         * publising msg on facebook on voting
         */
        /* $sMsgs = new SharingMessages(0);

          $autoMsgOnVoting = $sMsgs->FB_AUTO_MSG_ON_VOTING($this->nowUserName, $this->user->name,"", $entry->debate_title);

          $entryUrl = $this->appUrl . "/entry-site-{$entry->id}.html";

          $thumbUrl = $this->canvasPage . '/admin/uploads/'.$entry->image;



          $this->facebook->publishStream(stripslashes($autoMsgOnVoting['DETAILS']), $entryUrl, $thumbUrl, stripslashes($autoMsgOnVoting['TITLE']), stripslashes($autoMsgOnVoting['APP_DETAILS'])); */

        $votes_per_user_model = MsValues::get("ENTRIES_SETTINGS_VOTES_PER_USER");

        echo json_encode(array('flag' => 'added', 'msg' => $votes_per_user_model->value5_text, 'favour' => $this->noofvote($entryId, 1), 'against' => $this->noofvote($entryId, 0)));

        Yii::app()->end();
    }

    function getGraph($entryId) {


        $avg = Yii::app()->db->createCommand("SELECT AVG(vote_value) FROM tbl_votings where entry_id=" . $entryId)->queryScalar();

        $avg = round($avg);

        return $avg;
    }

    function numofpeople($entryId) {

        $sum = Yii::app()->db->createCommand("select count(id) from tbl_votings where entry_id=" . $entryId)->queryScalar();

        return $sum;
    }

    function noofvote($entryId, $type) {

        $sum = Yii::app()->db->createCommand("select count(id) from tbl_votings where entry_id=" . $entryId . " and vote_type=" . $type)->queryScalar();

        return $sum;
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    function actionEntry($controllerID, $postID) {
        $seperator = (strstr($this->tabUrl, "?")) ? "&" : "?";

        $entryUrl = $this->tabUrl . "{$seperator}app_data=" . $controllerID . "_" . $postID;

        echo '<script>top.location.href=\'' . $entryUrl . '\'</script>';
        exit;
    }

}
