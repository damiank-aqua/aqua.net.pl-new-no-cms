<?php
$s_startPage = array('direct' => 'strona-glowna', 'name' => 'Strona główna');

$s_menu = array(
    array('direct' => 'dla-firm-handlowych', 'name' => 'dla firm Handlowych'),
    array('direct' => 'dla-firm-wykonawczych', 'name' => 'dla firm Wykonawczych'),
    array('direct' => 'dla-instalatorow', 'name' => 'dla Instalatorów'),
    array('direct' => 'dla-wodociagow', 'name' => 'dla Wodociagow'),
    array('direct' => 'dla-przemyslu', 'name' => 'dla Przemysłu'),
    array('direct' => 'o-nas', 'name' => 'o Nas')
);

$s_submenu = array(
    'dla-instalatorow' => array(
        'technika-grzewcza' => array('icon' => '<i class="far fa-fire-alt"></i>', 'name' => 'technika grzewcza'),
        'nawodnienia' => array('icon' => '<i class="far fa-tint"></i>', 'name' => 'nawodnienia'),
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