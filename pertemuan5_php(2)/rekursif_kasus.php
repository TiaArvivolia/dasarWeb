<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subSubMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    [
        "nama" => "Kuliner"
    ],
    [
        "nama" => "Hiburan"
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";

        if (isset($item['subMenu'])) {
            echo "<ul>";
            foreach ($item['subMenu'] as $subItem) {
                echo "<li>{$subItem['nama']}";

                if (isset($subItem['subSubMenu'])) {
                    tampilkanMenuBertingkat($subItem['subSubMenu']);
                }

                echo "</li>";
            }
            echo "</ul>";
        }

        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>
