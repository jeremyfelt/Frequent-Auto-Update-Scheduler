# Frequent and Forced Auto Update Scheduler

I was impatient, so I made a plugin that forces auto updates to happen a little earlier. Note that `WP_AUTO_UPDATE_CORE` should be defined as `true` in order for this really to be effective.

* Sets the cron timing on `wp_maybe_auto_update` to hourly rather than twicedaily to speed things up on release day. :)
* Modifies the API response from WordPress.org to return `autoupdate` when an `upgrade` response is received.

See [this gist](https://gist.github.com/nacin/7047909) for other troubleshooting possibilities.