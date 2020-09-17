<?php
/**
 *最长公共前缀
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class longestCommonPrefix
{
    /**
     * 最长公共前缀算法
     *
     * @access public
     * @param int $strs 目标值
     * @return int
     */
    public function achieve($strs)
    {
        if(array_values($strs)!=$strs)return '';
        if (count($strs)==1)return $strs[0];
        $len = strlen($strs[0]);
        $i = 0;
        while ($i<=$len) {
            $str =  substr($strs[0],$i,1);
            for ($j = 1; $j < count($strs); $j++) {
                if ($str != substr($strs[$j],$i,1) or $i==$len) {
                    return substr($strs[0],0,$i);
                }
            }
            $i++;
        }
        return '';
    }
    /**
     * thinking
     * 最长公共前缀算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：横向扫描
依次遍历字符串数组中的每个字符串，对于每个遍历到的字符串，更新最长公共前缀，当遍历完所有的字符串以后，即可得到字符串数组中的最长公共前缀。
方法二：纵向扫描
从前往后遍历所有字符串的每一列，比较相同列上的字符是否相同，如果相同则继续对下一列进行比较，如果不相同则当前列不再属于公共前缀，当前列之前的部分为最长公共前缀。
方法三：分治
可以分解成两个子问题 \textit{LCP}(S_i \ldots S_{mid})LCP，对两个子问题分别求解，然后对两个子问题的解计算最长公共前缀，即为原问题的解
方法四：二分查找
最长公共前缀的长度不会超过字符串数组中的最短字符串的长度。用 \textit{minLength}minLength 表示字符串数组中的最短字符串的长度，则可以在 [0,\textit{minLength}][0,minLength] 的范围内通过二分查找得到最长公共前缀的长度。每次取查找范围的中间值 \textit{mid}mid，判断每个字符串的长度为 \textit{mid}mid 的前缀是否相同，如果相同则最长公共前缀的长度一定大于或等于 \textit{mid}mid，如果不相同则最长公共前缀的长度一定小于 \textit{mid}mid，通过上述方式将查找范围缩小一半，直到得到最长公共前缀的长度。
EOF;
    }
}
