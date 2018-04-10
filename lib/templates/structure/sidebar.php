<?php

add_action( 'wp', 'beanschildstarter_set_up_sidebars_structure' );
/**
 * Set up the sidebar structure.
 *
 * @since 1.0.0
 *
 * @return void
 */
function beanschildstarter_set_up_sidebars_structure() {
	beans_add_attribute( 'beans_widget_panel', 'class', 'uk-panel-box' );

	add_action( 'beans_layout_grid_settings', 'beanschildstarter_layout_grid_settings' );
}

/**
 * Change layout settings
 *
 * @since 1.0.0
 *
 * @param $layouts
 *
 * @return array
 */
function beanschildstarter_layout_grid_settings( $layouts ) {
	return array_merge( $layouts, array(
		'grid'            => 10,
		'sidebar_primary' => 3,
	) );
}

add_action( 'widgets_init', 'beanschildstarter_remove_sidebars' );
/**
 * Unregister primary and secondary sidebars.
 *
 * @since 1.0.0
 *
 * @return void
 */
function beanschildstarter_remove_sidebars() {
	beans_deregister_widget_area( 'sidebar_primary' );
	beans_deregister_widget_area( 'sidebar_secondary' );
}
