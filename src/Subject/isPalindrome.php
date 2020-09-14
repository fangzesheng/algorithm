<?php
/**
 *回文数
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class isPalindrome
{
    /**
     * 回文数算法
     *
     * @access public
     * @param int $x 目标值
     * @return bool
     */
    public function achieve($x)
    {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }
        $revertedNumber = 0;
        while ($x > $revertedNumber) {
            $revertedNumber = $revertedNumber * 10 + $x % 10;
            $x = intval($x/10);
        }
        return $x == $revertedNumber || $x == intval($revertedNumber / 10);
    }
    /**
     * thinking
     * 回文数算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：是将数字转换为字符串，并检查字符串是否为回文。但是，这需要额外的非常量空间来创建问题描述中所不允许的字符串。
方法二：是将数字本身反转，然后将反转后的数字与原始数字进行比较，如果它们是相同的，那么这个数字就是回文。
但是，如果反转后的数字大于 \text{int.MAX}int.MAX，我们将遇到整数溢出问题。
按照第二个想法，为了避免数字反转可能导致的溢出问题，为什么不考虑只反转 \text{int}int 数字的一半？毕竟，如果该数字是回文，其后半部分反转后应该与原始数字的前半部分相同。
EOF;
    }
}
