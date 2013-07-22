<?php

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

?>

<?php register_sidebar(array(
    'id' => 'left-footer',
    'name' => 'Left footer widget',
    'description' => ' First widget area in the footer',
    'before_widget' => '<div id="footwidget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

?>

<?php register_sidebar(array(
    'id' => 'middle-footer',
    'name' => 'Middle footer widget',
    'description' => 'Second widget area in the footer',
    'before_widget' => '<div id="footwidget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

?>

<?php register_sidebar(array(
    'id' => 'right-footer',
    'name' => 'Right footer widget',
    'description' => 'Widget area in the footer',
    'before_widget' => '<div id="footwidget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

?>