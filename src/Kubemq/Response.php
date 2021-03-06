<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kubemq.proto

namespace Kubemq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kubemq.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ClientID = 1;</code>
     */
    protected $ClientID = '';
    /**
     * Generated from protobuf field <code>string RequestID = 2;</code>
     */
    protected $RequestID = '';
    /**
     * Generated from protobuf field <code>string ReplyChannel = 3;</code>
     */
    protected $ReplyChannel = '';
    /**
     * Generated from protobuf field <code>string Metadata = 4;</code>
     */
    protected $Metadata = '';
    /**
     * Generated from protobuf field <code>bytes Body = 5;</code>
     */
    protected $Body = '';
    /**
     * Generated from protobuf field <code>bool CacheHit = 6;</code>
     */
    protected $CacheHit = false;
    /**
     * Generated from protobuf field <code>int64 Timestamp = 7;</code>
     */
    protected $Timestamp = 0;
    /**
     * Generated from protobuf field <code>bool Executed = 8;</code>
     */
    protected $Executed = false;
    /**
     * Generated from protobuf field <code>string Error = 9;</code>
     */
    protected $Error = '';
    /**
     * Generated from protobuf field <code>bytes Span = 10;</code>
     */
    protected $Span = '';
    /**
     * Generated from protobuf field <code>map<string, string> Tags = 11;</code>
     */
    private $Tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ClientID
     *     @type string $RequestID
     *     @type string $ReplyChannel
     *     @type string $Metadata
     *     @type string $Body
     *     @type bool $CacheHit
     *     @type int|string $Timestamp
     *     @type bool $Executed
     *     @type string $Error
     *     @type string $Span
     *     @type array|\Google\Protobuf\Internal\MapField $Tags
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kubemq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ClientID = 1;</code>
     * @return string
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * Generated from protobuf field <code>string ClientID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClientID($var)
    {
        GPBUtil::checkString($var, True);
        $this->ClientID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string RequestID = 2;</code>
     * @return string
     */
    public function getRequestID()
    {
        return $this->RequestID;
    }

    /**
     * Generated from protobuf field <code>string RequestID = 2;</code>
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
     * Generated from protobuf field <code>string ReplyChannel = 3;</code>
     * @return string
     */
    public function getReplyChannel()
    {
        return $this->ReplyChannel;
    }

    /**
     * Generated from protobuf field <code>string ReplyChannel = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReplyChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->ReplyChannel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Metadata = 4;</code>
     * @return string
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }

    /**
     * Generated from protobuf field <code>string Metadata = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkString($var, True);
        $this->Metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Body = 5;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * Generated from protobuf field <code>bytes Body = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, False);
        $this->Body = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool CacheHit = 6;</code>
     * @return bool
     */
    public function getCacheHit()
    {
        return $this->CacheHit;
    }

    /**
     * Generated from protobuf field <code>bool CacheHit = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCacheHit($var)
    {
        GPBUtil::checkBool($var);
        $this->CacheHit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Timestamp = 7;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 Timestamp = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->Timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Executed = 8;</code>
     * @return bool
     */
    public function getExecuted()
    {
        return $this->Executed;
    }

    /**
     * Generated from protobuf field <code>bool Executed = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setExecuted($var)
    {
        GPBUtil::checkBool($var);
        $this->Executed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Error = 9;</code>
     * @return string
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Generated from protobuf field <code>string Error = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->Error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Span = 10;</code>
     * @return string
     */
    public function getSpan()
    {
        return $this->Span;
    }

    /**
     * Generated from protobuf field <code>bytes Span = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSpan($var)
    {
        GPBUtil::checkString($var, False);
        $this->Span = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> Tags = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Generated from protobuf field <code>map<string, string> Tags = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->Tags = $arr;

        return $this;
    }

}

