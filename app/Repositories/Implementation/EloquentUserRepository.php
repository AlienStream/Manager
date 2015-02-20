<?php namespace ProjectName\Repositories\Implementation;

use ProjectName\Domain\Implementation\User;
use ProjectName\Repositories\Boundary\UserRepository;

/**
 * Class EloquentUserRepository
 * @package ProjectName\Repositories\Implementation
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
