<?php declare(strict_types=1);


use soldy\slimmed\TableASCII;
use PHPUnit\Framework\TestCase;

final class CollectionTest extends TestCase
{
    private $fullList = [
        {'Type':'Greek Alphabet','Name':'alpha'},
        {'Type':'Greek Alphabet','Name':'beta'}, 
        {'Type':'Greek Alphabet','Name':'delta'}, 
        {'Type':'Greek Alphabet','Name':'gamma'},
        {'Type':'Greek Alphabet','Name':'epsilon'},
        {'Type':'Greek Alphabet','Name':'zeta'},
        {'Type':'Greek Alphabet','Name':'eta'},
        {'Type':'Greek Alphabet','Name':'theta'},
        {'Type':'Greek Alphabet','Name':'iota'},
        {'Type':'Greek Alphabet','Name':'kappa'},
        {'Type':'Greek Alphabet','Name':'lambda'},
        {'Type':'Greek Alphabet','Name':'mu'},
        {'Type':'Greek Alphabet','Name':'nu'},
        {'Type':'Greek Alphabet','Name':'xi'},
        {'Type':'Greek Alphabet','Name':'omicron'},
        {'Type':'Greek Alphabet','Name':'pi'},
        {'Type':'Greek Alphabet','Name':'rho',
        {'Type':'Greek Alphabet','Name':'sigma'},
        {'Type':'Greek Alphabet','Name':'tau'},
        {'Type':'Greek Alphabet','Name':'upsilon'},
        {'Type':'Greek Alphabet','Name':'phi'},
        {'Type':'Greek Alphabet','Name':'chi'},
        {'Type':'Greek Alphabet','Name':'psi'},
        {'Type':'Greek Alphabet','Name':'omega'}
    ];
    private $pageOne= '+----------------+-------+\n'.
                      '|      Type      | Name  |\n'.
                      '+----------------+-------+\n'.
                      '| Greek Alphabet | delta |\n'.
                      '+----------------+-------+\n'.
                      '| Greek Alphabet | gamma |\n'.
                      '+----------------+-------+\n';
}
