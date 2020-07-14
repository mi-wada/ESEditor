<?php

/**
 * Class ViewData_Index
 * インデックスページのビューレスポンスデータ
 */
class ViewData_Index implements ViewData_Interface
{

    /** @var string 画面に表示するメッセージ */
    private $message;

    /**
     * ViewResponse_Index constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * Viewで使用するためのレスポンスデータを連想配列で返却する
     * @return array
     */
    public function toViewArray(): array
    {
        return [
            'message' => $this->message,
        ];
    }
}
