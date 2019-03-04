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
    'LBL_EDIT_LAYOUT' => 'レイアウト編集',
    'LBL_EDIT_FIELDS' => 'フィールドの編集',
    'LBL_SELECT_FILE' => 'ファイル選択',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'ツールボックス',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRMフィールド（ステージエリアに追加したいアイテムをクリック）',
    'LBL_VIEW_SUGAR_FIELDS' => 'SuiteCRMフィールドを見る',
    'LBL_FAILED_TO_SAVE' => '保存に失敗',
    'LBL_CONFIRM_UNSAVE' => 'すべての変更は保存されません。継続しても良いですか？',
    'LBL_PUBLISHING' => '公開中...',
    'LBL_PUBLISHED' => '公開済み',
    'LBL_FAILED_PUBLISHED' => '公開に失敗しました。',
    'LBL_DROP_HERE' => '[ここにドロップ]',

//CUSTOM FIELDS
    'LBL_NAME' => '名前',
    'LBL_LABEL' => 'ラベル',
    'LBL_MASS_UPDATE' => '一括更新',
    'LBL_DEFAULT_VALUE' => 'デフォルト値',
    'LBL_REQUIRED' => '必須',
    'LBL_DATA_TYPE' => 'タイプ',


    'LBL_HISTORY' => '履歴',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Studioへようこそ！</h2><br> 今日はどの作業を行いますか？<br><b>以下からオプションを選択して下さい。',
    'LBL_SW_EDIT_MODULE' => 'モジュールの編集',
    'LBL_SW_EDIT_DROPDOWNS' => 'ドロップダウンの編集',
    'LBL_SW_EDIT_TABS' => 'タブを設定',
    'LBL_SW_RENAME_TABS' => 'タブの名前を変更',
    'LBL_SW_EDIT_GROUPTABS' => 'グループタブの設定',
    'LBL_SW_EDIT_PORTAL' => 'ポータルの編集',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'カスタムフィールド修復',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'カスタムフィールドのマイグレート',

//Manager Backups History
    'LBL_MB_DELETE' => '削除',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'ドロップダウンの作成',
    'LBL_DROPDOWN_NAME' => 'ドロップダウン名:',
    'LBL_DROPDOWN_LANGUAGE' => 'ドロップダウン言語:',
    'LBL_TABGROUP_LANGUAGE' => 'タブグループ言語:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => '表示する値',
    'LBL_DD_DATABASEVALUE' => 'データベースの値',
    'LBL_DD_ALL' => 'CRM',

//BUTTONS
    'LBL_BTN_SAVE' => '保存',
    'LBL_BTN_CANCEL' => 'キャンセル',
    'LBL_BTN_SAVEPUBLISH' => '保存＆展開',
    'LBL_BTN_HISTORY' => '履歴',
    'LBL_BTN_ADDROWS' => '行の追加',
    'LBL_BTN_UNDO' => '元に戻す',
    'LBL_BTN_REDO' => '繰り返す',
    'LBL_BTN_ADDCUSTOMFIELD' => 'カスタムフィールド追加',
    'LBL_BTN_TABINDEX' => 'タブインデックスの編集',

//TABS
    'LBL_MODULES' => 'モジュール',
    'LBL_MODULE_NAME' => '管理',
    'LBL_CONFIGURE_GROUP_TABS' => 'モジュール メニュー フィルタの設定',
    'LBL_GROUP_TAB_WELCOME' => '以下のグループタブのレイアウトはユーザーがグループタブの利用を選択した場合に、マイアカウント>レイアウトオプションで通常のモジュールタブの代わりに利用されます。',
    'LBL_RENAME_TAB_WELCOME' => '下記テーブル内の任意のタブの表示名をクリックし、タブの名前を変更してください。',
    'LBL_DELETE_MODULE' => 'グループから<br />モジュールを削除',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'その他の利用可能な言語によるタブグループのラベルを設定するには、言語を選択し、ラベルを編集し、その言語を変更するために保存して配置をクリックしてください。',
    'LBL_ADD_GROUP' => 'フィルタの追加',
    'LBL_NEW_GROUP' => '新規グループ',
    'LBL_RENAME_TABS' => 'タブの名前を変更',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "エラー: 不正なキーの値: [']",

//SUGAR PORTAL
    'LBL_SAVE' => '保存' /*for 508 compliance fix*/,
    'LBL_UNDO' => '元に戻す' /*for 508 compliance fix*/,
    'LBL_REDO' => '再実行する' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'インライン' /*for 508 compliance fix*/,
    'LBL_DELETE' => '削除' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'フィールド追加' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => '最大化' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => '最小化' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => '発行' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => '行を追加' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'フィールド追加' /*for 508 compliance fix*/,
    'LBL_EDIT' => '編集' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => '言語を選択してください。',
    'LBL_SINGULAR' => '単数形ラベル',
    'LBL_PLURAL' => '複数形ラベル',
    'LBL_RENAME_MOD_SAVE_HELP' => 'クリック <b>保存</b> で変更を反映します。'

);
