<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextArea', 'components.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.submit', ['value' => 'Submit', 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
