
<div class="form-group {{ $errors->has('PHUONG_XA_ID_QQ') ? 'has-error' : '' }}">
    <label for="PHUONG_XA_ID_QQ" class="col-md-2 control-label">P H U O N G  X A</label>
    <div class="col-md-10">
        <select class="form-control" id="PHUONG_XA_ID_QQ" name="PHUONG_XA_ID_QQ" required="true">
        	    <option value="" style="display: none;" {{ old('PHUONG_XA_ID_QQ', optional($doanvienThanhnien)->PHUONG_XA_ID_QQ ?: '') == '' ? 'selected' : '' }} disabled selected>Enter p h u o n g  x a here...</option>
        	@foreach ($PhuongXas as $key => $PhuongXa)
			    <option value="{{ $key }}" {{ old('PHUONG_XA_ID_QQ', optional($doanvienThanhnien)->PHUONG_XA_ID_QQ) == $key ? 'selected' : '' }}>
			    	{{ $PhuongXa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHUONG_XA_ID_QQ', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('CHIDOAN_ID') ? 'has-error' : '' }}">
    <label for="CHIDOAN_ID" class="col-md-2 control-label">C H I D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="CHIDOAN_ID" name="CHIDOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('CHIDOAN_ID', optional($doanvienThanhnien)->CHIDOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select c h i d o a n</option>
        	@foreach ($Chidoans as $key => $Chidoan)
			    <option value="{{ $key }}" {{ old('CHIDOAN_ID', optional($doanvienThanhnien)->CHIDOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $Chidoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('CHIDOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TONGIAO_ID') ? 'has-error' : '' }}">
    <label for="TONGIAO_ID" class="col-md-2 control-label">T O N G I A O</label>
    <div class="col-md-10">
        <select class="form-control" id="TONGIAO_ID" name="TONGIAO_ID">
        	    <option value="" style="display: none;" {{ old('TONGIAO_ID', optional($doanvienThanhnien)->TONGIAO_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select t o n g i a o</option>
        	@foreach ($Tongiaos as $key => $Tongiao)
			    <option value="{{ $key }}" {{ old('TONGIAO_ID', optional($doanvienThanhnien)->TONGIAO_ID) == $key ? 'selected' : '' }}>
			    	{{ $Tongiao }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('TONGIAO_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PHUONG_XA_ID_NS') ? 'has-error' : '' }}">
    <label for="PHUONG_XA_ID_NS" class="col-md-2 control-label">P H U O N G  X A</label>
    <div class="col-md-10">
        <select class="form-control" id="PHUONG_XA_ID_NS" name="PHUONG_XA_ID_NS" required="true">
        	    <option value="" style="display: none;" {{ old('PHUONG_XA_ID_NS', optional($doanvienThanhnien)->PHUONG_XA_ID_NS ?: '') == '' ? 'selected' : '' }} disabled selected>Enter p h u o n g  x a here...</option>
        	@foreach ($PhuongXas as $key => $PhuongXa)
			    <option value="{{ $key }}" {{ old('PHUONG_XA_ID_NS', optional($doanvienThanhnien)->PHUONG_XA_ID_NS) == $key ? 'selected' : '' }}>
			    	{{ $PhuongXa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHUONG_XA_ID_NS', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DANTOC_ID') ? 'has-error' : '' }}">
    <label for="DANTOC_ID" class="col-md-2 control-label">D A N T O C</label>
    <div class="col-md-10">
        <select class="form-control" id="DANTOC_ID" name="DANTOC_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DANTOC_ID', optional($doanvienThanhnien)->DANTOC_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d a n t o c</option>
        	@foreach ($Dantocs as $key => $Dantoc)
			    <option value="{{ $key }}" {{ old('DANTOC_ID', optional($doanvienThanhnien)->DANTOC_ID) == $key ? 'selected' : '' }}>
			    	{{ $Dantoc }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DANTOC_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_SV') ? 'has-error' : '' }}">
    <label for="TEN_SV" class="col-md-2 control-label">T E N  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_SV" type="text" id="TEN_SV" value="{{ old('TEN_SV', optional($doanvienThanhnien)->TEN_SV) }}" maxlength="50" placeholder="Enter t e n  s v here...">
        {!! $errors->first('TEN_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYSINH_SV') ? 'has-error' : '' }}">
    <label for="NGAYSINH_SV" class="col-md-2 control-label">N G A Y S I N H  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYSINH_SV" type="text" id="NGAYSINH_SV" value="{{ old('NGAYSINH_SV', optional($doanvienThanhnien)->NGAYSINH_SV) }}" placeholder="Enter n g a y s i n h  s v here...">
        {!! $errors->first('NGAYSINH_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIACHI_SV') ? 'has-error' : '' }}">
    <label for="DIACHI_SV" class="col-md-2 control-label">D I A C H I  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="DIACHI_SV" type="text" id="DIACHI_SV" value="{{ old('DIACHI_SV', optional($doanvienThanhnien)->DIACHI_SV) }}" maxlength="50" placeholder="Enter d i a c h i  s v here...">
        {!! $errors->first('DIACHI_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PHAI_SV') ? 'has-error' : '' }}">
    <label for="PHAI_SV" class="col-md-2 control-label">P H A I  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="PHAI_SV" type="number" id="PHAI_SV" value="{{ old('PHAI_SV', optional($doanvienThanhnien)->PHAI_SV) }}" min="-9" max="9" placeholder="Enter p h a i  s v here...">
        {!! $errors->first('PHAI_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SDT_SV') ? 'has-error' : '' }}">
    <label for="SDT_SV" class="col-md-2 control-label">S D T  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="SDT_SV" type="text" id="SDT_SV" value="{{ old('SDT_SV', optional($doanvienThanhnien)->SDT_SV) }}" maxlength="10" placeholder="Enter s d t  s v here...">
        {!! $errors->first('SDT_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('EMAIL_SV') ? 'has-error' : '' }}">
    <label for="EMAIL_SV" class="col-md-2 control-label">E M A I L  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="EMAIL_SV" type="text" id="EMAIL_SV" value="{{ old('EMAIL_SV', optional($doanvienThanhnien)->EMAIL_SV) }}" maxlength="20" placeholder="Enter e m a i l  s v here...">
        {!! $errors->first('EMAIL_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYVAODOAN_SV') ? 'has-error' : '' }}">
    <label for="NGAYVAODOAN_SV" class="col-md-2 control-label">N G A Y V A O D O A N  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYVAODOAN_SV" type="text" id="NGAYVAODOAN_SV" value="{{ old('NGAYVAODOAN_SV', optional($doanvienThanhnien)->NGAYVAODOAN_SV) }}" placeholder="Enter n g a y v a o d o a n  s v here...">
        {!! $errors->first('NGAYVAODOAN_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIVAODOAN_SV') ? 'has-error' : '' }}">
    <label for="NOIVAODOAN_SV" class="col-md-2 control-label">N O I V A O D O A N  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="NOIVAODOAN_SV" type="text" id="NOIVAODOAN_SV" value="{{ old('NOIVAODOAN_SV', optional($doanvienThanhnien)->NOIVAODOAN_SV) }}" maxlength="50" placeholder="Enter n o i v a o d o a n  s v here...">
        {!! $errors->first('NOIVAODOAN_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MATKHAU_DV') ? 'has-error' : '' }}">
    <label for="MATKHAU_DV" class="col-md-2 control-label">M A T K H A U  D V</label>
    <div class="col-md-10">
        <input class="form-control" name="MATKHAU_DV" type="text" id="MATKHAU_DV" value="{{ old('MATKHAU_DV', optional($doanvienThanhnien)->MATKHAU_DV) }}" maxlength="20" placeholder="Enter m a t k h a u  d v here...">
        {!! $errors->first('MATKHAU_DV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

