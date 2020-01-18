<?php

namespace Igrejanet\Reporter;

/**
 * AbstractReporter
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 2.0.0
 * @package Igrejanet\Reporter
 */
abstract class AbstractReporter
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
     * @var mixed
     */
    protected $data;

    /**
     * @return mixed
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param   mixed  $title
     * @return  $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param   string  $subtitle
     * @return  $this
     */
    public function setSubTitle(string $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return  string
     */
    public function getSubTitle() : string
    {
        return $this->subtitle;
    }

    /**
     * @param   string  $orientation
     * @return  $this
     */
    public function setOrientation(string $orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @return  string
     */
    public function getOrientation() : string
    {
        return $this->orientation;
    }

    /**
     * @return mixed
     */
    public function getView() : string
    {
        return $this->view;
    }

    /**
     * @param   mixed  $view
     * @return  $this
     */
    public function setView(string $view)
    {
        $this->view = $view;

        return $this;
    }
}
