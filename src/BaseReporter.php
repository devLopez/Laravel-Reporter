<?php

namespace Igrejanet\Reporter;

use Illuminate\Http\Request;

/**
 * BaseReporter
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.1.0
 * @since   20/02/2018
 * @package Igrejanet\Reporter
 */
abstract class BaseReporter implements Contracts\ReporterContract
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

    /**
     * @return array
     */
    public function getProcessedData() : array
    {
        $vars = get_object_vars($this);

        unset($vars['view']);

        return $vars;
    }

    /**
     * @param   Request $terms
     * @return  void
     */
    public abstract function generate(Request $terms);
}
