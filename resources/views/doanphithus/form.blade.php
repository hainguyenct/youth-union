
<div class="form-group {{ $errors->has('sinhvien_id') ? 'has-error' : '' }}">
    <label for="sinhvien_id" class="col-md-2 control-label">Sinhvien</label>
    <div class="col-md-10">
        <select class="form-control" id="sinhvien_id" name="sinhvien_id" required="true">
        	    <option value="" style="display: none;" {{ old('sinhvien_id', optional($doanphithu)->sinhvien_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select sinhvien</option>
        	@foreach ($sinhviens as $key => $sinhvien)
			    <option value="{{ $key }}" {{ old('sinhvien_id', optional($doanphithu)->sinhvien_id) == $key ? 'selected' : '' }}>
			    	{{ $sinhvien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sinhvien_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('thangnam_id') ? 'has-error' : '' }}">
    <label for="thangnam_id" class="col-md-2 control-label">Thangnam</label>
    <div class="col-md-10">
        <select class="form-control" id="thangnam_id" name="thangnam_id" required="true">
        	    <option value="" style="display: none;" {{ old('thangnam_id', optional($doanphithu)->thangnam_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select thangnam</option>
        	@foreach ($thangnams as $key => $thangnam)
			    <option value="{{ $key }}" {{ old('thangnam_id', optional($doanphithu)->thangnam_id) == $key ? 'selected' : '' }}>
			    	{{ $thangnam }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('thangnam_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ngaydong') ? 'has-error' : '' }}">
    <label for="ngaydong" class="col-md-2 control-label">Ngaydong</label>
    <div class="col-md-10">
        <input class="form-control" name="ngaydong" type="text" id="ngaydong" value="{{ old('ngaydong', optional($doanphithu)->ngaydong) }}" placeholder="Enter ngaydong here...">
        {!! $errors->first('ngaydong', '<p class="help-block">:message</p>') !!}
    </div>
</div>

