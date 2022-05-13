@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
             <div class="container-fluid">
                 <style>
                     div.dataTables_wrapper div.dataTables_length label{
                         color: #fff;
                     }
                     div.dataTables_wrapper div.dataTables_info{
                         color: #fff;
                     }
                     div.dataTables_wrapper div.dataTables_filter label{
                         color: #fff;
                     }
                 </style>
                @livewire('preventivas')
             </div>
        </div>
    </div>
</div>
@endsection
