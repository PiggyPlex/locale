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

class English implements Language
{
    public function translations(): array
    {
        return [
            'command.chat.change' => '§6Disabled {%0} chat and enabled {%1} chat. You now chat to {%1} members only.',
            'command.chat.disable' => '§6Disabled {%0} chat. You now chat to all players.',
            'command.chat.enable' => '§6Enabled {%0} chat. You now chat to {%0} members only.',
            'command.chat.public' => "§cSorry, you're already in public chat.",
            'command.chat.usage' => '§cRun /c [{%0}] to enable a specific chat.',
            'command.chat.usage.nothing' => '§cSorry, you cannot switch chats while you are not in a party.',
            'command.chat.usage.party' => '§cWoohoo! Run /c party to enable party chat, run /c off to disable party chat.',
            'command.reserved.estaff' => '§cThat command is reserved for §eNether§6Games §cexecutive staff.',
            'command.reserved.staff' => '§cThat command is reserved for §eNether§6Games §cstaff.',
            'database.error' => '§l§cAn unexpected error occurred while connecting to the database. Your data will not be saved for this session.',
            'forms.profile.credits' => '§bCredits: {%0}',
            'forms.profile.deaths' => '§bDeaths: {%0}',
            'forms.profile.kills' => '§bKills: {%0}',
            'forms.profile.level' => '§bLevel: {%0}',
            'forms.profile.rules.1' => '§aWelcome to §eNether§6Games§a.',
            'forms.profile.rules.10' => '§e7. Turn off your client modifications',
            'forms.profile.rules.10.desc' => '§7Using client modifications or "cracked clients" that are not officially endorsed by Minecraft are not allowed to be used on NetherGames. Prohibited modifications include ones that give you abilities that are not obtained rightfully - e.g. fly hacking, jump/speed boost, auto clicking, etc. Resource/texture packs that provide cosmetic changes which do not affect gameplay and/or provide advantages are allowed.',
            'forms.profile.rules.11' => '§e8. Use an appropriate username and skin',
            'forms.profile.rules.11.desc' => '§7Keep your username and skin appropriate for players of all ages. Prohibited skins include ones that may provide an advantage, such as one that uses custom geometry and not the "Alex" or "Steve" skin structure, or ones that show an excessive amount of body parts.',
            'forms.profile.rules.12' => '§e9. Be thoughtful of your teammates and other players',
            'forms.profile.rules.12.desc' => "§7When playing in a match where you are placed in a team with other players, keep them in mind. Trying to troll, grief or kill them is not acceptable.\nIf you are in a solo match against other players, teaming with other players is not allowed. There is a reason why solo and team matches are separated.\nOn Factions, \"teleport trapping\" other players is not permitted. Do not take advantage of other players by partaking in such activities.",
            'forms.profile.rules.13' => '§e10. Keep your clicks at an acceptable rate',
            'forms.profile.rules.13.desc' => '§7Spare a thought for the players on PE clients while you are in the game. Jitter clicking is allowed, however butterfly clicking (using two fingers for the same button) and drag clicking (dragging your finger along the surface of the button) is not allowed. Hardware or software that enables you to click at an unacceptable rate is also prohibited. Help us keep the game fair for both mobile and desktop players.',
            'forms.profile.rules.14' => '§e11. Report a bug instead of abusing it',
            'forms.profile.rules.14.desc' => '§7Abusing a bug that gives you an advantage in the game is prohibited, even if you have already reported it to our team. If you find such game breaking bugs, you are asked to report it to #bugs on our Discord server (§bngmc.co/d§7) immediately and to file reports for players who are using these bugs to their advantage.',
            'forms.profile.rules.15' => '§e12. Accept the punishment',
            'forms.profile.rules.15.desc' => '§7Attempting to evade your punishment, or providing assistance to another player to evade theirs, is strictly prohibited. There are rules and an appropriate warning system in place and by using/playing on our services, you agree to follow these set guidelines to help ensure that everyone has a positive experience.',
            'forms.profile.rules.16' => '§e13. Speak in English',
            'forms.profile.rules.16.desc' => "§7We strive to be inclusive of all players regardless of their background or where they come from. We ask that you help us in achieving this goal by speaking in English, which is widely spoken and used around the world.\nThere are exceptions made for players who have difficulty communicating in English.",
            'forms.profile.rules.17' => "§bIf you are unsure about what type of activity or behaviour is allowed, we encourage you to contact our support team. We would rather you ask questions to help clear up any misconceptions you may have than to face potential consequences if you do break one of our regulations.\nKeep in mind that the rules here are listed as a reference only. You may find the latest version at §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bWe reserve the right to make changes to these rules at anytime without prior notice or consultation with the wider community, which may come into effect immediately. We may also exercise the right to ban and refuse service or limit service accessibility to any player/user at our discretion, regardless of whether they have broken the regulations listed above.',
            'forms.profile.rules.19' => '§bNeed help, or have questions? Contact a staff member using §e/tell§b, through §engmc.co/lc§b, §e@NetherGamesMC §bon Twitter or §esupport@nethergames.org§b.',
            'forms.profile.rules.2' => '§eNether§6Games §bis a community-based server network with a wide variety of games to entertain Minecraft players of all ages.',
            'forms.profile.rules.20' => '§bThanks for playing on §eNether§6Games§b!',
            'forms.profile.rules.3' => '§bBefore you start your journey here, we\'d like you to read through the following guidelines and expectations we have of you while using our services. These rules help us ensure that all players are able to enjoy a positive and fun experience.',
            'forms.profile.rules.4' => '§e1. Respect yourself and others',
            'forms.profile.rules.4.desc' => '§7Do not swear, curse, or hurl abuse at another player. Respect other players and treat others as you would like to be treated. Bullying in any form is not tolerated at NetherGames and offenders will be prosecuted accordingly.',
            'forms.profile.rules.5' => '§e2. Keep your content appropriate',
            'forms.profile.rules.5.desc' => '§7Do not post inappropriate content. A good way to check if your content is appropriate is to ask yourself - is this something that I could show to my parents? This definition also includes material that others could potentially find offensive. Racism, sexism or any other form of discrimination is strictly prohibited.',
            'forms.profile.rules.6' => '§e3. Be considerate while chatting',
            'forms.profile.rules.6.desc' => '§7Think about others and what they will see in the chat when you post a message. Do not spam, repeatedly use the same word/phrase, or use excessive caps in your messages to attract attention or to annoy others. Respect the fact that there is a chat filter in place for a reason. Swearing is allowed to a certain degree, as long as it is appropriately censored and is not directed to another player.',
            'forms.profile.rules.7' => '§e4. Listen to and respect our staff members',
            'forms.profile.rules.7.desc' => "§7Our staff members are here to ensure that everyone is having a great time. When they give you an instruction, we expect that you follow what they say.\nKeep in mind that our staff team is comprised of volunteers. They are here to help and to keep the server safe - but they are not your personal servants. When asking questions or engaging in conversation with them, do so in a polite manner.",
            'forms.profile.rules.8' => '§e5. Advertising/endorsing other servers is not allowed',
            'forms.profile.rules.8.desc' => '§7Advertising or endorsing another Minecraft Bedrock Edition server is strictly prohibited at NetherGames. Other servers may be mentioned if they are to be used to provide context in a conversation, however any other form of conversation relating to another server will be treated as advertising.',
            'forms.profile.rules.9' => '§e6. Keep your personal information safe',
            'forms.profile.rules.9.desc' => '§7While we would love to believe that there are no bad people in the world, this is simply not realistic. Keep your personal information to yourself - this is the internet. Keep in mind that all conversations and messages you send are posted on a public forum, which is likely where they will stay forever.',
            'forms.profile.stats' => '§aYour stats:',
            'forms.profile.xp' => '§bXP: {%0}',
            'join.vote' => '§6Vote for us daily at §bngmc.co/v §6and you could win a free rank upgrade!',
            'join.welcome' => '§bWelcome to §eNether§6Games§b!',
            'kick.maintenance' => '§o§l§eN§6G§r§7: §cMaintenance in progress. Follow us on Twitter for updates - §6@NetherGamesMC',
            'kick.client.outdated' => '§o§l§eN§6G§r§7: §cPlease update your client to the latest version to play §eNether§6Games§c.',
            'kick.server.outdated' => "§o§l§eN§6G§r§7: §eNether§6Games §chasn't updated to the latest version yet. Follow us on Twitter for updates - §6@NetherGamesMC",
            'minigame.party.member.join' => "§cYou're currently in a party. Wait for your party host to decide which game to play!",
            'skin.invalid.change' => '§cYour skin is not valid to play on §eNether§6Games§c. Please choose another one.',
            'social.guild.notin' => '§cYou\'re not in a guild!',
            'social.party.notin' => '§cYou\'re not in a party!',
        ];
    }

