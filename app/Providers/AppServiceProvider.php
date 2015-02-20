<?php namespace ProjectName\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'ProjectName\Services\Registrar'
		);

		$this->app->bind(
			'ProjectName\Repositories\Boundary\AbstractRepository',
			'ProjectName\Repositories\Implementation\EloquentAbstractRepository'
		);

		$this->app->bind(
			'ProjectName\Repositories\Boundary\UserRepository',
			'ProjectName\Repositories\Implementation\EloquentUserRepository'
		);
	}

}
