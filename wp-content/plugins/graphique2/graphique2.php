<?php

/**
 * Affiche map leaflet
 *
 * @package   Graphique 2
 *
 * @wordpress-plugin
 * Plugin Name:       Affiche map leaflet
 * Description:       Cherche un ID "graphique2" et place un graphique dedans
 */

// https://developer.wordpress.org/plugins/plugin-basics/best-practices/#avoiding-direct-file-access
if (!defined('ABSPATH')) {
    exit;
}

function graphique2()
{
    wp_register_script('d3', 'https://cdn.jsdelivr.net/npm/d3@7', null, '7.0', array(
        'strategy'  => 'defer',
    ));
    wp_register_script('plot', 'https://cdn.jsdelivr.net/npm/@observablehq/plot@0.6', array('d3'), '0.6', array(
        'strategy'  => 'defer',
    ));

    wp_enqueue_script('graphique2', plugins_url('graphique2.js', __FILE__), array('plot'), '1.0', array(
        'strategy'  => 'defer',
    ));

    wp_localize_script('graphique2', 'mapData', array(
        'map2Url' => plugins_url('map2.json', __FILE__),
        'departementsUrl' => plugins_url('departements.geojson', __FILE__)
    ));
}
add_action('wp_enqueue_scripts', 'graphique2');
