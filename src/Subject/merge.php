<?php
/**
 *合并两个有序数组
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class merge
{
    /**
     * 合并两个有序数组算法
     *
     * @access public
     * @param int $nums1 有序整数数组1
     * @param int $m 元素数量1
     * @param int $nums2 有序整数数组2
     * @param int $n 元素数量2
     * @return int
     */
    public function achieve(&$nums1, $m, $nums2, $n)
    {
        for ($i = 0; $i < $n; $i++) {
            $nums1[$m+$i] = $nums2[$i];
        }
        sort($nums1);
    }
    /**
     * thinking
     * 合并两个有序数组算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
算法一：最朴素的解法就是将两个数组合并之后再排序。该算法只需要一行(Java是2行)，时间复杂度较差，为O((n + m)\log(n + m))O((n+m)log(n+m))。这是由于这种方法没有利用两个数组本身已经有序这一点。
算法二：一般而言，对于有序数组可以通过 双指针法 达到O(n + m)O(n+m)的时间复杂度。
最直接的算法实现是将指针p1 置为 nums1的开头， p2为 nums2的开头，在每一步将最小值放入输出数组中。
由于 nums1 是用于输出的数组，需要将nums1中的前m个元素放在其他地方，也就需要 O(m)O(m) 的空间复杂度。
EOF;
    }
}
