<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Request;

use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

class Request
{
    /**
     * @SWG\Property(
     *     type="string",
     *     description="DESCRIPTION",
     * )
     *
     * @Assert\Type(type="string")
     * @Assert\NotBlank
     * @Assert\Length(min="3", max="255")
     */
    public $name;
}