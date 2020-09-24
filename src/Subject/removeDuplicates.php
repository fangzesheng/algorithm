<?php
/**
 *删除排序数组中的重复项
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class removeDuplicates
{
    /**
     * 删除排序数组中的重复项算法
     *
     * @access public
     * @param int $nums 目标值
     * @return int
     */
    public function achieve(&$nums)
    {
        if ($count = count($nums)){
            $i = 0;
            for ($j = 1; $j < $count; $j++) {
                if ($nums[$j] != $nums[$i]) {
                    $i++;
                    $nums[$i] = $nums[$j];
                }
            }
            return $i+1;
        }else{
            return 0;
        }
    }
    /**
     * thinking
     * 删除排序数组中的重复项算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
数组完成排序后，我们可以放置两个指针 ii 和 jj，其中 ii 是慢指针，而 jj 是快指针。只要 nums[i] = nums[j]nums[i]=nums[j]，我们就增加 jj 以跳过重复项。
当我们遇到 nums[j] \neq nums[i]nums[j]=nums[i] 时，跳过重复项的运行已经结束，因此我们必须把它（nums[j]nums[j]）的值复制到 nums[i + 1]nums[i+1]。然后递增 ii，接着我们将再次重复相同的过程，直到 jj 到达数组的末尾为止。
EOF;
    }
}
