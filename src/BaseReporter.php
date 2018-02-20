<?php

namespace Igrejanet\Reporter;

use Illuminate\Http\Request;

/**
 * BaseReporter
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.0.0
 * @since   19/02/2018
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
     * @return mixed
     */
    public function getProcessedData()
    {
        return [
            'title' => $this->title,
            'data'  => $this->data
        ];
    }

    /**
     * @param   Request $terms
     * @return  void
     */
    public abstract function generate(Request $terms);
}