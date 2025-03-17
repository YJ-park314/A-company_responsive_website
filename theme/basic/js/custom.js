gsap.registerPlugin(ScrollTrigger);

window.addEventListener('load', () => {
    // 페이지 비주얼 타이틀 모션 공통
    if(document.querySelector('.tit-motion')) {
        document.querySelector('.tit-motion').classList.add('active');
    }
});

// 서브페이지 공통
if(document.querySelector('.common-bnr')) {
    // 하단 롤링 배너 => 삭제예정
    const bnrCardAll = document.querySelectorAll('.common-bnr .front img');
    let curIdx = 0; 

    setInterval(() => {
        bnrCardAll.forEach(img => {
            img.classList.remove('active');
        });

        if(curIdx >= bnrCardAll.length) curIdx = 0;

        bnrCardAll[curIdx].classList.add('active');

        curIdx++;
    }, 1500);
} 
// ****대시보드 변경할 때 #govt~ section.interview로 선택자 변경해야함
if(document.querySelector('section.interview')) {
    // interview 타이틀 모션
    if(window.innerWidth > 1024) {
        ScrollTrigger.create({
            start:"-32% 0%",
            end: "-32% 0",
            trigger:"section.interview",
            toggleClass:{targets:'section.interview .subtitle', className:'fade-motion'},
            once: true,
        });
    } else {
        ScrollTrigger.create({
            start:"-45% 0%",
            end: "-45% 0",
            trigger:"section.interview",
            toggleClass:{targets:'section.interview .subtitle', className:'fade-motion'},
            once: true,
        });
    }

    const interviewSwiper = new Swiper('.interview .swiper-container', {
        slidesPerView: 1.2,
        spaceBetween: 8,
        centeredSlides: true,
        loop: true,
        loopAdditionalSlides: 1,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 'auto',
                spaceBetween: 24,
                initialSlide: 1,
            }
        }
    });
}

// 공통 카드 배너
if(document.querySelector('section.card-bnr')) {
    let cardTimeline = null;

    if(window.innerWidth > 1024) {
        cardTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '.card-bnr',
                start: '-30% 0%',
                end: '-30% 0%',
                scrub: 3, // 스크롤 속도
                ease: 'ease-out',
                // markers: true,
                once: true,
            },
        });
    } else {
        cardTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '.card-bnr',
                start: '50% 100%',
                end: '50% 100%',
                scrub: 3, // 스크롤 속도
                ease: 'ease-out',
                once: true,
                // markers: true,
            },
        });
    }

    cardTimeline.to('.back-txt p:nth-of-type(2)', {
        opacity: 1,
    }).to('.back-txt p:nth-of-type(3)', {
        opacity: 1,
    }).to('.card-wrap', {
        // animation: '0.35s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0s 1 normal forwards running popup',
        animation: '0.35s ease-out 0s 1 normal forwards running popup',
        opacity: 1,
    });

    // cardTimeline.to('.mot', {
    //     opacity: 1,
    //     duration: 1,
    //     stagger: {
    //         amount: 10,
    //         from: "edges"
    //     },
    // });

    const bnrCardAll = document.querySelectorAll('.card-bnr .front img');
    let curIdx = 0;

    setInterval(() => {
        bnrCardAll.forEach(img => {
            img.classList.remove('active');
        });

        if(curIdx >= bnrCardAll.length) curIdx = 0;

        bnrCardAll[curIdx].classList.add('active');

        curIdx++;
    }, 1500);
}

