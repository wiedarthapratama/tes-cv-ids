<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $assessmentGroups = [
            [
                "id" => "c3ea63a9-2dbb-4d0a-96fc-29124e613524",
                "title" => "PTS 1",
                "school_name" => "Sekolah Wikrama Bogor",
                "school_year" => "2020/2021"
            ],
            [
                "id" => "a430744b-81ea-42a4-85fe-04bee358d644",
                "title" => "PTS 2",
                "school_name" => "Sekolah Wikrama Bogor",
                "school_year" => "2020/2022"
            ],
            [
                "id" => "cb6f4e41-9593-4ee9-84d1-633a19113072",
                "title" => "Penilaian Akhir Semester",
                "school_name" => "Sekolah Wikrama Garut",
                "school_year" => "2020/2022"
            ],
            [
                "id" => "24e68997-5be9-4e13-a8ae-4ce5115cc1a4",
                "title" => "Penilaian Uji Coba 1",
                "school_name" => "Sekolah Wikrama Garut",
                "school_year" => "2020/2023"
            ],
            [
                "id" => "940d2c2d-fb0b-476c-a5d3-42a85d264abb",
                "title" => "Penilaian Uji Coba Assessment",
                "school_name" => "Sekolah Wikrama Garut",
                "school_year" => "2020/2024"
            ],
            [
                "id" => "9b6860b4-e0f6-4847-89e9-89d1c61fb5f4",
                "title" => "PAS Semester Ganjil",
                "school_name" => "Sekolah Wikrama Bekasi",
                "school_year" => "2020/2024"
            ],
        ];

        $groupByTahun = array();
        foreach ($assessmentGroups as $element) {
            $groupByTahun[$element['school_year']][] = $element;
        }

        return view('pages.home', compact('groupByTahun'));
    }

    function tugasDua()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.escuelajs.co/api/v1/products?offset=0&limit=10',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $data = json_decode($response);

        return view('pages.tugas_2', compact('data'));
    }
}
