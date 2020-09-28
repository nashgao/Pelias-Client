<?php
/**
 * Copyright (C) SPACE Platform PTY LTD - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Nash Gao <nash@spaceplaform.co>
 * @organization Space Platform
 * @project pelias
 * @create Created on 2020/9/28 下午1:57
 * @author Nash Gao
 * @namespace Nashgao\Pelias\Parameter
 */

declare(strict_types=1);


namespace Nashgao\Pelias\Parameter;


class Place extends AbstractParameter
{
    /**
     * @var string
     */
    public string $address;

    /**
     * @var string
     */
    public string $neighbourhood;

    /**
     * @var string
     */
    public string $borough;

    /**
     * @var string
     */
    public string $locality;

    /**
     * @var string
     */
    public string $county;

    /**
     * @var string
     */
    public string $region;

    /**
     * @var string
     */
    public string $postalcode;

    /**
     * @var string
     */
    public string $country;
}