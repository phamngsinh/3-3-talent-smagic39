<h1>About Us</h1>



<?php
if ($dataProvider) {
    foreach ($dataProvider->getData() as $data) {
        ?>
        <p><?php echo $data->content; ?></p>  
        <?php
    }
}
?>

