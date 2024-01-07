<div class = "row m-0 bg">
    <div class = "col-md-8 offset-md-2 p-0 overflow-hidden">
        <div class="mainContent justify-content-center row">
        <?php
            $video=$_GET['video_id']??null; // _GET is web server array with get variables
            $videos = read_videoDatas();
        ?>
            <div class="col-md-8  video-n-data d-flex flex-column ">
                <?php 
                    foreach ($videos as $key) {
                        if ($key->filename == $video) {
                            show_current_video($key);
                        }
                    }
                ?>
            </div>
            <div class="col-md-4 bg-secondary">
                <div class="d-flex flex-column h-100 justify-content-start">
                    <?php 
                        foreach ($videos as $key) {
                            if ($key->filename != $video) {
                                show_load_side_video($key);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
function read_videoDatas(){
    $filePath = "dummydatabase/videos.txt";
    $localvideos=array();
    $fp = @fopen($filePath, "r");
        if ($fp) {
            $index=0;
        while (($buffer = fgets($fp, 4096)) !== false) {
            $localvideos[$index] = json_decode($buffer);
            $index++;
        }
        if (!feof($fp)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($fp);
    }
    return $localvideos;

}

function show_load_side_video($jsonobj)
{
    echo'
    
    <a href="index.php?content_id=videos&video_id='. $jsonobj->filename.'">
    <div class="videos">
                        <div class="row d-flex flex-row">
                            <div class="col-md-6 col-sm-6 col-xs-6 h-inherit w-auto">
                            <video class="thumbnail" muted disablePictureInPicture playsinline>
                                <source src="Media/videos/'. $jsonobj->filename .'.mp4" type="video/mp4">
                            </video>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pt-1 h-inherit w-auto detail-thumbnail">
                                <h2 class = "mt-1 h4">'. $jsonobj->title .'</h2>
                                <p class= "h5">'. $jsonobj->desc.'</p>
                            </div>
                        </div>
                    </div>
                    </a>

    ';
}

function show_current_video($jsonobj)
{
    echo '
                <video class="demovideo pt-1" controls>
                     <source src="Media/videos/'. $jsonobj->filename. '.mp4" type="video/mp4">
                </video>
                <h1 class="text-start pt-1">'. $jsonobj->title .'</h1>
                <p>'. $jsonobj->desc .'</p>
    ';
}
?>