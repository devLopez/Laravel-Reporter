<?php

namespace Tests;

use Igrejanet\Reporter\Interfaces\ReporterInterface;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;

class BaseReporterTest extends TestCase
{
    public function testEscapsulation()
    {
        $title      = 'Relatório - Clientes sem Telefone';
        $subtitle   = 'Somente Clientes';

        $collection = new Collection([
            [
                'name' => 'Martin Jose',
                'email' => 'martin.jose@gmail.com'
            ],
            [
                'name' => 'Maria Antonieta',
                'email' => 'maria.antonieta@gmail.com'
            ]
        ]);

        $report = new ClientsWithNoPhone();
        $report->generate($collection);

        $this->assertInstanceOf(ReporterInterface::class, $report);
        $this->assertEquals($title, $report->getTitle());
        $this->assertEquals($subtitle, $report->getSubTitle());
        $this->assertEquals('portrait', $report->getOrientation());
        $this->assertEquals('reports.clients_no_phone', $report->getView());
        $this->assertEquals($title, $report->getTitle());
        $this->assertEquals($subtitle, $report->getSubtitle());
        $this->assertEquals(2, $report->getTotal());
        $this->assertEquals(1, $report->getTotalPages());
    }
}
