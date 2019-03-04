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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
    // Dashlet Categories
    'LBL_CHARTS' => 'チャート',
    'LBL_DEFAULT' => 'ビュー',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => '口座を削除するためにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_INFORMATION' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_ACCOUNT_NAME' => '口座名:',
    'LBL_ACCOUNT' => '口座:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ANNUAL_REVENUE' => '年間売上:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名:',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先ユーザー:',
    'LBL_BILLING_ADDRESS_CITY' => '請求先市区町村:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '請求先国:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '請求先郵便番号:',
    'LBL_BILLING_ADDRESS_STATE' => '請求先都道府県:',
    'LBL_BILLING_ADDRESS_STREET_2' => '請求先住所2:',
    'LBL_BILLING_ADDRESS_STREET_3' => '請求先住所3:',
    'LBL_BILLING_ADDRESS_STREET_4' => '請求先住所4:',
    'LBL_BILLING_ADDRESS_STREET' => '請求先番地その他:',
    'LBL_BILLING_ADDRESS' => '請求先住所:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
    'LBL_CITY' => '市区町村:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_COUNTRY' => '国:',
    'LBL_DATE_ENTERED' => '入力日:',
    'LBL_DATE_MODIFIED' => '最終更新日:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '口座',
    'LBL_DESCRIPTION_INFORMATION' => '詳細情報',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DUPLICATE' => '重複の可能性がある口座',
    'LBL_EMAIL' => 'メールアドレス:',
    'LBL_EMAIL_OPT_OUT' => 'Eメール 受信リストから除外:',
    'LBL_EMAIL_ADDRESSES' => 'Eメールアドレス',
    'LBL_EMPLOYEES' => '従業員:',
    'LBL_FAX' => 'FAX',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_HOMEPAGE_TITLE' => '私の口座',
    'LBL_INDUSTRY' => '業界:',
    'LBL_INVALID_EMAIL' => '無効なEメール:',
    'LBL_INVITEE' => '連絡先',
    'LBL_LEADS_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_LIST_ACCOUNT_NAME' => '名前',
    'LBL_LIST_CITY' => '市区町村',
    'LBL_LIST_CONTACT_NAME' => '連絡先名',
    'LBL_LIST_EMAIL_ADDRESS' => 'メールアドレス',
    'LBL_LIST_FORM_TITLE' => '口座一覧',
    'LBL_LIST_PHONE' => '電話番号',
    'LBL_LIST_STATE' => '都道府県',
    'LBL_MEMBER_OF' => '親会社:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子会社',
    'LBL_MODULE_NAME' => '口座',
    'LBL_MODULE_TITLE' => '口座: ホーム',
    'LBL_MODULE_ID' => '口座',
    'LBL_NAME' => '名前:',
    'LBL_NEW_FORM_TITLE' => '新規口座',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_OWNERSHIP' => '企業形態:',
    'LBL_PARENT_ACCOUNT_ID' => '親口座ID',
    'LBL_PHONE_ALT' => 'その他の電話:',
    'LBL_PHONE_FAX' => '会社ファックス:',
    'LBL_PHONE_OFFICE' => '勤務先電話番号:',
    'LBL_PHONE' => '電話番号:',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_PRODUCTS_TITLE' => '商品',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => '連絡先ににコピーする',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'コピー...',
    'LBL_RATING' => '格付:',
    'LBL_SAVE_ACCOUNT' => '口座を保存する',
    'LBL_SEARCH_FORM_TITLE' => '口座検索',
    'LBL_SHIPPING_ADDRESS_CITY' => '出荷先市区町村:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '出荷先国:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '出荷先郵便番号:',
    'LBL_SHIPPING_ADDRESS_STATE' => '出荷先都道府県:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '出荷先住所 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '出荷先住所 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '出荷先住所 4',
    'LBL_SHIPPING_ADDRESS_STREET' => '出荷先番地その他:',
    'LBL_SHIPPING_ADDRESS' => '出荷先住所:',
    'LBL_SIC_CODE' => '業界コード:',
    'LBL_STATE' => '都道府県:', //For address fields
    'LBL_TICKER_SYMBOL' => '証券コード:',
    'LBL_TYPE' => 'タイプ:',
    'LBL_WEBSITE' => 'Webサイト:',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LNK_ACCOUNT_LIST' => '口座を表示する',
    'LNK_NEW_ACCOUNT' => '口座の作成',
    'LNK_IMPORT_ACCOUNTS' => 'データインポート',
    'MSG_DUPLICATE' => 'あなたが作成しようとしている口座は既に存在する口座と重複します。同じ名前を含む取引先は下記に表示されています。<br>保存をクリックすると新たに口座を作成します。キャンセルをクリックすると口座を作成せずにモジュールに戻ります。',
    'MSG_SHOW_DUPLICATES' => 'あなたが作成しようとしている口座は既に存在する口座と重複します。同じ名前を含む口座は下記に表示されています。<br>保存をクリックすると新たに口座を作成します。キャンセルをクリックすると口座を作成せずにモジュールに戻ります。',
    'LBL_ASSIGNED_USER_NAME' => '担当ユーザー:',
    'LBL_PROSPECT_LIST' => '見込み顧客リスト',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '口座',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    //For export labels
    'LBL_PARENT_ID' => '親会社ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => '製品またはサービスの購入',

    'LBL_AOS_CONTRACTS' => '契約',
    'LBL_AOS_INVOICES' => '請求',
    'LBL_AOS_QUOTES' => '見積',
);