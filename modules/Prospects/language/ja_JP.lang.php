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
    'LBL_MODULE_NAME' => 'ターゲット',
    'LBL_MODULE_ID' => 'ターゲット',
    'LBL_INVITEE' => '直属の部下',
    'LBL_MODULE_TITLE' => 'ターゲット: ホーム',
    'LBL_SEARCH_FORM_TITLE' => 'ターゲット検索',
    'LBL_LIST_FORM_TITLE' => 'ターゲット',
    'LBL_NEW_FORM_TITLE' => 'ターゲット作成',
    'LBL_BUSINESSCARD' => '名刺から作成',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_TITLE' => '職位',
    'LBL_LIST_EMAIL_ADDRESS' => 'メール',
    'LBL_LIST_PHONE' => '電話番号',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先:',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_EXISTING_ACCOUNT' => '既存の口座を使用',
    'LBL_CREATED_ACCOUNT' => '新規口座が作成されました',
    'LBL_CREATED_CALL' => '新しいコールが作成されました',
    'LBL_CREATED_MEETING' => '新しいミーティングが作成されました',
    'LBL_ADDMORE_BUSINESSCARD' => 'さらに名刺から作成',
    'LBL_ADD_BUSINESSCARD' => '名刺から作成',
    'LBL_NAME' => '名前:',
    'LBL_PROSPECT_INFORMATION' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => '追加情報',
    'LBL_FIRST_NAME' => '名:',
    'LBL_OFFICE_PHONE' => '勤務先電話番号:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_PHONE' => '電話番号:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_MOBILE_PHONE' => '携帯電話:',
    'LBL_HOME_PHONE' => '自宅電話:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_FAX_PHONE' => 'ファックス:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地その他:',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_ALT_ADDRESS_STREET' => '別の番地:',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村:',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国:',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号:',
    'LBL_TITLE' => '職位:',
    'LBL_DEPARTMENT' => '部署:',
    'LBL_BIRTHDATE' => '誕生日:',
    'LBL_EMAIL_ADDRESS' => 'メールアドレス:',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ASSISTANT' => 'アシスタント:',
    'LBL_ASSISTANT_PHONE' => 'アシスタント電話:',
    'LBL_DO_NOT_CALL' => '電話不可:',
    'LBL_EMAIL_OPT_OUT' => 'メール送信除外:',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_ALTERNATE_ADDRESS' => '別の住所:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_CITY' => '市区町村:',
    'LBL_STATE' => '都道府県:', //For address fields
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_COUNTRY' => '国:',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_OPP_NAME' => '商談名:',
    'LBL_IMPORT_VCARD' => 'vCardインポート',
    'LBL_IMPORT_VCARDTEXT' => 'vCardをインポートすることによって新規取引先担当者を作成します。',
    'LBL_DUPLICATE' => 'ターゲットの複製候補',
    'MSG_SHOW_DUPLICATES' => 'あなたが作成しようとしているレコードは既存レコードと重複する可能性があります。類似のレコードは下記に表示されています。<br>保存をクリックすると新たにレコードを作製します。<br>キャンセルをクリックするとレコードを作製せずにモジュールに戻ります。',
    'MSG_DUPLICATE' => 'あなたが作成しようとしているレコードは既存レコードと重複する可能性があります。類似のレコードは下記に表示されています。<br>保存をクリックすると新たにレコードを作製します。<br>キャンセルをクリックするとレコードを作製せずにモジュールに戻ります。',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LNK_NEW_ACCOUNT' => '口座の作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_NEW_CASE' => 'チケット作成',
    'LNK_NEW_NOTE' => 'ノート作成',
    'LNK_NEW_CALL' => 'コール作成',
    'LNK_NEW_EMAIL' => 'メールをアーカイブする',
    'LNK_NEW_MEETING' => 'ミーティング作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_IMPORT_PROSPECTS' => 'ターゲットのインポート',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除して良いですか？',
    'NTC_REMOVE_CONFIRMATION' => '本当にこの取引先担当者をケースから削除して良いですか？',
    'ERR_DELETE_RECORD' => '取引先担当者を削除するにはレコード番号を指定する必要があります。',
    'LBL_SALUTATION' => '敬称',
    'LBL_CREATED_OPPORTUNITY' => '新しい商談が作成されました',
    'LNK_SELECT_ACCOUNT' => "口座の選択",
    'LNK_NEW_PROSPECT' => 'ターゲット作成',
    'LNK_PROSPECT_LIST' => 'ターゲット',
    'LNK_NEW_CAMPAIGN' => 'キャンペーン作成',
    'LNK_CAMPAIGN_LIST' => 'キャンペーン',
    'LNK_NEW_PROSPECT_LIST' => 'ターゲットリスト作成',
    'LNK_PROSPECT_LIST_LIST' => 'ターゲットリスト',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'チェックしたターゲットの選択',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'チェックしたターゲットの選択',
    'LBL_INVALID_EMAIL' => '無効な電子メール:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ターゲット',
    'LBL_PROSPECT_LIST' => 'ターゲットリスト',
    'LBL_CONVERT_BUTTON_TITLE' => 'ターゲットをコンバート',
    'LBL_CONVERT_BUTTON_LABEL' => 'ターゲットをコンバート',
    'LNK_NEW_CONTACT' => '新規連絡先',
    'LBL_CREATED_CONTACT' => "新規口座が作成されました",
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'キャンペーンログ',
    'LBL_TRACKER_KEY' => 'トラッカーキー',
    'LBL_LEAD_ID' => 'リードID',
    'LBL_CONVERTED_LEAD' => 'コンバート済みリード',
    'LBL_ACCOUNT_NAME' => '口座名',
    'LBL_EDIT_ACCOUNT_NAME' => '口座名:',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'イベント',
);
