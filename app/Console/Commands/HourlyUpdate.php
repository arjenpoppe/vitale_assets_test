<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Asset;
use Illuminate\Support\Str;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some description for HourlyUpdate';

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
        error_log('Console command called on interval');
        Asset::create([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'category_id' => random_int(1,10),
            'geometry_type' => Str::random(50),
            'geometry_coordinates' => Str::random(10),
            'threshold' => Str::random(20),
            'threshold_correction' => 234234.5,
        ]);
    }
}
