<?php namespace Manager\Repositories\Boundary;

/**
 * Interface UserRepository
 * @package Manager\Repositories\Boundary
 */
interface UserRepository extends AbstractRepository {

	/**
	 * Get A User By Their Username
	 * @param string $username
	 * @return mixed
	 */
	public function getUserByUsername($username);
}
