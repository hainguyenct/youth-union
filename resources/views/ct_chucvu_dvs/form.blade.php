
<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($ctChucvuDv)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($ctChucvuDv)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('CHUCVU_DV_ID') ? 'has-error' : '' }}">
    <label for="CHUCVU_DV_ID" class="col-md-2 control-label">C H U C V U  D V</label>
    <div class="col-md-10">
        <select class="form-control" id="CHUCVU_DV_ID" name="CHUCVU_DV_ID" required="true">
        	    <option value="" style="display: none;" {{ old('CHUCVU_DV_ID', optional($ctChucvuDv)->CHUCVU_DV_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select c h u c v u  d v</option>
        	@foreach ($ChucvuDvs as $key => $ChucvuDv)
			    <option value="{{ $key }}" {{ old('CHUCVU_DV_ID', optional($ctChucvuDv)->CHUCVU_DV_ID) == $key ? 'selected' : '' }}>
			    	{{ $ChucvuDv }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('CHUCVU_DV_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYBD_CV') ? 'has-error' : '' }}">
    <label for="NGAYBD_CV" class="col-md-2 control-label">N G A Y B D  C V</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYBD_CV" type="text" id="NGAYBD_CV" value="{{ old('NGAYBD_CV', optional($ctChucvuDv)->NGAYBD_CV) }}" placeholder="Enter n g a y b d  c v here...">
        {!! $errors->first('NGAYBD_CV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYKT_CV') ? 'has-error' : '' }}">
    <label for="NGAYKT_CV" class="col-md-2 control-label">N G A Y K T  C V</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYKT_CV" type="text" id="NGAYKT_CV" value="{{ old('NGAYKT_CV', optional($ctChucvuDv)->NGAYKT_CV) }}" placeholder="Enter n g a y k t  c v here...">
        {!! $errors->first('NGAYKT_CV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

