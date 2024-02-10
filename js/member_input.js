document.addEventListener("DOMContentLoaded", () => {
  const btn_id_check = document.querySelector("#btn_id_check");
  const f_id = document.querySelector("#f_id");

  if (btn_id_check) {
    btn_id_check.addEventListener("click", async () => {
      if (!f_id.value) {
        alert("아이디를 입력하세요");
        return false;
      } else {
        // 아이디 체크
        // 어떻게 php의 메서드를 사용하지? js에서
        // AJAX 사용하세요.. Fetch는?
        try {
          const data = new FormData();
          data.set("id", f_id.value);
          data.set("mode", "id_check");

          const res = await fetch("./api/member_process.php", {
            method: "POST",
            body: data,
          });

          //   console.log(res);

          if (res.ok) {
            const resData = await res.json();

            if (resData.result == "success") {
              alert("사용이 가능한 아이디입니다.");
            } else {
              alert("이미 사용중인 아이디입니다. 다른 아이디를 입력해 주세요.");
              f_id.value = "";
              f_id.focus();
            }
          }
        } catch (error) {
          console.log(error);
        }
      }
    });
  }
});
