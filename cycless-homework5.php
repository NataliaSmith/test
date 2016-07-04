<?php
$carCenter = array(
    'bmw' => array(
        'm5' => array(
            1999,
            2001
        ),
        'm6' => array(
            2001,
            2002
        )
    ),
    'toyota' => array(
        'camry' => array(1999)
    )
);
foreach ($carCenter as $brandName => $models) {
    echo 'Models: ' . $brandName . "\r\n";
    echo 'Brand: ';
    foreach ($models as $modelName => $modelYears) {
        echo $modelName . ',';
    }
    echo "\r\n";
}