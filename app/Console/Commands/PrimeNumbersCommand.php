<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\PrimeNumberService;

class PrimeNumbersCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app.primenumbers';

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
     * @return mixed
     */
    public function handle()
    {
        $pn = new PrimeNumberService();
        $this->output->write(implode(", ", $pn->getPrimeNumbersArray()));
    }
}
