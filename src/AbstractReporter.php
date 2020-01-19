<?php

namespace Igrejanet\Reporter;

use Igrejanet\Reporter\Interfaces\ReporterInterface;
use Illuminate\Support\Collection;
use InvalidArgumentException;

/**
 * AbstractReporter
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 2.1.1
 * @package Igrejanet\Reporter
 */
abstract class AbstractReporter implements ReporterInterface
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $subtitle = '';

    /**
     * @var string
     */
    protected $orientation = 'portrait';

    /**
     * @var string
     */
    protected $view;

    /**
     * @var int
     */
    protected $perPage = 30;

    /**
     * @var int
     */
    protected $total;

    /**
     * @var Collection
     */
    protected $pages;

    /**
     * @var int
     */
    protected $totalPages;

    /**
     * @param Collection $data
     */
    public function __construct(Collection $data)
    {
        $pages = $data->chunk($this->perPage);

        $this->setTotal($data->count());
        $this->setPages($pages);
        $this->setTotalPages($pages->count());
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubtitle() : ? string
    {
        return $this->subtitle;
    }

    /**
     * @param string|null $subtitle
     * @return $this
     */
    public function setSubtitle(string $subtitle = null)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrientation() : string
    {
        return $this->orientation;
    }

    /**
     * @param string $orientation
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setOrientation(string $orientation)
    {
        if ( ! in_array($orientation, ['portrait', 'landscape']) ) {
            throw new InvalidArgumentException('Invalid report orientation setted');
        }

        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @return string
     */
    public function getView() : string
    {
        return $this->view;
    }

    /**
     * @param string $view
     * @return $this
     */
    public function setView(string $view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return int
     */
    public function getPerPage() : int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     * @return $this
     */
    public function setPerPage(int $perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }

    /**
     * @param Collection $pages
     * @return $this
     */
    public function setPages(Collection $pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getPages() : Collection
    {
        return $this->pages;
    }

    /**
     * @param int $totalPages
     * @return $this
     */
    public function setTotalPages(int $totalPages)
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->totalPages;
    }

    /**
     * @return bool
     */
    public function hasPages() : bool
    {
        return $this->pages->count() > 0;
    }
}
