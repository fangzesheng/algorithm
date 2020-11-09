<?php
/**
 *删除排序链表中的重复元素
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class deleteDuplicates
{
    /**
     * 删除排序链表中的重复元素算法
     *
     * @access public
     * @param  $head
     * @return bool
     */
    public function achieve($head)
    {
        $curr = $head;
        while($curr!=null && $curr->next!=null){
            if($curr->val==$curr->next->val){
                $curr->next = $curr->next->next;
            }else{
                $curr = $curr->next;
            }
        }
        return $head;
    }
    /**
     * thinking
     * 删除排序链表中的重复元素算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
测试你操作列表的结点指针的能力。由于输入的列表已排序，因此我们可以通过将结点的值与它之后的结点进行比较来确定它是否为重复结点。如果它是重复的，我们更改当前结点的 next 指针，以便它跳过下一个结点并直接指向下一个结点之后的结点。
EOF;
    }
}
