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
	'ACP_DAMAIO_ENABLE'					=> 'Activer l’extension',
	'ACP_DAMAIO_ENABLE_EXPLAIN'			=> 'Si désactivée, seuls les membres du groupe « Administrateurs » verront les modifications, vous permettant ainsi de configurer le style sans perturber les utilisateurs.',
	'ACP_DAMAIO_HEADING'				=> 'Configuration du style damaïo',
	'ACP_DAMAIO_PREVIEW'				=> 'Aperçu des modifications',
	'ACP_DAMAIO_PREVIEW_EXPLAIN'		=> 'Cliquez sur le bouton pour afficher l’aperçu des modifications <b>validées</b>.',
	'ACP_DAMAIO_LOGO'					=> 'Logo',
	'ACP_DAMAIO_LOGO_PATH'				=> 'Emplacement du logo',
	'ACP_DAMAIO_LOGO_PATH_EXPLAIN'		=> 'Saisissez l’URL complète (p. ex. <code>https://adresse.com/nom_du_logo.jpg</code>) ou le chemin relatif à la racine du forum (p. ex. <code>images/nom_du_logo.png</code>).<br>Laissez le champ vide pour utiliser le logo d’origine, auquel cas les dimensions saisies ci-dessous n’auront aucun effet.',
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
	'ACP_DAMAIO_STICKYNAV'				=> 'Barre de menu collante',
	'ACP_DAMAIO_STICKYNAV_EXPLAIN'		=> 'Permet de conserver la barre du menu principal visible lors du scroll.',
	'ACP_DAMAIO_HEADER_WIDTH'			=> 'Afficher l’en-tête en pleine largeur',
	'ACP_DAMAIO_FOOTER_WIDTH'			=> 'Afficher le pied de page en pleine largeur',
	'ACP_DAMAIO_PASSWORD_SHOW'			=> 'Affichage du mot de passe',
	'ACP_DAMAIO_PASSWORD_SHOW_EXPLAIN'	=> 'Permet d’ajouter une icône pour afficher/masquer le mot de passe.',
	'ACP_DAMAIO_MAIN_WIDTH'				=> 'Largeur maximale du style',
	'ACP_DAMAIO_MAIN_WIDTH_EXPLAIN'		=> 'Définissez ici la largeur du contenu du forum.<br>Saisissez la valeur « <code>none</code> » pour afficher l’ensemble du style en pleine largeur.<br>Laissez le champ vide pour utiliser la valeur d’origine.',
	'ACP_DAMAIO_FOOTER_ICONS'			=> 'Icônes de pied de page',
	'ACP_DAMAIO_FOOTER_ICONS_EXPLAIN'	=> 'Saisissez une URL pour afficher l’icône correspondante au champ. Laissez le champ vide pour ne pas afficher l’icône.',
	'ACP_DAMAIO_BLUESKY'				=> 'Bluesky',
	'ACP_DAMAIO_DEVIANTART'				=> 'DeviantArt',
	'ACP_DAMAIO_DISCORD'				=> 'Discord',
	'ACP_DAMAIO_FACEBOOK'				=> 'Facebook',
	'ACP_DAMAIO_FLICKR'					=> 'Flickr',
	'ACP_DAMAIO_GITHUB'					=> 'GitHub',
	'ACP_DAMAIO_INSTAGRAM'				=> 'Instagram',
	'ACP_DAMAIO_LINKEDIN'				=> 'LinkedIn',
	'ACP_DAMAIO_MASTODON'				=> 'Mastodon',
	'ACP_DAMAIO_PAYPAL'					=> 'PayPal',
	'ACP_DAMAIO_PINTEREST'				=> 'Pinterest',
	'ACP_DAMAIO_REDDIT'					=> 'Reddit',
	'ACP_DAMAIO_SKYPE'					=> 'Skype',
	'ACP_DAMAIO_SNAPCHAT'				=> 'Snapchat',
	'ACP_DAMAIO_SOUNDCLOUD'				=> 'SoundCloud',
	'ACP_DAMAIO_STEAM'					=> 'Steam',
	'ACP_DAMAIO_TELEGRAM'				=> 'Telegram',
	'ACP_DAMAIO_TIKTOK'					=> 'TikTok',
	'ACP_DAMAIO_TUMBLR'					=> 'Tumblr',
	'ACP_DAMAIO_TWITTER'				=> 'Twitter',
	'ACP_DAMAIO_VKONTAKTE'				=> 'VKontakte',
	'ACP_DAMAIO_WHATSAPP'				=> 'WhatsApp',
	'ACP_DAMAIO_YOUTUBE'				=> 'YouTube',
	'ACP_DAMAIO_FEED'					=> 'Icône du flux',
	'ACP_DAMAIO_FEED_EXPLAIN'			=> 'L’affichage de cette icône nécessite que les flux soient activés dans les « <a href="%1$s">Paramètres des flux</a> ».',
	'ACP_DAMAIO_ADVANCED_CUSTOM'		=> 'Personnalisation avancée',
	'ACP_DAMAIO_CUSTOM_CSS'				=> 'Règles CSS',
	'ACP_DAMAIO_CUSTOM_CSS_EXPLAIN'		=> 'Ajoutez ici vos <a href="https://www.w3schools.com/css/css_syntax.asp" title="S’ouvre dans un nouvel onglet" target="_blank">règles CSS <i class="fa fa-external-link" aria-hidden="true"></i></a> personnalisées.',
	'ACP_DAMAIO_STYLE_DEACTIVATED'		=> 'Le style <b>damaïo</b> est installé mais actuellement désactivé. Néanmoins, vous pouvez gérer les paramètres de configuration et visualiser l’aperçu.<br><a href="%1$s">Cliquez ici</a> pour accéder à la page de gestion des styles pour activer damaïo.',
	'ACP_DAMAIO_STYLE_NOT_FOUND'		=> 'Le style <b>damaïo</b> n’est pas installé ou son fichier de configuration n’a pas été trouvé dans le répertoire <code>styles/damaio/</code>.<br>Veuillez vous assurer que le style est installé dans le répertoire attendu.<br><br>Téléchargez le style en version supérieure ou égale à <b>%1$s</b> depuis la <a href="%2$s" title="S’ouvre dans un nouvel onglet" target="_blank">base de données des styles phpBB <i class="fa fa-external-link" aria-hidden="true"></i></a> ou le <a href="%3$s" title="S’ouvre dans un nouvel onglet" target="_blank">dépôt GitHub <i class="fa fa-external-link" aria-hidden="true"></i></a>.<br><a href="%4$s">Cliquez ici</a> pour accéder à la page d’installation des styles.',
	'ACP_DAMAIO_STYLE_INCOMPATIBLE'		=> 'La version <b>%1$s</b> du style <b>damaïo</b> est incompatible avec cette extension.<br>Veuillez télécharger la version <b>%2$s</b> ou supérieure depuis la <a href="%3$s" target="_blank" title="S’ouvre dans un nouvel onglet">base de données des styles phpBB <i class="fa fa-external-link" aria-hidden="true"></i></a> ou le <a href="%4$s" title="S’ouvre dans un nouvel onglet" target="_blank">dépôt GitHub <i class="fa fa-external-link" aria-hidden="true"></i></a>.',
	'ACP_DAMAIO_SAVE'					=> 'Configuration du style damaïo sauvegardée.',
]);
