# KubeMQ PHP client
PHP Client library for KubeMQ (https://kubemq.io/) - A message-based architecture for microservices providing flexible connectivity for hybrid environments: multi-cloud, on-premises, and at the edge.

## Requirements
- [PHP gRPC Extension](https://pecl.php.net/package/gRPC)

## Installation
```
$ composer require jacky-utwani/kubemq-php
```
## Note
The library is just a compiled version of .proto file available from KubeMQ, to compile your own library please follow the instructions on [grpc.io](https://grpc.io/docs/languages/php/quickstart)

## Usage
```php

// Create client
$client = new Kubemq\kubemqClient('localhost:50000', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
        'grpc.primary_user_agent' => 'my-user-agent-identifier',
    ]
);

```
For more functions check [kubemqClient.php](https://github.com/jacky-utwani/kubemq-php/blob/master/src/Kubemq/kubemqClient.php).
More information will be available soon.