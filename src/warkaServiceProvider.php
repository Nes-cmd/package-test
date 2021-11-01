<?php
namespace Nesru\warka;

use Illuminate\Support\ServiceProvider;

class warkaServiceProvider extends ServiceProvider{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', 'warka');
		$this->loadMigrationsFrom(__DIR__.'/migrations');
		
	}
	public function register()
	{

		$this->mergeConfigFrom(__DIR__.'/config/warka.php', 'warka');
		$this->publishes([
			__DIR__.'/config/warka.php'=> config_path('warka.php'),
			// __DIR__.'/views' => resources_path('views/vendor/warka')
		]);
	}
}
?>