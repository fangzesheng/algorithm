
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
    //achieve 算法实现函数
    print_r($upload->achieve());
    //achieve 算法思路函数
    print_r($upload->thinking());
} catch (Exception $e) {
    // 出错啦，处理下吧
    echo $e->getMessage() . PHP_EOL;
}
```
算法汇总
----
* 两数之和(twoNumberSum)
    * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。你可以假设每种输入只会对应一个答案。但是，数组中同一个元素不能使用两遍。

* 整数反转(numReverse)
    * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。

* 回文数(isPalindrome)
    * 判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。





