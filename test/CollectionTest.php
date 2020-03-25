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

}




