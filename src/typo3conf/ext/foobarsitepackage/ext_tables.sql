
            CREATE TABLE tx_foobarsitepackage_dbconfig (
                uid int(11) unsigned NOT NULL auto_increment,
                fieldKey varchar(64) DEFAULT '' NOT NULL,
                dbfield varchar(64) DEFAULT '' NOT NULL,
                dbtable varchar(64) DEFAULT '' NOT NULL,
                CType varchar(255) DEFAULT '' NOT NULL,
                infofield text,

                 UNIQUE KEY fieldKey (fieldKey,dbfield,dbtable) 
        );

            CREATE TABLE tx_foobarsitepackage_dbzuordnung (
                uid int(11) unsigned NOT NULL auto_increment,
                fieldKey varchar(64) DEFAULT '' NOT NULL,
                dbfield varchar(64) DEFAULT '' NOT NULL,
                dbtable varchar(64) DEFAULT '' NOT NULL,
                CType varchar(255) DEFAULT '' NOT NULL,
                configKey varchar(64) DEFAULT '' NOT NULL,
                infofield text,

                  UNIQUE KEY fieldKey (fieldKey,dbfield,dbtable) 
        );

            CREATE TABLE pages (
                nav_icon int(11) unsigned DEFAULT '0',
                thumbnail int(11) unsigned DEFAULT '0',
            );      
              
        

            CREATE TABLE sys_language (
                nav_title varchar(255) DEFAULT '' NOT NULL,
                locale varchar(20) DEFAULT '' NOT NULL,
                hreflang varchar(20) DEFAULT '' NOT NULL,
                direction varchar(3) DEFAULT '' NOT NULL,
            );     
               
        


            CREATE TABLE tt_content (
                tx_foobarsitepackage_inhblockitem int(11) unsigned DEFAULT '0',
                panel_class  varchar(255) DEFAULT '' NOT NULL,
                quote_source varchar(255) DEFAULT '' NOT NULL,
                quote_link varchar(1024) DEFAULT '' NOT NULL,
                subselectelement int(11) unsigned DEFAULT '0' NOT NULL,
        usr_txt_24 text, 
usr_txt_24 text, 
usr_txt_24 text, 
usr_txt_24 text, 
usr_txt_24 text, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_24 text, 
usr_txt_24 text, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_24 text, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_24 text, 
usr_txt_24 text, 
usr_txt_24 text, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_int_28 int(11) unsigned DEFAULT '0' NOT NULL, 

            );
        
        

            CREATE TABLE tx_foobarsitepackage_inhblockitem (
                uid int(11) unsigned NOT NULL auto_increment,
                pid int(11) DEFAULT '0' NOT NULL,
                tt_content int(11) unsigned DEFAULT '0',
                tstamp int(11) unsigned DEFAULT '0' NOT NULL,
                crdate int(11) unsigned DEFAULT '0' NOT NULL,
                cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
                deleted smallint unsigned DEFAULT '0' NOT NULL,
                hidden smallint unsigned DEFAULT '0' NOT NULL,
                starttime int(11) unsigned DEFAULT '0' NOT NULL,
                endtime int(11) unsigned DEFAULT '0' NOT NULL,
                sorting int(11) DEFAULT '0' NOT NULL,
                fe_group varchar(255) DEFAULT '' NOT NULL,
                CType varchar(255) DEFAULT '' NOT NULL,
                categories int(11) DEFAULT '0' NOT NULL,
                selected_categories text COLLATE utf8mb4_unicode_ci,
                category_field varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
                elemtype  varchar(255) DEFAULT '' NOT NULL,
                sys_language_uid int(11) DEFAULT '0' NOT NULL,
                l10n_mode int(11) DEFAULT '0' NOT NULL,
                l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
                l10n_diffsource mediumblob NULL,
                l10n_state text NULL,
                t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_id int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_label varchar(255) DEFAULT '' NOT NULL,
                t3ver_state smallint DEFAULT '0' NOT NULL,
                t3ver_stage int(11) DEFAULT '0' NOT NULL,
                t3ver_count int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_tstamp int(11) unsigned DEFAULT '0' NOT NULL,
                t3ver_move_id int(11) unsigned DEFAULT '0' NOT NULL,
                t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
                header varchar(255) DEFAULT '' NOT NULL,
            
        usr_int_7 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_7 text, 
usr_int_7 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_7 text, 
usr_int_7 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_7 text, 
usr_txt_7 text, 
usr_int_7 int(11) unsigned DEFAULT '0' NOT NULL, 
usr_txt_7 text, 

        
                PRIMARY KEY (uid),
                KEY parent (pid),
                KEY t3ver_oid (t3ver_oid,t3ver_wsid),
                KEY language (l10n_parent,sys_language_uid)
            );
        

