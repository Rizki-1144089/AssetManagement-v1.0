<?php
namespace App\Repositories;
interface BarangRepository {

  function getAll();

	function getById($id);

	function create(array $attributes);

	function update($id, array $attributes);

	function destroy($id);
  function where($att,$value);
  function getWith(array $function,$id);
  function getAllWith(array $function);
  function getAllWithPage(array $function,$pagination);
  function getAllWithWhere(array $function,array $where);
  function whereIn($id, array $function);

}
