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
		info($visits);
		// foreach ($visits as $id => $visit) {
        //     $visits.= "Дата: {$visit['time']} \r\n";
        //     $visits.= "Страница: {$visit['page']} \r\n";
        //     $visits.= "Реферер: {$visit['referer']} \r\n";
        //     $visits.= "utm source: {$visit['utm_source']} \r\n";
        //     $visits.= "utm medium: {$visit['utm_medium']} \r\n";
        //     $visits.= "utm campaign: {$visit['utm_campaign']} \r\n";
        //     $visits.= "utm term: {$visit['utm_term']} \r\n";
        //     $visits.= "\r\n \r\n \r\n";
        // }

		$result = $connector->addLead([
            'title' =>  $this->lead->name,
            'name'  =>  $this->lead->name,
            'phone' =>  $this->lead->phone,
            'direction' =>  56,
			'roistat'	=>	$this->lead->roistat, 
            'description'   =>  $visits,
            'city'  =>  $this->lead->city_id,
            'source'    =>  'WEB'
        ]);
		info([$this->lead, $result]);
    }
}