// 대시보드 페이지 js
if(document.querySelector('#dashboard')) {
    const dashRoll = document.querySelectorAll('#dashboard .bnr-list');

    // data simple 타이틀 모션
    ScrollTrigger.create({
        start:"-22% 0%",
        end: "-22% 0",
        trigger:"section.data-simple",
        toggleClass:{targets:'section.data-simple .wrap > .subtitle dt', className:'fade-motion'},
        once: true,
    });

    // data look 타이틀 모션
    ScrollTrigger.create({
        start:"-22% 0%",
        end: "-22% 0",
        trigger:"section.data-look",
        toggleClass:{targets:'section.data-look dl', className:'fade-motion'},
        once: true,
    });

    // data look 타이틀 모션
    ScrollTrigger.create({
        start:"-30% 0%",
        end: "-30% 0",
        trigger:"section.workflow",
        toggleClass:{targets:'section.workflow .subtitle', className:'fade-motion'},
        once: true,
    });
    
    const workSwiper = new Swiper('.work .swiper-container', {
        slidesPerView: 'auto',
        autoplay: true,
        spped: 2800,
        centeredSlides: true,
        spaceBetween: 15,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            prevEl: ".work .swiper-button-prev",
            nextEl: ".work .swiper-button-next",
        },
        on: {
            slidePrevTransitionStart: function() { // prev 이동 전
                if(window.innerWidth > 640) {
                    this.wrapperEl.style.marginLeft = '-11.975%';
                }
            },
            slideNextTransitionStart: function() { // next 이동 전
                if(window.innerWidth > 640) {
                    this.wrapperEl.style.marginLeft = '11.975%';
                }
            },
            realIndexChange: function() {
                // console.log(this);
            }
        },
        breakpoints: {
            640: {
                spaceBetween: 24,
            },
        }
    });


    const guiTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: '.data-gui', // 스크롤 감지 셀렉터
            start: '-15% 0%',
            end: '-15% 0%',
            // pin: true,
            scrub: 3, // 스크롤 속도
            // duration: 2.5,
            ease: 'ease-out',
            // markers: true,
            once: true,
            /* onLeave: function() {
                removeEventListener(this);
            }*/
        },
    });

    guiTimeline.to('.data-gui .motion-area li:nth-child(1)', {
        opacity: 1,
    }).to('.data-gui .motion-area li:nth-child(2)', {
        opacity: 1,
    }).to('.data-gui .motion-area li:nth-child(3)', {
        opacity: 1,
    }).to('.data-gui .motion-area li:nth-child(4)', {
        opacity: 1,
    });

    // data gui 비디오 재생
    const dataGuiTop = document.querySelector('.data-gui').offsetTop - (window.innerHeight * 0.3);
    let onceFlag = true;
    window.addEventListener('scroll', e => {
        if(window.scrollY >= dataGuiTop && onceFlag) {
            document.querySelector('.data-gui video').play();
            onceFlag = false;
        }
    });

    const flowTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: '.workflow', // 스크롤 감지 셀렉터
            start: '5% 0%',
            end: '5% 0%',
            // pin: true,
            scrub: 1, // 스크롤 속도
            // duration: 2.5,
            ease: 'ease-out',
            // markers: true,
            once: true,
            /* onLeave: function() {
                removeEventListener(this);
            }*/
        },
    });

    flowTimeline.to('.workflow .flow-motion', {
        maxWidth: '100%',
        opacity: 1,
    });

    const flowSection = document.querySelector('.workflow');
    let maxLeng = flowSection.querySelectorAll('.flow-list li').length;
    let curNum = 1;

    const fnToggleActive = (num) => {
        flowSection.querySelectorAll('.flow-list li').forEach(li => {
            li.classList.remove('active');
        });

        document.querySelector(`.flow-list :nth-child(${num} of li)`).classList.add('active');
    }

    setInterval(() => {
        fnToggleActive(curNum);
        if(curNum >= maxLeng) {
            curNum = 1;
        } else {
            curNum++;
        }
    }, 2000);

    fnRollingToggle(dashRoll);
}

