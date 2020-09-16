<?php
/**
 *罗马数字转整数
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class romanToInt
{
    /**
     * 罗马数字转整数算法
     *
     * @access public
     * @param int $s 目标值
     * @return int
     */
    public function achieve($s)
    {
        $length = strlen($s);
        $arr = ['I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000];
        $sum = 0;
        $preNum = $arr[$s[0]] ?? 0;
        for($i = 1;$i < $length; $i ++) {
            $num = $arr[$s[$i]] ?? 0;
            if($preNum < $num) {
                $sum -= $preNum;
            } else {
                $sum += $preNum;
            }
            $preNum = $num;
        }
        return $sum += $preNum;
    }
    /**
     * thinking
     * 罗马数字转整数算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
把一个小值放在大值的左边，就是做减法，否则为加法。
在代码实现上，可以往后看多一位，对比当前位与后一位的大小关系，从而确定当前位是加还是减法。当没有下一位时，做加法即可。
也可保留当前位的值，当遍历到下一位的时，对比保留值与遍历位的大小关系，再确定保留值为加还是减。最后一位做加法即可。
EOF;
    }
}
