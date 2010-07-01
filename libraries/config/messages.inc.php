<?php
/* $Id$ */
/**
 * Messages for phpMyAdmin.
 *
 * This file is here for easy transition to Gettext. You should not add any
 * new messages here, use instead gettext directly in your template/PHP
 * file.
 */

if (!function_exists('__')) {
    die('Bad invocation!');
}


$strSetupAllowAnywhereRecoding_name = __('Allow character set conversion');
$strSetupAllowArbitraryServer_desc = __('If enabled user can enter any MySQL server in login form for cookie auth');
$strSetupAllowArbitraryServer_name = __('Allow login to any MySQL server');
$strSetupAllowUserDropDatabase_name = __('Show &quot;Drop database&quot; link to normal users');
$strSetupblowfish_secret_desc = __('Secret passphrase used for encrypting cookies in [kbd]cookie[/kbd] authentication');
$strSetupblowfish_secret_name = __('Blowfish secret');
$strSetupBrowseMarkerEnable_desc = __('Highlight selected rows');
$strSetupBrowseMarkerEnable_name = __('Row marker');
$strSetupBrowsePointerEnable_desc = __('Highlight row pointed by the mouse cursor');
$strSetupBrowsePointerEnable_name = __('Highlight pointer');
$strSetupBZipDump_desc = __('Enable [a@http://en.wikipedia.org/wiki/Bzip2]bzip2[/a] compression for import and export operations');
$strSetupBZipDump_name = __('Bzip2');
$strSetupCharEditing_desc = __('Defines which type of editing controls should be used for CHAR and VARCHAR columns; [kbd]input[/kbd] - allows limiting of input length, [kbd]textarea[/kbd] - allows newlines in columns');
$strSetupCharEditing_name = __('CHAR columns editing');
$strSetupCharTextareaCols_desc = __('Number of columns for CHAR/VARCHAR textareas');
$strSetupCharTextareaCols_name = __('CHAR textarea columns');
$strSetupCharTextareaRows_desc = __('Number of rows for CHAR/VARCHAR textareas');
$strSetupCharTextareaRows_name = __('CHAR textarea rows');
$strSetupCheckConfigurationPermissions_name = __('Check config file permissions');
$strSetupCompressOnFly_desc = __('Compress gzip/bzip2 exports on the fly without the need for much memory; if you encounter problems with created gzip/bzip2 files disable this feature');
$strSetupCompressOnFly_name = __('Compress on the fly');
$strSetupConfigurationFile = __('Configuration file');
$strSetupConfirm_desc = __('Whether a warning (&quot;Are your really sure...&quot;) should be displayed when you\'re about to lose data');
$strSetupConfirm_name = __('Confirm DROP queries');
$strSetupCtrlArrowsMoving_name = __('Field navigation using Ctrl+Arrows');
$strSetupDefaultCharset_desc = __('Default character set used for conversions');
$strSetupDefaultCharset_name = __('Default character set');
$strSetupDefaultDisplay_name = __('Default display direction');
$strSetupDefaultLanguage = __('Default language');
$strSetupDefaultPropDisplay_name = __('Display direction for altering/creating columns');
$strSetupDefaultPropDisplay_desc = __('[kbd]horizontal[/kbd], [kbd]vertical[/kbd] or a number that indicates maximum number for which vertical model is used');
$strSetupDefaultServer = __('Default server');
$strSetupDefaultTabDatabase_desc = __('Tab that is displayed when entering a database');
$strSetupDefaultTabDatabase_name = __('Default database tab');
$strSetupDefaultTabServer_desc = __('Tab that is displayed when entering a server');
$strSetupDefaultTabServer_name = __('Default server tab');
$strSetupDefaultTabTable_desc = __('Tab that is displayed when entering a table');
$strSetupDefaultTabTable_name = __('Default table tab');
$strSetupDisplayBinaryAsHex_name = __('Show binary contents as HEX');
$strSetupDisplayBinaryAsHex_desc = __('Show binary contents as HEX by default');
$strSetupDisplayDatabasesList_desc = __('Show database listing as a list instead of a drop down');
$strSetupDisplayDatabasesList_name = __('Display databases as a list');
$strSetupDisplay = __('Display');
$strSetupDisplayServersList_desc = __('Show server listing as a list instead of a drop down');
$strSetupDisplayServersList_name = __('Display servers as a list');
$strSetupDonateLink = __('Donate');
$strSetupDownload = __('Download');
$strSetupEditInWindow_name = __('Edit in window');
$strSetupEditInWindow_desc = __('Edit SQL queries in popup window');
$strSetupEndOfLine = __('End of line');
$strSetupErrorIconic_name = __('Iconic errors');
$strSetupErrorIconic_desc = __('Show icons for warning, error and information messages');
$strSetupExecTimeLimit_desc = __('Set the number of seconds a script is allowed to run ([kbd]0[/kbd] for no limit)');
$strSetupExecTimeLimit_name = __('Maximum execution time');
$strSetupExport_asfile_name = __('Save as file');
$strSetupExport_charset_name = __('Character set of the file');
$strSetupExport_compression_name = __('Compression');
$strSetupExport_file_template_database_name = __('Database name template');
$strSetupExport_file_template_server_name = __('Server name template');
$strSetupExport_file_template_table_name = __('Table name template');
$strSetupExport_format_name = __('Format');
$strSetupExport_onserver_name = __('Save on server');
$strSetupExport_onserver_overwrite_name = __('Overwrite existing file(s)');
$strSetupExport_remember_file_template_name = __('Remember file name template');
$strSetupForceSSL_desc = __('Force secured connection while using phpMyAdmin');
$strSetupForceSSL_name = __('Force SSL connection');
$strSetupForeignKeyDropdownOrder_desc = __('Sort order for items in a foreign-key dropdown box; [kbd]content[/kbd] is the referenced data, [kbd]id[/kbd] is the key value');
$strSetupForeignKeyDropdownOrder_name = __('Foreign key dropdown order');
$strSetupForeignKeyMaxLimit_desc = __('A dropdown will be used if fewer items are present');
$strSetupForeignKeyMaxLimit_name = __('Foreign key limit');
$strSetupForm_Browse = __('Browse mode');
$strSetupForm_Browse_desc = __('Customize browse mode');
$strSetupForm_Csv = __('CSV');
$strSetupForm_Csv_desc = __('Customize default options');
$strSetupForm_Edit_desc = __('Customize edit mode');
$strSetupForm_Edit = __('Edit mode');
$strSetupForm_Excel = __('Excel Workbook');
$strSetupForm_Excel_desc = __('Customize default options');
$strSetupForm_Export_defaults_desc = __('Customize default export options');
$strSetupForm_Export_defaults = __('Export defaults');
$strSetupForm_General = __('General settings');
$strSetupForm_Import_defaults_desc = __('Customize default common import options');
$strSetupForm_Import_defaults = __('Import defaults');
$strSetupForm_Import_export_desc = __('Set import and export directories and compression options');
$strSetupForm_Import_export = __('Import / export');
$strSetupForm_Ldi = __('CSV using LOAD DATA');
$strSetupForm_Ldi_desc = __('Customize default options');
$strSetupForm_Left_databases = __('Databases');
$strSetupForm_Left_databases_desc = __('Databases display options');
$strSetupForm_Left_frame_desc = __('Customize appearance of the navigation frame');
$strSetupForm_Left_frame = __('Navigation frame');
$strSetupForm_Left_servers_desc = __('Servers display options');
$strSetupForm_Left_servers = __('Servers');
$strSetupForm_Left_tables_desc = __('Tables display options');
$strSetupForm_Left_tables = __('Tables');
$strSetupForm_Main_frame = __('Main frame');
$strSetupForm_Ods = __('Open Document Spreadsheet');
$strSetupForm_Ods_desc = __('Customize default options');
$strSetupForm_Other_core_settings_desc = __('Settings that didn\'t fit enywhere else');
$strSetupForm_Other_core_settings = __('Other core settings');
$strSetupForm_Query_window_desc = __('Customize query window options');
$strSetupForm_Query_window = __('Query window');
$strSetupForm_Page_titles = __('Page titles');
$strSetupForm_Page_titles_desc = __('Specify browser\'s title bar text. Refer to [a@Documentation.html#cfg_TitleTable]documentation[/a] for magic strings that can be used to get special values.');
$strSetupForm_Sql = __('SQL');
$strSetupForm_Sql_desc = __('Customize default options');
$strSetupForm_Security_desc = __('Please note that phpMyAdmin is just a user interface and its features do not limit MySQL');
$strSetupForm_Security = __('Security');
$strSetupForm_Server = __('Basic settings');
$strSetupForm_Server_config_desc = __('Advanced server configuration, do not change these options unless you know what they are for');
$strSetupForm_Server_config = __('Server configuration');
$strSetupForm_Server_desc = __('Enter server connection parameters');
$strSetupForm_Server_login_options_desc = __('Enter login options for signon authentication');
$strSetupForm_Server_login_options = __('Signon login options');
$strSetupForm_Server_pmadb_desc = __('Configure phpMyAdmin database to gain access to additional features, see [a@Documentation.html#linked-tables]linked-tables infrastructure[/a] in documentation');
$strSetupForm_Server_pmadb = __('PMA database');
$strSetupForm_Server_tracking_desc = __('Tracking of changes made in database. Requires configured PMA database.');
$strSetupForm_Server_tracking = __('Changes tracking');
$strSetupFormset_Export = __('Customize export options');
$strSetupFormset_Features = __('Features');
$strSetupFormset_Import = __('Customize import defaults');
$strSetupFormset_Left_frame = __('Customize navigation frame');
$strSetupFormset_Main_frame = __('Customize main frame');
$strSetupForm_Sql_box_desc = __('Customize links shown in SQL Query boxes');
$strSetupForm_Sql_box = __('SQL Query box');
$strSetupForm_Sql_queries_desc = __('SQL queries settings, for SQL Query box options see [a@?page=form&amp;formset=Main_frame#tab_Sql_box]Navigation frame[/a] settings');
$strSetupForm_Sql_queries = __('SQL queries');
$strSetupForm_Startup_desc = __('Customize startup page');
$strSetupForm_Startup = __('Startup');
$strSetupForm_Tabs_desc = __('Choose how you want tabs to work');
$strSetupForm_Tabs = __('Tabs');
$strSetupGZipDump_desc = __('Enable [a@http://en.wikipedia.org/wiki/Gzip]gzip[/a] compression for import and export operations');
$strSetupGZipDump_name = __('GZip');
$strSetupIconvExtraParams_name = __('Extra parameters for iconv');
$strSetupIgnoreErrors = __('Ignore errors');
$strSetupIgnoreMultiSubmitErrors_desc = __('If enabled, phpMyAdmin continues computing multiple-statement queries even if one of the queries failed');
$strSetupIgnoreMultiSubmitErrors_name = __('Ignore multiple statement errors');
$strSetupImport_allow_interrupt_desc = __('Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.');
$strSetupImport_allow_interrupt_name = __('Partial import: allow interrupt');
$strSetupImport_csv_replace_name = __('Replace table data with file');
$strSetupImport_csv_ignore_name = __('Ignore duplicate rows');
$strSetupImport_csv_terminated_name = __('Columns terminated by');
$strSetupImport_csv_enclosed_name = __('Columns enclosed by');
$strSetupImport_csv_escaped_name = __('Columns escaped by');
$strSetupImport_csv_col_names_name = __('Lines terminated by');
$strSetupImport_format_desc = __('Default format; be aware that this list depends on location (database, table) and only SQL is always available');
$strSetupImport_format_name = __('Format of imported file');
$strSetupImport_ldi_replace_name = __('Replace table data with file');
$strSetupImport_ldi_ignore_name = __('Ignore duplicate rows');
$strSetupImport_ldi_terminated_name = __('Columns terminated by');
$strSetupImport_ldi_enclosed_name = __('Columns enclosed by');
$strSetupImport_ldi_escaped_name = __('Columns escaped by');
$strSetupImport_ldi_local_option_name = __('Use LOCAL keyword');
$strSetupImport_ods_col_names_name = __('Column names in first row');
$strSetupImport_ods_empty_rows_name = __('Do not import empty rows');
$strSetupImport_ods_recognize_percentages_name = __('Import percentages as proper decimals (12.00% to .12)');
$strSetupImport_ods_recognize_currency_name = __('Import currencies ($5.00 to 5.00)');
$strSetupImport_sql_compatibility_name = __('SQL compatibility mode');
$strSetupImport_sql_no_auto_value_on_zero_name = __('Do not use AUTO_INCREMENT for zero values');
$strSetupImport_skip_queries_desc = __('Number of queries to skip from start');
$strSetupImport_skip_queries_name = __('Partial import: skip queries');
$strSetupImport_xls_col_names_name = __('Column names in first row') . ' (Excel 97-2003)';
$strSetupImport_xlsx_col_names_name = __('Column names in first row') . ' (Excel 2007+)';
$strSetupInitialSlidersState_name = __('Initial state for sliders');
$strSetupInsertRows_desc = __('How many rows can be inserted at one time');
$strSetupInsertRows_name = __('Number of inserted rows');
$strSetupLeftDefaultTabTable_name = __('Target for quick access icon');
$strSetupLeftDisplayLogo_desc = __('Show logo in left frame');
$strSetupLeftDisplayLogo_name = __('Display logo');
$strSetupLeftDisplayServers_desc = __('Display server choice at the top of the left frame');
$strSetupLeftDisplayServers_name = __('Display servers selection');
$strSetupLeftFrameDBSeparator_desc = __('String that separates databases into different tree levels');
$strSetupLeftFrameDBSeparator_name = __('Database tree separator');
$strSetupLeftFrameDBTree_desc = __('Only light version; display databases in a tree (determined by the separator defined below)');
$strSetupLeftFrameDBTree_name = __('Display databases in a tree');
$strSetupLeftFrameLight_desc = __('Disable this if you want to see all databases at once');
$strSetupLeftFrameLight_name = __('Use light version');
$strSetupLeftFrameTableLevel_name = __('Maximum table tree depth');
$strSetupLeftFrameTableSeparator_desc = __('String that separates tables into different tree levels');
$strSetupLeftFrameTableSeparator_name = __('Table tree separator');
$strSetupLeftLogoLink_name = __('Logo link URL');
$strSetupLeftLogoLinkWindow_desc = __('Open the linked page in the main window ([kbd]main[/kbd]) or in a new one ([kbd]new[/kbd])');
$strSetupLeftLogoLinkWindow_name = __('Logo link target');
$strSetupLeftPointerEnable_desc = __('Highlight server under the mouse cursor');
$strSetupLeftPointerEnable_name = __('Enable highlighting');
$strSetupLetUserChoose = __('let the user choose');
$strSetupLightTabs_desc = __('Use less graphically intense tabs');
$strSetupLightTabs_name = __('Light tabs');
$strSetupLimitChars_name = __('Limit column characters');
$strSetupLimitChars_desc = __('Maximum number of characters shown in any non-numeric column on browse view');
$strSetupLoginCookieDeleteAll_desc = __('If TRUE, logout deletes cookies for all servers; when set to FALSE, logout only occurs for the current server. Setting this to FALSE makes it easy to forget to log out from other servers when connected to multiple servers.');
$strSetupLoginCookieDeleteAll_name = __('Delete all cookies on logout');
$strSetupLoginCookieRecall_desc = __('Define whether the previous login should be recalled or not in cookie authentication mode');
$strSetupLoginCookieRecall_name = __('Recall user name');
$strSetupLoginCookieStore_desc = __('Defines how long (in seconds) a login cookie should be stored in browser. The default of 0 means that it will be kept for the existing session only, and will be deleted as soon as you close the browser window. This is recommended for non-trusted environments.');
$strSetupLoginCookieStore_name = __('Login cookie store');
$strSetupLoginCookieValidity_desc = __('Define how long (in seconds) a login cookie is valid');
$strSetupLoginCookieValidity_name = __('Login cookie validity');
$strSetupLongtextDoubleTextarea_name = __('Bigger textarea for LONGTEXT');
$strSetupLongtextDoubleTextarea_desc = __('Double size of textarea for LONGTEXT fields');
$strSetupMainPageIconic_name = __('Use icons on main page');
$strSetupMaxCharactersInDisplayedSQL_desc = __('Maximum number of characters used when a SQL query is displayed');
$strSetupMaxCharactersInDisplayedSQL_name = __('Maximum displayed SQL length');
$strSetupMaxDbList_desc = __('Maximum number of databases displayed in left frame and database list');
$strSetupMaxDbList_name = __('Maximum databases');
$strSetupMaxRows_desc = __('Number of rows displayed when browsing a result set. If the result set contains more rows, &quot;Previous&quot; and &quot;Next&quot; links will be shown.');
$strSetupMaxRows_name = __('Maximum number of rows to display');
$strSetupMaxTableList_desc = __('Maximum number of tables displayed in table list');
$strSetupMaxTableList_name = __('Maximum tables');
$strSetupMemoryLimit_desc = __('The number of bytes a script is allowed to allocate, eg. [kbd]32M[/kbd] ([kbd]0[/kbd] for no limit)');
$strSetupMemoryLimit_name = __('Memory limit');
$strSetupModifyDeleteAtLeft_name = __('Show left delete link');
$strSetupModifyDeleteAtRight_name = __('Show right delete link');
$strSetupNaturalOrder_name = __('Natural order');
$strSetupNaturalOrder_desc = __('Use natural order for sorting table and database names');
$strSetupNavigationBarIconic_desc = __('Use only icons, only text or both');
$strSetupNavigationBarIconic_name = __('Iconic navigation bar');
$strSetupOBGzip_desc = __('use GZip output buffering for increased speed in HTTP transfers');
$strSetupOBGzip_name = __('GZip output buffering');
$strSetupOptionNone = __('- none -');
$strSetupOrder_desc = __('[kbd]SMART[/kbd] - i.e. descending order for columns of type TIME, DATE, DATETIME and TIMESTAMP, ascending order otherwise');
$strSetupOrder_name = __('Default sorting order');
$strSetupPersistentConnections_desc = __('Use persistent connections to MySQL databases');
$strSetupPersistentConnections_name = __('Persistent connections');
$strSetupPropertiesIconic_desc = __('Use only icons, only text or both');
$strSetupPropertiesIconic_name = __('Iconic table operations');
$strSetupProtectBinary_desc = __('Disallow BLOB and BINARY columns from editing');
$strSetupProtectBinary_name = __('Protect binary columns');
$strSetupRepeatCells_name = __('Repeat headers');
$strSetupRepeatCells_desc = __('Repeat the headers every X cells, [kbd]0[/kbd] deactivates this feature');
$strSetupQueryHistoryDB_desc = __('Enable if you want DB-based query history (requires pmadb). If disabled, this utilizes JS-routines to display query history (lost by window close).');
$strSetupQueryHistoryDB_name = __('Permanent query history');
$strSetupQueryHistoryMax_desc = __('How many queries are kept in history');
$strSetupQueryHistoryMax_name = __('Query history length');
$strSetupQueryWindowDefTab_desc = __('Tab displayed when opening a new query window');
$strSetupQueryWindowDefTab_name = __('Default query window tab');
$strSetupQueryWindowHeight_name = __('Query window height');
$strSetupQueryWindowHeight_desc = __('Query window height (in pixels)');
$strSetupQueryWindowWidth_name = __('Query window width');
$strSetupQueryWindowWidth_desc = __('Query window height (in pixels)');
$strSetupRecodingEngine_desc = __('Select which functions will be used for character set conversion');
$strSetupRecodingEngine_name = __('Recoding engine');
$strSetupReplaceHelpImg_name = __('Show help button');
$strSetupReplaceHelpImg_desc = __('Show help button instead of Documentation text');
$strSetupRestoreDefaultValue = __('Restore default value');
$strSetupRevertErroneousFields = __('Try to revert erroneous fields to their default values');
$strSetupSaveDir_desc = __('Directory where exports can be saved on server');
$strSetupSaveDir_name = __('Save directory');
$strSetupServers_AllowDeny_order_desc = __('Leave blank if not used');
$strSetupServers_AllowDeny_order_name = __('Host authentication order');
$strSetupServers_AllowDeny_rules_desc = __('Leave blank for defaults');
$strSetupServers_AllowDeny_rules_name = __('Host authentication rules');
$strSetupServers_AllowNoPassword_name = __('Allow logins without a password');
$strSetupServers_AllowRoot_name = __('Allow root login');
$strSetupServers_auth_http_realm_desc = __('HTTP Basic Auth Realm name to display when doing HTTP Auth');
$strSetupServers_auth_http_realm_name = __('HTTP Realm');
$strSetupServers_auth_swekey_config_desc = __('The path for the config file for [a@http://swekey.com]SweKey hardware authentication[/a] (not located in your document root; suggested: /etc/swekey.conf)');
$strSetupServers_auth_swekey_config_name = __('SweKey config file');
$strSetupServers_auth_type_desc = __('Authentication method to use');
$strSetupServers_auth_type_name = __('Authentication type');
$strSetupServers_bookmarktable_desc = __('Leave blank for no [a@http://wiki.phpmyadmin.net/pma/bookmark]bookmark[/a] support, suggested: [kbd]pma_bookmark[/kbd]');
$strSetupServers_bookmarktable_name = __('Bookmark table');
$strSetupServers_column_info_desc = __('Leave blank for no column comments/mime types, suggested: [kbd]pma_column_info[/kbd]');
$strSetupServers_column_info_name = __('Column information table');
$strSetupServers_compress_desc = __('Compress connection to MySQL server');
$strSetupServers_compress_name = __('Compress connection');
$strSetupServers_connect_type_desc = __('How to connect to server, keep [kbd]tcp[/kbd] if unsure');
$strSetupServers_connect_type_name = __('Connection type');
$strSetupServers_controlpass_name = __('Control user password');
$strSetupServers_controluser_desc = __('A special MySQL user configured with limited permissions, more information available on [a@http://wiki.phpmyadmin.net/pma/controluser]wiki[/a]');
$strSetupServers_controluser_name = __('Control user');
$strSetupServers_CountTables_desc = __('Count tables when showing database list');
$strSetupServers_CountTables_name = __('Count tables');
$strSetupServers_designer_coords_desc = __('Leave blank for no Designer support, suggested: [kbd]pma_designer_coords[/kbd]');
$strSetupServers_designer_coords_name = __('Designer table');
$strSetupServers_DisableIS_desc = __('More information on [a@http://sf.net/support/tracker.php?aid=1849494]PMA bug tracker[/a] and [a@http://bugs.mysql.com/19588]MySQL Bugs[/a]');
$strSetupServers_DisableIS_name = __('Disable use of INFORMATION_SCHEMA');
$strSetupServers_extension_desc = __('What PHP extension to use; you should use mysqli if supported');
$strSetupServers_extension_name = __('PHP extension to use');
$strSetupServers_hide_db_desc = __('Hide databases matching regular expression (PCRE)');
$strSetupServers_hide_db_name = __('Hide databases');
$strSetupServers_history_desc = __('Leave blank for no SQL query history support, suggested: [kbd]pma_history[/kbd]');
$strSetupServers_history_name = __('SQL query history table');
$strSetupServers_tracking_desc = __('Leave blank for no SQL query tracking support, suggested: [kbd]pma_tracking[/kbd]');
$strSetupServers_tracking_name = __('SQL query tracking table');
$strSetupServers_host_desc = __('Hostname where MySQL server is running');
$strSetupServers_host_name = __('Server hostname');
$strSetupServers_LogoutURL_name = __('Logout URL');
$strSetupServers_nopassword_desc = __('Try to connect without password');
$strSetupServers_nopassword_name = __('Connect without password');
$strSetupServers_only_db_desc = __('You can use MySQL wildcard characters (% and _), escape them if you want to use their literal instances, i.e. use \'my\_db\' and not \'my_db\'');
$strSetupServers_only_db_name = __('Show only listed databases');
$strSetupServers_password_desc = __('Leave empty if not using config auth');
$strSetupServers_password_name = __('Password for config auth');
$strSetupServers_pdf_pages_desc = __('Leave blank for no PDF schema support, suggested: [kbd]pma_pdf_pages[/kbd]');
$strSetupServers_pdf_pages_name = __('PDF schema: pages table');
$strSetupServers_pmadb_desc = __('Database used for relations, bookmarks, and PDF features. See [a@http://wiki.phpmyadmin.net/pma/pmadb]pmadb[/a] for complete information. Leave blank for no support. Suggested: [kbd]phpmyadmin[/kbd]');
$strSetupServers_pmadb_name = __('PMA database');
$strSetupServers_port_desc = __('Port on which MySQL server is listening, leave empty for default');
$strSetupServers_port_name = __('Server port');
$strSetupServers_relation_desc = __('Leave blank for no [a@http://wiki.phpmyadmin.net/pma/relation]relation-links[/a] support, suggested: [kbd]pma_relation[/kbd]');
$strSetupServers_relation_name = __('Relation table');
$strSetupServers_ShowDatabasesCommand_desc = __('SQL command to fetch available databases');
$strSetupServers_ShowDatabasesCommand_name = __('SHOW DATABASES command');
$strSetupServers_SignonSession_desc = __('See [a@http://wiki.phpmyadmin.net/pma/auth_types#signon]authentication types[/a] for an example');
$strSetupServers_SignonSession_name = __('Signon session name');
$strSetupServers_SignonURL_name = __('Signon URL');
$strSetupServers_tracking_version_auto_create_desc = __('Whether the tracking mechanism creates versions for tables and views automatically.');
$strSetupServers_tracking_version_auto_create_name = __('Automatically create versions');
$strSetupServers_tracking_default_statements_desc = __('Defines the list of statements the auto-creation uses for new versions.');
$strSetupServers_tracking_default_statements_name = __('Statements to track');
$strSetupServers_tracking_add_drop_view_desc = __('Whether a DROP VIEW IF EXISTS statement will be added as first line to the log when creating a view.');
$strSetupServers_tracking_add_drop_view_name = __('Add DROP VIEW');
$strSetupServers_tracking_add_drop_table_desc = __('Whether a DROP TABLE IF EXISTS statement will be added as first line to the log when creating a table.');
$strSetupServers_tracking_add_drop_table_name = __('Add DROP TABLE');
$strSetupServers_tracking_add_drop_database_desc = __('Whether a DROP DATABASE IF EXISTS statement will be added as first line to the log when creating a database.');
$strSetupServers_tracking_add_drop_database_name = __('Add DROP DATABASE');
$strSetupServers_socket_desc = __('Socket on which MySQL server is listening, leave empty for default');
$strSetupServers_socket_name = __('Server socket');
$strSetupServers_ssl_desc = __('Enable SSL for connection to MySQL server');
$strSetupServers_ssl_name = __('Use SSL');
$strSetupServers_table_coords_desc = __('Leave blank for no PDF schema support, suggested: [kbd]pma_table_coords[/kbd]');
$strSetupServers_table_coords_name = __('PDF schema: table coordinates');
$strSetupServers_table_info_desc = __('Table to describe the display columns, leave blank for no support; suggested: [kbd]pma_table_info[/kbd]');
$strSetupServers_table_info_name = __('Display columns table');
$strSetupServers_user_desc = __('Leave empty if not using config auth');
$strSetupServers_user_name = __('User for config auth');
$strSetupServers_userconfig_name = __('User preferences storage table');
$strSetupServers_userconfig_desc = __('Leave blank for no user preferences storage in database, suggested: [kbd]pma_config[/kbd]');
$strSetupServers_verbose_check_desc = __('Disable if you know that your pma_* tables are up to date. This prevents compatibility checks and thereby increases performance');
$strSetupServers_verbose_check_name = __('Verbose check');
$strSetupServers_verbose_desc = __('A user-friendly description of this server. Leave blank to display the hostname instead.');
$strSetupServers_verbose_name = __('Verbose name of this server');
$strSetupShowAll_desc = __('Whether a user should be displayed a &quot;show all (rows)&quot; button');
$strSetupShowAll_name = __('Allow to display all the rows');
$strSetupShowChgPassword_desc = __('Please note that enabling this has no effect with [kbd]config[/kbd] authentication mode because the password is hard coded in the configuration file; this does not limit the ability to execute the same command directly');
$strSetupShowChgPassword_name = __('Show password change form');
$strSetupShowCreateDb_name = __('Show create database form');
$strSetupShowFieldTypesInDataEditView_name = __('Show field types');
$strSetupShowFieldTypesInDataEditView_desc = __('Defines whether or not type fields should be initially displayed in edit/insert mode');
$strSetupShowForm = __('Show form');
$strSetupShowFunctionFields_desc = __('Display the function fields in edit/insert mode');
$strSetupShowFunctionFields_name = __('Show function fields');
$strSetupShowHiddenMessages = __('Show hidden messages (#MSG_COUNT)');
$strSetupShowPhpInfo_desc = __('Shows link to [a@http://php.net/manual/function.phpinfo.php]phpinfo()[/a] output');
$strSetupShowPhpInfo_name = __('Show phpinfo() link');
$strSetupShowServerInfo_name = __('Show detailed MySQL server information');
$strSetupShowSQL_desc = __('Defines whether SQL queries generated by phpMyAdmin should be displayed');
$strSetupShowSQL_name = __('Show SQL queries');
$strSetupShowStats_desc = __('Allow to display database and table statistics (eg. space usage)');
$strSetupShowStats_name = __('Show statistics');
$strSetupShowTooltipAliasDB_desc = __('If tooltips are enabled and a database comment is set, this will flip the comment and the real name');
$strSetupShowTooltipAliasDB_name = __('Display database comment instead of its name');
$strSetupShowTooltipAliasTB_desc = __('When setting this to [kbd]nested[/kbd], the alias of the table name is only used to split/nest the tables according to the $cfg[\'LeftFrameTableSeparator\'] directive, so only the folder is called like the alias, the table name itself stays unchanged');
$strSetupShowTooltipAliasTB_name = __('Display table comment instead of its name');
$strSetupShowTooltip_name = __('Display table comments in tooltips');
$strSetupSkipLockedTables_desc = __('Mark used tables and make it possible to show databases with locked tables');
$strSetupSkipLockedTables_name = __('Skip locked tables');
$strSetupSQLQuery_Edit_name = __('Edit');
$strSetupSQLQuery_Explain_name = __('Explain SQL');
$strSetupSQLQuery_Refresh_name = __('Refresh');
$strSetupSQLQuery_ShowAsPHP_name = __('Create PHP Code');
$strSetupSQLQuery_Validate_name = __('Validate SQL');
$strSetupSuggestDBName_desc = __('Suggest a database name on the &quot;Create Database&quot; form (if possible) or keep the text field empty');
$strSetupSuggestDBName_name = __('Suggest new database name');
$strSetupTextareaCols_name = __('Textarea columns');
$strSetupTextareaCols_desc = __('Textarea size (columns) in edit mode, this value will be emphasized for SQL query textareas (*2) and for query window (*1.25)');
$strSetupTextareaRows_name = __('Textarea rows');
$strSetupTitleDefault_name = __('Default title');
$strSetupTitleDefault_desc = __('Title of browser window when nothing is selected');
$strSetupTitleTable_name = __('Table');
$strSetupTitleTable_desc = __('Title of browser window when a table is selected');
$strSetupTitleDatabase_name = __('Database');
$strSetupTitleDatabase_desc = __('Title of browser window when a database is selected');
$strSetupTitleServer_name = __('Server');
$strSetupTitleServer_desc = __('Title of browser window when a server is selected');
$strSetupTrustedProxies_desc = __('Input proxies as [kbd]IP: trusted HTTP header[/kbd]. The following example specifies that phpMyAdmin should trust a HTTP_X_FORWARDED_FOR (X-Forwarded-For) header coming from the proxy 1.2.3.4:[br][kbd]1.2.3.4: HTTP_X_FORWARDED_FOR[/kbd]');
$strSetupTrustedProxies_name = __('List of trusted proxies for IP allow/deny');
$strSetupUploadDir_desc = __('Directory on server where you can upload files for import');
$strSetupUploadDir_name = __('Upload directory');
$strSetupUseDbSearch_desc = __('Allow for searching inside the entire database');
$strSetupUseDbSearch_name = __('Use database search');
$strSetupVerboseMultiSubmit_desc = __('Show affected rows of each statement on multiple-statement queries. See libraries/import.lib.php for defaults on how many queries a statement may contain.');
$strSetupVerboseMultiSubmit_name = __('Verbose multiple statements');
$strSetupVersionCheckLink = __('Check for latest version');
$strSetupZipDump_desc = __('Enable [a@http://en.wikipedia.org/wiki/ZIP_(file_format)]ZIP[/a] compression for import and export operations');
$strSetupZipDump_name = __('ZIP');

?>