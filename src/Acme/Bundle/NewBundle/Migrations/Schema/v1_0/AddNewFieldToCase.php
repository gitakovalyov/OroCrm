<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 6/27/18
 * Time: 12:32 PM
 */

namespace Acme\Bundle\NewBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class AddNewFieldToCase implements Migration
{
    public function up(Schema $schema, QueryBag $queries)
    {
        $table = $schema->getTable('orocrm_case');
        $table->addColumn('test', 'string', [
            'oro_options' => [
                'extend' => ['owner' => ExtendScope::OWNER_CUSTOM],
                'datagrid' => ['is_visible' => false],
                'entity' => ['label' => 'New Test3'],
                'dataaudit' => ['auditable' => true],
            ],
        ]);
    }
}