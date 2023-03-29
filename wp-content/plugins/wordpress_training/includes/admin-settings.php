<?php
function wordpresstraining_setting_init()
{
    register_setting('wordpresstraining_settings_page',"wordpresstraining_setting_options");

    $id='wordpresstraining_settings_section_shop_info';
    $title = 'Thông tin cửa hàng';
    $callback = '';
    $page = 'wordpresstraining_settings_page';
    add_settings_section($id, $title, $callback, $page);


    add_settings_field('wordpresstraining_settings_field_name',
     'Tên cửa hàng', 'wordpresstraining_settings_render', $page, 'wordpresstraining_settings_section_shop_info', 
     [
        'label_for' => 'wordpresstraining_settings_field_name',
        'type' => 'text',
        'class' => 'form-control'   
    ]);
    add_settings_field('wordpresstraining_settings_field_phone',
     'Số điện thoại', 'wordpresstraining_settings_render', $page, 'wordpresstraining_settings_section_shop_info', 
     [
        'label_for' => 'wordpresstraining_settings_field_phone',
        'type' => 'text',
        'class' => 'form-control'   
    ]);
    add_settings_field('wordpresstraining_settings_field_email',
     'Email', 'wordpresstraining_settings_render', $page, 'wordpresstraining_settings_section_shop_info', 
     [
        'label_for' => 'wordpresstraining_settings_field_email',
        'type' => 'text',
        'class' => 'form-control'   
    ]);
}
add_action('admin_init','wordpresstraining_setting_init');

function wordpresstraining_settings_render($args)
{   $type = $args['type'];
    $name = $args['label_for'];
    $options = get_option('wordpresstraining_setting_options');
    ?>

   <input type="<?= $type ?>" name="wordpresstraining_setting_options[<?= $name ?>]" value="<?= $options[$name] ?>">

   <?php
}