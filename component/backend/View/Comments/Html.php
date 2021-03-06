<?php
/**
 * @package   AkeebaEngage
 * @copyright Copyright (c)2020-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace Akeeba\Engage\Admin\View\Comments;

defined('_JEXEC') or die;

use Akeeba\Engage\Admin\Model\Comments;
use FOF30\View\DataView\Html as HtmlView;

class Html extends HtmlView
{
	private $commentsPerAsset = [];

	public function onBeforeBrowse()
	{
		/** @var Comments $model */
		$model = $this->getModel();

		$model->savestate(1);
		$model->where('asset_id', 'ne', '0');
		$model->orderBy('created_on', 'DESC');

		parent::onBeforeBrowse();
	}
}