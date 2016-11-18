<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PageBook에 오신걸 환영합니다.</title>
  </head>
  <script>

    function check_insert(){
      if(!document.member_form.name.value){
          alert('이름을 입력하세요');
          document.member_form.name.focus();
          return;
      }
      if(!document.member_form.id.value){
          alert('아이디를 입력하세요');
          document.member_form.id.focus();
          return;
      }
      if(!document.member_form.pw.value){
          alert('비밀번호를 입력하세요');
          document.member_form.pw.focus();
          return;
      }
      if(!document.member_form.pw_confirm.value){
          alert('비밀번호 확인을 입력하세요');
          document.member_form.pw_confirm.focus();
          return;
      }
      if(document.member_form.pw.value != document.member_form.pw_confirm.value){
          alert('비밀번호가 서로 맞지않습니다.');
          document.member_form.pw_confirm.focus();
          return;
      }
      if(!document.member_form.birth.value){
          alert('생일을 입력하세요');
          document.member_form.birth.focus();
          return;
        }

          document.member_form.submit();
    }

    function check_login(){
      if(!document.login_form.id.value){
          alert('아이디를 입력하세요');
          document.login_form.id.focus();
          return;
      }
      if(!document.login_form.pw.value){
          alert('비밀번호를 입력하세요');
          document.login_form.pw.focus();
          return;
      }

      document.login_form.submit();
    }
  </script>

  <link rel="stylesheet" href="./css/common.css" media="screen">
  <body>
    <header id="Login_title">
      <img src="./img/title.jpg"/>
      <form action="index.php/MainController/checkLogin" name="login_form" method="post">
        <p>ID</p><input class="input" type="text" name="id">
        <p>PW</p><input class="input" type="password" name="pw">
        <input class="btn" type="button" value="로그인" onclick="check_login()">
      </form>
    </header>
    <section>
      <article class="col1">
        <p id="ment">
          Pagebook에서 친구들에게 자신의 포트폴리오를
          자랑하세요.
        </p>
        <hr>
        <img id="mark" src="./img/mark.jpg"/>
      </article>
      <article class="col2">
        <h1>회원가입</h1>
        <p>
          항상 지금처럼 무료로 즐기실 수 있습니다.
        </p>
        <hr>
        <form id="member" name="member_form" action="index.php/MainController/insertUser" method="post">
          <input class="input" type="text" name="name" placeholder="이름">
          <input class="input" type="text" name="id" placeholder="아이디">
          <input class="input" type="text" name="pw" placeholder="비밀번호">
          <input class="input" type="text" name="pw_confirm" placeholder="비밀번호 확인">
          <input class="input" type="date" name="birth">
          <br>
          <h2>남성</h2><input type="radio" name="sex" value="male" checked>
          <h2>여성</h2><input type="radio" name="sex" value="female">
          <br>
          <br>
          <input class="member_submit" type="button" value="가입하기" onclick="check_insert()">
        </form>
      </article>
    </section>
  </body>
</html>
