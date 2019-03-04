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

$mod_strings['LBL_MAP'] = '地図';
$mod_strings['LBL_MODULE_NAME'] = '地図';
$mod_strings['LBL_MODULE_TITLE'] = 'マップ: ホーム';
$mod_strings['LBL_MODULE_ID'] = '地図';
$mod_strings['LBL_LIST_FORM_TITLE'] = '地図リスト';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'カスタムマーカー';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'カスタムエリア';
$mod_strings['LBL_HOMEPAGE_TITLE'] = '私のマップ リスト';

$mod_strings['LBL_FLEX_RELATE'] = '取引先(センター):';
$mod_strings['LBL_MODULE_TYPE'] = '表示するモジュールの種類:';
$mod_strings['LBL_DISTANCE'] = '距離 (半径):';
$mod_strings['LBL_UNIT_TYPE'] = 'ユニットタイプ:';

$mod_strings['LBL_MAP_DISPLAY'] = 'マップの表示';
$mod_strings['LBL_MAP_LEGEND'] = '順序:
';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'グループ一覧:';
$mod_strings['LBL_MAP_GROUP'] = 'グループ';
$mod_strings['LBL_MAP_TYPE'] = 'タイプ';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'アサイン先:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = '方向を取得する';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Googleマップを表示';

$mod_strings['LNK_NEW_MAP'] = '新しい地図を追加';
$mod_strings['LNK_NEW_RECORD'] = '新しい地図を追加';
$mod_strings['LNK_MAP_LIST'] = 'マップ一覧';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'ジオコーディングテスト';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'クイック半径マップ';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'なし';
$mod_strings['LBL_MAP_ADDRESS'] = '住所';
$mod_strings['LBL_MAP_PROCESS'] = '処理する!';

$mod_strings['LBL_MAP_LAST_STATUS'] = '最後のジオコード ステータス';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'ジオコード化されたモジュールをカウント';
$mod_strings['LBL_CRON_URL'] = 'Cron の URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'モジュール';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = '結果なし';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = '無効な要求';
$mod_strings['LBL_APPROXIMATE'] = 'おおよその';
$mod_strings['LBL_EMPTY'] = 'データ無し';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = '合計';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'リセット';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = '下の表は、ジオコーディングされたモジュールオブジェクトの数をジオコーディング応答別にまとめたものです。 Googleマップの標準的な使用制限は1日あたり2500リクエストです。 このモジュールは、処理中に住所ジオコーディング情報をキャッシュして、必要な要求の総数を減らします。';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'ジオコーディングリクエストを処理するには、毎晩Cron-Jobを設定することをお勧めします。 この目的のためにカスタムエントリポイントが作成されており、認証なしでアクセスできます。 以下に示すURLは、管理予定タスクで使用するためのものです。 詳しくはドキュメントを参照してください。';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'URLをエクスポート';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'ジオ コーディング情報を必要とする完全な住所をエクスポートするには、以下のリンクを使用してください。 次に、オンラインまたはオフラインのバッチ ジオコーディング ツールを使用して住所をジオ コーディングします。 ジオ コーディングが完了したら、地図で使用する住所をアドレス キャッシュ モジュールにインポートします。 アドレス キャッシュ モジュールはオプションです。 すべてのジオ コーディング情報は、代表モジュールに格納されています。';
$mod_strings['LBL_ADDRESS_CACHE'] = 'アドレスキャッシュ';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'ターゲットリストに追加';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = '処理中...';


