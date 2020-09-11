<?php
/**
 *整数反转
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class numReverse
{
    /**
     * 整数反转算法
     *
     * @access public
     * @param int $x 目标值
     * @return int
     */
    public function achieve($x)
    {
        $newNum=0;
        while($x != 0){
            $yu = $x%10;
            $x = intval($x/10);
            $newNum = $newNum*10 + $yu;
        }
        if ($newNum > (pow(2,31)-1) || $newNum < pow(-2,31)) {
            return 0;
        }
        return $newNum;
    }
    /**
     * thinking
     * 整数反转算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
反转整数的方法可以与反转字符串进行类比。
我们想重复“弹出” xx 的最后一位数字，并将它“推入”到 \text{rev}rev 的后面。最后，\text{rev}rev 将与 xx 相反。
要在没有辅助堆栈 / 数组的帮助下 “弹出” 和 “推入” 数字
EOF;
    }
}
