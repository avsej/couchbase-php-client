<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search/v1/search.proto

namespace Couchbase\Protostellar\Generated\Search\V1\SearchQueryRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>couchbase.search.v1.SearchQueryRequest.HighlightStyle</code>
 */
class HighlightStyle
{
    /**
     * Generated from protobuf enum <code>HIGHLIGHT_STYLE_DEFAULT = 0;</code>
     */
    const HIGHLIGHT_STYLE_DEFAULT = 0;
    /**
     * Generated from protobuf enum <code>HIGHLIGHT_STYLE_HTML = 1;</code>
     */
    const HIGHLIGHT_STYLE_HTML = 1;
    /**
     * Generated from protobuf enum <code>HIGHLIGHT_STYLE_ANSI = 2;</code>
     */
    const HIGHLIGHT_STYLE_ANSI = 2;

    private static $valueToName = [
        self::HIGHLIGHT_STYLE_DEFAULT => 'HIGHLIGHT_STYLE_DEFAULT',
        self::HIGHLIGHT_STYLE_HTML => 'HIGHLIGHT_STYLE_HTML',
        self::HIGHLIGHT_STYLE_ANSI => 'HIGHLIGHT_STYLE_ANSI',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HighlightStyle::class, \Couchbase\Protostellar\Generated\Search\V1\SearchQueryRequest_HighlightStyle::class);
