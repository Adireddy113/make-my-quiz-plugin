<?php

function mmq_cpt() {
register_post_type('quiz', array(
'labels'=>array (
'name'=>'Quizzes',
'singular_name'=>'Quiz',
'add_new_item'=>'Add New Quiz',
'edit_item'=>'Edit Quiz',
),

'public'=>true,
'has_archive'=>true,
'menu_icon'=>'dashicons-welcome-learn-more',
'supports'=>array('title'),
'rewrite'=>array('slug'=>'quiz'),
'show_in_menu'=>false
));
}

add_action('init','mmq_cpt');