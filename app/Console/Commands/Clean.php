<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call("migrate:fresh");
        $this->call("view:clear");
        $this->call("config:clear");
        $this->call("route:clear");
        $this->call("cache:clear");
        $this->call("db:seed");
        return 0;
    }
}