// 포트폴리오 js
if(document.querySelector('#portfolio')) {
    const url = new URL(window.location.href);
    const params = url.searchParams;
    const currentKey = params.get('sfl');
    const currentSca = params.get('stx');
    const ctgrAll = document.querySelectorAll('.ctgr-list li');
    // const ctgr2List = document.querySelector('.ctgr2-list');
    // const ctgr2All = document.querySelectorAll('.ctgr2-btn');
    // const openPopAll = document.querySelectorAll('.open-pop');

    // 1차 카테고리 '전체' => 'All'
    ctgrAll[0].querySelector('a').textContent = 'All';
    ctgrAll[0].classList.add('active');

    // 1차 카테고리 active
    if(currentSca != null) {
        if(currentKey.includes('ca_name')) {
            ctgrAll.forEach(li => {
                if(li.textContent.includes(currentSca.split(' ')[0])) {
                    li.classList.add('active');
                } else {
                    li.classList.remove('active');
                }
            });
        } else {
            ctgrAll[0].classList.add('active');
        }
    }

    // 2차 카테고리 필터링 및 active
    // if(currentKey != null && currentKey.includes('wr_1')) {
    //     let thisKeyword = '';
    //     if(currentKey.includes('ca_name')) {
    //         thisKeyword = params.get('stx').split(' ')[1];
    //     } else {
    //         thisKeyword = params.get('stx').split(' ')[0];
    //     }
    
    //     console.log(thisKeyword);
        
    //     if(thisKeyword != '전체') {
    //         ctgr2List.querySelector(`li[title="전체"]`).classList.remove('active');
    //         ctgr2List.querySelector(`li[title="${thisKeyword}"]`).classList.add('active');
    //     } else {

    //     }
    // }

    // ctgr2All.forEach(btn => {
    //     btn.addEventListener('click', e => {
    //         e.preventDefault();

    //         const url = new URL(window.location.href);
    //         const params = url.searchParams;
    //         const encodeKeyword = e.target.textContent.replaceAll('/', '_');

    //         params.delete('page');

    //         console.log(params.get('sfl'));

    //         if(params.get('sfl') && params.get('sfl').includes('ca_name')) { // 1차 + 2차 검색
    //             const curParam1 = params.get('sfl').split('||')[0];
    //             const curParam2 = params.get('stx').split(' ')[0];
    //             if(e.target.textContent.includes('전체')) { // 2차 전체
    //                 params.set('sfl', `${curParam1}`);
    //                 params.set('stx', `${curParam2}`);
    //             } else {
    //                 params.set('sfl', `ca_name||wr_1`);
    //                 params.set('stx', `${curParam2} ${encodeKeyword}`);
    //             }
    //         } else { // 2차 바로 검색
    //             if(e.target.textContent.includes('전체')) {
    //                 params.delete('sfl');
    //                 params.delete('stx');
    //             } else {
    //                 params.set('sfl', `wr_1`);
    //                 params.set('stx', encodeKeyword);
    //             }
    //         }
            
    //         window.location.href = url;
    //     });
    // });


    const pop = document.querySelector('.popup');
    const popSubject = pop.querySelector('.subject');
    const popCon = pop.querySelector('.con');
    const popModifyBtn = pop.querySelector('.modify-btn-wrap');
    let previewLeng = 0;
    let toggleNum = 1;
    let wr_id = '';

    // 팝업 우측 이미지 토글
    function viewToggle(e) {
        e.preventDefault();
        const thisTgt = e.currentTarget;
        const imgView = document.querySelector('.img-view');

        thisTgt.closest('.img-preview-list').querySelectorAll('li').forEach((li, idx) => {
            if (li == thisTgt.closest('li')) {
                li.classList.add('active');
                toggleNum = idx + 1;
            } else {
                li.classList.remove('active');
            }
        });

        imgView.innerHTML = '';

        if (thisTgt.dataset.videoId) {
            const newIframe = document.createElement('iframe');
            newIframe.src = `https://www.youtube.com/embed/${thisTgt.dataset.videoId}`;
            newIframe.style.width = "100%";
            newIframe.style.height = "450px";
            newIframe.frameBorder = "0";
            newIframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
            newIframe.allowFullscreen = true;
            newIframe.classList.add('pop-video', 'active');

            imgView.append(newIframe);
        } else {
            const thisImgClone = thisTgt.querySelector('img').cloneNode(true);
            thisImgClone.classList.add('pop-img');
            imgView.append(thisImgClone);
        }
    }
    // `a` 내부에 콘텐츠(img 또는 iframe 등)가 없으면 li 삭제
    function cleanEmptyThumbnails() {
        document.querySelectorAll('.img-preview-list li').forEach(li => {
            const aTag = li.querySelector('.view-toggle');

            if (!aTag.innerHTML.trim()) {
                li.remove();
            }
        });
    }

    // 팝업 열기
    function openPop(e, num, bo_table) {
        toggleNum = 1;

        if(pop.querySelector('.pop-img')) {
            pop.querySelectorAll('.pop-img').forEach(img => {
                img.remove();
            });
        }

        const tempEl = document.createElement('div');
        const imgView = document.querySelector('.img-view'); // 메인 큰 영상/이미지 영역
        const imgPreviewList = document.querySelector('.img-preview-list'); // 작은 목록 영역
        e.preventDefault();
        wr_id = num;

        console.log(num);

        $.ajax({
            type : "POST",
            async : true,
            url : "./board.php?bo_table=" + bo_table + "&wr_id=" + wr_id,
            dataType : "html",
            cache : false,
            data : "",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            error : function(request, status, error) {
                console.log("code : " + request.status + "\r\nmessage : " + request.reponseText);
            },
            success : function(response, status, request) { //통신 성공시 처리
                // console.log(response);
                tempEl.innerHTML = response;
                const resSubject = tempEl.querySelector('.bo_v_tit').textContent;
                const resCtgr = tempEl.querySelector('.bo_v_cate').textContent;
                const resCon = tempEl.querySelector('#bo_v_con').textContent;
                const resImgAll = tempEl.querySelectorAll('#bo_v_img img');
                const resLinkAll = tempEl.querySelectorAll('#bo_v_link ul li strong');
                const file = tempEl.querySelectorAll('.view_file_download');

                if(popModifyBtn) { // 어드민일때만
                    const modifyBtn = tempEl.querySelector('ul.is_view_btn li:nth-child(1)');
                    const delBtn = tempEl.querySelector('ul.is_view_btn li:nth-child(2)');
                    popModifyBtn.innerHTML = '';
                    popModifyBtn.append(modifyBtn);
                    popModifyBtn.append(delBtn);
                }

                popSubject.textContent = resSubject;
                popCon.textContent = resCon;

                

                resLinkAll.forEach((link, idx) => {
                    let text = link.textContent.trim();
                    let cleanedText = text.replace(/^http:\/\//, "");

                    const iframeElement = document.createElement('iframe');
                    iframeElement.src = `https://www.youtube.com/embed/${cleanedText}`;
                    iframeElement.style.width = "100%";
                    iframeElement.style.height = "450px";
                    iframeElement.frameBorder = "0";
                    iframeElement.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                    iframeElement.allowFullscreen = true;
                    iframeElement.classList.add('pop-video');

                    const newLi = document.createElement('li');
                    const newA = document.createElement('a');

                    newA.href = '#';
                    newA.dataset.videoId = cleanedText; // 클릭 시 사용할 video ID 저장
                    newA.classList.add('view-toggle');
                    newA.onclick = (e) => { changeMainContent(e) };

                    const imgThumbnail = document.createElement('img');
                    imgThumbnail.src = `https://img.youtube.com/vi/${cleanedText}/default.jpg`;
                    imgThumbnail.classList.add('pop-img');

                    newA.append(imgThumbnail);
                    newLi.append(newA);
                    imgPreviewList.append(newLi);

                    if (idx === 0) {
                        imgView.append(iframeElement);
                        newLi.classList.add('active'); // 첫 번째 썸네일 활성화
                    }
                });

                /**
                 * 📌 썸네일 클릭 시 메인 콘텐츠 변경 함수
                 */
                function changeMainContent(e) {
                    e.preventDefault();
                    viewToggle(e);
                }

                function addThumbImg(img, idx, num) {
                    if (idx === num) {
                        // 첫 번째 이미지는 메인에 추가
                        const fstImgClone = img.cloneNode(true);
                        fstImgClone.classList.add('pop-img');
                        imgView.append(fstImgClone);
                    }

                    // 이미지 단독이 아닐 때 썸네일 리스트에 추가
                    if(num != 0) {
                        const newLi = document.createElement('li');
                        const newA = document.createElement('a');
    
                        newA.href = '#';
                        newA.classList.add('view-toggle');
                        newA.onclick = (e) => { changeMainContent(e) };
    
                        newA.append(img);
                        newLi.append(newA);
                        newLi.classList.add('pop-img');
    
                        // 영상이 없는 경우 첫 번째 썸네일 활성화
                        if (!resLinkAll.length > 0 && idx === num) newLi.classList.add('active');
    
                        imgPreviewList.append(newLi);
                    }
                }

                resImgAll.forEach((img, idx) => {
                    // 컨텐츠 이미지 별도로 없을 때 ex) gif단독 는 썸네일 이미지를 컨텐츠에 추가
                    if(resImgAll.length <= 1) {
                        addThumbImg(img, idx, 0);
                    } else {
                        if(idx != 0) {
                            addThumbImg(img, idx, 1);
                        }
                    }
                });

               // setTimeout(() => {
                    const imgCount = resImgAll ? resImgAll.length : 0;
                    const linkCount = resLinkAll ? resLinkAll.length : 0;

                    console.log("imgCount:", imgCount);
                    console.log("linkCount:", linkCount);
                    if (imgCount + linkCount <= 1) {
                        console.log(22);
                        pop.querySelectorAll('.img-btn').forEach(btn => {
                            // btn.classList.remove('active');
                            btn.classList.add('dpnone');
                        });
                    }else{
                        pop.querySelectorAll('.img-btn').forEach(btn => {
                            btn.classList.remove('dpnone');
                        });
                        console.log(33);
                    }
                // }, 100);
            },
            complete: function() { //통신이 완료된 후 처리
                if (imgView.querySelector('iframe') && imgView.querySelector('img')) {
                    imgView.querySelectorAll('img').forEach(img => img.remove());
                }
                cleanEmptyThumbnails();

                pop.classList.add('active');
                document.querySelector('html').style.overflow = 'hidden';
                tempEl.remove(); // 임시 dom 삭제
            }
        });
    }

    // 팝업 닫기
    document.querySelector('.close-pop').addEventListener('click', e => {
        e.preventDefault();
        e.target.closest('.popup').classList.remove('active');
        document.querySelector('html').setAttribute('style', '');
        document.querySelectorAll('iframe').forEach(el => el.remove());
    });

    // 팝업 배경 닫기
    pop.addEventListener('click', e => {
        if(e.target.classList.contains('popup')) {
            e.target.classList.remove('active');
            document.querySelector('html').setAttribute('style', '');
            document.querySelectorAll('.pop-text').forEach(el => el.remove());
            document.querySelectorAll('iframe').forEach(el => el.remove());
        }
    });

    // 팝업 이전, 다음
    document.querySelectorAll('.img-btn').forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();

            const currentMain = document.querySelector('.img-view').firstElementChild;
            const isVideo = currentMain.tagName.toLowerCase() === 'iframe';

            if (btn.classList.contains('prev')) {
                toggleNum = toggleNum === 1 ? previewLeng : toggleNum - 1;
            } else { // next
                toggleNum = toggleNum === previewLeng ? 1 : toggleNum + 1;
            }

            const nextItem = pop.querySelector(`.img-preview-list li:nth-child(${toggleNum}) a`);
            
            if (!nextItem) return; // 다음 아이템이 없을 경우 종료

            nextItem.click();
        });
    });

    function replaceMainView(selectedItem) {
        const imgView = document.querySelector('.img-view');
        imgView.innerHTML = ''; // 기존 콘텐츠 삭제

        if (selectedItem.dataset.videoId) {
            // 📌 유튜브 영상이라면 iframe으로 변경
            const newIframe = document.createElement('iframe');
            newIframe.src = `https://www.youtube.com/embed/${selectedItem.dataset.videoId}`;
            newIframe.style.width = "100%";
            newIframe.style.height = "450px";
            newIframe.frameBorder = "0";
            newIframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
            newIframe.allowFullscreen = true;
            newIframe.classList.add('pop-video', 'active');
            imgView.append(newIframe);
        } else {
            // 📌 이미지라면 <img> 태그로 변경
            const newImg = selectedItem.querySelector('img').cloneNode(true);
            newImg.classList.add('pop-img');
            imgView.append(newImg);
        }
    }
}

