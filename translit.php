<?php
function transliterate($st) {
    $st = strtr($st,
    "абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНЩПРСТУФЫЭ",
    "abvgdegziyrlmnogrstufyeABVGDEGZIYKLMNOPQRSTUFYE"
);

$st = strtr ($st, array(
    'ё' => "yo",    'х' => "h",    'ц' => "ts",
    'ч' => "ch",    'щ' => "shch",    'ъ' => "",  
    'ю' => "yu",    'я' => "ya",    'ш' => "sh",
    'ь' => "",

    'Ё' => "Yo",    'Х' => "H",    'Ц' => "Ts",
    'Ч' => "Ch",    'Щ' => "Shch",    'Ъ' => "",
    'Ю' => "Yu",    'Я' => "Ya",    'Ш' => "Sh",
    'Ь' => "",
));
return $st;

}

echo transliterate("Ф");
//не работает
?>