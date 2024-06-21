<?php

declare(strict_types=1);

return [
	'default_connection' => 'private',
	'connections' => [
		'private' => [
			'host' => "broker.hivemq.com",
			'port' => 1883,
            'ssid' => "ssid",
            'password' => "password"
		],
	]
    ];
