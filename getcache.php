<?php
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    
    $cacheService->delete("tg_{$sid}");
}
else if (isset($_GET['cname'])) {
    $key = trim($_GET['cname']);
    $cache = $cacheService->get($key);
    
    if (empty($cache)) {
        echo "<p style='text-align:center;'>缓存为空</p>";
    } else {
        echo $cache;
    }
}
else {
    echo "<p style='text-align:center;'>你当前访问的页面有误</p>";
}