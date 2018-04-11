<?php
namespace App\Repositories\Eloquent;
use App\Repositories\LokasiRepository;
use App\Models\Lokasi;
class EloLokasiRepository implements LokasiRepository {

  //   private $model;
  //
	// public function __construct(Barang $model)
	// {
	// 	$this->model = $model;
	// }

	public function getAll()
	{
		return Lokasi::all();
	}

	public function getById($id)
	{
		return Lokasi::find($id);
	}

	public function create(array $attributes)
	{
		return Lokasi::create($attributes);
	}

	public function update($id, array $attributes)
	{
		return Lokasi::find($id)->update($attributes);
	}

	public function destroy($id)
	{
    return Lokasi::findOrFail($id)->delete();
	}

	function where($att,$value)
	{
		return Lokasi::where($att,$value);
	}
	function getWith(array $function,$id)
	{
		return Lokasi::with($function)->find($id);
	}
	function getAllWith(array $function)
	{
		return Lokasi::with($function)->get();
	}
	function getAllWithPage(array $function,$pagination)
	{
		return Lokasi::with($function)->paginate($pagination);
	}
	function getAllWithWhere(array $function,array $where)
	{
		return Lokasi::where($where)->with($function)->get();
	}

	function whereIn($id, array $function)
	{
		return Lokasi::whereIn($id, $function)->get();
	}

}
