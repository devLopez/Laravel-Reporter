<?php

namespace Igrejanet\Reporter\Interfaces;

use Illuminate\Support\Collection;

/**
 * ReporterInterface
 *
 * @author Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.0.0
 * @package Igrejanet\Reporter\Interfaces
 */
interface ReporterInterface
{
    public function getTitle() : string;

    public function setTitle(string $title);

    public function getSubtitle() : ? string;

    public function setSubtitle(string $subtitle = null);

    public function getOrientation() : string;

    public function setOrientation(string $orientation);

    public function getView() : string;

    public function setView(string $view);

    public function getPerPage() : int;

    public function setPerPage(int $perPage);

    public function setTotal(int $total);

    public function getTotal() : int;

    public function setPages(Collection $pages);

    public function getPages() : Collection;

    public function setTotalPages(int $totalPages);

    public function getTotalPages() : int;

    public function hasPages() : bool;
}
