<?php
/**
 *x 的平方根
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class mySqrt
{
    /**
     * x 的平方根算法
     *
     * @access public
     * @param int $x 目标值
     * @return int
     */
    public function achieve($x)
    {
        if ($x <= 1) return $x;
        $l = 1;
        $r = floor($x / 2) + 1;
        while ($l < $r) {
            $mid = $l + floor(($r - $l + 1) / 2);
            if ($mid == $x / $mid) return $mid;
            if ($mid < $x / $mid) {
                $l = $mid;
            } else {
                $r = $mid - 1;
            }
        }
        return $l;
    }
    /**
     * thinking
     * x 的平方根算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
由于x平方根的整数部分是满足 k^2 < x 的最大k值，因此我们可以对k进行二分查找，从而得到答案。
EOF;
    }
}
