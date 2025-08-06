<?php

add_action('admin_menu','mmq_admin');

function mmq_admin() {
add_menu_page (
'Make My Quiz',
'Make My Quiz',
'manage_options',
'make-my-quiz',
'',
'dashicons-welcome-write-blog',
4
);


add_submenu_page (
'make-my-quiz',
'Quizzes',
'Quizzes',
'manage_options',
'edit.php?post_type=quiz',
''
);

add_submenu_page (
'make-my-quiz',
'Add Questions',
'Add Questions',
'manage_options',
'edit.php?post_type=question',
''
);


add_submenu_page (
'make-my-quiz',
'Results',
'Results',
'manage_options',
'results',
'mmq_result'
);



remove_submenu_page('make-my-quiz','make-my-quiz');
}