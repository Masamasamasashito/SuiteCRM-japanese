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
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除',
    'LBL_NAME' => '名前',
    'LBL_SAVING' => '保存中...',
    'LBL_SAVED' => '保存',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_LIST_FORM_TITLE' => '活動履歴一覧',
    'LBL_MODULE_NAME' => '活動履歴',
    'LBL_MODULE_TITLE' => '活動履歴',
    'LBL_DASHLET_DISABLED' => '警告: 活動履歴が無効化されています。有効化するまで新しいエントリはポストされません。',
    'LBL_RECORDS_DELETED' => '活動履歴を有効化すると、すべての過去の活動履歴エントリは削除されます。新しいエントリは自動的に生成されます。',
    'LBL_CONFIRM_DELETE_RECORDS' => '活動履歴を削除してよろしいでしょうか？',
    'LBL_FLUSH_RECORDS' => 'フィードを削除',
    'LBL_ENABLE_FEED' => '活動傾向ダッシュレットを有効化',
    'LBL_ENABLE_MODULE_LIST' => 'フィードのアクティブ化',
    'LBL_HOMEPAGE_TITLE' => '活動傾向',
    'LNK_NEW_RECORD' => '活動履歴の作成',
    'LNK_LIST' => '活動履歴',
    'LBL_SEARCH_FORM_TITLE' => '活動履歴検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴の表示',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'アクティブ化',
    'LBL_NEW_FORM_TITLE' => '新規フィード',
    'LBL_ALL' => 'すべて',
    'LBL_USER_FEED' => 'ユーザーフィード',
    'LBL_ENABLE_USER_FEED' => 'ユーザーフィードの有効化',
    'LBL_TO' => '送り先',
    'LBL_IS' => 'は',
    'LBL_DONE' => '完了',
    'LBL_TITLE' => 'タイトル',
    'LBL_ROWS' => '今日',
    'LBL_CATEGORIES' => 'モジュール',
    'LBL_TIME_LAST_WEEK' => '先週',
    'LBL_TIME_WEEKS' => '週',
    'LBL_TIME_DAY' => '日', // PR 6080
    'LBL_TIME_DAYS' => '日',
    'LBL_TIME_YESTERDAY' => '昨日',
    'LBL_TIME_HOURS' => '時間',
    'LBL_TIME_HOUR' => '時間',
    'LBL_TIME_MINUTES' => '分',
    'LBL_TIME_MINUTE' => '分',
    'LBL_TIME_SECONDS' => '秒',
    'LBL_TIME_SECOND' => '秒',
    'LBL_TIME_AND' => 'と',
    'LBL_TIME_AGO' => '前',
// Activity stream
    'CREATED_CONTACT' => '<b>新規</b>に作成された{0}',
    'CREATED_OPPORTUNITY' => '<b>新規</b>に作成された{0}',
    'CREATED_CASE' => '<b>新規</b>に作成された{0}',
    'CREATED_LEAD' => '<b>新規</b>に作成された{0}',
    'FOR' => '金額', // Activity stream for cases
    'FOR_AMOUNT' => '量の', // Activity stream for opportunity
    'CLOSED_CASE' => '{0} は<b>クローズ</b>されました。 ',
    'CONVERTED_LEAD' => '{0} は<b>変換</b>されました。',
    'WON_OPPORTUNITY' => '{0} は<b>受注</b>されました。',
    'WITH' => '取引先',

    'LBL_LINK_TYPE_Link' => 'リンク',
    'LBL_LINK_TYPE_Image' => '画像',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => '選択',
    'LBL_POST' => 'ポスト',
    'LBL_AUTHENTICATE' => '認証',
    'LBL_AUTHENTICATION_PENDING' => 'すべての選択した外部アカウントが認証されています。外部アカウントを認証するオプション ウィンドウに戻るには、\'キャンセル\'をクリックするか、認証なしで続行するために’Ok\'をクリックします。',
    'LBL_ADVANCED_SEARCH' => '高度なフィルタ' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => '追加のオプションを表示',
    'LBL_HIDE_OPTIONS' => 'オプションを隠す',
    'LBL_VIEW' => '見る',
    'LBL_POST_TITLE' => 'ステータスの更新を投稿します。 ',
    'LBL_URL_LINK_TITLE' => '使用するURLリンク',
);
