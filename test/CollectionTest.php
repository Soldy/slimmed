<?php declare(strict_types=1);


use soldy\slimmed\Collection;
use PHPUnit\Framework\TestCase;

final class CollectionTest extends TestCase
{
    private $fullList =[
        'alpha', 
        'beta', 
        'delta', 
        'gamma',
        'epsilon',
        'zeta',
        'eta',
        'theta',
        'iota',
        'kappa',
        'lambda',
        'mu', 
        'nu',
        'xi',
        'omicron',
        'pi',
        'rho',
        'sigma',
        'tau',
        'upsilon',
        'phi',
        'chi',
        'psi',
        'omega'
    ];
    private $pageOne=['delta', 'gamma'];
    private $pages=[0,1,2,3,4,5,6,7,8,9,10,11];
    public function testPageArray(): void
    {
          $paginator = $this->getMockBuilder(
              Collection::class, 
              'getPage',
              $this->fullList
          )->getMock();
          $paginator->method('getPage')
             ->willReturn($this->pageOne);
          $this->assertEquals(
              $this->pageOne,
              $paginator->getPage(1)
          );
    }
    public function testCount(): void 
    {
          $paginator = $this->getMockBuilder(
              Collection::class, 
              'countElements',
              $this->fullList
          )->getMock();
          $paginator->method('countElements')
             ->willReturn(14);
          $this->assertEquals(
              14,
              $paginator->countElements()
          );
    }
    public function testFullArray(): void
    {
          $paginator = $this->getMockBuilder(
              Collection::class, 
              'getElements',
              $this->fullList
          )->getMock();
          $paginator->method('getElements')
             ->willReturn($this->fullList);
          $this->assertEquals(
              $this->fullList,
              $paginator->getElements()
          );
    }
    public function testPages(): void
    {
          $paginator = $this->getMockBuilder(
              Collection::class, 
              'getPages',
              $this->fullList
          )->getMock();
          $paginator->method('getPages')
             ->willReturn($this->pages);
          $this->assertEquals(
              $this->pages,
              $paginator->getPages()
          );

    }

}




