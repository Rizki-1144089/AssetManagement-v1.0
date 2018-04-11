<?php
namespace App\Repositories\Eloquent;
use App\Repositories\BarangRepository;
use App\Models\Barang;
class EloBarangRepository implements BarangRepository {

  //   private $model;
  //
	// public function __construct(Barang $model)
	// {
	// 	$this->model = $model;
	// }

	public function getAll()
	{
		return Barang::all();
	}

	public function getById($id)
	{
		return Barang::find($id);
	}

	public function create(array $attributes)
	{
		return Barang::create($attributes);
	}

	public function update($id, array $attributes)
	{
		return Barang::find($id)->update($attributes);
	}

	public function destroy($id)
	{
    return Barang::findOrFail($id)->delete();
	}

	function where($att,$value)
	{
		return Barang::where($att,$value);
	}
	function getWith(array $function,$id)
	{
		return Barang::with($function)->find($id);
	}
	function getAllWith(array $function)
	{
		return Barang::with($function)->get();
	}
	function getAllWithPage(array $function,$pagination)
	{
		return Barang::with($function)->paginate($pagination);
	}
	function getAllWithWhere(array $function,array $where)
	{
		return Barang::where($where)->with($function)->get();
	}

	function whereIn($id, array $function)
	{
		return Barang::whereIn($id, $function)->get();
	}

}