$mod_strings['LBL_CONFIG_TITLE'] = '設定の構成';
$mod_strings['LBL_CONFIG_SAVED'] = '設定が正しく保存されました!';
$mod_strings['LBL_BILLING_ADDRESS'] = '請求先住所';
$mod_strings['LBL_SHIPPING_ADDRESS'] = '出荷先住所';
$mod_strings['LBL_PRIMARY_ADDRESS'] = '主となる住所';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = '代替アドレス';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = '動的関連';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'アドレス(単純な, ユーザー)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'カスタム(カスタム コントローラー ロジック)';
$mod_strings['LBL_ENABLED'] = '使用可能';
$mod_strings['LBL_DISABLED'] = '使用禁止';
$mod_strings['LBL_DEFAULT'] = 'デフォルト:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'デフォルト:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = '有効なジオコード モジュール:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = '有効なジオコード テーブル:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "アドレス種類の設定: これはアドレスをジオコーディングする際、使用されるモジュールのアドレス種類を定義します。使用できる値: 'billing'; 'shipping'; 'primary'; 'alt'; ' flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'アドレスの種類 ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'アカウントに対するアドレスの種類:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = '連絡先に対するアドレスの種類:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = '潜在顧客の住所の種類';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = '商談に対するアドレスの種類:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(または関連するアカウント)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'ケースに対するアドレスの種類:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'プロジェクトに対するアドレスの種類:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(関連する口座/商談の)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = '会議に対するアドレスの種類:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = '見込み/対象に対するアドレスの種類:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Flex Relateフィールドを介した関連オブジェクト';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "マーカー グループ フィールドの設定: 地図にマーカーを表示するときにグループのパラメーターとして使用する 'フィールド' を定義します。例: assigned_user_name、産業、ステータス、sales_stage、優先順位";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'グループ フィールド ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = '口座のグループ フィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = '連絡先のグループ フィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = '潜在顧客のグループフィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = '商談のグループ フィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'ケースのグループ フィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'プロジェクトのグループ フィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = '会議のグループ フィールド:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = '見通し/対象のグループ フィールド:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'ジオコーディング/Google設定:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'ジオコーディング API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google Maps ジオコーディング APIまたはプロキシのURL'; // PR 3290
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'プロキシのシークレット フレーズ:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'プロキシ MD5比較で使用されるシークレット フレーズ';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_GET_A_KEY'] = '無料の Google Maps ジオコーディング API キーを取得 (ジオコード アドレスの 1 日あたりの無料クォータ)。'; // PR 3290
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'ジオコーディングの制限:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' は、ジオコードするレコードを選択するときに、クエリ制限を設定します。";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google ジオコーディングの制限:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit'は、ジオコーディングがGoogle Mpas APIを使用した際に使用要求制限を設定します。";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'アドレス制限をエクスポート:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'geocoding_limit' は、エクスポートするレコードを選択するときにクエリ制限を設定します。";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "'APPROXIMATE'ロケーション タイプを許可する:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - 'APPROXIMATE'のロケーションタイプを 'OK'ジオコーディング結果と見なすことができます。";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'アドレス キャッシュの設定:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'アドレス キャッシュ (Get) を有効化:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' は、キャッシュ テーブルからデータを取得するためのアドレスのキャッシュ モジュールを許可します。";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'アドレス キャッシュ (Save) の保存を有効化:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' は、キャッシュ テーブルからデータを保存するためのアドレスのキャッシュ モジュールを許可します。";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'ロジック フック設定:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'すべてのロジック フックを有効化: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled'は、関連するオブジェクトに基づいた自動更新のろクック フックを許可します。SuiteCRMをアップグレードする際に無効化することを推奨します。";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'マーカー/マッピングの設定:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "マップ マーカーの制限:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' は、地図に表示するレコードを選択するときに、クエリ制限を設定します。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "マップの既定の中心緯度:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' は、マップのデフォルト位置緯度を設定します。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "マップの既定の中心経度:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_latitude' は、マップのデフォルト位置経度を設定します。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Mapのデフォルトの単位:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type'は、距離計算用のデフォルトの単位測定タイプを設定します。値:'mi'(マイル) または 'km'(キロメートル)";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Mapのデフォルトの距離:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance'は、地図に基づいた距離に対するデフォルトの距離を設定します。";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Map重複マーカーの調整:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' は、マーカー位置が重複する場合における緯度と経度に追加するオフセット調整を設定します。";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "地図のマーカー クラスタ グリッド サイズ:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' を使用して、マップ clusterers を計算するためのグリッドのサイズを設定します。";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "地図のマーカー クラスタ 最大ズーム:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' は、クラスタが適応されていない最大ズーム レベルを設定するために使用されます。";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "重要な注意: すべての保存された設定は、カテゴリ 'jjwg' の下に 'config' テーブルで見つけることができます。カスタムされた controller.php ファイルは設定をオーバーライドするために使用されることがないことに注意してください。";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'エリア';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'マーカー';
$mod_strings['LBL_PARENT_ID'] = '親会社ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP パートナー';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'キーを入手';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api キー';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Googleマップの管理パネルでGoogle APIキーを設定してください。';