<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
    protected $table;

    public function gettAll()
    {
        $data = DB::table($this->table)->get();
        return $data;
    }

    public function getById($id)
    {
        $data = DB::table($this->table)->where('id', "=",$id)->get()->first();
        return $data;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
        try {
            DB::table($this->table)->where('id',$id)->delete();
        }catch (Exception $exception){
            echo $exception->getMessage();
        }
    }
}
