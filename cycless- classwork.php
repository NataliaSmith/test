<?php
// <!-- 1. создать массив, в котором есть перечень автомобильных брендов
//      2. вывести все бренды через запятую на экран
//  -->

// $auto = array('bmw', 'Toyota', 'Mazda', 'Nisan');
// $arrayCount = count($array);
// for ($i = $arrayCount - 1; $i >=0; $i--){
//     echo $auto[$i] . ',';
// }


// <?php
// $carCenter = [
//     'bmw' => array(
//         'm5' => array(
//             1999,
//             2001
//         ),
//         'm6' => array(
//             2001,
//             2002
//         )
//     ),
//     'toyota' => array(
//         'camry' => array(1999)
//     )
// ];
// foreach ($carCenter as $key => $brand) {
// 	echo " $key";
// ;
// }

<?php
$carCenter = array(
    'brands' => array(
        'bmw' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        ),
        'toyota' => array(
            'models' => array(
                'camry' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'corolla' => array(
                    'years' => array(
                        2003,
                        2004
                    )
                )
            )
        )
    )
);
// вывести все бренды (bmw)
foreach ($carCenter['brands'] as $brandName => $models) {
    foreach ($models['models'] as $modelName => $years) {
    	 foreach ($years['years'] as $Modelyears => $number) {
        echo $years . ',';
    }
}
