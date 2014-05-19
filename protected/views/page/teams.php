<div class="our-team">
    <ul>           
        <?php
        if ($data) {
            foreach ($data as $team) {
                ?>
                <li>

                    <div class="our-team-pic">
                        <?php if (!$team['image_id']) { ?>
                            <img src="<?php echo Yii::app()->request->baseUrl.'/'?>images/no-image.png" width="145" height="145" alt="" class="respimg">
                        <?php } else { ?>
                            <img src="<?php echo Yii::app()->request->baseUrl.'/admin/'. $team['uri'] ?>" width="145" height="145" alt="" class="respimg">
                        <?php } ?>
                    </div>
                    <!--our-team-pic-->

                    <div class="our-team-details">

                        <div class="our-team-title">
                            <h3><?php echo $team['name']; ?></h3>
                            <div class="our-team-social">
                                <?php if($team['link_twitter']){?> <a  target="_blank" href="<?php echo $team['link_twitter']; ?>" class="twitter"></a><?php }?>
                                <?php if($team['link_facebook']){?><a  target="_blank" href="<?php echo $team['link_facebook']; ?>" class="linkedin"></a><?php }?>
                                 <?php if($team['link_email']){?><a href="mailto:<?php echo $team['link_email']; ?>" target="_parent" class="mail"></a><?php }?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--our-team-title-->

                        <h5><?php echo $team['positions']; ?></h5>
                        <div class="our-team-para">
                            <?php echo $team['descriptions']; ?>  
                            <div class="our-team-button">
                                <?php echo CHtml::link('View Profile',array('page/TeamsDetail','id'=>$team['teams_id'])); ?>
                            </div>

                        </div>

                    </div>
                    <!--our-team-details-->
                    <div class="clear"></div>
                </li>
                <?php
            }
        }
        ?>

    </ul>
    <?php
    $this->widget('CLinkPager', array(
        'currentPage' => $pages->getCurrentPage(),
        'pages' => $pages,
    ))
    ?>
</div>
<!--our-team-->