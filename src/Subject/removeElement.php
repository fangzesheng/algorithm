<?php
/**
 *移除元素
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class removeElement
{
    /**
     * 移除元素算法
     *
     * @access public
     * @param array $nums 数组
     * @param int $val 目标值
     * @return int
     */
    public function achieve(&$nums, $val)
    {
        for( $i = 0,$j = 0;$i<count($nums);$i++ ){
            if( $nums[$i] != $val ){
                $nums[$j] = $nums[$i];
                $j++;
            }
        }
        return $j;
    }
    /**
     * thinking
     * 移除元素算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：双指针
当 nums[j]nums[j] 与给定的值相等时，递增 jj 以跳过该元素。只要 nums[j] \neq valnums[j] =val，我们就复制 nums[j]nums[j] 到 nums[i]nums[i] 并同时递增两个索引。重复这一过程，直到 jj 到达数组的末尾，该数组的新长度为 ii。
方法二：双指针 —— 当要删除的元素很少时
当我们遇到 nums[i] = valnums[i]=val 时，我们可以将当前元素与最后一个元素进行交换，并释放最后一个元素。这实际上使数组的大小减少了 1。
请注意，被交换的最后一个元素可能是您想要移除的值。但是不要担心，在下一次迭代中，我们仍然会检查这个元素。
EOF;
    }
}
