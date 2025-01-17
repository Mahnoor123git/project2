@extends('admin.layouts.master')
@section('content')
<div class="content p-4">
    <h2 class="mb-4" style="text-transform: uppercase;">Create Branch Agent
        <a href="{{ route('branchmanager.index') }}" class="btn btn-primary btn-md float-right">
            <i class="fa fa-list"></i>   View Branch Agent
        </a>
    </h2>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('branchmanager.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="branch_id" style="text-transform: uppercase;"><strong>Branch Name&nbsp;<span class="mark">*</span></strong></label>
                        <select class="form-control form-control-lg" name="branch_id">
                            @foreach($branchList as $branch)
                            <option value="{{ $branch->id }}" {{ old('branch_id')==$branch->id ? 'selected' : '' }}>{{ $branch->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="name" style="text-transform: uppercase;"><strong>Name&nbsp;<span class="mark">*</span></strong></label>
                        <input class="form-control form-control-lg mb-3" type="text" name="name"  value="{{ old('name') }}" placeholder="Branch Agent Name">
                    </div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="form-group">
                        <label for="email" style="text-transform: uppercase;"><strong>Email&nbsp;<span class="mark">*</span></strong></label>
                        <input class="form-control form-control-lg mb-3" type="email" name="email"  value="{{ old('email') }}" placeholder="Branch Agent Email">
                    </div>
                </div>
                <div class="col-md-12 container-fluid">
                    <div class="form-group">
                        <label for="phone" style="text-transform: uppercase;"><strong>Phone</strong></label>
                        <input class="form-control form-control-lg mb-3" type="text" name="phone"  value="{{ old('phone') }}" placeholder="Branch Agent Phone">
                    </div>
                </div>
                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="password" style="text-transform: uppercase;"><strong>Password&nbsp;<span class="mark">*</span></strong></label>
                        <input type="password" class="form-control form-control-lg mb-3"  id="password" name="password" placeholder="Branch Agent Password">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status" style="text-transform: uppercase;"><strong>Status</strong></label>
                        <input type="checkbox" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Active" data-off="Inactive" data-toggle="toggle" name="status" {{ old('status')=='on' ? 'checked' : '' }}>
                    </div>
                </div> 
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Create New Agent</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#branchManager").addClass("show");
    $("#branchManager li:nth-child(1)").addClass("active");
</script>
@endsection