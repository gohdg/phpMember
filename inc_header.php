<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>약관</title>
    <!-- 부트스트랩 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- End 부트스트랩 -->
    <?php
if (isset($js_array)) {
    foreach ($js_array as $var) {
        echo '<script src="' . $var . '"></script>' . PHP_EOL;
    }
}
?>
  </head>
  <body>
    <div class="container">
      <header
        class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"
      >
        <a
          href="/"
          class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
        >
          <img
            src="images/logo.svg"
            class="me-2"
            alt="logo"
            style="width: 2rem"
          />
          <span class="fs-4">네커라쿠배</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">Home</a>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">회사소개</a></li>
          <li class="nav-item"><a href="#" class="nav-link">회원가입</a></li>
          <li class="nav-item"><a href="#" class="nav-link">게시판</a></li>
          <li class="nav-item"><a href="#" class="nav-link">로그인</a></li>
        </ul>
      </header>