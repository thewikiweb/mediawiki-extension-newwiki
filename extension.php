<?php

if ( !defined( 'MEDIAWIKI' ) ) {
    die();
}

$wgAutoloadClasses['SpecialWikiwebRequest'] = __DIR__ . '/SpecialWikiwebRequest.php';
$wgAutoloadClasses['SpecialWikiwebRequestQueue'] = __DIR__ . '/SpecialWikiwebRequestQueue.php';
$wgAutoloadClasses['SpecialWikiwebCreate'] = __DIR__ . '/SpecialWikiwebCreate.php';

$wgExtensionMessagesFiles['NewWiki'] = __DIR__ . '/NewWiki.i18n.php';

$wgSpecialPages['WikiwebRequest'] = 'SpecialWikiwebRequest';
$wgSpecialPages['WikiwebRequestQueue'] = 'SpecialWikiwebRequestQueue';
$wgSpecialPages['WikiwebCreate'] = 'SpecialWikiwebCreate';

class SpecialWikiwebRequest extends SpecialPage {
    public function __construct() {
        parent::__construct( 'WikiwebRequest' );
    }

    public function execute( $par ) {
        $this->setHeaders();
        $this->outputHeader();
        $this->output( 'This is the WikiWeb Request special page.' );
    }
}

class SpecialWikiwebRequestQueue extends SpecialPage {
    public function __construct() {
        parent::__construct( 'WikiwebRequestQueue' );
    }

    public function execute( $par ) {
        $this->setHeaders();
        $this->outputHeader();
        $this->output( 'This is the WikiWeb Request Queue special page.' );
    }
}

class SpecialWikiwebCreate extends SpecialPage {
    public function __construct() {
        parent::__construct( 'WikiwebCreate' );
    }

    public function execute( $par ) {
        $this->setHeaders();
        $this->outputHeader();
        $this->output( 'This is the WikiWeb Create special page.' );
    }
}
