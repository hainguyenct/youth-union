
<div class="form-group {{ $errors->has('DOANVIEN_THANHNIEN_ID') ? 'has-error' : '' }}">
    <label for="DOANVIEN_THANHNIEN_ID" class="col-md-2 control-label">D O A N V I E N  T H A N H N I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="DOANVIEN_THANHNIEN_ID" name="DOANVIEN_THANHNIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('DOANVIEN_THANHNIEN_ID', optional($chitietKtkl)->DOANVIEN_THANHNIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select d o a n v i e n  t h a n h n i e n</option>
        	@foreach ($DoanvienThanhniens as $key => $DoanvienThanhnien)
			    <option value="{{ $key }}" {{ old('DOANVIEN_THANHNIEN_ID', optional($chitietKtkl)->DOANVIEN_THANHNIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $DoanvienThanhnien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('DOANVIEN_THANHNIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('KHENTHUONG_KYLUAT_ID') ? 'has-error' : '' }}">
    <label for="KHENTHUONG_KYLUAT_ID" class="col-md-2 control-label">K H E N T H U O N G  K Y L U A T</label>
    <div class="col-md-10">
        <select class="form-control" id="KHENTHUONG_KYLUAT_ID" name="KHENTHUONG_KYLUAT_ID" required="true">
        	    <option value="" style="display: none;" {{ old('KHENTHUONG_KYLUAT_ID', optional($chitietKtkl)->KHENTHUONG_KYLUAT_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select k h e n t h u o n g  k y l u a t</option>
        	@foreach ($KhenthuongKyluats as $key => $KhenthuongKyluat)
			    <option value="{{ $key }}" {{ old('KHENTHUONG_KYLUAT_ID', optional($chitietKtkl)->KHENTHUONG_KYLUAT_ID) == $key ? 'selected' : '' }}>
			    	{{ $KhenthuongKyluat }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('KHENTHUONG_KYLUAT_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIDUNG_KTKL') ? 'has-error' : '' }}">
    <label for="NOIDUNG_KTKL" class="col-md-2 control-label">N O I D U N G  K T K L</label>
    <div class="col-md-10">
        <input class="form-control" name="NOIDUNG_KTKL" type="text" id="NOIDUNG_KTKL" value="{{ old('NOIDUNG_KTKL', optional($chitietKtkl)->NOIDUNG_KTKL) }}" maxlength="200" placeholder="Enter n o i d u n g  k t k l here...">
        {!! $errors->first('NOIDUNG_KTKL', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYBATDAU') ? 'has-error' : '' }}">
    <label for="NGAYBATDAU" class="col-md-2 control-label">N G A Y B A T D A U</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYBATDAU" type="text" id="NGAYBATDAU" value="{{ old('NGAYBATDAU', optional($chitietKtkl)->NGAYBATDAU) }}" placeholder="Enter n g a y b a t d a u here...">
        {!! $errors->first('NGAYBATDAU', '<p class="help-block">:message</p>') !!}
    </div>
</div>

