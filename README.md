# composer 설치
  - https://techhans.tistory.com/57
  - http://getcomposer.org/download


# ratchet 라이브러리 설치
  composer require cboden/ratchet

# composer.json, autoload 적용
  
  composer dump-autoload




# 웹소켓 서버 실행 (CLI에서)
  php socketRun.php




# 웹소켓 서버 실행시 xdebug 에러 발생 시
  
  (php.ini 파일 내용 중, 아래 부분 주석 처리로 해결)
  ;zend_extension=xdebug
