<?php
/**
 *加一
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class plusOne
{
    /**
     * 加一算法
     *
     * @access public
     * @param array $digits 目标值
     * @return int
     */
    public function achieve($digits)
    {
        $length = count($digits);
        $digits[$length - 1] += 1;
        for ($i = $length - 1; $i > 0; --$i) {
            if ($digits[$i] >= 10) {
                $digits[$i] -= 10;
                $digits[$i - 1] += 1;
            }
        }

        if ($digits[0] >= 10) {
            $digits[0] -= 10;
            array_unshift($digits, 1);
        }
        return $digits;
    }
    /**
     * thinking
     * 加一算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
末位无进位，则末位加一即可，因为末位无进位，前面也不可能产生进位，比如 45 => 46
末位有进位，在中间位置进位停止，则需要找到进位的典型标志，即为当前位 %10后为 0，则前一位加 1，直到不为 0 为止，比如 499 => 500
末位有进位，并且一直进位到最前方导致结果多出一位，对于这种情况，需要在第 2 种情况遍历结束的基础上，进行单独处理，比如 999 => 1000
在下方的 Java 和 JavaScript 代码中，对于第三种情况，对其他位进行了赋值 0 处理，Java 比较 tricky 直接 new 数组即可，JavaScript 则使用了 ES6 语法进行赋值
时间复杂度：O(n)
EOF;
    }
}

