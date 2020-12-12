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


class Russian implements Language
{
    public function translations(): array
    {
        return [
            LangConstants::COMMAND_RESERVED_STAFF => '&cЭта команда доступна только для администрации &eNether&6Games',
            LangConstants::COMMAND_RESERVED_ESTAFF => '&cЭта команда доступна только для управадминистрации &eNether&6Games',
            LangConstants::COMMAND_PING => '&6Твой пинг сейчас (&b%0&6) %1ms',
            //LangConstants::COMMAND_RECONNECT_BW => '&cПоследний сервер, где ты играл, не является сервером BW',
            LangConstants::COMMAND_RECONNECT_NOT_FOUND => '&cПоследний сервер, где ты играл, сейчас не доступен',
            LangConstants::COMMAND_STATS_PLAYER_INFO => '&6Инфо о игроке (&b%0&6)',
            LangConstants::COMMAND_STATS_ONLINE => '&aСтатус: &2ОНЛАЙН',
            LangConstants::COMMAND_STATS_OFFLINE => '&aСтатус: &cОФФЛАЙН',
            LangConstants::COMMAND_STATS_CURRENTLY => '&aСейчас на сервере: &f%0',
            LangConstants::COMMAND_STATS_LAST => '&aБыл на сервере: &f%0',
            LangConstants::COMMAND_STATS_KILLS => '&aУбийств: &f%0',
            LangConstants::COMMAND_STATS_DEATHS => '&aСмертей: &f%0',
            LangConstants::COMMAND_STATS_CREDITS => '&aКредитов: &f%0',
            LangConstants::COMMAND_STATS_LEVEL => '&aУровень: &f%0',
            LangConstants::COMMAND_STATS_XP => '&aОпыт: &f%0',
            LangConstants::COMMAND_CI_COMPLETED => '&aТвой инвентарь был удалён',
        ];
    }

    public function getName(): string
    {
        return 'Russian';
    }

    public function getLocale(): string
    {
        return 'ru_ru';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/russia.png';
    }

    public function getCredits(): string
    {
        return 'Ragnok123';
    }
}