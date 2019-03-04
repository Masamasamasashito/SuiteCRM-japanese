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
    'LBL_SALUTATION' => '敬称',
    'LBL_NAME' => '名前',
    'LBL_FIRST_NAME' => '名',
    'LBL_LAST_NAME' => '姓',
    'LBL_TITLE' => '職位',
    'LBL_DEPARTMENT' => '部署',
    'LBL_DO_NOT_CALL' => '電話禁止',
    'LBL_HOME_PHONE' => '自宅の電話番号',
    'LBL_MOBILE_PHONE' => '携帯電話',
    'LBL_OFFICE_PHONE' => '勤務先電話番号',
    'LBL_OTHER_PHONE' => '他の電話番号',
    'LBL_FAX_PHONE' => 'FAX',
    'LBL_EMAIL_ADDRESS' => 'Eメールアドレス(es)',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地その他:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '主となる番地2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '主となる番地3:',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_ALT_ADDRESS' => '別の住所',
    'LBL_ALT_ADDRESS_STREET' => '別の番地その他:',
    'LBL_ALT_ADDRESS_STREET_2' => '別の番地2:',
    'LBL_ALT_ADDRESS_STREET_3' => '別の番地3:',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村:',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号:',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国:',
    'LBL_PRIMARY_STREET' => '住所',
    'LBL_ALT_STREET' => '他の住所',
    'LBL_STREET' => '別の住所',
    'LBL_CITY' => '市区町村',
    'LBL_STATE' => '都道府県',
    'LBL_POSTAL_CODE' => '郵便番号',
    'LBL_COUNTRY' => '国',
    'LBL_CONTACT_INFORMATION' => '連絡先情報',
    'LBL_ADDRESS_INFORMATION' => '住所',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_ASSISTANT' => 'アシスタント',
    'LBL_ASSISTANT_PHONE' => 'アシスタント電話番号',
    'LBL_WORK_PHONE' => '勤務先電話番号',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LBL_ANY_EMAIL' => 'Eメール',
    'LBL_EMAIL_NON_PRIMARY' => '予備 Eメール',
    'LBL_PHOTO' => '写真',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_REMOVE' => '削除',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => '合法的な基礎',
    'LBL_DATE_REVIEWED' => '合法的な基準日見直し',
    'LBL_LAWFUL_BASIS_SOURCE' => '合法的なソース',
    'LBL_CONSENT' => '同意',
    //End Lawful Basis labels
);