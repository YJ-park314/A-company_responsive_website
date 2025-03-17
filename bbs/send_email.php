<?php
include_once('./_common.php');

$to = "jjw@aprilmarch.design";
$subject = "[CONTACT] 새로운 문의가 접수됐습니다.";
$from = "aprilmarch@hasy.co.kr";
$from_name = "에이프릴마치";

// POST 데이터 HTML 형식으로 정리
$message = "";
foreach ($_POST as $key => $value) {
    $message .= "<p style='line-height: 2.5;'><strong>" . htmlspecialchars($key) . ":</strong> " . nl2br(htmlspecialchars($value)) . "</p>";
}

// 이메일 헤더 설정 (HTML 형식)
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: $from_name <$from>" . "\r\n"; // 올바른 발신자 형식
$headers .= "Reply-To: $from" . "\r\n"; // 회신 이메일 설정
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// 이메일 전송
if (mail($to, $subject, $message, $headers)) {
    alert("문의주셔서 감사합니다 빠른시일 내로 연락드리겠습니다.", "/bbs/board.php?bo_table=estimate&sfl=ca_name&stx=%EA%B8%B0%EC%97%85%E3%86%8D%EC%A0%9C%ED%92%88_%ED%99%8D%EB%B3%B4%EC%98%81%EC%83%81");
} else {
    alert("등록 오류 잠시 후 다시 신청해주세요", "/bbs/board.php?bo_table=estimate&sfl=ca_name&stx=%EA%B8%B0%EC%97%85%E3%86%8D%EC%A0%9C%ED%92%88_%ED%99%8D%EB%B3%B4%EC%98%81%EC%83%81");
}
?>
