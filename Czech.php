<?php
declare(strict_types=1);
/**
 *   _   _  _____ ______                    _   _       _
 *  | \ | |/ ____|  ____|                  | | (_)     | |
 *  |  \| | |  __| |__   ___ ___  ___ _ __ | |_ _  __ _| |___
 *  | . ` | | |_ |  __| / __/ __|/ _ \ '_ \| __| |/ _` | / __|
 *  | |\  | |__| | |____\__ \__ \  __/ | | | |_| | (_| | \__ \
 *  |_| \_|\_____|______|___/___/\___|_| |_|\__|_|\__,_|_|___/
 *
 * Copyright (C) 2016-2020 NetherGames Network
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author k3ithos, matcracker, driesboy
 *
 */

namespace NetherGames\NGEssentials\lang\locale;


class Czech implements Language
{

    public function translations() : array
    {
        return [];
    }

    public function getName() : string
    {
        return "Czech";
    }

    public function getLocale() : string
    {
        return "cs_cs";
    }

    public function getFlag(): string
    {
        //when??
        return ''; // return 'https://cdn.nethergames.org/img/flags/czechia.png';
    }

    public function getCredits(): string
    {
        return "Ragnok123";
    }

}