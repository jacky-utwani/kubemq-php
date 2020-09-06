<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kubemq.proto

namespace Kubemq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kubemq.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string EventID = 1;</code>
     */
    protected $EventID = '';
    /**
     * Generated from protobuf field <code>bool Sent = 2;</code>
     */
    protected $Sent = false;
    /**
     * Generated from protobuf field <code>string Error = 3;</code>
     */
    protected $Error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $EventID
     *     @type bool $Sent
     *     @type string $Error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kubemq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string EventID = 1;</code>
     * @return string
     */
    public function getEventID()
    {
        return $this->EventID;
    }

    /**
     * Generated from protobuf field <code>string EventID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventID($var)
    {
        GPBUtil::checkString($var, True);
        $this->EventID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Sent = 2;</code>
     * @return bool
     */
    public function getSent()
    {
        return $this->Sent;
    }

    /**
     * Generated from protobuf field <code>bool Sent = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSent($var)
    {
        GPBUtil::checkBool($var);
        $this->Sent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Error = 3;</code>
     * @return string
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Generated from protobuf field <code>string Error = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->Error = $var;

        return $this;
    }

}

