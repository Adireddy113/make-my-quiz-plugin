<?php
/*
Plugin Name: Make My Quiz
Description: This is a simple and effective quiz plugin developed for beginner quiz creators to easily build and manage engaging quizzes.
Version: 1.0.0
Author: Adireddy
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: make-my-quiz
Domain Path: /languages
*/

defined('ABSPATH') or die('It is not possible to access this');

require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
require_once plugin_dir_path(__FILE__) . 'admin/mmq-result.php';
require_once plugin_dir_path(__FILE__) . 'admin/quiz-cpt.php';
require_once plugin_dir_path(__FILE__) . 'admin/question-cpt.php';
require_once plugin_dir_path(__FILE__) . 'public/display-quiz.php';
require_once plugin_dir_path(__FILE__) . 'public/handle-submission.php';
require_once plugin_dir_path(__FILE__) . 'includes/install.php';

register_activation_hook(__FILE__,'quiz_table');