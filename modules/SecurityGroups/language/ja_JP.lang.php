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
    'LBL_ALL_MODULES' => 'すべて',//rost fix
    'LBL_ASSIGNED_TO_ID' => '担当ユーザーID',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除済み',
    'LBL_NONINHERITABLE' => '未継承',
    'LBL_LIST_NONINHERITABLE' => '未継承',
    'LBL_NAME' => '名前',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_LIST_FORM_TITLE' => 'セキュリティグループ',
    'LBL_MODULE_NAME' => 'セキュリティ スイートの管理',
    'LBL_MODULE_TITLE' => 'セキュリティ スイートの管理',
    'LNK_NEW_RECORD' => 'セキュリティ グループの作成',
    'LNK_LIST' => 'リストビュー',
    'LBL_SEARCH_FORM_TITLE' => 'セキュリティ スイート管理の検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'セキュリティ スイートの管理',
    'LBL_USERS' => 'ユーザー',
    'LBL_USERS_SUBPANEL_TITLE' => 'ユーザー',
    'LBL_ROLES_SUBPANEL_TITLE' => '役割',
    'LBL_ROLES' => '役割',

    'LBL_CONFIGURE_SETTINGS' => '構成',
    'LBL_ADDITIVE' => '付加的な権利',
    'LBL_ADDITIVE_DESC' => "ユーザーは、ユーザーまたはユーザーのグループに割り当てられているすべてのロールの最大の権限を取得します。",
    'LBL_STRICT_RIGHTS' => '厳格な権利',
    'LBL_STRICT_RIGHTS_DESC' => "ユーザーが複数のグループのメンバーである場合、現在のレコードに割り当てられたグループのそれぞれの権利のみが使用されます。",
    'LBL_USER_ROLE_PRECEDENCE' => 'ユーザーロールの優先順位',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'ロールがユーザーに直接割り当てられている場合、そのロールはどのグループ・ロールよりも優先される必要があります。',
    'LBL_INHERIT_TITLE' => 'グループ継承ルール',
    'LBL_INHERIT_CREATOR' => 'ユーザーによって作成された継承',
    'LBL_INHERIT_CREATOR_DESC' => 'レコードは、レコードを作成したユーザーに割り当てられたすべてのグループを継承します。',
    'LBL_INHERIT_PARENT' => '親レコードから継承',
    'LBL_INHERIT_PARENT_DESC' => '例)連絡先のケースが作成された場合、ケースは連絡先に関連付けられたグループを継承します。',
    'LBL_USER_POPUP' => '新しいユーザーグループのポップアップ',
    'LBL_USER_POPUP_DESC' => '新しいユーザーを作成するときに、セキュリティグループのポップアップを表示してユーザーをグループに割り当てます。',
    'LBL_INHERIT_ASSIGNED' => '割り当てられたユーザーから継承',
    'LBL_INHERIT_ASSIGNED_DESC' => 'レコードは、レコードに割り当てられたユーザーのすべてのグループを継承します。 レコードに割り当てられた他のグループは削除されません。',
    'LBL_POPUP_SELECT' => 'クリエイターグループの選択を使用する',
    'LBL_POPUP_SELECT_DESC' => '複数のグループのユーザーがレコードを作成すると、作成画面にグループ選択パネルが表示されます。 それ以外の場合は、そのグループを継承します。',
    'LBL_FILTER_USER_LIST' => 'ユーザーリストをフィルタリングする',
    'LBL_FILTER_USER_LIST_DESC' => "管理者以外のユーザーは、同じグループ内のユーザーにのみ割り当てることができます。",

    'LBL_DEFAULT_GROUP_TITLE' => '新しいレコードのデフォルトのグループ',
    'LBL_ADD_BUTTON_LABEL' => 'コネクタ管理',
    'LBL_REMOVE_BUTTON_LABEL' => '削除',
    'LBL_GROUP' => 'グループ:',
    'LBL_MODULE' => 'モジュール:',

    'LBL_MASS_ASSIGN' => 'セキュリティ グループ: 一括指定',
    'LBL_ASSIGN' => 'アサイン',
    'LBL_REMOVE' => '削除',
    'LBL_ASSIGN_CONFIRM' => 'このグループに追加することを本当に望みますか？ ',
    'LBL_REMOVE_CONFIRM' => 'このグループから削除することを本当に望みますか？ ',
    'LBL_CONFIRM_END' => 'レコード選択',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'セキュリティ グループ/ユーザー',
    'LBL_USER_NAME' => 'ユーザー名',
    'LBL_SECURITYGROUP_NAME' => 'セキュリティ グループ名',
    'LBL_HOMEPAGE_TITLE' => 'グループ メッセージ',
    'LBL_TITLE' => 'タイトル',
    'LBL_ROWS' => '今日',
    'LBL_POST' => 'ポスト',
    'LBL_SELECT_GROUP_ERROR' => 'グループを選択して、やり直してください。',

    'LBL_GROUP_SELECT' => 'このレコードへのアクセス グループを選択します。',
    'LBL_ERROR_DUPLICATE' => 'SuiteCRMによって重複が検出される可能性があるため、新しく作成したレコードにセキュリティグループを手動で追加する必要があります。',

    'LBL_INBOUND_EMAIL' => '送信メール アカウント',
    'LBL_INBOUND_EMAIL_DESC' => 'ユーザーがメールアカウントに割り当てられたグループに所属している場合にのみ、電子メールアカウントへのアクセスを許可する。',
    'LBL_PRIMARY_GROUP' => '主要グループ',
    'LBL_CHECKMARK' => 'チェックマーク',
);
