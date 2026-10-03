<?php
require_once dirname(__DIR__) . '/config.php';

// Placeholder only. This lab does not open a real database connection.
function lab_db_dsn() {
    return 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
}
