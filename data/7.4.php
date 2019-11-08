<?php
return [
    'functions' => [
        'is_real' => 'is_float',
        'convert_cyr_string' => 'mb_convert_string',
        'money_format' => 'NumberFormatter',
        'ezmlm_hash',
        'restore_include_path' => 'ini_restore(\'include_path\')',
        'ldap_control_paged_result_response' => 'ldap_search',
        'ldap_control_paged_result' => 'ldap_search',
    ],
    'constants' => [
        /**
         * @see https://www.php.net/manual/en/migration74.incompatible.php#migration74.incompatible.curl
         */
        'CURLPIPE_HTTP1',
        'FILTER_SANITIZE_MAGIC_QUOTES' => 'FILTER_SANITIZE_ADD_SLASHES',
        'AI_IDN_ALLOW_UNASSIGNED',
        'AI_IDN_USE_STD3_ASCII_RULES',
    ],
    'ini_settings' => [
        /**
         * @see https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.allow-url-include
         */
        'allow_url_include',
    ],
    'functions_usage' => [
        /**
         * @see http://php.net/manual/en/migration73.deprecated.php#migration73.deprecated.core.ci-constant
         */
        'define' => '@define_case_insensitive',
    ],
    'identifiers' => [
        'fn',
    ],
];