    public function oldtranslations(): array
    {
        return array(
            'boost' => 'boost',
            'command.ci.completed' => '§aYour inventory has been cleared!',
            'command.ci.noperm' => "§cYou don't have permission to clear your inventory! Buy the §l§bLEGEND§r §crank at §bngmc.co/store §cto vanish!",
            'command.megac.noperm' => '§cMega Creative is only for players who have voted at §6ngmc.co/v§c.',
            'command.notinlobby' => '§cThat command can only be used in the lobby.',
            'command.reply.noperm' => "§cYou don't have permission to use the quick reply feature. Buy the §l§bLEGEND§r §c rank at §bngmc.co/store §cto use it!",
            'command.reserved.estaff' => '§cThat command is reserved for §eNether§6Games §cexecutive staff.',
            'command.reserved.staff' => '§cThat command is reserved for §eNether§6Games §cstaff.',
            'command.tell.receiver' => '§b{%0} §6whispered to you: §c{%1}',
            'command.tell.sender' => '§6You whispered to §b{%0}§6: §c{%1}',
            'command.tell.yourself' => "§cYou can't send a message to yourself.",
            'command.tp.specify' => '§cYou must specify a player.',
            'command.tphere.accepted.receiver' => "§aAccepted §b{%0}'s §arequest for you to teleport to them.",
            'command.tphere.accepted.sender' => '§b{%0} §6accepted your request for them to teleport to you.',
            'command.tphere.declined.receiver' => "§aDeclined §b{%0}'s §arequest for you to teleport to them.",
            'command.tphere.declined.sender' => '§b{%0} §6declined your request for them to teleport to you.',
            'command.tphere.noperm' => "§cYou don't have permission to request other players to teleport to you. Buy the §l§aEMERALD§r §cor §l§bLEGEND§r §c rank at §bngmc.co/store §cto send them!",
            'command.tphere.norequest' => "§cThat player hasn't sent a request for you to teleport to them.",
            'command.tphere.receive' => '§b{%0} §6has requested you teleport to them! Use §c/tphere accept {%0} §6to accept the request.',
            'command.tphere.send' => '§aYour request for §6{%0} §ato teleport to you has been sent.',
            'command.tpto.accepted.receiver' => "§aAccepted §b{%0}'s §arequest for them to teleport to you.",
            'command.tpto.accepted.sender' => '§b{%0} §6accepted your request for you to teleport to them.',
            'command.tpto.declined.receiver' => "§aDeclined §b{%0}'s §arequest for them to teleport to you.",
            'command.tpto.declined.sender' => '§b{%0} §6declined your request for you to teleport to them.',
            'command.tpto.noperm' => "§cYou don't have permission to request to teleport to other players. Buy the §l§aEMERALD§r §cor §l§bLEGEND§r §c rank at §bngmc.co/store §cto send them!",
            'command.tpto.norequest' => "§cThat player hasn't sent a request for to teleport to you.",
            'command.tpto.receive' => '§b{%0} §6has requested to teleport to you! Use §c/tpto accept {%0} §6to accept the request.',
            'command.tpto.send' => '§aYour request to teleport to §6{%0} §ahas been sent.',
            'command.vanish.disabled' => '§aYou are now visible!',
            'command.vanish.enabled' => '§aYou have now vanished!',
            'command.vanish.noperm' => "§cYou don't have permission to vanish! Buy the §l§bLEGEND§r §crank at §bngmc.co/store §cto vanish!",
            'command.vote.slowdown' => "§cSlow down, we're checking votes for you already!",
            'db.error' => '§cAn unexpected database error occurred while connecting to the database. Please try again later.',
            'db.notsaved' => '§l§cAn unexpected error occurred while connecting to the database. Your data will not be saved for this session.',
            'doublexp' => 'Double XP weekend',
            'formhandler.guild.chat.disabled' => '§6Disabled guild chat. You now chat to all players.',
            'formhandler.guild.chat.enabled' => '§6Enabled guild chat. You now chat to guild members only.',
            'formhandler.party.chat.disabled' => '§6Disabled party chat. You now chat to all players.',
            'formhandler.party.chat.enabled' => '§6Enabled party chat. You now chat to party members only.',
            'formhandler.party.full' => '§cYou have reached the maximum limit of members for your party.',
            'formhandler.reporter.notreported' => "§cThat player can't be reported.",
            'formhandler.reporter.reported' => '§6You reported §b{%0} §6for §c{%1}',
            'formhandler.reporter.staffmessage' => '§b{%0} §6has been reported by {%1} for §c{%2}',
            'formhandler.settings.allowing' => 'allowing',
            'formhandler.settings.blocking' => 'blocking',
            'formhandler.settings.disabled' => 'Disabled',
            'formhandler.settings.enabled' => 'Enabled',
            'formhandler.settings.fly' => '§a{%0} flying in the lobby.',
            'formhandler.settings.fly.hidingrank' => "§cYou can't fly while you're using a nickname or hiding your rank.",
            'formhandler.settings.friends' => '§aYou are now §b{%0} §afriend requests.',
            'formhandler.settings.guildtag' => '§aYou are now §b{%0} §ayour guild tag.',
            'formhandler.settings.hideplayers' => '§aYou are now §b{%0} §aplayers.',
            'formhandler.settings.hiding' => 'hiding',
            'formhandler.settings.knockback' => '§a{%0} knockback in the lobby.',
            'formhandler.settings.nick.enabled' => '§aYour name tag has been changed to §b{%0}§a!',
            'formhandler.settings.nick.reset' => '§aReset your name tag.',
            'formhandler.settings.pet.removed' => '§aRemoved your pet.',
            'formhandler.settings.pet.selected' => '§aYour pet has been changed to a §b{%0}§a.',
            'formhandler.settings.rank.hiding' => '§aYour rank is now §bhiding§a.',
            'formhandler.settings.rank.showing' => '§aYour rank is now §bshowing§a.',
            'formhandler.settings.showing' => 'showing',
            'formhandler.switcher.doesntexist' => "§cAn account with that username doesn't exist, please try again.",
            'forms.party' => '§9Party Manager',
            'forms.party.invite' => 'Invite more players:',
            'forms.party.notvoter' => '§cSorry, you need to vote for NetherGames to use this function!',
            'forms.party.notvoter.2' => "§bVote for us at §engmc.co/v§b, then press §6'Submit'§b to confirm your vote or simply run §6/vote",
            'forms.profile.deaths' => '§bDeaths: ',
            'forms.profile.kills' => '§bKills: ',
            'forms.profile.level' => '§bLevel: ',
            'forms.profile.rules.1' => '§aWelcome to §eNether§6Games§a.',
            'forms.profile.rules.2' => '§eNether§6Games §bis a community-based server network with a wide variety of games to entertain Minecraft players of all ages.',
            'forms.profile.rules.3' => '§bBefore you start your journey here, we\'d like you to read through the following guidelines and expectations we have of you while using our services. These rules help us ensure that all players are able to enjoy a positive and fun experience.',
            'forms.profile.rules.4' => '§e1. Respect yourself and others',
            'forms.profile.rules.4.desc' => '§7Do not swear, curse, or hurl abuse at another player. Respect other players and treat others as you would like to be treated. Bullying in any form is not tolerated at NetherGames and offenders will be prosecuted accordingly.',
            'forms.profile.rules.5' => '§e2. Keep your content appropriate',
            'forms.profile.rules.5.desc' => '§7Do not post inappropriate content. A good way to check if your content is appropriate is to ask yourself - is this something that I could show to my parents? This definition also includes material that others could potentially find offensive. Racism, sexism or any other form of discrimination is strictly prohibited.',
            'forms.profile.rules.6' => '§e3. Be considerate while chatting',
            'forms.profile.rules.6.desc' => '§7Think about others and what they will see in the chat when you post a message. Do not spam, repeatedly use the same word/phrase, or use excessive caps in your messages to attract attention or to annoy others. Respect the fact that there is a chat filter in place for a reason. Swearing is allowed to a certain degree, as long as it is appropriately censored and is not directed to another player.',
            'forms.profile.rules.7' => '§e4. Listen to and respect our staff members',
            'forms.profile.rules.7.desc' => "§7Our staff members are here to ensure that everyone is having a great time. When they give you an instruction, we expect that you follow what they say.\nKeep in mind that our staff team is comprised of volunteers. They are here to help and to keep the server safe - but they are not your personal servants. When asking questions or engaging in conversation with them, do so in a polite manner.",
            'forms.profile.rules.8' => '§e5. Advertising/endorsing other servers is not allowed',
            'forms.profile.rules.8.desc' => '§7Advertising or endorsing another Minecraft Bedrock Edition server is strictly prohibited at NetherGames. Other servers may be mentioned if they are to be used to provide context in a conversation, however any other form of conversation relating to another server will be treated as advertising.',
            'forms.profile.rules.9' => '§e6. Keep your personal information safe',
            'forms.profile.rules.9.desc' => '§7While we would love to believe that there are no bad people in the world, this is simply not realistic. Keep your personal information to yourself - this is the internet. Keep in mind that all conversations and messages you send are posted on a public forum, which is likely where they will stay forever.',
            'forms.profile.rules.10' => '§e7. Turn off your client modifications',
            'forms.profile.rules.10.desc' => '§7Using client modifications or "cracked clients" that are not officially endorsed by Minecraft are not allowed to be used on NetherGames. Prohibited modifications include ones that give you abilities that are not obtained rightfully - e.g. fly hacking, jump/speed boost, auto clicking, etc. Resource/texture packs that provide cosmetic changes which do not affect gameplay and/or provide advantages are allowed.',
            'forms.profile.rules.11' => '§e8. Use an appropriate username and skin',
            'forms.profile.rules.11.desc' => '§7Keep your username and skin appropriate for players of all ages. Prohibited skins include ones that may provide an advantage, such as one that uses custom geometry and not the "Alex" or "Steve" skin structure, or ones that show an excessive amount of body parts.',
            'forms.profile.rules.12' => '§e9. Be thoughtful of your teammates and other players',
            'forms.profile.rules.12.desc' => "§7When playing in a match where you are placed in a team with other players, keep them in mind. Trying to troll, grief or kill them is not acceptable.\nIf you are in a solo match against other players, teaming with other players is not allowed. There is a reason why solo and team matches are separated.\nOn Factions, \"teleport trapping\" other players is not permitted. Do not take advantage of other players by partaking in such activities.",
            'forms.profile.rules.13' => '§e10. Keep your clicks at an acceptable rate',
            'forms.profile.rules.13.desc' => '§7Spare a thought for the players on PE clients while you are in the game. Jitter clicking is allowed, however butterfly clicking (using two fingers for the same button) and drag clicking (dragging your finger along the surface of the button) is not allowed. Hardware or software that enables you to click at an unacceptable rate is also prohibited. Help us keep the game fair for both mobile and desktop players.',
            'forms.profile.rules.14' => '§e11. Report a bug instead of abusing it',
            'forms.profile.rules.14.desc' => '§7Abusing a bug that gives you an advantage in the game is prohibited, even if you have already reported it to our team. If you find such game breaking bugs, you are asked to report it to #bugs on our Discord server (§bngmc.co/d§7) immediately and to file reports for players who are using these bugs to their advantage.',
            'forms.profile.rules.15' => '§e12. Accept the punishment',
            'forms.profile.rules.15.desc' => '§7Attempting to evade your punishment, or providing assistance to another player to evade theirs, is strictly prohibited. There are rules and an appropriate warning system in place and by using/playing on our services, you agree to follow these set guidelines to help ensure that everyone has a positive experience.',
            'forms.profile.rules.16' => '§e13. Speak in English',
            'forms.profile.rules.16.desc' => "§7We strive to be inclusive of all players regardless of their background or where they come from. We ask that you help us in achieving this goal by speaking in English, which is widely spoken and used around the world.\nThere are exceptions made for players who have difficulty communicating in English.",
            'forms.profile.rules.17' => "§bIf you are unsure about what type of activity or behaviour is allowed, we encourage you to contact our support team. We would rather you ask questions to help clear up any misconceptions you may have than to face potential consequences if you do break one of our regulations.\nKeep in mind that the rules here are listed as a reference only. You may find the latest version at §engmc.co/tac§b.",
            'forms.profile.rules.18' => '§bWe reserve the right to make changes to these rules at anytime without prior notice or consultation with the wider community, which may come into effect immediately. We may also exercise the right to ban and refuse service or limit service accessibility to any player/user at our discretion, regardless of whether they have broken the regulations listed above.',
            'forms.profile.rules.19' => '§bNeed help, or have questions? Contact a staff member using §e/tell§b, through §engmc.co/lc§b, §e@NetherGamesMC §bon Twitter or §esupport@nethergames.org§b.',
            'forms.profile.rules.20' => '§bThanks for playing on §eNether§6Games§b!',
            'forms.profile.stats' => '§aYour stats:',
            'forms.profile.xp' => '§bXP: ',
            'forms.reporter' => '§cReporter',
            'forms.settings.change' => "Change your pet's name: (Use \"off\" or \"reset\" to reset to default)",
            'forms.settings.fly' => 'Toggle fly',
            'forms.settings.friends' => 'Allow friend requests',
            'forms.settings.hideguildtag' => 'Hide guild tag',
            'forms.settings.hideplayers' => 'Show/hide players',
            'forms.settings.hiderank' => 'Hide rank',
            'forms.settings.knockback' => 'Toggle knockback',
            'forms.settings.nick' => 'Change your nick: (Use "off" or "reset" to reset to default)',
            'forms.settings.nick2' => 'Select a nick:',
            'forms.settings.pet' => 'Your pet:',
            'forms.settings.pet.setname' => "§aYour pet's name has been changed to §b{%0}§a!",
            'forms.teleporter' => '§eNether§6Games §bTeleporter',
            'forms.teleporter.full' => '§cFULL',
            'forms.teleporter.offline' => '§cOFFLINE',
            'forms.teleporter.select' => 'Select a minigame:',
            'kills' => 'Kills',
            'kit.given' => "§aYou've been given the §b",
            'menu.blocked' => "§cYou don't have permission to use that menu.",
            'participation' => 'Participation',
            'party.alreadyin.host' => '§b{%0} §cis already in a party!',
            'party.alreadyinvited' => '§cYou have already invited §b{%0}§c.',
            'party.ended.host' => '§aEnded your party.',
            'party.fullslots' => '§cThere are not enough slots to join.',
            'party.invited' => '§aInvited §b{%0} §ato your party.',
            'party.joingame' => "§cYou're currently in a party. Wait for your party host to decide which game to play!",
            'party.kicked' => '§cYou have been kicked from the party by §b{%0}§c.',
            'party.kicked.message' => '§b{%0} §6kicked §c{%1} §6from the party.',
            'party.leave.player' => '§aYou left the party.',
            'party.max' => "§cYou can't invite more than §65 §cplayers to your party!",
            'party.nothosting' => "§cYou're not hosting a party!",
            'party.notin' => "§cYou're not in a party!",
            'party.stillingame' => '§b{%0} §cis still in a match. Wait for them before you join another one!',
            'party.welcome' => "§6Welcome to §b{%0}'s §6party!",
            'pets.ride.noperm' => "§cYou don't have permission to ride and control pets.\nBuy the §l§cTITAN§r §crank at §bngmc.co/store §cto ride them!",
            'player.offline' => "§cThat player isn't online.",
            'proxy.kick' => '§o§l§eN§6G§r§7: §cUsing a proxy to play on §eNether§6Games §cis not allowed. Disable it to play!',
            'server.full' => "§o§l§eN§6G§r§7: §cLooks like §eNether§6Games §cis full, try again later!\nBuy the §l§aEMERALD§r §cor §l§bLEGEND§r §crank at §bngmc.co/store §cto join servers even if they're full!",
            'skin.notvalid.rejoin' => "§cYour skin is not valid to play on §eNether§6Games§c.\nPlease choose another one and rejoin.",
            'staff.impersonating' => '§cImpersonating staff members is not allowed.',
            'vote.announcement' => '§o§l§eN§6G§r§7: §6{%0} §bvoted for us at §cngmc.co/v §bthen ran §6/vote §band got a voter rank!',
            'vote.claimed' => "§cYou've already voted and claimed your rewards today.",
            'vote.claiming' => '§6Thanks for voting! Claiming your rewards...',
            'vote.error' => '§cAn unknown error occurred while checking your vote status.',
            'vote.notyet' => "§cYou haven't voted yet today. Vote at §bngmc.co/v§c, then come back and claim your rewards.",
            'vote.successful' => '§aSuccessfully claimed your rewards. Thanks for voting for §eNether§6Games§a!',
            'win' => 'Win',
            'world.vote' => '§cYou must vote to access Mega Creative.',
            'xp.summary' => "§6§lExperience Summary: \n",
        );
    }

    public function getLocale(): string
    {
        return 'en_au';
    }

    public function getName(): string
    {
        return 'English';
    }

    public function getFlag(): string
    {
        return 'https://cdn.nethergames.org/img/flags/australia.png';
    }

    public function getCredits(): string
    {
        return 'NetherGames';
    }
}