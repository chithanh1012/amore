@extends('layouts.admin')

@section('title', 'Page Title')

@section('panel-heading', 'Amore - Home page')

@section('content')
<!-- Right labels -->
<form class="form-horizontal" action="#" role="form">
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-paragraph-right2"></i> Right aligned labels</h6></div>
        <div class="panel-body">

	        <div class="form-group">
	            <label class="col-sm-2 control-label text-right">Input field:</label>
	            <div class="col-sm-10">
	            	<input type="text" class="form-control">
	            </div>
	        </div>
	        
	        <div class="form-group">
	            <label class="col-sm-2 control-label text-right">Password:</label>
	            <div class="col-sm-10">
	            	<input type="password" class="form-control">
	            </div>
	        </div>
	        
	        <div class="form-group">
	            <label class="col-sm-2 control-label text-right">With placeholder:</label>
	            <div class="col-sm-10">
	            	<input type="text" class="form-control" placeholder="placeholder">
	            </div>
	        </div>

	        <div class="form-group">
	            <label class="col-sm-2 control-label text-right">Block helpers:</label>
	            <div class="col-sm-10">
	                <div class="row">
	                	<div class="col-sm-4">
	                    	<input type="text" class="form-control">
	                    	<span class="help-block">Left aligned helper</span>
	                    </div>
	                	<div class="col-sm-4">
	                    	<input type="text" class="form-control">
	                    	<span class="help-block text-center">Centered helper</span>
	                    </div>
	                	<div class="col-sm-4">
	                    	<input type="text" class="form-control">
	                    	<span class="help-block text-right">Right aligned helper</span>
	                    </div>
	            	</div>
	            </div>
	        </div>
	        
	        <div class="form-group">
	            <label class="col-sm-2 control-label text-right">Textarea:</label>
	            <div class="col-sm-10">
	            	<textarea rows="5" cols="5" class="form-control"></textarea>
	            </div>
	        </div>

            <div class="form-actions text-right">
            	<input type="submit" value="Submit form" class="btn btn-primary">
            </div>

	    </div>
	</div>
</form>
<!-- /right labels -->
@endsection