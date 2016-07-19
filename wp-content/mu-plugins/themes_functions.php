<?php

add_filter('wp_prepare_themes_for_js', 'order_themes'); 
function order_themes($themes) {

    //check if plugin or prosite is active
    if (! (function_exists('is_pro_site') && is_pro_site())) {
        return $themes;
    }

    //get the list of themes with their acceptance level
    $allowedThemes = get_blog_option(get_current_blog_id(), 'psts_blog_allowed_themes');

    if (! is_array($allowedThemes)) {
        return $themes;
    }

    //sort by level ([$themeName => $themeLevel])
    array_multisort($allowedThemes, \SORT_ASC);

    //by reference pushing real theme object preserving prev array order
    $freeThemes = array();
    foreach ($allowedThemes as $allowedThemeName => &$allowedThemeLevel) {
        if (isset($themes[$allowedThemeName])) {
            if (is_numeric($allowedThemeLevel)) {
                $allowedThemeLevel = $themes[$allowedThemeName];
            } else {
                unset($allowedThemes[$allowedThemeName]);
                $freeThemes[$allowedThemeName] = $themes[$allowedThemeName];
            }
            
        } 
    }

    //merge results with free themes first
    return array_merge($freeThemes, $allowedThemes);
}