<?php
/**
 * Auto-load PHP files.
 */
foreach ( glob( __DIR__ . '/inc/*.php' ) as $file ) {
	require_once $file;
}
