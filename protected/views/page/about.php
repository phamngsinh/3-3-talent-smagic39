<h1>About Us</h1>
        
            <h4>Solutions Architect</h4>
            
            <?php 
                if($dataProvider) {
                    foreach ($dataProvider->getData() as $data) {?>
                        <p><?php echo $data->content; ?></p>  
                    <?php }
                }
            ?>

        