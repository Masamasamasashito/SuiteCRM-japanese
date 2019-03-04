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
    'LBL_NAME' => 'ジョブ名：',
    'LBL_EXECUTE_TIME' => '実行時間',
    'LBL_SCHEDULER_ID' => 'スケジューラー',
    'LBL_STATUS' => 'ジョブの状態',
    'LBL_RESOLUTION' => '結果',
    'LBL_MESSAGE' => 'メッセージ',
    'LBL_DATA' => 'ジョブデータ',
    'LBL_REQUEUE' => '失敗時のリトライ',
    'LBL_RETRY_COUNT' => 'リトライ最大数',
    'LBL_FAIL_COUNT' => '失敗',
    'LBL_INTERVAL' => '試行間の最小間隔',
    'LBL_CLIENT' => '所有クライアント',
    'LBL_PERCENT' => '進捗率',
// Errors
    'ERR_CALL' => "関数を呼び出すことはできません: %s",
    'ERR_CURL' => "CURLでない - URLジョブを実行できません",
    'ERR_FAILED' => "Unexpected failure, please check PHP logs and sugarcrm.log",
    'ERR_PHP' => "%s [%d]: %s の %s %d 行",
    'ERR_NOUSER' => "ジョブに指定したユーザーIDがありません",
    'ERR_NOSUCHUSER' => "ユーザーID %s が見つかりません",
    'ERR_JOBTYPE' => "不明なジョブの種類: %s",
    'ERR_TIMEOUT' => "タイムアウト時の強制失敗",
    'ERR_JOB_FAILED_VERBOSE' => 'ジョブ %1$s (%2$s) はCRON実行時に失敗しました',
);
