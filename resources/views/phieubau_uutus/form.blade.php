
<div class="form-group {{ $errors->has('CHIDOAN_ID') ? 'has-error' : '' }}">
    <label for="CHIDOAN_ID" class="col-md-2 control-label">C H I D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="CHIDOAN_ID" name="CHIDOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('CHIDOAN_ID', optional($phieubauUutu)->CHIDOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select c h i d o a n</option>
        	@foreach ($Chidoans as $key => $Chidoan)
			    <option value="{{ $key }}" {{ old('CHIDOAN_ID', optional($phieubauUutu)->CHIDOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $Chidoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('CHIDOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SOPHIEU_TONG') ? 'has-error' : '' }}">
    <label for="SOPHIEU_TONG" class="col-md-2 control-label">S O P H I E U  T O N G</label>
    <div class="col-md-10">
        <input class="form-control" name="SOPHIEU_TONG" type="number" id="SOPHIEU_TONG" value="{{ old('SOPHIEU_TONG', optional($phieubauUutu)->SOPHIEU_TONG) }}" min="-2147483648" max="2147483647" placeholder="Enter s o p h i e u  t o n g here...">
        {!! $errors->first('SOPHIEU_TONG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAY_BAU') ? 'has-error' : '' }}">
    <label for="NGAY_BAU" class="col-md-2 control-label">N G A Y  B A U</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAY_BAU" type="text" id="NGAY_BAU" value="{{ old('NGAY_BAU', optional($phieubauUutu)->NGAY_BAU) }}" placeholder="Enter n g a y  b a u here...">
        {!! $errors->first('NGAY_BAU', '<p class="help-block">:message</p>') !!}
    </div>
</div>

