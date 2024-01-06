<?php
    $content=$_GET['content_id']??null; // _GET is web server array with get variables
?>

<?php include 'components/header.php';?>
<?php
    if ($content == 'about'){
        include 'content/main.php';
    }
    if ($content == 'ora'){
        include 'content/ora.php';        
    }
    if ($content == 'senko'){
        include 'content/senko.php';        
    }
    if($content == null)
    {
        include 'content/main.php';
    }
?>
<?php include 'components/footer.php';?>