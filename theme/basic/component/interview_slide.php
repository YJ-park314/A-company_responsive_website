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
					'subject' => array("타 업체에서 느꼈던 아쉬움", "단번에 해소되었습니다"),
					'content' => array(
						"깊이 있는 고민과 체계적인 화면 설계,", 
						"높은 디자인 퀄리티는 물론", 
						"중요한 이슈를 사전에 챙기며",
						"진정한 파트너처럼 함께해주셨습니다",
					),
					'company' => 'LG CNS',
					'team' => '데이터사업부',
					'charge' => '팀장',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("함께 의논하고 도움 받을 수 있는", "전략적 기획이 가능한 디자인 회사입니다"),
					'content' => array(
						"디자인능력외에도 화면 설계나 컨텐츠 기획,", 
						"최적화된 동선에 대한 컨설팅까지", 
						"함께 의논하고 언제나 큰 도움을 받고 있습니다",
					),
					'company' => '롯데멤버스',
					'team' => '커머스플랫폼사업팀',
					'charge' => '매니저',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("전문적인 데이터 업무에 대한 이해도와", "데이터 분석이 가능한 전문가 집단입니다"),
					'content' => array(
						"데이터 분석부터 인사이트 추출까지 전문적인", 
						"데이터 업무에 대한 이해도가 풍부한 디자인 업체를",
						"만나 너무나 수월하게 일 할 수 있었습니다",
					),
					'company' => '삼성카드',
					'team' => '데이터사업팀',
					'charge' => '책임 매니저',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("A부터 Z까지 모든 제작물을 진행할 수 있어", "효율적으로 지원받고 있습니다"),
					'content' => array(
						"기획부터 촬영 웹사이트 구축 디자인 퍼포먼스까지",
						"모든 제작물을 진행할 수 있어 효율적 입니다.",
						"기획력과 디자인 아트웍이 뛰어난 에이프릴마치",
						"언제나 든든합니다",
					),
					'company' => '명륜진사갈비',
					'team' => '브랜드전략본부',
					'charge' => '이사',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("마케팅 목표를 이해하고 높은 완성도로", "실행해 주는 협력회사 입니다"),
					'content' => array(
						"특히나 프로젝트 운영이나",
						"아트웍에서 언제나 마음 놓고 의뢰할 수 있는",
						"믿음직스러운 협력사입니다",
					),
					'company' => '오리콤',
					'team' => '제작 1 본부',
					'charge' => 'CD',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("대표님 뿐만 아닌 모든 디자이너들의", "성실한 태도와 업무 책임감에 늘 감동합니다"),
					'content' => array(
						"요즘 찾기 힘든 전문성과 인간적 신뢰를 갖춘",
						"디자인에이전시입니다",
					),
					'company' => '동국대학교',
					'team' => '홍보',
					'charge' => '담당 교직원',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("타 업체에서 느꼈던 아쉬움", "단번에 해소되었습니다"),
					'content' => array(
						"깊이 있는 고민과 체계적인 화면 설계,", 
						"높은 디자인 퀄리티는 물론", 
						"중요한 이슈를 사전에 챙기며",
						"진정한 파트너처럼 함께해주셨습니다",
					),
					'company' => 'LG CNS',
					'team' => '데이터사업부',
					'charge' => '팀장',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("함께 의논하고 도움 받을 수 있는", "전략적 기획이 가능한 디자인 회사입니다"),
					'content' => array(
						"디자인능력외에도 화면 설계나 컨텐츠 기획,", 
						"최적화된 동선에 대한 컨설팅까지", 
						"함께 의논하고 언제나 큰 도움을 받고 있습니다",
					),
					'company' => '롯데멤버스',
					'team' => '커머스플랫폼사업팀',
					'charge' => '매니저',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("전문적인 데이터 업무에 대한 이해도와", "데이터 분석이 가능한 전문가 집단입니다"),
					'content' => array(
						"데이터 분석부터 인사이트 추출까지 전문적인", 
						"데이터 업무에 대한 이해도가 풍부한 디자인 업체를",
						"만나 너무나 수월하게 일 할 수 있었습니다",
					),
					'company' => '삼성카드',
					'team' => '데이터사업팀',
					'charge' => '책임 매니저',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("A부터 Z까지 모든 제작물을 진행할 수 있어", "효율적으로 지원받고 있습니다"),
					'content' => array(
						"기획부터 촬영 웹사이트 구축 디자인 퍼포먼스까지",
						"모든 제작물을 진행할 수 있어 효율적 입니다.",
						"기획력과 디자인 아트웍이 뛰어난 에이프릴마치",
						"언제나 든든합니다",
					),
					'company' => '명륜진사갈비',
					'team' => '브랜드전략본부',
					'charge' => '이사',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("마케팅 목표를 이해하고 높은 완성도로", "실행해 주는 협력회사 입니다"),
					'content' => array(
						"특히나 프로젝트 운영이나",
						"아트웍에서 언제나 마음 놓고 의뢰할 수 있는",
						"믿음직스러운 협력사입니다",
					),
					'company' => '오리콤',
					'team' => '제작 1 본부',
					'charge' => 'CD',
				),
				array(
					'tags' => array("#웹사이트", "#대시보드", "#브랜딩"),
					'subject' => array("대표님 뿐만 아닌 모든 디자이너들의", "성실한 태도와 업무 책임감에 늘 감동합니다"),
					'content' => array(
						"요즘 찾기 힘든 전문성과 인간적 신뢰를 갖춘",
						"디자인에이전시입니다",
					),
					'company' => '동국대학교',
					'team' => '홍보',
					'charge' => '담당 교직원',
				),
			);
			for($i=0; $i<count($interviewArr); $i++) { 
			$emjNum = (($i+1) % 6);
			if($emjNum == 0) $emjNum = 6;
			?>
			<li class="swiper-slide">
				<div class="top">
					<img class="emoji" src="/theme/basic/img/interview/emoji<?php echo $emjNum ?>.svg" alt="이모티콘">
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