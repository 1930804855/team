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

<form role="form" action="{{url('login/logindo')}}" method="post">
	@csrf
	<b style="color:red">{{session('msg')}}</b>
	<div class="form-group">
		<label for="name">名称</label>
		<input type="text" class="form-control" name="a_name" placeholder="请输入名称">
	</div>
	<div class="form-group">
		<label for="name">密码</label>
		<input type="password" class="form-control" name="a_pwd"   placeholder="密码">
	</div>
	
	<button type="submit" class="btn btn-default">登录</button>
	<button type="submit" class="btn btn-default"><a href="{{url('login/logincreate')}}">注册</a> </button>
</form>
	
</body>
</html>