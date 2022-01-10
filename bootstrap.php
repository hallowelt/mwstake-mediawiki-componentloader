<?php

if ( !defined( 'MEDIAWIKI' ) && !defined( 'MW_PHPUNIT_TEST' ) ) {
	return;
}

if ( defined( 'MWSTAKE_MEDIAWIKI_COMPONENTLOADER_VERSION' ) ) {
	return;
}

define( 'MWSTAKE_MEDIAWIKI_COMPONENTLOADER_VERSION', '1.0.0' );

// phpcs:ignore MediaWiki.NamingConventions.PrefixedGlobalFunctions.wfPrefix
function mwsInitComponents() {
	MWStake\MediaWiki\ComponentLoader\Bootstrapper::getInstance()->init();
}
