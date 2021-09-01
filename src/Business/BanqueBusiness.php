<?php
namespace App\Business;

use App\Backend\ClientService;
use App\Backend\CompteService;
use App\Entity\Client;

class BanqueBusiness
{
    private $clientService;
    private $compteService;

    public function __construct(ClientService $clientService, CompteService $compteService)
    {
        $this->clientService = $clientService;
        $this->compteService = $compteService;
    }
    
    public function authentifier(int $idClient, string $motDePasse) : Client
    {
        try {
            
        } catch (\Exception $e) {
        }    
    }
    
    
    public function mesComptes(int $idClient) : array
    {
        try {
            
        } catch (\Exception $e) {
        }
    }
    
    
    public function virement(int $numeroDebit, int $numeroCredit, float $montant) : void
    {
        try {
            
        } catch (\Exception $e) {
        }
    }
}

