
<div class="form-group {{ $errors->has('TINH_THANHPHO_ID') ? 'has-error' : '' }}">
    <label for="TINH_THANHPHO_ID" class="col-md-2 control-label">T I N H  T H A N H P H O</label>
    <div class="col-md-10">
        <select class="form-control" id="TINH_THANHPHO_ID" name="TINH_THANHPHO_ID" required="true">
        	    <option value="" style="display: none;" {{ old('TINH_THANHPHO_ID', optional($quanHuyen)->TINH_THANHPHO_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select t i n h  t h a n h p h o</option>
        	@foreach ($TinhThanhphos as $key => $TinhThanhpho)
			    <option value="{{ $key }}" {{ old('TINH_THANHPHO_ID', optional($quanHuyen)->TINH_THANHPHO_ID) == $key ? 'selected' : '' }}>
			    	{{ $TinhThanhpho }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('TINH_THANHPHO_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TEN_QD') ? 'has-error' : '' }}">
    <label for="TEN_QD" class="col-md-2 control-label">T E N  Q D</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_QD" type="text" id="TEN_QD" value="{{ old('TEN_QD', optional($quanHuyen)->TEN_QD) }}" maxlength="50" placeholder="Enter t e n  q d here...">
        {!! $errors->first('TEN_QD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

