<section class="interview">
	<h3 class="hidden">client interview</h3>
	<div class="wrap">
		<dl class="subtitle">
			<dt><img src="/theme/basic/img/interview_tit.svg" alt="interview"><div class="tag">Client</div></dt>
			<dd>
				<p>에이프릴마치 M&C가</p>
				<p><span>수행했던 고객사 분들의 평가</span><span class="pc"> - </span><span>자사의 가장 큰 자부심입니다</span></p>
			</dd>
		</dl>
	</div>
	<div class="swiper-container">
		<ul class="swiper-wrapper">
			<?php 
			$interviewArr = array(
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("디테일까지 신경 쓰는","세심한 디자인 에이전시입니다"),
					'content' => array(
						"처음에는 단순한 디자인 의뢰였지만,", 
						"기대 이상의 결과를 받았습니다", 
						"꼼꼼한 작업 방식 덕분에 작은 디테일까지도",
						"신경 써주는 팀이라는 인상을 받았습니다",
					),
					'company' => '송파구청',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("대학의 아이덴티티를 살리는", "디자인 역량"),
					'content' => array(
						"학교의 전통과 정체성을 유지하면서도", 
						"트렌디한 디자인을 제안해 주었습니다", 
						"다양한 이해관계자가 있는 대학교 특성을 고려하여",
						"설득력 있는 디자인과 기획력으로, 내부 합의",
						"과정에서도 훨씬 수월하게 진행할 수 있었습니다",
					),
					'company' => '동국대학교',
					'team' => '홍보',
					'charge' => '담당 교직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("공공기관 프로젝트 경험이 풍부해", "믿을 수 있는 협력사"),
					'content' => array(
						"공공기관 프로젝트는 요구사항이 명확하고", 
						"가이드라인 준수가 중요하기 때문에,",
						"경험이 많은 팀과 협업하는 것이 필수적입니다",
						"내부 검토 과정에서도 신속하게 대응해 주셔서,",
						"덕분에 심사 과정에서 원할하게 통과할 수 있었습니다",
					),
					'company' => '서울특별시 마이칼리지',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("학내 다양한 부서와 원활한 협업을", "이끌어내는 팀"),
					'content' => array(
						"대학교 내 여러 부서에서 다양한 요청이 있었지만,",
						"모든 요구사항을 균형 있게 반영해 주셨습니다",
						"디자인 방향성을 명확하게 정리하고,",
						"일관된 브랜딩을 유지하면서도",
						"유연한 대응이 가능했습니다",
					),
					'company' => '세명대학교',
					'team' => '입학처',
					'charge' => '담당 교직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("복잡한 행정 절차까지", "원활하게 진행해 주는 파트너"),
					'content' => array(
						"공공기관의 특성상 행정 절차가 많고 까다로운", 
						"경우가 많은데, 디자인뿐만 아니라 서류 준비부터", 
						"일정 관리까지 체계적으로 진행해 주셨습니다",
						"단순한 디자인 에이전시가 아니라, 프로세스를",
						"이해하는 전문가들과 협업하는 느낌이었습니다",
					),
					'company' => '한국 디자인 진흥원',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("단순한 디자인이 아닌,", "정책 홍보 효과까지 고려한 기획력"),
					'content' => array(
						"정책 안내 자료나 공공 홍보물을 제작할 때 단순한", 
						"시각적 디자인이 아니라, 메시지를 효과적으로", 
						"전달하는 전략적 접근이 인상적이었습니다",
						"시민들이 쉽게 이해하고 관심을 가질 수 있도록, ",
						"UX/UI 개선 제안까지 함께 논의할 수 있었습니다",
					),
					'company' => '인천 테크노파크',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("디테일까지 신경 쓰는","세심한 디자인 에이전시입니다"),
					'content' => array(
						"처음에는 단순한 디자인 의뢰였지만,", 
						"기대 이상의 결과를 받았습니다", 
						"꼼꼼한 작업 방식 덕분에 작은 디테일까지도",
						"신경 써주는 팀이라는 인상을 받았습니다",
					),
					'company' => '송파구청',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("대학의 아이덴티티를 살리는", "디자인 역량"),
					'content' => array(
						"학교의 전통과 정체성을 유지하면서도", 
						"트렌디한 디자인을 제안해 주었습니다", 
						"다양한 이해관계자가 있는 대학교 특성을 고려하여",
						"설득력 있는 디자인과 기획력으로, 내부 합의",
						"과정에서도 훨씬 수월하게 진행할 수 있었습니다",
					),
					'company' => '동국대학교',
					'team' => '홍보',
					'charge' => '담당 교직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("공공기관 프로젝트 경험이 풍부해", "믿을 수 있는 협력사"),
					'content' => array(
						"공공기관 프로젝트는 요구사항이 명확하고", 
						"가이드라인 준수가 중요하기 때문에,",
						"경험이 많은 팀과 협업하는 것이 필수적입니다",
						"내부 검토 과정에서도 신속하게 대응해 주셔서,",
						"덕분에 심사 과정에서 원할하게 통과할 수 있었습니다",
					),
					'company' => '서울특별시 마이칼리지',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("학내 다양한 부서와 원활한 협업을", "이끌어내는 팀"),
					'content' => array(
						"대학교 내 여러 부서에서 다양한 요청이 있었지만,",
						"모든 요구사항을 균형 있게 반영해 주셨습니다",
						"디자인 방향성을 명확하게 정리하고,",
						"일관된 브랜딩을 유지하면서도",
						"유연한 대응이 가능했습니다",
					),
					'company' => '세명대학교',
					'team' => '입학처',
					'charge' => '담당 교직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("복잡한 행정 절차까지", "원활하게 진행해 주는 파트너"),
					'content' => array(
						"공공기관의 특성상 행정 절차가 많고 까다로운", 
						"경우가 많은데, 디자인뿐만 아니라 서류 준비부터", 
						"일정 관리까지 체계적으로 진행해 주셨습니다",
						"단순한 디자인 에이전시가 아니라, 프로세스를",
						"이해하는 전문가들과 협업하는 느낌이었습니다",
					),
					'company' => '한국 디자인 진흥원',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("단순한 디자인이 아닌,", "정책 홍보 효과까지 고려한 기획력"),
					'content' => array(
						"정책 안내 자료나 공공 홍보물을 제작할 때 단순한", 
						"시각적 디자인이 아니라, 메시지를 효과적으로", 
						"전달하는 전략적 접근이 인상적이었습니다",
						"시민들이 쉽게 이해하고 관심을 가질 수 있도록, ",
						"UX/UI 개선 제안까지 함께 논의할 수 있었습니다",
					),
					'company' => '인천 테크노파크',
					'team' => '홍보',
					'charge' => '담당 직원',
				),
			);
			for($i=0; $i<count($interviewArr); $i++) { 
			$emjNum = (($i+1) % 6);
			if($emjNum == 0) $emjNum = 6;
			?>
			<li class="swiper-slide">
				<div class="top">
					<img class="emoji" src="/theme/basic/img/interview/gov_office/emoji<?php echo $emjNum ?>.svg" alt="이모티콘">
					<ul class="interview-tags">
						<?php for($u=0; $u<count($interviewArr[$i]['tags']); $u++) { ?>
						<li><?php echo $interviewArr[$i]['tags'][$u] ?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="subject">
					<?php for($u=0; $u<count($interviewArr[$i]['subject']); $u++) { ?>
					<p><?php echo $interviewArr[$i]['subject'][$u] ?></p>
					<?php } ?>
				</div>
				<div class="content">
					<?php for($u=0; $u<count($interviewArr[$i]['content']); $u++) { ?>
					<p><?php echo $interviewArr[$i]['content'][$u] ?></p>
					<?php } ?>
				</div>
				<div class="bottom">
					<p class="company"><?php echo $interviewArr[$i]['company'] ?></p>
					<p class="group">
						<strong><?php echo $interviewArr[$i]['team'] ?></strong>
						<span><?php echo $interviewArr[$i]['charge'] ?></span>
					</p>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</section>