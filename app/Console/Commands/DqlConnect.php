<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\DQLParser;
use App\Factory\Command as CommandFactory;
use BoundedContext\Contracts\Bus\Dispatcher;
use BoundedContext\Laravel\Player\Collection\Builder as PlayerBuilder;

class DqlConnect extends Command
{
    protected $signature = 'dql:connect';
    protected $description = 'Open up a DQL terminal';

    /**
     * @var DQLParser 
     */
    private $dql_parser;
    
    private $command_factory;
    
    private $dispatcher;
    
    private $player_builder;
    
    public function __construct(
        DQLParser\DQLParser $dql_parser,
        CommandFactory $command_factory,
        Dispatcher $dispatcher,
        PlayerBuilder $player_builder
    )
    {
        $this->dql_parser = $dql_parser;
        $this->command_factory = $command_factory;
        $this->dispatcher = $dispatcher;
        $this->player_builder = $player_builder;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (true) {
            $command = $this->ask('Enter command');
            if ($this->is_exit_statement($command)) {
                break;
            }
            
            try {
                $response = $this->process_dql($command);
                $this->line($response);
            } catch (DQLParser\ParserError $e) {
                $this->error($e->getMessage());
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        }
        
        $this->line('Goodbye.');
    }
    
    private function is_exit_statement($command)
    {
        return (strpos(trim($command), "exit") === 0);
    }
    
    private function process_dql($dql_statement) 
    {
        $ast = $this->dql_parser->parse($dql_statement);
                
        $command = $this->command_factory->ast($ast);
        
        $this->dispatcher->dispatch($command);
        
        $this->player_builder->all()->get()->play();
        
        return "Success\n";        
    }
}
