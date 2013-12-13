<?php
/*
Plugin Name: Frequent Auto Update Scheduler
Plugin URI: http://github.com/jeremyfelt/frequent-auto-update-scheduler
Description: Sets the cron timing on `wp_maybe_auto_update` to hourly rather than twicedaily to speed things up on release day. :)
Version: 0.1
Author: Jeremy Felt
Author URI: http://jeremyfelt.com/
License: GPLv2
*/

add_filter( 'schedule_event', 'faus_frequent_auto_update_scheduler', 10, 1 );
/**
 * Alter the auto update cron event to occur every hour rather than twicedaily.
 *
 * @param object $event Contains information about the event being scheduled.
 *
 * @return object Modified event to be scheduled.
 */
function faus_frequent_auto_update_scheduler( $event ) {
	if ( 'wp_maybe_auto_update' === $event->hook ) {
		$event->schedule = 'hourly';
		$event->interval = 3600;
	}

	return $event;
}
