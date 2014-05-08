<div class="testimonials">
    <h1>Testimonials
    </h1>
    <div class="job-buttons" style="float:right">
        <?php echo CHtml::link('Add Testimonial', array('page/addtestimonial')) ?>
    </div>
    <br>
    <br>
    <br>
    <ul>
        <?php
       $map = new CMap($data);
       $map->mergeWith ($data2);
        if ($data) {
            foreach ($data as $test) {

                ?>
                <li>
                    <div class="testimonials-pic">
                           <?php if ($test['image_id'] == null) { ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" width="145" height="145" alt="" class="respimg">
                        <?php } else { 
                            $file = Files::model()->findByPk($test['image_id']);
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl.'/admin/' . $file->uri; ?>" width="145" height="145" alt="" class="respimg">
                        <?php } ?>
                    </div>     
                    <!--testimonials-pic-->

                    <div class="testimonials-details">
                        <h4><?php echo $test["title"]; ?></h4>
                        <div class="testimonials-para">
                            <?php echo $test["descriptions"]; ?>
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
     <?php
    $this->widget('CLinkPager', array(
            'currentPage' => $pages->getCurrentPage(),
            'itemCount' => $item_count,
            'pageSize' => $page_size,
            'maxButtonCount' => 5,
            'header' => '',
            'htmlOptions' => array('class' => 'pages'),
    ))
    ?>
</div>
<!--testimonials-->