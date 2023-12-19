<form action="{{ route('dokter.upload') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" name="file" id="file" accept="image/*">
  <button type="submit">Diagnose</button>
</form>