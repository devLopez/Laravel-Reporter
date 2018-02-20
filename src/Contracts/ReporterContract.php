<?php

namespace Igrejanet\Reporter\Contracts;

use Illuminate\Http\Request;

/**
 * ReporterContract
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.1.0
 * @since   20/02/2018
 * @package Igrejanet\Reporter\Contracts
 */
interface ReporterContract
{
    public function setTitle(string $title);

    public function getTitle() : string;

    public function setSubTitle(string $title);

    public function getSubTitle() : string;

    public function setView(string $view);

    public function getView() : string;

    public function setOrientation(string $orientation);

    public function getOrientation() : string;

    public function getProcessedData() : array;

    public function generate(Request $terms);
}
