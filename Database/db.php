<?php

$computers = [
    new Laptop('Asus Rog Strix', '8gb', 'NVIDIA GTX1050 2gb', 'Intel i7 7700HQ', 'SSD 256gb', 'GL553VD', 'https://www.notebookcheck.it/typo3temp/_processed_/a/a/csm_Stock_photo_f977f6af4c.jpg', '6 cells'),

    new Desktop('Acer Aspire C24-1650', '8gb', 'INTEL UHD Graphics', 'Intel Core I3 1115G4', 'SSD 512gb', 'GL553SS', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_101768890/fee_786_587_png', 'Asus mouse', new Monitor('23"', '1920x1080px'), 'corsair case', 'bronze 600w'),

    new Laptop('HP 15S-EQ3036NL', '16gb', 'AMD Radeon Graphics', 'Ryzen 7 5825U', 'SSD 512gb', 'LN553VD', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_104956492/fee_786_587_png', '6 cells'),

    new Desktop('MSI MPG Infinite X2 13FNUG-038IT', '32gb', 'NVIDIA, GeForce RTX 4080 16gb', 'Intel i7 7900K', 'SSD 2000gb', 'Intel, Z690', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_105017387/fee_786_587_png', 'Lenovo mouse', new Monitor('22"', '1920x1080px'), 'lenovo case', 'gold 800w'),
];

try {
    $computers[0]->setShop('Mediaworld'); // try to pass a number, a vardump will show you the Exception
} catch (Exception $e) {
    var_dump('Eccezione: ' . $e->getMessage());
}

try {
    $computers[0]->setShop('Unieuro'); // try to pass a number, a vardump will show you the Exception
} catch (Exception $e) {
    var_dump('Eccezione: ' . $e->getMessage());
}

try {
    $computers[1]->setShop('Euronics');
} catch (Exception $e) {
    var_dump('Eccezione: ' . $e->getMessage());
}


try {
    $computers[1]->setShop('Euronics'); //duplicato non inserito
} catch (Exception $e) {
    var_dump('Eccezione: ' . $e->getMessage());
}

try {
    $computers[3]->setShop('Expert');
} catch (Exception $e) {
    var_dump('Eccezione: ' . $e->getMessage());
}
