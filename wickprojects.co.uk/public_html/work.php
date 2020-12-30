<?php
$_GET['title'] = "Work";
include 'templates/head.php';
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(@is_array(getimagesize($path))) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
        }
    }

    return $results;
}


?>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>

<p>&nbsp;</p>
<div class="work-images">
    <?php
    $images = getDirContents("images/");


    foreach($images as $image)
    {
        $image = str_replace("/NAS/wickprojects.co.uk/public_html/","",$image);
        echo '<img class="lazy materialboxed" width="100%" data-src="'.$image.'"/>';
    }

    ?>
</div>
<script>
    $(function() {
        $('.lazy').Lazy();
    });
</script>
<?php include "templates/foot.php"; ?>