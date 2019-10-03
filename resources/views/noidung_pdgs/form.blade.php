
<div class="form-group {{ $errors->has('NOIDUNG_CHA_PDG_ID') ? 'has-error' : '' }}">
    <label for="NOIDUNG_CHA_PDG_ID" class="col-md-2 control-label">N O I D U N G  C H A  P D G</label>
    <div class="col-md-10">
        <select class="form-control" id="NOIDUNG_CHA_PDG_ID" name="NOIDUNG_CHA_PDG_ID">
            <option value="">--Không có nội dung cha--</option>
            <option value="" style="display: none;" {{ old('NOIDUNG_CHA_PDG_ID', optional($noidungPdg)->NOIDUNG_CHA_PDG_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n o i d u n g  c h a  p d g</option>
            @foreach ($ParentNoidungPdgs as $key => $ParentNoidungPdg)
            <option value="{{ $key }}" {{ old('NOIDUNG_CHA_PDG_ID', optional($noidungPdg)->NOIDUNG_CHA_PDG_ID) == $key ? 'selected' : '' }}>
                {{ $ParentNoidungPdg }}
            </option>
            @endforeach
        </select>
        
        {!! $errors->first('NOIDUNG_CHA_PDG_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('LOAI_NOIDUNG_PDG_ID') ? 'has-error' : '' }}">
    <label for="LOAI_NOIDUNG_PDG_ID" class="col-md-2 control-label">L O A I  N O I D U N G  P D G</label>
    <div class="col-md-10">
        <select class="form-control" id="LOAI_NOIDUNG_PDG_ID" name="LOAI_NOIDUNG_PDG_ID" required="true">
           <option value="" style="display: none;" {{ old('LOAI_NOIDUNG_PDG_ID', optional($noidungPdg)->LOAI_NOIDUNG_PDG_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select l o a i  n o i d u n g  p d g</option>
           @foreach ($LoaiNoidungPdgs as $key => $LoaiNoidungPdg)
           <option value="{{ $key }}" {{ old('LOAI_NOIDUNG_PDG_ID', optional($noidungPdg)->LOAI_NOIDUNG_PDG_ID) == $key ? 'selected' : '' }}>
            {{ $LoaiNoidungPdg }}
        </option>
        @endforeach
    </select>

    {!! $errors->first('LOAI_NOIDUNG_PDG_ID', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group {{ $errors->has('TEN_NDPDG') ? 'has-error' : '' }}">
    <label for="TEN_NDPDG" class="col-md-2 control-label">T E N  N D P D G</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_NDPDG" type="text" id="TEN_NDPDG" value="{{ old('TEN_NDPDG', optional($noidungPdg)->TEN_NDPDG) }}" maxlength="50" placeholder="Enter t e n  n d p d g here...">
        {!! $errors->first('TEN_NDPDG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIDUNG_NDPDG') ? 'has-error' : '' }}">
    <label for="NOIDUNG_NDPDG" class="col-md-2 control-label">N O I D U N G  N D P D G</label>
    <div class="col-md-10">
        <input class="form-control" name="NOIDUNG_NDPDG" type="text" id="NOIDUNG_NDPDG" value="{{ old('NOIDUNG_NDPDG', optional($noidungPdg)->NOIDUNG_NDPDG) }}" maxlength="200" placeholder="Enter n o i d u n g  n d p d g here...">
        {!! $errors->first('NOIDUNG_NDPDG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMTOIDA_NDPDG') ? 'has-error' : '' }}">
    <label for="DIEMTOIDA_NDPDG" class="col-md-2 control-label">D I E M T O I D A  N D P D G</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMTOIDA_NDPDG" type="number" id="DIEMTOIDA_NDPDG" value="{{ old('DIEMTOIDA_NDPDG', optional($noidungPdg)->DIEMTOIDA_NDPDG) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m t o i d a  n d p d g here...">
        {!! $errors->first('DIEMTOIDA_NDPDG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('KIEU_DULIEU_ID') ? 'has-error' : '' }}">
    <label for="KIEU_DULIEU_ID" class="col-md-2 control-label">K I E U  D U L I E U</label>
    <div class="col-md-10">
        <select class="form-control" id="KIEU_DULIEU_ID" name="KIEU_DULIEU_ID" required="true">
           <option value="" style="display: none;" {{ old('KIEU_DULIEU_ID', optional($noidungPdg)->KIEU_DULIEU_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select k i e u  d u l i e u</option>
           @foreach ($KieuDulieus as $key => $KieuDulieu)
           <option value="{{ $key }}" {{ old('KIEU_DULIEU_ID', optional($noidungPdg)->KIEU_DULIEU_ID) == $key ? 'selected' : '' }}>
            {{ $KieuDulieu }}
        </option>
        @endforeach
    </select>

    {!! $errors->first('KIEU_DULIEU_ID', '<p class="help-block">:message</p>') !!}
</div>
</div>

