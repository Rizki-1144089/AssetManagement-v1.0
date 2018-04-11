<?php
namespace App\Repositories\Eloquent;
use App\Repositories\UserRepository;
use App\Models\User;
class EloUserRepository implements UserRepository {

  //   private $model;
  //
	// public function __construct(User $model)
	// {
	// 	$this->model = $model;
	// }

	public function getAll()
	{
		return User::all();
	}

	public function getById($id)
	{
		return User::find($id);
	}

	public function create(array $attributes)
	{
		return User::create($attributes);
	}

	public function update($id, array $attributes)
	{
		return User::find($id)->update($attributes);
	}

	public function destroy($id)
	{
    return User::findOrFail($id)->delete();
	}

	function where($att,$value)
	{
		return User::where($att,$value);
	}
	function getWith(array $function,$id)
	{
		return User::with($function)->find($id);
	}
	function getAllWith(array $function)
	{
		return User::with($function)->get();
	}
	function getAllWithPage(array $function,$pagination)
	{
		return User::with($function)->paginate($pagination);
	}
	function getAllWithWhere(array $function,array $where)
	{
		return User::where($where)->with($function)->get();
	}

	function whereIn($id, array $function)
	{
		return User::whereIn($id, $function)->get();
	}

}
