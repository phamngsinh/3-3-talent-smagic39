<ul>
    <?php
    foreach($albums['data'] as $album)
    {
	    echo '<li><a href="index.php?r=Facebookphotos/default/listPhotos&albumID='.$album['id'].'&signed_request='.$_REQUEST['signed_request'].'" onclick=showPhotos("'.$album['id'].'") >'.$album['name'].'</a></li>';
    }
    
    ?>
</ul>