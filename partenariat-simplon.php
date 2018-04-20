<?php
/*
Plugin Name: partenariat_insert
Plugin URI: https://simplon.co/
Description: plugin pour insertion lien simplon
Version: 0.1
Author: Da_super_meat_boy
Author URI: https://simplon.co/
License: GPL2
*/

function HelloSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">Simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'HelloSimplon');
