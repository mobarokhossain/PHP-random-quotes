<?php

require_once( './src/RandomQuote.php' );

use RandomQuotes\RandomQuote;

print_r( RandomQuote::generate() );
