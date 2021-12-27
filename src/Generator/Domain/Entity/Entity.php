<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Domain\Entity;

use App\Shared\Value\DateTime\Carbon;
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
    private object $uuid;

    /**
     * @ORM\Column(type="carbon")
     */
    private Carbon $datetime;

    /**
     * @ORM\OneToMany(
     *     targetEntity=TARGET_ENTITY::class,
     *     mappedBy="",
     *     cascade={"persist", "remove"},
     * )
     */
    private Collection $oneToMany;

    /**
     * @ORM\ManyToOne(
     *     targetEntity=TARGET_ENTITY::class,
     *     inversedBy="",
     *     cascade={"persist", "remove"},
     *     orphanRemoval=true,
     * )
     */
    private object $manyToOne;
}