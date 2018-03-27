<?php

namespace crocodicstudio\crudbooster\controllers\CBController;

trait CbLayoutLoader
{
    public $load_js = [];

    public $load_css = [];

    public $script_js = null;

    public $style_css = null;

    public $alert = [];

    protected function cbLayoutLoader()
    {
        $this->data['alerts'] = $this->alert;
        $this->data['style_css'] = $this->style_css;
        $this->data['load_js'] = $this->load_js;
        $this->data['script_js'] = $this->script_js;
        $this->data['load_css'] = $this->load_css;
    }
}