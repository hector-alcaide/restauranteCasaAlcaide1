<?php
require_once('models/Meat.php');
$meats = array(
    1 => new meat(1, 'Butifarra del Montseny', 'Butifarra del Montseny a la brasa con judías de Santa Pau, patatas al caliu y allioli', 9.75, ['1_1', '3_1', '1_2']),
    2 => new meat(2, 'Entrecot de ternera', 'Entrecot de ternera de Girona a la brasa con patatas', 12.75, ['2_1']),
    3 => new meat(3, 'Secreto ibérico', 'Secreto ibérico a la brasa con patatas y salsa barbacoa', 15.25, ['2_1', '2_2']),
    4 => new meat(4, 'Cordero a la brasa', 'Cordero a la brasa con allioli y patatas al caliu ', 17.50, ['1_2', '1_3']),
    5 => new meat(5, 'Filete de buey', 'Filete de buey a la brasa con patatas, verduras salteadas y salsa de queso Mahón con nueces', 22.25, ['1_2', '1_4', '2_3']),
    6 => new meat(6, 'Chuletón de vaca', 'Chuletón de vaca frisona (800g) a la brasa con patatas', 49.50, ['2_1', '1_3']),
);
