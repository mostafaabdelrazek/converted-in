@extends('master.app')
@section('title','Task Listing')
@section('head-script')
<script src="{{asset('js/services/task.js')}}"></script>
<script src="{{asset('js/task/list.js')}}"></script>
@endsection
@section('content')
<div ng-controller="TaskList">
<div class="alert alert-info mt-4" role="alert" data-ng-if="arrData.data.length == 0">
  No tasks found.
</div>
<nav>
  <ul class="pagination pagination-sm justify-content-end" data-ng-if="arrData.data.length > 0">
    <li role="button" class="page-item  [{arrData.current_page == 1? 'disabled' : ''}]"><a class="page-link" data-ng-click="List(1)">first</a></li>
    <li role="button" class="page-item " data-ng-if="arrData.prev_page_url != null"><a class="page-link" data-ng-click="List(arrData.current_page-1)">[{arrData.current_page-1}]</a></li>
    <li role="button" class="page-item  active"><a class="page-link" href="#">[{arrData.current_page}]</a></li>
    <li role="button" class="page-item " data-ng-if="arrData.next_page_url != null"><a class="page-link" data-ng-click="List(arrData.current_page+1)">[{arrData.current_page+1}]</a></li>
    <li role="button" class="page-item  [{arrData.last_page == arrData.current_page? 'disabled': ''}]"><a class="page-link" data-ng-click="List(arrData.last_page)">last</a></li>
  </ul>
</nav>
<table class="table table-striped" data-ng-if="arrData.data.length > 0">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Assigned Name</th>
      <th scope="col">Admin</th>
    </tr>
  </thead>
  <tbody>
    <tr data-ng-repeat="objTask in arrData.data ">
      <td>[{objTask.title}]</td>
      <td width="60%">[{objTask.description}]</td>
      <td>[{objTask.user.name}]</td>
      <td>[{objTask.admin.name}]</td>
    </tr>
  </tbody>
</table>

</div>
@endsection
