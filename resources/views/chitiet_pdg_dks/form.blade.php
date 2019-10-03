
<div class="form-group {{ $errors->has('PHIEUDANHGIA_DOANKHOA_ID') ? 'has-error' : '' }}">
    <label for="PHIEUDANHGIA_DOANKHOA_ID" class="col-md-2 control-label">P H I E U D A N H G I A  D O A N K H O A</label>
    <div class="col-md-10">
        <select class="form-control" id="PHIEUDANHGIA_DOANKHOA_ID" name="PHIEUDANHGIA_DOANKHOA_ID" required="true">
        	    <option value="" style="display: none;" {{ old('PHIEUDANHGIA_DOANKHOA_ID', optional($chitietPdgDk)->PHIEUDANHGIA_DOANKHOA_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select p h i e u d a n h g i a  d o a n k h o a</option>
        	@foreach ($PhieudanhgiaDoankhoas as $key => $PhieudanhgiaDoankhoa)
			    <option value="{{ $key }}" {{ old('PHIEUDANHGIA_DOANKHOA_ID', optional($chitietPdgDk)->PHIEUDANHGIA_DOANKHOA_ID) == $key ? 'selected' : '' }}>
			    	{{ $PhieudanhgiaDoankhoa }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('PHIEUDANHGIA_DOANKHOA_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIDUNG_PDG_ID') ? 'has-error' : '' }}">
    <label for="NOIDUNG_PDG_ID" class="col-md-2 control-label">N O I D U N G  P D G</label>
    <div class="col-md-10">
        <select class="form-control" id="NOIDUNG_PDG_ID" name="NOIDUNG_PDG_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NOIDUNG_PDG_ID', optional($chitietPdgDk)->NOIDUNG_PDG_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n o i d u n g  p d g</option>
        	@foreach ($NoidungPdgs as $key => $NoidungPdg)
			    <option value="{{ $key }}" {{ old('NOIDUNG_PDG_ID', optional($chitietPdgDk)->NOIDUNG_PDG_ID) == $key ? 'selected' : '' }}>
			    	{{ $NoidungPdg }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NOIDUNG_PDG_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEM_DUYET_PDGDK') ? 'has-error' : '' }}">
    <label for="DIEM_DUYET_PDGDK" class="col-md-2 control-label">D I E M  D U Y E T  P D G D K</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEM_DUYET_PDGDK" type="number" id="DIEM_DUYET_PDGDK" value="{{ old('DIEM_DUYET_PDGDK', optional($chitietPdgDk)->DIEM_DUYET_PDGDK) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m  d u y e t  p d g d k here...">
        {!! $errors->first('DIEM_DUYET_PDGDK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEM_DK_TUDANHGIA') ? 'has-error' : '' }}">
    <label for="DIEM_DK_TUDANHGIA" class="col-md-2 control-label">D I E M  D K  T U D A N H G I A</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEM_DK_TUDANHGIA" type="number" id="DIEM_DK_TUDANHGIA" value="{{ old('DIEM_DK_TUDANHGIA', optional($chitietPdgDk)->DIEM_DK_TUDANHGIA) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m  d k  t u d a n h g i a here...">
        {!! $errors->first('DIEM_DK_TUDANHGIA', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GHICHU_PDGDK') ? 'has-error' : '' }}">
    <label for="GHICHU_PDGDK" class="col-md-2 control-label">G H I C H U  P D G D K</label>
    <div class="col-md-10">
        <input class="form-control" name="GHICHU_PDGDK" type="text" id="GHICHU_PDGDK" value="{{ old('GHICHU_PDGDK', optional($chitietPdgDk)->GHICHU_PDGDK) }}" maxlength="200" placeholder="Enter g h i c h u  p d g d k here...">
        {!! $errors->first('GHICHU_PDGDK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

