<?php

namespace App\Http\Controllers;

use KamiOrz\Amqp\Facades\Amqp;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function send() {
        $routingKey = 'notification';
        $message = 'Bye Bye';
        $queueName = 'notice';

        //* Publish message with routing key
        // return Amqp::publish($routingKey, $message);

        //* Publish message with routing key and create queue
        return Amqp::publish($routingKey, $message, ['queue' => $queueName]);

        //* Push message with routing key and overwrite properties
        // return Amqp::publish($routingKey, $message, ['exchange' => 'amq.direct']);

    }
}
