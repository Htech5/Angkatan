<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BiodataController extends Controller
{
    // JSON icikiwir
    public function index(Request $request)
    {
        $jsonPath = storage_path('app/public/data.json');
        $jsonData = json_decode(file_get_contents($jsonPath), true);

        $searchQuery = $request->input('search');

        if (!empty($searchQuery)) {
            $jsonData = array_filter($jsonData, function ($item) use ($searchQuery) {
                return stripos($item['nama_lengkap'], $searchQuery) !== false;
            });
        }

        usort($jsonData, function ($a, $b) {
            return strcmp($a['nama_lengkap'], $b['nama_lengkap']);
        });

        $currentPage = $request->input('page', 1);
        $perPage = 15;
        $currentItems = array_slice($jsonData, ($currentPage - 1) * $perPage, $perPage);
        $totalItems = count($jsonData);
        $totalPages = ceil($totalItems / $perPage);

        // $paginatedData = new LengthAwarePaginator(
        //     $items,
        //     count($jsonData),
        //     $perPage,
        //     $currentPage,
        //     ['path' => $request->url(), 'query' => $request->query()]
        // );

        return view('biodata', [
            'data' => $currentItems,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'searchQuery' => $searchQuery
        ]);
    }

    // SQLite CIHUYYY
    // public function index(Request $request)
    // {
    //     $data = Biodata::paginate(15);

    //     // dd($data);
    //     return $data;
    //     // return view('biodata', ['data' => $data]);

    //     // return view('biodata', ['data' => $paginatedData, 'searchQuery' => $searchQuery]);
    // }
}
