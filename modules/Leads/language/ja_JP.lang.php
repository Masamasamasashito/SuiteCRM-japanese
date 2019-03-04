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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => '潜在顧客を削除するにはレコード番号を指定します。',
    'LBL_ACCOUNT_DESCRIPTION' => '口座の説明',
    'LBL_ACCOUNT_ID' => '口座ID',
    'LBL_ACCOUNT_NAME' => '口座名:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_ADD_BUSINESSCARD' => '名刺から追加',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村:',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号:',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県:',
    'LBL_ALT_ADDRESS_STREET_2' => '別の住所 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '別の住所 3:',
    'LBL_ALT_ADDRESS_STREET' => '別の番地その他:',
    'LBL_ALTERNATE_ADDRESS' => '別の住所:',
    'LBL_ALT_ADDRESS' => '別の住所:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先ユーザー:',
    'LBL_BUSINESSCARD' => '潜在顧客のコンバート',
    'LBL_CITY' => '市区町村:',
    'LBL_CONTACT_ID' => '連絡先ID',
    'LBL_CONTACT_INFORMATION' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => '潜在顧客名:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '潜在顧客-商談:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_CONTACT' => '潜在顧客:',
    'LBL_CONVERTED_ACCOUNT' => '変換された口座:',
    'LBL_CONVERTED_CONTACT' => '変換された連絡先:',
    'LBL_CONVERTED_OPP' => 'コンバート済み商談:',
    'LBL_CONVERTED' => 'コンバート済',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '潜在顧客を変換する',
    'LBL_CONVERTLEAD' => '潜在顧客の変換',
    'LBL_CONVERTLEAD_WARNING' => '注意: 変換しようとしているリードの状態は変換済みです。欄楽先や口座のレコードが既に作成されている可能性があります。リードの変換を継続する場合、保存をクリックしてください。リードを変換せずに戻る場合は、キャンセルをクリックしてください。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' 可能性がある連絡先: ',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATED_NEW' => '新しいレコードを作成しました',
    'LBL_CREATED_ACCOUNT' => '新規口座が作成されました',
    'LBL_CREATED_CALL' => '新しいコールが作成されました',
    'LBL_CREATED_CONTACT' => '新規口座が作成されました',
    'LBL_CREATED_MEETING' => '新しいミーティングが作成されました',
    'LBL_CREATED_OPPORTUNITY' => '新しい商談が作成されました',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_DEPARTMENT' => '部署:',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DO_NOT_CALL' => '電話不可:',
    'LBL_DUPLICATE' => '類似の潜在顧客',
    'LBL_EMAIL_ADDRESS' => 'メールアドレス:',
    'LBL_EMAIL_OPT_OUT' => 'メール送信除外:',
    'LBL_EXISTING_ACCOUNT' => '既存の口座を使用',
    'LBL_EXISTING_CONTACT' => '既存の連絡先を使用',
    'LBL_EXISTING_OPPORTUNITY' => '既存の商談を使用',
    'LBL_FAX_PHONE' => 'ファックス:',
    'LBL_FIRST_NAME' => '名:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_HOME_PHONE' => '自宅電話:',
    'LBL_IMPORT_VCARD' => 'vCardインポート',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'vCardをインポートすることによって新規リードを作成します。',
    'LBL_INVALID_EMAIL' => '無効な電子メール:',
    'LBL_INVITEE' => '直属の部下',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '潜在顧客ソース詳細:',
    'LBL_LEAD_SOURCE' => '潜在顧客ソース:',
    'LBL_LIST_ACCEPT_STATUS' => '受け入れステータス',
    'LBL_LIST_ACCOUNT_NAME' => '口座名',
    'LBL_LIST_CONTACT_NAME' => '名前',
    'LBL_LIST_CONTACT_ROLE' => '役割',
    'LBL_LIST_DATE_ENTERED' => '入力日',
    'LBL_LIST_EMAIL_ADDRESS' => 'メール',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_LIST_FORM_TITLE' => 'リード一覧',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潜在顧客ソース詳細',
    'LBL_LIST_LEAD_SOURCE' => '潜在顧客ソース',
    'LBL_LIST_MY_LEADS' => '私の潜在顧客',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_PHONE' => '勤務先電話番号',
    'LBL_LIST_REFERED_BY' => '紹介元',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_TITLE' => '職位',
    'LBL_MOBILE_PHONE' => '携帯電話:',
    'LBL_MODULE_NAME' => '潜在顧客',
    'LBL_MODULE_TITLE' => '潜在顧客: ホーム',
    'LBL_NAME' => '名前:',
    'LBL_NEW_FORM_TITLE' => 'リード作成',
    'LBL_OFFICE_PHONE' => '勤務先電話番号:',
    'LBL_OPP_NAME' => '商談名:',
    'LBL_OPPORTUNITY_AMOUNT' => '商談規模:',
    'LBL_OPPORTUNITY_ID' => '商談ID',
    'LBL_OPPORTUNITY_NAME' => '商談名:',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_PHONE' => '電話番号:',
    'LBL_PORTAL_APP' => 'ポータルアプリケーション',
    'LBL_PORTAL_INFORMATION' => 'ポータル情報',
    'LBL_PORTAL_NAME' => 'ポータルユーザー名:',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_STREET' => '番地',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '主となる住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '主となる住所 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地その他:',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_REFERED_BY' => '紹介元:',
    'LBL_REPORTS_TO_ID' => '上司ID',
    'LBL_REPORTS_TO' => '上司:',
    'LBL_SALUTATION' => '敬称',
    'LBL_MODIFIED' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_SEARCH_FORM_TITLE' => 'リード検索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'チェック済み潜在顧客の選択',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'チェック済み潜在顧客の選択',
    'LBL_STATE' => '都道府県:', //For address fields
    'LBL_STATUS_DESCRIPTION' => 'ステータス詳細:',
    'LBL_STATUS' => 'ステータス:',
    'LBL_TITLE' => '職位:',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LNK_LEAD_LIST' => '潜在顧客の表示',
    'LNK_NEW_ACCOUNT' => '口座の作成',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_NEW_CONTACT' => '連絡先を作成',
    'LNK_NEW_LEAD' => '潜在顧客を作成',
    'LNK_NEW_NOTE' => 'ノート作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_NEW_CASE' => 'チケット作成',
    'LNK_NEW_CALL' => 'コール作成',
    'LNK_NEW_MEETING' => 'ミーティング作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_SELECT_ACCOUNTS' => '<b>または</b>取引先選択',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b>選択された連絡先',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除して良いですか？',
    'NTC_REMOVE_CONFIRMATION' => '本当にこのリードをこのケースから削除して良いですか？',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'キャンペーン',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先ユーザー',
    'LBL_PROSPECT_LIST' => 'ターゲットリスト',
    'LBL_CAMPAIGN_LEAD' => 'キャンペーン',
    'LBL_BIRTHDATE' => '誕生日:',
    'LBL_ASSISTANT_PHONE' => 'アシスタント電話番号',
    'LBL_ASSISTANT' => 'アシスタント',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CONVERT_MODULE_NAME' => 'モジュール',
    'LBL_CONVERT_REQUIRED' => '必須',
    'LBL_CONVERT_SELECT' => '選択を許可',
    'LBL_CONVERT_COPY' => 'データをコピー',
    'LBL_CONVERT_EDIT' => '編集',
    'LBL_CONVERT_DELETE' => '削除',
    'LBL_CONVERT_ADD_MODULE' => 'モジュールを追加',
    'LBL_CREATE' => '作成',
    'LBL_SELECT' => ' <b>または</b>選択',
    'LBL_WEBSITE' => 'Webサイト',
    'LNK_IMPORT_LEADS' => '潜在顧客をインポート',
