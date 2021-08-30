<?php

namespace PHPAbstractKafka\Contracts;

interface KafkaProducerAwareInterface
{
    public function produce($payload, $key = null);
}