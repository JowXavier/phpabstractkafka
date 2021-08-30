<?php

namespace PHPAbstractKafka\Contracts;

interface KafkaConsumerAwareInterface
{
    public function consume($ms, array $classesList);
}