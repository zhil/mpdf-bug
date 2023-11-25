<?php
header("Content-type:application/pdf");
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'orientation' => 'L', //设置为横屏
    'margin_top' => '0', //设置上边距
    'margin_bottom' => '0' ,//设置下边距
    'format' => [190, 236], //纸张大小
    'mode' => 'utf-8',
]);



//$mpdf->autoScriptToLang = true;
//$mpdf->autoLangToFont = true;
//$mpdf->use_kwt = false;

$html = $_POST['html'];
$mpdf->WriteHTML($html);
$mpdf->Output(); //D是下载
?>