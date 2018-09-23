<?php

/**
 * pdf_nc_attachment extension for Notification Center and Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2018, Softleister
 * @author     Hagen Klemp <info@softleister.de>
 * @licence    commercial
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['tstamp']             = array('Änderungsdatum', 'Zeitpunkt der letzten Änderung');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['textitems']          = array('Eingaben und Texte', 'Eingaben und/oder Texte, die hier ins PDF eingefügt werden sollen');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['textitem_feld']      = array('SimpleToken oder "Text" ', 'Geben Sie den SimpleToken an, oder in Gänsefüssen einen Text, der eingetragen werden soll.');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['textitem_bedingung'] = array('Bedingung ', 'Der Text wird nur ausgegeben, wenn die Bedingung erfüllt ist. Bei Angabe eines Tokens muss der Token existieren und nicht leer sein. Es können auch einfache Vergleiche mit == oder != verwendet werden, z.B. form_question==yes');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['page']               = array('Seite im PDF', 'Seite, auf der die Position eingefügt werden soll');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['posxy']              = array('Position in X und Y', 'Position im mm von der oberen, linken Ecke');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['borderright']        = array('Rechter Rand', 'Optionelle Randeinstellung, als Umbruchgrenze bei langen Texten');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['align']              = array('Ausrichtung', 'Ausrichtung bezogen auf die Position.');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['fontstyle']          = array('Textattribute', 'Attribute Fett oder Kursiv für die eingefügten Texte');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['fontsize']           = array('Textgröße', 'Font Textgröße in pt');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['published']          = array('Veröffentlicht', 'Die Position wird nur im PDF eingetragen, wenn sie veröffentlicht ist.');

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['fontstyles']['bold']        = 'Fett';
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['fontstyles']['italic']      = 'Kursiv';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['new']        = array('Neue Position', 'Neue Variablenposition erstellen');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['edit']       = array('Position bearbeiten', 'Position ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['copy']       = array('Position duplizieren', 'Position ID %s kopieren');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['cut']        = array('Position verschieben', 'Position ID %s verschieben');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['delete']     = array('Position löschen', 'Position ID %s löschen');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['toggle']     = array('Position veröffentlichen/unveröffentlichen', 'Position ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['show']       = array('Positions-Details', 'Details zu Position ID %s');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['editheader'] = array('Position bearbeiten', 'Diese Position bearbeiten');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['pasteafter'] = array('Am Anfang einfügen', 'Nach Position ID %s einfügen');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['pastenew']   = array('Neue Position unterhalb erstellen', 'Neue Position hinter ID %s erstellen');
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['testpdf']    = array('Download Test-PDF', 'Testweise Ausgabe der ausgefüllten Vorlage als Download');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['pdfnc_legend']    = 'PDF-Formular ausfüllen';
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['attr_legend']    = 'Position und Attribute';
$GLOBALS['TL_LANG']['tl_pdfnc_positions']['publish_legend'] = 'Veröffentlichung';
