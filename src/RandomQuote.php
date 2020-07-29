<?php

namespace RandomQuotes;

class RandomQuote {

    public static function getRandomQuote()
    {
        $quotes = file_get_contents( __DIR__ . '/../data/quotes.json' );
        $quotes = json_decode( $quotes, true );
        $index = mt_rand( 0, count( $quotes ) );
        return $quotes[ $index ];
    }

    public static function generate()
    {
        return static::getRandomQuote();
    }

}