<?php

/**
 * Interface ViewData_Interface
 * ビューに渡すレスポンスを生成するインタフェース
 */
interface ViewData_Interface
{
    /**
     * Viewで使用するためのレスポンスデータを連想配列で返却する
     * @return array
     */
    function toViewArray() : array;
}
