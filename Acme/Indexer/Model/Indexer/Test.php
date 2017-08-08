<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/4/17
 * Time: 13:34
 */

namespace Acme\Indexer\Model\Indexer;

use Magento\Framework\Indexer\ActionInterface;
use Magento\Framework\Mview\ActionInterface as MViewInterface;

class Test implements ActionInterface, MViewInterface
{

    /**
     * Execute full indexation
     *
     * @return void
     */
    public function executeFull()
    {
        // TODO: Implement executeFull() method.
    }

    /**
     * Execute partial indexation by ID list
     *
     * @param int[] $ids
     * @return void
     */
    public function executeList(array $ids)
    {
        // TODO: Implement executeList() method.
    }

    /**
     * Execute partial indexation by ID
     *
     * @param int $id
     * @return void
     */
    public function executeRow($id)
    {
        // TODO: Implement executeRow() method.
    }

    /**
     * Execute materialization on ids entities
     *
     * @param int[] $ids
     * @return void
     * @api
     */
    public function execute($ids)
    {
        // TODO: Implement execute() method.
    }
}