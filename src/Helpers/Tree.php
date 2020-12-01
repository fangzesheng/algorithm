<?php
/**
 *树节点
 *
 * @author      fzs
 * @version     1.0 版本号
 */
namespace Algorithm\Helpers;

class Tree
{
    /**
     * 根节点
     * @var null
     */
    public $root = null;

    /**
     * Tree constructor.
     * @param null $root
     */
    public function __construct($root = null)
    {
        $this->root = $root;
    }

    /**
     * 节点添加
     * @param $val
     * @return void
     */
    public function add($val)
    {
        $node = new TreeNode($val);
        
        //若树是空的，则队根节点赋值
        if(is_null($this->root)){
            $this->root = $node;
            return null;
        }

        $queue = [];
        array_push($queue,$this->root);

        //对已有节点进行层次遍历
        while($queue){
            //出队
            $cur = array_shift($queue);

            //左孩子处理
            if(is_null($cur->left)){
                $cur->left = $node;
                return null;
            }else{
                array_push($queue,$cur->left);
            }

            //右孩子处理
            if(is_null($cur->right)){
                $cur->right = $node;
                return null;
            }else{
                array_push($queue,$cur->right);
            }
        }

    }

    /**
     * 层次遍历
     * 从根开始，从上到下、从左到右遍历整个树的节点
     */
    public function breadth()
    {
        if(is_null($this->root)){
            return null;
        }
        $queue = [$this->root];
        while ($queue){
            $cur = array_shift($queue);
            if(!is_null($cur->left)){
                array_push($queue,$cur->left);
            }
            if(!is_null($cur->right)){
                array_push($queue,$cur->right);
            }
        }
    }

    /**
     * 先序遍历
     * 根节点->左子树->右子树
     * @param Node $node
     */
    public function preorder($node)
    {
        if(is_null($node)){
            return null;
        }
        $this->preorder($node->left);
        $this->preorder($node->right);
    }

    /**
     * 中序遍历
     * 左子树->根节点->右子树
     * @param $node
     */
    public function inorder($node)
    {
        if(is_null($node)){
            return null;
        }
        $this->inorder($node->left);
        $this->inorder($node->right);
    }

    /**
     * 后序遍历
     * 左子树->右子树->根节点
     * @param $node
     */
    public function postorder($node)
    {
        if(is_null($node)){
            return null;
        }
        $this->postorder($node->left);
        $this->postorder($node->right);
    }

}
