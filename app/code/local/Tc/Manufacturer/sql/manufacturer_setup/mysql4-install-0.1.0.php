<?php
$installer=$this;
//if(false === $installer->tableExists('manufacturer')){
    $table = $installer->getConnection()->newTable(
        $installer->getTable('manufacturer'))
        ->addColumn('id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary'  => true,
                'unsigned' => true,
            ],
            'id'
        )
        ->addColumn('name',
            Table::TYPE_TEXT,
            255,
            [],
            'manufacturerurer name'
        )
        ->addColumn('description',
            Table::TYPE_TEXT,
            255,
            [],
            'manufacturerurer description'
        )
        ->addColumn('logo_url',
            Table::TYPE_TEXT,
            255,
            [],
            'manufacturerurer logo URL'
        )
        ->addColumn('created_date',
            Table::TYPE_TIMESTAMP,
            null,
            [
                'nullable' => false,
                'default' => Table::TIMESTAMP_INIT
            ],
            'manufacturerurer created_date'
        )
        ->addColumn('updated_date',
            Table::TYPE_TIMESTAMP,
            null,
            [
                'nullable' => false,
                'default' => Table::TIMESTAMP_INIT_UPDATE
            ],
            'manufacturerurer Update date'
        )
        ->setComment('Manufacturer Table');

    $installer->getConnection()->createTable($table);
