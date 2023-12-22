@extends('layouts.app')

@section('content')
<div id="content_list">
  <div class="container">
      <center><h2 style="font-family: 'Outfit', sans-serif;">Galeri Komunitas AMUBA</h2></center><br>
      <div id="list_result"></div>
</div>
<div class="container">
  <footer class="py-3 my-4 ">
      <div class="border-bottom" ></div><br>
      <p class="text-center text-muted ">&copy; Komunitas AMUBA 2022</p>
  </footer>
</div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
  load_list(1);
</script>
@endsection

