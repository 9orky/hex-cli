<?php

declare(strict_types=1);

namespace Gorky\HexCli\Generator\Ui\Action;

use Symfony\Component\HttpFoundation\Response;
use App\Shared\Legacy\Controller\AbstractRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;

class ActionList //extends AbstractRestController
{
    /**
     * @Rest\Get("URL", name="ACTION_NAME")
     *
     * @SWG\Get(
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     description="DESCRPTION",
     *     tags={"TAGS"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         type="object",
     *         required=true,
     *         @SWG\Schema(ref=@Model(type=Request::class)),
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="RESPONSE DESCRIPTION",
     *         @SWG\Schema(
     *             type="array",
     *             items=@SWG\Items(ref=@Model(type=Response::class))
     *         ),
     *     ),
     *     @SWG\Response(response=401, description="Unauthorized request - need to login first"),
     *     @SWG\Response(response=403, description="You don't have an access to this resource"),
     *     @SWG\Response(response=404, description="Resource does not exist"),
     *     @SWG\Response(response=500, description="Unexpected error")
     * )
     */
    public function __invoke(): Response
    {
        return $this->ok([]);
    }
}