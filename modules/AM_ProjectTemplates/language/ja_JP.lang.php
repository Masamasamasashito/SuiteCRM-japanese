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
    'LBL_ASSIGNED_TO_ID' => 'アサインされたユーザーID',
    'LBL_ASSIGNED_TO_NAME' => 'プロジェクトマネージャー',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_DELETED' => '削除済み',
    'LBL_NAME' => 'テンプレート名',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_LIST_NAME' => '名前',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_REMOVE' => '削除',
    'LBL_LIST_FORM_TITLE' => 'プロジェクト テンプレート リスト',
    'LBL_MODULE_NAME' => 'プロジェクトテンプレート',
    'LBL_MODULE_TITLE' => 'プロジェクトテンプレート',
    'LBL_HOMEPAGE_TITLE' => '私のプロジェクト テンプレート',
    'LNK_NEW_RECORD' => 'プロジェクト テンプレートを作成',
    'LNK_LIST' => 'プロジェクト テンプレートを表示',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'プロジェクト テンプレートをインポート',
    'LBL_SEARCH_FORM_TITLE' => 'プロジェクト テンプレートを検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_NEW_FORM_TITLE' => '新しいプロジェクト テンプレート',
    'LBL_STATUS' => 'ステータス',
    'LBL_PRIORITY' => '優先度',
    'LBL_PROJECT_NAME' => 'プロジェクト名',
    'LBL_START_DATE' => '開始日',
    'LBL_CREATE_PROJECT_TITLE' => 'このテンプレートから新しいプロジェクトを作成しますか？',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'タスク テンプレート',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'ユーザー',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => '連絡先',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'リソースを選択',
    'LBL_NEW_PROJECT_CREATED' => '新しいプロジェクトを作成',
    'LBL_NEW_PROJECT' => 'プロジェクト作成',
    'LBL_CANCEL_PROJECT' => 'キャンセル',

    'LBL_SUBTASK' => 'タスク',
    'LBL_MILESTONE_FLAG' => 'マイルストーン',
    'LBL_RELATIONSHIP_TYPE' => '関連タイプ',
    'LBL_LAG' => '誤差',
    'LBL_DAYS' => '日',
    'LBL_HOURS' => '時間',
    'LBL_MONTHS' => '月',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'プロジェクトタスク',
    'LBL_VIEW_GANTT_TITLE' => 'ガントチャートを見る',
    'LBL_VIEW_GANTT_DURATION' => '期間',
    'LBL_TASK_TITLE' => 'タスクの編集',
    'LBL_DURATION_TITLE' => '期間を編集',
    'LBL_DESCRIPTION' => 'ノート',
    'LBL_ASSIGNED_USER_ID' => 'アサイン先:',

    'LBL_LIST_ASSIGNED_USER' => 'プロジェクトマネージャー',
    'LBL_UNASSIGNED' => '未割り当て',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'リソース',
    'LBL_DELETE_TASK' => 'タスク削除',
    'LBL_VIEW_DETAIL' => '詳細を見る',
    'LBL_ADD_NEW_TASK' => '新規タスクを追加',
    'LBL_ASSIGNED_USER_NAME' => 'プロジェクト マネージャー:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'タスク名',
    'LBL_DURATION' => '期間',
    'LBL_ACTUAL_DURATION' => '実績期間',
    'LBL_START' => '最初',
    'LBL_FINISH' => '完了',
    'LBL_PREDECESSORS' => '前提タスク',
    'LBL_PERCENT_COMPLETE' => '進捗率(%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'タスクのプロパティを編集。',

    'LBL_OVERRIDE_BUSINESS_HOURS' => '営業日を考慮する',
    'LBL_COPY_ALL_TASKS' => 'すべてのタスクとリソースをコピー',
    'LBL_COPY_SEL_TASKS' => 'すべてのタスクとリソースをコピー',
    'LBL_TOOLTIP_TITLE' => 'ヒント',
    'LBL_TOOLTIP_TEXT' => '割り当てられたユーザーにすべてのタスクをコピー',

    'LBL_EMAIL' => 'メール',
    'LBL_PHONE' => '会社電話:',
    'LBL_ADD_BUTTON' => '追加',
    'LBL_ADD_INVITEE' => 'リソースを追加',
    'LBL_FIRST_NAME' => '名',
    'LBL_LAST_NAME' => '姓',
    'LBL_SEARCH_BUTTON' => '検索',
    'LBL_EMPTY_SEARCH_RESULT' => '結果が見つかりません。通知先を作成してください。',
    'LBL_CREATE_INVITEE' => 'リソースを作成',
    'LBL_CREATE_CONTACT' => '連絡先として',
    'LBL_CREATE_AND_ADD' => '作成 & 追加',
    'LBL_CANCEL_CREATE_INVITEE' => 'キャンセル',
    'LBL_NO_ACCESS' => 'モジュール $module へのアクセス権がありません。',
    'LBL_SCHEDULING_FORM_TITLE' => 'リソース リスト',
    'LBL_NONE' => 'なし',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'プロジェクト テンプレート: プロジェクト タイトルからプロジェクト',


);
