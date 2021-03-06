<?php
/**
 * IPermissionsProvider.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:Permissions!
 * @subpackage     DI
 * @since          1.0.0
 *
 * @date           12.10.14
 */

declare(strict_types = 1);

namespace IPub\Permissions\DI;

/**
 * Extension providers interface for permissions
 *
 * @package        iPublikuj:Permissions!
 * @subpackage     DI
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
interface IPermissionsProvider
{
	/**
	 * Return array of permissions
	 *
	 * @return array
	 */
	function getPermissions();
}
