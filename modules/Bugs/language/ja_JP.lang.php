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
    'LBL_MODULE_NAME' => 'バグトラッカー',
    'LBL_MODULE_TITLE' => 'バグトラッカー: ホーム',
    'LBL_MODULE_ID' => 'バグトラッカー',
    'LBL_SEARCH_FORM_TITLE' => 'バグ検索',
    'LBL_LIST_FORM_TITLE' => 'バグ一覧',
    'LBL_NEW_FORM_TITLE' => '不具合作成',
    'LBL_SUBJECT' => '件名:',
    'LBL_NUMBER' => '番号:',
    'LBL_STATUS' => 'ステータス:',
    'LBL_PRIORITY' => '優先度:',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_CONTACT_NAME' => '連絡先名:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_LIST_NUMBER' => '合計.',
    'LBL_LIST_SUBJECT' => '件名',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_PRIORITY' => '優先度',
    'LBL_LIST_RESOLUTION' => '解決',
    'LBL_LIST_LAST_MODIFIED' => '最終更新日',
    'LBL_INVITEE' => '連絡先',
    'LBL_TYPE' => 'タイプ:',
    'LBL_LIST_TYPE' => 'タイプ',
    'LBL_RESOLUTION' => '解決:',
    'LBL_RELEASE' => 'リリース:',
    'LNK_NEW_BUG' => '不具合作成',
    'LNK_BUG_LIST' => 'バグトラッカー',
    'ERR_DELETE_RECORD' => 'バグを削除するにはレコード番号を指定する必要があります。',
    'LBL_LIST_MY_BUGS' => '私にアサインされたバグ',
    'LNK_IMPORT_BUGS' => 'データインポート',
    'LBL_FOUND_IN_RELEASE' => '発見リリース:',
    'LBL_FIXED_IN_RELEASE' => '修正リリース:',
    'LBL_LIST_FIXED_IN_RELEASE' => '修正リリース',
    'LBL_WORK_LOG' => '作業履歴:',
    'LBL_SOURCE' => 'ソース:',
    'LBL_PRODUCT_CATEGORY' => 'カテゴリ:',

    'LBL_CREATED_BY' => '作成者:',
    'LBL_MODIFIED_BY' => '更新者:',

    'LBL_LIST_EMAIL_ADDRESS' => 'メールアドレス',
    'LBL_LIST_CONTACT_NAME' => '連絡先名',
    'LBL_LIST_ACCOUNT_NAME' => '口座名',
    'LBL_LIST_PHONE' => '電話番号',
    'NTC_DELETE_CONFIRMATION' => '本当にこの連絡先をこのバグから削除して良いですか？',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '口座',
    'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
    'LBL_LIST_ASSIGNED_TO_NAME' => '担当ユーザー',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー',

    'LBL_BUG_INFORMATION' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions

);