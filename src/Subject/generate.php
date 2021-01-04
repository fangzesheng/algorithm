<?php
/**
 *杨辉三角
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class generate
{
    /**
     * 杨辉三角算法
     *
     * @access public
     * @param string $num 前行数
     * @return array
     */
    public function achieve($num)
    {
        $triangle = [];
        for ($i = 0; $i < $num; $i++) {
            $tmp = [1];
            for ($j = 0; $j < $i; $j++) {
                $tmp[] = $j == $i - 1 ? $triangle[$i - 1][$j] : $triangle[$i - 1][$j] + $triangle[$i - 1][$j + 1];
            }
            $triangle[] = $tmp;
        }
        return $triangle;
    }
    /**
     * thinking
     * 杨辉三角算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
0、从0开始遍历每一层。
1、遍历当前层的时候，把当前层的数据存在临时变量tmp中，初始化为只有一个元素1的数组。 2、遍历当前层上层的元素，每次把上层相邻的元素加和，追加到tmp中，初始化为只有一个元素1的数组。2、遍历当前层上层的元素，每次把上层相邻的元素加和，追加到tmp中。
3、当前层上层的元素遍历完成后，当前层的数据就生成完成，放到终止结果中。
EOF;
    }
}
