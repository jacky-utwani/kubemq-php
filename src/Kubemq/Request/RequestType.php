<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kubemq.proto

namespace Kubemq\Request;

use UnexpectedValueException;

/**
 * Protobuf type <code>kubemq.Request.RequestType</code>
 */
class RequestType
{
    /**
     * Generated from protobuf enum <code>RequestTypeUnknown = 0;</code>
     */
    const RequestTypeUnknown = 0;
    /**
     * Generated from protobuf enum <code>Command = 1;</code>
     */
    const Command = 1;
    /**
     * Generated from protobuf enum <code>Query = 2;</code>
     */
    const Query = 2;

    private static $valueToName = [
        self::RequestTypeUnknown => 'RequestTypeUnknown',
        self::Command => 'Command',
        self::Query => 'Query',
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
class_alias(RequestType::class, \Kubemq\Request_RequestType::class);

