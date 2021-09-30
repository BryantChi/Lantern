<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempleInfo;

class TempleInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function temple(Request $request) {

        $templeInfo = TempleInfo::orderBy('updated_at', 'desc')->paginate(10);

        $typeInfo = $this->getCity();

        if ($request->ajax()) {
            return \Response::json(\View::make('temple-item', array('templeInfo' => $templeInfo, 'typeInfo' => $typeInfo))->render());
        }

        return view('temple', ['templeInfo' => $templeInfo, 'typeInfo' => $typeInfo]);

    }

    public function selectSearch(Request $request)
    {
        $input = $request->all();

        $typeInfo = $this->getCity();

        $city = $input['city'];
        $district = $input['district'];
        // ->lists('title')
        if ($district == "" && $city == "") {
            $templeInfo = TempleInfo::orderBy('updated_at', 'desc')->paginate(10);
        } else if ($city == "") {
            $templeInfo = TempleInfo::where('trownship', '=', $district)->orderBy('updated_at', 'desc')->paginate(10);
        } else if($district == "") {
            $templeInfo = TempleInfo::where('city', '=',$city)->orderBy('updated_at', 'desc')->paginate(10);
        } else {
            $templeInfo = TempleInfo::where('city', '=',$city)->where('trownship', '=', $district)->orderBy('updated_at', 'desc')->paginate(10);
        }

        if ($request->ajax()) {
            return \Response::json(\View::make('temple-item', array('templeInfo' => $templeInfo, 'typeInfo' => $typeInfo))->render());
        }

        // $data = ['featuredInfo' => $info, 'typeInfo' => $typeInfo, 'yearInfo' => $yearInfo];
        // return redirect()->view('featured', compact('featuredInfo', 'typeInfo', 'yearInfo'))->render();
        // return json_encode(array('status' => 'success', 'res' => $featuredInfo));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCity() {
        $content = $this->file_get_contents_curl('https://api.opencube.tw/twzipcode/get-citys');
        $cities = json_decode($content);

        $result = array();
        foreach ($cities->data as $key => $value) {
            // $result[$key]['id'] = $value;
            // $result[$key]['text'] = $value;
            array_push($result, $value);
        }

        // return response()->json($result);
        return $result;
    }

    public function getDistrict($city, Request $request) {
        $content = $this->file_get_contents_curl('https://api.opencube.tw/twzipcode?city='.$city);
        $district = json_decode($content);

        $result = array();
        foreach ($district->data as $key => $value) {
            // $result[$key]['id'] = $value->district;
            // $result[$key]['text'] = $value->district;
            array_push($result, $value->district);
        }

        // return response()->json($result);
        return json_encode(array('status' => 'success', 'res' => $result));
    }

    protected function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}
