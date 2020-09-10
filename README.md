
Algorithm for PHP
----
* 运行最底要求 PHP 版本 5.4 , 建议在 PHP7 上运行以获取最佳性能；
* 算法从互联网上整理所得，如有侵权请联系我删除；
* Algorithm 可以帮助大多数phper算法不怎么好的童鞋，欢迎 fork 或 star 此项目。

功能描述
----
* 实现某一指定算法
* 查看其解题思路和code


安装使用
----
1 通过 Composer 来管理安装
```shell
# 首次安装 线上版本（稳定）
composer require fangzesheng/algorithm

# 更新 algorithm
composer update fangzesheng/algorithm
```

2 实例指定算法
```php
try {
    // twoNumberSum为算法题目，[[1,3,4,56,34,5,2,6],8]为该算法所需要参数，该算法求两个数和所需两个参数，分别为[1,3,4,56,34,5,2,6]和8        
    $upload = new Algorithm('twoNumberSum',[[1,3,4,56,34,5,2,6],8]);
    print_r($upload->achieve());
} catch (Exception $e) {
    // 出错啦，处理下吧
    echo $e->getMessage() . PHP_EOL;
}
```


* 更多算法详情请阅读代码





