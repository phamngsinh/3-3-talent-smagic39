<div class="our-team">
    <ul>           
        <li>

            <div class="our-team-pic">
                <?php if (!$team['image_id']) { ?>
                    <img src="images/no-image.png" width="145" height="145" alt="" class="respimg">
                <?php } else { ?>
                    <img src="<?php echo '/33talent//admin/' . $team['uri'] ?>" width="145" height="145" alt="" class="respimg">
                <?php } ?>
            </div>
            <!--our-team-pic-->

            <div class="our-team-details">

                <div class="our-team-title">
                    <h3><?php echo $team['name']; ?></h3>
                    <div class="our-team-social">
                        <a  target="_blank" href="<?php echo $team['link_twitter']; ?>" class="twitter"></a>
                        <a  target="_blank" href="<?php echo $team['link_facebook']; ?>" class="linkedin"></a>
                        <a href="mailto:<?php echo $team['link_email']; ?>" class="mail"></a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--our-team-title-->

                <h5><?php echo $team['positions']; ?></h5>
                <div class="our-team-para">
                    <?php echo $team['descriptions']; ?>  

                </div>

            </div>
            <!--our-team-details-->
            <div class="clear"></div>
        </li>

    </ul>

</div>
<!--our-team-->