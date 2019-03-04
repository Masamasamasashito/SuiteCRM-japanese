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
    'LBL_MODULE_NAME' => 'プロジェクト',
    'LBL_MODULE_TITLE' => 'プロジェクト: ホーム',
    'LBL_SEARCH_FORM_TITLE' => 'プロジェクト検索',
    'LBL_LIST_FORM_TITLE' => 'プロジェクト一覧',
    'LBL_HISTORY_TITLE' => '履歴',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => '入力日:',
    'LBL_DATE_MODIFIED' => '最終更新日:',
    'LBL_ASSIGNED_USER_ID' => 'アサイン先:',
    'LBL_ASSIGNED_USER_NAME' => 'プロジェクト マネージャー:',
    'LBL_MODIFIED_USER_ID' => '更新ユーザーID:',
    'LBL_CREATED_BY' => '作成者:',
    'LBL_NAME' => '名前:',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DELETED' => '削除済み:',
    'LBL_DATE' => '日付:',
    'LBL_DATE_START' => '開始日:',
    'LBL_DATE_END' => '終了日:',
    'LBL_PRIORITY' => '優先度:',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => '見積時間合計',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => '実績時間合計',
    'LBL_LIST_END_DATE' => '終了日',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'プロジェクトタスク',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商談',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'なし',
    'LBL_ALL_PROJECTS' => 'すべてのプロジェクト',
    'LBL_ALL_USERS' => 'すべてのユーザー',
    'LBL_ALL_CONTACTS' => 'すべての連絡先',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'プロジェクト作成',
    'LNK_NEW_PROJECT' => 'プロジェクト作成',
    'LNK_PROJECT_LIST' => 'プロジェクト',
    'LNK_NEW_PROJECT_TASK' => 'プロジェクトタスク作成',
    'LNK_PROJECT_TASK_LIST' => 'プロジェクトタスク',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '口座',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',
    'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
    'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'タスク名',
    'LBL_DURATION' => '時間',
    'LBL_ACTUAL_DURATION' => '実績期間',
    'LBL_START' => '最初',
    'LBL_FINISH' => '完了',
    'LBL_PREDECESSORS' => '前提タスク',
    'LBL_PERCENT_COMPLETE' => '進捗率(%)',
    'LBL_MORE' => 'さらに...',
    'LBL_OPPORTUNITIES' => '商談',
    'LBL_NEXT_WEEK' => '来週',
    'LBL_PROJECT_INFORMATION' => 'プロジェクト概要',
    'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'プロジェクトタスク',
    'LBL_VIEW_GANTT_TITLE' => 'ガントチャートを見る',
    'LBL_VIEW_GANTT_DURATION' => '期間',
    'LBL_TASK_TITLE' => 'タスクの編集',
    'LBL_DURATION_TITLE' => '期間を編集',
    'LBL_LAG' => '誤差',
    'LBL_DAYS' => '日',
    'LBL_HOURS' => '時間',
    'LBL_MONTHS' => '月',
    'LBL_SUBTASK' => 'タスク',
    'LBL_MILESTONE_FLAG' => 'マイルストーン',
    'LBL_ADD_NEW_TASK' => '新規タスクを追加',
    'LBL_DELETE_TASK' => 'タスクを削除',
    'LBL_EDIT_TASK_PROPERTIES' => 'タスクのプロパティを編集。',
    'LBL_PARENT_TASK_ID' => '親タスクID',
    'LBL_RESOURCE_CHART' => 'リソース カレンダー',
    'LBL_RELATIONSHIP_TYPE' => '関連タイプ',
    'LBL_ASSIGNED_TO' => 'プロジェクトマネージャー',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'プロジェクト テンプレート',
    'LBL_STATUS' => 'ステータス:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'プロジェクトマネージャー',
    'LBL_TOOLTIP_PROJECT_NAME' => 'プロジェクト',
    'LBL_TOOLTIP_TASK_NAME' => 'タスク名',
    'LBL_TOOLTIP_TITLE' => 'この日のタスク',
    'LBL_TOOLTIP_TASK_DURATION' => '期間',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'リソースはユーザーです',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'リソースは連絡先です',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => '前月',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => '来月',
    'LBL_RESOURCE_CHART_WEEK' => '週',
    'LBL_RESOURCE_CHART_DAY' => '日',
    'LBL_RESOURCE_CHART_WARNING' => 'プロジェクトにリソースは割り当てられていません。',
    'LBL_PROJECT_DELETE_MSG' => 'このプロジェクトとその関連タスクを削除してよろしいですか？',
    'LBL_LIST_MY_PROJECT' => '私のプロジェクト',
    'LBL_LIST_ASSIGNED_USER' => 'プロジェクトマネージャー',
    'LBL_UNASSIGNED' => '未割り当て',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'リソース',

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
    'LBL_SCHEDULING_FORM_TITLE' => 'リソース一覧',
    'LBL_REMOVE' => '削除', // PR 5451
    'LBL_VIEW_DETAIL' => '詳細を見る',
    'LBL_OVERRIDE_BUSINESS_HOURS' => '営業日を考慮する',

    'LBL_PROJECTS_SEARCH' => 'プロジェクトの検索',
    'LBL_USERS_SEARCH' => 'ユーザーの検索',
    'LBL_CONTACTS_SEARCH' => '連絡先の選択',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => '検索',

    'LBL_CHART_TYPE' => 'タイプ',
    'LBL_CHART_WEEKLY' => '毎週',
    'LBL_CHART_MONTHLY' => '毎月',
    'LBL_CHART_QUARTERLY' => '毎四半期',

    'LBL_RESOURCE_CHART_MONTH' => '月',
    'LBL_RESOURCE_CHART_QUARTER' => '四半期',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'コンタクトのタイトルからプロジェクトの連絡先',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'プロジェクト テンプレート: プロジェクト タイトルからプロジェクト',
    'LBL_AOS_QUOTES_PROJECT' => '見積: プロジェクト',

);
