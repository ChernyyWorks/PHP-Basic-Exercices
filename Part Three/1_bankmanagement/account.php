<?php

class Account {
    // Basic informations
    public string $label;
    private string $currency;
    private float $amount;

    // Client related
    private BankClient $client;

    // Arguments
    public function __construct(BankClient $client, string $currency,string $label) {
        // Setting up all args
        $this->client = $client;
        $this->currency = $currency;
        $this->label = $label;

        // Just for testing
        $this->amount = 720.0;
    }

    public function getAccountData() : array {
        $accountData = array(
            "amount" => $amount,
            "currency" => $currency,
            "label" => $label,
            "client" => $client,
        );
        // Returning all data
        return $accountData;
    }
}