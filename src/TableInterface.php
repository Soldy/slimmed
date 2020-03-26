<?php
namespace soldy\slimmed;


interface TableInterface 
{
     public function render(
        int $page,
        int $elementPerPage
     ): string;
}




