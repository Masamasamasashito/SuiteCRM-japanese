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
    'LBL_EMAIL_INFORMATION' => 'メール',
    'LBL_FW' => 'FW:',
    'LBL_RE' => 'RE:',

    'LBL_BUTTON_CREATE' => '作成',
    'LBL_BUTTON_EDIT' => '編集',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'ドラフトの編集',
    'LBL_QS_DISABLED' => '（このモジュールではクイックサーチは利用できません。選択ボタンを利用してください。）',
    'LBL_SIGNATURE_PREPEND' => '返信時に上記シグネチャを利用',
    'LBL_IMPORT' => 'インポート',
    'LBL_LOADING' => '読み込み中',
    'LBL_MARKING' => 'マーク中',

    'LBL_CONFIRM_DELETE_EMAIL' => 'このメールを削除してもよろしいですか？',
    'LBL_ENTER_FOLDER_NAME' => 'フォルダ名を入力してください。',

    'LBL_ERROR_SELECT_MODULE' => 'フィールドに関連付けるモジュールを選択してください。',

    'ERR_ARCHIVE_EMAIL' => 'エラー: 保存するメールを選択して下さい。',
    'ERR_DELETE_RECORD' => 'エラー: 口座を削除するにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '口座',
    'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
    'LBL_ADD_DOCUMENT' => 'ドキュメントを追加',
    'LBL_ADD_ENTRIES' => 'エントリーの追加',
    'LBL_ADD_FILE' => 'ファイルを追加',
    'LBL_ATTACHMENTS' => '添付:',
    'LBL_ATTACH_FILES' => '添付ファイル',
    'LBL_ATTACH_DOCUMENTS' => '添付ドキュメント',
    'LBL_HAS_ATTACHMENT' => '添付あり：',
    'LBL_BCC' => 'BCC:',
    'LBL_BODY' => '本文:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_CC' => 'CC:',
    'LBL_COMPOSE_MODULE_NAME' => 'Eメール作成',
    'LBL_CONTACT_NAME' => '連絡先:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_CREATED_BY' => '作成者',
    'LBL_DATE_SENT_RECEIVED' => '送信/受信した日付:', // PR 6728
    'LBL_DATE' => '送信日付:',
    'LBL_DELETE_FROM_SERVER' => 'サーバーからメッセージを削除',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_EDIT_ALT_TEXT' => '代替テキストの編集',
    'LBL_SEND_IN_PLAIN_TEXT' => 'プレーン テキストで送信する',
    'LBL_SEND_CONFIRM_OPT_IN' => 'オプトイン メールを送信する',
    'LBL_EMAIL_ATTACHMENT' => '電子メール添付',
    'LBL_EMAIL_SELECTOR_SELECT' => '選択',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'クリア',
    'LBL_EMAIL' => 'メールアドレス:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'メール: 口座',
    'LBL_EMAILS_BUGS_REL' => '電子メール: 不具合',
    'LBL_EMAILS_CASES_REL' => '電子メール: ケース',
    'LBL_EMAILS_CONTACTS_REL' => '電子メール: 契約',
    'LBL_EMAILS_LEADS_REL' => 'メール: 潜在顧客',
    'LBL_EMAILS_OPPORTUNITIES_REL' => '電子メール: 商談',
    'LBL_EMAILS_NOTES_REL' => '電子メール：ノート',
    'LBL_EMAILS_PROJECT_REL' => '電子メール: プロジェクト',
    'LBL_EMAILS_PROJECT_TASK_REL' => '電子メール: プロジェクトタスク',
    'LBL_EMAILS_PROSPECT_REL' => '電子メール: ターゲット',
    'LBL_EMAILS_CONTRACTS_REL' => 'メール: 契約',
    'LBL_EMAILS_TASKS_REL' => '電子メール: タスク',
    'LBL_EMAILS_USERS_REL' => '電子メール: ユーザー',
    'LBL_EMPTY_FOLDER' => '電子メールがありません',
    'LBL_SELECT_FOLDER' => 'フォルダの選択',
    'LBL_ERROR_SENDING_EMAIL' => '電子メール送信エラー',
    'LBL_ERROR_SAVING_DRAFT' => 'ドラフトの保存時にエラー',
    'LBL_FROM_NAME' => 'From（名前）',
    'LBL_FROM' => 'From（名前）',
    'LBL_REPLY_TO' => 'Reply-toアドレス',
    'LBL_HTML_BODY' => 'HTMLボディ',
    'LBL_INVITEE' => '受信者',
    'LBL_LEADS_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_MESSAGE_SENT' => '電子メールを送信しました。',
    'LBL_MODIFIED_BY' => '更新者',
    'LBL_MODULE_NAME' => '電子メール',
    'LBL_MODULE_TITLE' => '電子メール：',
    'LBL_MY_EMAILS' => 'メール',
    'LBL_NEW_FORM_TITLE' => 'メールをアーカイブする',
    'LBL_NONE' => 'なし',
    'LBL_NOT_SENT' => '送信エラー',
    'LBL_NOTES_SUBPANEL_TITLE' => '添付ファイル',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商談',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'プロジェクトタスク',
    'LBL_RAW' => 'メールデータ',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'ドラフト保存',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'ドラフトを無視する',
    'LBL_SEARCH_FORM_TITLE' => '電子メール検索',
    'LBL_SEND_ANYWAYS' => 'このメールには件名がありません。送信/保存しますか？',
    'LBL_SEND_BUTTON_LABEL' => '送信',
    'LBL_SEND_BUTTON_TITLE' => '送信',
    'LBL_SEND' => '送信',
    'LBL_SENT_MODULE_NAME' => '送信済み電子メール',
    'LBL_SHOW_ALT_TEXT' => '代替テキストの表示',
    'LBL_SIGNATURE' => 'シグニチャ',
    'LBL_SUBJECT' => '件名:',
    'LBL_TEXT_BODY' => 'テキストボディ',
    'LBL_TIME' => '送信時間:',
    'LBL_TO_ADDRS' => 'To',
    'LBL_USERS_SUBPANEL_TITLE' => 'ユーザー',
    'LBL_USERS' => 'ユーザー',

    'LNK_CALL_LIST' => 'コール',
    'LBL_EMAIL_RELATE' => '関連先',
    'LNK_EMAIL_TEMPLATE_LIST' => '電子メールテンプレート',
    'LNK_MEETING_LIST' => 'ミーティング',
    'LNK_NEW_CALL' => 'コール作成',
    'LNK_NEW_EMAIL_TEMPLATE' => 'メールテンプレートの作成',
    'LNK_NEW_EMAIL' => '電子メール作成・保存',
    'LNK_NEW_MEETING' => 'ミーティング作成',
    'LNK_NEW_NOTE' => 'ノート作成',
    'LNK_NEW_SEND_EMAIL' => '電子メール作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_NOTE_LIST' => 'ノート',
    'LNK_SENT_EMAIL_LIST' => '送信済み電子メール',
    'LNK_TASK_LIST' => 'タスク',
    'LNK_VIEW_CALENDAR' => '今日',

    'LBL_LIST_ASSIGNED' => 'アサイン済み',
    'LBL_LIST_CONTACT_NAME' => '連絡先名',
    'LBL_LIST_DATE_SENT' => '送信日',
    'LBL_LIST_DATE_SENT_RECEIVED' => '送信/受信した日付', // PR 6728
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'ドラフト',
    'LBL_LIST_FORM_SENT_TITLE' => '送信済み電子メール',
    'LBL_LIST_FORM_TITLE' => '電子メール一覧',
    'LBL_LIST_FROM_ADDR' => '開始',
    'LBL_LIST_RELATED_TO' => '関連先',
    'LBL_LIST_SUBJECT' => '件名',
    'LBL_LIST_TO_ADDR' => 'To',
    'LBL_LIST_TYPE' => 'タイプ',

    'WARNING_SETTINGS_NOT_CONF' => '注: 電子メールを送信するための設定がされていません。',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => '元データ表示',
    'LBL_BUTTON_RAW_LABEL_HIDE' => '元データ非表示',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Eメール確認',
    'LBL_BUTTON_CHECK_TITLE' => '新規メールをチェック',
    'LBL_BUTTON_FORWARD' => '転送',
    'LBL_BUTTON_REPLY_TITLE' => '返信',
    'LBL_BUTTON_REPLY_ALL' => '全員に返信',
    'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
    'LBL_INBOUND_TITLE' => 'インバウンドメール',
    'LBL_INTENT' => '目的',
    'LBL_MESSAGE_ID' => 'メッセージID',
    'LBL_REPLY_HEADER_1' => '以下の日- ',
    'LBL_REPLY_HEADER_2' => 'さんは書きました:',
    'LBL_REPLY_TO_ADDRESS' => 'Reply-toアドレス',
    'LBL_REPLY_TO_NAME' => 'Reply-to名',

    'LBL_LIST_BUG' => 'バグトラッカー',
    'LBL_LIST_CASE' => 'ケース',
    'LBL_LIST_CONTACT' => '連絡先',
    'LBL_LIST_LEAD' => '潜在顧客',
    'LBL_LIST_TASK' => 'タスク',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先ユーザー',

    // for Inbox
    'LBL_ALL' => 'すべての',
    'LBL_ASSIGN_WARN' => '2つのオプションがすべて選択されていることを確認してください。',
    'LBL_BACK_TO_GROUP' => 'グループ受信箱へ戻る',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'アサイン',
    'LBL_BUTTON_DISTRIBUTE' => 'アサイン',
    'LBL_BUTTON_GRAB_TITLE' => 'グループから取る',
    'LBL_BUTTON_GRAB' => 'グループから取る',
    'LBL_CREATE_BUG' => '不具合作成',
    'LBL_CREATE_CASE' => 'チケット作成',
    'LBL_CREATE_CONTACT' => '連絡先を作成',
    'LBL_CREATE_LEAD' => '潜在顧客を作成',
    'LBL_CREATE_TASK' => 'タスク作成',
    'LBL_DIST_TITLE' => 'アサイメント',
    'LBL_LOCK_FAIL_DESC' => '選択されたアイテムは利用不可能です。',
    'LBL_LOCK_FAIL_USER' => 'は所有権を持ちました。',
    'LBL_MASS_DELETE_ERROR' => 'チェックされたアイテムはどれも削除されませんでした。',
    'LBL_NEW' => '新規',
    'LBL_NEXT_EMAIL' => '次のフリーアイテム',
    'LBL_REPLIED' => '返信済み',
    'LBL_TO' => 'To: ',
    'LBL_TOGGLE_ALL' => 'すべて選択',
    'LBL_UNKNOWN' => '未知',
    'LBL_USE' => 'アサイン:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => '選択された結果のアサイン先: ',
    'LBL_USER_SELECT' => 'ユーザー選択',
    'LBL_USING_RULES' => '利用するルール:',
    'LBL_WARN_NO_DIST' => '配布方法が選択されていません',
    'LBL_WARN_NO_USERS' => 'ユーザーが選択されていません',
    'LBL_IMPORT_STATUS_TITLE' => 'ステータス',
    'LBL_INDICATOR' => 'インジケーター',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'グループ受信箱',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'ドラフト',
    'LBL_LIST_TITLE_MY_INBOX' => '受信箱',
    'LBL_LIST_TITLE_MY_SENT' => 'Eメール送信済み',
    'LBL_LIST_TITLE_MY_ARCHIVES' => '電子メール',

    'LNK_MY_DRAFTS' => 'ドラフト',
    'LNK_MY_INBOX' => 'メール',
    'LNK_VIEW_MY_INBOX' => 'メールの表示',
    'LNK_QUICK_REPLY' => '返信',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => '主たるチームが指定されていません。',
    'LBL_INSERT_CONTACT_EMAIL' => '連絡先からメールアドレスを挿入する',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'アカウントからメールアドレスを挿入する',
    'LBL_INSERT_TARGET_EMAIL' => 'ターゲットからメールアドレスを挿入する',
    'LBL_INSERT_USER_EMAIL' => 'ユーザーからメールアドレスを挿入します。',
    'LBL_INSERT_LEAD_EMAIL' => '潜在顧客からメールアドレスを挿入します。',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => '不正なメールアドレス',

    // advanced search
    'LBL_ASSIGNED_TO' => 'アサイン先:',
    'LBL_MEMBER_OF' => '上位',
    'LBL_QUICK_CREATE' => 'クイック作成',
    'LBL_CREATE' => '作成', // PR 5651
    'LBL_STATUS' => 'メールのステータス:',
    'LBL_EMAIL_FLAGGED' => 'フラグ:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Reply To ステータス:',
    'LBL_TYPE' => 'タイプ:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '確認',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => '入力した内容が失われてしまいますが、指定したテンプレートを適用しますか?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '”--なし--"を選択すると電子メール本体にすでに入力されたいかなるデータも削除されます。続行しますか?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => '注意',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => '連絡先の属性（名前など）を含むメールテンプレートを用いて複数の受信者にメールを送信すると予期せぬ結果を招くことがあります。一括メールを送信する際はメールキャンペーンを利用することをお勧めします。',
    'LBL_CHECK_ATTACHMENTS' => '添付ファイルをチェックしてください!',
    'LBL_HAS_ATTACHMENTS' => 'この電子メールはすでに添付ファイルがあります。添付ファイルを保持しますか？',
    'LBL_HAS_ATTACHMENT_INDICATOR' => '添付ファイルあり',
    'ERR_MISSING_REQUIRED_FIELDS' => '必須フィールドが不足しています。',
    'ERR_INVALID_REQUIRED_FIELDS' => '不正な必須フィールドです。',
    'LBL_FILTER_BY_RELATED_BEAN' => '関係のある受信者のみ表示',
    'LBL_ADD_INBOUND_ACCOUNT' => 'コネクタ管理',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'コネクタ管理',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'メールアカウントの属性',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => '送信SMTPサーバー',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => '送信SMTPサーバー',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'メールアカウント',
    'LBL_EMAIL_SETTINGS_INBOUND' => '受信メール',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => '送信メール',
    'LBL_ADD_CC' => 'Ccに追加',
    'LBL_ADD_BCC' => 'Bccに追加',
    'LBL_MOVE_TO_BCC' => 'Bccへ移動',
    'LBL_ADD_TO_ADDR' => 'に追加',
    'LBL_SELECTED_ADDR' => '選択済',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'メッセージは送信できません。',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => '表示',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' もっと',
    'LBL_MORE_OPTIONS' => 'もっと',
    'LBL_LESS_OPTIONS' => '削除',
    'LBL_MAILBOX_TYPE_PERSONAL' => '個人',
    'LBL_MAILBOX_TYPE_GROUP' => 'グループ',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'グループ - 自動インポート',
    'LBL_SEARCH_FOR' => '検索',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>個人</b>：あなたによってアクセス可能なメールアカウント。あなただけが管理可能で、このアカウントからメールをインポートします。<br><b>グループ</b>：特定のチーム全体がアクセス可能なアカウント。チームメンバーが管理可能で、このアカウントからメールをインポートします。<br><b>グループ - 自動インポート</b>：特定のチームによってアクセス可能なアカウント。電子メールは自動的にインポートされます。',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => '受信者を検索するには、電子メールアドレス、姓、または名を入力してください。',
    'LBL_TEST_SETTINGS' => '設定のテスト',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>このメッセージには内容がありません</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => '件名を指定してください',
    'LBL_HAS_EMPTY_EMAIL_BODY' => '本体のメッセージを指定してください',
    'LBL_HAS_INVALID_EMAIL_CC' => 'Ccフィールドのアドレスは無効です',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'Bccフィールドのアドレスは無効です',
    'LBL_HAS_INVALID_EMAIL_TO' => 'Toフィールドのアドレスは無効です',
    'LBL_TEST_EMAIL_SUBJECT' => 'SuiteCRMからのメール送信テスト',
    'LBL_NO_SUBJECT' => '(題名なし)',
    'LBL_CHECKING_ACCOUNT' => 'アカウントのチェック中',
    'LBL_OF' => '件中',
    'LBL_TEST_EMAIL_BODY' => 'この電子メールはSuiteCRMで指定された送信サーバーの設定をテストするために送信されました。このメールが正しく受信されたことは送信サーバーの設定が正しいことを意味しています。',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'テストメールの送信に失敗しました。設定を確認してください。',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート番号:',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバー名:',
    'LBL_MAIL_SMTPUSER' => 'SMTPユーザー名:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバースペック',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Eメールプロバイダーの選択r:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード:',
    'LBL_GMAIL_SMTPUSER' => 'Gmailメールアドレス:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザー名:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバーポート:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバー:',

    'LBL_EDIT_LAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => '添付ファイル' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => '削除' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'ケースを作成する' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => '潜在顧客を作成する' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => '連絡先の作成' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'バグを作成する' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'タスクを作成する' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => '正しい' /*for 508 compliance fix*/,
    'LBL_CLOSE' => '閉じる' /*for 508 compliance fix*/,
    'LBL_HELP' => 'ヘルプ' /*for 508 compliance fix*/,
    'LBL_WAIT' => '待つ' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'メールをチェックする' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Eメール作成' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'メール設定' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'メール: 会議',
    'LBL_DATE_MODIFIED' => '更新日',

    'LBL_CATEGORY' => 'カテゴリ',
    'LBL_LIST_CATEGORY' => 'カテゴリ',
    'LBL_EMAIL_TEMPLATE' => 'メールテンプレート',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'ドラフトを無視します',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'この操作はこのメールを削除します。続行しますか？',
    'LBL_EMAIL_DRAFT_DELETED' => 'ドラフトは削除されました',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'ドラフトを削除しようとした際にエラーが発生しました。',

    'LBL_QUICK_CREATE_SUCCESS1' => 'レコードは正常に作成されました。', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS2' => '新しいレコードを表示するには OK をクリックします。', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS3' => 'メールに戻るには キャンセル をクリックします。', // PR 5651

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'メール テンプレートを適用',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'この操作はメール本文と件名フィールドを上書きします。続行しますか？',

    'LBL_MAILBOX_ID' => 'メールボックスID',
    'LBL_PARENT_ID' => '親会社ID',
    'LBL_LAST_SYNCED' => '最後の同期',
    'LBL_ORPHANED' => '孤立した',
    'LBL_IMAP_KEYWORDS' => 'IMAPキーワード',
    'LBL_ERROR_NO_FOLDERS' => 'エラー: 使用可能なフォルダーがありません。メールの設定を確認してください。',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',


    'LBL_MARK_UNREAD' => '未読にする',
    'LBL_MARK_READ' => '既読にする',
    'LBL_MARK_FLAGGED' => 'フラグをつける',
    'LBL_MARK_UNFLAGGED' => 'フラグをはずす',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'オプトイン メールの送信',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'オプトイン メールの失敗',
    'LBL_CONFIRM_OPT_IN_TOKEN' => '確認したオプト・インのトークン',

    'ERR_NO_RETURN_ID' => '添付ファイルは見つかりません。',

    'LBL_LIST_DATE_MODIFIED' => '最終更新日',
    'LNK_IMPORT_CAMPAIGNS' => 'キャンペーンのインポート',
     
     // PR 6728 Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'Fromフィールドが設定されていません。',
    'ERR_FIELD_FROM_IS_EMPTY' => 'Fromフィールドが空です。',
    'ERR_FIELD_FROM_IS_INVALID' => 'Fromフィールドが無効です。',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'Fromアドレスが設定されていません。',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'Fromアドレスが空です。',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'Fromアドレスが無効です。',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'Fromの名前が設定されていません。',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'Fromの名前が空です。',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'Fromの名前が無効です。',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'Fromの名前が設定されていません。',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'Fromの名前が空です。',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'Fromの名前が無効です。',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'Fromアドレスと名前のペアが設定されていません。',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'Fromアドレスと名前のペアが空です。',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'Fromアドレスと名前のペアが無効です。',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'Fromアドレスと名前のペアのフォーマットが正しくありません。"from@emailaddress.org <人の名前>"の書式を使用してください。',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'アドレスと名前のペアの一部が無効な名前です。',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'アドレスと名前のペアの一部が無効なメールアドレスです。',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'Fromアドレスと名前のペアがFromの名前またはメールアドレスと一致しません。',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'Fromアドレスと名前のペアがFromアドレスに一致しません。',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'Fromアドレスと名前のペアがFromの名前と一致しません。',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'Fromアドレスと名前のペアがFromの名前と一致しません。',
);