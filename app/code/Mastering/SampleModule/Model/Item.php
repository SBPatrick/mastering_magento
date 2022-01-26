<?php /** @noinspection ALL */

namespace Mastering\SampleModule\Model;

use Magento\Framework\Model\AbstractExtensibleModel;

class Item extends AbstractExtensibleModel
{
    protected function _construct()
    {
        $this->_init(\Mastering\SampleModule\Model\ResourceModel\Item::class);
    }
}
