<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'namhocs',
], function () {
    Route::get('/', 'NamhocsController@index')
    ->name('namhocs.namhoc.index');
    Route::get('/create','NamhocsController@create')
    ->name('namhocs.namhoc.create');
    Route::get('/show/{namhoc}','NamhocsController@show')
    ->name('namhocs.namhoc.show')->where('id', '[0-9]+');
    Route::get('/{namhoc}/edit','NamhocsController@edit')
    ->name('namhocs.namhoc.edit')->where('id', '[0-9]+');
    Route::post('/', 'NamhocsController@store')
    ->name('namhocs.namhoc.store');
    Route::put('namhoc/{namhoc}', 'NamhocsController@update')
    ->name('namhocs.namhoc.update')->where('id', '[0-9]+');
    Route::delete('/namhoc/{namhoc}','NamhocsController@destroy')
    ->name('namhocs.namhoc.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'hockies',
], function () {
    Route::get('/', 'HockiesController@index')
    ->name('hockies.hocky.index');
    Route::get('/create','HockiesController@create')
    ->name('hockies.hocky.create');
    Route::get('/show/{hocky}','HockiesController@show')
    ->name('hockies.hocky.show')->where('id', '[0-9]+');
    Route::get('/{hocky}/edit','HockiesController@edit')
    ->name('hockies.hocky.edit')->where('id', '[0-9]+');
    Route::post('/', 'HockiesController@store')
    ->name('hockies.hocky.store');
    Route::put('hocky/{hocky}', 'HockiesController@update')
    ->name('hockies.hocky.update')->where('id', '[0-9]+');
    Route::delete('/hocky/{hocky}','HockiesController@destroy')
    ->name('hockies.hocky.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'tongiaos',
], function () {
    Route::get('/', 'TongiaosController@index')
    ->name('tongiaos.tongiao.index');
    Route::get('/create','TongiaosController@create')
    ->name('tongiaos.tongiao.create');
    Route::get('/show/{tongiao}','TongiaosController@show')
    ->name('tongiaos.tongiao.show');
    Route::get('/{tongiao}/edit','TongiaosController@edit')
    ->name('tongiaos.tongiao.edit');
    Route::post('/', 'TongiaosController@store')
    ->name('tongiaos.tongiao.store');
    Route::put('tongiao/{tongiao}', 'TongiaosController@update')
    ->name('tongiaos.tongiao.update');
    Route::delete('/tongiao/{tongiao}','TongiaosController@destroy')
    ->name('tongiaos.tongiao.destroy');
});

Route::group([
    'prefix' => 'dantocs',
], function () {
    Route::get('/', 'DantocsController@index')
    ->name('dantocs.dantoc.index');
    Route::get('/create','DantocsController@create')
    ->name('dantocs.dantoc.create');
    Route::get('/show/{dantoc}','DantocsController@show')
    ->name('dantocs.dantoc.show');
    Route::get('/{dantoc}/edit','DantocsController@edit')
    ->name('dantocs.dantoc.edit');
    Route::post('/', 'DantocsController@store')
    ->name('dantocs.dantoc.store');
    Route::put('dantoc/{dantoc}', 'DantocsController@update')
    ->name('dantocs.dantoc.update');
    Route::delete('/dantoc/{dantoc}','DantocsController@destroy')
    ->name('dantocs.dantoc.destroy');
});

Route::group([
    'prefix' => 'tinh_thanhphos',
], function () {
    Route::get('/', 'TinhThanhphosController@index')
    ->name('tinh_thanhphos.tinh_thanhpho.index');
    Route::get('/create','TinhThanhphosController@create')
    ->name('tinh_thanhphos.tinh_thanhpho.create');
    Route::get('/show/{tinhThanhpho}','TinhThanhphosController@show')
    ->name('tinh_thanhphos.tinh_thanhpho.show');
    Route::get('/{tinhThanhpho}/edit','TinhThanhphosController@edit')
    ->name('tinh_thanhphos.tinh_thanhpho.edit');
    Route::post('/', 'TinhThanhphosController@store')
    ->name('tinh_thanhphos.tinh_thanhpho.store');
    Route::put('tinh_thanhpho/{tinhThanhpho}', 'TinhThanhphosController@update')
    ->name('tinh_thanhphos.tinh_thanhpho.update');
    Route::delete('/tinh_thanhpho/{tinhThanhpho}','TinhThanhphosController@destroy')
    ->name('tinh_thanhphos.tinh_thanhpho.destroy');
});

Route::group([
    'prefix' => 'quan_huyens',
], function () {
    Route::get('/', 'QuanHuyensController@index')
    ->name('quan_huyens.quan_huyen.index');
    Route::get('/create','QuanHuyensController@create')
    ->name('quan_huyens.quan_huyen.create');
    Route::get('/show/{quanHuyen}','QuanHuyensController@show')
    ->name('quan_huyens.quan_huyen.show');
    Route::get('/{quanHuyen}/edit','QuanHuyensController@edit')
    ->name('quan_huyens.quan_huyen.edit');
    Route::post('/', 'QuanHuyensController@store')
    ->name('quan_huyens.quan_huyen.store');
    Route::put('quan_huyen/{quanHuyen}', 'QuanHuyensController@update')
    ->name('quan_huyens.quan_huyen.update');
    Route::delete('/quan_huyen/{quanHuyen}','QuanHuyensController@destroy')
    ->name('quan_huyens.quan_huyen.destroy');
});

Route::group([
    'prefix' => 'phuong_xas',
], function () {
    Route::get('/', 'PhuongXasController@index')
    ->name('phuong_xas.phuong_xa.index');
    Route::get('/create','PhuongXasController@create')
    ->name('phuong_xas.phuong_xa.create');
    Route::get('/show/{phuongXa}','PhuongXasController@show')
    ->name('phuong_xas.phuong_xa.show');
    Route::get('/{phuongXa}/edit','PhuongXasController@edit')
    ->name('phuong_xas.phuong_xa.edit');
    Route::post('/', 'PhuongXasController@store')
    ->name('phuong_xas.phuong_xa.store');
    Route::put('phuong_xa/{phuongXa}', 'PhuongXasController@update')
    ->name('phuong_xas.phuong_xa.update');
    Route::delete('/phuong_xa/{phuongXa}','PhuongXasController@destroy')
    ->name('phuong_xas.phuong_xa.destroy');
});

Route::group([
    'prefix' => 'chucvu_dvs',
], function () {
    Route::get('/', 'ChucvuDvsController@index')
    ->name('chucvu_dvs.chucvu_dv.index');
    Route::get('/create','ChucvuDvsController@create')
    ->name('chucvu_dvs.chucvu_dv.create');
    Route::get('/show/{chucvuDv}','ChucvuDvsController@show')
    ->name('chucvu_dvs.chucvu_dv.show');
    Route::get('/{chucvuDv}/edit','ChucvuDvsController@edit')
    ->name('chucvu_dvs.chucvu_dv.edit');
    Route::post('/', 'ChucvuDvsController@store')
    ->name('chucvu_dvs.chucvu_dv.store');
    Route::put('chucvu_dv/{chucvuDv}', 'ChucvuDvsController@update')
    ->name('chucvu_dvs.chucvu_dv.update');
    Route::delete('/chucvu_dv/{chucvuDv}','ChucvuDvsController@destroy')
    ->name('chucvu_dvs.chucvu_dv.destroy');
});

Route::group([
    'prefix' => 'thanhtiches',
], function () {
    Route::get('/', 'ThanhtichesController@index')
    ->name('thanhtiches.thanhtich.index');
    Route::get('/create','ThanhtichesController@create')
    ->name('thanhtiches.thanhtich.create');
    Route::get('/show/{thanhtich}','ThanhtichesController@show')
    ->name('thanhtiches.thanhtich.show');
    Route::get('/{thanhtich}/edit','ThanhtichesController@edit')
    ->name('thanhtiches.thanhtich.edit');
    Route::post('/', 'ThanhtichesController@store')
    ->name('thanhtiches.thanhtich.store');
    Route::put('thanhtich/{thanhtich}', 'ThanhtichesController@update')
    ->name('thanhtiches.thanhtich.update');
    Route::delete('/thanhtich/{thanhtich}','ThanhtichesController@destroy')
    ->name('thanhtiches.thanhtich.destroy');
});

Route::group([
    'prefix' => 'khoas',
], function () {
    Route::get('/', 'KhoasController@index')
    ->name('khoas.khoa.index');
    Route::get('/create','KhoasController@create')
    ->name('khoas.khoa.create');
    Route::get('/show/{khoa}','KhoasController@show')
    ->name('khoas.khoa.show');
    Route::get('/{khoa}/edit','KhoasController@edit')
    ->name('khoas.khoa.edit');
    Route::post('/', 'KhoasController@store')
    ->name('khoas.khoa.store');
    Route::put('khoa/{khoa}', 'KhoasController@update')
    ->name('khoas.khoa.update');
    Route::delete('/khoa/{khoa}','KhoasController@destroy')
    ->name('khoas.khoa.destroy');
});

Route::group([
    'prefix' => 'loai_pts',
], function () {
    Route::get('/', 'LoaiPtsController@index')
    ->name('loai_pts.loai_pt.index');
    Route::get('/create','LoaiPtsController@create')
    ->name('loai_pts.loai_pt.create');
    Route::get('/show/{loaiPt}','LoaiPtsController@show')
    ->name('loai_pts.loai_pt.show');
    Route::get('/{loaiPt}/edit','LoaiPtsController@edit')
    ->name('loai_pts.loai_pt.edit');
    Route::post('/', 'LoaiPtsController@store')
    ->name('loai_pts.loai_pt.store');
    Route::put('loai_pt/{loaiPt}', 'LoaiPtsController@update')
    ->name('loai_pts.loai_pt.update');
    Route::delete('/loai_pt/{loaiPt}','LoaiPtsController@destroy')
    ->name('loai_pts.loai_pt.destroy');
});

Route::group([
    'prefix' => 'loai_dp_chis',
], function () {
    Route::get('/', 'LoaiDpChisController@index')
    ->name('loai_dp_chis.loai_dp_chi.index');
    Route::get('/create','LoaiDpChisController@create')
    ->name('loai_dp_chis.loai_dp_chi.create');
    Route::get('/show/{loaiDpChi}','LoaiDpChisController@show')
    ->name('loai_dp_chis.loai_dp_chi.show');
    Route::get('/{loaiDpChi}/edit','LoaiDpChisController@edit')
    ->name('loai_dp_chis.loai_dp_chi.edit');
    Route::post('/', 'LoaiDpChisController@store')
    ->name('loai_dp_chis.loai_dp_chi.store');
    Route::put('loai_dp_chi/{loaiDpChi}', 'LoaiDpChisController@update')
    ->name('loai_dp_chis.loai_dp_chi.update');
    Route::delete('/loai_dp_chi/{loaiDpChi}','LoaiDpChisController@destroy')
    ->name('loai_dp_chis.loai_dp_chi.destroy');
});

Route::group([
    'prefix' => 'xeploai_dks',
], function () {
    Route::get('/', 'XeploaiDksController@index')
    ->name('xeploai_dks.xeploai_dk.index');
    Route::get('/create','XeploaiDksController@create')
    ->name('xeploai_dks.xeploai_dk.create');
    Route::get('/show/{xeploaiDk}','XeploaiDksController@show')
    ->name('xeploai_dks.xeploai_dk.show')->where('id', '[0-9]+');
    Route::get('/{xeploaiDk}/edit','XeploaiDksController@edit')
    ->name('xeploai_dks.xeploai_dk.edit')->where('id', '[0-9]+');
    Route::post('/', 'XeploaiDksController@store')
    ->name('xeploai_dks.xeploai_dk.store');
    Route::put('xeploai_dk/{xeploaiDk}', 'XeploaiDksController@update')
    ->name('xeploai_dks.xeploai_dk.update')->where('id', '[0-9]+');
    Route::delete('/xeploai_dk/{xeploaiDk}','XeploaiDksController@destroy')
    ->name('xeploai_dks.xeploai_dk.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'xeploai_cds',
], function () {
    Route::get('/', 'XeploaiCdsController@index')
    ->name('xeploai_cds.xeploai_cd.index');
    Route::get('/create','XeploaiCdsController@create')
    ->name('xeploai_cds.xeploai_cd.create');
    Route::get('/show/{xeploaiCd}','XeploaiCdsController@show')
    ->name('xeploai_cds.xeploai_cd.show')->where('id', '[0-9]+');
    Route::get('/{xeploaiCd}/edit','XeploaiCdsController@edit')
    ->name('xeploai_cds.xeploai_cd.edit')->where('id', '[0-9]+');
    Route::post('/', 'XeploaiCdsController@store')
    ->name('xeploai_cds.xeploai_cd.store');
    Route::put('xeploai_cd/{xeploaiCd}', 'XeploaiCdsController@update')
    ->name('xeploai_cds.xeploai_cd.update')->where('id', '[0-9]+');
    Route::delete('/xeploai_cd/{xeploaiCd}','XeploaiCdsController@destroy')
    ->name('xeploai_cds.xeploai_cd.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'loai_ktkls',
], function () {
    Route::get('/', 'LoaiKtklsController@index')
    ->name('loai_ktkls.loai_ktkl.index');
    Route::get('/create','LoaiKtklsController@create')
    ->name('loai_ktkls.loai_ktkl.create');
    Route::get('/show/{loaiKtkl}','LoaiKtklsController@show')
    ->name('loai_ktkls.loai_ktkl.show');
    Route::get('/{loaiKtkl}/edit','LoaiKtklsController@edit')
    ->name('loai_ktkls.loai_ktkl.edit');
    Route::post('/', 'LoaiKtklsController@store')
    ->name('loai_ktkls.loai_ktkl.store');
    Route::put('loai_ktkl/{loaiKtkl}', 'LoaiKtklsController@update')
    ->name('loai_ktkls.loai_ktkl.update');
    Route::delete('/loai_ktkl/{loaiKtkl}','LoaiKtklsController@destroy')
    ->name('loai_ktkls.loai_ktkl.destroy');
});

Route::group([
    'prefix' => 'hinhthuc_ktkls',
], function () {
    Route::get('/', 'HinhthucKtklsController@index')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.index');
    Route::get('/create','HinhthucKtklsController@create')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.create');
    Route::get('/show/{hinhthucKtkl}','HinhthucKtklsController@show')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.show');
    Route::get('/{hinhthucKtkl}/edit','HinhthucKtklsController@edit')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.edit');
    Route::post('/', 'HinhthucKtklsController@store')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.store');
    Route::put('hinhthuc_ktkl/{hinhthucKtkl}', 'HinhthucKtklsController@update')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.update');
    Route::delete('/hinhthuc_ktkl/{hinhthucKtkl}','HinhthucKtklsController@destroy')
    ->name('hinhthuc_ktkls.hinhthuc_ktkl.destroy');
});

Route::group([
    'prefix' => 'dv_ketnaps',
], function () {
    Route::get('/', 'DvKetnapsController@index')
    ->name('dv_ketnaps.dv_ketnap.index');
    Route::get('/create','DvKetnapsController@create')
    ->name('dv_ketnaps.dv_ketnap.create');
    Route::get('/show/{dvKetnap}','DvKetnapsController@show')
    ->name('dv_ketnaps.dv_ketnap.show');
    Route::get('/{dvKetnap}/edit','DvKetnapsController@edit')
    ->name('dv_ketnaps.dv_ketnap.edit');
    Route::post('/', 'DvKetnapsController@store')
    ->name('dv_ketnaps.dv_ketnap.store');
    Route::put('dv_ketnap/{dvKetnap}', 'DvKetnapsController@update')
    ->name('dv_ketnaps.dv_ketnap.update');
    Route::delete('/dv_ketnap/{dvKetnap}','DvKetnapsController@destroy')
    ->name('dv_ketnaps.dv_ketnap.destroy');
});

Route::group([
    'prefix' => 'dv_tt_doans',
], function () {
    Route::get('/', 'DvTtDoansController@index')
    ->name('dv_tt_doans.dv_tt_doan.index');
    Route::get('/create','DvTtDoansController@create')
    ->name('dv_tt_doans.dv_tt_doan.create');
    Route::get('/show/{dvTtDoan}','DvTtDoansController@show')
    ->name('dv_tt_doans.dv_tt_doan.show');
    Route::get('/{dvTtDoan}/edit','DvTtDoansController@edit')
    ->name('dv_tt_doans.dv_tt_doan.edit');
    Route::post('/', 'DvTtDoansController@store')
    ->name('dv_tt_doans.dv_tt_doan.store');
    Route::put('dv_tt_doan/{dvTtDoan}', 'DvTtDoansController@update')
    ->name('dv_tt_doans.dv_tt_doan.update');
    Route::delete('/dv_tt_doan/{dvTtDoan}','DvTtDoansController@destroy')
    ->name('dv_tt_doans.dv_tt_doan.destroy');
});

Route::group([
    'prefix' => 'khenthuong_kyluats',
], function () {
    Route::get('/', 'KhenthuongKyluatsController@index')
    ->name('khenthuong_kyluats.khenthuong_kyluat.index');
    Route::get('/create','KhenthuongKyluatsController@create')
    ->name('khenthuong_kyluats.khenthuong_kyluat.create');
    Route::get('/show/{khenthuongKyluat}','KhenthuongKyluatsController@show')
    ->name('khenthuong_kyluats.khenthuong_kyluat.show');
    Route::get('/{khenthuongKyluat}/edit','KhenthuongKyluatsController@edit')
    ->name('khenthuong_kyluats.khenthuong_kyluat.edit');
    Route::post('/', 'KhenthuongKyluatsController@store')
    ->name('khenthuong_kyluats.khenthuong_kyluat.store');
    Route::put('khenthuong_kyluat/{khenthuongKyluat}', 'KhenthuongKyluatsController@update')
    ->name('khenthuong_kyluats.khenthuong_kyluat.update');
    Route::delete('/khenthuong_kyluat/{khenthuongKyluat}','KhenthuongKyluatsController@destroy')
    ->name('khenthuong_kyluats.khenthuong_kyluat.destroy');
});

Route::group([
    'prefix' => 'xeploai_dvs',
], function () {
    Route::get('/', 'XeploaiDvsController@index')
    ->name('xeploai_dvs.xeploai_dv.index');
    Route::get('/create','XeploaiDvsController@create')
    ->name('xeploai_dvs.xeploai_dv.create');
    Route::get('/show/{xeploaiDv}','XeploaiDvsController@show')
    ->name('xeploai_dvs.xeploai_dv.show')->where('id', '[0-9]+');
    Route::get('/{xeploaiDv}/edit','XeploaiDvsController@edit')
    ->name('xeploai_dvs.xeploai_dv.edit')->where('id', '[0-9]+');
    Route::post('/', 'XeploaiDvsController@store')
    ->name('xeploai_dvs.xeploai_dv.store');
    Route::put('xeploai_dv/{xeploaiDv}', 'XeploaiDvsController@update')
    ->name('xeploai_dvs.xeploai_dv.update')->where('id', '[0-9]+');
    Route::delete('/xeploai_dv/{xeploaiDv}','XeploaiDvsController@destroy')
    ->name('xeploai_dvs.xeploai_dv.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'mauphieus',
], function () {
    Route::get('/', 'MauphieusController@index')
    ->name('mauphieus.mauphieu.index');
    Route::get('/create','MauphieusController@create')
    ->name('mauphieus.mauphieu.create');
    Route::get('/show/{mauphieu}','MauphieusController@show')
    ->name('mauphieus.mauphieu.show');
    Route::get('/{mauphieu}/edit','MauphieusController@edit')
    ->name('mauphieus.mauphieu.edit');
    Route::post('/', 'MauphieusController@store')
    ->name('mauphieus.mauphieu.store');
    Route::put('mauphieu/{mauphieu}', 'MauphieusController@update')
    ->name('mauphieus.mauphieu.update');
    Route::delete('/mauphieu/{mauphieu}','MauphieusController@destroy')
    ->name('mauphieus.mauphieu.destroy');
});

Route::group([
    'prefix' => 'loai_noidung_pdgs',
], function () {
    Route::get('/', 'LoaiNoidungPdgsController@index')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.index');
    Route::get('/create','LoaiNoidungPdgsController@create')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.create');
    Route::get('/show/{loaiNoidungPdg}','LoaiNoidungPdgsController@show')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.show');
    Route::get('/{loaiNoidungPdg}/edit','LoaiNoidungPdgsController@edit')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.edit');
    Route::post('/', 'LoaiNoidungPdgsController@store')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.store');
    Route::put('loai_noidung_pdg/{loaiNoidungPdg}', 'LoaiNoidungPdgsController@update')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.update');
    Route::delete('/loai_noidung_pdg/{loaiNoidungPdg}','LoaiNoidungPdgsController@destroy')
    ->name('loai_noidung_pdgs.loai_noidung_pdg.destroy');
});

Route::group([
    'prefix' => 'noidung_pdgs',
], function () {
    Route::get('/', 'NoidungPdgsController@index')
    ->name('noidung_pdgs.noidung_pdg.index');
    Route::get('/create','NoidungPdgsController@create')
    ->name('noidung_pdgs.noidung_pdg.create');
    Route::get('/show/{noidungPdg}','NoidungPdgsController@show')
    ->name('noidung_pdgs.noidung_pdg.show');
    Route::get('/{noidungPdg}/edit','NoidungPdgsController@edit')
    ->name('noidung_pdgs.noidung_pdg.edit');
    Route::post('/', 'NoidungPdgsController@store')
    ->name('noidung_pdgs.noidung_pdg.store');
    Route::put('noidung_pdg/{noidungPdg}', 'NoidungPdgsController@update')
    ->name('noidung_pdgs.noidung_pdg.update');
    Route::delete('/noidung_pdg/{noidungPdg}','NoidungPdgsController@destroy')
    ->name('noidung_pdgs.noidung_pdg.destroy');
});

Route::group([
    'prefix' => 'doanphi_chi_cds',
], function () {
    Route::get('/', 'DoanphiChiCdsController@index')
    ->name('doanphi_chi_cds.doanphi_chi_cd.index');
    Route::get('/create','DoanphiChiCdsController@create')
    ->name('doanphi_chi_cds.doanphi_chi_cd.create');
    Route::get('/show/{doanphiChiCd}','DoanphiChiCdsController@show')
    ->name('doanphi_chi_cds.doanphi_chi_cd.show');
    Route::get('/{doanphiChiCd}/edit','DoanphiChiCdsController@edit')
    ->name('doanphi_chi_cds.doanphi_chi_cd.edit');
    Route::post('/', 'DoanphiChiCdsController@store')
    ->name('doanphi_chi_cds.doanphi_chi_cd.store');
    Route::put('doanphi_chi_cd/{doanphiChiCd}', 'DoanphiChiCdsController@update')
    ->name('doanphi_chi_cds.doanphi_chi_cd.update');
    Route::delete('/doanphi_chi_cd/{doanphiChiCd}','DoanphiChiCdsController@destroy')
    ->name('doanphi_chi_cds.doanphi_chi_cd.destroy');
});

Route::group([
    'prefix' => 'phieudanhgia_chidoans',
], function () {
    Route::get('/', 'PhieudanhgiaChidoansController@index')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.index');
    Route::get('/create','PhieudanhgiaChidoansController@create')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.create');
    Route::get('/show/{phieudanhgiaChidoan}','PhieudanhgiaChidoansController@show')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.show');
    Route::get('/{phieudanhgiaChidoan}/edit','PhieudanhgiaChidoansController@edit')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.edit');
    Route::post('/', 'PhieudanhgiaChidoansController@store')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.store');
    Route::put('phieudanhgia_chidoan/{phieudanhgiaChidoan}', 'PhieudanhgiaChidoansController@update')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.update');
    Route::delete('/phieudanhgia_chidoan/{phieudanhgiaChidoan}','PhieudanhgiaChidoansController@destroy')
    ->name('phieudanhgia_chidoans.phieudanhgia_chidoan.destroy');
});

Route::group([
    'prefix' => 'chitiet_pdg_cds',
], function () {
    Route::get('/', 'ChitietPdgCdsController@index')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.index');
    Route::get('/create','ChitietPdgCdsController@create')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.create');
    Route::get('/show/{chitietPdgCd}','ChitietPdgCdsController@show')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.show')->where('id', '[0-9]+');
    Route::get('/{chitietPdgCd}/edit','ChitietPdgCdsController@edit')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietPdgCdsController@store')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.store');
    Route::put('chitiet_pdg_cd/{chitietPdgCd}', 'ChitietPdgCdsController@update')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_pdg_cd/{chitietPdgCd}','ChitietPdgCdsController@destroy')
    ->name('chitiet_pdg_cds.chitiet_pdg_cd.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'phieudanhgia_doankhoas',
], function () {
    Route::get('/', 'PhieudanhgiaDoankhoasController@index')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.index');
    Route::get('/create','PhieudanhgiaDoankhoasController@create')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.create');
    Route::get('/show/{phieudanhgiaDoankhoa}','PhieudanhgiaDoankhoasController@show')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.show');
    Route::get('/{phieudanhgiaDoankhoa}/edit','PhieudanhgiaDoankhoasController@edit')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.edit');
    Route::post('/', 'PhieudanhgiaDoankhoasController@store')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.store');
    Route::put('phieudanhgia_doankhoa/{phieudanhgiaDoankhoa}', 'PhieudanhgiaDoankhoasController@update')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.update');
    Route::delete('/phieudanhgia_doankhoa/{phieudanhgiaDoankhoa}','PhieudanhgiaDoankhoasController@destroy')
    ->name('phieudanhgia_doankhoas.phieudanhgia_doankhoa.destroy');
});

Route::group([
    'prefix' => 'chitiet_pdg_dks',
], function () {
    Route::get('/', 'ChitietPdgDksController@index')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.index');
    Route::get('/create','ChitietPdgDksController@create')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.create');
    Route::get('/show/{chitietPdgDk}','ChitietPdgDksController@show')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.show')->where('id', '[0-9]+');
    Route::get('/{chitietPdgDk}/edit','ChitietPdgDksController@edit')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietPdgDksController@store')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.store');
    Route::put('chitiet_pdg_dk/{chitietPdgDk}', 'ChitietPdgDksController@update')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_pdg_dk/{chitietPdgDk}','ChitietPdgDksController@destroy')
    ->name('chitiet_pdg_dks.chitiet_pdg_dk.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'doankhoas',
], function () {
    Route::get('/', 'DoankhoasController@index')
    ->name('doankhoas.doankhoa.index');
    Route::get('/create','DoankhoasController@create')
    ->name('doankhoas.doankhoa.create');
    Route::get('/show/{doankhoa}','DoankhoasController@show')
    ->name('doankhoas.doankhoa.show');
    Route::get('/{doankhoa}/edit','DoankhoasController@edit')
    ->name('doankhoas.doankhoa.edit');
    Route::post('/', 'DoankhoasController@store')
    ->name('doankhoas.doankhoa.store');
    Route::put('doankhoa/{doankhoa}', 'DoankhoasController@update')
    ->name('doankhoas.doankhoa.update');
    Route::delete('/doankhoa/{doankhoa}','DoankhoasController@destroy')
    ->name('doankhoas.doankhoa.destroy');
});

Route::group([
    'prefix' => 'chidoans',
], function () {
    Route::get('/', 'ChidoansController@index')
    ->name('chidoans.chidoan.index');
    Route::get('/create','ChidoansController@create')
    ->name('chidoans.chidoan.create');
    Route::get('/show/{chidoan}','ChidoansController@show')
    ->name('chidoans.chidoan.show');
    Route::get('/{chidoan}/edit','ChidoansController@edit')
    ->name('chidoans.chidoan.edit');
    Route::post('/', 'ChidoansController@store')
    ->name('chidoans.chidoan.store');
    Route::put('chidoan/{chidoan}', 'ChidoansController@update')
    ->name('chidoans.chidoan.update');
    Route::delete('/chidoan/{chidoan}','ChidoansController@destroy')
    ->name('chidoans.chidoan.destroy');
});

Route::group([
    'prefix' => 'doanphi_chi_dks',
], function () {
    Route::get('/', 'DoanphiChiDksController@index')
    ->name('doanphi_chi_dks.doanphi_chi_dk.index');
    Route::get('/create','DoanphiChiDksController@create')
    ->name('doanphi_chi_dks.doanphi_chi_dk.create');
    Route::get('/show/{doanphiChiDk}','DoanphiChiDksController@show')
    ->name('doanphi_chi_dks.doanphi_chi_dk.show');
    Route::get('/{doanphiChiDk}/edit','DoanphiChiDksController@edit')
    ->name('doanphi_chi_dks.doanphi_chi_dk.edit');
    Route::post('/', 'DoanphiChiDksController@store')
    ->name('doanphi_chi_dks.doanphi_chi_dk.store');
    Route::put('doanphi_chi_dk/{doanphiChiDk}', 'DoanphiChiDksController@update')
    ->name('doanphi_chi_dks.doanphi_chi_dk.update');
    Route::delete('/doanphi_chi_dk/{doanphiChiDk}','DoanphiChiDksController@destroy')
    ->name('doanphi_chi_dks.doanphi_chi_dk.destroy');
});

Route::group([
    'prefix' => 'doanvien_thanhniens',
], function () {
    Route::get('/', 'DoanvienThanhniensController@index')
    ->name('doanvien_thanhniens.doanvien_thanhnien.index');
    Route::get('/create','DoanvienThanhniensController@create')
    ->name('doanvien_thanhniens.doanvien_thanhnien.create');
    Route::get('/show/{doanvienThanhnien}','DoanvienThanhniensController@show')
    ->name('doanvien_thanhniens.doanvien_thanhnien.show');
    Route::get('/{doanvienThanhnien}/edit','DoanvienThanhniensController@edit')
    ->name('doanvien_thanhniens.doanvien_thanhnien.edit');
    Route::post('/', 'DoanvienThanhniensController@store')
    ->name('doanvien_thanhniens.doanvien_thanhnien.store');
    Route::put('doanvien_thanhnien/{doanvienThanhnien}', 'DoanvienThanhniensController@update')
    ->name('doanvien_thanhniens.doanvien_thanhnien.update');
    Route::delete('/doanvien_thanhnien/{doanvienThanhnien}','DoanvienThanhniensController@destroy')
    ->name('doanvien_thanhniens.doanvien_thanhnien.destroy');
});

Route::group([
    'prefix' => 'vaitros',
], function () {
    Route::get('/', 'VaitrosController@index')
    ->name('vaitros.vaitro.index');
    Route::get('/create','VaitrosController@create')
    ->name('vaitros.vaitro.create');
    Route::get('/show/{vaitro}','VaitrosController@show')
    ->name('vaitros.vaitro.show')->where('id', '[0-9]+');
    Route::get('/{vaitro}/edit','VaitrosController@edit')
    ->name('vaitros.vaitro.edit')->where('id', '[0-9]+');
    Route::post('/', 'VaitrosController@store')
    ->name('vaitros.vaitro.store');
    Route::put('vaitro/{vaitro}', 'VaitrosController@update')
    ->name('vaitros.vaitro.update')->where('id', '[0-9]+');
    Route::delete('/vaitro/{vaitro}','VaitrosController@destroy')
    ->name('vaitros.vaitro.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'ct_chucvu_dvs',
], function () {
    Route::get('/', 'CtChucvuDvsController@index')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.index');
    Route::get('/create','CtChucvuDvsController@create')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.create');
    Route::get('/show/{ctChucvuDv}','CtChucvuDvsController@show')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.show')->where('id', '[0-9]+');
    Route::get('/{ctChucvuDv}/edit','CtChucvuDvsController@edit')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.edit')->where('id', '[0-9]+');
    Route::post('/', 'CtChucvuDvsController@store')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.store');
    Route::put('ct_chucvu_dv/{ctChucvuDv}', 'CtChucvuDvsController@update')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.update')->where('id', '[0-9]+');
    Route::delete('/ct_chucvu_dv/{ctChucvuDv}','CtChucvuDvsController@destroy')
    ->name('ct_chucvu_dvs.ct_chucvu_dv.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'chitiet_ktkls',
], function () {
    Route::get('/', 'ChitietKtklsController@index')
    ->name('chitiet_ktkls.chitiet_ktkl.index');
    Route::get('/create','ChitietKtklsController@create')
    ->name('chitiet_ktkls.chitiet_ktkl.create');
    Route::get('/show/{chitietKtkl}','ChitietKtklsController@show')
    ->name('chitiet_ktkls.chitiet_ktkl.show')->where('id', '[0-9]+');
    Route::get('/{chitietKtkl}/edit','ChitietKtklsController@edit')
    ->name('chitiet_ktkls.chitiet_ktkl.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietKtklsController@store')
    ->name('chitiet_ktkls.chitiet_ktkl.store');
    Route::put('chitiet_ktkl/{chitietKtkl}', 'ChitietKtklsController@update')
    ->name('chitiet_ktkls.chitiet_ktkl.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_ktkl/{chitietKtkl}','ChitietKtklsController@destroy')
    ->name('chitiet_ktkls.chitiet_ktkl.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'qd_dv_ttdoans',
], function () {
    Route::get('/', 'QdDvTtdoansController@index')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.index');
    Route::get('/create','QdDvTtdoansController@create')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.create');
    Route::get('/show/{qdDvTtdoan}','QdDvTtdoansController@show')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.show')->where('id', '[0-9]+');
    Route::get('/{qdDvTtdoan}/edit','QdDvTtdoansController@edit')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.edit')->where('id', '[0-9]+');
    Route::post('/', 'QdDvTtdoansController@store')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.store');
    Route::put('qd_dv_ttdoan/{qdDvTtdoan}', 'QdDvTtdoansController@update')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.update')->where('id', '[0-9]+');
    Route::delete('/qd_dv_ttdoan/{qdDvTtdoan}','QdDvTtdoansController@destroy')
    ->name('qd_dv_ttdoans.qd_dv_ttdoan.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'qd_dv_ketnaps',
], function () {
    Route::get('/', 'QdDvKetnapsController@index')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.index');
    Route::get('/create','QdDvKetnapsController@create')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.create');
    Route::get('/show/{qdDvKetnap}','QdDvKetnapsController@show')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.show')->where('id', '[0-9]+');
    Route::get('/{qdDvKetnap}/edit','QdDvKetnapsController@edit')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.edit')->where('id', '[0-9]+');
    Route::post('/', 'QdDvKetnapsController@store')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.store');
    Route::put('qd_dv_ketnap/{qdDvKetnap}', 'QdDvKetnapsController@update')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.update')->where('id', '[0-9]+');
    Route::delete('/qd_dv_ketnap/{qdDvKetnap}','QdDvKetnapsController@destroy')
    ->name('qd_dv_ketnaps.qd_dv_ketnap.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'pt_doankhoas',
], function () {
    Route::get('/', 'PtDoankhoasController@index')
    ->name('pt_doankhoas.pt_doankhoa.index');
    Route::get('/create','PtDoankhoasController@create')
    ->name('pt_doankhoas.pt_doankhoa.create');
    Route::get('/show/{ptDoankhoa}','PtDoankhoasController@show')
    ->name('pt_doankhoas.pt_doankhoa.show');
    Route::get('/{ptDoankhoa}/edit','PtDoankhoasController@edit')
    ->name('pt_doankhoas.pt_doankhoa.edit');
    Route::post('/', 'PtDoankhoasController@store')
    ->name('pt_doankhoas.pt_doankhoa.store');
    Route::put('pt_doankhoa/{ptDoankhoa}', 'PtDoankhoasController@update')
    ->name('pt_doankhoas.pt_doankhoa.update');
    Route::delete('/pt_doankhoa/{ptDoankhoa}','PtDoankhoasController@destroy')
    ->name('pt_doankhoas.pt_doankhoa.destroy');
});

Route::group([
    'prefix' => 'thanhtich_thamgias',
], function () {
    Route::get('/', 'ThanhtichThamgiasController@index')
    ->name('thanhtich_thamgias.thanhtich_thamgia.index');
    Route::get('/create','ThanhtichThamgiasController@create')
    ->name('thanhtich_thamgias.thanhtich_thamgia.create');
    Route::get('/show/{thanhtichThamgia}','ThanhtichThamgiasController@show')
    ->name('thanhtich_thamgias.thanhtich_thamgia.show')->where('id', '[0-9]+');
    Route::get('/{thanhtichThamgia}/edit','ThanhtichThamgiasController@edit')
    ->name('thanhtich_thamgias.thanhtich_thamgia.edit')->where('id', '[0-9]+');
    Route::post('/', 'ThanhtichThamgiasController@store')
    ->name('thanhtich_thamgias.thanhtich_thamgia.store');
    Route::put('thanhtich_thamgia/{thanhtichThamgia}', 'ThanhtichThamgiasController@update')
    ->name('thanhtich_thamgias.thanhtich_thamgia.update')->where('id', '[0-9]+');
    Route::delete('/thanhtich_thamgia/{thanhtichThamgia}','ThanhtichThamgiasController@destroy')
    ->name('thanhtich_thamgias.thanhtich_thamgia.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'phieudanhgia_doanviens',
], function () {
    Route::get('/', 'PhieudanhgiaDoanviensController@index')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.index');
    Route::get('/create','PhieudanhgiaDoanviensController@create')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.create');
    Route::get('/show/{phieudanhgiaDoanvien}','PhieudanhgiaDoanviensController@show')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.show');
    Route::get('/{phieudanhgiaDoanvien}/edit','PhieudanhgiaDoanviensController@edit')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.edit');
    Route::post('/', 'PhieudanhgiaDoanviensController@store')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.store');
    Route::put('phieudanhgia_doanvien/{phieudanhgiaDoanvien}', 'PhieudanhgiaDoanviensController@update')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.update');
    Route::delete('/phieudanhgia_doanvien/{phieudanhgiaDoanvien}','PhieudanhgiaDoanviensController@destroy')
    ->name('phieudanhgia_doanviens.phieudanhgia_doanvien.destroy');
});

Route::group([
    'prefix' => 'chitiet_pdg_dvs',
], function () {
    Route::get('/', 'ChitietPdgDvsController@index')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.index');
    Route::get('/create','ChitietPdgDvsController@create')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.create');
    Route::get('/show/{chitietPdgDv}','ChitietPdgDvsController@show')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.show')->where('id', '[0-9]+');
    Route::get('/{chitietPdgDv}/edit','ChitietPdgDvsController@edit')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietPdgDvsController@store')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.store');
    Route::put('chitiet_pdg_dv/{chitietPdgDv}', 'ChitietPdgDvsController@update')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_pdg_dv/{chitietPdgDv}','ChitietPdgDvsController@destroy')
    ->name('chitiet_pdg_dvs.chitiet_pdg_dv.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'phieubau_uutus',
], function () {
    Route::get('/', 'PhieubauUutusController@index')
    ->name('phieubau_uutus.phieubau_uutu.index');
    Route::get('/create','PhieubauUutusController@create')
    ->name('phieubau_uutus.phieubau_uutu.create');
    Route::get('/show/{phieubauUutu}','PhieubauUutusController@show')
    ->name('phieubau_uutus.phieubau_uutu.show');
    Route::get('/{phieubauUutu}/edit','PhieubauUutusController@edit')
    ->name('phieubau_uutus.phieubau_uutu.edit');
    Route::post('/', 'PhieubauUutusController@store')
    ->name('phieubau_uutus.phieubau_uutu.store');
    Route::put('phieubau_uutu/{phieubauUutu}', 'PhieubauUutusController@update')
    ->name('phieubau_uutus.phieubau_uutu.update');
    Route::delete('/phieubau_uutu/{phieubauUutu}','PhieubauUutusController@destroy')
    ->name('phieubau_uutus.phieubau_uutu.destroy');
});

Route::group([
    'prefix' => 'chitiet_bau_uts',
], function () {
    Route::get('/', 'ChitietBauUtsController@index')
    ->name('chitiet_bau_uts.chitiet_bau_ut.index');
    Route::get('/create','ChitietBauUtsController@create')
    ->name('chitiet_bau_uts.chitiet_bau_ut.create');
    Route::get('/show/{chitietBauUt}','ChitietBauUtsController@show')
    ->name('chitiet_bau_uts.chitiet_bau_ut.show')->where('id', '[0-9]+');
    Route::get('/{chitietBauUt}/edit','ChitietBauUtsController@edit')
    ->name('chitiet_bau_uts.chitiet_bau_ut.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietBauUtsController@store')
    ->name('chitiet_bau_uts.chitiet_bau_ut.store');
    Route::put('chitiet_bau_ut/{chitietBauUt}', 'ChitietBauUtsController@update')
    ->name('chitiet_bau_uts.chitiet_bau_ut.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_bau_ut/{chitietBauUt}','ChitietBauUtsController@destroy')
    ->name('chitiet_bau_uts.chitiet_bau_ut.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'doanphi_thu_cds',
], function () {
    Route::get('/', 'DoanphiThuCdsController@index')
    ->name('doanphi_thu_cds.doanphi_thu_cd.index');
    Route::get('/create','DoanphiThuCdsController@create')
    ->name('doanphi_thu_cds.doanphi_thu_cd.create');
    Route::get('/show/{doanphiThuCd}','DoanphiThuCdsController@show')
    ->name('doanphi_thu_cds.doanphi_thu_cd.show')->where('id', '[0-9]+');
    Route::get('/{doanphiThuCd}/edit','DoanphiThuCdsController@edit')
    ->name('doanphi_thu_cds.doanphi_thu_cd.edit')->where('id', '[0-9]+');
    Route::post('/', 'DoanphiThuCdsController@store')
    ->name('doanphi_thu_cds.doanphi_thu_cd.store');
    Route::put('doanphi_thu_cd/{doanphiThuCd}', 'DoanphiThuCdsController@update')
    ->name('doanphi_thu_cds.doanphi_thu_cd.update')->where('id', '[0-9]+');
    Route::delete('/doanphi_thu_cd/{doanphiThuCd}','DoanphiThuCdsController@destroy')
    ->name('doanphi_thu_cds.doanphi_thu_cd.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'doanphi_thu_dks',
], function () {
    Route::get('/', 'DoanphiThuDksController@index')
    ->name('doanphi_thu_dks.doanphi_thu_dk.index');
    Route::get('/create','DoanphiThuDksController@create')
    ->name('doanphi_thu_dks.doanphi_thu_dk.create');
    Route::get('/show/{doanphiThuDk}','DoanphiThuDksController@show')
    ->name('doanphi_thu_dks.doanphi_thu_dk.show')->where('id', '[0-9]+');
    Route::get('/{doanphiThuDk}/edit','DoanphiThuDksController@edit')
    ->name('doanphi_thu_dks.doanphi_thu_dk.edit')->where('id', '[0-9]+');
    Route::post('/', 'DoanphiThuDksController@store')
    ->name('doanphi_thu_dks.doanphi_thu_dk.store');
    Route::put('doanphi_thu_dk/{doanphiThuDk}', 'DoanphiThuDksController@update')
    ->name('doanphi_thu_dks.doanphi_thu_dk.update')->where('id', '[0-9]+');
    Route::delete('/doanphi_thu_dk/{doanphiThuDk}','DoanphiThuDksController@destroy')
    ->name('doanphi_thu_dks.doanphi_thu_dk.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'doanphi_thu_dvs',
], function () {
    Route::get('/', 'DoanphiThuDvsController@index')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.index');
    Route::get('/create','DoanphiThuDvsController@create')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.create');
    Route::get('/show/{doanphiThuDv}','DoanphiThuDvsController@show')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.show')->where('id', '[0-9]+');
    Route::get('/{doanphiThuDv}/edit','DoanphiThuDvsController@edit')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.edit')->where('id', '[0-9]+');
    Route::post('/', 'DoanphiThuDvsController@store')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.store');
    Route::put('doanphi_thu_dv/{doanphiThuDv}', 'DoanphiThuDvsController@update')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.update')->where('id', '[0-9]+');
    Route::delete('/doanphi_thu_dv/{doanphiThuDv}','DoanphiThuDvsController@destroy')
    ->name('doanphi_thu_dvs.doanphi_thu_dv.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'thangnams',
], function () {
    Route::get('/', 'ThangnamsController@index')
    ->name('thangnams.thangnam.index');
    Route::get('/create','ThangnamsController@create')
    ->name('thangnams.thangnam.create');
    Route::get('/show/{thangnam}','ThangnamsController@show')
    ->name('thangnams.thangnam.show');
    Route::get('/{thangnam}/edit','ThangnamsController@edit')
    ->name('thangnams.thangnam.edit');
    Route::post('/', 'ThangnamsController@store')
    ->name('thangnams.thangnam.store');
    Route::put('thangnam/{thangnam}', 'ThangnamsController@update')
    ->name('thangnams.thangnam.update');
    Route::delete('/thangnam/{thangnam}','ThangnamsController@destroy')
    ->name('thangnams.thangnam.destroy');
});

Route::group([
    'prefix' => 'chitiet_mauphieus',
], function () {
    Route::get('/', 'ChitietMauphieusController@index')
    ->name('chitiet_mauphieus.chitiet_mauphieu.index');
    Route::get('/create','ChitietMauphieusController@create')
    ->name('chitiet_mauphieus.chitiet_mauphieu.create');
    Route::get('/show/{chitietMauphieu}','ChitietMauphieusController@show')
    ->name('chitiet_mauphieus.chitiet_mauphieu.show')->where('id', '[0-9]+');
    Route::get('/{chitietMauphieu}/edit','ChitietMauphieusController@edit')
    ->name('chitiet_mauphieus.chitiet_mauphieu.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietMauphieusController@store')
    ->name('chitiet_mauphieus.chitiet_mauphieu.store');
    Route::put('chitiet_mauphieu/{chitietMauphieu}', 'ChitietMauphieusController@update')
    ->name('chitiet_mauphieus.chitiet_mauphieu.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_mauphieu/{chitietMauphieu}','ChitietMauphieusController@destroy')
    ->name('chitiet_mauphieus.chitiet_mauphieu.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'pt_chidoans',
], function () {
    Route::get('/', 'PtChidoansController@index')
    ->name('pt_chidoans.pt_chidoan.index');
    Route::get('/create','PtChidoansController@create')
    ->name('pt_chidoans.pt_chidoan.create');
    Route::get('/show/{ptChidoan}','PtChidoansController@show')
    ->name('pt_chidoans.pt_chidoan.show');
    Route::get('/{ptChidoan}/edit','PtChidoansController@edit')
    ->name('pt_chidoans.pt_chidoan.edit');
    Route::post('/', 'PtChidoansController@store')
    ->name('pt_chidoans.pt_chidoan.store');
    Route::put('pt_chidoan/{ptChidoan}', 'PtChidoansController@update')
    ->name('pt_chidoans.pt_chidoan.update');
    Route::delete('/pt_chidoan/{ptChidoan}','PtChidoansController@destroy')
    ->name('pt_chidoans.pt_chidoan.destroy');
});




Route::group([
    'prefix' => 'sinhviens',
], function () {
    Route::get('/', 'SinhviensController@index')
    ->name('sinhviens.sinhvien.index');
    Route::get('/create','SinhviensController@create')
    ->name('sinhviens.sinhvien.create');
    Route::get('/show/{sinhvien}','SinhviensController@show')
    ->name('sinhviens.sinhvien.show')->where('id', '[0-9]+');
    Route::get('/{sinhvien}/edit','SinhviensController@edit')
    ->name('sinhviens.sinhvien.edit')->where('id', '[0-9]+');
    Route::post('/', 'SinhviensController@store')
    ->name('sinhviens.sinhvien.store');
    Route::put('sinhvien/{sinhvien}', 'SinhviensController@update')
    ->name('sinhviens.sinhvien.update')->where('id', '[0-9]+');
    Route::delete('/sinhvien/{sinhvien}','SinhviensController@destroy')
    ->name('sinhviens.sinhvien.destroy')->where('id', '[0-9]+');
});

Route::get('/demo', function () {
    return view('demo(index)');
});


Route::group([
    'prefix' => 'doanphithus',
], function () {
    Route::get('/', 'DoanphithusController@index')
    ->name('doanphithus.doanphithu.index');
    Route::get('/create','DoanphithusController@create')
    ->name('doanphithus.doanphithu.create');
    Route::get('/show/{doanphithu}','DoanphithusController@show')
    ->name('doanphithus.doanphithu.show')->where('id', '[0-9]+');
    Route::get('/{doanphithu}/edit','DoanphithusController@edit')
    ->name('doanphithus.doanphithu.edit')->where('id', '[0-9]+');
    Route::post('/', 'DoanphithusController@store')
    ->name('doanphithus.doanphithu.store');
    Route::put('doanphithu/{doanphithu}', 'DoanphithusController@update')
    ->name('doanphithus.doanphithu.update')->where('id', '[0-9]+');
    Route::delete('/doanphithu/{doanphithu}','DoanphithusController@destroy')
    ->name('doanphithus.doanphithu.destroy')->where('id', '[0-9]+');
});

Route::get('/demo2', 'doanphiController@index')->name('doanphithu_index');
Route::post('/demo2/update', 'doanphiController@update')->name('doanphithu_store');
Route::get('/demo2/getnam', 'doanphiController@getnam')->name('doanphithu_getnam');


Route::get('/nguyen', function () {
    return view('layouts.app(demo)');
});
Route::get('/nguyen4', function () {
    return view('demo4');
});


Route::get('/thao', function () {
    return view('layouts.layout(demo2).app(demo2)');
});

Route::get('/thao1', function () {
    return view('layouts.layout(demo3).app(demo3)');
});

Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');


Route::get('/nhap', function () {
    return view('nhap(bo)');
});

Route::get('/form(nhap)', function () {
    return view('form(nhap)');
});

//create_mau_phieu

Route::get('/create_mau_phieu', 'createmauphieuController@index')->name('createmauphieu_index');
Route::post('/create_mau_phieu/store', 'createmauphieuController@store')->name('createmauphieu_create');
Route::get('/update_mau_phieu/{id}/edit', 'createmauphieuController@edit')->name('createmauphieu_edit');
Route::get('/show_chitiet_mauphieu', 'createmauphieuController@show_chitiet_mauphieu')->name('show_chitiet_mauphieu');

Route::get('/phieudanhgia', 'createmauphieuController@mauphieuform')->name('mauphieuform_index');


Route::group([
    'prefix' => 'kieu_dulieus',
], function () {
    Route::get('/', 'KieuDulieusController@index')
         ->name('kieu_dulieus.kieu_dulieu.index');
    Route::get('/create','KieuDulieusController@create')
         ->name('kieu_dulieus.kieu_dulieu.create');
    Route::get('/show/{kieuDulieu}','KieuDulieusController@show')
         ->name('kieu_dulieus.kieu_dulieu.show')->where('id', '[0-9]+');
    Route::get('/{kieuDulieu}/edit','KieuDulieusController@edit')
         ->name('kieu_dulieus.kieu_dulieu.edit')->where('id', '[0-9]+');
    Route::post('/', 'KieuDulieusController@store')
         ->name('kieu_dulieus.kieu_dulieu.store');
    Route::put('kieu_dulieu/{kieuDulieu}', 'KieuDulieusController@update')
         ->name('kieu_dulieus.kieu_dulieu.update')->where('id', '[0-9]+');
    Route::delete('/kieu_dulieu/{kieuDulieu}','KieuDulieusController@destroy')
         ->name('kieu_dulieus.kieu_dulieu.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'xeploai_svs',
], function () {
    Route::get('/', 'XeploaiSvsController@index')
         ->name('xeploai_svs.xeploai_sv.index');
    Route::get('/create','XeploaiSvsController@create')
         ->name('xeploai_svs.xeploai_sv.create');
    Route::get('/show/{xeploaiSv}','XeploaiSvsController@show')
         ->name('xeploai_svs.xeploai_sv.show')->where('id', '[0-9]+');
    Route::get('/{xeploaiSv}/edit','XeploaiSvsController@edit')
         ->name('xeploai_svs.xeploai_sv.edit')->where('id', '[0-9]+');
    Route::post('/', 'XeploaiSvsController@store')
         ->name('xeploai_svs.xeploai_sv.store');
    Route::put('xeploai_sv/{xeploaiSv}', 'XeploaiSvsController@update')
         ->name('xeploai_svs.xeploai_sv.update')->where('id', '[0-9]+');
    Route::delete('/xeploai_sv/{xeploaiSv}','XeploaiSvsController@destroy')
         ->name('xeploai_svs.xeploai_sv.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'phieudanhgia_sinhviens',
], function () {
    Route::get('/', 'PhieudanhgiaSinhviensController@index')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.index');
    Route::get('/create','PhieudanhgiaSinhviensController@create')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.create');
    Route::get('/show/{phieudanhgiaSinhvien}','PhieudanhgiaSinhviensController@show')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.show')->where('id', '[0-9]+');
    Route::get('/{phieudanhgiaSinhvien}/edit','PhieudanhgiaSinhviensController@edit')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.edit')->where('id', '[0-9]+');
    Route::post('/', 'PhieudanhgiaSinhviensController@store')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.store');
    Route::put('phieudanhgia_sinhvien/{phieudanhgiaSinhvien}', 'PhieudanhgiaSinhviensController@update')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.update')->where('id', '[0-9]+');
    Route::delete('/phieudanhgia_sinhvien/{phieudanhgiaSinhvien}','PhieudanhgiaSinhviensController@destroy')
         ->name('phieudanhgia_sinhviens.phieudanhgia_sinhvien.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'chitiet_pdg_svs',
], function () {
    Route::get('/', 'ChitietPdgSvsController@index')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.index');
    Route::get('/create','ChitietPdgSvsController@create')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.create');
    Route::get('/show/{chitietPdgSv}','ChitietPdgSvsController@show')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.show')->where('id', '[0-9]+');
    Route::get('/{chitietPdgSv}/edit','ChitietPdgSvsController@edit')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.edit')->where('id', '[0-9]+');
    Route::post('/', 'ChitietPdgSvsController@store')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.store');
    Route::put('chitiet_pdg_sv/{chitietPdgSv}', 'ChitietPdgSvsController@update')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.update')->where('id', '[0-9]+');
    Route::delete('/chitiet_pdg_sv/{chitietPdgSv}','ChitietPdgSvsController@destroy')
         ->name('chitiet_pdg_svs.chitiet_pdg_sv.destroy')->where('id', '[0-9]+');
});



Route::get('/add_pdg','danhgiasinhvienController@add_pdg')->name('danhgia_sinhvien.add_pdg');
Route::get('/create/{id}', 'danhgiasinhvienController@create')->name('danhgia_sinhvien.create') ;
