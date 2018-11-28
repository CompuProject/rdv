<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<?$APPLICATION->IncludeComponent(
	"aspro:tabs.priority", 
	"main", 
	array(
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"FILTER_NAME" => "arFilterCatalog",
		"HIT_PROP" => "HIT",
		"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_catalog"]["aspro_priority_catalog"][0],
		"IBLOCK_TYPE" => "aspro_priority_catalog",
		"NEWS_COUNT" => "20",
		"PARENT_SECTION" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "SHOW_ON_INDEX_PAGE",
			2 => "STATUS",
			3 => "PRICE",
			4 => "PRICEOLD",
			5 => "ARTICLE",
			6 => "FORM_ORDER",
			7 => "HIT",
			8 => "DELIVERY",
			9 => "SEATS",
			10 => "MAX_POWER_VT",
			11 => "MAX_SPEED",
			12 => "MASS",
			13 => "MODEL_ENGINE",
			14 => "POWER_LS",
			15 => "V_DVIGATELJA",
			16 => "VOLUME_ENGINE",
			17 => "RAZGON",
		),
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"TITLE" => "",
		"COMPONENT_TEMPLATE" => "main",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"S_ORDER_PRODUCT" => "Заказать",
		"S_MORE_PRODUCT" => "Подробнее",
		"PAGER_SHOW_ALL" => 'Y',
	),
	false
);?>