<?php
/**
 *有效的括号
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class isValid
{
    /**
     * 有效的括号算法
     *
     * @access public
     * @param string $s 目标值
     * @return bool
     */
    public function achieve($s)
    {
        $arr = [
            ')'=>'(',
            ']'=>'[',
            '}'=>'{',
        ];
        $count = strlen($s);
        $strack = [];
        for ($i=0;$i<$count;$i++) {
            if (isset($arr[$s[$i]])) {
                $tmp = array_pop($strack);
                if ($arr[$s[$i]] != $tmp) {
                    return false;
                }
            } else {
                $strack[] = $s[$i];
            }
        }
        return !boolval($strack);
    }
    /**
     * thinking
     * 有效的括号算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
我们对给定的字符串 ss 进行遍历，当我们遇到一个左括号时，我们会期望在后续的遍历中，有一个相同类型的右括号将其闭合。由于后遇到的左括号要先闭合，因此我们可以将这个左括号放入栈顶。
当我们遇到一个右括号时，我们需要将一个相同类型的左括号闭合。此时，我们可以取出栈顶的左括号并判断它们是否是相同类型的括号。如果不是相同的类型，或者栈中并没有左括号，那么字符串 ss 无效，返回 \text{False}False。为了快速判断括号的类型，我们可以使用哈希映射（HashMap）存储每一种括号。哈希映射的键为右括号，值为相同类型的左括号。
在遍历结束后，如果栈中没有左括号，说明我们将字符串 ss 中的所有左括号闭合，返回 \text{True}True，否则返回 \text{False}False。
注意到有效字符串的长度一定为偶数，因此如果字符串的长度为奇数，我们可以直接返回 \text{False}False，省去后续的遍历判断过程。
EOF;
    }
}
