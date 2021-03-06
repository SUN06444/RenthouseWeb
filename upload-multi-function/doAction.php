<?php
/**
 * 表單接收頁面
 */

// 網頁編碼宣告（防止產生亂碼）
header('content-type:text/html;charset=utf-8');
// 封裝好的單一及多檔案上傳 function
include_once 'upload.func.php';
// 重新建構上傳檔案 array 格式
$files = getFiles();

// 依上傳檔案數執行
foreach ($files as $fileInfo) {
    // 呼叫封裝好的 function
    $res = uploadFile($fileInfo);

    // 顯示檔案上傳訊息
    echo $res['mes'] . '<br>';

    // 上傳成功，將實際儲存檔名存入 array（以便存入資料庫）
    if (!empty($res['dest'])) {
        $uploadFiles[] = $res['dest'];
    }
}

print_r($uploadFiles);