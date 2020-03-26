<?php 
namespace soldy\slimmed;

use soldy\slimmed\CollectionInterface;

class Collection implements CollectionInterface
{
    private $keys = [];
    private $list = [];
    private $currentPage;
    private $elementPerPage;
    /*
     * We adding every elements one by one because of the future functionality.
     * @param array {element} one line. 
     * @return boolean
     */
    private function append(array $element): bool
    {
        $append = [];
        foreach($element as $key=>$val){
            if(!in_array($key, $this->keys))
                $this->keys[]=$key;
            $append[$key]=$val;
        }
        $this->list[]=$append;
        return true;
    }
    /*
     * First element on the page. 
     */
    private function first(): int
    {
       return $this->currentPage*$this->elementPerPage;
    }
    /*
     * Come back with the possible page list.
     */
    public function getPages() :array
    {
       $p = 0;
       $pages =[0];

       for($i = 0 ; count($this->list)>$i-1;$i+=$this->elementPerPage)
           $pages[] = $p++;
       return $pages;
    }
    /*
     * It will come back with the current page number.
     */
    public function getCurrentPage() :int
    {
        return $this->currentPage;
    }
    /* 
     * It will come back with the current page elements.
     * @param integer {page}  page number
     * @param integer {elementPerPage}  Element number per page
     * @return array The page. Well all array an iterable. Because we can foreach  
     */
    public function getPage(
        int $page = NULL,
        int $elementPerPage = NULL
    ) :array
    {
       if($elementPerPage !== NULL)
           $this->elementPerPage = $elementPerPage;
       if($page !== NULL)
           $this->currentPage = $page;
       return array_slice(
           $this->list,
           $this->first(),
           $this->elementPerPage
        );
    }
    /*
     * It will come back with all the elements. We need this if we want to store the collection 
     * @return array Every array an iterable. Because we can foreach  
     */
    public function getElements():iterable
    {
        return $this->list;
    }
    public function add(...$elements):bool
    {
        for ($i = 0 ; count($elements) > $i ; $i++)
            $this->append($elements[$i]);
        return true;
    }
    /*
     *  It will count the collection size. Maybe the ArrayObject better in this case $this->list->count();
     */
    public function countElements(): int
    {
        return count($this->list);
    }
    public function countElementsOnCurrentPage():int
    {
         $size = count($this->list)-$this->first();
         if($size > $this->elementPerPage)
             return $this->elementPerPage;
         return $size;

    }
    public function getElementsPerPage():int
    {
        return $this->elementPerPage;
    }
    /*
     * @param iterable {elements}  Input elements
     * @param integer {elementPerPage  Element number per page
     */
    function __construct(array $elements = NULL, int $elementPerPage = NULL)
    {
         if($elements !== NULL)
            foreach($elements as &$element)
                $this->add($element);
         if($elementPerPage !== NULL) 
            $this->elementPerPage = $elementPerPage;
    }
}
