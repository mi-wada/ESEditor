<?php

/**
 * Class ActiveRecord_Entrysheets
 * @property string $table_name
 */
class ActiveRecord_Entrysheets extends ActiveRecord\Model
{
    /**
     * テーブル名
     * @var string
     */
    static $table_name = 'entry_sheets';

    //validation 未完成
    static $validates_presence_of = [
        ['title', 'character_limit', 'company_name', 'created_by']
    ];
}
