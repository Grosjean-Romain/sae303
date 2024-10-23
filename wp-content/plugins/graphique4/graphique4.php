<?php

/**
 * Graphique 4
 *
 * @package   Graphique 4
 *
 * @wordpress-plugin
 * Plugin Name:       Graphique 4
 * Description:       Cherche un ID "graphique4" et place un graphique dedans
 */

// https://developer.wordpress.org/plugins/plugin-basics/best-practices/#avoiding-direct-file-access
if (!defined('ABSPATH')) {
    exit;
}

function graphique4()
{
    wp_register_script('d3', 'https://cdn.jsdelivr.net/npm/d3@7', null, '7.0', array(
        'strategy'  => 'defer',
    ));
    wp_register_script('plot', 'https://cdn.jsdelivr.net/npm/@observablehq/plot@0.6', array('d3'), '0.6', array(
        'strategy'  => 'defer',
    ));

    wp_enqueue_script('graphique4', plugins_url('graphique4.js', __FILE__), array('plot'), '1.0', array(
        'strategy'  => 'defer',
    ));

    wp_localize_script('graphique4', 'scoreData2017', array(
        'score2017' => plugins_url('score2017.json', __FILE__),
    ));
}
add_action('wp_enqueue_scripts', 'graphique4');