<?php

namespace Tests;

use Igrejanet\Reporter\AbstractReporter;
use Illuminate\Http\Request;

class ClientsWithNoPhone extends AbstractReporter
{
    protected $title = 'Relatório - Clientes sem Telefone';

    protected $subtitle = 'Somente Clientes';

    protected $view = 'reports.clients_no_phone';

    public  function generate(Request $terms)
    {
        $this->data = [
            [
                'id' => 1,
                'name' => 'Sr. Carlton'
            ],
            [
                'id' => 1,
                'name' => 'Sra. Benson'
            ]
        ];
    }
}
