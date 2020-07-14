<?php

/**
 * Class ViewData_Company
 * company.tplのビューレスポンスデータ
 */
class ViewData_Company implements ViewData_Interface
{
    /** @var string 企業名*/
    private $companyName;
    /** @var array ある企業のエントリーシートに必要な項目*/
    private $titles;

    /**
     * ViewData_Company constructor.
     * @param string $companyName
     * @param array $titles
     */
    public function __construct(string $companyName, array $titles)
    {
        $this->companyName = $companyName;
        $this->titles = $titles;
    }

    /**
     * Viewで使用するためのレスポンスデータを連想配列で返却する
     * @return array
     */
    public function toViewArray(): array
    {
        return [
            'companyName' => $this->companyName, 'titles' => $this->titles
        ];
    }
}
