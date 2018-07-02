<?php

namespace Unitedworldwrestling\OAuth2\Client\Grant;

use League\OAuth2\Client\Grant\AbstractGrant;

/**
 * Represents a client credentials grant.
 *
 * @link http://tools.ietf.org/html/rfc6749#section-1.3.4 Client Credentials (RFC 6749, §1.3.4)
 */
class ArenaApiKey extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'https://arena.uww.io/grants/api_key';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'api_key',
        ];
    }
}
