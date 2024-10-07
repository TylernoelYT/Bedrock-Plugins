
# LobbyTeleport Plugin

## Overview
**LobbyTeleport** is a Minecraft PocketMine plugin that allows players to teleport to a designated lobby location using the `/lobby` command.

## Features
- Teleports players to a predefined set of coordinates in the game world (x=100, y=65, z=100).
- Includes permission control with `lobby.teleport`, which is enabled by default.
- Only players can use the `/lobby` command. Console commands are not supported for this action.

## Requirements
- PocketMine API version: 4.0.0
- PHP version: Compatible with PocketMine plugins.

## Installation
1. Download the latest release of the plugin.
2. Place the plugin file in the `plugins` folder of your PocketMine server.
3. Restart the server to activate the plugin.

## Configuration
- **Coordinates**: Currently, the teleportation target is hardcoded to (x=100, y=65, z=100). You may modify this directly in the `Main.php` file in the `onCommand` method if you wish to teleport players to different coordinates.
  ```php
  $lobbyPosition = new \pocketmine\world\Position(100, 65, 100, $sender->getWorld());
  ```
  Change the numbers `(100, 65, 100)` to your desired coordinates.

## Commands
- **/lobby**: Teleports the player to the lobby.
  - **Usage**: `/lobby`
  - **Permission**: `lobby.teleport` (default: true)

## Permissions
- **lobby.teleport**: Grants access to the `/lobby` command.
  - Default: true

## How to Contribute
If you'd like to contribute to this plugin, feel free to fork the repository and submit a pull request.

## Planned Improvements
- Make the teleport coordinates configurable via a configuration file (`plugin.yml`).
- Add support for console commands to teleport players by specifying player names.

## License
This project is licensed under the MIT License.

### MIT License
```
MIT License

Copyright (c) 2024 TylernoelYT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
