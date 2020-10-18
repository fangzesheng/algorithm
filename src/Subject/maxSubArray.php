<?php
/**
 *最大子序和
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class maxSubArray
{
    /**
     * 最大子序和算法
     *
     * @access public
     * @param array $nums 目标值
     * @return int
     */
    public function achieve($nums)
    {
        $maxNum = $nums[0];
        $tmp = $nums[0];

        foreach($nums as $k => $v){
            if($k === 0){
                continue;
            }

            if($tmp > 0){
                $tmp = $tmp + $v;
            }else{
                $tmp = $v;
            }
            $maxNum = $maxNum > $tmp ? $maxNum : $tmp;
        }
        return $maxNum;
    }
    /**
     * thinking
     * 最大子序和算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
这道题用动态规划的思路并不难解决，比较难的是后文提出的用分治法求解，但由于其不是最优解法，所以先不列出来
动态规划的是首先对数组进行遍历，当前最大连续子序列和为 sum，结果为 ans
如果 sum > 0，则说明 sum 对结果有增益效果，则 sum 保留并加上当前遍历数字
如果 sum <= 0，则说明 sum 对结果无增益效果，需要舍弃，则 sum 直接更新为当前遍历数字
每次比较 sum 和 ans的大小，将最大值置为ans，遍历结束返回结果
时间复杂度：O(n)O(n)
EOF;
    }
}
