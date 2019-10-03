
<div class="form-group {{ $errors->has('PHIEUDANHGIA_DOANVIEN_ID') ? 'has-error' : '' }}">
    <label for="PHIEUDANHGIA_DOANVIEN_ID" class="col-md-2 control-label">P H I E U D A N H G I A  D O A N V I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUDANHGIA_DOANVIEN_ID" name="PHIEUDANHGIA_DOANVIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUDANHGIA_DOANVIEN_ID', optional($chitietBauUt)->PHIEUDANHGIA_DOANVIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u d a n h g i a  d o a n v i e n</option>
        	@foreach ($PhieudanhgiaDoanviens as $key => $PhieudanhgiaDoanvien)
			    <option value="{{ $key }}" {{ old('PHIEUDANHGIA_DOANVIEN_ID', optional($chitietBauUt)->PHIEUDANHGIA_DOANVIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieudanhgiaDoanvien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUDANHGIA_DOANVIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PHIEUBAU_UUTU_ID') ? 'has-error' : '' }}">
    <label for="PHIEUBAU_UUTU_ID" class="col-md-2 control-label">P H I E U B A U  U U T U</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUBAU_UUTU_ID" name="PHIEUBAU_UUTU_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUBAU_UUTU_ID', optional($chitietBauUt)->PHIEUBAU_UUTU_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u b a u  u u t u</option>
        	@foreach ($PhieubauUutus as $key => $PhieubauUutu)
			    <option value="{{ $key }}" {{ old('PHIEUBAU_UUTU_ID', optional($chitietBauUt)->PHIEUBAU_UUTU_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieubauUutu }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUBAU_UUTU_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SOPHIEU_DONGY') ? 'has-error' : '' }}">
    <label for="SOPHIEU_DONGY" class="col-md-2 control-label">S O P H I E U  D O N G Y</label>
    <div class="col-md-10">
        <input class="form-control" name="SOPHIEU_DONGY" type="number" id="SOPHIEU_DONGY" value="{{ old('SOPHIEU_DONGY', optional($chitietBauUt)->SOPHIEU_DONGY) }}" min="-2147483648" max="2147483647" placeholder="Enter s o p h i e u  d o n g y here...">
        {!! $errors->first('SOPHIEU_DONGY', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DUYET_BAU') ? 'has-error' : '' }}">
    <label for="DUYET_BAU" class="col-md-2 control-label">D U Y E T  B A U</label>
    <div class="col-md-10">
        <input class="form-control" name="DUYET_BAU" type="text" id="DUYET_BAU" value="{{ old('DUYET_BAU', optional($chitietBauUt)->DUYET_BAU) }}" maxlength="50" placeholder="Enter d u y e t  b a u here...">
        {!! $errors->first('DUYET_BAU', '<p class="help-block">:message</p>') !!}
    </div>
</div>

