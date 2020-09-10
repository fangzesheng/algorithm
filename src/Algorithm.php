<?php
namespace Algorithm;
class Algorithm
{
    private $Algorithm;
    private $data;
    public function __construct($name, $data)
    {
        $this->data = $data;
        $application = "\\Algorithm\\Subject\\{$name}";
        $this->Algorithm = new $application();
    }
    /**
     * 算法
     *
     * @access public
     * @return mixed
     */
    public function achieve()
    {
        return $this->Algorithm->achieve(...$this->data);
    }
    /**
     * 思路
     *
     * @access public
     * @return array
     */
    public function thinking()
    {
        return $this->Algorithm->thinking();
    }
}