<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RankModel;
use App\Models\VesselModel;
use App\Models\CountryModel;
use App\Models\DataModel;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rank = RankModel::all();
        $vessel = VesselModel::all();
        $country = CountryModel::all();
        return view('home', ['rank' => $rank, 'vessel' => $vessel, 'country' => $country]);
    }

    public function downloaddata (Request $request) {
        //dd($request->country);
        $data = DataModel::whereIn('c_rank', $request->rank)->whereIn('c_vessel', $request->vessel)->where('nationalty', $request->country)->where('p_mobi1', '<>', '')->select('p_mobi1')->get();
        //dd($data);
        if (count($data) == 0){
            return redirect()->back()->with('status', 'No data found');
        }

        $fileName = 'mobilenos.csv';
        $headers = array(
            "Content-type"        => "text/csv;charset=UTF-8",
            "Content-Encoding"    => "UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('mobilenos');

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            
            fputcsv($file, $columns);
            foreach ($data as $task) {
                fputcsv($file, [
                    substr($task->p_mobi1, -10)
                ]);
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    public function cleanMobile ($mob) {
        $len = floor(log10($number)); 
        $firstDigit = (int)($number / pow(10, $len));
        return $firstDigit;
    }
}
