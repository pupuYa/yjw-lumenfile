<?php

namespace Yjw\Lumenfile;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
      include __DIR__.'/routes/web.php';
      $this->app->make('Yjw\Lumenfile\FileController');
    }
}