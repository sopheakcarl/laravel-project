@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{url('/admin/list_article')}}">Article</a> <a href="{{url('/admin/add_article')}}" class="current">Add Article</a> </div>
    <h1>Add Article</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Article</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/add-article') }}" name="add_article" id="add_article" novalidate="novalidate"> {{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Select Category</label>
              <div class="controls"  >
                <select name="category_id"  style="width:220px;"  >  
                </select>
              </div>
            <div>
              <div class="control-group">
                <label class="control-label">Article Name</label>
                <div class="controls">
                  <input type="text" name="article_name" id="article_name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea type="text" name="description" id="description" ></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Detail</label>
                <div class="controls">
                  <input type="text" name="detail" id="detail">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label></label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Article" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection