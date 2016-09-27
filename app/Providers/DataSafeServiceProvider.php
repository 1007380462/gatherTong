<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DataSafeService;
class DataSafeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
   // protected $defer = true;
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dataSafe',function(){
            return new DataSafeService();
        });
    }
    /**
     * 获取由提供者提供的服务.
     *
     * @return array
     */
    /*public function provides()
    {
        return ['Riak\Contracts\Connection'];
    }*/
}
