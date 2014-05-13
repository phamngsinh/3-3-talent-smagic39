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
//       $map = new CMap();
//       $map->mergeWith (array($data, $data2));
        if ($data) {
            foreach ($data as $test) {
                ?>
                <li>
                    <div class="testimonials-pic">
                           <?php if ($test['image'] == null) { ?>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" width="145" height="145" alt="" class="respimg">
                        <?php } else { 
                            ?>
                            <img src="<?php echo Yii::app()->request->baseUrl.'/' . $test['image']; ?>" width="145" height="145" alt="" class="respimg">
                        <?php } ?>
                    </div>     
                    <!--testimonials-pic-->

                    <div class="testimonials-details">
                        <h4><?php echo $test["title"]; ?></h4>
                        <div class="testimonials-para">
                            <?php echo $test["content"]; ?>
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
          'pages' => $pages,
//            'currentPage' => $pages->getCurrentPage(),
//            'itemCount' => $item_count,
//            'pageSize' => $page_size,
//            'maxButtonCount' => 5,
//            'header' => '',
//            'htmlOptions' => array('class' => 'pages'),
    ))
    ?>
</div>
<!--testimonials-->