// 회사소개 js
if(document.querySelector('#aboutUs')) {
    const aboutSwiper = new Swiper('.visual.about-us .swiper-container', {
        direction: 'vertical',
        effect: 'slide',
        slidesPerView: 1,
        spaceBetween: 120,
        loop: true,
        autoplay: {
            delay: 2000,
            reverseDirection: true,
            disableOnInteraction: false,
        },
    });
}

// 공공기관 js
if(document.querySelector('#govt')) {
    // management 타이틀 모션
    ScrollTrigger.create({
        start:"-22% 0%",
        end: "-22% 0",
        trigger:"section.management",
        toggleClass:{targets:'section.management .subtitle dt', className:'fade-motion'},
        once: true,
    });

    // process 타이틀 모션
    ScrollTrigger.create({
        start:"-15% 0%",
        end: "-15% 0",
        trigger:"section.process",
        toggleClass:{targets:'section.process .subtitle', className:'fade-motion'},
        once: true,
    });

    const sprtSwiper = new Swiper('.support .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 8,
        // centeredSlides: true,
        initialSlide: 1, // 시작위치
        // slidesOffsetBefore: 78,
        // slidesOffsetAfter: 20,
        loop: true,
        loopAdditionalSlides: 1,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.support .swiper-pagination',
            type: 'progressbar',
        },
        breakpoints: {
            1536: {
                slidesPerView: 5,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 24,
            }
        }
    });

    let supportTimeline = null;

    if(window.innerWidth > 640) {
        supportTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '#govt .support',
                start: '-50% 0%',
                end: '-50% 0%',
                scrub: 3,
                ease: 'ease-out',
                // markers: true,
                once: true,
            },
        });
    } else {
        supportTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '#govt',
                start: '-5% 0%',
                end: '-5% 0%',
                scrub: 3,
                ease: 'ease-out',
                // markers: true,
                once: true,
            },
        });
    }

    supportTimeline.to('.order2', {
        opacity: .8,
    }).to('.order3', {
        opacity: .6,
    });
}

