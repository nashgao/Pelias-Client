<?php
/**
 * Copyright (C) SPACE Platform PTY LTD - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Nash Gao <nash@spaceplaform.co>
 * @organization Space Platform
 * @project pelias
 * @create Created on 2020/9/28 下午1:56
 * @author Nash Gao
 * @namespace Nashgao\Pelias\PeliasClient
 */

declare(strict_types=1);


namespace Nashgao\Pelias\PeliasClient;


use Nashgao\Pelias\Client;

class StructuredClient extends Client
{
    public string $connection = 'structured';
}