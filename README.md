# composer.json, autoload 적용
  
  composer dump-autoload

# 웹소켓 서버 실행 (CLI에서)
  php socketRun.php

# 웹소켓 서버 실행시 xdebug 에러 발생 시
  
  (php.ini 파일 내용 중, 아래 부분 주석 처리로 해결)
  ;zend_extension=xdebug
