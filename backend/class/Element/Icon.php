<?php declare(strict_types = 1);
namespace noxkiwi\frontend\Element;

use JetBrains\PhpStorm\Pure;
use noxkiwi\frontend\Constants\Bootstrap;
use noxkiwi\frontend\Tag\Html\Italic;
use function constant;
use function defined;
use function in_array;
use function is_array;

/**
 * Class Icon
 *
 * @package   noxkiwi\frontend\Element\Icon;
 *
 * @author    Jan Nox <jan.nox@pm.me>
 *
 * @copyright 2021 noxkiwi
 * @version   1.0.0
 */
final class Icon extends Italic
{
    public const  OPTION_ICON  = 'icon';
    public const  OPTION_COLOR  = 'color';
    public const  OPTION_STYLE  = 'style';
    public const  OPTION_SIZE  = 'size';
    public const  SIZE_DEFAULT  = '';
    public const  SIZE_XS       = 'fa-xs';
    public const  SIZE_SM       = 'fa-sm';
    public const  SIZE_LG       = 'fa-lg';
    public const  SIZE_2X       = 'fa-2x';
    public const  SIZE_3X       = 'fa-3x';
    public const  SIZE_4X       = 'fa-4x';
    public const  SIZE_5X       = 'fa-5x';
    public const  SIZE_7X       = 'fa-7x';
    public const  SIZE_10X      = 'fa-10x';
    public const  SIZES         = [
        self::SIZE_DEFAULT,
        self::SIZE_XS,
        self::SIZE_SM,
        self::SIZE_LG,
        self::SIZE_2X,
        self::SIZE_3X,
        self::SIZE_4X,
        self::SIZE_5X,
        self::SIZE_7X,
        self::SIZE_10X
    ];
    public const  STYLE_SOLID   = 'fas';
    public const  STYLE_REGULAR = 'far';
    public const  STYLE_LIGHT   = 'fal';
    public const  STYLE_BRAND   = 'fab';
    public const  STYLE_SPIN    = 'fa-spin';
    public const  STYLES        = [
        self::STYLE_SOLID,
        self::STYLE_REGULAR,
        self::STYLE_LIGHT,
        self::STYLE_BRAND,
        self::STYLE_SPIN
    ];
    public const  STACKED_1X    = 'fa-stack-1x';
    public const  STACKED_2X    = 'fa-stack-2x';
    public const  STACKS        = [
        self::STACKED_1X,
        self::STACKED_2X
    ];
    public const  ICON_ALARM_ENGAGED               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-siren-on', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_ALARM_DISENGAGED               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-siren', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_ARROW_TO_RIGHT      = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-arrow-alt-to-right', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_ARROW_RIGHT         = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-arrow-right', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_BAN                 = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-ban', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_BOX                 = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-box', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_BOX_OPEN            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-box-open', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_BOX_FULL            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-box-full', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_BOX_CHECK           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-box-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_BOX_HEART           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-box-heart', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_BOX_USD             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-box-usd', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CALC                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-calculator-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CALENDAR            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-calendar', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CALENDAR_CHECK      = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-calendar-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CALENDAR_ENTRIES    = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-calendar-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CAR_ALT             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-car-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_CAR                 = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-car', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  CART_PLUS                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-cart-plus', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CHANGE              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-exchange', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CAMERA              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-camera', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CAR_CRASH           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-car-crash', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_CHART_BAR           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-chart-bar', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CHART_LINE          = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-chart-line', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CHART_PIE           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-chart-pie', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CHECK               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_CHECK_BLACK         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CHECK_SECONDARY     = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_COG                 = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-cog', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_COGS                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-cogs', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_COPY                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-copy', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CHECK_SQUARE        = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-check-square', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_CHECK_SQUARE_WARN   = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-check-square', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_CLONE               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-clone', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_COMMENT             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-comment', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_INF];
    public const  ICON_COMMENT_LINES       = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-comment-alt-lines', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_INF];
    public const  ICON_CONFIG              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-cog', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CONFIG_WARN         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-cog', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_CREATE              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-plus', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_CIRCLE              = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_CIRCLE_RED          = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_CIRCLE_ORANGE       = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_CIRCLE_BLUE         = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_INF];
    public const  ICON_CLIPBOARD_LIST      = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-clipboard-list', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_DANGER              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-exclamation-triangle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_DATABASE            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-database', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_DELETE              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-times', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_EXCLAMATION_MARK    = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-exclamation', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_WARN                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-exclamation-triangle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_DELETE_CIRCLE       = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-times-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_DELETE_CIRCLE_BLACK = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-times-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_DELETE_USER         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-user-times', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_DESKTOP             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-desktop', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_DETAILS             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_DOT_CIRCLE          = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-dot-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_DOLLAR              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-dollar-sign', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_REPEAT              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-repeat-1-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_EURO                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-euro-sign', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_EXPAND_ARROWS       = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-expand-arrows', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_EXPAND_ARROW_DANGER = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-expand-arrows', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_FILE                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_FILE_CHECK          = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_FILE_ARCHIVE        = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-archive', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_FILE_CSV            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-csv', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_FILE_JPG            = self::ICON_PHOTO;
    public const  ICON_FILE_PNG            = self::ICON_PHOTO;
    public const  ICON_FILE_GIF            = self::ICON_PHOTO;
    public const  ICON_FILE_BMP            = self::ICON_PHOTO;
    public const  ICON_FILE_TIF            = self::ICON_PHOTO;
    public const  ICON_FILE_PDF            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-pdf', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_FILE_DOCX           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-word', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_FILE_DOC            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-word', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_FILE_MAIL           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-invoice', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_FILE_PPTX           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-powerpoint', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_FILE_PPT            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-powerpoint', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_FILE_TEXT           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_FILE_XLS            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-excel', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_FINANCE             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-invoice-dollar', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_FLEET               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-dot-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_FORK                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-chart-network', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_FORK_GREY           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-chart-network', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_IMAGES              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-images', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_IMAGE               = self::ICON_PHOTO;
    public const  ICON_EDIT                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-edit', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_EDIT_WARN           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-edit', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_ENVELOPE            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-envelope', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_ENVELOPE_SEND       = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-envelope', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_PREVIEW             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-eye', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_EYE_SLASH           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-eye-slash', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_LINK                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-link', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_MAP_MARKER          = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-map-marker-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_MAP_MARKER_SLASH    = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-map-marker-alt-slash', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_HAND_POINT_UP       = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-hand-point-up', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_HISTORY             = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-history', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_INFO_CIRCLE         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-info-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_INF];
    public const  ICON_INTERNATIONAL       = [self::OPTION_STYLE => self::STYLE_REGULAR, self::OPTION_ICON => 'fa-plane', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_KEY                 = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-key', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_INF];
    public const  ICON_LOGISTIC            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-road', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_LOGOUT              = [self::OPTION_STYLE => self::STYLE_LIGHT, self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG, 'icon' => 'fa-lock'];
    public const  ICON_MAIL_BULK           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-mail-bulk', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_MAGIC               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-magic', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_MALE                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-male', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_MINUS_GREEN         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-minus-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_MINUS_RED           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-minus-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_MONEY               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-money-bill', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_MONEY_GREY          = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-money-bill', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SEC];
    public const  ICON_MONEY_RED           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-money-bill', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_MONEY_CHECK         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-money-check', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_MONEY_CHECK_ALT     = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-money-check-alt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_NATIONAL            = [self::OPTION_STYLE => self::STYLE_REGULAR, self::OPTION_ICON => 'fa-house', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_IMPORT              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-sign-in', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_PDF                 = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-pdf', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_PAUSE               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-pause', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_PHOTO               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-file-image', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_PLAY                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-play', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_PLAY_CIRCLE         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-play-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_PLUS                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-plus', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_QUESTION            = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-question-circle', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_RANDOM              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-random', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_RADAR               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-radar', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_REDO                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-redo', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_SAVE                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-save', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_SEARCH              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-search', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_SEARCH_PLUS         = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-search-plus', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_SLASH_RED           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-slash', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DNG];
    public const  ICON_SORT_DOWN           = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-sort-down', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_SORT_UP             = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-sort-up', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_STAR                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-star', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_STOP                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-stop', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_STOPWATCH           = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-stopwatch', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_SYNC                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-sync', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_DEF];
    public const  ICON_TABLE               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-table', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_EVENTS              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-bolt', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_WRN];
    public const  ICON_BOOK                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-book', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_CLOCK               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-clock', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_TRUCK               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-truck', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_TOOLS               = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-tools', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_UNDO                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-undo', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_USER                = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-user', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_UPLOAD              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-upload', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_WINDOW_RESTORE      = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-window-restore', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_WRENCH              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-wrench', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  PAINT_BRUSH              = [self::OPTION_STYLE => self::STYLE_LIGHT,   self::OPTION_ICON => 'fa-palette', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_PACKAGE             = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-box', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_COMPANY_CAR         = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-taxi', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_PRI];
    public const  ICON_LAST_UPDATE         = [self::OPTION_STYLE => self::STYLE_SOLID,   self::OPTION_ICON => 'fa-asterisk', self::OPTION_SIZE => self::SIZE_LG, self::OPTION_COLOR => Bootstrap::TEXT_SUC];
    public const  ICON_LIVE_INSPECTION     = self::ICON_CLIPBOARD_LIST;
    public const  HOVER_POPOVER            = 'hoverPopover';
    private const NAMES                    = [];
    /** @var string $icon */
    private string $icon;
    /** @var string $color */
    private string $color;
    /** @var string $hexColor */
    private string $hexColor;
    /** @var string $size */
    private string $size;
    /** @var string|null $fixedWidth */
    private ?string $fixedWidth;
    /** @var string|null $addClass */
    private ?string $addClass;
    /** @var string $spinning */
    private string $spinning;
    /** @var mixed $style */
    private mixed $style;

    /**
     * Icon constructor.
     *
     * @param Mixed $configArray
     */
    public function __construct(array $configArray = null)
    {
        $this->tagName = 'i';
        if (is_array($configArray)) {
            $this->setIconName($configArray['icon']);
            $this->style = $configArray[self::OPTION_STYLE];
            $this->setColor($configArray[self::OPTION_COLOR]);
            $this->setSize($configArray[self::OPTION_SIZE]);
        }
        $this->setFixedWidth(true);
    }

    /**
     * @param string $icon
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public function setIconName(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @param array|string $iconConfig
     * @param string|null  $title
     *
     * @return string
     */
    public static function get(array|string $iconConfig, string $title = null): string
    {
        $icon = new self($iconConfig);
        $icon->setTitle($title ?? '');
        return $icon->render();
    }

    /**
     * Function output
     *
     * @param array|null  $icon
     * @param string|null $title
     *
     * @return string
     */
    public function output(array $icon = null, string $title = null): string
    {
        if (! empty($icon)) {
            $this->style = $icon[self::OPTION_STYLE] ?? $this->getStyle();
            $this->setIconName($icon['icon'] ?? $this->getIconName());
            $this->setColor($icon[self::OPTION_COLOR] ?? $this->getColor());
            $this->setSize($icon[self::OPTION_SIZE] ?? $this->getSize());
        }
        $this->setClass(
            "{$this->getStyle()} {$this->getIconName()} {$this->getColor()} {$this->getSize()} {$this->getFixedWidth()} {$this->getAddClass()} {$this->getSpinning()}"
        );
        if ($title !== null) {
            $this->setTitle($title);
        }

        return <<<HTML
<i class="{$this->getClassString()}"></i>
HTML;
    }

    /**
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @return string
     */
    public function getIconName(): string
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public function setColor(string $color): self
    {
        if (in_array($color, Bootstrap::TXT_COLORS, true)) {
            $this->color = $color;
        } else {
            $this->hexColor = $color;
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public function setSize(string $size): self
    {
        if (! in_array($size, self::SIZES, true)) {
            return $this;
        }
        $this->size = $size;

        return $this;
    }

    /**
     * @return string
     */
    public function getFixedWidth(): string
    {
        return $this->fixedWidth;
    }

    /**
     * @param bool $value
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public function setFixedWidth(bool $value): self
    {
        $this->fixedWidth = $value === true ? 'fa-fw' : '';

        return $this;
    }

    /**
     * @return string
     */
    public function getAddClass(): string
    {
        return $this->addClass ?? '';
    }

    /**
     * @return string
     */
    public function getSpinning(): string
    {
        return $this->spinning ?? '';
    }

    /**
     * @param string $class
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public function setSpinning(string $class): self
    {
        $this->spinning = $class;

        return $this;
    }

    /**
     * I will
     *
     * @param string $icon
     *
     * @return array
     */
    public static function getArray(string $icon): array
    {
        return self::NAMES[$icon] ?? self::ICON_QUESTION;
    }

    /**
     * @param array $value
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public function setIcon(array $value): self
    {
        $this->setColor($value[self::OPTION_COLOR]);
        $this->style = $value[self::OPTION_STYLE];
        $this->setSize($value[self::OPTION_SIZE]);

        return $this->setIconName($value['icon']);
    }

    /**
     * I will return the icon setup given by the $name.
     *
     * @param string $name
     *
     * @return array
     */
    #[Pure] private static function getConfigFromName(string $name): array
    {
        $constantName = self::class . '::ICON_' . $name;
        if (! defined($constantName)) {
            return self::ICON_QUESTION;
        }

        return constant($constantName);
    }

    /**
     * I will return the finished icon string from the given name.
     *
     * @param string $name
     *
     * @return \noxkiwi\frontend\Element\Icon
     */
    public static function getFromName(string $name): Icon
    {
        $icon = new self();

        return $icon->setIcon(self::getConfigFromName($name));
    }
}
