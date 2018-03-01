<?php

namespace App\Console\Commands\V1_0;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:something:to:mysql';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '随机生成一些日期到mysql中';

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
        //
        $nowDate = date("Y-m-d H:i:s");
        $str = "message " . $nowDate;
        DB::table('date_a')->insert([
            'thing' => $str,
            'createTime' => $nowDate
        ]);
    }
}
