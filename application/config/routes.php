<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['homepage'] = 'home/homepage';
$route['identifikasi'] = 'home/identifikasi';
$route['framework'] = 'home/framework';
$route['penilaian'] = 'home/penilaian';
$route['cetak'] = 'home/cetak_view';
$route['homepage'] = 'home/homepage';
$route['proses'] = 'home/webcontent';
$route['proses/view/(\d+)'] = 'home/view_proses';
$route['proses/edit/(\d+)'] = 'home/edit_proses_view';
$route['proses/risiko/(\d+)/view/(\d+)'] = 'home/view_risiko_proses';
$route['proses/risiko/(\d+)/edit/(\d+)'] = 'home/edit_risiko_proses_view';
$route['proses/risiko/(\d+)/(\d+)/sod/edit/(\d+)'] = 'home/edit_sod_proses_view';
$route['proses/risiko/(\d+)/(\d+)/sod/mitigasi/(\d+)'] = 'home/mitigasi_sod_proses_view';
$route['proses/penilai_proses/(\d+)'] = 'home/penilai_proses';
$route['proses/pembobotan_sod/(\d+)'] = 'home/pembobotan_sod_proses';
$route['produk'] = 'home/webcontent';
$route['produk/view/(\d+)'] = 'home/view_produk';
$route['produk/edit/(\d+)'] = 'home/edit_produk_view';
$route['produk/risiko/(\d+)/view/(\d+)'] = 'home/view_risiko_produk';
$route['produk/risiko/(\d+)/edit/(\d+)'] = 'home/edit_risiko_produk_view';
$route['produk/risiko/(\d+)/(\d+)/sod/edit/(\d+)'] = 'home/edit_sod_produk_view';
$route['produk/risiko/(\d+)/(\d+)/sod/mitigasi/(\d+)'] = 'home/mitigasi_sod_produk_view';
$route['produk/penilai_produk/(\d+)'] = 'home/penilai_produk';
$route['produk/pembobotan_sod/(\d+)'] = 'home/pembobotan_sod_produk';
$route['skala_penyebab'] = 'home/skala_penyebab';
$route['skala_dampak'] = 'home/skala_dampak';
$route['skala_metode_deteksi'] = 'home/skala_metode_deteksi';
$route['skala_penyebab/edit/(\d+)'] = 'home/edit_skala_penyebab_view';
$route['skala_dampak/edit/(\d+)'] = 'home/edit_skala_dampak_view';
$route['skala_metode_deteksi/edit/(\d+)'] = 'home/edit_skala_metode_deteksi_view';
$route['selera_risiko'] = 'home/selera_risiko';
$route['selera_risiko/edit/(\d+)'] = 'home/edit_selera_risiko_view';
$route['pembobotan_sod'] = 'home/pembobotan_sod';
$route['penilaian_proses'] = 'home/penilaian_proses';
$route['penilaian_proses/penilaian/(\d+)/(\d+)/edit/(\d+)'] = 'home/edit_penilaian_proses_view';
$route['penilaian_proses/combine'] = 'home/combine_penilaian_proses';
$route['penilaian_proses/resume'] = 'home/resume_penilaian_proses';
$route['penilaian_proses/evaluasi'] = 'home/evaluasi_penilaian_proses';
$route['penilaian_proses/evaluasi/(\d+)/(\d+)/edit/(\d+)'] = 'home/edit_evaluasi_proses_view';
$route['penilaian_proses/evaluasi/combine'] = 'home/evaluasi_combine_penilaian_proses';
$route['penilaian_proses/evaluasi/resume'] = 'home/evaluasi_resume_penilaian_proses';
$route['penilaian_produk'] = 'home/penilaian_produk';
$route['penilaian_produk/penilaian/(\d+)/(\d+)/edit/(\d+)'] = 'home/edit_penilaian_produk_view';
$route['penilaian_produk/combine'] = 'home/combine_penilaian_produk';
$route['penilaian_produk/resume'] = 'home/resume_penilaian_produk';
$route['penilaian_produk/evaluasi'] = 'home/evaluasi_penilaian_produk';
$route['penilaian_produk/evaluasi/(\d+)/(\d+)/edit/(\d+)'] = 'home/edit_evaluasi_produk_view';
$route['penilaian_produk/evaluasi/combine'] = 'home/evaluasi_combine_penilaian_produk';
$route['penilaian_produk/evaluasi/resume'] = 'home/evaluasi_resume_penilaian_produk';
$route['riwayat_laporan_awal'] = 'home/riwayat_laporan_awal';
$route['riwayat_laporan_mitigasi'] = 'home/riwayat_laporan_mitigasi';
$route['riwayat_laporan_total'] = 'home/riwayat_laporan_total';
$route['logout'] = 'home/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
