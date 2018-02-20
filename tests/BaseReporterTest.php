<?php

namespace Tests;

use Igrejanet\Reporter\Contracts\ReporterContract;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class BaseReporterTest extends TestCase
{
    public function testEscapsulation()
    {
        $title      = 'Relatório - Clientes sem Telefone';
        $subtitle   = 'Somente Clientes';

        $request = new Request();

        $report = new ClientsWithNoPhone();
        $report->generate($request);

        $data = $report->getProcessedData();

        $this->assertInstanceOf(ReporterContract::class, $report);
        $this->assertEquals($title, $report->getTitle());
        $this->assertEquals($subtitle, $report->getSubTitle());
        $this->assertEquals('portrait', $report->getOrientation());
        $this->assertEquals('reports.clients_no_phone', $report->getView());
        $this->assertEquals($title, $data['title']);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('data', $data);
    }
}
