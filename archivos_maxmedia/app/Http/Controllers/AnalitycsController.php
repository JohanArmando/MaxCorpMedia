<?php namespace App\Http\Controllers;

use App\Ad_Web;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;
use Carbon\Carbon;
use LaravelAnalytics;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Analytics;
use Google_Auth_AssertionCredentials;


class AnalitycsController extends Controller {
    public function google() {

        try {

            $path = storage_path('laravel-analytics/Client_Secrets.p12');

            if(!\File::exists($path))
            {
                throw new \Exception("Can't find .p12 certificate: " . $path);
            }

            $client = new Google_Client();
            $client->setClientId('101268885617725499871');


            $auth = new Google_Auth_AssertionCredentials(
                'account-4@astute-smile-113820.iam.gserviceaccount.com',
                array(
                    'https://www.googleapis.com/auth/analytics.readonly'
                ),
                file_get_contents($path)
            );

            $client->setAssertionCredentials($auth);

            $service = new Google_Service_Analytics($client);

           $optParams =array("dimensions" => "rt:pagePath" );
            $metrics = "rt:pageviews";
            $results = $service->data_realtime->get('ga:112871404', $metrics,  $optParams); // - OK

            //$realtime = $service->data_realtime->get('ga:12345678', 'rt:activeUsers');
            dd($results);

        } catch (\Google_Exception $e) {
            //Proper exception handling
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $startDate = new \DateTime(Carbon::parse(Carbon::today()->subDay()));
        $endDate = new \DateTime(Carbon::parse(Carbon::today()->subMinutes(1)));
        $metrics = 'ga:pageviews,ga:totalEvents';
        //$analytics = \LaravelAnalytics::performQuery($startDate, $endDate, $metrics, $others = array( 'dimensions' => 'ga:country'));
        //$analytics = \LaravelAnalytics::getMostVisitedPages($numberOfDays = 1, $maxResults = 20);
        $analytics =   \LaravelAnalytics::performQuery($startDate, $endDate, $metrics, $others = array("dimensions" => "ga:pagePath" ,"sort" => "-ga:pageviews"));


            $ads = Ad_Web::all();
        $pila = array();
        $ids = array();
        $a = 0;
        for($x = 0 ; $x < count($analytics["rows"]); $x++)
        {
            $comma_separated = implode("/", $analytics['rows'][$x]);
            $pieces = explode("/",$comma_separated );
            //primer error si no existe el imp osea esta / o advertiserw
            foreach($ads as  $ad ){
                if($a == 0){
                    array_push($ids,$ad->id);
                }
                if(empty($pieces[1])){
                }else{
                    if($pieces[2] == $ad->id){
                        array_push($pila,$ad->id);
                       // echo "id = $pieces[2]"." Impresiones = $pieces[3]<br/ >";
                        $reporte = new Report();
                        $reporte->ad_web_id = $ad->id;
                        if(empty( $pieces[3]) ){
                            $reporte->impresiones = 0;
                            $reporte->ctr = 0;
                            $reporte->click = 0;
                        }else{
                            $reporte->impresiones = $pieces[3];
                            $reporte->ctr = $pieces[4]/$pieces[3];
                            $reporte->click = $pieces[4];
                        }
                        $reporte->fecha = Carbon::today()->subDay(1)->addMinutes(1);
                        $reporte->save();
                        $ad->created_at = Carbon::tomorrow();
                        $ad->save();
                    }
                }
            }
            $a++;
        }
        $result = array_diff($ids, $pila);
        foreach($result as $r){
            $ad = Ad_Web::find($r);
            $reporte = new Report();
            $reporte->ad_web_id = $ad->id;
            $reporte->impresiones = 0;
            $reporte->click = 0;
            $reporte->ctr = 0;
            $reporte->fecha = Carbon::today()->subDay(1)->addMinutes(1);
            $reporte->save();
            $ad->created_at = Carbon::tomorrow();
            $ad->save();
        }
        /*
        $pieces = array();
        foreach ($analytics['rows'] as $row){
            $pieces = array_merge(explode("/imp/",$row[0]),$pieces);
        }
        for($x = 0 ; $x < count($pieces); $x++){
            foreach($ads as $ad){
                if($ad->id == $pieces[$x]){
                    echo $pieces[$x]."<br/>";
                }
            }
        }*/
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
