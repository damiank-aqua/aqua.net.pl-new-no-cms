<?php
$s_startPage = array('direct' => 'strona-glowna', 'name' => 'Strona główna');

$s_menu = array(
    array('direct' => 'dla-firm-handlowych,informacja', 'name' => 'dla firm Handlowych', 'system' => 'dla-firm-handlowych'),
    array('direct' => 'dla-firm-wykonawczych,informacja', 'name' => 'dla firm Wykonawczych', 'system' => 'dla-firm-wykonawczych'),
    array('direct' => 'dla-instalatorow', 'name' => 'dla Instalatorów', 'system' => 'dla-instalatorow'),
    array('direct' => 'dla-wodociagow,informacja', 'name' => 'dla Wodociagów', 'system' => 'dla-wodociagow'),
    array('direct' => 'dla-przemyslu,informacja', 'name' => 'dla Przemysłu', 'system' => 'dla-przemyslu'),
    array('direct' => 'o-nas,o-firmie', 'name' => 'o Nas', 'system' => 'o-nas')
);

$s_submenu = array(
    'dla-instalatorow' => array(
        'technika-grzewcza' => array('icon' => '<p style="margin:0 42px 0 0"><i class="fad fa-fire-alt fa-2x"></i></p>', 'name' => 'technika grzewcza', 'link' => 'technika-grzewcza,informacja'),
        'nawodnienia' => array('icon' => '<p style="margin:0 0 0 30px"><i class="fad fa-tint fa-2x"></i></p>', 'name' => 'nawodnienia', 'link' => 'nawodnienia,informacja'),
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
        'title' => 'Automatyczne systemy nawadniające',
        'content' => 'Firma AQUA była jedną z pierwszych firm w Polsce wprowadzającą na rynek produkty z branży nawodnieniowej.<br>
					  Od blisko 20 lat nasza firma dostarcza profesjonalne rozwiązania oparte na doświadczeniach największych producentów tej branży.<br>
					  Nasza oferta rozbudowana o technikę pompową, kierowana jest do instalatorów, rolnictwa, oraz przemysłu i kopalń (w zakresie zraszaczy przemysłowych).<br>
					  <br><strong><em>"Ogrodnictwo to nauka, nauka, nauka. Na tym właśnie polega zabawa. Cały czas się uczysz!"</em></strong>
					  <br><em>Helen Mirren</em>'
    ),
    '2-pompy.jpg' => array(
        'title' => 'Technika pompowa',
        'content' => 'Jesteśmy jedną z najstarszych Polskich firm, działających w zakresie techniki pompowej.<br>
					  Od blisko 40 lat świadczymy usługi serwisowe, kompleksowe doradztwo oraz sprzedaż niemalże każdego urządzenia pompowego.<br>
					  Współpracujemy z wodociągami, instalatorami (studniarzami), przemysłem, firmami wykonawczymi i handlowymi.<br>
					  <br><strong><em>"Jest tylko jeden sposób nauki. Poprzez działanie."</em></strong>
					  <br><em>Paulo Coelho</em>'
    ),
    '3-grzewcza.jpg' => array(
        'title' => 'Technika grzewcza',
        'content' => 'Oferujemy kompleksowe rozwiązania w zakresie urządzeń i instalacji grzewczych oraz OZE.<br>
					  Należąc do największej grupy zakupowej w Polsce, dajemy do Państwa dyspozycji pełną gamę produktów największych producentów branży oraz marki własnej Keller, Delfin i Nano Panel.<br>
					  Gwarantujemy również profesjonalne doradztwo techniczne blisko 60 handlowców w naszych 16 oddziałach.<br>
					  <br><strong>"Zima jest piękna do pewnego stopnia...Celsjusza."</strong>
					  <br><em>Tadeusz Gicgier</em>'
    ),
    '4-armatura.jpg' => array(
        'title' => 'Sieci zewnętrzne i armatura',
        'content' => 'Nasza oferta pozwala obsłużyć najbardziej wymagające inwestycje w zakresie sieci zewnętrznych, armatury wodociągowej i przemysłowej.<br>
					  Oferujemy pełen wachlarz produktowy od armatury podstawowej do najbardziej zaawansowanych rozwiązań dla każdej aplikacji.<br>
					  Nasi doradcy techniczni pomogą dobrać najbardziej efektywne rozwiązania zarówno pod względem niezawodności jak i ceny.<br>
					  <br><strong>"Nie ma na świecie nic równie potężnego jak pomysł, który właśnie nadszedł."</strong>
					  <br><em>Wiktor Hugo</em>'
    )
);
$s_contentWidth = array(
    'strona-glowna' => '-fluid'
);
//Content shops
$s_shop = array(
    'zaworyantyskzeniowe-pl' => array(
        'name' => 'zaworyanyskazeniowe.pl',
        'content' => '',
        'url' => 'on_antysk.png'),
    'mac3-pl' => array(
        'name' => 'mac3.pl',
        'content' => '',
        'url' => 'on_mac3.png'),
    'wymienniki-pl' => array(
        'name' => 'wymienniki.pl',
        'content' => '',
        'url' => 'on_wymienniki.png'),
    'przepompownie-pomp-pl' => array(
        'name' => 'przepompownie.pomp.pl',
        'content' => '',
        'url' => 'on_przepompow.png'),
    'nodolini-pl' => array(
        'name' => 'nodolini.pl',
        'content' => '',
        'url' => 'on_nodolini.png'),
    'tylkopompy-pl' => array(
        'name' => 'tylkopompy.pl',
        'content' => '',
        'url' => 'on_pompy.png'),
    'grzewcza24-pl' => array(
        'name' => 'grzewcza24.pl',
        'content' => '',
        'url' => 'on_grzewcza.png'),
    'zraszacze-pl' => array(
        'name' => 'zraszacze.pl',
        'content' => '',
        'url' => 'on_nawod.png'),
    'elektrozawory-pl' => array(
        'name' => 'elektrozawory.pl',
        'content' => '',
        'url' => 'on_elektroza.png')
);
//Display and order in sections
$s_shopBox = array(
    'strona-glowna' => array(
        'zaworyantyskzeniowe-pl',
        'mac3-pl',
        'wymienniki-pl',
        'przepompownie-pomp-pl',
        'nodolini-pl',
        'tylkopompy-pl',
        'grzewcza24-pl',
        'zraszacze-pl',
        'elektrozawory-pl'
    ),
    'dla-firm-handlowych' => array(
        'zaworyantyskzeniowe-pl',
        'mac3-pl',
        'wymienniki-pl',
        'przepompownie-pomp-pl',
        'nodolini-pl',
        'tylkopompy-pl',
        'grzewcza24-pl',
        'zraszacze-pl',
        'elektrozawory-pl'
    ),
    'dla-firm-wykonawczych' => array(
        'zaworyantyskzeniowe-pl',
        'mac3-pl',
        'wymienniki-pl',
        'przepompownie-pomp-pl',
        'nodolini-pl',
        'tylkopompy-pl',
        'grzewcza24-pl',
        'zraszacze-pl',
        'elektrozawory-pl'
    ),
    'dla-wodociagow' => array(
        'zaworyantyskzeniowe-pl',
        'mac3-pl',
        'przepompownie-pomp-pl',
        'tylkopompy-pl'
    ),
    'dla-przemyslu' => array(
        'zaworyantyskzeniowe-pl',
        'mac3-pl',
        'wymienniki-pl',
        'przepompownie-pomp-pl',
        'nodolini-pl',
        'tylkopompy-pl',
        'elektrozawory-pl'
    ),
    'dla-instalatorow,technika-grzewcza' => array(
        'wymienniki-pl',
        'grzewcza24-pl',
        'tylkopompy-pl',
        'elektrozawory-pl'
    ),
    'dla-instalatorow,nawodnienia' => array(
        'zraszacze-pl',
        'nodolini-pl',
        'tylkopompy-pl'
    )
);