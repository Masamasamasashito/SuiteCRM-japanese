<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_NAME' => '契約管理',
    'LBL_CONTRACT_ACCOUNT' => '口座',
    'LBL_OPPORTUNITY' => '商談',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除済み',
    'LBL_NAME' => '契約タイトル',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_FORM_TITLE' => '契約リスト',
    'LBL_MODULE_NAME' => '契約',
    'LBL_MODULE_TITLE' => '契約: ホーム',
    'LBL_HOMEPAGE_TITLE' => '私の契約',
    'LNK_NEW_RECORD' => '連絡先の作成',
    'LNK_LIST' => '契約を表示',
    'LBL_SEARCH_FORM_TITLE' => '契約を検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_NEW_FORM_TITLE' => '新しい契約',
    'LBL_CONTRACT_NAME' => '契約タイトル',
    'LBL_REFERENCE_CODE ' => '参照コード ',
    'LBL_START_DATE' => '開始日',
    'LBL_END_DATE' => '終了日',
    'LBL_TOTAL_CONTRACT_VALUE' => '契約金額',
    'LBL_STATUS' => 'ステータス',
    'LBL_CUSTOMER_SIGNED_DATE' => '顧客署名日付',
    'LBL_COMPANY_SIGNED_DATE' => '会社の署名日付',
    'LBL_RENEWAL_REMINDER_DATE' => '更新通知日',
    'LBL_CONTRACT_TYPE' => '契約種類',
    'LBL_CONTACT' => '連絡先',
    'LBL_ADD_GROUP' => 'グループを追加',
    'LBL_DELETE_GROUP' => 'グループを削除',
    'LBL_GROUP_NAME' => 'グループ名',
    'LBL_GROUP_TOTAL' => 'グループ合計',
    'LBL_PRODUCT_QUANITY' => '数量',
    'LBL_PRODUCT_NAME' => '商品',
    'LBL_PART_NUMBER' => 'パート番号',
    'LBL_PRODUCT_NOTE' => 'ノート',
    'LBL_PRODUCT_DESCRIPTION' => '詳細',
    'LBL_LIST_PRICE' => '一覧',
    'LBL_DISCOUNT_AMT' => '割引',
    'LBL_UNIT_PRICE' => '販売価格',
    'LBL_TOTAL_PRICE' => '合計',
    'LBL_VAT' => '税金',
    'LBL_VAT_AMT' => '税額',
    'LBL_SERVICE_NAME' => 'サービス',
    'LBL_SERVICE_LIST_PRICE' => '一覧',
    'LBL_SERVICE_PRICE' => '販売価格',
    'LBL_SERVICE_DISCOUNT' => '割引',
    'LBL_LINE_ITEMS' => '１行項目',
    'LBL_SUBTOTAL_AMOUNT' => 'サブタイトル',
    'LBL_DISCOUNT_AMOUNT' => '割引',
    'LBL_TAX_AMOUNT' => '税金',
    'LBL_SHIPPING_AMOUNT' => '配送',
    'LBL_TOTAL_AMT' => '合計',
    'LBL_GRAND_TOTAL' => '総計',
    'LBL_SHIPPING_TAX' => '送料税',
    'LBL_SHIPPING_TAX_AMT' => '送料税',
    'LBL_ADD_PRODUCT_LINE' => '製品ラインを追加',
    'LBL_ADD_SERVICE_LINE' => 'サービス ラインを追加 ',
    'LBL_PRINT_AS_PDF' => 'PDFを印刷',
    'LBL_EMAIL_PDF' => 'PDFをメール',
    'LBL_PDF_NAME' => '契約',
    'LBL_EMAIL_NAME' => '契約先',
    'LBL_NO_TEMPLATE' => 'エラー\nテンプレートが見つかりませんでした。契約書テンプレートをまだ作成していない場合は、PDF テンプレート モジュールに移動し、作成してください',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => '契約値 (デフォルト通貨)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => '小計 (デフォルト通貨)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => '割引 (デフォルト通貨)',
    'LBL_TAX_AMOUNT_USDOLLAR' => '税 (デフォルト通貨)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => '送料 (デフォルト通貨)',
    'LBL_TOTAL_AMT_USDOLLAR' => '合計 (デフォルト通貨)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => '送料税 (デフォルト通貨)',
    'LBL_GRAND_TOTAL_USDOLLAR' => '総計 (デフォルト通貨)',

    'LBL_CALL_ID' => '電話 ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => '項目グループ',
    'LBL_AOS_PRODUCT_QUOTES' => '製品の見積',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => '見積: 契約',
);