<?php

namespace Tests;

use Igrejanet\Reporter\AbstractReporter;

class ClientsWithNoPhone extends AbstractReporter
{
    protected $title = 'Relatório - Clientes sem Telefone';

    protected $subtitle = 'Somente Clientes';

    protected $view = 'reports.clients_no_phone';
}
