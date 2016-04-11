<?php namespace App\Http\Controllers;

use BoundedContext\Contracts\Bus\Dispatcher;
use Illuminate\Contracts\Foundation\Application;
use BoundedContext\Contracts\Sourced\Log\Event as EventLog;
use BoundedContext\Contracts\Sourced\Log\Command as CommandLog;
use BoundedContext\Laravel\Player\Collection\Builder as PlayerBuilder;

class DQLController extends Controller
{
    protected $bus;
    protected $app;
    protected $connection;

    public function __construct(Dispatcher $bus, Application $app)
    {
        $this->bus = $bus;
        $this->app = $app;
        $this->connection = $this->app->make('db');
    }

    public function create(
        EventLog $event_log, 
        CommandLog $command_log, 
        PlayerBuilder $player_builder
    )
    {        
       
    }
}
