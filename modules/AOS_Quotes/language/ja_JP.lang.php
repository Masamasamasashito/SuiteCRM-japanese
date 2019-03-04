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
    'LBL_ASSIGNED_TO_ID' => '担当ユーザーID',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除済み',
    'LBL_NAME' => 'タイトル',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'ERR_DELETE_RECORD' => '口座を削除するにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_NAME' => 'タイトル',
    'LBL_ACCOUNT' => '会社:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ANNUAL_REVENUE' => '年間売上:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_RATING' => '格付:',
    'LBL_ASSIGNED_USER' => 'アサイン先',
    'LBL_BILLING_ADDRESS_CITY' => '請求先市区町村:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '請求先国:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '請求先郵便番号:',
    'LBL_BILLING_ADDRESS_STATE' => '請求先都道府県:',
    'LBL_BILLING_ADDRESS_STREET_2' => '請求先住所2:',
    'LBL_BILLING_ADDRESS_STREET_3' => '請求先住所3:',
    'LBL_BILLING_ADDRESS_STREET_4' => '請求先住所4:',
    'LBL_BILLING_ADDRESS_STREET' => '請求先番地その他:',
    'LBL_BILLING_ADDRESS' => '請求先住所:',
    'LBL_ACCOUNT_INFORMATION' => '概要',
    'LBL_CITY' => '市区町村:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_COUNTRY' => '国:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '口座',
    'LBL_DUPLICATE' => '重複の可能性がある口座',
    'LBL_EMAIL' => 'メール:',
    'LBL_EMPLOYEES' => '従業員:',
    'LBL_FAX' => 'FAX',
    'LBL_INDUSTRY' => '業界:',
    'LBL_LIST_ACCOUNT_NAME' => '口座名',
    'LBL_LIST_CITY' => '市',
    'LBL_LIST_EMAIL_ADDRESS' => 'メールアドレス',
    'LBL_LIST_PHONE' => '電話番号',
    'LBL_LIST_STATE' => '州・県',
    'LBL_MEMBER_OF' => '親会社:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子会社',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_OWNERSHIP' => '企業形態:',
    'LBL_PARENT_ACCOUNT_ID' => '親口座ID',
    'LBL_PHONE_ALT' => 'その他の電話:',
    'LBL_PHONE_FAX' => '会社ファックス:',
    'LBL_PHONE_OFFICE' => '会社電話:',
    'LBL_PHONE' => '電話番号:',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_SAVE_ACCOUNT' => '口座を保存する',
    'LBL_SHIPPING_ADDRESS_CITY' => '出荷先市区町村:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '出荷先国:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '出荷先郵便番号:',
    'LBL_SHIPPING_ADDRESS_STATE' => '出荷先都道府県:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '出荷先住所 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '出荷先住所 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '出荷先住所 4',
    'LBL_SHIPPING_ADDRESS_STREET' => '出荷先番地その他:',
    'LBL_SHIPPING_ADDRESS' => '出荷先住所:',
    'LBL_STATE' => '都道府県:', //For address fields
    'LBL_TICKER_SYMBOL' => '証券コード:',
    'LBL_TYPE' => 'タイプ:',
    'LBL_WEBSITE' => 'Webサイト:',
    'LNK_ACCOUNT_LIST' => '口座',
    'LNK_NEW_ACCOUNT' => '口座の作成',
    'MSG_DUPLICATE' => 'この口座を作成することで重複した口座を作成する可能性があります。下の一覧からいずれかの口座を選択するか、入力したデータで新しい口座の作成を続行するために保存をクリックしてください。',
    'MSG_SHOW_DUPLICATES' => 'この口座を作成することで重複した口座を作成する可能性があります。入力したデータで新しい口座の作成を続行するために保存をクリックするか、キャンセルをクリックしてください。',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか?',
    'LBL_LIST_FORM_TITLE' => '見積リスト',
    'LBL_MODULE_NAME' => '見積',
    'LBL_MODULE_TITLE' => '見積: ホーム',
    'LBL_HOMEPAGE_TITLE' => '私の見積',
    'LNK_NEW_RECORD' => '見積作成',
    'LNK_LIST' => '見積を表示',
    'LBL_SEARCH_FORM_TITLE' => '見積を検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_NEW_FORM_TITLE' => '新しい見積もり',
    'LBL_TERMS_C' => '期間',
    'LBL_APPROVAL_ISSUE' => '承認の問題',
    'LBL_APPROVAL_STATUS' => '承認の状況',
    'LBL_BILLING_ACCOUNT' => '口座',
    'LBL_BILLING_CONTACT' => '連絡先',
    'LBL_EXPIRATION' => '有効期限',
    'LBL_QUOTE_NUMBER' => '見積番号',
    'LBL_OPPORTUNITY' => '商談',
    'LBL_TEMPLATE_DDOWN_C' => '見積テンプレート',
    'LBL_STAGE' => '見積ステージ',
    'LBL_TERM' => '支払条件',
    'LBL_SUBTOTAL_AMOUNT' => 'サブタイトル',
    'LBL_DISCOUNT_AMOUNT' => '割引',
    'LBL_TAX_AMOUNT' => '税金',
    'LBL_SHIPPING_AMOUNT' => '配送',
    'LBL_TOTAL_AMT' => '合計',
    'VALUE' => 'タイトル',
    'LBL_EMAIL_ADDRESSES' => 'Eメールアドレス',
    'LBL_LINE_ITEMS' => '１行項目',
    'LBL_GRAND_TOTAL' => '総計',
    'LBL_INVOICE_STATUS' => '請求状況',
    'LBL_PRODUCT_QUANITY' => '数量',
    'LBL_PRODUCT_NAME' => '商品',
    'LBL_PRODUCT_NUMBER' => '番号', // PR 3296
    'LBL_PART_NUMBER' => 'パート番号',
    'LBL_PRODUCT_NOTE' => 'ノート',
    'LBL_PRODUCT_DESCRIPTION' => '詳細',
    'LBL_LIST_PRICE' => '一覧',
    'LBL_DISCOUNT_AMT' => '割引',
    'LBL_UNIT_PRICE' => '販売価格',
    'LBL_TOTAL_PRICE' => '合計',
    'LBL_VAT' => '税金', // VAT
    'LBL_VAT_AMT' => '税額', // VAT
    'LBL_ADD_PRODUCT_LINE' => '製品ラインを追加',
    'LBL_SERVICE_NAME' => 'サービス',
    'LBL_SERVICE_NUMBER' => '番号', // PR 3296
    'LBL_SERVICE_LIST_PRICE' => '一覧',
    'LBL_SERVICE_PRICE' => '販売価格',
    'LBL_SERVICE_DISCOUNT' => '割引',
    'LBL_ADD_SERVICE_LINE' => 'サービス ラインを追加 ',
    'LBL_REMOVE_PRODUCT_LINE' => '削除',
    'LBL_CONVERT_TO_INVOICE' => '請求書へ変換',
    'LBL_PRINT_AS_PDF' => 'PDFを印刷',
    'LBL_EMAIL_QUOTE' => '見積をメール',
    'LBL_CREATE_CONTRACT' => '連絡先の作成',
    'LBL_LIST_NUM' => '数',
    'LBL_PDF_NAME' => '引用',
    'LBL_EMAIL_NAME' => '見積',
    'LBL_QUOTE_DATE' => '見積日',
    'LBL_NO_TEMPLATE' => 'エラー\nテンプレートが見つかりませんでした。請求書テンプレートをまだ作成していない場合は、PDF テンプレート モジュールに移動し、作成してください',
    'LBL_SUBTOTAL_TAX_AMOUNT' => '小計 + 税',//pre shipping
    'LBL_EMAIL_PDF' => 'PDFをメール',
    'LBL_ADD_GROUP' => 'グループを追加',
    'LBL_DELETE_GROUP' => 'グループを削除',
    'LBL_GROUP_NAME' => 'グループ名',
    'LBL_GROUP_DESCRIPTION' => 'グループの説明', // PR 3296
    'LBL_GROUP_TOTAL' => 'グループ合計',
    'LBL_SHIPPING_TAX' => '送料税',
    'LBL_SHIPPING_TAX_AMT' => '送料税',
    'LBL_IMPORT_LINE_ITEMS' => '行アイテムをインポート',
    'LBL_CREATE_OPPORTUNITY' => '商談作成',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => '小計 (デフォルト通貨)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => '割引 (デフォルト通貨)',
    'LBL_TAX_AMOUNT_USDOLLAR' => '税 (デフォルト通貨)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => '送料 (デフォルト通貨)',
    'LBL_TOTAL_AMT_USDOLLAR' => '合計 (デフォルト通貨)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => '送料税 (デフォルト通貨)',
    'LBL_GRAND_TOTAL_USDOLLAR' => '総計 (デフォルト通貨)',
    'LBL_QUOTE_TO' => '見積先',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => '小計 + 税 (デフォルト通貨)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => '見積: 契約',
    'LBL_AOS_QUOTES_AOS_INVOICES' => '見積: 請求書',
    'LBL_AOS_LINE_ITEM_GROUPS' => '項目グループ',
    'LBL_AOS_PRODUCT_QUOTES' => '製品の見積',
    'LBL_AOS_QUOTES_PROJECT' => '見積: プロジェクト',
);