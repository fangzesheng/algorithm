<?php
/**
 *二叉树的最大深度
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Subject;

use Algorithm\Helpers\Tree;

class maxDepth
{
    /**
     * 二叉树的最大深度算法
     *
     * @access public
     * @param treeNode $root 树的数组
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
        if ($root === null) return 0;
        $left = $this->achieve($root->left);
        $right = $this->achieve($root->right);
        return max($left, $right) + 1;
    }
    /**
     * thinking
     * 二叉树的最大深度算法思路
     *
     * @access public
     * @return string
     */
    public function thinking()
    {
        return <<<EOF
如果我们知道了左子树和右子树的最大深度 ll 和 rr，那么该二叉树的最大深度即为
max(l,r)+1
而左子树和右子树的最大深度又可以以同样的方式进行计算。因此我们在计算当前二叉树的最大深度时，可以先递归计算出其左子树和右子树的最大深度，然后在 O(1)O(1) 时间内计算出当前二叉树的最大深度。递归在访问到空节点时退出
EOF;
    }
}
