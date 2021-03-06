@extends('admin/layouts/layout')
@section('title', '管理官展示')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>登录</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form role="form" action="{{url('login/loginupdate/'.$adminInfo->a_id)}}" method="post">
	@csrf
	<!-- <b style="color:red">{{session('msg')}}</b> -->
	<div class="form-group">
		<label for="name">名称</label>
		<input type="text" class="form-control" name="a_name" value="{{$adminInfo->a_name}}">
	</div>
	<div class="form-group">
		<label for="name">密码</label>
		<input type="password" class="form-control" name="a_pwd"  value="{{$adminInfo->a_pwd}}">
	</div>
	<div class="form-group">
		<label for="name">等级</label>
		<select name="a_level" id="">
			<option value="1" @if($adminInfo->a_level==1)selected @endif>系统管理员</option>
			<option value="2" @if($adminInfo->a_level==2)selected @endif>主管</option>
			<option value="3" @if($adminInfo->a_level==3)selected @endif>业务员</option>
		</select>
	</div>
	
	<button type="submit" class="btn btn-default">编辑</button>
	<!-- <button type="submit" class="btn btn-default"><a href="{{url('login/logincreate')}}">添加</a> </button> -->
</form>
	
</body>
</html>
@endsection