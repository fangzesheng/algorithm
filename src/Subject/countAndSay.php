<?php
/**
 *外观数列
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class countAndSay
{
    /**
     * 外观数列算法
     *
     * @access public
     * @param int $n 目标值
     * @return bool
     */
    public function achieve($n)
    {
        if ($n == 1) {
            return '1';
        }
        $lastStr = $this->achieve($n - 1);
        $strLen = strlen($lastStr);
        $left = 0;
        $right = 0;
        $newStr = '';
        while ($right < $strLen) {
            if ($lastStr[$left] != $lastStr[$right]) {
                $newStr .= ($right - $left) . $lastStr[$left];
                $left = $right;
            }
            $right++;
        }
        $newStr .= ($right - $left) . $lastStr[$left];
        return $newStr;
    }
    /**
     * thinking
     * 外观数列算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
当 left 和 right 所指字符相同时，right 向右移动一位，直到 right 所指与 left 不同。
确定相同字符的个数，既 right - left 的值，该值表示的即是 left 所指字符的个数。
将结果转为以字符的形式储存。
继续历遍，因为 left 和 right 之间的字符已经历遍过了，所以更新指针 left 至 right。
当 right 超出字符范围时，结束循环。
EOF;
    }
}
