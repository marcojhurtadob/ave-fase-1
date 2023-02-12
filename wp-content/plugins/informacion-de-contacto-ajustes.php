<?php
/*
Plugin Name: Información de Contacto Personalizada
Description: Este plugin agrega una sección de configuración en el panel de administración de WordPress para agregar información de contacto.
Author: Marco Hurtado
Version: 1.0
*/

// Agregar la sección de personalización en el panel de administración de WordPress
add_action('admin_menu', 'agregar_seccion_informacion_de_contacto');
function agregar_seccion_informacion_de_contacto() {
    add_menu_page(
        'Información de Contacto', 
        'Información de Contacto', 
        'manage_options', 
        'informacion-de-contacto-ajustes', 
        'renderizar_seccion_informacion_de_contacto',
        'dashicons-admin-generic',
        20
    );
}


// Renderizar la sección de personalización
function renderizar_seccion_informacion_de_contacto() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1>Ajustes de Información de Contacto</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields('seccion_ajustes_informacion_de_contacto');
                do_settings_sections('informacion-de-contacto-ajustes');
                submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Agregar campos de configuración
add_action('admin_init', 'registrar_ajustes_informacion_de_contacto');
function registrar_ajustes_informacion_de_contacto() {
    add_settings_section(
        'seccion_ajustes_informacion_de_contacto', 
        'Ajustes de Información de Contacto', 
        '', 
        'informacion-de-contacto-ajustes'
    );

    add_settings_field(
        'informacion_de_contacto_nombre', 
        'Nombre', 
        'renderizar_campo_informacion_de_contacto_nombre', 
        'informacion-de-contacto-ajustes', 
        'seccion_ajustes_informacion_de_contacto'
    );
    register_setting('seccion_ajustes_informacion_de_contacto', 'informacion_de_contacto_nombre');

add_settings_field(
    'informacion_de_contacto_direccion', 
    'Dirección', 
    'renderizar_campo_informacion_de_contacto_direccion', 
    'informacion-de-contacto-ajustes', 
    'seccion_ajustes_informacion_de_contacto'
);
register_setting('seccion_ajustes_informacion_de_contacto', 'informacion_de_contacto_direccion');

add_settings_field(
    'informacion_de_contacto_telefono', 
    'Número de Teléfono', 
    'renderizar_campo_informacion_de_contacto_telefono', 
    'informacion-de-contacto-ajustes', 
    'seccion_ajustes_informacion_de_contacto'
);
register_setting('seccion_ajustes_informacion_de_contacto', 'informacion_de_contacto_telefono');

add_settings_field(
    'informacion_de_contacto_correo_electronico', 
    'Correo Electrónico', 
    'renderizar_campo_informacion_de_contacto_correo_electronico', 
    'informacion-de-contacto-ajustes', 
    'seccion_ajustes_informacion_de_contacto'
);
register_setting('seccion_ajustes_informacion_de_contacto', 'informacion_de_contacto_correo_electronico');
}

// Renderizar campos de configuración
function renderizar_campo_informacion_de_contacto_nombre() {
?>
<input type="text" name="informacion_de_contacto_nombre" value="<?php echo get_option('informacion_de_contacto_nombre'); ?>">
<?php
}

function renderizar_campo_informacion_de_contacto_direccion() {
?>
<input type="text" name="informacion_de_contacto_direccion" value="<?php echo get_option('informacion_de_contacto_direccion'); ?>">
<?php
}

function renderizar_campo_informacion_de_contacto_telefono() {
?>
<input type="text" name="informacion_de_contacto_telefono" value="<?php echo get_option('informacion_de_contacto_telefono'); ?>">
<?php
}

function renderizar_campo_informacion_de_contacto_correo_electronico() {
?>
<input type="text" name="informacion_de_contacto_correo_electronico" value="<?php echo get_option('informacion_de_contacto_correo_electronico'); ?>">
<?php
}