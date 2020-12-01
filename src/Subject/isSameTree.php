<?php
/**
 *相同的树
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

use Algorithm\Helpers\Tree;

class isSameTree
{
    /**
     * 相同的树算法
     *
     * @access public
     * @param treeNode $p 目标值1
     * @param treeNode $g 目标值2
     * @return bool
     */
    public function achieve($p, $q)
    {
        if(is_array($p) && $p){
            $tree1 = new Tree();
            foreach ($p as $v1){
                $tree1->add($v1);
            }
            $tree1->breadth();
            $p = $tree1->root;
        }
        if(is_array($q) && $q){
            $tree2 = new Tree();
            foreach ($q as $v2){
                $tree2->add($v2);
            }
            $tree2->breadth();
            $q = $tree2->root;
        }
        if($p === null && $q === null) return true;
        if($p === null || $q === null) return false;
        if($p->val !== $q->val) return false;
        return $this->achieve($p->left, $q->left) && $this->achieve($p->right, $q->right);
    }
    /**
     * thinking
     * 相同的树算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：深度优先搜索
如果两个二叉树都为空，则两个二叉树相同。如果两个二叉树中有且只有一个为空，则两个二叉树一定不相同。
如果两个二叉树都不为空，那么首先判断它们的根节点的值是否相同，若不相同则两个二叉树一定不同，若相同，再分别判断两个二叉树的左子树是否相同以及右子树是否相同。这是一个递归的过程，因此可以使用深度优先搜索，递归地判断两个二叉树是否相同。
方法二：广度优先搜索
也可以通过广度优先搜索判断两个二叉树是否相同。同样首先判断两个二叉树是否为空，如果两个二叉树都不为空，则从两个二叉树的根节点开始广度优先搜索。
使用两个队列分别存储两个二叉树的节点。初始时将两个二叉树的根节点分别加入两个队列。每次从两个队列各取出一个节点，进行如下比较操作。
比较两个节点的值，如果两个节点的值不相同则两个二叉树一定不同；
如果两个节点的值相同，则判断两个节点的子节点是否为空，如果只有一个节点的左子节点为空，或者只有一个节点的右子节点为空，则两个二叉树的结构不同，因此两个二叉树一定不同；
如果两个节点的子节点的结构相同，则将两个节点的非空子节点分别加入两个队列，子节点加入队列时需要注意顺序，如果左右子节点都不为空，则先加入左子节点，后加入右子节点。
如果搜索结束时两个队列同时为空，则两个二叉树相同。如果只有一个队列为空，则两个二叉树的结构不同，因此两个二叉树不同。
EOF;
    }
}
