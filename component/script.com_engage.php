<?php
/**
 * @package   AkeebaEngage
 * @copyright Copyright (c)2020-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

// no direct access

defined('_JEXEC') or die();

// Load FOF if not already loaded
if (!defined('FOF30_INCLUDED') && !@include_once(JPATH_LIBRARIES . '/fof30/include.php'))
{
	throw new RuntimeException('This component requires FOF 3.0.');
}

class Com_EngageInstallerScript extends \FOF30\Utils\InstallScript\Component
{
	/**
	 * The component's name
	 *
	 * @var   string
	 */
	protected $componentName = 'com_engage';

	/**
	 * The title of the component (printed on installation and uninstallation messages)
	 *
	 * @var string
	 */
	protected $componentTitle = 'Akeeba Engage';

	/**
	 * The minimum PHP version required to install this extension
	 *
	 * @var   string
	 */
	protected $minimumPHPVersion = '7.1.0';

	/**
	 * The minimum Joomla! version required to install this extension
	 *
	 * @var   string
	 */
	protected $minimumJoomlaVersion = '3.9.0';

	/**
	 * The maximum Joomla! version this extension can be installed on
	 *
	 * @var   string
	 */
	protected $maximumJoomlaVersion = '4.0.99';

	/**
	 * Obsolete files and folders to remove from both paid and free releases. This is used when you refactor code and
	 * some files inevitably become obsolete and need to be removed.
	 *
	 * @var   array
	 */
	protected $removeFilesAllVersions = [
		'files'   => [

		],
		'folders' => [

		],
	];

	/**
	 * Obsolete files and folders to remove from the free version only. This is used when you move a feature from the
	 * free version of your extension to its paid version. If you don't have such a distinction you can ignore this.
	 *
	 * @var   array
	 */
	protected $removeFilesFree = [
		'files'   => [

		],
		'folders' => [

		],
	];

	/**
	 * The list of obsolete extra modules and plugins to uninstall on component upgrade / installation.
	 *
	 * @var array
	 */
	protected $uninstallation_queue = [
		// modules => { (folder) => { (module) }* }*
		'modules' => [
			'admin' => [],
			'site'  => [],
		],
		// plugins => { (folder) => { (element) }* }*
		'plugins' => [

		],
	];
}
