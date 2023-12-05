<?php

namespace WPSix;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "WPSix\\Button",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Button extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M10.76,8.69A0.76,0.76 0 0,0 10,9.45V20.9C10,21.32 10.34,21.66 10.76,21.66C10.95,21.66 11.11,21.6 11.24,21.5L13.15,19.95L14.81,23.57C14.94,23.84 15.21,24 15.5,24C15.61,24 15.72,24 15.83,23.92L18.59,22.64C18.97,22.46 19.15,22 18.95,21.63L17.28,18L19.69,17.55C19.85,17.5 20,17.43 20.12,17.29C20.39,16.97 20.35,16.5 20,16.21L11.26,8.86L11.25,8.87C11.12,8.76 10.95,8.69 10.76,8.69M15,10V8H20V10H15M13.83,4.76L16.66,1.93L18.07,3.34L15.24,6.17L13.83,4.76M10,0H12V5H10V0M3.93,14.66L6.76,11.83L8.17,13.24L5.34,16.07L3.93,14.66M3.93,3.34L5.34,1.93L8.17,4.76L6.76,6.17L3.93,3.34M7,10H2V8H7V10" /></svg>';
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
        return 'Theme Button';
    }

    static function className()
    {
        return 'sx-button';
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
        return false;
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
        "style",
        "Style",
        [c(
        "preset",
        "Preset",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'primary', 'text' => 'Primary'], '1' => ['text' => 'Secondary', 'value' => 'secondary'], '2' => ['text' => 'Custom', 'value' => 'custom']], 'placeholder' => 'Default', 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "rounded",
        "Rounded",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "outline",
        "Outline",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'items' => ['0' => ['value' => 'solid', 'text' => 'Solid'], '1' => ['text' => 'Outline', 'value' => 'outline']]],
        false,
        false,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'condition' => ['0' => ['0' => ['path' => '%%CURRENTPATH%%.outline', 'operand' => 'is set', 'value' => '']]]],
        false,
        true,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 20, 'step' => 1], 'condition' => ['path' => '%%CURRENTPATH%%.outline', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      ), c(
        "no_fill_on_hover",
        "No Fill On Hover",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => ['path' => '%%CURRENTPATH%%.outline', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      ), c(
        "corner_radius",
        "Corner Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['0' => ['0' => ['path' => '%%CURRENTPATH%%.corners', 'operand' => 'equals', 'value' => 'custom']]]],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Border",
      "border",
       ['type' => 'popout']
     ), c(
        "transition",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms'], 'defaultType' => 'ms']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'before', 'text' => 'Before'], '1' => ['text' => 'After', 'value' => 'after']]],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "space",
        "Space",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        true,
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
        "transition",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms'], 'defaultType' => 'ms']],
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
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'variableOptions' => ['enabled' => false]],
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
      ), c(
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
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_REUSABLE_ICONIFY%%'],],'1' =>  ['title' => 'Backend','frontendCondition' => 'return false;','scripts' => ['/wp-content/plugins/wpsix-breakdance/dist/js/wpsix-iconify.js'],],];
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

	window.iconifyInstances[%%ID%%] = new WPSixIconify(\'%%SELECTOR%%\', { iconify: {{ content.content.iconify|json_encode }} });

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
        return ['0' => ['affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%', 'cssProperty' => 'margin-top', 'location' => 'outside-top'], '1' => ['cssProperty' => 'margin-bottom', 'location' => 'outside-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
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
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '2' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '3' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '5' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '9' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '10' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '11' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '12' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '13' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '14' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '15' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '16' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '17' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '18' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '19' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '20' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '21' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '22' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '23' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '24' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '25' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '26' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '27' => ['accepts' => 'string', 'path' => 'design.style.content.text'], '28' => ['accepts' => 'string', 'path' => 'design.style.content.link.url'], '29' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '30' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '31' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '32' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '33' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '34' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '35' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '36' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '37' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '38' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '39' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '40' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '41' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '42' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '43' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '44' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '45' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '46' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '47' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '48' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '49' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '50' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '51' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '52' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '53' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '54' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '55' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '56' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '57' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '58' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '59' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '60' => ['accepts' => 'string', 'path' => 'content.content.text'], '61' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '62' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '63' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '64' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.button.custom.size.full_width_at', 'design.button.styles', 'design.style.button.custom.size.full_width_at', 'design.style.button.styles', 'design.style.styles.styles.size.full_width_at', 'design.style.styles.styles'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
