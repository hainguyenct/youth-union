
<div class="form-group {{ $errors->has('HOCKY_ID') ? 'has-error' : '' }}">
    <label for="HOCKY_ID" class="col-md-2 control-label">H O C K Y</label>
    <div class="col-md-10">
        <select class="form-control" id="HOCKY_ID" name="HOCKY_ID" required="true">
        	    <option value="" style="display: none;" {{ old('HOCKY_ID', optional($ptChidoan)->HOCKY_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select h o c k y</option>
        	@foreach ($Hockies as $key => $Hocky)
			    <option value="{{ $key }}" {{ old('HOCKY_ID', optional($ptChidoan)->HOCKY_ID) == $key ? 'selected' : '' }}>
			    	{{ $Hocky }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('HOCKY_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('LOAI_PT_ID') ? 'has-error' : '' }}">
    <label for="LOAI_PT_ID" class="col-md-2 control-label">L O A I  P T</label>
    <div class="col-md-10">
        <select class="form-control" id="LOAI_PT_ID" name="LOAI_PT_ID" required="true">
        	    <option value="" style="display: none;" {{ old('LOAI_PT_ID', optional($ptChidoan)->LOAI_PT_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select l o a i  p t</option>
        	@foreach ($LoaiPts as $key => $LoaiPt)
			    <option value="{{ $key }}" {{ old('LOAI_PT_ID', optional($ptChidoan)->LOAI_PT_ID) == $key ? 'selected' : '' }}>
			    	{{ $LoaiPt }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('LOAI_PT_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('CHIDOAN_ID') ? 'has-error' : '' }}">
    <label for="CHIDOAN_ID" class="col-md-2 control-label">C H I D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="CHIDOAN_ID" name="CHIDOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('CHIDOAN_ID', optional($ptChidoan)->CHIDOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select c h i d o a n</option>
        	@foreach ($Chidoans as $key => $Chidoan)
			    <option value="{{ $key }}" {{ old('CHIDOAN_ID', optional($ptChidoan)->CHIDOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $Chidoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('CHIDOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DOANPHI_CHI_CD_ID') ? 'has-error' : '' }}">
    <label for="DOANPHI_CHI_CD_ID" class="col-md-2 control-label">D O A N P H I  C H I  C D</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANPHI_CHI_CD_ID" name="DOANPHI_CHI_CD_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANPHI_CHI_CD_ID', optional($ptChidoan)->DOANPHI_CHI_CD_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n p h i  c h i  c d</option>
        	@foreach ($DoanphiChiCds as $key => $DoanphiChiCd)
			    <option value="{{ $key }}" {{ old('DOANPHI_CHI_CD_ID', optional($ptChidoan)->DOANPHI_CHI_CD_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanphiChiCd }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANPHI_CHI_CD_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_PT_CD') ? 'has-error' : '' }}">
    <label for="TEN_PT_CD" class="col-md-2 control-label">T E N  P T  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PT_CD" type="text" id="TEN_PT_CD" value="{{ old('TEN_PT_CD', optional($ptChidoan)->TEN_PT_CD) }}" maxlength="50" placeholder="Enter t e n  p t  c d here...">
        {!! $errors->first('TEN_PT_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_BD_PT_CD') ? 'has-error' : '' }}">
    <label for="NGAY_BD_PT_CD" class="col-md-2 control-label">N G A Y  B D  P T  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_BD_PT_CD" type="text" id="NGAY_BD_PT_CD" value="{{ old('NGAY_BD_PT_CD', optional($ptChidoan)->NGAY_BD_PT_CD) }}" placeholder="Enter n g a y  b d  p t  c d here...">
        {!! $errors->first('NGAY_BD_PT_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_KT_PT_CD') ? 'has-error' : '' }}">
    <label for="NGAY_KT_PT_CD" class="col-md-2 control-label">N G A Y  K T  P T  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_KT_PT_CD" type="text" id="NGAY_KT_PT_CD" value="{{ old('NGAY_KT_PT_CD', optional($ptChidoan)->NGAY_KT_PT_CD) }}" placeholder="Enter n g a y  k t  p t  c d here...">
        {!! $errors->first('NGAY_KT_PT_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GHICHU_PT_CD') ? 'has-error' : '' }}">
    <label for="GHICHU_PT_CD" class="col-md-2 control-label">G H I C H U  P T  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="GHICHU_PT_CD" type="text" id="GHICHU_PT_CD" value="{{ old('GHICHU_PT_CD', optional($ptChidoan)->GHICHU_PT_CD) }}" maxlength="200" placeholder="Enter g h i c h u  p t  c d here...">
        {!! $errors->first('GHICHU_PT_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

