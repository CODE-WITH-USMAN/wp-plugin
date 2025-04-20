<?php
/*
*Plugin Name: FunStreaks
*Plugin URI :
*Author : Usman
*Description: FUNSTRAEK (Gamify Your Daily Tasks and Have Exciting Badges to Feel Proud)
*/

//constant for pages path
define("Streak_plugin_path", plugin_dir_path(__FILE__));
// define("Streak_plugin_path", plugin_dir_URL(__FILE__));
include_once plugin_dir_path(__FILE__) . 'utils/services.php';

add_action("admin_menu", "add_streaks_module");

function add_streaks_module(){
    add_menu_page("FunStreaks | Gamify your Life "
                  , "FunStreaks"
                  , "manage_options"
                  , "fun-streaks-dash"
                  , "add_dashboard"
                  , "dashicons-admin-home", 23);
    add_submenu_page("fun-streaks-dash", "fun-streaks-dash", "FunDash", "manage_options", "fun-streaks-dash", "add_dashboard");
}

function add_dashboard(){
    // include_once(EMS_PLUGIN_PATH."pages/dashboard.php");   
    // include_once(Streak_plugin_path."pages/info_form.php");   
    $service = new Services();
    $service->check_user_data_and_redirect();
}

function my_plugin_activate() {
    $service = new Services();
    $service->run_migrations();
}
register_activation_hook(__FILE__, 'my_plugin_activate');

function my_plugin_deactivate() {
    $service = new Services();
    $service->drop_tables();
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivate');
