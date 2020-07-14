<?php

/**
 * Class ActiveRecord_Users
 * @property string $table_name
 */
class ActiveRecord_Users extends ActiveRecord\Model
{

    /**
     * テーブル名
     * @var string
     */
    static $table_name = 'users';

    //validation 未完成
    static $validates_presence_of = [
        ['user_id','user_password']
    ];
    static $validates_uniqueness_of = [
        ['user_id']
    ];
}
