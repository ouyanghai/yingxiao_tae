<?php
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    
    $cacheService->delete("tg_{$sid}");
}
else if (isset($_GET['cname'])) {
    $key = trim($_GET['cname']);
    $cache = $cacheService->get($key);
    
    if (empty($cache)) {
        echo "<p style='text-align:center;'>����Ϊ��</p>";
    } else {
        echo $cache;
    }
}
else {
    echo "<p style='text-align:center;'>�㵱ǰ���ʵ�ҳ������</p>";
}