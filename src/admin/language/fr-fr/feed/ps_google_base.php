<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Base';
$_['heading_categories']           = 'Associations de catégories';
$_['heading_authentication']       = 'Authentification';
$_['heading_tax_deffinitions']     = 'Définitions fiscales';
$_['heading_getting_started']      = 'Démarrage';
$_['heading_setup']                = 'Configuration de Google Base';
$_['heading_troubleshot']          = 'Dépannage courant';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Support client';

// Text
$_['text_extension']               = 'Extensions';
$_['text_success']                 = 'Succès : Vous avez modifié avec succès le flux Google Base !';
$_['text_import_success']          = 'Succès : Vous avez importé avec succès la liste des catégories Google !';
$_['text_add_category_success']    = 'Succès : Vous avez ajouté avec succès une association de catégorie !';
$_['text_remove_category_success'] = 'Succès : Vous avez supprimé avec succès une association de catégorie !';
$_['text_edit']                    = 'Modifier Google Base';
$_['text_import']                  = 'Pour télécharger la dernière liste des catégories Google, <a href="https://support.google.com/merchants/answer/160081?hl=en" target="_blank" rel="external noopener noreferrer" class="alert-link">cliquez ici</a> et sélectionnez la taxonomie avec des ID numériques dans un fichier texte (.txt). Ensuite, téléchargez le fichier à l’aide du bouton vert.';
$_['text_getting_started']         = '<p><strong>Aperçu :</strong> L\'extension Google Base pour OpenCart 4.x permet aux utilisateurs d\'exporter facilement leurs produits vers <a href="https://merchants.google.com" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> au format XML. Cet outil essentiel améliore la visibilité des produits sur Google Shopping, facilitant ainsi leur découverte et leur achat par les clients potentiels.</p><p><strong>Exigences :</strong> Pour utiliser cette extension, assurez-vous d\'avoir installé et configuré OpenCart 4.x+, PHP 7.4+ ainsi qu\'un compte actif sur Google Merchant Center pour gérer efficacement vos annonces de produits.</p>';
$_['text_setup']                   = '<ul><li>Téléchargez la dernière liste des catégories Google depuis <a href="https://support.google.com/merchants/answer/160081?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center Support</a>.</li><li>Associez vos catégories de boutique aux catégories Google appropriées.</li><li>Configurez l\'extension pour ignorer les produits en rupture de stock si vous le souhaitez.</li><li>Utilisez les prix hors taxe dans le flux en activant l\'option correspondante et personnalisez les définitions fiscales en conséquence.</li></ul>';
$_['text_troubleshot']             = '<ul><li><strong>Les catégories Google ne s\'affichent pas :</strong> Assurez-vous d\'avoir téléchargé la dernière liste des catégories Google et de l\'avoir importée dans votre système. Cela est essentiel pour un bon mappage entre votre boutique en ligne et Google Merchant Center.</li><li><strong>Aucun flux de produits visible :</strong> Vérifiez que l\'extension Google Base est activée dans le panneau d\'administration d\'OpenCart. Si elle est activée et que vous ne voyez toujours pas de résultat, vérifiez les paramètres de l\'extension pour d\'éventuelles erreurs de configuration.</li><li><strong>Les produits n\'apparaissent pas dans Google Merchant Center :</strong> Vérifiez que vos produits sont correctement catégorisés et qu\'il n\'y a pas d\'erreurs dans vos données de produit. Assurez-vous également de respecter les politiques de Google Merchant Center concernant les annonces de produits.</li></ul>';
$_['text_faq']                     = '<details><summary>Qu\'est-ce que l\'extension Google Base ?</summary><p>L\'extension Google Base aide les utilisateurs d\'OpenCart 4.x à exporter leurs données produits vers Google Merchant Center, augmentant ainsi leur visibilité sur Google Shopping.</p></details><details><summary>Comment activer l\'extension Google Base ?</summary><p>Vous pouvez activer l\'extension depuis le panneau d\'administration OpenCart sous la section Extensions. Assurez-vous de configurer les paramètres nécessaires.</p></details><details><summary>Puis-je personnaliser mon flux de produits ?</summary><p>Oui, l\'extension vous permet de personnaliser divers paramètres, y compris l\'utilisation des prix hors taxe et les définitions fiscales, garantissant ainsi que votre flux réponde à vos besoins.</p></details><details><summary>Pourquoi mon flux de produits n\'apparaît-il pas dans Google Merchant Center ?</summary><p>Assurez-vous que l\'extension Google Base est activée et que vos catégories de produits sont correctement associées aux catégories Google. Vérifiez également l\'absence d\'erreurs dans la configuration de votre flux.</p></details>';
$_['text_contact']                 = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation utilisateur</a></li></ul>';

// Column
$_['column_google_category']       = 'Catégorie Google';
$_['column_category']              = 'Catégorie';
$_['column_action']                = 'Action';

// Tab
$_['tab_general']                  = 'Général';
$_['tab_help_and_support']         = 'Aide et support';

// Entry
$_['entry_google_category']        = 'Catégorie Google';
$_['entry_category']               = 'Catégorie';
$_['entry_data_feed_url']          = 'URL du flux de données';
$_['entry_status']                 = 'Statut';
$_['entry_login']                  = 'Nom d\'utilisateur';
$_['entry_password']               = 'Mot de passe';
$_['entry_skip_out_of_stock']      = 'Ignorer les produits en rupture de stock';
$_['entry_tax']                    = 'Utiliser les prix hors taxe';
$_['entry_country']                = 'Pays';
$_['entry_region']                 = 'Région';
$_['entry_tax_rate']               = 'Taux de taxe';
$_['entry_tax_ship']               = 'Taxe sur l\'expédition';
$_['entry_active_store']           = 'Magasin actif';

// Error
$_['error_permission']             = 'Avertissement : Vous n\'avez pas l\'autorisation de modifier le flux Google Base !';
$_['error_store_id']               = 'Avertissement : Le formulaire ne contient pas d\'ID de magasin !';
$_['error_currency']               = 'Avertissement : Sélectionnez une devise dans la liste';
$_['error_upload']                 = 'Le fichier n\'a pas pu être téléchargé !';
$_['error_filetype']               = 'Type de fichier invalide !';
$_['error_tax_country']            = 'Veuillez sélectionner un pays pour la taxe.';
$_['error_tax_region']             = 'Le champ de région fiscale ne peut pas être laissé vide.';
$_['error_tax_rate_id']            = 'Veuillez sélectionner un taux de taxe pour la taxe';
