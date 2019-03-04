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
    'LBL_NAME' => '名前',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_LIST_NAME' => '名前',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_REMOVE' => '削除',
    'LBL_LIST_FORM_TITLE' => 'イベント リスト',
    'LBL_MODULE_NAME' => 'イベント',
    'LBL_MODULE_TITLE' => 'イベント',
    'LBL_HOMEPAGE_TITLE' => '私のイベント',
    'LNK_NEW_RECORD' => 'イベントの作成',
    'LNK_LIST' => 'イベントを表示',
    'LBL_SEARCH_FORM_TITLE' => 'イベントを検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_NEW_FORM_TITLE' => '新しいイベント',
    'LBL_LOCATION' => '場所',
    'LBL_START_DATE' => '開始日',
    'LBL_END_DATE' => '終了日時',
    'LBL_BUDGET' => '予算',
    'LBL_DATE' => '開始日',
    'LBL_DATE_END' => '終了日',
    'LBL_DURATION' => '期間',
    'LBL_INVITE_TEMPLATES' => 'メール招待テンプレート',
    'LBL_INVITE_PDF' => '招待を送る',
    'LBL_EDITVIEW_PANEL1' => 'イベントの詳細',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'デリゲート',
    'LBL_ACCEPT_REDIRECT' => 'リダイレクトURLの受け入れ',
    'LBL_DECLINE_REDIRECT' => 'リダイレクトURLの辞退',
    'LBL_SELECT_DELEGATES' => 'デリゲートの選択',
    'LBL_SELECT_DELEGATES_TITLE' => 'デリゲートの選択:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'ターゲットリスト',
    'LBL_SELECT_DELEGATES_TARGETS' => 'ターゲット',
    'LBL_SELECT_DELEGATES_CONTACTS' => '連絡先',
    'LBL_SELECT_DELEGATES_LEADS' => '潜在顧客',
    'LBL_MANAGE_DELEGATES' => 'デリゲートの管理',
    'LBL_MANAGE_DELEGATES_TITLE' => 'デリゲートの管理:-',
    'LBL_MANAGE_ACCEPTANCES' => '受け入れの管理',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => '受け入れの管理:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => '受領',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => '辞退',
    'LBL_MANAGE_POPUP_ERROR' => 'デリゲートが選択されていません。',
    'LBL_MANAGE_DELEGATES_INVITED' => '招待済',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => '未招待',
    'LBL_MANAGE_DELEGATES_ATTENDED' => '出席',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => '欠席',
    'LBL_SUCCESS_MSG' => 'すべての招待の送信に成功しました。',
    'LBL_ERROR_MSG_1' => 'すべてのリンクされた連絡先はすでに招待されています。',
    'LBL_ERROR_MSG_2' => '招待メールの送信に失敗しました！メール設定を確認してください。',
    'LBL_ERROR_MSG_3' => '10以上のメールの送信に失敗しました。招待したすべての連絡先のメールアドレスが有効なものであるかを確認してください。（suitecrm.logを参照してください）',
    'LBL_ERROR_MSG_4' => ' メールの送信に失敗しました。招待したすべての連絡先のメールアドレスが有効なものであるかを確認してください。（suitecem.logを参照してください）', //LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => '招待メールテンプレート',
    'LBL_EMAIL_INVITE' => 'メール招待',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => '連絡先',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => '場所',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => '潜在顧客',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'ターゲット',

    'LBL_HOURS_ABBREV' => '時',
    'LBL_MINSS_ABBREV' => '分',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'デリゲート',

    // Attendance report
    'LBL_CONTACT_NAME' => '名前',
    'LBL_ACCOUNT_NAME' => '会社',
    'LBL_SIGNATURE' => 'シグニチャ',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => '招待済',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'ステータス',

    'LBL_ACTIVITY_STATUS' => 'アクティビティ ステータス',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'イベント タイトルからイベントの場所',
    // Email links
    'LBL_ACCEPT_LINK' => '承諾',
    'LBL_DECLINE_LINK' => '拒否',

);
