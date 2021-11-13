<?php

namespace App\Components\OpenApiSchema\Models;

enum RestMethodsEnum: string
{
    case Get = 'get';
    case Put = 'put';
    case Post = 'post';
    case Delete = 'delete';
    case Options = 'options';
    case Head = 'head';
    case Patch = 'patch';
    case Trace = 'trace';
}