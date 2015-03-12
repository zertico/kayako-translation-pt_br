<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author		Varun Shoor
 *
 * @package		SWIFT
 * @copyright	Copyright (c) 2001-2012, Kayako
 * @license		http://www.kayako.com/license
 * @link		http://www.kayako.com
 *
 * ###############################################
 */

$__LANG = array (

	'tabsettings' => 'Definições',
	'templates' => 'Modelos',

	// Header Logos (nee Personalize)
	'titlepersonalization' => 'Logótipos do cabeçalho atualizados',
	'msgpersonalization' => 'Os logótipos do seu cabeçalho foram guardados. Se um tiver sido alterado, necessitará de atualizar a sua página para visualizar as alterações.',
	'tabpersonalize' => 'Logótipos do cabeçalho',
	'generalinformation' => 'Informações gerais',
	'companyname' => 'Nome da empresa',
	'desc_companyname' => 'Este nome é utilizado para marcar a interface de apoio ao cliente e os emails enviados.',
	'defaultreturnemail' => 'Endereço de email de retorno predefinido',
	'desc_defaultreturnemail' => 'Este endereço é utilizado como o endereço "De" padrão no email enviado. Deve corresponder a uma fila de emails ativa para aceitar respostas de clientes.',
	'logoimages' => 'Imagens do cabeçalho',
	'supportcenterlogo' => 'Logótipo do cabeçalho do centro de suporte',
	'desc_supportcenterlogo' => 'Este logótipo é apresentado no centro de suporte orientado para o utilizador final. Recomenda-se que o logótipo tenha dimensões de 150px (largura) por 40px (altura)',
	'stafflogo' => 'Logótipo do cabeçalho do painel de controlo',
	'desc_stafflogo' => 'Este logótipo é apresentado no cabeçalho dos painéis de controlo (canto superior esquerdo). O logótipo <em>deve ajustar-se em</em> <strong>150 px</strong> (largura) por <strong>24 px</strong> (altura).',
	'personalize' => 'Logótipos do cabeçalho',

	// Import and export
	'tabexport' => 'Exportar',
	'export' => 'Exportar',
	'tabimport' => 'Importar',
	'import' => 'Importar',
	'result' => 'Resultado',
	'exporthistory' => 'Exportar também histórico de modelos',
	'desc_exporthistory' => 'Assim como as versões mais recentes dos modelos, as versões anteriores também serão exportadas.',
	'mergeoptions' => 'Opções de intercalação',
	'addtohistory' => 'Manter histórico de revisão de modelos',
	'desc_addtohistory' => 'Se a intercalação do grupo de modelos substituir quaisquer modelos existentes, os modelos substituídos serão preservados no histórico de modelos.',
	'titleversioncheckfail' => 'Este grupo de modelos está desatualizado',
	'msgversioncheckfail' => 'Não foi possível importar este grupo de modelos, pois foi gerado utilizando uma versão antiga de Kayako e podem faltar modelos. Caso gostasse de ignorar a verificação da versão, ative <em>Ignorar versão do grupo de modelos</em>.',
	'importexport' => 'Importar/Exportar',
	'exporttgroup' => 'Grupo de modelos a exportar',
	'desc_exporttgroup' => 'O grupo de modelos a ser exportado como um ficheiro XML.',
	'exportoptions' => 'Exportar tipo',
	'desc_exportoptions' => 'O tipo de modelos a exportar.',
	'exportalltemplates' => 'Exportar todos os modelos',
	'exportmodifications' => 'Exportar apenas modelos modificados',
	'templatefile' => 'Ficheiro XML do grupo de modelos',
	'desc_templatefile' => 'Selecione um ficheiro SML do grupo de modelos do seu computador.',
	'createnewgroup' => '-- Criar um novo grupo de modelos --',
	'mergewith' => 'Intercalar modelos importados com',
	'desc_mergewith' => 'Escolha se pretende criar um novo grupo de modelos utilizando o conteúdo do ficheiro ou apenas intercalar os modelos modificados com um grupo de modelos existente.',
	'ignoreversion' => 'Ignorar versão do grupo de modelos',
	'desc_ignoreversion' => 'Se selecionado, a versão do ficheiro de importação será ignorada. É recomendado que não ative esta opção, pois pode resultar em problemas no centro de suporte do cliente.',
	'titletemplateimportfailed' => 'Ocorreu um problema com o ficheiro do grupo de modelos',
	'msgtemplateimportfailed' => 'O ficheiro do grupo de modelos carregado não pôde ser processado. Pode conter dados inválidos.',
	'titletgroupmerge' => 'Foi intercalado o ficheiro do grupo de modelos importado com %s',
	'msgtgroupmerge' => 'O ficheiro do grupo de modelos %s foi importado e intercalado com o grupo de modelos %s com sucesso.',
	'titletgroupimport' => 'Grupo de modelos %s importado',
	'msgtgroupimport' => 'O ficheiro do grupo de modelos %s foi importado e o grupo de modelos %s foi criado com sucesso.',

	// Templates
	'changegroup' => 'Mudar grupo de modelos',
	'restoretemplates' => 'Restaurar modelos',
	'desc_restoretemplates' => '',
	'moditgroup' => 'Grupo de modelos a pesquisar',
	'desc_moditgroup' => 'The templates of this template group will be checked for errors.',
	'tabgeneral' => 'Geral',
	'restoretgroup' => 'Restaurar modelos para as mais recentes versões originais: %s',
	'tabrestore' => 'Restaurar modelos',
	'findtemplates' => 'Encontrar modelos',
	'titlerestoretemplates' => 'Modelos restaurados (%d)',
	'msgrestoretemplates' => 'Os seguintes modelos foram restaurados:',
	'tabdiagnostics' => 'Diagnóstico',
	'tabsearch' => 'Pesquisar modelos',
	'titletgrouprestorecat' => 'Categoria de grupo de modelos restaurada',
	'msgtgrouprestorecat' => 'Os modelos na categoria %s de %s (%s) foram restaurados com sucesso.',
	'expandcontract' => 'Expandir/contrair',
	'tabhistory' => 'Histórico',
	'templateversion' => 'Número de versão do modelo',
	'saveasnewversion' => 'Guardar uma nova versão do modelo',
	'titletemplaterestore' => '%s restaurado',
	'msgtemplaterestore' => 'O modelo %s foi restaurado para o seu estado original.',
	'titletemplateupdate' => '%s atualizado',
	'msgtemplateupdate' => 'Foram guardadas alterações ao modelo %s com sucesso.',
	'tabedittemplate' => 'Modelo: %s (%s)',
	'titlenohistory' => 'Sem histórico de modelos',
	'msgnohistory' => 'Não existem versões anteriores deste modelo, pelo que não há nada a apresentar.',
	'historydescription' => 'Alterações',
	'historyitemlist' => '%s: %s (%s) Notas: <em>%s</em>',
	'system' => '(Sistema)',
	'historyitemcurrent' => '%s: <em><strong>Atual</strong></em> (%s)',
	'compare' => 'Comparar',
	'current' => 'Atual',
	'notcurrenttemp' => 'Versão antiga',
	'exportdiff' => 'Exportar ficheiro diff',
	'tabcomparison' => 'Comparar versões',
	'changelognotes' => 'Descreva as suas alterações',
	'desc_changelognotes' => 'Se estiver a efetuar alterações a este modelo, adicione uma breve nota para que possa controlar as suas alterações no separador <strong>Histórico</strong>.',
	'none' => 'Nenhum',
	'inserttemplate' => 'Inserir modelo',
	'inserttgroup' => 'Grupo de modelos',
	'desc_inserttgroup' => 'Selecione o grupo de modelos para este modelo.',
	'templateeditingguideline' => 'Melhores práticas de edição do modelo',
	'desc_templateeditingguideline' => 'Ao utilizar o editor de modelos pode personalizar o aspeto e funcionamento do centro de suporte. Se uma futura atualização de Kayako também incluir alterações ao mesmo modelo, ser-lhe-á solicitado o restauro da última versão original do modelo. Tal anulará as alterações ao modelo e necessitará de as voltar a aplicar.<br><br>Para minimizar possíveis dores de cabeça, consulte o <a href="http://wiki.kayako.com/display/DOCS/Template+editing+best+practice+guide" target="_blank">guia de melhores práticas de edição de modelos</a> antes de personalizar o seu centro de suporte.',
	'restoreconfirmaskcat' => 'Tem a certeza de que pretende restaurar os modelos nesta categoria?\\nNão pode reverter esta ação; restaurar os modelos pode resultar na perda de todas as alterações de IU efetuadas nos modelos existentes!',
	'inserttemplatetgroup' => 'Grupo de modelos',
	'inserttemplatetcategory' => 'Categoria do modelo',
	'inserttemplatename' => 'Nome do modelo',
	'desc_inserttemplatename' => 'Introduza um nome para o modelo utilizando apenas carateres alfanuméricos. Por exemplo, <em>textocabeçalho</em> ou <em>boasvindascentrodesuporte</em>.',
	'titleinserttemplatedupe' => 'Nome do modelo já em utilização',
	'msginserttemplatedupe' => 'Este grupo de modelos já possui um modelo com este nome; escolha outro.',
	'titleinserttemplatechar' => 'O nome do modelo contém carateres inválidos',
	'msginserttemplatechar' => 'O nome do modelos só pode conter carateres alfanuméricos (letras e números).',
	'titleinserttemplate' => 'Modelo %s criado',
	'msginserttemplate' => 'O modelo %s foi criado no grupo de modelos %s.',
	'titletemplatedel' => 'Modelo eliminado',
	'msgtemplatedel' => 'O modelo %s foi eliminado.',

	// Template group
	'titleisenabledprob' => 'Não é possível desativar o grupo de modelos predefinido',
	'msgisenabledprob' => 'Este grupo de modelos está definido como a predefinição para o suporte técnico; não pode ser desativado.',
	'useloginshare' => 'Utilizar LoginShare para autenticar utilizadores',
	'desc_useloginshare' => 'Os utilizadores que iniciam sessão no suporte técnico enquanto este grupo de modelos está ativo será autenticado utilizando a API de LoginShare.',
	'groupusername' => 'Nome de utilizador',
	'desc_groupusername' => 'Introduza um nome de utilizador para ativar a proteção por palavra-passe para este grupo de modelos.',
	'passwordprotection' => 'Proteção por palavra-passe',
	'enablepassword' => 'Ativar proteção por palavra-passe',
	'desc_enablepassword' => 'Os utilizadores finais serão solicitados a introduzir um nome de utilizador e palavra-passe para abrir o centro de suporte.',
	'password' => 'Palavra-passe',
	'desc_password' => 'Introduza uma palavra-passe para ativar a proteção por palavra-passe para este grupo de modelos.',
	'passwordconfirm' => 'Volte a digitar a palavra-passe',
	'desc_passwordconfirm' => 'Confirme a palavra-passe para evitar erros de digitação.',
	'tabsettings_tickets' => 'Definições: pedidos de suporte',
	'tabsettings_livechat' => 'Definições: conversação em tempo real',
	'isenabled' => 'Grupo de modelos ativado',
	'desc_isenabled' => 'Se um grupo de modelos estiver desativado, não estará ativo e não pode ser acedido por utilizadores finais.',
	'titlepwnomatch' => 'As palavras-passe não correspondem',
	'msgpwnomatch' => 'The passwords entered do not match. Please try again.',
	'titleinvalidgrouptitle' => 'Nome do grupo de modelos contém carateres inválidos',
	'msginvalidgrouptitle' => 'Um nome de grupo de modelos só pode conter carateres alfanuméricos.',
	'titlegrouptitleexists' => 'Nome do grupo de modelos já em utilização',
	'msggrouptitleexists' => 'Outro grupo de modelos está a utilizar este título. Escolha outro.',
	'winedittemplategroup' => 'Editar grupo de modelos: %s',
	'tabpermissions' => 'Permissões',
	'titletgroupupdate' => 'Grupo de modelos %s atualizado',
	'msgtgroupupdate' => 'O grupo de modelos %s foi atualizado com sucesso.',
	'titletgroupinsert' => 'Grupo de modelos %s criado',
	'msgtgroupinsert' => 'O grupo de modelos %s foi criado com sucesso.',
	'titletgroupnodel' => 'Não foi possível eliminar o grupo de modelos',
	'msgtgroupnodel' => 'Este grupo de modelos principal não pôde ser eliminado:',
	'titletgroupdel' => 'Grupos de modelos eliminados (%d)',
	'msgtgroupdel' => 'Os seguintes grupos de modelos foram eliminados:',
	'titletgrouprestore' => 'Grupos de modelos restaurados (%d)',
	'msgtgrouprestore' => 'Os seguintes grupos de modelos e os seus modelos foram restaurados para os seus estados originais:',
	'insertemplategroup' => 'Inserir grupo de modelos',
	'tgrouptitle' => 'Nome do grupo de modelos',
	'desc_tgrouptitle' => 'Um nome de grupo de modelos só pode conter carateres alfanuméricos.',
	'gridtitle_companyname' => 'Nome da organização',
	'companyname' => 'Nome da empresa',
	'desc_companyname' => 'Este nome é utilizado para marcar a interface de apoio ao cliente e os emails enviados.',
	'generaloptions' => 'Opções gerais',
	'defaultlanguage' => 'Idioma predefinido',
	'desc_defaultlanguage' => 'O idioma que o suporte técnico selecionará por predefinição para este grupo de modelos.',
	'usergroups' => 'Funções do grupo de utilizadores',
	'guestusergroup' => 'Grupo de utilizadores convidado (sem sessão iniciada)',
	'desc_guestusergroup' => 'Este grupo de utilizadores determinará as permissões e definições para qualquer pessoa que aceda ao centro de suporte e <strong>não esteja com sessão iniciada</strong>.',
	'regusergroup' => 'Grupo de utilizadores registados (com sessão iniciada)',
	'desc_regusergroup' => 'Este grupo de utilizadores determinará as permissões e definições para qualquer pessoa que aceda ao centro de suporte e <strong>esteja com sessão iniciada</strong>.',
	'restrictgroups' => 'Restringir ao grupo de utilizadores registados',
	'desc_restrictgroups' => 'Apenas os utilizadores pertencentes ao grupo de utilizadores especificado acima poderão iniciar sessão no centro de suporte sob este grupo de modelos.',
	'copyfrom' => 'Copiar modelos do grupo de modelos',
	'desc_copyfrom' => 'Os modelos do grupo de modelos selecionado aqui serão copiados para este novo grupo de modelos.',
	'promptticketpriority' => 'O utilizador pode selecionar uma prioridade de pedido de suporte',
	'desc_promptticketpriority' => 'Ao criar um pedido de suporte, um utilizador pode selecionar uma prioridade de pedido de suporte. Caso contrário, a prioridade predefinida será utilizada.',
	'prompttickettype' => 'O utilizador pode selecionar um tipo de pedido de suporte',
	'desc_prompttickettype' => 'Ao criar um pedido de suporte, um utilizador pode selecionar um tipo de pedido de suporte. Caso contrário, o tipo predefinido será utilizado.',
	'tickettype' => 'Tipo de pedido de suporte predefinido',
	'desc_tickettype' => 'Os pedidos de suporte criados a partir deste grupo de modelos utilizarão este tipo por predefinição.',
	'ticketstatus' => 'Estado predefinido do pedido de suporte',
	'desc_ticketstatus' => 'Os pedidos de suporte criados ou respondidos a partir deste grupo de modelos serão definidos com este estado. Se um utilizador responder a um pedido de suporte que esteja associado a este grupo de modelos, o pedido de suporte será alterado para este estado.',
	'ticketpriority' => 'Prioridade predefinida do pedido de suporte',
	'desc_ticketpriority' => 'Os pedidos de suporte criados a partir deste grupo de modelos serão definidos com esta prioridade por predefinição.',
	'ticketdep' => 'Departamento padrão',
	'desc_ticketdep' => 'Este departamento será selecionado por predefinição na página <em>submeter pedido de suporte</em> no centro de suporte deste grupo de modelos.',
	'livechatdep' => 'Departamento padrão',
	'desc_livechatdep' => 'Este departamento será selecionado por predefinição no formulário de pedido de conversação em tempo real deste grupo de modelos.',
	'ticketsdeptitle' => '%s (pedidos de suporte)',
	'livesupportdeptitle' => '%s (conversação em tempo real)',
	'isdefault' => 'Este grupo de modelos é a predefinição do suporte técnico',
	'desc_isdefault' => 'O grupo de modelos predefinido para um suporte técnico será sempre utilizado salvo se for especificado um outro.',
	'loginshare' => 'LoginShare',

	// Manage template groups
	'grouptitle' => 'Título do grupo',
	'glanguage' => 'Idioma',
	'managegroups' => 'Gerir grupos',
	'templategroups' => 'Grupos de modelos',
	'desc_templategroups' => '',
	'grouplist' => 'Lista de grupos',
	'restore' => 'Restaurar',
	'export' => 'Exportar',
	'restoreconfirmask' => 'Tem a certeza de que pretende restaurar o estado original dos modelos neste grupo? Quaisquer modificações efetuadas aos modelos serão perdidas.',
	'restoreconfirm' => 'Os modelos no grupo %s foram restaurados para o seu estado original',
	'inserttemplategroup' => 'Inserir grupo',
	'edittemplategroup' => 'Editar Grupo',

	// ======= MANAGE TEMPLATES =======
	'desc_templates' => '',
	'managetemplates' => 'Gerir modelos',
	'templatetitle' => 'Modelos: %s',
	'expand' => 'Expandir',
	'notmodified' => 'Original',
	'modified' => 'Modificado',
	'upgrade' => 'Desatualizado',
	'expandall' => 'Expandir tudo',
	'jump' => 'Avançar',
	'templategroup' => 'Grupos de modelos',
	'desc_templategroup' => '',
	'edittemplate' => 'Editar modelo',
	'edittemplatetitle' => 'Modelo: %s (Grupo: %s)',
	'templatedata' => 'Conteúdo do modelo',
	'savetemplate' => 'Guardar',
	'saveandreload' => 'Guardar &amp; Recarregar',
	'restore' => 'Restaurar',
	'templatestatus' => 'Estado do modelo',
	'desc_templatestatus' => '',
	'tstatus' => '<img src="%s" align="absmiddle" border="0" /> %s', // Switch position for RTL language
	'dateadded' => 'Última modificação',
	'desc_dateadded' => '',
	'contents' => '',
	'desc_contents' => '',


	// Diagnostics
	'diagnostics' => 'Diagnóstico',
	'moditgroup' => 'Grupo de modelos a pesquisar',
	'desc_moditgroup' => 'The templates of this template group will be checked for errors.',
	'list' => 'Lista',
	'diagtgroup' => 'Grupos de modelos',
	'desc_diagtgroup' => '',
	'diagnose' => 'Diagnosticar',
	'templatename' => 'Nome do modelo',
	'status' => 'Estado',
	'compiletime' => 'Tempo de compilação',
	'diagnosetemplategroup' => 'Diagnosticar modelos: %s',

	// Search
	'search' => 'Pesquisar',
	'searchtemplates' => 'Pesquisar modelos',
	'query' => 'Pesquisar por',
	'desc_query' => 'Texto pelo qual pesquisar os modelos.',
	'searchtgroup' => 'Pesquisar no grupo de modelos',
	'desc_searchtgroup' => 'Os modelos neste grupo de modelos serão pesquisados.',
	'searchtemplategroup' => 'Pesquisar modelos: %s',

	// Template categories
	'template_general' => 'Geral',
	'template_chat' => 'Suporte em tempo real',
	'template_troubleshooter' => 'Resolução de problemas',
	'template_news' => 'Notícias',
	'template_knowledgebase' => 'Base de dados de conhecimento',
	'template_tickets' => 'Pedidos de suporte',
	'template_onsite' => 'OnSite',
	'template_reports' => 'Relatórios',

	// Potentialy unused phrases in templates.php
	'desc_importexport' => '',
	'restoretemplatestatus' => 'Template Status',
	'restoresubmitquestion' => 'Are you sure you wish to restore the selected templates?\\nThis action cannot be reversed, you will loose all modifications carried out in the selected templates.',
	'desc_diagnostics' => '',
	'desc_search' => '',
	'tabplugins' => 'Plugins',
	'ls_app' => 'LoginShare Plugin',
	'wineditls' => 'Edit LoginShare Plugin: %s',
	'invalidloginshareplugin' => 'Invalid LoginShare Plugin, Please make sure the LoginShare plugin exists in the database.',
	'lsnotitle' => 'No Settings Available',
	'lsnomsg' => 'There are no settings available for the LoginShare plugin <b>"%s"</b>.',
	'loginsharefile' => 'LoginShare XML File',
	'desc_loginsharefile' => 'Upload the LoginShare XML File',
	'titlenoelevatedls' => 'Unable to Import LoginShare XML',
	'msgnoelevatedls' => 'Kayako is unable to import the LoginShare XML file as it is required that you login with a staff user that has elevated rights. You can add your user to elevated right list in config/config.php file of the package.',
	'titlelsversioncheckfail' => 'Version Check Failed',
	'msglsversioncheckfail' => 'Kayako is unable to import the LoginShare Plugin as the plugin was created for an older version of Kayako',
	'titlelsinvaliduniqueid' => 'Duplicate Unique ID Error',
	'msglsinvaliduniqueid' => 'Kayako is unable to import the LoginShare Plugin due to a conflict in Unique ID. This usually means that the plugin has already been imported into the database.',
	'titlelsinvalidxml' => 'Invalid XML File',
	'msglsinvalidxml' => 'Kayako is unable to import the LoginShare Plugin as the XML file corrupt or contains invalid data.',
	'titlelsimported' => 'Imported LoginShare Plugin',
	'msglsimported' => 'Kayako has successfully imported the %s LoginShare Plugin.',
	'titlelsdeleted' => 'Deleted LoginShare Plugin',
	'msglsdeleted' => 'Successfully deleted the "%s" LoginShare Plugin from the database.',
	'tgroupjump' => 'Template Group: %s',
	'desc_templateversion' => '',
	'desc_changelognotes' => 'Se estiver a efetuar alterações a este modelo, adicione uma breve nota para que possa controlar as suas alterações no separador <strong>Histórico</strong>.',
	'desc_inserttgroup' => 'Selecione o grupo de modelos para este modelo.',
	'titlelsupdate' => 'LoginShare Update',
	'msglsupdate' => 'Successfully updated "%s" LoginShare settings',
	'exporttemplates' => 'Export Templates',
	'exportxml' => 'Export XML',
	'filename' => 'Filename',
	'desc_filename' => 'Specify the Export Filename.',
	'importtemplates' => 'Import Templates',
	'importxml' => 'Import XML',
	'tgroupmergeconfirm' => 'Template Group "%s" merged with import file',
	'versioncheckfailed' => 'Version Check Failed: The uploaded template pack was created using older version of Kayako',
	'tgroupnewimportconfirm' => 'Template Group "%s" imported successfully',
	'templategroupdetails' => 'Template Group Details',
	'passworddontmatch' => 'ERROR: Passwords don\'t match',
	'invalidgrouptitle' => 'ERROR: Only alphanumeric characters can be used in the Template Group Title',
	'grouptitleexists' => 'ERROR: Invalid Group Title. There is another Template Group with the same title; please choose a different title.',
	'desc_loginshare' => 'Specify the LoginShare App to use to authenticate the visitors under this Template Group. Make sure you have updated the settings for this app under Templates &gt; LoginShare.',
	'groupinsertconfirm' => 'Template Group "%s" inserted successfully',
	'groupdelconfirm' => 'Template Group "%s" deleted successfully',
	'invalidgroup' => 'Invalid Template Group',
	'groupupdateconfirm' => 'Template Group "%s" updated successfully',
	'templatecategories' => 'Template Categories',
	'groupjump' => 'Group Jump',
	'legend' => 'Legend: ',
	'invalidtemplate' => 'Invalid Template',
	'generalinfo' => 'General Information',
	'preview' => 'Preview',
	'copyclipboard' => 'Copy to Clipboard',
	'templateupdateconfirm' => 'Template "%s" updated successfully',
	'templaterestoreconfirm' => 'Templates "%s" restored to original contents',
	'templatesrestoreconfirm' => '%s Templates restored to original contents',
	'clipboardconfirm' => 'The Template contents have been copied to your clipboard. You can now paste the contents in your favorite HTML editor.',
	'clipboardconfirmmoz' => 'The text to be copied has been selected. Press Ctrl+C to copy the text to the clipboard.',
	'listmodified' => 'List Modified Templates',
	'listtorestore' => 'List Templates to Restore',
	'diagnosesmarty' => 'Diagnose Smarty Template Engine Errors',
	'modifiedtemplates' => 'Modified Templates (Group: %s)',
	'listtemplates' => 'List of Templates (Group: %s)',
	'diagnoseerrors' => 'Diagnose Errors (Group: %s)',
	'searchqueryd' => 'Search Query: %s',
	'pluginlist' => 'Plugin List',
	'hostname' => 'Hostname',
	'dbname' => 'DB Name',
	'dbuser' => 'DB User',
	'dbpass' => 'DB Password',
	'tableprefix' => 'Tabe Prefix',
	'ldaphostname' => 'Active Directory Host',
	'ldapport' => 'Port (Default: 389)',
	'ldapbasedn' => 'Base DN',
	'ldaprdn' => 'RDN',
	'ldappassword' => 'Password',
	'hsphostserver' => 'Server Hostname',
	'hspport' => 'Server Port',
	'hspurl' => 'XML API URL',
	'hspconnectfail' => 'Could not connect to server. Try again later.',
	'template_parser' => 'Email Parser',
	'loginapi_modernbill' => 'ModernBill',
	'loginapi_ipb' => 'Invision Power Board',
	'loginapi_vb' => 'vBulletin',
	'loginapi_osc' => 'osCommerce',
	'loginapi_iono' => 'IONO License Manager',
	'loginapi_plexum' => 'Plexum',
	'loginapi_awbs' => 'AWBS',
	'loginapi_phpaudit' => 'PHPAudit v2',
	'loginapi_whmautopilot' => 'WHMAP v3',
	'loginapi_activedirectory' => 'Active Directory/LDAP',
	'loginapi_activedirectoryssl' => 'Active Directory/LDAP (SSL)',
	'loginapi_ticketpurchaser' => 'Ticker Purchaser',
	'loginapi_xcart' => 'X-Cart',
	'loginapi_phpbb' => 'PHPBB',
	'loginapi_smf' => 'Simple Machines Forum',
	'loginapi_mybb' => 'MyBB',
	'loginapi_xmb' => 'XMB',
	'loginapi_clientexec' => 'Clientexec',
	'loginapi_joomla' => 'Joomla CMS',
	'loginapi_hsphere' => 'H-Sphere XML-API',
	'loginapi_phpprobid' => 'PHPProBid',
	'loginapi_cubecart' => 'CubeCart',
	'loginapi_modernbillv5' => 'ModernBill v5',
	'loginapi_cscart' => 'CS-Cart',
	'loginapi_fsr' => 'FSRevolution',
	'loginapi_viper' => 'Viper Cart',
	'loginapi_xoops' => 'XOOPS',
	'loginapi_whmcsintegration' => 'WHMCS - Integration Placeholder Only (Not for direct logins)',
);

?>