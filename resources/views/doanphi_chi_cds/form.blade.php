
<div class="form-group {{ $errors->has('LOAI_DP_CHI_ID') ? 'has-error' : '' }}">
    <label for="LOAI_DP_CHI_ID" class="col-md-2 control-label">L O A I  D P  C H I</label>
    <div class="col-md-10">
        <select class="form-control" id="LOAI_DP_CHI_ID" name="LOAI_DP_CHI_ID" required="true">
        	    <option value="" style="display: none;" {{ old('LOAI_DP_CHI_ID', optional($doanphiChiCd)->LOAI_DP_CHI_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select l o a i  d p  c h i</option>
        	@foreach ($LoaiDpChis as $key => $LoaiDpChi)
			    <option value="{{ $key }}" {{ old('LOAI_DP_CHI_ID', optional($doanphiChiCd)->LOAI_DP_CHI_ID) == $key ? 'selected' : '' }}>
			    	{{ $LoaiDpChi }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('LOAI_DP_CHI_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SOTIEN_CHI_CD') ? 'has-error' : '' }}">
    <label for="SOTIEN_CHI_CD" class="col-md-2 control-label">S O T I E N  C H I  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="SOTIEN_CHI_CD" type="number" id="SOTIEN_CHI_CD" value="{{ old('SOTIEN_CHI_CD', optional($doanphiChiCd)->SOTIEN_CHI_CD) }}" min="-9" max="9" placeholder="Enter s o t i e n  c h i  c d here...">
        {!! $errors->first('SOTIEN_CHI_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_CHI_CD') ? 'has-error' : '' }}">
    <label for="NGAY_CHI_CD" class="col-md-2 control-label">N G A Y  C H I  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_CHI_CD" type="text" id="NGAY_CHI_CD" value="{{ old('NGAY_CHI_CD', optional($doanphiChiCd)->NGAY_CHI_CD) }}" placeholder="Enter n g a y  c h i  c d here...">
        {!! $errors->first('NGAY_CHI_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGUOI_NHAN_PHIEU_CHI_CD') ? 'has-error' : '' }}">
    <label for="NGUOI_NHAN_PHIEU_CHI_CD" class="col-md-2 control-label">N G U O I  N H A N  P H I E U  C H I  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="NGUOI_NHAN_PHIEU_CHI_CD" type="text" id="NGUOI_NHAN_PHIEU_CHI_CD" value="{{ old('NGUOI_NHAN_PHIEU_CHI_CD', optional($doanphiChiCd)->NGUOI_NHAN_PHIEU_CHI_CD) }}" maxlength="100" placeholder="Enter n g u o i  n h a n  p h i e u  c h i  c d here...">
        {!! $errors->first('NGUOI_NHAN_PHIEU_CHI_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

