<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repository\SoapRepository;

class saveSix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:six';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(SoapRepository $soap)
    {
        $soap->getSix();
    }
}
