<?php

//Here we set the include path and load the librarires
//set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
set_include_path('./PHPExcel/Classes/');
require_once('PHPExcel.php');
require_once('PHPExcel/IOFactory.php');

$excelReader = PHPExcel_IOFactory::createReader('Excel5'); //we instantiate a reader object
$excel = $excelReader->load('manhwa.xls'); //and load the document
print('<html>');
print('<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"></head><body>');
print('<table border="1">');
for ($i = 1; $i < 2105; $i++) {
    print('<tr>');
    
    print('<td>');
    print($excel->getActiveSheet()->getCell('A' . $i)->getValue()); //this is how we get a simple value
    print('</td>');
    
    print('<td>');
    print($excel->getActiveSheet()->getCell('B' . $i)->getValue());
    print('</td>'); 
    
    print('<td>');
    print($excel->getActiveSheet()->getCell('C' . $i)->getValue());
    print('</td>'); 
    
    print('</tr>'); 
}
print('</body></html>');
?>
