<?php

/**
 * Class ViewData_Error_500
 * 500エラーページのビューレスポンスデータ
 */
class ViewData_Error_500 implements ViewData_Interface
{

    /** @var string 画面に表示するメッセージ */
    private $message;

    /** @var string スタックトレース */
    private $trace;

    /** @var bool スタックトレースを表示するか */
    private $showTrace;

    /**
     * ViewData_Error_500 constructor.
     * @param string $message
     * @param string $trace
     * @param bool $showTrace
     */
    public function __construct(string $message, string $trace, bool $showTrace)
    {
        $this->message = $message;
        $this->trace = $trace;
        $this->showTrace = $showTrace;
    }

    /**
     * Viewで使用するためのレスポンスデータを連想配列で返却する
     * @return array
     */
    public function toViewArray(): array
    {
        return [
            'message' => $this->message,
            'trace' => $this->trace,
            'show_trace' => $this->showTrace,
        ];
    }
}
