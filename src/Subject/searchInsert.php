<?php
/**
 *实现 searchInsert
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class searchInsert
{
    /**
     * 实现 searchInsert算法
     *
     * @access public
     * @param array $nums 目标值
     * @param string $target 搜索值
     * @return int
     */
    public function achieve($nums, $target)
    {
        $start = 0;
        $end = count($nums) - 1;
        while($start<=$end){
            $mid = floor($start - ($start - $end)/2);
            if($nums[$mid]==$target){
                return $mid;
            }else if($nums[$mid]<$target){
                $start = $mid +1;
            }else if($nums[$mid]>$target){
                $end = $mid - 1;
            }
        }
        return $start;
    }
    /**
     * thinking
     * 实现 searchInsert算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：二分查找
考虑这个插入的位置 \textit{pos}pos，它成立的条件为：
\textit{nums}[pos-1]<\textit{target}\le \textit{nums}[pos]
nums[pos−1]<target≤nums[pos]
其中 \textit{nums}nums 代表排序数组。由于如果存在这个目标值，我们返回的索引也是 \textit{pos}pos，因此我们可以将两个条件合并得出最后的目标：「在一个有序数组中找第一个大于等于 \textit{target}target 的下标」。
问题转化到这里，直接套用二分法即可，即不断用二分法逼近查找第一个大于等于 \textit{target}target 的下标 。下文给出的代码是笔者习惯的二分写法，\textit{ans}ans 初值设置为数组长度可以省略边界条件的判断，因为存在一种情况是 \textit{target}target 大于数组中的所有数，此时需要插入到数组长度的位置。

EOF;
    }
}
