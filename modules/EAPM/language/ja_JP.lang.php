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
    'LBL_ASSIGNED_TO_ID' => 'アサイン先ID',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM ユーザー',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者名',
    'LBL_CREATED' => '作成者',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除済み',
    'LBL_NAME' => '名前',
    'LBL_CREATED_USER' => '作成ユーザー',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_FORM_TITLE' => '外部アカウント一覧',
    'LBL_MODULE_NAME' => '外部アカウント',
    'LBL_MODULE_TITLE' => '外部アカウント',
    'LBL_HOMEPAGE_TITLE' => '私のアカウント',
    'LNK_NEW_RECORD' => '外部アカウントの作成',
    'LNK_LIST' => '外部アカウントの閲覧',
    'LBL_SEARCH_FORM_TITLE' => '外部ソースの検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_NEW_FORM_TITLE' => '外部アカウントの作成',
    'LBL_PASSWORD' => 'パスワード',
    'LBL_USER_NAME' => 'ユーザー名',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'アプリケーション',
    'LBL_API_DATA' => 'APIデータ',
    'LBL_API_CONSKEY' => 'コンシューマー キー',
    'LBL_API_CONSSECRET' => 'コンシューマー シークレット',
    'LBL_API_OAUTHTOKEN' => 'OAuthトークン',
    'LBL_AUTH_UNSUPPORTED' => "この認証方法はアプリケーションがサポートしていません。",
    'LBL_AUTH_ERROR' => 'このアカウントへの接続が失敗しました。',
    'LBL_VALIDATED' => '接続',
    'LBL_ACTIVE' => 'アクティブ',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => '接続',
    'LBL_NOTE' => 'メモ',
    'LBL_CONNECTED' => '接続済み',

    'LBL_ERR_NO_AUTHINFO' => 'このアカウントの認証情報がありません。',
    'LBL_ERR_NO_TOKEN' => 'このアカウントのログイントークンがありません。',

    'LBL_ERR_FAILED_QUICKCHECK' => '{0} アカウントには接続していません。OKを押下するとアカウントに接続して接続を再度アクティブにします。',

    'LBL_CLICK_TO_EDIT' => '編集するにはクリック',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => '再認証',
    'LBL_APPLICATION_FOUND_NOTICE' => 'このアプリケーションのアカウントは既に存在します。既存のアカウントに戻しました。',
    'LBL_OMIT_URL' => '（http://またはhttps://は不要）',
    'LBL_OAUTH_SAVE_NOTICE' => 'SuiteCRM によってアカウント情報を提供するために、アカウントへのアクセスを承認して、ページに移動するためには <b>接続</b> をクリックします。接続した後、SuiteCRM に戻るよう指示されます。',
    'LBL_BASIC_SAVE_NOTICE' => 'このアカウントがSuiteCRMに接続するために <b>接続</b> をクリックします。',
    'LBL_ERR_POPUPS_DISABLED' => '接続するには、ブラウザのポップアップウィンドウを有効にするか、Webサイト "{0}" を例外リストに追加してください。',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