// 바우처 js
if(document.querySelector('#voucher')) {
    // voucher-info 타이틀 모션
    ScrollTrigger.create({
        start:"-22% 0%",
        end: "-22% 0",
        trigger:"section.voucher-info",
        toggleClass:{targets:'section.voucher-info .wrap > .summary', className:'fade-motion'},
        once: true,
    });

    // process 타이틀 모션
    if(window.innerWidth > 1024) {
        ScrollTrigger.create({
            start:"-22% 0%",
            end: "-22% 0",
            trigger:"section.process",
            toggleClass:{targets:'section.process .subtitle', className:'fade-motion'},
            once: true,
        });
    } else {
        ScrollTrigger.create({
            start:"-10% 0%",
            end: "-10% 0",
            trigger:"section.process",
            toggleClass:{targets:'section.process .subtitle', className:'fade-motion'},
            once: true,
        });
    }

    // service 타이틀 모션
    ScrollTrigger.create({
        start:"-22% 0%",
        end: "-22% 0",
        trigger:"section.service",
        toggleClass:{targets:'section.service .subtitle', className:'fade-motion'},
        once: true,
    });

    if(window.innerWidth < 1240) {
        const serviceSwiper1 = new Swiper('.service .list1 .swiper-container', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                prevEl: ".service .list1 .swiper-button-prev",
                nextEl: ".service .list1 .swiper-button-next",
            },
        });
        const serviceSwiper2 = new Swiper('.service .list2 .swiper-container', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                prevEl: ".service .list2 .swiper-button-prev",
                nextEl: ".service .list2 .swiper-button-next",
            },
        });
        const serviceSwiper3 = new Swiper('.service .list3 .swiper-container', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                prevEl: ".service .list3 .swiper-button-prev",
                nextEl: ".service .list3 .swiper-button-next",
            },
        });
    }

    const whatCanDoSwiper = new Swiper('.what-can-do .swiper-container', {
        slidesPerView: 'auto',
        loop: true,
        spaceBetween: 38,
        centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });

    // 세로 슬라이드 애니메이션 add
    window.addEventListener('DOMContentLoaded', () => {
        const imgList = document.querySelectorAll('.img-list');

        imgList.forEach(ul => {
            ul.classList.add('active');
        })
    });
} 

