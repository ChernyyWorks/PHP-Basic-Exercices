<?php

class BankClient {
    // Personnal information
    private string $firstname;
    private string $lastname;
    private string $dob;
    
    private string $city;

    // Acounts
    private string $uuid = "mycoolbank_".rand(1, 999999) ;

    private array $account_main = array(
        "currency" => "$",
        "amount" => 0.0,
    );
    private array $account_saving = array(
        "currency" => "$",
        "amount" => 0.0,
    );

    // Arguments
    public function __construct(string $firstname, string $lastname, string $dob, string $city) {
        // Personnal properties
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->city = $city;

        // Printing Creation data
    }
}