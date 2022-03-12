<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Entity;

use App\Shared\Value\DateTime\Carbon;
use App\Shared\Value\Number\ImmutableNumber;
use Cassandra\UuidInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="TABLE_NAME")
 * @ORM\HasLifecycleCallbacks
 */
class Entity
{
    /**
     * @ORM\Column(type="integer")
     */
    private int $int;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $string;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $bool;

    /**
     * @ORM\Column(type="guid")
     */
    private UuidInterface $uuid;

    /**
     * @ORM\Column(type="number", precision=16, scale=3)
     */
    private ImmutableNumber $quantity;

    /**
     * @ORM\Column(type="carbon")
     */
    private Carbon $datetime;

    /**
     * @ORM\OneToMany(
     *     targetEntity=TARGET_ENTITY::class,
     *     mappedBy="MAPPED_BY",
     *     cascade={"persist", "remove"},
     *     orphanRemoval=true,
     * )
     */
    private Collection $oneToMany;

    /**
     * @ORM\ManyToOne( targetEntity=TARGET_ENTITY::class, inversedBy="INVERSED_BY")
     */
    private object $manyToOne;

    public function __construct(

    ) {
        $this->oneToMany = new ArrayCollection();
    }
}