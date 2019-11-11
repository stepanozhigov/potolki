<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use \App\Connectors\BitrixConnector;
use App\Lead;

class ProcessFeedback implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	// use Dispatchable, InteractsWithQueue, Queueable;

    protected $lead;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(BitrixConnector $connector)
    {
		$visits = $this->lead->visits;

		$result = $connector->addLead([
            'title' =>  $this->lead->name,
            'name'  =>  $this->lead->name,
            'phone' =>  $this->lead->phone,
			'visits' => $this->lead->visits,
            'direction' =>  56,
			'roistat'	=>	$this->lead->roistat,
			'comment'	=>	$this->lead->description,
            'description'   =>  $visits,
            'city'  =>  $this->lead->city_id,
            'source'    =>  'WEB'
        ]);
    }
}
