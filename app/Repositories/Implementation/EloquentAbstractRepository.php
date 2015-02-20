<?php namespace ProjectName\Repositories\Implementation;

use ProjectName\Repositories\Boundary\AbstractRepository;

/**
 * Class EloquentAbstractRepository
 * @package ProjectName\Repositories\Implementation
 */
class EloquentAbstractRepository implements AbstractRepository
{


	/**
	 * Uses Eloquent to get All The Entities
	 * @return mixed
	 */
	public function all()
	{
		return $this->model->all();
	}

	/**
	 * Uses Eloquent to find a Object by ID
	 * @param int $id
	 * @return mixed
	 */
	public function find($id)
	{
		return $this->model->find($id);
	}
}
