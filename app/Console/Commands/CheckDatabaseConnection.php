<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnection extends Command
{
    protected $signature = 'db:check';
    protected $description = 'Check the database connection';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Naa iki gek nyambuooong!! hahahha.');
        } catch (\Exception $e) {
            $this->error('Raiso konek database COKK!!! iki lho Error: ' . $e->getMessage());
        }
    }
}
