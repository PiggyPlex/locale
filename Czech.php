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

    public function translations(): array
    {
        return [
            LangConstants::COMMAND_RESERVED_STAFF => '&cTento příkaz je dostupný jen pro adminy &eNether&6Games',
            LangConstants::COMMAND_RESERVED_ESTAFF => '&cTento příkaz je dostupný jen pro vedení &eNether&6Games',
            LangConstants::COMMAND_PING => '&6Tvůj ping na serveru (&b%0&6) je %1ms',
            //LangConstants::COMMAND_RECONNECT_BW => '&cPoslední server, kde jsi byl naposledy není BW server',
            LangConstants::COMMAND_RECONNECT_NOT_FOUND => '&cPoslední server, kde jsi byl naposledy je nedostupný',
            LangConstants::COMMAND_STATS_PLAYER_INFO => '&6Player Info (&b%0&6)',
            LangConstants::COMMAND_STATS_ONLINE => '&aStatus: &2ONLINE',
            LangConstants::COMMAND_STATS_OFFLINE => '&aStatus: &cOFFLINE',
            LangConstants::COMMAND_STATS_CURRENTLY => '&aPrávě na: &f%0',
            LangConstants::COMMAND_STATS_LAST => '&aNaposledy na: &f%0',
            LangConstants::COMMAND_STATS_KILLS => '&aKillů: &f%0',
            LangConstants::COMMAND_STATS_DEATHS => '&aSmrtí: &f%0',
            LangConstants::COMMAND_STATS_CREDITS => '&aKreditů: &f%0',
            LangConstants::COMMAND_STATS_LEVEL => '&aLevel: &f%0',
            LangConstants::COMMAND_STATS_XP => '&aXP: &f%0',
            LangConstants::COMMAND_CI_COMPLETED => '&aTvůj inventář byl vymazán',
            LangConstants::COMMAND_CI_NO_PERM => "&cNemáš oprávnění pro vymazání inventáře! Kup si rank &l&bLEGEND&r &cna &bngmc.co/store",
            LangConstants::COMMAND_MEGA_CREATIVE_NO_PERM => '&cMega Creative je jen pro hráče, kteří hlasovali na &6ngmc.co/v§',
            LangConstants::COMMAND_NOT_IN_LOBBY => '&cTento příkaz nemůže být použit v lobby',
            LangConstants::COMMAND_REPLY_NO_PERM => "&cNemáš oprávnění pro použití rychlé vazby. Kup si rank &l&bLEGEND&r &cna &bngmc.co/store",
            LangConstants::COMMAND_TELL_BLOCK => '&b%0 &czablokoval všechny soukromé zprávy',
            LangConstants::COMMAND_TELL_DENY => '&b%0 &cnepříjmá soukromé zprávy od tebe',
            LangConstants::COMMAND_TELL_RECEIVER => '&b%0 %6ti našeptal: &c',
            LangConstants::COMMAND_TELL_SENDER => '&6Našeptal jsi &b%0&6: &c%1',
            LangConstants::COMMAND_TELL_YOURSELF => '&cSakra, proč bych šeptal sám sobě?',
            LangConstants::COMMAND_TELL_MUTED => '&cJsi dočasně mutnutý kvůli &b%0 &7(&e#%1&7)\n&cTvůj mute bude vymazán za &b%2\n&7Pokud myslíte, že mute byl udělen neprávem, obraťte se na &engmc.co/um',
            LangConstants::COMMAND_TELL_MUTED_PERMA => '&cJsi mutnutý navždy za &b%0 &7(&e#%1&7)\n&7Pokud myslíte, že mute byl udělen neprávem, obraťte se na &engmc.co/um',
            LangConstants::COMMAND_TELL_QUICK => '&Nepiš tak rychle!',
            LangConstants::COMMAND_TELL_ADVERTISE => '&Reklama není povolena!',
            LangConstants::COMMAND_TELL_OFFLINE => '&6Sice tento hráč není online, ale dostane zprávu když bude online.',
            LangConstants::COMMAND_VOTE_SLOWDOWN => "&cWow wow, zpomal, furt kontrolujeme tvoje hlasy!",
            LangConstants::COMMAND_SOCIAL_NOT_SUPPORTED => '&cTento server nepodporuje sociální požadavky',

            LangConstants::PROFANITY_QUICK => '&cZpomal',
            LangConstants::PROFANITY_ADVERTISE => '&cReklama je zakázaná',

            LangConstants::ITEM_REPORTER => '&r&c&lNahlásit Hráče',
            LangConstants::ITEM_REPORTER_LORE => '&r&bRight-click pro nahlášení hráče',
            LangConstants::ITEM_UTILITY => '&r&b&lGadgety',
            LangConstants::ITEM_UTILITY_LORE => '&r&bRight-click pro otevření cosmetic menu',
            LangConstants::ITEM_SOCIAL => '&r&d&lSociální Menu',
            LangConstants::ITEM_SOCIAL_LORE => '&r&bRight-click pro nastavení své party',
            LangConstants::ITEM_TELEPORTER => '&r&a&lTeleporter',
            LangConstants::ITEM_TELEPORTER_LORE => '&r&bRight-click pro teleportování do minihry',
            LangConstants::ITEM_PROFILE => '&r&e&lNastavení účtu',
            LangConstants::ITEM_PROFILE_LORE => '&r&bRight-click změnu svých nastavení',
            LangConstants::ITEM_REPLAY_RESUME => '&r&b&lPokračovat replay',
            LangConstants::ITEM_REPLAY_RESUME_LORE => '&r&7Right-click pro pokračování replay',
            LangConstants::ITEM_REPLAY_PAUSE => '&r&b&lPozastavit replay',
            LangConstants::ITEM_REPLAY_PAUSE_LORE => '&r&7Right-click pro pozastavení replay',
            LangConstants::ITEM_NOCLIP => '&r&e&lZapnout No Clip',
            LangConstants::ITEM_NOCLIP_LORE => '&r&7Right-click pro zapnutí no clipu',
            LangConstants::ITEM_SPECTATE => '&r&a&lTeleporter',
            LangConstants::ITEM_SPECTATE_LORE => '&r&7Right-click pro spectatování',
            LangConstants::ITEM_PARKOUR_BED => '&r&c&lOpustit parkour &7(Right-Click)',
            LangConstants::ITEM_PARKOUR_BED_LORE => '&r§7Right-click pro opuštění parkouru',
            LangConstants::ITEM_PARKOUR_DOOR => '&r&c&lResetovat &7(Right-Click)',
            LangConstants::ITEM_PARKOUR_DOOR_LORE => '&r&7Right-click pro resetování parkouru',
            LangConstants::ITEM_PARKOUR_SLAB => '&r&a&lTeleport se k checkpointu &7(Right-Click)',
            LangConstants::ITEM_PARKOUR_SLAB_LORE => '&r&7Right-click pro teleport k checkpointu',
            LangConstants::ITEM_LOBBY => '&r&c&lVrátit se do Lobby',
            LangConstants::ITEM_LOBBY_LORE => '&r&7Right-click pro vrácení se do lobby',

            LangConstants::COSMETICS_IN_USE => '&cJsem nyní využíván. Zkus trochu později',
            LangConstants::COSMETICS_NOT_ENOUGH_KEYS => '&cNemáš dostatek klíčů',
            LangConstants::COSMETICS_ALL => '&cVyzvednul jsi všechny gadgety',

            LangConstants::DATABASE_ERROR => '&l&cNastala neočekáváná chyba DB. Zkuste to později',
            LangConstants::SOMETHING_WRONG => '&cNěco se pokazilo, zkuste to později!',
            LangConstants::MESSAGE_REPORT => '&cJe tato zpráva nevhodná nebošikanující? &6Udělejte si screenshot a pošlete na &angmc.co/r &6nebo na &a#report kanál na našém Discordu (ngmc.co/d)',

            LangConstants::FORMS_BUTTON_BACK => '&cZpet',
            LangConstants::FORMS_BUTTON_FULL => '&cPLN7',
            LangConstants::FORMS_BUTTON_YES_GREEN => '&aAno',
            LangConstants::FORMS_BUTTON_YES_RED => '&cAno',
            LangConstants::FORMS_BUTTON_NO_GREEN => '&aNe',
            LangConstants::FORMS_BUTTON_NO_RED => '&cNe',

            LangConstants::FORMS_CHAT_TYPE => 'Typ chatu',
            LangConstants::FORMS_HANDLER_CHAT_TYPE => '&aZapnul jsi &b%0 &achat',
            LangConstants::FORMS_CHAT_COLOR => 'Barva chatu',
            LangConstants::FORMS_HANDLER_CHAT_COLOR => '&aVybral jsi barvicku %0 pro tvuj chat',

            LangConstants::FORMS_PROFILE_RULES_1 => '§aVítej na §eNether§6Games§a.',
            LangConstants::FORMS_PROFILE_RULES_2 => '§eNether§6Games §bje komunitní server s minihry pro milovníky Minecraftu pro všechny věkové kategorie',
            LangConstants::FORMS_PROFILE_RULES_3 => '§bPředtím, než začneme naší cestovatelkou misi, byli bychom rádi, kdybyste se oznámili s našimi podmínkami. Je to udělané proto, aby nedošlo k jakékoliv formě urážce, diskriminace a šikany',
            LangConstants::FORMS_PROFILE_RULES_4 => '§e1. Respektujte se sebe a ostatní hráče',
        ];
    }

    public function getName(): string
    {
        return "Czech";
    }

    public function getLocale(): string
    {
        return "cs_cs";
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/czechrepublic.png';
    }

    public function getCredits(): string
    {
        return "Ragnok123";
    }

}