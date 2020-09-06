<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Kubemq;

/**
 */
class kubemqClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Kubemq\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\Result
     */
    public function SendEvent(\Kubemq\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/SendEvent',
        $argument,
        ['\Kubemq\Result', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\Result
     */
    public function SendEventsStream($metadata = [], $options = []) {
        return $this->_bidiRequest('/kubemq.kubemq/SendEventsStream',
        ['\Kubemq\Result','decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\Subscribe $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\EventReceive
     */
    public function SubscribeToEvents(\Kubemq\Subscribe $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/kubemq.kubemq/SubscribeToEvents',
        $argument,
        ['\Kubemq\EventReceive', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\Subscribe $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\Request
     */
    public function SubscribeToRequests(\Kubemq\Subscribe $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/kubemq.kubemq/SubscribeToRequests',
        $argument,
        ['\Kubemq\Request', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\Response
     */
    public function SendRequest(\Kubemq\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/SendRequest',
        $argument,
        ['\Kubemq\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\Response $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\PBEmpty
     */
    public function SendResponse(\Kubemq\Response $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/SendResponse',
        $argument,
        ['\Kubemq\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\QueueMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\SendQueueMessageResult
     */
    public function SendQueueMessage(\Kubemq\QueueMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/SendQueueMessage',
        $argument,
        ['\Kubemq\SendQueueMessageResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\QueueMessagesBatchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\QueueMessagesBatchResponse
     */
    public function SendQueueMessagesBatch(\Kubemq\QueueMessagesBatchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/SendQueueMessagesBatch',
        $argument,
        ['\Kubemq\QueueMessagesBatchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\ReceiveQueueMessagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\ReceiveQueueMessagesResponse
     */
    public function ReceiveQueueMessages(\Kubemq\ReceiveQueueMessagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/ReceiveQueueMessages',
        $argument,
        ['\Kubemq\ReceiveQueueMessagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\StreamQueueMessagesResponse
     */
    public function StreamQueueMessage($metadata = [], $options = []) {
        return $this->_bidiRequest('/kubemq.kubemq/StreamQueueMessage',
        ['\Kubemq\StreamQueueMessagesResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\AckAllQueueMessagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\AckAllQueueMessagesResponse
     */
    public function AckAllQueueMessages(\Kubemq\AckAllQueueMessagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/AckAllQueueMessages',
        $argument,
        ['\Kubemq\AckAllQueueMessagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kubemq\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Kubemq\PingResult
     */
    public function Ping(\Kubemq\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kubemq.kubemq/Ping',
        $argument,
        ['\Kubemq\PingResult', 'decode'],
        $metadata, $options);
    }

}
