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
    'ERR_DELETE_RECORD' => '口座を削除するためにはレコード番号を指定する必要があります。',
    'LBL_TOOL_TIP_BOX_TITLE' => 'ナレッジベースの提案',
    'LBL_TOOL_TIP_TITLE' => 'タイトル: ',
    'LBL_TOOL_TIP_BODY' => '本文: ',
    'LBL_TOOL_TIP_INFO' => '追加情報:',
    'LBL_TOOL_TIP_USE' => '用途: ',
    'LBL_SUGGESTION_BOX' => '提案',
    'LBL_NO_SUGGESTIONS' => '候補なし',
    'LBL_RESOLUTION_BUTTON' => '解決',
    'LBL_SUGGESTION_BOX_STATUS' => 'ステータス:',
    'LBL_SUGGESTION_BOX_TITLE' => '題名',
    'LBL_SUGGESTION_BOX_REL' => '関連性',

    'LBL_ACCOUNT_ID' => '口座ID',
    'LBL_ACCOUNT_NAME' => '口座名:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '口座',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_CASE_NUMBER' => 'チケット番号:',
    'LBL_CASE' => 'チケット:',
    'LBL_CONTACT_NAME' => '連絡先名:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'チケット',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_INVITEE' => '連絡先',
    'LBL_MEMBER_OF' => '口座',
    'LBL_MODULE_NAME' => 'チケット',
    'LBL_MODULE_TITLE' => 'チケット: ホーム',
    'LBL_NEW_FORM_TITLE' => 'チケット作成',
    'LBL_NUMBER' => '番号:',
    'LBL_PRIORITY' => '優先度:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文書',
    'LBL_RESOLUTION' => '解決:',
    'LBL_SEARCH_FORM_TITLE' => 'チケット検索',
    'LBL_STATUS' => 'ステータス:',
    'LBL_SUBJECT' => '件名:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '担当ユーザー名',
    'LBL_LIST_ACCOUNT_NAME' => '口座名',
    'LBL_LIST_ASSIGNED' => '担当ユーザー',
    'LBL_LIST_CLOSE' => '完了',
    'LBL_LIST_FORM_TITLE' => 'チケット一覧',
    'LBL_LIST_LAST_MODIFIED' => '最終更新日',
    'LBL_LIST_MY_CASES' => '私のチケット',
    'LBL_LIST_NUMBER' => '合計.',
    'LBL_LIST_PRIORITY' => '優先度',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_SUBJECT' => '件名',

    'LNK_CASE_LIST' => 'チケット',
    'LNK_NEW_CASE' => 'チケット作成',
    'LBL_LIST_DATE_CREATED' => '入力日',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー',
    'LBL_TYPE' => 'タイプ',
    'LBL_WORK_LOG' => '作業記録',
    'LNK_IMPORT_CASES' => 'データインポート',

    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_CASE_INFORMATION' => '概要',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    // SNIP
    'LBL_UPDATE_TEXT' => 'テキストを更新', //Field for Case updates with text only
    'LBL_INTERNAL' => '内部アップデート',
    'LBL_AOP_CASE_UPDATES' => 'ケースのアップデート',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'ケース更新スレッド',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'すべて折りたたむ',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'すべて開く',
    'LBL_AOP_CASE_ATTACHMENTS' => '添付: ',

    'LBL_AOP_CASE_EVENTS' => 'ケースイベント',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'ケースの添付ファイル',
    'LBL_ADD_CASE_FILE' => 'ファイルを追加',
    'LBL_REMOVE_CASE_FILE' => 'ファイルを削除',
    'LBL_SELECT_CASE_DOCUMENT' => 'ドキュメントを選択',
    'LBL_CLEAR_CASE_DOCUMENT' => 'ドキュメントをクリア',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => '内部CRMドキュメント',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => '外部ファイル',
    'LBL_CONTACT_CREATED_BY_NAME' => '連絡先によって作成された',
    'LBL_CONTACT_CREATED_BY' => '作成者',
    'LBL_CASE_UPDATE_FORM' => '更新 - 添付フォーム', //Form for attachments on case updates
    'LBL_CREATOR_PORTAL' => 'ポータル URL', //PR 5426
    'LBL_SUGGESTION' => '提案', //PR 5426
);