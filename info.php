<?php include './header.php'; ?>
<title>注册个人信息</title>
<link rel="stylesheet" type="text/css" href="css/info.css">
<script src="/public/js/info.js"></script>

  <!-- 主体部分 -->

<div class="container">
  <h1>个人信息</h1>
  <form action="">
  <div class="form-container">
    <div class="form-group">
      <label>昵称:</label>
        <input type="text" name="userName" id="userName">
    </div>
    <div class="form-group">
      <label>上传头像: </label>
        <input type="file" name="files" class="files">
        <div class="photo"></div>
    </div>
    <div class="form-group">
      <label> 手机号:</label>
        <input type="text" name="phone" class="phone">
    </div>
    <div class="form-group">
      <label>QQ:</label>
        <input type="text" name="qq" class="qq">
    </div>
    <div class="form-group">
      <label>所在城市: </label>
        <select name="province" id="province">
          <option value="ZH">浙江省</option>
          <option value="SH">上海市</option>
          <option value="BJ">北京</option>
          <option value="TJ">天津</option>
          <option value="NJ">南京</option>
        </select>
        <select name="city" id="city">
          <option value="ZH">杭州</option>
          <option value="SH">上海</option>
          <option value="BJ">北京</option>
          <option value="TJ">天津</option>
          <option value="NJ">南京</option>
        </select>
        <select name="area" id="area">
          <option value="ZH">杭州</option>
          <option value="SH">上海</option>
          <option value="BJ">北京</option>
          <option value="TJ">天津</option>
          <option value="NJ">南京</option>
        </select>
      <input type="text" name="address" class="address">
    </div>
    <div class="form-group">
        <label for=""></label>
        <input type="submit" value="保存" class="save">
    </div>
   </form>
  </div>
  </div>
  
<?php include './footer.php'; ?>