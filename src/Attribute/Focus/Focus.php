<?php
/**
 * Copyright (C) SPACE Platform PTY LTD - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Nash Gao <nash@spaceplaform.co>
 * @organization Space Platform
 * @project pelias
 * @create Created on 2020/9/21 下午8:31
 * @author Nash Gao
 * @namespace Nashgao\Pelias\Attribute\Focus
 */

declare(strict_types=1);


namespace Nashgao\Pelias\Attribute\Focus;


use Nashgao\Pelias\Attribute\AbstractAttribute;
use Nashgao\Pelias\Attribute\Point;

class Focus extends AbstractAttribute
{
    /**
     * @var Point
     */
    public Point $point;
}