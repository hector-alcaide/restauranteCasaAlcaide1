<?php
require_once('models/Fish.php');
$fishes = array(
    1 =>   new fish(1, 'Lomo de atún', 'Lomo de atún a la brasa con aguacate y verduras salteadas', 14.50, ['5_1', '4_1']),
    2 =>   new fish(2, 'Bacalao a la brasa', 'Bacalao a la brasa con verduras salteadas', 15.25, ['4_1']),
    3 =>   new fish(3, 'Bacalao a la lata', 'Bacalao a la lata con judías de Santa Pau', 16.50, ['1_1']),
    4 =>   new fish(4, 'Pulpo a la brasa', 'Pulpo a la brasa con patatas y aceite de pimentón', 17.75, ['2_1', '5_2']),
    5 =>   new fish(5, 'Salmón a la Brasa', 'Salmón a la Brasa con Noodles Orientales', 18.50, ['6_1']),
    6 =>   new fish(6, 'Rape a la Brasa', 'Rape a la Brasa con Espárragos y Champiñones Trufados', 19.50, ['7_1', '8_1']),
);
