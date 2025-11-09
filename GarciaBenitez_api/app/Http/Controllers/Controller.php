<?php

namespace App\Http\Controllers;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *  version="1.0.0",
 *  title="Documentacion de API de Carlos Alberto Garcia Benitez",
 *  description="API desarrollada por Carlos Alberto Garcia Benitez, para la UFG",
 *  @OA\Contact(
 *      email="ia.carlos3298453@ufg.edu.sv"
 *      ),
 *  @OA\License(
 *      name="Apache 2.0",
 *      url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 *  )
 *
 * @OA\Server(
 *  url="http://localhost:8000/",
 *  description="Servidor local de desarrollo"
 * )
 *
 * @OA\Server(
 *  url="http://testing.ejemplo.com/",
 *  description="Servidor local para pruebas"
 * )
 *
 * @OA\Server(
 *  url="http://msgv.ejemplo.com/",
 *  description="Servidor local de produccion"
 * )
 *
 * @OA\SecurityScheme(
 *   securityScheme="bearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   name="Authorization",
 *   in="header"
 * )
 *
 * @OA\Tag(
 *   name="Zonas",
 *   description="Proyecto de desarrollo de API para mantenimiento de tabla de bd Catalogos, especificamente para la tabla Zonas"
 * )
 *
 */

abstract class Controller
{
    //
}
