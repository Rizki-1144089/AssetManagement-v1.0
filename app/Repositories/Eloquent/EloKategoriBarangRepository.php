<?php
namespace App\Repositories\Eloquent;
use App\Repositories\KategoriBarangRepository;
use App\Models\KategoriBarang;
class EloKategoriBarangRepository implements KategoriBarangRepository {

  //   private $model;
  //
	// public function __construct(Barang $model)
	// {
	// 	$this->model = $model;
	// }

	public function getAll()
	{
		return KategoriBarang::all();
	}

	public function getById($id)
	{
		return KategoriBarang::find($id);
	}

	public function create(array $attributes)
	{
		return KategoriBarang::create($attributes);
	}

	public function update($id, array $attributes)
	{
		return KategoriBarang::find($id)->update($attributes);
	}

	public function destroy($id)
	{
    return KategoriBarang::findOrFail($id)->delete();
	}

	function where($att,$value)
	{
		return KategoriBarang::where($att,$value);
	}
	function getWith(array $function,$id)
	{
		return KategoriBarang::with($function)->find($id);
	}
	function getAllWith(array $function)
	{
		return KategoriBarang::with($function)->get();
	}
	function getAllWithPage(array $function,$pagination)
	{
		return KategoriBarang::with($function)->paginate($pagination);
	}
	function getAllWithWhere(array $function,array $where)
	{
		return KategoriBarang::where($where)->with($function)->get();
	}

	function whereIn($id, array $function)
	{
		return KategoriBarang::whereIn($id, $function)->get();
	}

}
