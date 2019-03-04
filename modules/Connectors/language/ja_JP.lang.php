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

    'LBL_ADMINISTRATION_MAIN' => 'コネクタ設定',
    'LBL_AVAILABLE' => '利用可能',
    'LBL_BACK' => '< 戻る',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'いくつかの必須フィールドが空白のままです。変更を保存しますか？',
    'LBL_CONNECTOR_FIELDS' => 'コネクタフィールド',
    'LBL_DATA' => '日付',
    'LBL_DEFAULT' => 'デフォルト',
    'LBL_DISABLED' => '無効',
    'LBL_ENABLED' => '有効',
    'LBL_EXTERNAL' => 'このコネクタに外部アカウントで作成されたユーザーを有効にします。',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'このコネクタを使用する為には、コネクタプロパティ設定ページでプロパティを設定する必要があります。',
    'LBL_MERGE' => 'マージ',
    'LBL_MODIFY_DISPLAY_TITLE' => 'コネクタを有効化',
    'LBL_MODIFY_DISPLAY_DESC' => 'それぞれのコネクタでどのモジュールを有効化するか選択してください。',
    'LBL_MODULE_FIELDS' => 'モジュールフィールド',
    'LBL_MODIFY_MAPPING_TITLE' => 'コネクタフィールドを関連づけ',
    'LBL_MODIFY_MAPPING_DESC' => 'どのコネクタのデータがモジュールのレコードに対して表示・マージされるかを決めるため、コネクタフィールドとモジュールフィールドを関連付けます。',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'コネクタプロパティの設定',
    'LBL_MODIFY_PROPERTIES_DESC' => 'それぞれのコネクタのプロパティの設定 (URLやAPIキーを含む)',
    'LBL_MODIFY_SEARCH_TITLE' => 'コネクタ検索の管理',
    'LBL_MODIFY_SEARCH' => '検索',
    'LBL_MODIFY_SEARCH_DESC' => 'それぞれのモジュールのデータを検索する際に利用するコネクタフィールドを選択してください。',
    'LBL_MODULE_NAME' => 'コネクタ',
    'LBL_NO_PROPERTIES' => 'このコネクタに設定できるプロパティはありません。',
    'LBL_SAVE' => '保存',
    'LBL_SUMMARY' => '概要',
    'LBL_STEP1' => 'データの検索および閲覧',
    'LBL_STEP2' => 'レコードのマージ',
    'LBL_TEST_SOURCE' => 'コネクタのテスト',
    'LBL_TEST_SOURCE_FAILED' => 'テスト失敗',
    'LBL_TEST_SOURCE_SUCCESS' => 'テスト成功',
    'LBL_TITLE' => 'データマージ',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'エラー: このレコードへの追加の詳細が見つかりません。',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'このコネクタへモジュールが有効化されていません。コネクタを有効化ページでこのコネクタへのモジュールを選択してください。',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'エラー：検索フィールドが定義されているコネクタが有効ではありません。',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'エラー: モジュールとコネクタに一つも検索フィールドが定義されていません。システム管理者に連絡してください。',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'エラー: 結果に表示するモジュールフィールドが関連付けられていません。システム管理者に連絡してください。',
    'LBL_INFO_INLINE' => '情報' /*for 508 compliance fix*/,
    'LBL_CLOSE' => '閉じる' /*for 508 compliance fix*/,

);
