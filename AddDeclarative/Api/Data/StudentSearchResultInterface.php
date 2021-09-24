<?php

namespace Zidenyk\AddDeclaretive\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface StudentSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Zidenyk\AddDeclaretive\Api\Data\StudentInterface[]
     */
    public function getItems();

    /**
     * @param \Zidenyk\AddDeclaretive\Api\Data\StudentInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
