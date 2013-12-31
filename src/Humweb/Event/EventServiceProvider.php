<?php namespace Humweb\Event;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->package('humweb/event');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('event', 'dispatcher', 'event services');
	}

}