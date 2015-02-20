<?php namespace Manager\Repositories\Implementation;

use Manager\Domain\Implementation\User;
use Manager\Repositories\Boundary\UserRepository;

/**
 * Class EloquentUserRepository
 * @package Manager\Repositories\Implementation
 */
class EloquentUserRepository extends EloquentAbstractRepository implements UserRepository
{

	protected $model;

	function __construct(User $model)
	{
		$this->model = $model;
	}

	/**
	 * Get A User By Their Username
	 * @param string $username
	 * @return mixed
	 */
	public function getUserByUsername($username)
	{
		$this->model->where('username', '=', $username);
	}
}
