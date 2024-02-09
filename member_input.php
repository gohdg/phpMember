<?php
// if(!isset($_POST['chk']) || $_POST['chk'] !=1) {
//     die("
//     <script>
//     alert('약관등을 동의하시고 접속하세요');
//     self.location.href ='./stipulation.php';
//     </script>
//     ");
// }
// print_r($_POST);


include "inc_header.php";
?>
<main class="w-50 mx-auto border rounded-5 p-5 ">
    <h1 class="text-center">회원가입</h1>
    <div class="form-group d-flex gap-2 align-items-end ">
        <div>
        <label for="f_id" class="form-label">아이디</label>
        <input type="text" id="f_id" class="form-control" placeholder="아이디를 입력해 주세요.">
        </div>
        <button class="btn btn-secondary">아이디 중복확인</button>
    </div>

    <div class="form-group mt-3 d-flex gap-2 justify-content-between ">
        <div class=" flex-grow-1">
        <label for="f_password" class="form-label">비밀번호</label>
        <input type="password" id="f_password" class="form-control" placeholder="비밀번호를 입력해 주세요.">
        </div>
        <div class=" flex-grow-1">
        <label for="f_password2" class="form-label">비밀번호 확인</label>
        <input type="password" id="f_password2" class="form-control" placeholder="비밀번호를 입력해 주세요.">
        </div>        
    </div>

    <div class="form-group mt-3 d-flex gap-2 align-items-end ">
        <div class=" flex-grow-1">
        <label for="f_email" class="form-label">이메일</label>
        <input type="text" id="f_email" class="form-control" placeholder="이메일을 입력해 주세요.">
        </div>
        <button class="btn btn-secondary">이메일 중복확인</button>
    </div>

    <div class="form-group mt-3 d-flex gap-2 align-items-end">
        <div>
            <label for="f_zipcode">우편번호</label>
            <input type="text" name="zipcode" id="zipcode" class="form-control" maxlength="5" minlength="5">
        </div>
        <button class="btn btn-secondary">우편번호찾기</button>
    </div>

    <div class="form-group mt-3 d-flex gap-2 justify-content-between flex-column ">
        <div class=" flex-grow-1">
        <label for="f_addr1" class="form-label">주소</label>
        <input type="text" id="f_addr1" class="form-control" placeholder="">
        </div>
        <div class=" flex-grow-1">
        <label for="f_addr2" class="form-label">상세주소</label>
        <input type="text" id="f_addr2" class="form-control" placeholder="상세주소를 입력해 주세요.">
        </div>        
    </div>

    <div class="mt-3 d-flex gap-5">
        <div>
            <input type="file" name="profile" class="form-control">
        </div>
        <img src="images/noavatar.png" alt="profile image" class="w-25">
    </div>

    <div class="mt-3 d-flex gap-2">
        <button class="btn btn-primary w-50">가입확인</button>
        <button class="btn btn-secondary w-50">가입취소</button>
    </div>

</main>

<?php
include 'inc_footer.php';
?>