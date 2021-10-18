<?php
/**
 * @package    M.S. Services Module
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Load the smart search component language file.
$lang = $app->getLanguage();
$tag  = $lang->getTag();
$lang->load('mod_msvideos', JPATH_SITE);
?>

<p>
	<span style="font-family: courier new, courier, monospace;">
	<div class="videos_wrapper">
      <h2 class="videos_title"><?php echo Text::_('MOD_MSVIDEOS_VIDEOS'); ?></h2>
      <div class="videos_flex">
        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/ejercicios_para_cuello_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO02_ALT'); ?>"
            />
            <button class="videos_btn" id="video02">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle"><?php echo Text::_('MOD_MSVIDEOS_VIDEO02'); ?></div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/posturas_para_espalda_baja-_lumbar_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO03_ALT'); ?>"
            />
            <button class="videos_btn" id="video03">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle">
						<?php echo Text::_('MOD_MSVIDEOS_VIDEO03'); ?>
            </div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/respiración_alterna_o_nadi_sodhana_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO04_ALT'); ?>"
            />
            <button class="videos_btn" id="video04">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle">
							<?php echo Text::_('MOD_MSVIDEOS_VIDEO04'); ?>
            </div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/respiración_lunar_o_eka_chandra_bheda_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO05_ALT'); ?>"
            />
            <button class="videos_btn" id="video05">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle">
							<?php echo Text::_('MOD_MSVIDEOS_VIDEO05'); ?>
            </div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/respiración_solar_o_eka_surya_bheda_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO06_ALT'); ?>"
            />
            <button class="videos_btn" id="video06">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle">
							<?php echo Text::_('MOD_MSVIDEOS_VIDEO06'); ?>
            </div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/saludo_a_la_luna_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO07_ALT'); ?>"
            />
            <button class="videos_btn" id="video07">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle"><?php echo Text::_('MOD_MSVIDEOS_VIDEO07'); ?></div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/saludo_a_la_tierra_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO08_ALT'); ?>"
            />
            <button class="videos_btn" id="video08">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle"><?php echo Text::_('MOD_MSVIDEOS_VIDEO08'); ?></div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/saludo_al_sol_-_suryanamaskara_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO09_ALT'); ?>"
            />
            <button class="videos_btn" id="video09">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle"><?php echo Text::_('MOD_MSVIDEOS_VIDEO09'); ?></div>
          </div>
        </div>

        <div class="videos_item">
          <div class="videos_card">
            <img
              src="https://marielaspoltore.com/images/videos/shanti_mudra_800x500.jpg"
              class="videos_img"
              alt="<?php echo Text::_('MOD_MSVIDEOS_VIDEO10_ALT'); ?>"
            />
            <button class="videos_btn" id="video10">
              <i class="fas fa-play"></i> <?php echo Text::_('MOD_MSVIDEOS_PLAY_VIDEO'); ?>
            </button>
            <div class="videos_card-subtitle"><?php echo Text::_('MOD_MSVIDEOS_VIDEO10'); ?></div>
          </div>
        </div>
      </div>
    </div>
	</span>
</p>