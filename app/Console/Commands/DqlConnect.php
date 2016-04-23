<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\DQLParser;
use App\Factory\Command as CommandFactory;

class DqlConnect extends Command
{
    protected $signature = 'dql:connect';
    protected $description = 'Open up a DQL terminal';

    /**
     * @var DQLParser 
     */
    private $dql_parser;
    
    private $command_factory;
    
    public function __construct(
        DQLParser\DQLParser $dql_parser,
        CommandFactory $command_factory)
    {
        $this->dql_parser = $dql_parser;
        $this->command_factory = $command_factory;
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
            if ($this->is_exit_command($command)) {
                break;
            }
            
            try {
                $response = $this->process_command($command);
                $this->line($response);
            } catch (DQLParser\ParserError $e) {
                $this->error($e->getMessage());
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        }
        
        $this->line('Goodbye.');
    }
    
    private function is_exit_command($command)
    {
        return (strpos(trim($command), "exit") === 0);
    }
    
    private function process_command($command) 
    {
        $ast = $this->dql_parser->parse($command);
                
        $command = $this->command_factory->ast($ast);
        
        return "Success\n";
        if ($command == "fail") {
            throw new \Exception("Bad command");
        } 
        
    }
}
