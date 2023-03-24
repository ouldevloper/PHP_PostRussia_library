<?php



class BaseAPI {





    public function __construct(){

    }

    public function request(Request $request){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $request->url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request->method);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $request->header);
        if(!empty($aPostFields)){
            curl_setopt($curl, CURLOPT_POSTFIELDS, $aPostFields);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response =  curl_exec($curl);
        curl_close($curl);
        if($response == false){
            $response = curl_error($curl);
        }
        return json_decode($response,JSON_UNESCAPED_UNICODE);
    }
}