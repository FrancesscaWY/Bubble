<?php
$directory = 'D:\PHP\file\forward part\font'; // 文件夹路径
$newNamePrefix = 'font_style'; // 重命名文件的前缀
// 获取文件夹内的所有文件
$files = scandir($directory);//读取文件夹下的文件及目录并存储在数组中
$count = 1;
//'D:\PHP\file\forward part\font'
// 删除.和..这两个特殊目录
unset($files[0], $files[1]);
foreach ($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION); // 获取文件扩展名
    $newName = $newNamePrefix . str_pad($count, 2, '0', STR_PAD_LEFT) . '.' . $extension; // 生成新的文件名
    $original_name = $directory . '\\' . $file;//原文件名+路径
    $new_name = $directory . '\\' . $newName;//新文件名+路径
    $original_name = (string)$original_name;
    $new_name = (string)$new_name;
    rename($original_name, $new_name); // 重命名文件
    $count++;
    }
echo '文件重命名成功';
?>