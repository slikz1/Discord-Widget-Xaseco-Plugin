<?php
/**
 * Plugin: Discord Widget Plugin
 * Author: Slikz
 * Version: 1.0
 *
 * Description:
 * This plugin adds a Discord widget to the XAseco interface.
 */


Aseco::registerEvent('onSync', 'dw_onSync');
Aseco::registerEvent('onPlayerConnect', 'dw_onPlayerConnect');


function dw_onSync($aseco){
	$xml = build_discord_widget($aseco);
	$aseco->client->addCall('SendDisplayManialinkPage', array($xml, 0, false));
}


function dw_onPlayerConnect($aseco, $player){
	$xml = build_discord_widget($aseco);
	$aseco->client->addCall('SendDisplayManialinkPageToLogin', array($player->login, $xml, 0, false));
}


function build_discord_widget($aseco) {
    // Define the position and size parameters for the frame and elements
    $manialinkId = "654654";
    $framePosn = "44 46.6";
    $quad1Posn = "0 0 0";
    $quad1Size = "4.6 6.5";
    $quad1Style = "BgsPlayerCard";
    $quad1Substyle = "BgCardSystem";
    $quad1Url = "http://discord.gg/K9pXAxxTPa";

    $quad2Posn = "1.1 -0.8 1.1";
    $quad2Size = "2.2 2.2";
    $quad2Image = "http://tm.cloudzor.de/advert/d.png";

    $label1Posn = "2.3 -3.3 0.1";
    $label1Size = "3.65 2";
    $label1Halign = "center";
    $label1Textsize = "1";
    $label1Scale = "0.9";
    $label1Color = "FFFF";
    $label1Text = "DISCORD";

    $label2Posn = "2.3 -4.9 0.1";
    $label2Size = "3.65 2";
    $label2Halign = "center";
    $label2Textsize = "1";
    $label2Scale = "0.6";
    $label2Color = "FC0F";
    $label2Text = "SERVER";

    // Build the XML content for the frame and its elements
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<manialink id="' . $manialinkId . '">';
    $xml .= '<frame posn="' . $framePosn . '">';
    $xml .= '<quad posn="' . $quad1Posn.'" sizen="' . $quad1Size . '" style="' . $quad1Style . '" substyle="' . $quad1Substyle. '" url="' . $quad1Url . '"></quad>';
    $xml .= '<quad posn="' . $quad2Posn . '" sizen="' . $quad2Size.'" image="' . $quad2Image . '"></quad>';
    $xml .= '<label posn="' . $label1Posn . '" sizen="' . $label1Size . '" halign="' . $label1Halign . '" textsize="' . $label1Textsize . '" scale="' . $label1Scale . '" textcolor="' . $label1Color . '" text="' . $label1Text . '"></label>';
    $xml .= '<label posn="' . $label2Posn . '" sizen="' . $label2Size . '" halign="' . $label2Halign . '" textsize="' . $label2Textsize . '" scale="' . $label2Scale . '" textcolor="' . $label2Color . '" text="' . $label2Text . '"></label>';
    $xml .= '</frame>';
    $xml .= '</manialink>';
	
	return $xml;
}
?>
