<div class="mb-3">
    <label>Hari</label>
    <input type="text" name="hari" value="{{ old('hari', $makanan->hari ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Sarapan</label>
    <input type="text" name="sarapan" value="{{ old('sarapan', $makanan->sarapan ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Makan Siang</label>
    <input type="text" name="makan_siang" value="{{ old('makan_siang', $makanan->makan_siang ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Makan Malam</label>
    <input type="text" name="makan_malam" value="{{ old('makan_malam', $makanan->makan_malam ?? '') }}" class="form-control" required>
</div>
<button class="btn btn-primary">Simpan</button>