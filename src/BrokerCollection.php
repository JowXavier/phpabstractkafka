<?php

namespace PHPAbstractKafka;

use PHPAbstractKafka\Contracts\BrokerAwareInterface;
use PHPAbstractKafka\Contracts\BrokerCollectionAwareInterface;

class BrokerCollection implements BrokerCollectionAwareInterface
{
    private $brokers;

    public function __construct()
    {
        $this->brokers = [];
    }

    public function addBroker(BrokerAwareInterface $broker): void
    {
        $this->brokers[] = $broker;
    }

    public function getBrokersList(): string
    {
        return implode(",", $this->brokers);
    }
}