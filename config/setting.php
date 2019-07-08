<?php
$s_startPage = array('direct' => 'strona-glowna', 'name' => 'Strona główna');

$s_menu = array(
    array('direct' => 'dla-firm-handlowych,informacja', 'name' => 'dla firm Handlowych', 'system' => 'dla-firm-handlowych'),
    array('direct' => 'dla-firm-wykonawczych,informacja', 'name' => 'dla firm Wykonawczych', 'system' => 'dla-firm-wykonawczych'),
    array('direct' => 'dla-instalatorow', 'name' => 'dla Instalatorów', 'system' => 'dla-instalatorow'),
    array('direct' => 'dla-wodociagow,informacja', 'name' => 'dla Wodociagow', 'system' => 'dla-wodociagow'),
    array('direct' => 'dla-przemyslu,informacja', 'name' => 'dla Przemysłu', 'system' => 'dla-przemyslu'),
    array('direct' => 'o-nas,o-firmie', 'name' => 'o Nas', 'system' => 'o-nas')
);

$s_submenu = array(
    'dla-instalatorow' => array(
        'technika-grzewcza' => array('icon' => '<p style="margin:0 42px 0 0"><i class="far fa-fire-alt fa-2x"></i></p>', 'name' => 'technika grzewcza', 'link' => 'technika-grzewcza,informacja'),
        'nawodnienia' => array('icon' => '<p style="margin:0 0 0 30px"><i class="far fa-tint fa-2x"></i></p>', 'name' => 'nawodnienia', 'link' => 'nawodnienia,informacja'),
    )
);
$s_menuContent = array(
    'section' => array(
        array('direct' => 'informacja', 'name' => 'informacja', 'icon' => 'informacja.png'),
        array('direct' => 'kontakt', 'name' => 'kontakt', 'icon' => 'kontakt.png'),
        array('direct' => 'producenci', 'name' => 'producenci', 'icon' => 'producenci.png'),
        array('direct' => 'katalogi', 'name' => 'katalogi', 'icon' => 'katalogi.png'),
        array('direct' => 'platforma', 'name' => 'platforma', 'icon' => 'b2b.png'),
        array('direct' => 'e-sklepy', 'name' => 'e-sklepy', 'icon' => 'sklepy.png'),
        array('direct' => 'programy', 'name' => 'programy', 'icon' => 'programy.png')
    ),
    'about' => array(
        array('direct' => 'o-firmie', 'name' => 'o firmie', 'icon' => 'firma.png'),
        array('direct' => 'aktualnosci', 'name' => 'aktualności', 'icon' => 'aktualnosci.png'),
        array('direct' => 'nasze-wartosci', 'name' => 'nasze wartości', 'icon' => 'misja.png'),
        array('direct' => 'nagrody', 'name' => 'nagrody', 'icon' => 'nagrody.png'),
        array('direct' => 'oddzialy', 'name' => 'oddzialy', 'icon' => 'oddzialy.png'),
        array('direct' => 'kontakt', 'name' => 'kontakt', 'icon' => 'kontakt.png'),
        array('direct' => 'kariera', 'name' => 'kariera', 'icon' => 'producenci.png')
    )

);
$s_slider = array(
    '1-nawadnianie.jpg' => array(
        'title' => 'systemy nawadniające',
        'content' => 'Najwięksi producenci: Rain SPA, Hunter, RainBird, Toro.<br>
                      Profesjonalne doradztwo. Doświadczenie od ponad 15 lat.<br>
                      Pełna dostępność towaru w 16 oddziałach'
    ),
    '2-pompy.jpg' => array(
        'title' => 'systemy pompowe',
        'content' => 'Najwięksi producenci: Rain SPA, Hunter, RainBird, Toro.<br>
                      Profesjonalne doradztwo. Doświadczenie od ponad 15 lat.<br>
                      Pełna dostępność towaru w 16 oddziałach'
    ),
    '3-armatura.jpg' => array(
        'title' => 'armatura',
        'content' => 'Najwięksi producenci: Rain SPA, Hunter, RainBird, Toro.<br>
                      Profesjonalne doradztwo. Doświadczenie od ponad 15 lat.<br>
                      Pełna dostępność towaru w 16 oddziałach'
    ),
    '4-grzewcza.jpg' => array(
        'title' => 'technika grzewcza',
        'content' => 'Najwięksi producenci: Rain SPA, Hunter, RainBird, Toro.<br>
                      Profesjonalne doradztwo. Doświadczenie od ponad 15 lat.<br>
                      Pełna dostępność towaru w 16 oddziałach'
    )
);

$s_shop = array(
    'zaworyantyskzeniowe-pl' => array(
        'name' => 'zaworyanyskazeniowe.pl',
        'content' => '',
        'url' => ''),
    'mac3-pl' => array(
        'name' => 'zaworyanyskazeniowe.pl',
        'content' => '',
        'url' => '')
);
$s_shopBox = array(
    'dla-firm-handlowych' => array(
        'mac3-pl',
        'zaworyantyskazeniowe-pl'
    ),
    'dla-firm-wykonawczych' => array(
        'zaworyantyskazeniowe-pl',
        'mac3-pl'
    )
);