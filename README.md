
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
    //thinking 算法思路函数
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
* 实现strStr算法(strStr)
    * 给定一个 haystack 字符串和一个 needle 字符串，在 haystack 字符串中找出 needle 字符串出现的第一个位置 (从0开始)。如果不存在，则返回  -1。
* 搜索插入位置(searchInsert)
    * 给定一个排序数组和一个目标值，在数组中找到目标值，并返回其索引。如果目标值不存在于数组中，返回它将会被按顺序插入的位置。你可以假设数组中无重复元素。
* 外观数列(countAndSay)
    * 给定一个正整数 n（1 ≤ n ≤ 30），输出外观数列的第 n 项。
      第一项是数字 1
      描述前一项，这个数是 1 即 “一个 1 ”，记作 11
      描述前一项，这个数是 11 即 “两个 1 ” ，记作 21
      描述前一项，这个数是 21 即 “一个 2 一个 1 ” ，记作 1211
      描述前一项，这个数是 1211 即 “一个 1 一个 2 两个 1 ” ，记作 111221。以此类推。
* 最大子序和(maxSubArray)
    * 给定一个整数数组 nums ，找到一个具有最大和的连续子数组（子数组最少包含一个元素），返回其最大和。
* 最后一个单词的长度(lengthOfLastWord)
    * 给定一个仅包含大小写字母和空格 ' ' 的字符串 s，返回其最后一个单词的长度。如果字符串从左向右滚动显示，那么最后一个单词就是最后出现的单词。如果不存在最后一个单词，请返回 0 。
* 加一(plusOne)
    * 给定一个由整数组成的非空数组所表示的非负整数，在该数的基础上加一。最高位数字存放在数组的首位， 数组中每个元素只存储单个数字。你可以假设除了整数 0 之外，这个整数不会以零开头。
* 二进制求和(addBinary)
    * 给定两个二进制字符串，返回它们的和（用二进制表示）。输入为 非空 字符串且只包含数字 1 和 0。
* x的平方根(mySqrt)
    * 计算并返回 x 的平方根，其中 x 是非负整数。由于返回类型是整数，结果只保留整数的部分，小数部分将被舍去。
* 爬楼梯(climbStairs)
    * 假设你正在爬楼梯。需要 n 阶你才能到达楼顶。每次你可以爬 1 或 2 个台阶。你有多少种不同的方法可以爬到楼顶呢？
* 删除排序链表中的重复元素(deleteDuplicates)
    * 给定一个排序链表，删除所有重复的元素，使得每个元素只出现一次。
* 合并两个有序数组(merge)
    * 给你两个有序整数数组 nums1 和 nums2，请你将 nums2 合并到 nums1 中，使 nums1 成为一个有序数组。
* 相同的树(isSameTree)
    * 给定两个二叉树，编写一个函数来检验它们是否相同。如果两个树在结构上相同，并且节点具有相同的值，则认为它们是相同的。
* 对称二叉树(isSymmetric)
    * 给定一个二叉树，检查它是否是镜像对称的。
* 二叉树的最大深度(maxDepth)
    * 给定一个二叉树，找出其最大深度。二叉树的深度为根节点到最远叶子节点的最长路径上的节点数。
* 杨辉三角(generate)
    * 给定一个非负整数 numRows，生成杨辉三角的前 numRows 行。










