<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kubemq.proto

namespace Kubemq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kubemq.ReceiveQueueMessagesResponse</code>
 */
class ReceiveQueueMessagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string RequestID = 1;</code>
     */
    protected $RequestID = '';
    /**
     * Generated from protobuf field <code>repeated .kubemq.QueueMessage Messages = 2;</code>
     */
    private $Messages;
    /**
     * Generated from protobuf field <code>int32 MessagesReceived = 3;</code>
     */
    protected $MessagesReceived = 0;
    /**
     * Generated from protobuf field <code>int32 MessagesExpired = 4;</code>
     */
    protected $MessagesExpired = 0;
    /**
     * Generated from protobuf field <code>bool IsPeak = 5;</code>
     */
    protected $IsPeak = false;
    /**
     * Generated from protobuf field <code>bool IsError = 6;</code>
     */
    protected $IsError = false;
    /**
     * Generated from protobuf field <code>string Error = 7;</code>
     */
    protected $Error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $RequestID
     *     @type \Kubemq\QueueMessage[]|\Google\Protobuf\Internal\RepeatedField $Messages
     *     @type int $MessagesReceived
     *     @type int $MessagesExpired
     *     @type bool $IsPeak
     *     @type bool $IsError
     *     @type string $Error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kubemq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string RequestID = 1;</code>
     * @return string
     */
    public function getRequestID()
    {
        return $this->RequestID;
    }

    /**
     * Generated from protobuf field <code>string RequestID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestID($var)
    {
        GPBUtil::checkString($var, True);
        $this->RequestID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .kubemq.QueueMessage Messages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->Messages;
    }

    /**
     * Generated from protobuf field <code>repeated .kubemq.QueueMessage Messages = 2;</code>
     * @param \Kubemq\QueueMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Kubemq\QueueMessage::class);
        $this->Messages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 MessagesReceived = 3;</code>
     * @return int
     */
    public function getMessagesReceived()
    {
        return $this->MessagesReceived;
    }

    /**
     * Generated from protobuf field <code>int32 MessagesReceived = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMessagesReceived($var)
    {
        GPBUtil::checkInt32($var);
        $this->MessagesReceived = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 MessagesExpired = 4;</code>
     * @return int
     */
    public function getMessagesExpired()
    {
        return $this->MessagesExpired;
    }

    /**
     * Generated from protobuf field <code>int32 MessagesExpired = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMessagesExpired($var)
    {
        GPBUtil::checkInt32($var);
        $this->MessagesExpired = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsPeak = 5;</code>
     * @return bool
     */
    public function getIsPeak()
    {
        return $this->IsPeak;
    }

    /**
     * Generated from protobuf field <code>bool IsPeak = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPeak($var)
    {
        GPBUtil::checkBool($var);
        $this->IsPeak = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsError = 6;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->IsError;
    }

    /**
     * Generated from protobuf field <code>bool IsError = 6;</code>
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
     * Generated from protobuf field <code>string Error = 7;</code>
     * @return string
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Generated from protobuf field <code>string Error = 7;</code>
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

