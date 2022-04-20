<?php

namespace Jetimob\Iugu\Entity;

use Jetimob\Http\Traits\Serializable;

abstract class Entity implements \JsonSerializable
{
    use Serializable;
}
