@extends('master.app')
@section('title','Task Create')
@section('head-script')
<script src="{{asset('js/services/user.js')}}"></script>
<script src="{{asset('js/services/admin.js')}}"></script>
<script src="{{asset('js/services/task.js')}}"></script>
<script src="{{asset('js/task/create.js')}}"></script>
@endsection
@section('content')
    <div data-ng-controller="TaskCreate" class="row">
        <div class="col-sm-3">
            <h4>Create Task</h4>
        </div>
        <div class="col-sm-9">
            <form name="frmTask" class="form">
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" data-ng-model="objTask.strTitle" required>
                    <span class="text-danger" data-ng-if="frmTask.title.$invalid && frmTask.title.$touched">
                        This field is required
                    </span>
                    <span class="text-danger" data-ng-if="!frmTask.title.$invalid && frmTask.title.$touched && objTask.strTitle.length < 4">
                        Task title must contain at least 4 chars.
                    </span>

                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" data-ng-model="objTask.strDescription" required>
                    </textarea>
                    <span class="text-danger" data-ng-if="frmTask.description.$invalid && frmTask.description.$touched">
                        This field is required
                    </span>
                </div>
                <div class="mb-3">
                    <label for="slcUserId">Assign to user</label>
                    <select name="slcUserId" class="form-select" data-ng-model="objTask.intUserID" required
                    data-ng-options="objUser.id as objUser.name for objUser in arrUser">
                        <option selected>Select User</option>
                    </select>
                    <span class="text-danger" data-ng-if="frmTask.slcUserId.$invalid && frmTask.slcUserId.$touched">
                        This field is required
                    </span>
                </div>
                <div class="mb-3">
                    <label for="slcAdminId">By Admin</label>
                    <select name="slcAdminId" class="form-select"  data-ng-model="objTask.intAdminID" required
                    data-ng-options="objAdmin.id as objAdmin.name for objAdmin in arrAdmin">
                        <option selected>Select Admin</option>
                    </select>
                    <span class="text-danger" data-ng-if="frmTask.slcAdminId.$invalid && frmTask.slcAdminId.$touched">
                        This field is required
                    </span>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-success" data-ng-disabled="frmTask.$invalid || objTask.strTitle.length < 4" data-ng-click="Save()">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
