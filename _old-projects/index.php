<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проекты");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"projects", 
	array(
		"IBLOCK_TYPE" => "aspro_priority_content",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arRegionLink",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/projects/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "BIG_BLOCK",
			1 => "TEXTCOLOR",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ORDERER",
			1 => "SITE",
			2 => "DATA",
			3 => "AUTHOR",
			4 => "TASK_PROJECT",
			5 => "FORM_ORDER",
			6 => "FORM_QUESTION",
			7 => "PHOTOPOS",
			8 => "LINK_REVIEWS",
			9 => "LINK_GOODS",
			10 => "LINK_SERVICES",
			11 => "LINK_SALE",
			12 => "LINK_PARTNERS",
			13 => "LINK_STAFF",
			14 => "challenge",
			15 => "FORM_PROJECT",
			16 => "DOCUMENTS",
			17 => "PHOTOS",
			18 => "LINK_PROJECTS",
			19 => "LINK_VACANCYS",
			20 => "LINK_FAQ",
			21 => "LINK_SERTIFICATES",
			22 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"IMAGE_POSITION" => "left",
		"USE_SHARE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"COMPONENT_TEMPLATE" => "projects",
		"SET_LAST_MODIFIED" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"FORM_ID" => "271",
		"GALLERY_TYPE" => "big",
		"REVIEWS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_form"]["aspro_priority_add_review"][0],
		"PROJECTS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_projects"][0],
		"SERVICES_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_catalog"]["aspro_priority_services"][0],
		"CATALOG_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_catalog"]["aspro_priority_catalog"][0],
		"STAFF_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_staff"][0],
		"PARTNERS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_partners"][0],
		"NEWS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_news"][0],
		"FAQ_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_faq"][0],
		"VACANCYS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_vacancy"][0],
		"SERTIFICATES_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_priority_content"]["aspro_priority_licenses"][0],
		"SERVICES_LINK_ELEMENTS_TEMPLATE" => "services_linked",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"LINE_ELEMENT_COUNT" => "2",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"S_ORDER_SERVISE" => "Заказать проект",
		"SHOW_NEXT_ELEMENT" => "Y",
		"T_NEXT_LINK" => "Следующий проект",
		"T_PREV_LINK" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"IMAGE_WIDE" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "",
			1 => "TIZERS",
			2 => "",
		),
		"T_CLIENTS" => "",
		"STRICT_SECTION_CHECK" => "Y",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"COMMENTS_COUNT" => "5",
		"BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_VK_USE" => "Y",
		"VK_TITLE" => "Вконтакте",
		"DETAIL_VK_API_ID" => "",
		"DETAIL_FB_USE" => "Y",
		"FB_TITLE" => "Facebook",
		"DETAIL_FB_APP_ID" => "",
		"S_ASK_QUESTION" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_PROJECTS" => "",
		"T_FAQ" => "",
		"T_SERVICES" => "",
		"T_ITEMS" => "",
		"T_PARTNERS" => "",
		"T_REVIEWS" => "",
		"T_STAFF" => "",
		"T_VACANCYS" => "",
		"T_SERTIFICATES" => "",
		"T_VIDEO" => "",
		"FILE_404" => "",
		"S_ORDER_PROJECT" => "",
		"LIST_PRODUCT_BLOCKS_ALL_ORDER" => "desc,char,sale,projects,faq,docs,video,gallery,brand,services,goods,partners,reviews,staff,vacancys,comments",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>