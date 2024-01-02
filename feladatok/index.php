<?php
    $content=$_GET['content_id']; // _GET is web server array with get variables
?>

<?php include 'components/header.php';?>
<?php
    if ($content == 'about' || $content == null){
        include 'content/main.php';
}else if ($content == 'senko'){
        include 'content/senko.php';        
}
?>
<?php include 'components/footer.php';?>