<?php
$define = [
    'HEADING_TITLE' => 'Odeslat ' . TEXT_GV_NAME,
    'HEADING_TITLE_CONFIRM_SEND' => 'Potvrzení odeslání ' . TEXT_GV_NAME,
    'HEADING_TITLE_COMPLETED' => TEXT_GV_NAME . ' odeslán',
    'NAVBAR_TITLE' => 'Odeslat ' . TEXT_GV_NAME,
    'EMAIL_SUBJECT' => 'Zpráva od ' . STORE_NAME,
    'HEADING_TEXT' => 'Zadejte prosím jméno, e-mailovou adresu a částku ' . TEXT_GV_NAME . ', kterou chcete odeslat. Pro více informací navštivte naši stránku <a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . GV_FAQ . '.</a>',
    'ENTRY_MESSAGE' => 'Vaše zpráva:',
    'ENTRY_AMOUNT' => 'Částka k odeslání:',
    'ERROR_ENTRY_TO_NAME_CHECK' => 'Nezadali jste jméno příjemce. Vyplňte jej prosím níže.',
    'ERROR_ENTRY_AMOUNT_CHECK' => 'Částka ' . TEXT_GV_NAME . ' se nezdá být správná. Zkuste to prosím znovu.',
    'ERROR_ENTRY_EMAIL_ADDRESS_CHECK' => 'Je e-mailová adresa správná? Zkuste to prosím znovu.',
    'MAIN_MESSAGE' => 'Odesíláte ' . TEXT_GV_NAME . ' v hodnotě %1$s pro %2$s, jehož e-mailová adresa je %3$s. Pokud tyto údaje nejsou správné, můžete zprávu upravit kliknutím na tlačítko <strong>upravit</strong>.<br><br>Zpráva, kterou odesíláte, je:<br><br>',
    'SECONDARY_MESSAGE' => 'Vážený/á %1$s,<br><br>Byl vám zaslán ' . TEXT_GV_NAME . ' v hodnotě %2$s od %3$s',
    'PERSONAL_MESSAGE' => '%s píše:',
    'TEXT_SUCCESS' => 'Gratulujeme, váš ' . TEXT_GV_NAME . ' byl odeslán.',
    'TEXT_SEND_ANOTHER' => 'Chcete odeslat další ' . TEXT_GV_NAME . '?',
    'EMAIL_GV_TEXT_SUBJECT' => 'Dárek od %s',
    'EMAIL_SEPARATOR' => '----------------------------------------------------------------------------------------',
    'EMAIL_GV_TEXT_HEADER' => 'Gratulujeme, obdrželi jste ' . TEXT_GV_NAME . ' v hodnotě %s',
    'EMAIL_GV_FROM' => 'Tento ' . TEXT_GV_NAME . ' vám byl zaslán od %s',
    'EMAIL_GV_MESSAGE' => 'se zprávou:',
    'EMAIL_GV_SEND_TO' => 'Dobrý den, %s',
    'EMAIL_GV_REDEEM' => 'Pro uplatnění tohoto ' . TEXT_GV_NAME . ' klikněte na odkaz níže. Pro jistotu si také poznamenejte ' . TEXT_GV_REDEEM . ': %s, pokud by nastaly problémy.',
    'EMAIL_GV_LINK' => 'Pro uplatnění klikněte zde',
    'EMAIL_GV_FIXED_FOOTER' => 'Pokud máte problémy s uplatněním ' . TEXT_GV_NAME . ' pomocí automatického odkazu výše, ' . "\n" .
        'můžete také zadat ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' během dokončení objednávky v našem obchodě.',
    'EMAIL_GV_SHOP_FOOTER' => '',
];

return $define;
