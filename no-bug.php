<?php
declare(strict_types=1);

namespace NoBug;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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

/** @var Collection $collection */
$collection = (new ArrayCollection($strings));

$lengths = $collection
    ->map(function (string $str): int { return strlen($str); })
    ->getValues();

showInts($lengths);
