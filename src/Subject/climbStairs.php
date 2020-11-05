<?php
/**
 *爬楼梯
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class climbStairs
{
    /**
     * 爬楼梯算法
     *
     * @access public
     * @param int $n 目标值
     * @return int
     */
    public function achieve($n)
    {
        if( $n <= 2 ) return $n;
        $a = 1;
        $b = 2;
        for($i=3; $i<=$n; $i++){
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        return $b;
    }
    /**
     * thinking
     * 爬楼梯算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
爬到第 xx 级台阶的方案数是爬到第 x - 1x−1 级台阶的方案数和爬到第 x - 2x−2 级台阶的方案数的和。很好理解，因为每次只能爬 11 级或 22 级，所以 f(x)f(x) 只能从 f(x - 1)f(x−1) 和 f(x - 2)f(x−2) 转移过来，而这里要统计方案总数，我们就需要对这两项的贡献求和。
EOF;
    }
}
