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
    //module
    'LBL_MODULE_NAME' => 'ドキュメント',
    'LBL_MODULE_TITLE' => 'ドキュメント: ホーム',
    'LNK_NEW_DOCUMENT' => 'ドキュメント作成',
    'LNK_DOCUMENT_LIST' => 'ドキュメント',
    'LBL_DOC_REV_HEADER' => 'ドキュメント版数',
    'LBL_SEARCH_FORM_TITLE' => 'ドキュメント検索',
    //vardef labels
    'LBL_NAME' => 'ドキュメント名',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_CATEGORY' => 'カテゴリ',
    'LBL_SUBCATEGORY' => 'サブカテゴリ',
    'LBL_STATUS' => 'ステータス',
    'LBL_CREATED_BY' => '作成者',
    'LBL_DATE_ENTERED' => '入力日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_DELETED' => '削除済み',
    'LBL_MODIFIED' => '更新者ID',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_REVISIONS' => 'リビジョン',
    'LBL_RELATED_DOCUMENT_ID' => '関連ドキュメントID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => '関連ドキュメント版数ID',
    'LBL_IS_TEMPLATE' => 'テンプレート',
    'LBL_TEMPLATE_TYPE' => 'ドキュメントタイプ',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
    'LBL_REVISION_NAME' => '版数番号',
    'LBL_MIME' => 'Mimeタイプ',
    'LBL_REVISION' => '版数',
    'LBL_DOCUMENT' => '関連ドキュメント',
    'LBL_LATEST_REVISION' => '最新版数',
    'LBL_CHANGE_LOG' => '履歴: ',
    'LBL_ACTIVE_DATE' => '発行日',
    'LBL_EXPIRATION_DATE' => '有効期限',
    'LBL_FILE_EXTENSION' => 'ファイル拡張子',
    'LBL_LAST_REV_MIME_TYPE' => '最終リビジョンのMIMEタイプ',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => '未指定',
    'LBL_HOMEPAGE_TITLE' => '私のドキュメント',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'ドキュメント作成',
    //document edit and detail view
    'LBL_DOC_NAME' => 'ドキュメント名:',
    'LBL_FILENAME' => 'ファイル名:',
    'LBL_LIST_FILENAME' => 'ファイル名',
    'LBL_DOC_VERSION' => '版数:',
    'LBL_FILE_UPLOAD' => 'ファイル名',

    'LBL_CATEGORY_VALUE' => 'カテゴリ:',
    'LBL_LIST_CATEGORY' => 'カテゴリ',
    'LBL_SUBCATEGORY_VALUE' => 'サブカテゴリ:',
    'LBL_DOC_STATUS' => 'ステータス:',
    'LBL_LAST_REV_CREATOR' => '版数作成者:',
    'LBL_LASTEST_REVISION_NAME' => '最終版数名：',
    'LBL_SELECTED_REVISION_NAME' => '選択版数名：',
    'LBL_CONTRACT_STATUS' => '契約ステータス：',
    'LBL_CONTRACT_NAME' => '契約名:',
    'LBL_DET_RELATED_DOCUMENT' => '関連ドキュメント:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "関連ドキュメントのリビジョン:",
    'LBL_DET_IS_TEMPLATE' => 'テンプレート？ :',
    'LBL_DET_TEMPLATE_TYPE' => 'ドキュメントタイプ:',
    'LBL_DOC_DESCRIPTION' => '詳細:',
    'LBL_DOC_ACTIVE_DATE' => '発行日:',
    'LBL_DOC_EXP_DATE' => '有効期限:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'ドキュメント一覧',
    'LBL_LIST_DOCUMENT' => 'ドキュメント',
    'LBL_LIST_SUBCATEGORY' => 'サブカテゴリ',
    'LBL_LIST_REVISION' => '版数',
    'LBL_LIST_LAST_REV_CREATOR' => '発行者',
    'LBL_LIST_LAST_REV_DATE' => '改版日',
    'LBL_LIST_VIEW_DOCUMENT' => '閲覧',
    'LBL_LIST_ACTIVE_DATE' => '発行日',
    'LBL_LIST_EXP_DATE' => '有効期限',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LINKED_ID' => 'リンクされたid',
    'LBL_SELECTED_REVISION_ID' => '選択版数ID',
    'LBL_LATEST_REVISION_ID' => '最終版数ID',
    'LBL_SELECTED_REVISION_FILENAME' => '選択版数ファイル名',
    'LBL_FILE_URL' => 'ファイルURL',

    //document search form.
    'LBL_SF_CATEGORY' => 'カテゴリ:',
    'LBL_SF_SUBCATEGORY' => 'サブカテゴリ:',

    'DEF_CREATE_LOG' => 'ドキュメント作成日',

    //error messages
    'ERR_DOC_NAME' => 'ドキュメント名',
    'ERR_DOC_ACTIVE_DATE' => '発行日',
    'ERR_FILENAME' => 'ファイル名',
    'ERR_DOC_VERSION' => '版数',
    'ERR_DELETE_CONFIRM' => 'この版を削除して良いですか？',
    'ERR_DELETE_LATEST_VERSION' => '最新版を削除することを許可されていません。',
    'LNK_NEW_MAIL_MERGE' => 'メールマージ',
    'ERR_MISSING_FILE' => 'このドキュメントは見つかりません。アップロード時にエラーが発生した可能性が高いです。ファイルを再度アップロードしてみるか管理者に問い合わせてください。',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => '名前',
    'LBL_LIST_IS_TEMPLATE' => 'テンプレート？',
    'LBL_LIST_TEMPLATE_TYPE' => 'ドキュメントタイプ',
    'LBL_LAST_REV_CREATE_DATE' => '最終リビジョンの作成日',
    'LBL_CONTRACTS' => '契約',
    'LBL_CREATED_USER' => '作成者',
    'LBL_DOCUMENT_INFORMATION' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_DOC_ID' => 'ドキュメントソースID',
    'LBL_DOC_TYPE' => 'ソース',
    'LBL_DOC_TYPE_POPUP' => 'このドキュメントのアップロード先のソースを選択してください。',
    'LBL_DOC_URL' => 'ドキュメントソースURL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'ファイル名',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '一覧には最も直近に更新された20のファイルが降順に表示されます。他のファイルは検索してください。',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'ファイル名',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'ユーザーが無効な外部 API ({0}) にアクセスしようとしています。',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => '外部 API ({0}) に対するログインの確認に失敗しました',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '口座',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',
    'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
    'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',

    'LBL_AOS_CONTRACTS' => '契約',
);