<?php
$define = [
    'NAVBAR_TITLE' => 'Vytvořit účet',
    'HEADING_TITLE' => 'Informace o mém účtu',
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">POZNÁMKA:</strong> Pokud u nás již máte účet, přihlaste se prosím na <a href="%s">přihlašovací stránce</a>.',
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'Děkujeme, vaše žádost o účet byla odeslána ke kontrole.',
    'EMAIL_SUBJECT' => 'Vítejte v ' . STORE_NAME,
    'EMAIL_GREET_MR' => 'Vážený pane %s,' . "\n\n",
    'EMAIL_GREET_MS' => 'Vážená paní %s,' . "\n\n",
    'EMAIL_GREET_NONE' => 'Vážený/á %s,' . "\n\n",
    'EMAIL_WELCOME' => 'Vítáme vás v <strong>' . STORE_NAME . '</strong>.',
    'EMAIL_SEPARATOR' => '--------------------',
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'Gratulujeme! Aby byla vaše příští návštěva našeho internetového obchodu ještě příjemnější, níže najdete podrobnosti o slevovém kupónu vytvořeném přímo pro vás!' . "\n\n",
    'EMAIL_COUPON_REDEEM' => 'Pro použití slevového kupónu zadejte kód ' . TEXT_GV_REDEEM . ' při dokončení objednávky:  <strong>%s</strong>' . "\n\n",
    'EMAIL_GV_INCENTIVE_HEADER' => 'Jen za dnešní návštěvu jsme vám poslali ' . TEXT_GV_NAME . ' v hodnotě %s!' . "\n",
    'EMAIL_GV_REDEEM' => TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' je: %s ' . "\n\n" . 'Kód můžete zadat při dokončení objednávky po výběru produktů v obchodě.',
    'EMAIL_GV_LINK' => ' Nebo jej můžete uplatnit nyní kliknutím na tento odkaz: ' . "\n",
    'EMAIL_GV_LINK_OTHER' => 'Jakmile přidáte ' . TEXT_GV_NAME . ' ke svému účtu, můžete jej použít pro sebe nebo poslat příteli!' . "\n\n",
    'EMAIL_TEXT' => 'Nyní máte účet v ' . STORE_NAME . ', který vám umožňuje:' . "\n\n<ul>" . '<li><strong>Historie objednávek</strong> - Zobrazit podrobnosti objednávek.</li>' . "\n\n" . '<li><strong>Trvalý košík</strong> - Produkty, které přidáte do košíku, v něm zůstanou, dokud je neodstraníte nebo nezakoupíte.</li>' . "\n\n" . '<li><strong>Adresář</strong> - Definujte další adresy (například pro zaslání dárku).</li>' . "\n\n" . '<li><strong>Recenze produktů</strong> - Sdílejte svůj názor na naše produkty s ostatními zákazníky.</li>' . "\n\n</ul>",
    'EMAIL_CONTACT' => 'Pokud potřebujete pomoc s některou z našich online služeb, napište prosím majiteli obchodu: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>\n\n",
    'EMAIL_GV_CLOSURE' => "\n" . 'S pozdravem,' . "\n\n" . STORE_OWNER . "\nMajitel obchodu\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Tuto e-mailovou adresu jste nám poskytli vy nebo jeden z našich zákazníků. Pokud jste se neregistrovali, nebo se domníváte, že jste tento e-mail obdrželi omylem, napište prosím na %s ',
];

return $define;
