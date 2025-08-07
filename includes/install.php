<?php

register_activation_hook(__FILE__,'quiz_table');

function quiz_table() {
global $wpdb;

$table_name=$wpdb->prefix . 'mmq_results';
$charset_collate=$wpdb->get_charset_collate();

$sql="CREATE TABLE $table_name (
id INT(3) NOT NULL AUTO_INCREMENT,
quiz_id INT NOT NULL,
user_name VARCHAR(50) NOT NULL,
score INT NOT NULL,
total INT NOT NULL,
submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);
}