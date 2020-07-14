<?php

/**
 * Class ActiveRecord_Companies
 * @property string $table_name
 */
class ActiveRecord_Companies extends ActiveRecord\Model
{
    /**
     * テーブル名
     * @var string
     */
    static $table_name = 'companies';

    //validation 未完成
    static $validates_presence_of = [
        ['company_name','created_by']
    ];
}
