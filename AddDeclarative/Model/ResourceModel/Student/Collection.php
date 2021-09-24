<?php

namespace Zidenyk\AddDeclaretive\Model\ResourceModel\Student;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Zidenyk\AddDeclaretive\Model\ResourceModel\Student;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Zidenyk\AddDeclaretive\Model\Student::class,
            Student::class
        );
    }
}
