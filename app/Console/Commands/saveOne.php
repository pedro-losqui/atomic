<?php

namespace App\Console\Commands;

use App\Repository\Soap;
use App\Repository\SoapRepository;
use Illuminate\Console\Command;

class saveOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:one';

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
        $soap->getOne();
    }
}
