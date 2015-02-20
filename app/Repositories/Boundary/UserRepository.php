<?php namespace ProjectName\Repositories\Boundary;

/**
 * Interface UserRepository
 * @package ProjectName\Repositories\Boundary
 */
interface UserRepository extends AbstractRepository {

	/**
	 * Get A User By Their Username
	 * @param string $username
	 * @return mixed
	 */
	public function getUserByUsername($username);
}