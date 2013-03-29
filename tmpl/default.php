<?php
/**
 * WoW latest Guild Achievements Module
 *
 * @author     Branko Wilhelm <bw@z-index.net>
 * @link       http://www.z-index.net
 * @copyright  (c) 2011 - 2013 Branko Wilhelm
 * @package    mod_wow_latest_guild_achievements
 * @license    GNU Public License <http://www.gnu.org/licenses/gpl.html>
 * @version    $Id$
 */
// no direct accesss
defined('_JEXEC') or die;

JFactory::getDocument()->addStyleSheet(JURI::base(true) . '/modules/mod_wow_latest_guild_achievements/tmpl/stylesheet.css');
?>
<div class="mod_wow_latest_guild_achievements">
    <?php foreach ($achievements as $achievement) { ?>
    <div><?php echo $achievement; ?></div>
    <?php } ?>
</div>
