<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kubemq.proto

namespace Kubemq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kubemq.SendQueueMessageResult</code>
 */
class SendQueueMessageResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string MessageID = 1;</code>
     */
    protected $MessageID = '';
    /**
     * Generated from protobuf field <code>int64 SentAt = 2;</code>
     */
    protected $SentAt = 0;
    /**
     * Generated from protobuf field <code>int64 ExpirationAt = 3;</code>
     */
    protected $ExpirationAt = 0;
    /**
     * Generated from protobuf field <code>int64 DelayedTo = 4;</code>
     */
    protected $DelayedTo = 0;
    /**
     * Generated from protobuf field <code>bool IsError = 5;</code>
     */
    protected $IsError = false;
    /**
     * Generated from protobuf field <code>string Error = 6;</code>
     */
    protected $Error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MessageID
     *     @type int|string $SentAt
     *     @type int|string $ExpirationAt
     *     @type int|string $DelayedTo
     *     @type bool $IsError
     *     @type string $Error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kubemq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string MessageID = 1;</code>
     * @return string
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }

    /**
     * Generated from protobuf field <code>string MessageID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageID($var)
    {
        GPBUtil::checkString($var, True);
        $this->MessageID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 SentAt = 2;</code>
     * @return int|string
     */
    public function getSentAt()
    {
        return $this->SentAt;
    }

    /**
     * Generated from protobuf field <code>int64 SentAt = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSentAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->SentAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ExpirationAt = 3;</code>
     * @return int|string
     */
    public function getExpirationAt()
    {
        return $this->ExpirationAt;
    }

    /**
     * Generated from protobuf field <code>int64 ExpirationAt = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpirationAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->ExpirationAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 DelayedTo = 4;</code>
     * @return int|string
     */
    public function getDelayedTo()
    {
        return $this->DelayedTo;
    }

    /**
     * Generated from protobuf field <code>int64 DelayedTo = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDelayedTo($var)
    {
        GPBUtil::checkInt64($var);
        $this->DelayedTo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsError = 5;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->IsError;
    }

    /**
     * Generated from protobuf field <code>bool IsError = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->IsError = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Error = 6;</code>
     * @return string
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Generated from protobuf field <code>string Error = 6;</code>
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
