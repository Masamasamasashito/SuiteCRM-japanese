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
    'LBL_SEND_DATE_TIME' => '送信日',
    'LBL_IN_QUEUE' => 'キューイング中',
    'LBL_IN_QUEUE_DATE' => 'キューに入った日',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'バッチごとの送信メール数の値は整数である必要があります',

    'LBL_ATTACHMENT_AUDIT' => ' は送信されました。ディスク使用を節約するため、ローカルでは複製されていません。',
    'LBL_CONFIGURE_SETTINGS' => '設定',
    'LBL_CUSTOM_LOCATION' => 'ユーザーが設定',
    'LBL_DEFAULT_LOCATION' => 'デフォルト',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Eメールの削除の際に関連ノートと添付ファイルを削除',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'オプトインの設定',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'オプトイン Eメールの自動送信',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'オプトインの確認用Eメールテンプレート',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => '送信Eメールの設定',
    'LBL_EMAILS_PER_RUN' => '１回のバッチで送信されるメール数:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'キャンペーン',
    'LBL_LIST_FORM_TITLE' => 'メールキュー一覧',
    'LBL_LIST_FROM_NAME' => 'From（名前）',
    'LBL_LIST_IN_QUEUE' => '進行中',
    'LBL_LIST_MESSAGE_NAME' => 'マーケティングメッセージ',
    'LBL_LIST_RECIPIENT_EMAIL' => '受信者メールアドレス',
    'LBL_LIST_RECIPIENT_NAME' => '受信者氏名',
    'LBL_LIST_SEND_ATTEMPTS' => '送信回数',
    'LBL_LIST_SEND_DATE_TIME' => '送信日',
    'LBL_LIST_USER_NAME' => 'ユーザー名',
    'LBL_LOCATION_ONLY' => '場所',
    'LBL_LOCATION_TRACK' => 'キャンペーントラッキングファイルの場所（例: campaign_tracker.php）',
    'LBL_CAMP_MESSAGE_COPY' => 'キャンペーンメッセージのコピーを保存:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'すべてのキャンペーンで送った<bold>すべての</bold>Eメールメッセージの完全なコピーを保存しますか？<bold>いいえを推奨します。</bold> いいえを選ぶと送られたテンプレートのみ保存され、個々のメッセージで必要な変数は再生成されます。',
    'LBL_MAIL_SENDTYPE' => 'メール送信エージェント:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を利用',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート番号:',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバー名:',
    'LBL_MAIL_SMTPUSER' => 'SMTPユーザー名:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '電子メールプロバイダを選択',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID',
    'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード',
    'LBL_GMAIL_SMTPUSER' => 'Gmail電子メールアドレス',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザー名',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバーポート',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバー',
    'LBL_EMAIL_LINK_TYPE' => '電子メールクライアント',
    'LBL_MARKETING_ID' => 'マーケティングID',
    'LBL_MODULE_ID' => '電子メールマネージャ',
    'LBL_MODULE_NAME' => 'メール設定',
    'LBL_MODULE_TITLE' => 'メールキューの管理',
    'LBL_NOTIFICATION_ON_DESC' => 'レコードがアサインされた際に通知を送信',
    'LBL_NOTIFY_FROMADDRESS' => 'From（アドレス）:',
    'LBL_NOTIFY_FROMNAME' => 'From(名前):',
    'LBL_NOTIFY_ON' => '通知を有効',
    'LBL_NOTIFY_TITLE' => '電子メール通知の設定',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'アウトバウンドメールの設定',
    'LBL_RELATED_ID' => '関連ID',
    'LBL_RELATED_TYPE' => '関連タイプ',
    'LBL_SEARCH_FORM_TITLE' => 'メールキュー検索',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'config.phpで設定されたサイトURL',
    'TXT_REMOVE_ME_ALT' => 'この電子メールリストからあなた自身を除外するにはこちら',
    'TXT_REMOVE_ME_CLICK' => 'ここをクリック',
    'TXT_REMOVE_ME' => 'この電子メールリストからあなた自身を除外するには',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => '割り当てられたユーザーの電子メールアドレスから通知を送信する',

    'LBL_SECURITY_TITLE' => '電子メールのセキュリティ設定',
    'LBL_SECURITY_DESC' => '以下のタグのうち、メール表示時に無効にするものをチェックしてください。',
    'LBL_SECURITY_APPLET' => 'Appletタグ',
    'LBL_SECURITY_BASE' => 'Baseタグ',
    'LBL_SECURITY_EMBED' => 'Embedタグ',
    'LBL_SECURITY_FORM' => 'Formタグ',
    'LBL_SECURITY_FRAME' => 'Frameタグ',
    'LBL_SECURITY_FRAMESET' => 'Framesetタグ',
    'LBL_SECURITY_IFRAME' => 'iFrameタグ',
    'LBL_SECURITY_IMPORT' => 'Importタグ',
    'LBL_SECURITY_LAYER' => 'Layerタグ',
    'LBL_SECURITY_LINK' => 'Linkタグ',
    'LBL_SECURITY_OBJECT' => 'Objectタグ',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Outlookで作成されたメールを正しく表示するための、必要最低限のセキュリティ設定を選択します。',
    'LBL_SECURITY_STYLE' => 'Styleタグ',
    'LBL_SECURITY_TOGGLE_ALL' => 'すべてのタグを選択します。',
    'LBL_SECURITY_XMP' => 'Xmpタグ',
    'LBL_YES' => 'はい',
    'LBL_NO' => 'いいえ',
    'LBL_PREPEND_TEST' => '[テスト]: ',
    'LBL_SEND_ATTEMPTS' => 'テスト送信',
    'LBL_OUTGOING_SECTION_HELP' => 'ワークフローの通知を含む電子メールによる通知を送信するメールサーバーの設定を行います。',
    'LBL_ALLOW_DEFAULT_SELECTION' => "ユーザーはこのアカウントのIDとして送信することができます:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'このオプションが選択された場合、すべてのユーザーは同じ送信アカウントから<br>通知や通知を送信することが可能になります。このオプションを選択しない場合でも、<br>ユーザーは自身の送信アカウントを設定することによって当該送信サーバーから電子メールを送信できます。\'',
    'LBL_FROM_ADDRESS_HELP' => '有効の場合、アサイン先ユーザー名と電子メールアドレスがFromフィールドにセットされます。ただし、メールアカウントと異なるアドレスからメールを送信できないSMTPでは利用できません。',
    'LBL_HELP' => 'ヘルプ' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => '送信メール アカウントを表示',
    'LBL_ALLOW_SEND_AS_USER' => 'ユーザーは自分自身として送信することができます:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => '有効にすると、<b>すべての</b>ユーザーが自分のメインのメールアドレスを&quot;差出人&quot;として使用し、送信メールサーバーを使用してメールを送信できます。<br>この機能は、サーバー アカウントとは異なるメール アカウントからの送信を許可しないSMTPサーバーでは機能しない可能性があります。',
);
