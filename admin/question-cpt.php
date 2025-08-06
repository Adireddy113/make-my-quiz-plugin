<?php

function mmq_question() {

register_post_type('question',array (
'labels'=>array (
'name'=>'Questions',
'singular_name'=>'question',
'add_new_item'=>'Add New Question',
'edit_item'=>'Edit Question',
),

'public'=>true,
'has_archiev'=>false,
'show_in_menu'=>false,
'supports'=>array('title'),
'rewrite'=>array('slug'=>'question'),
'show_in_menu'=>false,

));
}

add_action('init','mmq_question');