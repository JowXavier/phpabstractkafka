<?php

namespace PHPAbstractKafka\Contracts;

interface BrokerCollectionAwareInterface
{
    public function addBroker(BrokerAwareInterface $broker): void;

    public function getBrokersList(): string;
}