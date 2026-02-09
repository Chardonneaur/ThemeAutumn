<?php

namespace Piwik\Plugins\ThemeAutumn;

use Piwik\Plugin;

class ThemeAutumn extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $themeStyles)
    {
        // === BACKGROUNDS — warm cream and beige ===
        $themeStyles->colorBackgroundBase = '#EFEBE9';
        $themeStyles->colorBackgroundContrast = '#FFF8E1';
        $themeStyles->colorBackgroundHighContrast = '#3E2723';
        $themeStyles->colorBackgroundTinyContrast = '#F5F0EB';
        $themeStyles->colorBackgroundLowContrast = '#D7CCC8';

        // === TEXT — deep earth tones ===
        $themeStyles->colorText = '#3E2723';
        $themeStyles->colorTextLight = '#4E342E';
        $themeStyles->colorTextLighter = '#6D4C41';
        $themeStyles->colorTextContrast = '#5D4037';

        // === BRAND — burnt orange ===
        $themeStyles->colorBrand = '#E65100';
        $themeStyles->colorBrandContrast = '#ffffff';

        // === SERIES — burnt orange for graphs ===
        $themeStyles->colorBaseSeries = '#E65100';

        // === LINKS — russet brown ===
        $themeStyles->colorLink = '#BF360C';

        // === HEADER — deep burgundy/brown ===
        $themeStyles->colorHeaderBackground = '#4E342E';
        $themeStyles->colorHeaderText = '#FFECB3';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#5D4037';

        // === BORDERS ===
        $themeStyles->colorBorder = '#BCAAA4';

        // === CODE ===
        $themeStyles->colorCode = '#4E342E';
        $themeStyles->colorCodeBackground = '#EFEBE9';

        // === MENU ===
        $themeStyles->colorMenuContrastText = '#5D4037';
        $themeStyles->colorMenuContrastTextSelected = '#3E2723';
        $themeStyles->colorMenuContrastTextActive = '#E65100';
        $themeStyles->colorMenuContrastBackground = '#FFF8E1';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground = '#FFF8E1';
        $themeStyles->colorWidgetBorder = '#D7CCC8';
        $themeStyles->colorWidgetTitleText = '#3E2723';
        $themeStyles->colorWidgetTitleBackground = '#FFF8E1';
        $themeStyles->colorWidgetExportedBackgroundBase = '#FFF8E1';

        // === FOCUS ===
        $themeStyles->colorFocusRing = '#E65100';
        $themeStyles->colorFocusRingAlternative = '#FF8F00';
    }
}
