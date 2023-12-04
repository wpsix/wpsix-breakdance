<?php

namespace WPSix;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "WPSix\\Icon",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Icon extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'IconsIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Theme Icon';
    }

    static function className()
    {
        return 'sx-icon';
    }

    static function category()
    {
        return 'basic';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['content' => ['content' => ['iconify' => 'solar:crown-bold']]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "icon",
        "Icon",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => 'rem'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 6, 'max' => 100]],
        true,
        false,
        [],
      ), c(
        "rotate",
        "Rotate",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 360, 'step' => 1]],
        false,
        true,
        [],
      ), c(
        "style",
        "Style",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'none', 'text' => 'None'], '1' => ['text' => 'Solid', 'value' => 'solid'], '2' => ['text' => 'Outline', 'value' => 'outline']], 'buttonBarOptions' => ['layout' => 'default', 'size' => 'small']],
        false,
        false,
        [],
      ), c(
        "corners",
        "Corners",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'square', 'text' => 'Square'], '1' => ['text' => 'Round', 'value' => 'round'], '2' => ['text' => 'Custom', 'value' => 'custom']], 'condition' => ['0' => ['0' => ['path' => '%%CURRENTPATH%%.style', 'operand' => 'is one of', 'value' => ['0' => 'solid', '1' => 'outline']]]]],
        false,
        false,
        [],
      ), c(
        "radius",
        "Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px', '1' => '%'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 0, 'max' => 140], 'condition' => ['path' => '%%CURRENTPATH%%.corners', 'operand' => 'is one of', 'value' => ['0' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "padding",
        "Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 0, 'max' => 120], 'condition' => ['path' => '%%CURRENTPATH%%.style', 'operand' => 'is one of', 'value' => ['0' => 'solid', '1' => 'outline']]],
        true,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient'], 'condition' => ['path' => '%%CURRENTPATH%%.style', 'operand' => 'is one of', 'value' => ['0' => 'solid', '1' => 'outline']]],
        false,
        true,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'color', 'layout' => 'inline', 'condition' => ['path' => '%%CURRENTPATH%%.style', 'operand' => 'equals', 'value' => 'outline'], 'colorOptions' => ['type' => 'solidOnly']],
        false,
        true,
        [],
      ), c(
        "outline_width",
        "Outline Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px'], 'rangeOptions' => ['step' => 1, 'min' => 1, 'max' => 10], 'condition' => ['path' => '%%CURRENTPATH%%.style', 'operand' => 'equals', 'value' => 'outline']],
        true,
        false,
        [],
      ), c(
        "effects",
        "Effects",
        [c(
        "transition",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms'], 'defaultType' => 'ms']],
        false,
        false,
        [],
      ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "icon",
        "Icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "iconify",
        "Iconify Code",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'placeholder' => 'code from https://iconify.design'],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'link', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_REUSABLE_ICONIFY%%','/wp-content/plugins/wpsix/dist/libs/iconify/wpsix-iconify.js'],],'1' =>  ['title' => 'Frontend','inlineScripts' => ['new WPSixIconify(\'%%SELECTOR%%\', { iconify: {{ content.content.iconify|json_encode }} });
'],'builderCondition' => 'return false;',],];
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

'onMountedElement' => [['script' => '  (function() {
    if (!window.iconifyInstances) window.iconifyInstances = {};

    if (window.iconifyInstances && window.iconifyInstances[%%ID%%]) {
      window.iconifyInstances[%%ID%%].destroy();
    }

	window.iconifyInstances[%%ID%%] = new WPSixIconify(\'%%SELECTOR%%\', { iconify: {{ content.content.iconify|json_encode }} } );

}());',
],],

'onPropertyChange' => [['script' => '  (function() {

    if (!window.iconifyInstances) window.iconifyInstances = {};

    if (window.iconifyInstances && window.iconifyInstances[%%ID%%]) {
      window.iconifyInstances[%%ID%%].destroy();
    }

	window.iconifyInstances[%%ID%%] = new WPSixIconify(\'%%SELECTOR%%\', { iconify: {{ content.content.iconify|json_encode }} });
}());',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], '1' => ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 100;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'url', 'path' => 'content.content.link.url'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '2' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '3' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '5' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '9' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return ['looksGood' => 'yes', 'optionsGood' => 'yes', 'optionsWork' => 'yes'];
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
