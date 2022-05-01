<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Carbon\Carbon;

class LoanOverdue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'overdue:loan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates loan status to Overdue after 15 days elapse';

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
    public function handle()
    {
        $now = Carbon::now();
        $change_loan_status_to_overdue = \DB::table('clients')
            ->whereDate('created_at', '<=',Carbon::now()->subdays(15))
            ->where('loan_status','active')
            ->update(array(
                'loan_status' =>'overdue',
                'overdue_date' =>$now
            ));
        return $change_loan_status_to_overdue;
    }
}
