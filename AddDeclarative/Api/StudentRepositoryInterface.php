<?php

namespace Zidenyk\AddDeclaretive\Api;

interface StudentRepositoryInterface
{
    /**
     * @param int $id
     * @return \Zidenyk\AddDeclaretive\Api\Data\StudentInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \Zidenyk\AddDeclaretive\Api\Data\StudentInterface $student
     * @return \Zidenyk\AddDeclaretive\Api\Data\StudentInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(\Zidenyk\AddDeclaretive\Api\Data\StudentInterface $student);

    /**
     * @param \Zidenyk\AddDeclaretive\Api\Data\StudentInterface $student
     * @return bool true on success
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function delete(\Zidenyk\AddDeclaretive\Api\Data\StudentInterface $student);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Zidenyk\AddDeclaretive\Api\Data\StudentSearchResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
