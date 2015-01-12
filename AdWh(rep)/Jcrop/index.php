<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targ_w = $targ_h = 200;
    $jpeg_quality = 90;

    $src = 'Jcrop/files/image.jpg';
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

    imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
    $targ_w,$targ_h,$_POST['w'],$_POST['h']);

    header('Content-type: image/jpeg');
    imagejpeg($dst_r,null,$jpeg_quality);
    exit;
}

require_once('platform.html');
require_once('templates/footer.html');

?>