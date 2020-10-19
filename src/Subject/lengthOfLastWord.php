<?php
/**
 *最后一个单词的长度
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class isValid
{
    /**
     * 最后一个单词的长度算法
     *
     * @access public
     * @param string $s 目标值
     * @return int
     */
    public function achieve($s)
    {
        if (empty($s)) return 0;
        $count = strlen($s);
        $len = 0;
        for ($i=$count-1;$i>=0;$i--) {
            if ($s[$i] != ' ') {
                $len++;
            }
            if ($len !=0 && $s[$i] == ' ') {
                break;
            }
        }
        return $len;
    }
    /**
     * thinking
     * 最后一个单词的长度算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
从后往前遍历，有空格且有计算过字符时返回。
EOF;
    }
}