//Convert lead tooltips
    'LBL_MODULE_TIP' => '新たなレコードを追加するモジュール',
    'LBL_REQUIRED_TIP' => 'リードをコンバートする前に、必要なモジュールが作成されている必要があります。',
    'LBL_COPY_TIP' => 'チェックすると、リードのフィールドの内容は同じ名前を持つフィールドにコピーされます。',
    'LBL_SELECTION_TIP' => 'リードのコンバート処理中は、取引先担当者への関連フィールドが選択可能となります。',
    'LBL_EDIT_TIP' => 'コンバート用のレイアウトを変更',
    'LBL_DELETE_TIP' => 'コンバート用レイアウトからこのモジュールを削除',

    'LBL_ACTIVITIES_MOVE' => 'アクティビティを移動する',
    'LBL_ACTIVITIES_COPY' => 'アクティビティをコピーする',
    'LBL_ACTIVITIES_MOVE_HELP' => "潜在顧客の活動を移動するレコードを選択します。タスク、電話、会議、メモ、メールは選択したレコードに移動されます。",
    'LBL_ACTIVITIES_COPY_HELP' => "潜在顧客の活動のコピーを作成するためのレコードを選択します。新しいタスク、電話、会議、メモは選択されたレコードのそれぞれに対して作成されます。メールは選択されたレコードに関連付けられます。",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => '入力日' /*for 508 compliance fix*/,
    'LBL_LOADING' => '読み込み中...' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '編集' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'イベント',
    'LBL_WWW' => 'WWW',
);