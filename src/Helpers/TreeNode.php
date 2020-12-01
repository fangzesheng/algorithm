<?php
/**
 *树节点
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Helpers;

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
