
<?php

namespace LobbyTeleport;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {

    // Is called when the plugin is loaded
    public function onEnable(): void {
        $this->getLogger()->info(TextFormat::GREEN . "LobbyTeleport has been activated!");
        $this->saveDefaultConfig(); // Load configuration
    }

    // Is called when the plugin is deactivated
    public function onDisable(): void {
        $this->getLogger()->info(TextFormat::RED . "LobbyTeleport has been deactivated!");
    }

    // Handling of the /lobby command
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if($command->getName() === "lobby") {
            if($sender instanceof Player) {
                // Get the lobby coordinates from config
                $x = $this->getConfig()->get("lobby")["x"];
                $y = $this->getConfig()->get("lobby")["y"];
                $z = $this->getConfig()->get("lobby")["z"];
                $lobbyPosition = new \pocketmine\world\Position($x, $y, $z, $sender->getWorld());
                $sender->teleport($lobbyPosition);
                $sender->sendMessage(TextFormat::YELLOW . "You have been teleported to the lobby!");
            } else {
                $sender->sendMessage(TextFormat::RED . "Only players can use this command.");
            }
            return true;
        }

        return false;
    }
}
