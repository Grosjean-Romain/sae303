<?php

/**
 * Graphique 3
 *
 * @package   Graphique 3
 *
 * @wordpress-plugin
 * Plugin Name:       Graphique 3
 * Description:       Cherche un ID "graphique3" et place un graphique dedans
 */

// https://developer.wordpress.org/plugins/plugin-basics/best-practices/#avoiding-direct-file-access
if (!defined('ABSPATH')) {
    exit;
}

function graphique3()
{
    wp_register_script('d3', 'https://cdn.jsdelivr.net/npm/d3@7', null, '7.0', array(
        'strategy'  => 'defer',
    ));
    wp_register_script('plot', 'https://cdn.jsdelivr.net/npm/@observablehq/plot@0.6', array('d3'), '0.6', array(
        'strategy'  => 'defer',
    ));

    wp_enqueue_script('graphique3', plugins_url('graphique3.js', __FILE__), array('plot'), '1.0', array(
        'strategy'  => 'defer',
    ));

    wp_localize_script('graphique3', 'absentData', array(
        'absenteisme' => plugins_url('absenteisme.json', __FILE__),
    ));
}
add_action('wp_enqueue_scripts', 'graphique3');