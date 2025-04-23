<?php

namespace DazzaDev\Mandolog;

use DazzaDev\Mandolog\Traits\HttpClient;

class Mandolog
{
    use HttpClient;

    public function __construct(string $authToken)
    {
        $this->setAuthToken($authToken);
        $this->setHeaders([
            'Authorization' => 'Bearer '.$this->authToken,
            'Content-Type' => 'application/json',
        ]);
    }

    /**
     * Get Ticket
     */
    public function getTicket(string $ticketNumber)
    {
        $response = $this->getClient()->get('consulta-ticket/'.$ticketNumber, [
            'headers' => $this->getHeaders(),
        ]);

        return $response;
    }

    /**
     * Send Manifest
     */
    public function sendManifest(array $data)
    {
        return $this->getClient()->post('send-manifiesto', [
            'headers' => $this->getHeaders(),
            'json' => $data,
        ]);
    }
}
