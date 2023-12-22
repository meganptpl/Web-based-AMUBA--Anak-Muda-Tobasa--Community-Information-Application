@extends('layouts.app')

@section('content')
<div id="content_list">
    <div class="border-success">
        <div class="card-header bg-success text-white">
            <strong><i class="fa fa-database"></i>Daftar Sumbangan</strong>
        </div>
        <div class="card-body">
    
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive">
                <div id="list_result"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom_js')
<script>
    load_list(1);
    $(document).ready(function(){
        $(document).on('click', '.page-link', function(event){
            event.preventDefault(); 
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page)
        {
            $.ajax({
            url:"?page="+page,
            success:function(data){
                $('#list_result').html(data);
            }
            });
        }
    });
</script>
@endsection

