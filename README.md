# Discord Widget Plugin for XASECO

![Discord Widget Preview](https://my.cloudzor.ch/discordw.png)

This XASECO plugin displays live information about your Discord server directly in-game, giving players a real-time overview of your community and a quick way to join.

## ✨ Features

- Displays your Discord server name and online user count
- Customizable widget layout and styling
- Simple setup via plugin configuration
- No external dependencies

## 📦 Installation

1. **Download the Plugin**  
   Extract the contents of this ZIP into your XASECO plugins directory:

XASECO/plugins/discord_widget_plugin.php/



2. **Enable the Plugin**  
Add the plugin to your `plugins.xml`:
```xml
<plugin>discord_widget_plugin/plugin.discordwidget.php</plugin>
Configure the Server ID
Open plugin.discordwidget.php and enter your Discord server's widget ID in the appropriate section.

Enable the Widget on Discord
Go to your Discord server settings > Widget > Enable Server Widget and copy the Server ID.

Restart XASECO
Restart your XASECO instance for changes to take effect.

🛠 Requirements
TrackMania server with XASECO

Discord server with the Server Widget enabled

💬 Support
Encounter issues or have suggestions? Open an issue or contact us via Discord.

📄 License
This project is licensed under the MIT License.
