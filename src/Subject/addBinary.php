<?php
/**
 *二进制求和
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class addBinary
{
    /**
     * 二进制求和算法
     *
     * @access public
     * @param int $n 目标值
     * @return bool
     */
    public function achieve($n)
    {
    $len1 = strlen($a);
    $len2 = strlen($b);
    if ($len1 == 0) return $b;
    if ($len2 == 0) return $a;
    $return = '';
    $carry = 0;
    $i = $len1 - 1;
    $j = $len2 - 1;
    while ($i >= 0 || $j >= 0 || $carry) {
        $sum = $carry;
        if ($i >= 0) {
            $sum += substr($a, $i, 1);
            $i--;
        }

        if ($j >= 0) {
            $sum += substr($b, $j, 1);
            $j--;
        }
        $carry = $sum >= 2 ? 1 : 0;
        $return = ($sum & 1) . $return;
    }
    return $return;
    }
    /**
     * thinking
     * 二进制求和算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
我们可以借鉴「列竖式」的方法，末尾对齐，逐位相加。在十进制的计算中「逢十进一」，二进制中我们需要「逢二进一」。
EOF;
    }
}
