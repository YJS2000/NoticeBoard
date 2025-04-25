<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <title>게시판</title>
</head>
<body>
    <nav class="width_1440 navbar bg-body-tertiary bg-dark justify-content-center">
        <div class="d-flex width_1440">
            <!-- 제목 -->
            <span class="ms-3 navbar-brand text-light">게시판</span>

            <div class="d-flex align-items-center">
                <!-- 메뉴 항목 -->
                <div class="nav-item">
                    <a class="nav-link text-white-50 me-3" href="../index.php">공지사항</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link text-white-50 me-3">자유게시판</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link text-white-50 me-3">자료실</a>
                </div>
            </div>

            <!-- 검색 -->
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-3" type="search" placeholder="검색어를 입력해주세요">
                <button class="me-3 btn_large btn btn-outline-light text-light">검색</button>
            </form>

            <form class="d-flex align-items-center me-3">
                <a href="" class="text-light nav-link">로그인</a>
                <span class="text-light">&nbsp;/&nbsp;</span>
                <a href="" class="text-light nav-link">회원가입</a>
            </form>
        </div>
    </nav> 
</body>
</html>