// 디자인 서비스 js
if(document.querySelector('#designService')) {
    // 타이틀 모션
    if(window.innerWidth > 1024) {
        ScrollTrigger.create({
            start:"-15% 0%",
            end: "-15% 0",
            trigger:"section.design-team",
            toggleClass:{targets:'section.design-team .subtitle dt', className:'fade-motion'},
            once: true,
    
        });

        ScrollTrigger.create({
            start:"-25% 0%",  
            end: "-25% 0",
            trigger:"section.full-service",
            toggleClass:{targets:'section.full-service .subtitle', className:'fade-motion'},
            once: true,
        });

        ScrollTrigger.create({
            start:"-40% 0%",
            end: "-40% 0",
            trigger:"section.our-work",
            toggleClass:{targets:'section.our-work .subtitle', className:'fade-motion'},
            once: true,
        });
    } else {
        ScrollTrigger.create({
            start:"-30% 0%",
            end: "-30% 0",
            trigger:"section.design-team",
            toggleClass:{targets:'section.design-team .subtitle dt', className:'fade-motion'},
            once: true,
    
        });

        ScrollTrigger.create({
            start:"-30% 0%",  
            end: "-30% 0",
            trigger:"section.full-service",
            toggleClass:{targets:'section.full-service .subtitle', className:'fade-motion'},
            once: true,
        });

        ScrollTrigger.create({
            start:"-50% 0%",
            end: "-50% 0",
            trigger:"section.our-work",
            toggleClass:{targets:'section.our-work .subtitle', className:'fade-motion'},
            once: true,
        });
    }

    const designContentAll = document.querySelectorAll('.work-detail .content-list > li');

    const ourWorkSwiper = new Swiper('.work-detail .swiper-container', {
        slidesPerView: 1.8,
        loop: true,
        centeredSlides: true,
        spaceBetween: 16,
        grabCursor: true,
        allowTouchMove: true,
        pagination: {
            el: '.work-detail .swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.work-detail .swiper-button-next',
            prevEl: '.work-detail .swiper-button-prev',
        },
        freeMode: false,
        resistanceRatio: 0,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        on: {
            init: function() {
                if(window.innerWidth < 1025) {
                    this.slides.forEach(li => {
                        li.classList.remove('pc-width');
                    });
                }
            },
            realIndexChange: function() {
                // console.log(this.realIndex);
                designContentAll.forEach((li, idx) => {
                    if(idx == this.realIndex) {
                        li.classList.add('active');
                    } else {
                        li.classList.remove('active');
                    }
                });
            },
            touchMove: function(swiper, event) { // 그랩 일정 거리 이상 불가하게 막음(한번에 많이 넘기면 틀어짐 발생)
                const threshold = 200; // 그랩 해제 거리
                const distance = Math.abs(swiper.touches.currentX - swiper.touches.startX);

                if (distance > threshold) {
                    swiper.allowTouchMove = false;
                    setTimeout(() => {
                      swiper.allowTouchMove = true;
                    }, 500);
                }
            },
            touchEnd: function (swiper) {
                swiper.allowTouchMove = true;
            },
        },
        breakpoints: {
            1024 : {
                slidesPerView: 5,
                spaceBetween: 27,
            },
        }
    });

    // pc에서 슬라이드 체인지시 틀어짐 조정
    if(window.innerWidth >= 1024) {
        ourWorkSwiper.on('slidePrevTransitionStart', function() {
            this.wrapperEl.style.transform = `translate3d(${this.translate - 25.4}px, 0px, 0px)`;
        });
    }

    // our work 배너
    const workBnr = document.querySelectorAll('.work-bnr');

    const isRoot = [false, false];
    const workMoveVal = [0, 0];
    const count = [0, 0];

    const intervalFn = (idx) => {
        const bnr = workBnr[idx];

        if(!workMoveVal[idx] == 0 && workMoveVal[idx]%50 == 0) {
            isRoot[idx] = true;
            count[idx]++;
        } else {
            isRoot[idx] = false;
        }

        if(isRoot[idx]) {
            const thisEl = bnr.querySelectorAll('li')[0];
            
            setTimeout(() => {
                thisEl.remove();
                bnr.append(thisEl);
                bnr.querySelectorAll('li')[0].style.transform = `translateX(${thisEl.offsetWidth * count[idx]}px)`;
                bnr.querySelectorAll('li')[1].style.transform = `translateX(${thisEl.offsetWidth * count[idx]}px)`;
            }, 500); // css 트랜지션 만큼 지연 시켜줘야 앞에 안 짤려보임
        }

        bnr.style.transform = `translateX(-${workMoveVal[idx]}%)`;

        workMoveVal[idx] += 0.25;
    };

    let interval1 = setInterval(intervalFn, 300, 0);
    let interval2 = setInterval(intervalFn, 300, 1);
    let isClear = [false, false];

    workBnr.forEach((bnr, idx) => {
        bnr.addEventListener('mouseenter', e => {
            if(idx == 0) {
                clearInterval(interval1);
                isClear[idx] = true;
            } else {
                clearInterval(interval2);
                isClear[idx] = true;
            }
        });

        bnr.addEventListener('mouseleave', e => {
            if(idx == 0) {
                if(isClear[idx]) {
                    interval1 = setInterval(intervalFn, 300, 0);
                    isClear[idx] = false;
                }
            } else {
                if(isClear[idx]) {
                    interval2 = setInterval(intervalFn, 300, 1);
                    isClear[idx] = false;
                }
            }
        });
    })

    // 패밀리 배너
    const clientsBnr = document.querySelector('.clients-bnr');
    fnRollingToggle2(clientsBnr);
}

