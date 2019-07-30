@extends('layouts.profile_layout')
@section('title', 'profile')
@section('content')
@if ($errors->any())
<div class="errors">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@isset ($status)
<div class="complete">
  <p>バリデーションを通過しました</p>
</div>
@endisset
<form method="POST" action="register" enctype="multipart/form-data">
  @csrf
  <table>
    <thead>
      <h3>プロフィール入力欄</h3>
    </thead>
    <tbody>
      <tr>
        <td>ユーザー名</td>
        <td><input type="text" id="user_name" name="user_name" value=""></td>
      </tr>
      <tr>
        <div class="col">
          <td>誕生日</td>
          <td><span>年</span><select id="select_year" name="select_year" class="form-control select select-primary">
              <option value="">--</option>
              <?php foreach (range(1945, 2019) as $year) : ?>
                <option value="<?= $year ?>"><?= $year ?></option>
              <?php endforeach; ?>
            </select>
            <span>月</span>
            <select id="select_month" name="select_month" class="form-control select select-primary">
              <option value="">--</option>
              <?php foreach (range(1, 12) as $month) : ?>
                <option value="<?= str_pad($month, 2, 0, STR_PAD_LEFT) ?>"><?= $month ?></option>
              <?php endforeach; ?>
            </select>
            <span>日</span>
            <select id="select_day" name="select_day" class="form-control select select-primary">
              <option value="">--</option>
              <?php foreach (range(1, 31) as $day) : ?>
                <option value="<?= str_pad($day, 2, 0, STR_PAD_LEFT) ?>"><?= $day ?></option>
              <?php endforeach; ?>
            </select></td>
        </div>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <input type="radio" id="male" value="男">男
          <input type="radio" id="female" value="女">女
        </td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><input type="number" name="age" id="age" value=""></td>
      </tr>
      <tr>
        <td>趣味</td>
        <td><textarea id="hobby" name="hobby" rows="10" cols="50"></textarea></td>
      </tr>
      <tr>
        <td>経歴</td>
        <td><textarea id="career" name="career" rows="10" cols="50"></textarea></td>
      </tr>
      <tr>
        <td>プロフィール画像</td>
        <td><input type="file" name="photo"></td>
      </tr>
    </tbody>
  </table>

  <p>
    <input type="button" class="btn btn-block btn-lg btn-primary submit_btn" id="submit_btn" value="登録">
  </p>
</form>
<script>
  $(function() {
    $('#submit_btn').on('click', function() {
      $('form').submit();
    });
    $(function() {
      // $("#datepicker").datepicker({
      //   dateFormat: "yy-mm-dd"
      // });
      $('#select_year').select2();
      $('#select_month').select2();
      $('#select_day').select2();
    });
  });
</script>
@endsection