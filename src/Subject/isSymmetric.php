<?php
/**
 *对称二叉树
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

use Algorithm\Helpers\Tree;

class isSymmetric
{
    /**
     * 对称二叉树算法
     *
     * @access public
     * @param array $root 数组
     * @return bool
     */
    public function achieve($root)
    {
        if(is_array($root) && $root){
            $tree = new Tree();
            foreach ($root as $v){
                $tree->add($v);
            }
            $tree->breadth();
            $root = $tree->root;
        }
        return $this->check($root, $root);
    }

    /**
     *
     * @access private
     * @param array $left
     * @param array $right
     * @return bool
     */
    private function check($left, $right)
    {
        if ($left === null && $right === null) return true;
        if ($left === null || $right === null) return false;
        if ($left->val !== $right->val) return false;
        return $this->check($left->left, $right->right) && $this->check($left->right, $right->left);
    }

    /**
     * thinking
     * 对称二叉树算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
方法一：递归
可以实现这样一个递归函数，通过「同步移动」两个指针的方法来遍历这棵树，pp 指针和 qq 指针一开始都指向这棵树的根，随后 pp 右移时，qq 左移，pp 左移时，qq 右移。每次检查当前 pp 和 qq 节点的值是否相等，如果相等再判断左右子树是否对称。
方法二：迭代
引入一个队列，这是把递归程序改写成迭代程序的常用方法。初始化时我们把根节点入队两次。每次提取两个结点并比较它们的值（队列中每两个连续的结点应该是相等的，而且它们的子树互为镜像），然后将两个结点的左右子结点按相反的顺序插入队列中。当队列为空时，或者我们检测到树不对称（即从队列中取出两个不相等的连续结点）时，该算法结束。
EOF;
    }
}
