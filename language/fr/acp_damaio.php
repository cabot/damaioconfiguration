<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
*/


if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//
$lang = array_merge($lang, [
	'ACP_DAMAIO_HEADING'				=> 'Configuration du style damaïo',
	'ACP_DAMAIO_PREVIEW'				=> 'Aperçu des modifications',
	'ACP_DAMAIO_PREVIEW_EXPLAIN'		=> 'Cliquez sur le bouton pour afficher l’aperçu des modifications <b>validées</b>.',
	'ACP_DAMAIO_LOGO'					=> 'Logo',
	'ACP_DAMAIO_LOGO_PATH'				=> 'Emplacement du logo',
	'ACP_DAMAIO_LOGO_PATH_EXPLAIN'		=> 'Saisissez l’URL complète (par ex : <code>https://adresse.com/nom_du_logo.jpg</code>) ou le chemin relatif à la racine du forum (par ex. <code>images/nom_du_logo.png</code>).<br>Laissez le champ vide pour utiliser le logo d’origine, auquel cas les dimensions saisies ci-dessous n’auront aucun effet.',
	'ACP_DAMAIO_LOGO_WIDTH'				=> 'Largeur du logo',
	'ACP_DAMAIO_LOGO_HEIGHT'			=> 'Hauteur du logo',
	'ACP_DAMAIO_COLORS'					=> 'Couleurs',
	'ACP_DAMAIO_COLORS_EXPLAIN'			=> 'Vous pouvez définir des couleurs personnalisées ou laisser les champs vides pour utiliser celles d’origine du style.',
	'ACP_DAMAIO_COLOR_PICKER'			=> 'Activer le sélecteur de couleurs',
	'ACP_DAMAIO_COLOR_PICKER_EXPLAIN'	=> 'Si cette option est désactivée, les utilisateurs ne pourront pas modifier les couleurs du style.',
	'ACP_DAMAIO_MAINCOLOR1'				=> 'Couleur 1',
	'ACP_DAMAIO_MAINCOLOR1_EXPLAIN'		=> 'Couleur des blocs principaux et des boutons.',
	'ACP_DAMAIO_MAINCOLOR2'				=> 'Couleur 2',
	'ACP_DAMAIO_MAINCOLOR2_EXPLAIN'		=> 'Couleur des liens au survol.',
	'ACP_DAMAIO_MAINCOLOR3'				=> 'Couleur 3',
	'ACP_DAMAIO_MAINCOLOR3_EXPLAIN'		=> 'Couleur des boutons au survol.',
	'ACP_DAMAIO_LAYOUT'					=> 'Mise en page',
	'ACP_DAMAIO_MODAL_LOGIN'			=> 'Fenêtre modale de connexion',
	'ACP_DAMAIO_MODAL_LOGIN_EXPLAIN'	=> 'Permet d’afficher le formulaire de connexion dans une fenêtre modale.',
	'ACP_DAMAIO_HEADER_WIDTH'			=> 'Afficher l’en-tête en pleine largeur',
	'ACP_DAMAIO_FOOTER_WIDTH'			=> 'Afficher le pied de page en pleine largeur',
	'ACP_DAMAIO_PASSWORD_SHOW'			=> 'Affichage du mot de passe',
	'ACP_DAMAIO_PASSWORD_SHOW_EXPLAIN'	=> 'Permet d’ajouter une icône pour afficher/masquer le mot de passe.',
	'ACP_DAMAIO_MAIN_WIDTH'				=> 'Largeur maximale du style',
	'ACP_DAMAIO_MAIN_WIDTH_EXPLAIN'		=> 'Définissez ici la largeur du contenu du forum.<br>Saisissez la valeur « <code>none</code> » pour afficher l’ensemble du style en pleine largeur.<br>Laissez le champ vide pour utiliser la valeur d’origine.',
	'ACP_DAMAIO_FOOTER_ICONS'			=> 'Icônes de pied de page',
	'ACP_DAMAIO_FOOTER_ICONS_EXPLAIN'	=> 'Saisissez une URL pour afficher l’icône correspondante au champ. Laissez le champ vide pour ne pas afficher l’icône.',
	'ACP_DAMAIO_DEVIANTART'				=> 'DeviantArt',
	'ACP_DAMAIO_FACEBOOK'				=> 'Facebook',
	'ACP_DAMAIO_FLICKR'					=> 'Flickr',
	'ACP_DAMAIO_GITHUB'					=> 'GitHub',
	'ACP_DAMAIO_INSTAGRAM'				=> 'Instagram',
	'ACP_DAMAIO_LINKEDIN'				=> 'LinkedIn',
	'ACP_DAMAIO_PINTEREST'				=> 'Pinterest',
	'ACP_DAMAIO_REDDIT'					=> 'Reddit',
	'ACP_DAMAIO_SKYPE'					=> 'Skype',
	'ACP_DAMAIO_SNAPCHAT'				=> 'Snapchat',
	'ACP_DAMAIO_SOUNDCLOUD'				=> 'SoundCloud',
	'ACP_DAMAIO_STEAM'					=> 'Steam',
	'ACP_DAMAIO_TUMBLR'					=> 'Tumblr',
	'ACP_DAMAIO_TWITTER'				=> 'Twitter',
	'ACP_DAMAIO_WHATSAPP'				=> 'WhatsApp',
	'ACP_DAMAIO_YOUTUBE'				=> 'YouTube',
	'ACP_DAMAIO_FEED'					=> 'Icône du flux',
	'ACP_DAMAIO_FEED_EXPLAIN'			=> 'L’affichage de cette icône nécessite que les flux soient activés dans les « <a href="%1$s">Paramètres des flux</a> ».',
	'ACP_DAMAIO_STYLE_DEACTIVATED'		=> 'Le style a été installé mais il est actuellement désactivé. Néanmoins, vous pouvez gérer les paramètres de configuration et visualiser l’aperçu.<br><a href="%1$s">Cliquez ici</a> pour accéder à la page de gestion des styles si vous souhaitez l’activer.',
	'ACP_DAMAIO_STYLE_NOT_FOUND'		=> 'Le fichier de configuration du style n’a pas été trouvé dans le répertoire <code>styles/damaio/</code>. Veuillez vous assurer que le style est installé dans le répertoire attendu.<br><a href="%1$s">Cliquez ici</a> pour accéder à la page d’installation des styles.<br><a href="%2$s">Cliquez ici</a> pour accéder à la page de gestion des styles.',
	'ACP_DAMAIO_STYLE_INCOMPATIBLE'		=> 'La version <b>%1$s</b> du style damaïo que vous utilisez est incompatible avec cette extension, qui requiert une version du style supérieure ou égale à <b>%2$s</b>.<br>Veuillez télécharger une version compatible depuis <a href="%3$s" target="_blank" title="S’ouvre dans un nouvel onglet">cette page</a>.',
	'ACP_DAMAIO_SAVE'					=> 'Configuration du style damaïo sauvegardée.',
]);