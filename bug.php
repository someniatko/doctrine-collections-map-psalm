<?php
declare(strict_types=1);

namespace Bug;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @param int[] $ints
 */
function showInts(array $ints): void
{
    foreach ($ints as $int) {
        echo $int;
    }
}

$strings = [ 'aa', 'bbbb' ];
$lengths = (new ArrayCollection($strings))
    ->map(function (string $str): int { return strlen($str); })
    ->getValues();

showInts($lengths);
