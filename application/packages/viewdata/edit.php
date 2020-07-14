<?php

/**
 * Class ViewData_Edit
 * editページのビューレスポンスデータ
 */
class ViewData_Edit implements ViewData_Interface
{
    /** @var string 画面に表示するメッセージ */
    private $companyName;
    private $title;
    private $text;
    private $characterLimit;
    /**
     * ViewData_Edit constructor.
     * @param string $companyName
     * @param string $title
     * @param string $text
     * @param string $characterLimit
     */
    public function __construct(string $companyName, string $title, string $text, string $characterLimit)
    {
        $this->companyName = $companyName;
        $this->title = $title;
        $this->text = $text;
        $this->characterLimit = $characterLimit;
    }

    /**
     * Viewで使用するためのレスポンスデータを連想配列で返却する
     * @return array
     */
    public function toViewArray(): array
    {
        return [
            'company_name' => $this->companyName, 'title' => $this->title, 'text' => $this->text, 'character_limit' => $this->characterLimit
        ];
    }
}
