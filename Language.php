<?php
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
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;

interface Language
{
    public function translations(): array;

    public function getName(): string;

    public function getLocale(): string;

    public function getFlag(): string;

    public function getCredits(): string;
}