<?php

namespace DazzaDev\Mandolog;

use DazzaDev\Mandolog\Exceptions\MandologException;
use DazzaDev\Mandolog\Traits\HttpClient;

class Auth
{
    use HttpClient;

    private string $email;

    private string $password;

    /**
     * Set Credentials.
     */
    public function setCredentials($credentials = []): void
    {
        $this->email = $credentials['email'] ?? null;
        $this->password = $credentials['password'] ?? null;
    }

    /**
     * Authenticate.
     */
    public function authenticate()
    {
        $this->validate();

        $response = $this->getClient()->post('get-token', [
            'json' => [
                'email' => $this->email,
                'password' => $this->password,
            ],
        ]);

        if (isset($response['token'])) {
            return $response;
        } else {
            throw new MandologException('Authentication token not found.');
        }
    }

    /**
     * Validate the required fields.
     */
    public function validate()
    {
        if (empty($this->email)) {
            throw new MandologException('Email field is required.');
        }

        if (empty($this->password)) {
            throw new MandologException('Password field is required.');
        }
    }
}
