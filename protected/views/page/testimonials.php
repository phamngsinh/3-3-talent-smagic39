<div class="testimonials">
    <h1>Testimonials</h1>
    <ul>
        <?php
        if ($data) {
            foreach ($data as $test) {
                ?>
                <li>

                    <div class="testimonials-pic">
                        <?php if (!$test['image_id']) { ?>
                            <img src="images/no-image.png" width="145" height="145" alt="" class="respimg">
                        <?php } else { ?>
                            <img src="<?php echo Yii::app()->basePath.'/../admin/uploads/files/'?>" width="145" height="145" alt="" class="respimg">
                        <?php } ?>
                    </div>     
                    <!--testimonials-pic-->

                    <div class="testimonials-details">
                        <h4><?php echo $test->title; ?></h4>
                        <div class="testimonials-para">
                            <?php echo $test->descriptions; ?>
                        </div>
                    </div>
                    <!--testimonials-details-->
                    <div class="clear"></div>
                </li>

                <?php
            }
        }
        ?>
    </ul>
</div>
<!--testimonials-->