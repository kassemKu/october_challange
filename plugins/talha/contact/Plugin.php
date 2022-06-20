<?php namespace Talha\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Talha\Contact\Components\ContactForm::class => 'contactform'
        ];
    }

    public function registerSettings()
    {
    }
}
