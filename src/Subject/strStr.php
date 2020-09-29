<?php
/**
 *实现 strStr
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class strStr
{
    /**
     * 实现 strStr算法
     *
     * @access public
     * @param string $haystack 目标值
     * @param string $needle 搜索值
     * @return int
     */
    public function achieve($haystack, $needle)
    {
        $i=0;
        $j=0;
        while(isset($haystack[$i]) && isset($needle[$j])){
            if($haystack[$i] == $needle[$j]){
                $i++;
                $j++;
            }else{
                $i = $i - $j + 1;
                $j = 0;
            }
        }
        if($j==strlen($needle)){
            return $i-$j;
        }
        return -1;
    }
    /**
     * thinking
     * 实现 strStr算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：子串逐一比较 - 线性时间复杂度
最直接的方法 - 沿着字符换逐步移动滑动窗口，将窗口内的子串与 needle 字符串比较。
方法二：双指针 - 线性时间复杂度
上一个方法的缺陷是会将 haystack 所有长度为 L 的子串都与 needle 字符串比较，实际上是不需要这么做的。
首先，只有子串的第一个字符跟 needle 字符串第一个字符相同的时候才需要比较。
方法三： Rabin Karp - 常数复杂度
有一种最坏时间复杂度也为 O(N)O(N) 的算法。思路是这样的，先生成窗口内子串的哈希码，然后再跟 needle 字符串的哈希码做比较。
EOF;
    }
}
