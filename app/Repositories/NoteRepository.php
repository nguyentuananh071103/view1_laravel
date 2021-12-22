<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;

class NoteRepository extends BaseRepository implements BaseRepositoryInterface
{
    protected $table = "notes";

    public function create($data)
    {
        DB::table($this->table)->insert([
            'category' => $data->category,
            'title' => $data->title,
            'content' => $data->input("content")
        ]);
    }

    public function search($request)
    {
        if ($request->searchNote !== null) {
            return DB::table($this->table)->where("category","like",'%'. $request->searchNote.'%')->get();
        }else{
            return DB::table($this->table)->get();
        }

    }
}
