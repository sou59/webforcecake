<?php

// custom background

add_theme_support("custom-background");

// Active les images à la une

add_theme_support("post-thumbnails");

// active la création de menu : ici un menu haut et un menu bas
function wpcake_menu() {
    register_nav_menu("menu-header", "Menu du haut");
    register_nav_menu("menu-footer", "Menu du bas");

}
add_action("init", "wpcake_menu");


// entête storys
function storys_init() { // initialisation

    $labels = array (
        "name" => "Item storys",
        "singular_name" => "Item storys",
        "menu_name" => "Items stat",
        "add_new" => "Ajouter un item storys",
        "add_new_item" => "Ajouter un nouveau item storys",
        "new_item" => "Ajouter un nouveau item storys",
        "edit_item" => "Modifier un item storys",
        "view_item" => "Voir un item storys",
        "all_items" => "Tous les items storys",
        "search_items" => "Rechercher un item storys"
    );

    $args = array(
        "label" => "Items storys",
        "labels" => $labels,
        // on définit ici les options disponibles dans l'éditeur de notre custom post type : affichage dans ajouter film
        "supports" => array("title", "editor", "thumbnail"), // custum_fields
        // option supplémentaire
        "public" => true,
        //"has_archive" => true, // à ne pas oublier si vous utilisez un modèle d'archive inutile ici
        "menu_icon" => "dashicons-media-video"
    );

    register_post_type("items_storys", $args);


}
add_action("init", "storys_init" );


// statistique = 
function stat_init() { // initialisation

    $labels = array (
        "name" => "Item stat",
        "singular_name" => "Item stat",
        "menu_name" => "Items stat",
        "add_new" => "Ajouter un item stat",
        "add_new_item" => "Ajouter un nouveau item stat",
        "new_item" => "Ajouter un nouveau item stat",
        "edit_item" => "Modifier un item stat",
        "view_item" => "Voir un item stat",
        "all_items" => "Tous les items stat",
        "search_items" => "Rechercher un item stat"
    );

    $args = array(
        "label" => "Items stat",
        "labels" => $labels,
        // on définit ici les options disponibles dans l'éditeur de notre custom post type : affichage dans ajouter film
        "supports" => array("title", "editor", "thumbnail"), // custum_fields
        // option supplémentaire
        "public" => true,
        //"has_archive" => true, // à ne pas oublier si vous utilisez un modèle d'archive inutile ici
        "menu_icon" => "dashicons-admin-generic"
    );

    register_post_type("items_stat", $args);

}
add_action("init", "stat_init" );

function carte_init() { // initialisation

    $labels = array (
        "name" => "Item carte",
        "singular_name" => "Item carte",
        "menu_name" => "Items carte",
        "add_new" => "Ajouter un item carte",
        "add_new_item" => "Ajouter un nouveau item carte",
        "new_item" => "Ajouter un nouveau item carte",
        "edit_item" => "Modifier un item carte",
        "view_item" => "Voir un item carte",
        "all_items" => "Tous les items carte",
        "search_items" => "Rechercher un item carte"
    );

    $args = array(
        "label" => "Items carte",
        "labels" => $labels,
        // on définit ici les options disponibles dans l'éditeur de notre custom post type : affichage dans ajouter film
        "supports" => array("title", "editor", "thumbnail"), // custum_fields
        // option supplémentaire
        "public" => true,
        //"has_archive" => true, // à ne pas oublier si vous utilisez un modèle d'archive inutile ici
        "menu_icon" => "dashicons-format-gallery"
    );

    register_post_type("items_carte", $args);

}
add_action("init", "carte_init" );

function menu_init() { // initialisation

    $labels = array (
        "name" => "Item menu",
        "singular_name" => "Item menu",
        "menu_name" => "Items menu",
        "add_new" => "Ajouter un item menu",
        "add_new_item" => "Ajouter un nouveau item menu",
        "new_item" => "Ajouter un nouveau item menu",
        "edit_item" => "Modifier un item menu",
        "view_item" => "Voir un item menu",
        "all_items" => "Tous les items menu",
        "search_items" => "Rechercher un item menu"
    );

    $args = array(
        "label" => "Items menu",
        "labels" => $labels,
        // on définit ici les options disponibles dans l'éditeur de notre custom post type : affichage dans ajouter film
        "supports" => array("title", "editor", "thumbnail", "custom-fields" ), // custom-fields
        // option supplémentaire
        "public" => true,
        //"has_archive" => true, // à ne pas oublier si vous utilisez un modèle d'archive inutile ici
        "menu_icon" => "dashicons-images-alt"
    );

    register_post_type("items_menu", $args);

}
add_action("init", "menu_init" );



