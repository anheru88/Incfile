<?php

namespace App\Console\Commands;

use App\Jobs\DispatchPost;
use App\User;
use Illuminate\Console\Command;

class FakePosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fake:post {--quantity=1 : The numbers of fake requests}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command execute fake post';

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
        $quantity = $this->option('quantity');
        for ($i = 0; $i < $quantity; $i++){
            DispatchPost::dispatch();
        }
    }
}
