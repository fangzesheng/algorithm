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
    public function achieve()
    {
        return $this->Algorithm->achieve(...$this->data);
    }
    public function thinking()
    {
        return $this->Algorithm->thinking();
    }
    public function code()
    {
        return $this->Algorithm->code();
    }
}