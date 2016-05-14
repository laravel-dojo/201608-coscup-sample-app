@extends('layouts.master')

@section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				建立新 Task
			</div>

			<div class="panel-body">
				<!-- 錯誤訊息顯示區塊 -->
				<div class="alert alert-danger">
					<strong>請檢查您輸入的資料！</strong>
					<br><br>
					<ul>
						<li>錯誤訊息 1</li>
						<li>錯誤訊息 2</li>
						<li>錯誤訊息 3</li>
					</ul>
				</div>

				<!-- 建立新 Task 表單 -->
				<form action="" method="POST" class="form-horizontal">

					<!-- Task 名稱 -->
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Task</label>

						<div class="col-sm-6">
							<input type="text" name="name" id="task-name" class="form-control" value="">
						</div>
					</div>

					<!-- 建立新 Task 按鈕 -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-plus"></i>建立 Task
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Tasks 清單 -->
		<div class="panel panel-default">
			<div class="panel-heading">
				所有 Task 清單
			</div>

			<div class="panel-body">
				<table class="table table-striped task-table">
					<thead>
						<tr>
							<th>Task</th>
							<th width="200">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tasks as $task)
						<tr>
							<td class="table-text">
								<div class="">{{ $task->name }}</div>
							</td>
							<td>
								<!-- 完成 Task 按鈕 -->
								<form action="" method="POST" class="form-inline">
									<button type="submit" class="btn btn-success">
										<i class="fa fa-check"></i>完成
									</button>
								</form>
								<!-- 刪除 Task 按鈕 -->
								<form action="" method="POST" class="form-inline">
									<button type="submit" class="btn btn-danger">
										<i class="fa fa-trash"></i>刪除
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
