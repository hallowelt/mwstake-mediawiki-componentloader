<?php

if ( defined( 'MWSTAKE_MEDIAWIKI_COMPONENTLOADER_VERSION' ) ) {
	return;
}

define( 'MWSTAKE_MEDIAWIKI_COMPONENTLOADER_VERSION', '1.0.1' );

function mwsInitComponents() { // phpcs:ignore MediaWiki.NamingConventions.PrefixedGlobalFunctions.allowedPrefix
	MWStake\MediaWiki\ComponentLoader\Bootstrapper::getInstance()->init();
}
