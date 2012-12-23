<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'ppg_bccmail',
    'title'        => 'BCC mail to shop owner',
    'description'  => array(
        'de' => 'Jede Mail, die von Shopsystem generiert wird, wird an die angegebene Adresse als BCC-Copy geschickt. Auf diese Weise hat der Shop-Owner Einblick in die verschickten Mail.<br /><strong><font color="red">Bitte nicht vergessen die BCC-Mailadresse unter Einstellungen zu ändern.</font></strong>',
        'en' => 'Every mail sent by the shop system will be send to the specified mail adress as BCC-Copy.<br /><strong><font color="red">Don\'t forget to change the BCC mail address unter "Settings".</font></strong>',
    ),
    'thumbnail'    => '',
    'version'      => '0.1',
    'author'       => 'Paul Gaida',
    'url'          => 'http://www.paramente-gaida.de',
    'email'        => 'info@paramente-gaida.de',
    'extend'       => array(
        'oxemail'        => 'ppg_bccmail/ppg_bccmail',
    ),
    'settings' => array(
        array('group' => 'ppg_main', 'name' => 'ppgBCCmailaddress', 'type' => 'str',  'value' => ''),
    ),
);
?>