// 컨택 페이지 js (견적 목록 게시판)
if(document.querySelector('#bo_gall.estimate')) {
    const toBtn = document.querySelectorAll('.point-shape a');
    const list = document.querySelector('#estimateList');

    // 카테고리 공백, 특수문자 치환
    document.querySelectorAll('#bo_cate a').forEach((a, idx) => {
        a.textContent = a.textContent.replaceAll(' ', '+'); // 카테고리 공백포함 => +
        a.textContent = a.textContent.replaceAll('_', ' '); // 카테고리 _포함 => + 공백

        if(a.textContent.includes('E')) { // 카테고리 E포함 => ()
            a.textContent = a.textContent.replace('E', '(');
            a.textContent = a.textContent + ')';
        }
    });

    // 섹션간 이동
    toBtn.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();

            if(e.currentTarget.closest('div').classList.contains('to-list')) {
                window.scrollTo({
                    top: list.offsetTop,
                    left: 0,
                    behavior : 'smooth',
                });
            } else {
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior : 'smooth',
                });
            }
        });
    });

    // 모바일 카테고리 탭
    if(window.innerWidth <= 1024) {
        const ctgrTabAll = document.querySelectorAll('.ctgr-classify li');
        const ctgrConAll = document.querySelectorAll('#bo_cate > li');

        ctgrTabAll.forEach((tab, idx) => {
            tab.addEventListener('click', e => {
                e.preventDefault();

                ctgrTabAll.forEach((tab2, idx2) => {
                    tab2.closest('li').classList.remove('active');
                    ctgrConAll[idx2].classList.remove('active');
                });

                // mo에서 탭 클릭시 해당 하위 메뉴로 자동
                if(window.innerWidth <= 1024) {
                    window.location.href = ctgrConAll[idx].querySelectorAll('.item')[0].querySelector('a').href;
                }

                e.currentTarget.closest('li').classList.add('active');
                ctgrConAll[idx].classList.add('active');
            });
        });
    }
}
