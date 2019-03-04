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
    'LBL_ACCEPT_THIS' => '承諾？',
    'LBL_ADD_BUTTON' => '追加',
    'LBL_ADD_INVITEE' => '参加者追加',
    'LBL_CONTACT_NAME' => '連絡先:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_CREATED_BY' => '作成者',
    'LBL_DATE_END' => '終了日',
    'LBL_DATE_TIME' => '開始日時:',
    'LBL_DATE' => '開始日:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ミーティング',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DIRECTION' => '方向:',
    'LBL_DURATION_HOURS' => '時間:',
    'LBL_DURATION_MINUTES' => '分:',
    'LBL_DURATION' => '時間:',
    'LBL_EMAIL' => 'メール',
    'LBL_FIRST_NAME' => '名',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ノート',
    'LBL_HOURS_ABBREV' => '時',
    'LBL_HOURS_MINS' => '(時/分)',
    'LBL_INVITEE' => '参加者一覧',
    'LBL_LAST_NAME' => '姓',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先ユーザー',
    'LBL_LIST_CLOSE' => '完了',
    'LBL_LIST_CONTACT' => '連絡先',
    'LBL_LIST_DATE_MODIFIED' => '更新日',
    'LBL_LIST_DATE' => '実施日',
    'LBL_LIST_DIRECTION' => '方向',
    'LBL_LIST_DUE_DATE' => '期限日',
    'LBL_LIST_FORM_TITLE' => 'ミーティング一覧',
    'LBL_LIST_MY_MEETINGS' => '私のミーティング',
    'LBL_LIST_RELATED_TO' => '関連先',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_SUBJECT' => '件名',
    'LBL_LEADS_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_LOCATION' => '場所:',
    'LBL_MINSS_ABBREV' => '分',
    'LBL_MODIFIED_BY' => '更新者',
    'LBL_MODULE_NAME' => 'ミーティング',
    'LBL_MODULE_TITLE' => 'ミーティング: ホーム',
    'LBL_NAME' => '名前',
    'LBL_NEW_FORM_TITLE' => 'アポイント作成',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => '会議の更新順序',
    'LBL_PHONE' => '会社電話:',
    'LBL_REMINDER_TIME' => 'リマインダー時間',
    'LBL_EMAIL_REMINDER_SENT' => 'Eメール通知送信',
    'LBL_REMINDER' => 'リマインダー:',
    'LBL_REMINDER_POPUP' => 'ポップアップ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Eメール通知',
    'LBL_EMAIL_REMINDER' => 'Eメール通知',
    'LBL_EMAIL_REMINDER_TIME' => 'Eメール通知時間',
    'LBL_REMOVE' => '削除', // PR 5451
    'LBL_SCHEDULING_FORM_TITLE' => 'スケジューリング',
    'LBL_SEARCH_BUTTON' => '検索',
    'LBL_SEARCH_FORM_TITLE' => 'ミーティング検索',
    'LBL_SEND_BUTTON_LABEL' => '招待送信',
    'LBL_SEND_BUTTON_TITLE' => '招待送信',
    'LBL_STATUS' => 'ステータス:',
    'LBL_TYPE' => '会議タイプ',
    'LBL_PASSWORD' => '会議パスワード',
    'LBL_URL' => '会議の開始／参加',
    'LBL_HOST_URL' => 'ホストのURL',
    'LBL_DISPLAYED_URL' => 'URLを表示する',
    'LBL_CREATOR' => '会議の作成者',
    'LBL_EXTERNALID' => '外部アプリID',
    'LBL_SUBJECT' => '件名:',
    'LBL_TIME' => '開始時間:',
    'LBL_USERS_SUBPANEL_TITLE' => 'ユーザー',
    'LBL_PARENT_TYPE' => '親タイプ',
    'LBL_PARENT_ID' => '親会社ID',
    'LNK_MEETING_LIST' => 'ミーティング',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_NEW_MEETING' => 'ミーティング作成',
    'LNK_IMPORT_MEETINGS' => 'ミーティングをインポート',

    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'NOTICE_DURATION_TIME' => '時間は0以上である必要があります。',
    'LBL_MEETING_INFORMATION' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LIST_JOIN_MEETING' => '会議に参加',
    'LBL_ACCEPT_STATUS' => '承認ステータス',
    'LBL_ACCEPT_LINK' => 'リンク承認',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'あなたは招待されていないのでこの会議に参加できません。',
    'LBL_EXTNOT_RECORD_LINK' => '会議を閲覧',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'あなたはこの会議の管理者でもなく会議の所有者でもないので、会議を開始できません。',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => '参加者情報',
    'LBL_CREATE_CONTACT' => '連絡先として',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => '潜在顧客として', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => '作成 & 追加', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'キャンセル',
    'LBL_EMPTY_SEARCH_RESULT' => '結果が見つかりません。通知先を作成してください。',
    'LBL_NO_ACCESS' => 'モジュール $module へのアクセス権がありません。',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'リピートタイプ',
    'LBL_REPEAT_INTERVAL' => 'リピートインターバル',
    'LBL_REPEAT_DOW' => 'リピートDOW',
    'LBL_REPEAT_UNTIL' => '～まで繰り返す',
    'LBL_REPEAT_COUNT' => 'リピート回数',
    'LBL_REPEAT_PARENT_ID' => 'リピート親会社ID',
    'LBL_RECURRING_SOURCE' => 'リピートソース',

    'LBL_SYNCED_RECURRING_MSG' => 'この会議は別のシステムで開催され、SuiteCRMと同期されました。変更するには、他のシステム内の元の会議に移動します。他のシステムで行われた変更は、このレコードに同期させることができます。',
    'LBL_RELATED_TO' => '関連先:',

    // for reminders
    'LBL_REMINDERS' => '通知する',
    'LBL_REMINDERS_ACTIONS' => 'アクション:',
    'LBL_REMINDERS_POPUP' => 'ポップアップ',
    'LBL_REMINDERS_EMAIL' => 'メール招待者',
    'LBL_REMINDERS_WHEN' => 'いつ:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'リマインダの削除',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'すべての招待者を追加',
    'LBL_REMINDERS_ADD_REMINDER' => 'リマインダを追加',

    // for google sync
    'LBL_GSYNC_ID' => 'Google イベントID', // PR 6146
    'LBL_GSYNC_LASTSYNC' => 'Google の同期の最終タイムスタンプ', // PR 6146
);
