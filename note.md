 
public function register()
{
  $this->app->singleton(Logger::class, function ($app) {
    return new Logger('name');
  }); 
}
