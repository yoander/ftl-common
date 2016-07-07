<?php

namespace Ftl\Common

class KnowType
{
    const NEWS    = 'NEWS';

    const TIP     = 'TIP';

    const COMMENT = 'COMMENT';

    public static function getTypes()
    {
        return [
            self::NEWS,
            self::TIP,
            self::COMMENT
        ];
    }
}
