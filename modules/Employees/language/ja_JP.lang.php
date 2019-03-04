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
    'LBL_MODULE_NAME' => '従業員',
    'LBL_MODULE_TITLE' => '従業員: ホーム',
    'LBL_SEARCH_FORM_TITLE' => '従業員検索',
    'LBL_LIST_FORM_TITLE' => '従業員',
    'LBL_NEW_FORM_TITLE' => '従業員作成',
    'LBL_LOGIN' => 'ログイン',
    'LBL_RESET_PREFERENCES' => 'デフォルト値に設定',
    'LBL_TIME_FORMAT' => '時間フォーマット:',
    'LBL_DATE_FORMAT' => '日付フォーマット:',
    'LBL_TIMEZONE' => '現在時刻:',
    'LBL_CURRENCY' => '通貨:',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_EMPLOYEE_NAME' => '従業員氏名',
    'LBL_LIST_DEPARTMENT' => '部署',
    'LBL_LIST_REPORTS_TO_NAME' => '上司',
    'LBL_LIST_EMAIL' => 'メール',
    'LBL_LIST_USER_NAME' => 'ユーザー名',
    'LBL_ERROR' => 'エラー:',
    'LBL_PASSWORD' => 'パスワード:',
    'LBL_USER_NAME' => 'ユーザー名:',
    'LBL_USER_TYPE' => 'ユーザータイプ',
    'LBL_FIRST_NAME' => '名:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_THEME' => 'テーマ:',
    'LBL_LANGUAGE' => '言語:',
    'LBL_ADMIN' => '管理者:',
    'LBL_EMPLOYEE_INFORMATION' => '従業員情報',
    'LBL_OFFICE_PHONE' => '勤務先電話番号:',
    'LBL_REPORTS_TO' => '上司:',
    'LBL_REPORTS_TO_NAME' => '上司の名前',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_NOTES' => '備考:',
    'LBL_DEPARTMENT' => '部署:',
    'LBL_TITLE' => '職位:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ADDRESS' => '住所:',
    'LBL_CITY' => '市区町村:',
    'LBL_STATE' => '都道府県:', //For address fields
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_COUNTRY' => '国:',
    'LBL_NAME' => '名前:',
    'LBL_MOBILE_PHONE' => '携帯電話:',
    'LBL_FAX' => 'ファックス:',
    'LBL_EMAIL' => 'メールアドレス:',
    'LBL_EMAIL_LINK_TYPE' => '電子メールクライアント',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM メール クライアント:</b> SuiteCRM アプリケーション内のメール クライアントを使用してメールを送信します。<br><b>外部メール クライアント:</b> Microsoft Outlook などの SuiteCRM アプリケーション外のメール クライアントを使用してメールを送信します。',
    'LBL_HOME_PHONE' => '自宅電話:',
    'LBL_WORK_PHONE' => '勤務先電話番号:',
    'LBL_EMPLOYEE_STATUS' => '従業員ステータス',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_SAVED_SEARCH' => '保存済みビュー',
    'LBL_MESSENGER_ID' => 'IM（InstantMessenger）名:',
    'LBL_MESSENGER_TYPE' => 'IM（InstantMessenger）タイプ:',
    'ERR_LAST_ADMIN_1' => '従業員名: \\"',
    'ERR_LAST_ADMIN_2' => '\\" は管理者権限を持つ最後の従業員です。最低1名の管理者が必要です。',
    'LNK_NEW_EMPLOYEE' => '従業員作成',
    'LNK_EMPLOYEE_LIST' => '従業員',
    'ERR_DELETE_RECORD' => '口座を削除するためにはレコード番号を指定する必要があります。',
    'LBL_LIST_EMPLOYEE_STATUS' => 'ステータス',

    'LBL_SUGAR_LOGIN' => 'ユーザー',
    'LBL_RECEIVE_NOTIFICATIONS' => 'アサインの通知',
    'LBL_IS_ADMIN' => '管理者',
    'LBL_GROUP' => 'グループユーザー',
    'LBL_PHOTO' => '写真',
    'LBL_DELETE_USER_CONFIRM' => 'この従業員はユーザーでもあります。従業員レコードを削除するとユーザーレコードも削除され、そのユーザーはアプリケーションにアクセスできなくなります。本当にこのレコードを削除しますか？',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'この従業員を削除しても良いですか？',
    'LBL_ONLY_ACTIVE' => 'アクティブな従業員',
    'LBL_SELECT' => '選択' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => '認証ID',
    'LBL_EXT_AUTHENTICATE' => '外部認証',
    'LBL_GROUP_USER' => 'グループユーザー',
    'LBL_LIST_ACCEPT_STATUS' => '承認ステータス',
    'LBL_MODIFIED_BY' => '更新者',
    'LBL_MODIFIED_BY_ID' => '更新ID',
    'LBL_CREATED_BY_NAME' => '作成者', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'ポータルAPIユーザー',
    'LBL_PSW_MODIFIED' => 'パスワード発行日',
    'LBL_SHOW_ON_EMPLOYEES' => '従業員レコードを表示',
    'LBL_USER_HASH' => 'パスワード',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'システムパスワード生成',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_FAX_PHONE' => 'FAX',
    'LBL_STATUS' => 'ステータス',
    'LBL_ADDRESS_CITY' => '住所 市区町村',
    'LBL_ADDRESS_COUNTRY' => '住所 国',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ADDRESS_POSTALCODE' => '住所 郵便番号',
    'LBL_ADDRESS_STATE' => '住所 都道府県',
    'LBL_ADDRESS_STREET' => '住所 番地',

    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_DATE_ENTERED' => '入力日',
    'LBL_DELETED' => '削除済み',

    'LBL_BUTTON_SELECT' => '選択',
    'LBL_BUTTON_CLEAR' => 'クリア',

    'LBL_CONTACTS_SYNC' => '連絡先の同期',
    'LBL_OAUTH_TOKENS' => 'Oトークン認証',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'プロジェクトのタイトルからプロジェクトのユーザー',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'コンタクトのタイトルからプロジェクトの連絡先',
    'LBL_ROLES' => '役割',
    'LBL_SECURITYGROUPS' => 'セキュリティグループ',
    'LBL_PROSPECT_LIST' => '見込み顧客リスト',
);
