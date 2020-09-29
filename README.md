
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
* 罗马数字转整数(romanToInt)
    * 给定一个罗马数字，将其转换成整数。
* 最长公共前缀(longestCommonPrefix)
    * 编写一个函数来查找字符串数组中的最长公共前缀。
* 有效的括号(isValid)
    * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。
      有效字符串需满足： 左括号必须用相同类型的右括号闭合。 左括号必须以正确的顺序闭合。      注意空字符串可被认为是有效字符串。
* 合并两个有序链表(mergeTwoLists)
    * 将两个升序链表合并为一个新的 升序 链表并返回。新链表是通过拼接给定的两个链表的所有节点组成的。
* 删除排序数组中的重复项(removeDuplicates)
    * 给定一个排序数组，你需要在 原地 删除重复出现的元素，使得每个元素只出现一次，返回移除后数组的新长度。不要使用额外的数组空间，你必须在 原地 修改输入数组 并在使用 O(1) 额外空间的条件下完成。
* 移除元素(removeElement)
    * 给你一个数组 nums 和一个值 val，你需要 原地 移除所有数值等于 val 的元素，并返回移除后数组的新长度。不要使用额外的数组空间，你必须仅使用 O(1) 额外空间并在不复制数组的情况下从数组中修改输入数组。元素的顺序可以改变。你不需要考虑数组中超出新长度后面的元素。
* 实现 strStr算法(strStr)
    * 给定一个 haystack 字符串和一个 needle 字符串，在 haystack 字符串中找出 needle 字符串出现的第一个位置 (从0开始)。如果不存在，则返回  -1。




    





