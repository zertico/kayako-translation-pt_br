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
	// ======= BEGIN v4 LOCALES =======
	'insertbreakline' => 'Inserir quebra de linha',
	'editbreakline' => 'Editar quebra de linha',
	'emailqueues' => 'Filas de email',
	'winviewparserlog' => 'Ver registo do analisador',
	'close' => 'Fechar',
	'titleparserlogdel' => 'Entradas do registo do analisador de email eliminadas (%d)',
	'msgparserlogdel' => 'As seguintes entradas do registo do analisador de email foram eliminadas:',

	'breaklines' => 'Quebras de linha',
	'desc_breaklines' => '',
	'sortorder' => 'Ordem de execução',
	'desc_sortorder' => 'As quebras de linha são executadas de acordo com o número da ordem de execução, do menor para o maior.',
	'wineditbreakline' => 'Editar quebra de linha',
	'breaklinetitle' => 'Quebrar texto a truncar em',
	'desc_breaklinetitle' => 'Todos os emails recebidos serão truncados a partir desta quebra de linha, para manter as coisas organizadas.',
	'isregexp' => 'Correspondência por padrão',
	'desc_isregexp' => 'Se ativado, pode especificar um padrão de expressão regular em vez do texto de quebra de linha acima para uma correspondência de quebra de linha mais flexível.',
	'titleinsertbreakline' => 'Quebra de linha criada',
	'msginsertbreakline' => 'A nova quebra de linha foi criada com sucesso.',
	'titleupdatebreakline' => 'Quebra de linha atualizada',
	'msgupdatebreakline' => 'A quebra de linha foi atualizada com sucesso.',
	'titledelbreakline' => 'Quebras de linhas eliminadas (%d)',
	'msgdelbreakline' => 'As seguintes quebras de linha foram eliminadas:',
	'invalidbreakline' => 'Foi encontrado um problema (quebra de linha inválida - certifique-se de que a quebra de linha existe na base de dados)',

	'tabsettings' => 'Definições',
	'forcequeue' => 'Ignorar endereços de destinatário e forçar para a fila',
	'desc_forcequeue' => 'Se ativado, todos os emails obtidos a partir desta fila seguirão as opções de encaminhamento da mesma, mesmo se o endereço <strong>Para:</strong> nos emails obtidos a partir desta fila corresponder a outra fila no suporte técnico.<br/><br/>Por exemplo, se o endereço da fila for <em>support@acme.com</em>, um email enviado para <em>sales@acme.com</em> estiver nessa fila (talvez como um alias de email) e se esta definição estiver ativada, então, este email será obtido como se tivesse sido enviado para <em>support@acme.com</em>.<br/><br/>Se esta definição estiver desativada e não houver qualquer fila de email para <em>sales@acme.com</em>, o email será rejeitado. Se esta definição estiver desativada e houver qualquer fila de email para <em>sales@acme.com</em>, o email será capturado para essa fila de email.',
	'leavecopyonserver' => 'Deixar email no servidor após obtenção',
	'desc_leavecopyonserver' => 'Esta opção só é aplicável às caixas de correio IMAP. Quando ativada, o suporte técnico deixa uma cópia do email obtido no suporte técnico do servidor.',
	'nonssl' => 'Não SSL',
	'tls' => 'TLS',
	'ssl' => 'SSL',
	'sslv2' => 'SSL v2',
	'sslv3' => 'SSL v3',
	'usequeuesmtp' => 'Utilizar o mesmo servidor de email para enviar email',
	'desc_usequeuesmtp' => 'Ative esta definição para utilizar o servidor de email especificado acima como um servidor SMTP para envio, assim como para obtenção de email (tal como notificações de pedido de suporte para pedidos de suporte associados a esta fila de email).',
	'smtptype' => 'Tipo de ligação SMTP',
	'desc_smtptype' => 'Selecione o tipo de ligação do seu servidor SMTP. Caso não saiba, pergunte ao seu administrador de rede.',
	'next' => 'Seguinte',
	'back' => 'Anterior',
	'wineditemailqueue' => 'Editar fila de email',
	'tabticketsettings' => 'Opções de pedido de suporte',
	'tabpop3imap' => 'POP3/IMAP',
	'queueisenabled' => 'Fila de email ativada',
	'desc_queueisenabled' => 'Se a fila de email estiver desativada, deixará de obter emails para o suporte técnico. Se se tratar de um tipo de fila de email \'pipe\', o email será rejeitado silenciosamente.',
	'titlequeueinsert' => 'Fila de email criada',
	'msgqueueinsert' => 'A fila de email %s foi criada com sucesso.',
	'titlequeueupdate' =>'Fila de email atualizada',
	'msgqueueupdate' => 'A fila de email %s foi atualizada com sucesso.',
	'titledelqueues' => 'Filas de email eliminadas (%d)',
	'msgdelqueues' => 'As seguintes filas de email foram eliminadas:',
	'titlestaffemail' => 'Endereço de email já em utilização',
	'msgstaffemail' => 'O endereço de email já está a ser utilizado por um funcionário %s e não pode ser utilizado como um endereço de fila de email em simultâneo (pode provocar ciclos de email uma vez que o funcionário responderia do mesmo endereço de email do qual o suporte técnico está a obter email).',
	'verifyconnection' => 'Verificar ligação',
	'vcvariablesanity' => 'Verificar as informações do servidor de email da fila de email',
	'vcimapnotcompiled' => 'A instalação do PHP do seu servidor Web não inclui suporte a IMAP. Os utilizadores *nix devem recompilar o seu PHP com o sinalizador \'--with-imap\'; os utilizadores do Windows podem simplesmente remover os comentários da linha extension=\'php_imap.dll\' no seu ficheiro php.ini',
	'vcimapcompiled' => 'Suporte a IMAP detetado no seu servidor Web',
	'vcattemptconnection' => 'A tentar ligar ao servidor de email',
	'vcconnectionsuccess' => 'Parabéns! Ligação efetuada',
	'vctotalmessages' => 'Total de mensagens na caixa de correio: %d',
	'vcconnectionfailed' => 'Lamentamos, a caixa de correio não pôde ser alcançada:<BR />%s',
	'erremailqueuesame' => 'Email rejeitado, pois o endereço de email de origem é o igual ao endereço da fila de email no suporte técnico',

	'errloopcontrol' => 'Este email foi rejeitado, pois o controlo de ciclo está em vigor.',
	'errtoobig' => 'O tamanho máximo permitido de mensagem de %s foi excedido; tamanho da mensagem: %s',

	'mailparser' => 'Analisador de email',
	'desc_mailparser' => '',
	'queuelist' => 'Lista de fila de email',

	'insertemailqueue' => 'Inserir fila de email',
	'insertqueue' => 'Inserir fila',
	'queuenextstep' => 'Seguinte &raquo;',
	'emailgeneralfields' => 'Definições de fila de email',
	'emailimapfields' => 'Definições do servidor de email (apenas para caixa de correio POP3/IMAP)',
	'emailaddress' => 'Endereço da fila de email',
	'desc_emailaddress' => 'A fila de email identificará o email enviado para este endereço, por exemplo, <em>sales@acme.com</em>.',
	'emailtype' => 'Tipo de fila',
	'desc_emailtype' => '',
	'emailfetchtype' => 'Tipo de caixa de correio',
	'desc_emailfetchtype' => 'O tipo de caixa de correio ao qual esta fila de email se ligará e da qual transferirá email.',
	'fetchpipe' => 'Pipe',
	'fetchpop3' => 'POP3',
	'fetchpop3ssl' => 'POP3 SSL',
	'fetchimap' => 'IMAP',
	'fetchimapssl' => 'IMAP SSL',
	'emailhost' => 'Nome de anfitrião do servidor de email',
	'desc_emailhost' => 'O nome de anfitrião do servidor de email pode ser um endereço IP ou um nome de domínio. Por exemplo, <em>imap.gmail.com</em>.',
	'emailport' => 'Número da porta',
	'desc_emailport' => 'Normalmente, os servidores de email utilizam uma porta padrão, já especificada. Entre em contacto com o seu administrador de rede para confirmar.',
	'emailusername' => 'Nome de utilizador',
	'desc_emailusername' => 'O nome de utilizador que esta fila de email utilizará para se ligar a este servidor de email.',
	'emailpassword' => 'Palavra-passe',
	'desc_emailpassword' => 'A palavra-passe a utilizar com o nome de utilizador acima.',

	'queueoverrides' => 'Substituições de fila (opcional)',
	'queuefromname' => 'Nome De',
	'desc_queuefromname' => 'Todos os emails enviados associados a esta fila utilizarão este nome De, por exemplo: <em>Acme Inc Sales</em>.',
	'queuefromemail' => 'Endereço de email De',
	'desc_queuefromemail' => 'Todos os emails enviados associados a esta fila utilizarão este endereço de email De.',

	'queuesettings' => 'Definições da fila',
	'templategroup' => 'Grupo de modelos da fila',
	'desc_templategroup' => 'Selecione o grupo de modelos a utilizar para o email associado a esta fila.',
	'queuesignature' => 'Assinatura da fila (opcional)',
	'desc_queuesignature' => 'Se definida, todos os emails enviados associados a esta fila serão enviados com esta assinatura.',
	'registrationrequired' => 'Registo obrigatório',
	'desc_registrationrequired' => 'Apenas os emails de utilizadores registados com uma conta de utilizador existente serão aceites por esta fila de email.',
	'issueautoresponder' => 'Enviar nova resposta automática ao pedido de suporte',
	'desc_issueautoresponder' => 'Se ativado, o suporte técnico enviará uma resposta automática a confirmar a receção do email no suporte técnico.',
	'replyautoresponder' => 'Enviar resposta automática de resposta',
	'desc_replyautoresponder' => 'Se ativado, o suporte enviará uma resposta automática a confirmar a receção de uma nova resposta por email.',

	'ticketfields' => 'Propriedades do pedido de suporte',
	'queuedepartment' => 'Departamento',
	'desc_queuedepartment' => 'Os novos pedidos de suporte criados a partir do email enviado para esta fila serão criados neste departamento.',
	'queuetickettype' => 'Tipo de pedido de suporte',
	'desc_queuetickettype' => 'Este tipo de pedido de suporte será utilizado para novos pedidos de suporte criados a partir do email enviado para esta fila.',
	'queueticketstatus' => 'Estado',
	'desc_queueticketstatus' => 'Os novos pedidos de suporte criados a partir do email enviado para esta fila serão definidos com este estado.',
	'queuepriority' => 'Prioridade',
	'desc_queuepriority' => 'Os novos pedidos de suporte criados a partir do email enviado para esta fila serão definidos com esta prioridade. Não está relacionado com a prioridade do email.',
	'editemailqueue' => 'Editar fila de email',
	'emailqueues' => 'Filas de email',


	'queueprefix' => 'Prefixo do assunto do email da fila (opcional)',
	'desc_queueprefix' => 'Todas as mensagens enviadas associadas a esta fila serão antecedidas por este valor. Por exemplo, se <em>SUPPORT</em> for o prefixo, então, o assunto do email será algo como <em>[SUPPORT #ABC-12345]: Assunto do email</em>.',
	'titleinvalidqueueprefix' => 'Há algo errado com o prefixo do assunto',
	'msginvalidqueueprefix' => 'Só podem ser utilizados carateres alfanuméricos para prefixos de assunto. Tente novamente.',

	'titleenablequeues' => 'Filas de email ativadas (%d)',
	'msgenablequeues' => 'As seguintes filas de email foram ativadas:',
	'titledisablequeues' => 'Filas de email desativadas (%d)',
	'msgdisablequeues' => 'As seguintes filas de email foram desativadas:',

	// View Parser Log
	'viewparserlog' => 'Ver registo do analisador',
	'generalinformation' => 'Informações gerais',
	'mimedata' => 'Dados MIME',
	'ppticketid' => 'ID do pedido de suporte: ',
	'ppticketmaskid' => 'ID de máscara do pedido de suporte: ',
	'ppdate' => 'Data: ',
	'pptimeline' => 'Cronologia: ',
	'ppemailqueue' => 'Fila de email: ',
	'ppstatus' => 'Estado do processo: ',
	'ppsubject' => 'Assunto: ',
	'ppfromemail' => 'Endereço de email De: ',
	'pptoemail' => 'Endereço de email de destino: ',
	'ppsize' => 'Tamanho: ',
	'pptimetaken' => 'Tempo decorrido para análise: ',
	'ppdesc' => 'Descrição: ',
	'ppresult' => 'Resultado',
	'pparserlogid' => 'ID de registo do analisador de email: ',
	'parserlog' => 'Registo do analisador de email',
	'emailsubject' => 'Assunto do email',
	'emailsubjectresult' => 'Assunto do email e resultado',
	'emailsubresultformat' => '%s<br /><strong>Resultado:</strong> %s',
	'emailparsetime' => 'Tempo de análise',
	'emailto' => 'Email "Para:"',
	'nosubject' => '(Sem assunto)',

	// Parser Errors
	'errnoqueues' => 'O suporte técnico não tem filas de email para os destinatários de email',
	'errfloodprotection' => 'Proteção contra flood do suporte técnico acionada',
	'scccreatedticket' => 'Pedido de suporte n.º %s criado',
	'scccreatedreply' => 'Resposta n.º %s criada para o pedido de suporte n.º %s',
	'sctcreatedreply' => 'Resposta criada de terceiros n.º %s para pedido de suporte n.º %s',
	'scccreatedstaffreply' => 'Resposta do pessoal n.º %s criada para pedido de suporte n.º %s',
	'errusernotreg' => 'O remetente %s não é um utilizador registado. Esta fila de email não consegue processar email de utilizadores não registados.',
	'erremailbanned' => 'Endereço de email do remetente banido',
	'actionrepprefix' => 'Re: ',

	// Misc
	'reprocessemail' => 'Reprocessar email',

	// Loop Cutter
	'pr_mangelooprules' => 'Regras do bloqueador de ciclo',
	'pr_manageloopblockages' => 'Bloqueios de ciclo',
	'pr_loopblockages' => 'Bloqueios de ciclo',
	'pr_insert_new_loopcutter_rule_title' => 'Inserir regra do bloqueador de ciclo',
	'pr_edit_new_loopcutter_rule_title' => 'Editar regra do bloqueador de ciclo',
	'pr_threshhold_grid_timeframe_title' => 'Intervalo de tempo',
	'pr_threshhold_grid_maxhits_title' => 'Ocorrências máximas',
	'pr_threshhold_grid_restoreafter_title' => 'Desbloqueia após',
	'pr_threshhold_grid_address_title' => 'Endereço de email',
	'pr_newloopcontrolwatchlength_title' => 'Intervalo de tempo',
	'pr_newloopcontrolwatchlength_desc' => 'A janela de tempo em que o bloqueador de ciclo monitoriza possíveis ciclos, após a receção de um email.',
	'pr_newloopcontrolmaxcontacts_title' => 'Máximo de emails no intervalo de tempo',
	'pr_newloopcontrolmaxcontacts_desc' => 'Este número de emails acionará um bloqueio de ciclo e já não serão enviadas respostas automáticas para emails subsequentes.',
	'pr_newloopcontrolrestoreafter_title' => 'Remover bloqueio de ciclo após',
	'pr_newloopcontrolrestoreafter_desc' => 'O tempo em segundos após o qual um bloqueio de ciclo será desbloqueado.',
	'wineditloopcutterrule' => 'Editar regra do bloqueador de ciclo',
	'pr_threshhold_grid_title' => 'Título da regra',
	'thresholdruletitle' => 'Título da regra',
	'desc_thresholdruletitle' => 'Um título para a regra do bloqueador de ciclo.',
	'titledelloopblock' => 'Bloqueios de ciclo eliminados (%s)',
	'msgdelloopblock' => 'Os seguintes bloqueios de ciclo foram eliminados:',
	'titledellooprule' => 'Regras do bloqueador de ciclo eliminadas (%d)',
	'msgdellooprule' => 'As seguintes regras foram eliminadas:',
	'titleinsertlooprule' => 'Regra do bloqueador de ciclo criada',
	'msginsertlooprule' => 'Foi criada com sucesso uma nova regra de bloqueador de ciclo:',
	'titleupdatelooprule' => 'Regra do bloqueador de ciclo atualizada',
	'msgupdatelooprule' => 'The loop blocker rule was updated successfully:',
	'titlelooprulemasterdel' => 'Não foi possível eliminar as regras do bloqueador de ciclo',
	'msglooprulemasterdel' => 'As seguintes regras do bloqueador de ciclo principal não puderam ser eliminadas:',

	// Potentialy unused phrases in emailparser.php
	'titlefailedtocreatequeue' => 'Failed to create queue',
	'msgfailedtocreatequeue' => 'Unable to create a queue. Please check your database configuration and connectivity settings.',
	'queue_id_label' => 'ID',
	'managemailqueue' => 'Manage Email Queues',
	'invalidqueueaddress' => 'You must enter a valid email address for the queue.',
	'fetchpop3tls' => 'POP3 TLS',
	'fetchimaptls' => 'IMAP TLS',
	'errorlockfilefound' => '[ERROR]: Lock file found! (./files/parser.lockfile). A lock file has been found preventing further execution. If it is from a stale instance of cron then please delete the file in order to continue. To remove the file manually <a href="%s">click here</a>',
	'lockfileexpired' => '[WARNING]: Expired lock file (./files/parser.lockfile) from previous instance of cron found; automatically deleting...',
	'autorespondernotsent' => ' (Autoresponder not sent due to settings in effect)',
	'queuedetails' => 'Queue Details',
	'failedtocreatequeue' => 'ERROR: Failed to create email queue',
	'redirect_queueinsert' => 'Email queue inserted successfully.',
	'queueinsertconfirm' => 'Email queue "%s" inserted successfully',
	'depdeleteconfirm' => 'Email queue "%s" deleted successfully',
	'invalidemailqueue' => 'Invalid email queue specified',
	'queueupdconfirm' => 'Email queue "%s" updated successfully',
	'invalidparserlog' => 'Invalid parser log entry. Make sure that the parser log entry exists in the database and has not been deleted.',
	'desc_parserlog' => 'The mail parser logs all incoming email under the log with useful information to help debug any problems. To disable the logging of email or change other settings, navigate to <i>Settings > Mail Parser</i>.',
	'invalidqueueprefix' => 'Invalid queue prefix; only alphanumeric characters (e.g. A-Z, 0-9) and spaces are allowed.',
	'parserlogentry' => 'Parser Log #%s',
	'parserlogs' => 'Email Parser Logs',
	'emailstatus' => 'Status',
	'emailfrom' => '"From:" Email',
	'emaildescription' => 'Description',
	'emailticketid' => 'Ticket/Bug ID',
	'emailticketmaskid' => 'Ticket Mask ID',
	'emailcontents' => 'Email Contents',
	'breaklinelist' => 'Breakline List',
	'breakline' => 'Breakline',
	'desc_breakline' => 'Enter the contents of the breakline you wish to insert.<BR /><BR />Note: To use regular expressions, prepend your breakline with "regex:"<BR />Example: <i>"regex:@[-=]{4,}[^-=]+[-=]{4,}@"</i>',
	'breaklinedelconfirm' => 'Breakline deleted successfully',
	'breaklineinsertconfirm' => 'Breakline inserted successfully',
	'errnorecipients' => 'No recipients found',
	'errnofromemail' => 'No from email specified',
	'clearedduelimit' => '-- MIME data cleared due to the size limit under Settings > Parser --',
	'pr_loopcutter_prevents_autoresponder_desc' => ' (Autoresponder not sent due to loop control)',
	'pr_loopcontrolrules' => 'Loop Control Rules',
	'pr_new_loop_control_header_text' => 'New Loop Control',
	'pr_new_loop_control_rule_added_desc' => 'New loop control rule added.',
	'pr_desc_loopblockages_filler' => 'Below is a list of active loop blockages. The addresses listed here triggered one or more loop control rules (<i>Mail Parser >> Manage Loop Rules</i>).  Depending on the active settings (<i>Settings >> Mail Parser >> Loop Control Settings</i>), incoming email from these addresses may be completely ignored by Kayako and an autoresponder message may not be sent.  These settings will be in effect for each blockage until it expires.',
	'pr_desc_looprules_filler' => 'Below is a list of loop control rules.  These rules prevent autoresponder loops or other email flood situations and all incoming email messages are subjected to them.  If a rule is triggered, the settings (<i>Settings >> Mail Parser >> Loop Control Settings</i>) are applied.  This allows Kayako to completely ignore the message and/or not reply with an autoresponder message.  Blockages created by these rules are automatically removed after the specified timeframe.',
	'pr_loop_rule_deleted' => 'Rule deleted.',
	'pr_loop_block_deleted' => 'Blockage deleted.',
	'invalidlooprule' => 'Invalid Loop Cutter Rule. Please make sure the record exists in the database.',
	'notapplicable' => '-- NA --',

);
?>