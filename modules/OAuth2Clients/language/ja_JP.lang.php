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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2クライアント',
    'LBL_MODULE_TITLE' => 'OAuth2クライアント',
    'LBL_MODULE_ID' => 'OAuth2クライアント',
    'LBL_IS_CONFIDENTIAL' => '機密情報',
    'LBL_SECRET' => 'シークレット',
    'LBL_SECRET_HASHED' => 'シークレットの変更',
    'LBL_LEAVE_BLANK' => '変更しない限り、空白のまま',
    'LBL_REMEMBER_SECRET' => '保存後は利用できなくなりますので、秘密を書き留めておいてください。',
    'LBL_REDIRECT_URL' => 'リダイレクトURL',
    'LBL_ALLOWED_GRANT_TYPE' => '許可された権限の種類',
    'LBL_DURATION_AMOUNT' => '期間額',
    'LBL_DURATION_UNIT' => '期間単位',
    'LBL_USER' => '関連ユーザー',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'アクティブなOAuth2トークン',
    'LBL_TOKEN_ID' => 'トークン',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'アクセストークンの有効期限',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'トークンの有効期限のリフレッシュ',

    'LNK_OAUTH2_TOKEN_LIST'=> 'OAtuh2トークン一覧',
    'LNK_OAUTH2_CLIENT_LIST' => 'OAuth2クライアント一覧',

    'LNK_NEW_OAUTH2_CLIENT' => 'OAuth2クライアントの作成',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => '新しいクライアントのパスワード',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => '新しいクライアント資格情報クライアント',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => '新しい暗黙的クライアント',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => '新しい承認クライアント',

];