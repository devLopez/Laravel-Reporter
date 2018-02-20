<?php

namespace Igrejanet\Reporter\Contracts;

use Illuminate\Http\Request;

/**
 * ReporterContract
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.0.0
 * @since   19/02/2018
 * @package Igrejanet\Reporter\Contracts
 */
interface ReporterContract
{
    public function setTitle(string $title);

    public function getTitle() : string;

    public function setView(string $view);

    public function getView() : string;

    public function getProcessedData();

    public function generate(Request $terms);
}