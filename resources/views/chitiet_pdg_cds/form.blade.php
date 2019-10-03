
<div class="form-group {{ $errors->has('PHIEUDANHGIA_CHIDOAN_ID') ? 'has-error' : '' }}">
    <label for="PHIEUDANHGIA_CHIDOAN_ID" class="col-md-2 control-label">P H I E U D A N H G I A  C H I D O A N</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUDANHGIA_CHIDOAN_ID" name="PHIEUDANHGIA_CHIDOAN_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUDANHGIA_CHIDOAN_ID', optional($chitietPdgCd)->PHIEUDANHGIA_CHIDOAN_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u d a n h g i a  c h i d o a n</option>
        	@foreach ($PhieudanhgiaChidoans as $key => $PhieudanhgiaChidoan)
			    <option value="{{ $key }}" {{ old('PHIEUDANHGIA_CHIDOAN_ID', optional($chitietPdgCd)->PHIEUDANHGIA_CHIDOAN_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieudanhgiaChidoan }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUDANHGIA_CHIDOAN_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIDUNG_PDG_ID') ? 'has-error' : '' }}">
    <label for="NOIDUNG_PDG_ID" class="col-md-2 control-label">N O I D U N G  P D G</label>
    <div class="col-md-10">
        <select class="form-control" id="NOIDUNG_PDG_ID" name="NOIDUNG_PDG_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NOIDUNG_PDG_ID', optional($chitietPdgCd)->NOIDUNG_PDG_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n o i d u n g  p d g</option>
        	@foreach ($NoidungPdgs as $key => $NoidungPdg)
			    <option value="{{ $key }}" {{ old('NOIDUNG_PDG_ID', optional($chitietPdgCd)->NOIDUNG_PDG_ID) == $key ? 'selected' : '' }}>
			    	{{ $NoidungPdg }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NOIDUNG_PDG_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEM_DUYET_PDGCD') ? 'has-error' : '' }}">
    <label for="DIEM_DUYET_PDGCD" class="col-md-2 control-label">D I E M  D U Y E T  P D G C D</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEM_DUYET_PDGCD" type="number" id="DIEM_DUYET_PDGCD" value="{{ old('DIEM_DUYET_PDGCD', optional($chitietPdgCd)->DIEM_DUYET_PDGCD) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m  d u y e t  p d g c d here...">
        {!! $errors->first('DIEM_DUYET_PDGCD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEM_CD_TUDANHGIA') ? 'has-error' : '' }}">
    <label for="DIEM_CD_TUDANHGIA" class="col-md-2 control-label">D I E M  C D  T U D A N H G I A</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEM_CD_TUDANHGIA" type="number" id="DIEM_CD_TUDANHGIA" value="{{ old('DIEM_CD_TUDANHGIA', optional($chitietPdgCd)->DIEM_CD_TUDANHGIA) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m  c d  t u d a n h g i a here...">
        {!! $errors->first('DIEM_CD_TUDANHGIA', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GHICHU_PDGCD') ? 'has-error' : '' }}">
    <label for="GHICHU_PDGCD" class="col-md-2 control-label">G H I C H U  P D G C D</label>
    <div class="col-md-10">
        <input class="form-control" name="GHICHU_PDGCD" type="text" id="GHICHU_PDGCD" value="{{ old('GHICHU_PDGCD', optional($chitietPdgCd)->GHICHU_PDGCD) }}" maxlength="200" placeholder="Enter g h i c h u  p d g c d here...">
        {!! $errors->first('GHICHU_PDGCD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

