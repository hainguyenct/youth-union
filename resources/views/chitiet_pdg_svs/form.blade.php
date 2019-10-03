
<div class="form-group {{ $errors->has('PHIEUDANHGIA_SINHVIEN_ID') ? 'has-error' : '' }}">
    <label for="PHIEUDANHGIA_SINHVIEN_ID" class="col-md-2 control-label">P H I E U D A N H G I A  S I N H V I E N</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUDANHGIA_SINHVIEN_ID" name="PHIEUDANHGIA_SINHVIEN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUDANHGIA_SINHVIEN_ID', optional($chitietPdgSv)->PHIEUDANHGIA_SINHVIEN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u d a n h g i a  s i n h v i e n</option>
        	@foreach ($PhieudanhgiaSinhviens as $key => $PhieudanhgiaSinhvien)
			    <option value="{{ $key }}" {{ old('PHIEUDANHGIA_SINHVIEN_ID', optional($chitietPdgSv)->PHIEUDANHGIA_SINHVIEN_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieudanhgiaSinhvien }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUDANHGIA_SINHVIEN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIDUNG_PDG_ID') ? 'has-error' : '' }}">
    <label for="NOIDUNG_PDG_ID" class="col-md-2 control-label">N O I D U N G  P D G</label>
    <div class="col-md-10">
        <select class="form-control" id="NOIDUNG_PDG_ID" name="NOIDUNG_PDG_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NOIDUNG_PDG_ID', optional($chitietPdgSv)->NOIDUNG_PDG_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n o i d u n g  p d g</option>
        	@foreach ($NoidungPdgs as $key => $NoidungPdg)
			    <option value="{{ $key }}" {{ old('NOIDUNG_PDG_ID', optional($chitietPdgSv)->NOIDUNG_PDG_ID) == $key ? 'selected' : '' }}>
			    	{{ $NoidungPdg }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NOIDUNG_PDG_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEM_DUYET_PDGSV') ? 'has-error' : '' }}">
    <label for="DIEM_DUYET_PDGSV" class="col-md-2 control-label">D I E M  D U Y E T  P D G S V</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEM_DUYET_PDGSV" type="number" id="DIEM_DUYET_PDGSV" value="{{ old('DIEM_DUYET_PDGSV', optional($chitietPdgSv)->DIEM_DUYET_PDGSV) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m  d u y e t  p d g s v here...">
        {!! $errors->first('DIEM_DUYET_PDGSV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEM_SV_TUDANHGIA') ? 'has-error' : '' }}">
    <label for="DIEM_SV_TUDANHGIA" class="col-md-2 control-label">D I E M  S V  T U D A N H G I A</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEM_SV_TUDANHGIA" type="number" id="DIEM_SV_TUDANHGIA" value="{{ old('DIEM_SV_TUDANHGIA', optional($chitietPdgSv)->DIEM_SV_TUDANHGIA) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m  s v  t u d a n h g i a here...">
        {!! $errors->first('DIEM_SV_TUDANHGIA', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GHICHU_PDGSV') ? 'has-error' : '' }}">
    <label for="GHICHU_PDGSV" class="col-md-2 control-label">G H I C H U  P D G S V</label>
    <div class="col-md-10">
        <input class="form-control" name="GHICHU_PDGSV" type="text" id="GHICHU_PDGSV" value="{{ old('GHICHU_PDGSV', optional($chitietPdgSv)->GHICHU_PDGSV) }}" maxlength="200" placeholder="Enter g h i c h u  p d g s v here...">
        {!! $errors->first('GHICHU_PDGSV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

