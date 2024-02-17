<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Modules\Dashboard\Entities\Offer;

class DeleteExpiredData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:offer-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Offer Deleted After Expiration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        Offer::where('end_date','<', now())->detele();

    }
}
