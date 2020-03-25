<?php
namespace soldy\slimmed;

interface CollectionInterface 
{
     /** @return iterable */
     public function getElements(): iterable;
     /** @return int */
     public function getCurrentPage(): int;
     /** @return array */
     public function getPage($page): array;
     /** @return array */
     public function getPages(): array;
     /** @return int */
     public function countElements(): int;
     /** @return int */
     public function countElementsOnCurrentPage(): int;
     /** @return int */
     public function getElementsPerPage(): int;
}



