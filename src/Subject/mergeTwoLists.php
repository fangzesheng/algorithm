<?php
/**
 *合并两个有序链表
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

class mergeTwoLists
{
    /**
     * 合并两个有序链表算法
     *
     * @access public
     * @param ListNode $l1 目标值1
     * @param ListNode $l2 目标值2
     * @return ListNode
     */
    public function achieve($l1, $l2)
    {
        if($l1 == null) {
            return $l2;
        }
        if($l2 == null) {
            return $l1;
        }
        $dummyHead = new ListNode(null);
        $curr = $dummyHead;
        while($l1 != null && $l2 != null) {
            if($l1->val <= $l2->val) {
                $curr->next = $l1;
                $curr = $l1;
                $l1 = $l1->next;
            } else {
                $curr->next = $l2;
                $curr = $l2;
                $l2 = $l2->next;
            }
        }
        if($l1 != null) {
            $curr->next = $l1;
        }
        if($l2 != null) {
            $curr->next = $l2;
        }
        return $dummyHead->next;
    }
    /**
     * thinking
     * 合并两个有序链表算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：递归
如果 l1 或者 l2 一开始就是空链表 ，那么没有任何操作需要合并，所以我们只需要返回非空链表。否则，我们要判断 l1 和 l2 哪一个链表的头节点的值更小，然后递归地决定下一个添加到结果里的节点。如果两个链表有一个为空，递归结束
方法二：迭代
我们可以用迭代的方法来实现上述算法。当 l1 和 l2 都不是空链表时，判断 l1 和 l2 哪一个链表的头节点的值更小，将较小值的节点添加到结果里，当一个节点被添加到结果里之后，将对应链表中的节点向后移一位。
EOF;
    }
}
