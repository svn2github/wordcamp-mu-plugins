<?php

if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
	return;
}

require_once( __DIR__ . '/miscellaneous.php' );
require_once( __DIR__ . '/rest-api.php'      );
require_once( __DIR__ . '/rewrite-rules.php' );
require_once( __DIR__ . '/users.php'         );

WP_CLI::add_command( 'wc-misc',    'WordCamp_CLI_Miscellaneous' );
WP_CLI::add_command( 'wc-rewrite', 'WordCamp_CLI_Rewrite_Rules' );
WP_CLI::add_command( 'wc-rest',    'WordCamp_CLI_REST_API'      );
WP_CLI::add_command( 'wc-users',   'WordCamp_CLI_Users'         );
