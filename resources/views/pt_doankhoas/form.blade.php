
<div class="form-group {{ $errors->has('LOAI_PT_ID') ? 'has-error' : '' }}">
    <label for="LOAI_PT_ID" class="col-md-2 control-label">L O A I  P T</label>
    <div class="col-md-10">
        <select class="form-control" id="LOAI_PT_ID" name="LOAI_PT_ID" required="true">
        	    <option value="" style="display: none;" {{ old('LOAI_PT_ID', optional($ptDoankhoa)->LOAI_PT_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select l o a i  p t</option>
        	@foreach ($LoaiPts as $key => $LoaiPt)
			    <option value="{{ $key }}" {{ old('LOAI_PT_ID', optional($ptDoankhoa)->LOAI_PT_ID) == $key ? 'selected' : '' }}>
			    	{{ $LoaiPt }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('LOAI_PT_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANKHOA_ID') ? 'has-error' : '' }}">
    <label for="DOANKHOA_ID" class="col-md-2 control-label">D O A N K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANKHOA_ID" name="DOANKHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANKHOA_ID', optional($ptDoankhoa)->DOANKHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n k h o a</option>
        	@foreach ($Doankhoas as $key => $Doankhoa)
			    <option value="{{ $key }}" {{ old('DOANKHOA_ID', optional($ptDoankhoa)->DOANKHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $Doankhoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANKHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANPHI_CHI_DK_ID') ? 'has-error' : '' }}">
    <label for="DOANPHI_CHI_DK_ID" class="col-md-2 control-label">D O A N P H I  C H I  D K</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANPHI_CHI_DK_ID" name="DOANPHI_CHI_DK_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANPHI_CHI_DK_ID', optional($ptDoankhoa)->DOANPHI_CHI_DK_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n p h i  c h i  d k</option>
        	@foreach ($DoanphiChiDks as $key => $DoanphiChiDk)
			    <option value="{{ $key }}" {{ old('DOANPHI_CHI_DK_ID', optional($ptDoankhoa)->DOANPHI_CHI_DK_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanphiChiDk }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANPHI_CHI_DK_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('HOCKY_ID') ? 'has-error' : '' }}">
    <label for="HOCKY_ID" class="col-md-2 control-label">H O C K Y</label>
    <div class="col-md-10">
        <select class="form-control" id="HOCKY_ID" name="HOCKY_ID" required="true">
        	    <option value="" style="display: none;" {{ old('HOCKY_ID', optional($ptDoankhoa)->HOCKY_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select h o c k y</option>
        	@foreach ($Hockies as $key => $Hocky)
			    <option value="{{ $key }}" {{ old('HOCKY_ID', optional($ptDoankhoa)->HOCKY_ID) == $key ? 'selected' : '' }}>
			    	{{ $Hocky }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('HOCKY_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PT_DK') ? 'has-error' : '' }}">
    <label for="TEN_PT_DK" class="col-md-2 control-label">T E N  P T  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PT_DK" type="text" id="TEN_PT_DK" value="{{ old('TEN_PT_DK', optional($ptDoankhoa)->TEN_PT_DK) }}" maxlength="50" placeholder="Enter t e n  p t  d k here...">
        {!! $errors->first('TEN_PT_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_BT_PT_DK') ? 'has-error' : '' }}">
    <label for="NGAY_BT_PT_DK" class="col-md-2 control-label">N G A Y  B T  P T  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_BT_PT_DK" type="text" id="NGAY_BT_PT_DK" value="{{ old('NGAY_BT_PT_DK', optional($ptDoankhoa)->NGAY_BT_PT_DK) }}" placeholder="Enter n g a y  b t  p t  d k here...">
        {!! $errors->first('NGAY_BT_PT_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_KT_PT_DK') ? 'has-error' : '' }}">
    <label for="NGAY_KT_PT_DK" class="col-md-2 control-label">N G A Y  K T  P T  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_KT_PT_DK" type="text" id="NGAY_KT_PT_DK" value="{{ old('NGAY_KT_PT_DK', optional($ptDoankhoa)->NGAY_KT_PT_DK) }}" placeholder="Enter n g a y  k t  p t  d k here...">
        {!! $errors->first('NGAY_KT_PT_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GHICHU_PT_DK') ? 'has-error' : '' }}">
    <label for="GHICHU_PT_DK" class="col-md-2 control-label">G H I C H U  P T  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="GHICHU_PT_DK" type="text" id="GHICHU_PT_DK" value="{{ old('GHICHU_PT_DK', optional($ptDoankhoa)->GHICHU_PT_DK) }}" maxlength="200" placeholder="Enter g h i c h u  p t  d k here...">
        {!! $errors->first('GHICHU_PT_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

