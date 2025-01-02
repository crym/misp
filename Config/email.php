<?php
// Do not edit this file directly! It is automatically generated after every container start.
class EmailConfig
{
    public $default = [
        'transport' => 'Smtp',
        'host' => {{ SMTP_HOST | str }},
        'port' => {{ SMTP_PORT | int }},
        'timeout' => 30,
        'username' => {{ SMTP_USERNAME | str }},
        'password' => {{ SMTP_PASSWORD | str }},
        'client' => null,
        'log' => false,
        'tls' => true,
        'context' => ['ssl' => ['cafile' => '/etc/pki/ca-trust/extracted/pem/tls-ca-bundle.pem']],
    ];
}