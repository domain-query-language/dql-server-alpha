<?php namespace App\Http\Controllers;

use BoundedContext\Contracts\Bus\Dispatcher;
use Request;

class CommandController extends Controller
{
    protected $bus;
    protected $app;
    protected $connection;

    public function __construct(Dispatcher $bus)
    {
        $this->bus = $bus;
    }

    public function console(Request $request)
    {        
        
    }
    
    public function handle(Request $request)
    {
        
    }
}
