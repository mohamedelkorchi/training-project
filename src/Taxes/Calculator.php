<?php



namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator {

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function calcul(float $prix) : float 
    {
        $this->logger->info("le calcul fait: $prix");
        return $prix * (20 / 100);
    }

}