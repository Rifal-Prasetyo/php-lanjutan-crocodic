<?php
require 'vendor/autoload.php'; // load vendor
use Dompdf\Dompdf; // menggunakan library dompdf

$dompdf = new Dompdf(); // init library dompodf ke objek
$dompdf->loadHtml('Belajar Composer <br> Membuat Report PDF dengan DOMPDF');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('hasil_report.pdf');
