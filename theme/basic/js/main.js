// document.addEventListener("DOMContentLoaded", function () {
//     setTimeout(function () {
//         window.scrollTo({
//             top: 0,
//             left: 0,
//             behavior: 'smooth',
//         });
//     }, 0);
// });

// 로딩 + 로딩 이후 비주얼 모션
if(sessionStorage.getItem('isLoader') == null) {
    const loaderTimeline = gsap.timeline();
    
    document.querySelector('#loader').style.display = 'block';

    document.querySelectorAll('.visual.main .txt-wrap > li').forEach((li, idx) => {
        if(idx < 2) {
            li.classList.add('top-line');
        } else if(idx == 2) {
            li.classList.add('center');
        } else if(idx > 2) {
            li.classList.add('bottom-line');
        }
    });

    document.querySelector('.visual.main .vis-con p').classList.add('bottom-line');

    loaderTimeline.to('#loader .center-center', {
        opacity: 1,
        duration: .2,
    }, '+=.5').add('fadeIn1')
    .to('#loader .fade-in1-group', {
        opacity: 1,
        duration: .2,
    }, '+=.2', 'fadeIn1')
    .add('fadeIn2')
    .to('#loader .fade-in2-group', {
        opacity: 1,
        duration: .2,
        onStart: function() {
            this._targets.forEach(obj => {
                obj.classList.add('active');
            });
        },
        onComplete: function() {
            this._targets[this._targets.length - 1].classList.add('add-trans');
        }
    }, '+=.2', 'fadeIn2')
    .add('toRowCenter')
    .to('#loader .top-line', {
        top: '50%',
        duration: .15,
        ease: 'power2.out',
    }, '+=.2', 'toRowCenter')
    .to('#loader .bottom-line', {
        bottom: '50%',
        duration: .15,
        ease: 'power2.out',
    }, '<', 'toRowCenter') /* '<' => 이전 타임라인 시작지점과 함께 시작 */
    // .to('#loader .bottom-line.no-bounce', {
    //     bottom: '50%',
    //     duration: .3,
    //     ease: 'steps(1)',
    //     onStart: function() {
    //         this._targets[0].classList.add('trans');

    //         setTimeout(() => {
    //             this._targets[0].classList.remove('trans');
    //         }, 200);
    //     }
    // }, '<', 'toRowCenter')
    .to('#loader .center-center', {
        opacity: 0,
        duration: .2,
        ease: 'power2.out',
        onComplete: function() {
            this._targets[0].classList.add('active');
        }
    }, '<', 'toRowCenter')
    .add('toColCenter')
    .to('#loader .top-left', {
        duration: .2,
        onStart: function() {
            this._targets[0].classList.add('col-active');
        }
    }, '+=.2', 'toColCenter')
    .to('#loader .top-right', {
        duration: .2,
        onStart: function() {
            this._targets[0].classList.add('col-active');
        }
    }, '<', 'toColCenter')
    .to('#loader .bottom-left', {
        duration: .2,
        onStart: function() {
            this._targets[0].classList.add('col-active');
        }
    }, '<', 'toColCenter')
    .to('#loader .bottom-right', {
        duration: .2,
        onStart: function() {
            this._targets[0].classList.add('col-active');
        }
    }, '<', 'toColCenter')
    .to('#loader .center-center', {
        opacity: 1,
        duration: .2,
        onStart: function() {
            this._targets[0].classList.add('col-active');
        }
    }, '<', 'toColCenter')
    .to('#loader .dissolve', {
        opacity: 1,
        duration: .3,
    }, '+=.5')
    .to('#loader', {
        opacity: 0,
        duration: .3,
    }, '+=.2')
    .to('.visual.loader-motion .top-line', {
        onStart: function() {
            this._targets.forEach(li => {
                li.classList.add('mot-active');
            })
        }
    }, '<')
    .to('.visual.loader-motion .bottom-line', {
        onStart: function() {
            this._targets.forEach(li => {
                li.classList.add('mot-active');
            })
        }
    }, '<')
    .to('.visual.loader-motion .top-line', {
        onStart: function() {
            this._targets.forEach(li => {
                li.classList.remove('mot-active');
                li.classList.remove('top-line');
            })
        }
    })
    .to('.visual.loader-motion .bottom-line', {
        onStart: function() {
            this._targets.forEach(li => {
                li.classList.remove('mot-active');
                li.classList.remove('bottom-line');
            })
        }
    }, '<')
    .to('#loader', {
        display: 'none',
    }, '<');

    sessionStorage.setItem('isLoader', true);
}

const mainSwiper3 = new Swiper('.how-it-works .swiper-container', {
    slidesPerView: 1,  // 단수
    spaceBetween: 0,  // 단사이 여백
    loop: true,
    navigation: {
        prevEl: ".how-it-works .swiper-button-prev",
        nextEl: ".how-it-works .swiper-button-next",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

const mainSwiper5 = new Swiper('.business .swiper-container', {
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
});

const currentNumEl = document.querySelector('.what-we-do .cstm-pagination .cur-num');
const totalNumEl = document.querySelector('.what-we-do .cstm-pagination .total-num');
const progressBar = document.querySelector('.what-we-do .cstm-pagination .progress');
let realSlide = null;
const setWhatSwpOpt = {
    slidesPerView: 1.85,
    // autoHeight: true,
    centeredSlides: true,
    loop: true,
    loopAdditionalSlides: 7,
    effect: 'creative',
    creativeEffect: {
        limitProgress: 2,
        prev: {
            translate: ['-53%', '20.5%', -450],
        },
        next: {
            translate: ['53%', '20.5%', -450],
        },
    },
    // pagination: {
    //     el: '.what-we-do .swiper-pagination',
    //     type: 'progressbar',
    // },
    navigation: {
        prevEl: ".what-we-do .swiper-button-prev",
        nextEl: ".what-we-do .swiper-button-next",
    },
    breakpoints: {
        1024: {
            slidesPerView: 5.4,
            creativeEffect: {
                limitProgress: 6,
                prev: {
                    translate: ['-53%', '5.3%', -120],
                },
                next: {
                    translate: ['53%', '5.3%', -120],
                },
            },
        },
    },
    observer: true,
    observeParents: true,
    on: {
        init: function() {
            // console.log('init()');
            realSlide = this.slides.filter(li => li.classList.contains('real-slide'));
            currentNumEl.textContent = '01';

            let thisLeng = 0;

            if(realSlide.length > 0) {
                thisLeng = realSlide.length;
            } else {
                thisLeng = this.slides.length;
            }

            totalNumEl.textContent = ("0" + thisLeng).slice(-2);
            progressBar.querySelector('.inner').style.width = progressBar.clientWidth / thisLeng + 'px';
            progressBar.querySelector('.inner').style.transform = `translateX(100%)`;
        },
        realIndexChange: function() {
            // console.log('realIndexChange()');
            if(realSlide.length > 0) {
                currentNumEl.textContent = (this.realIndex + 1) % realSlide.length == 0 ?
                    ("0" + realSlide.length).slice(-2) :
                    ("0" + ((this.realIndex + 1) % realSlide.length)).slice(-2);
            } else {
                currentNumEl.textContent = ("0" + (this.realIndex + 1)).slice(-2);
            }

            progressBar.querySelector('.inner').style.transform = `translateX(${100 * parseInt(currentNumEl.textContent)}%)`;
        },
    }
};
let newSlides = null;
let newNum = 1;
let mainSwiper1 = new Swiper('.what-we-do .swiper-container', setWhatSwpOpt);

window.addEventListener('DOMContentLoaded', () => {
    // 메인 스티키 스크롤 초기화르 위해 스크롤 동작 추가해줌
    window.scrollBy(0, 10);
});

window.addEventListener('load', () => {
    const businessEl = document.querySelector('section.business');
    const businessStart = businessEl.offsetTop;
    const businessEnd = (businessStart + businessEl.clientHeight) - window.innerHeight;
    let scrollDiv = 0;

    if(window.innerWidth > 1024) {
        // 마지막 섹션 sticky랑 윈도우 끝지점 맞추기 위해 window.innerHeight 차감해줌 
        scrollDiv = (businessEl.clientHeight - (window.innerHeight)) / 4;
    } else {
        // scrollDiv = ((businessEl.clientHeight - 600) / 4) - 30;
        scrollDiv = (businessEl.clientHeight - (window.innerHeight)) / 4;
    }

    const scrollTriggers = [
        (businessStart + scrollDiv),
        (businessStart + (scrollDiv * 2)),
        (businessStart + (scrollDiv * 3)),
        (businessStart + (scrollDiv * 4)),
    ];

    // 섹션6 - contact us 스크롤 애니메이션
    // const contactTimeline = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: '.contact-us', // 스크롤 감지 셀렉터
    //         start: '-20% 0%',
    //         end: '110% 100%',
    //         scrub: 1,
    //         duration: 2.5,
    //         ease: 'sine.out',
    //         // markers: true, // 트리거의 끝과 시작점을 화면상에 출력(디버깅용)
    //     }
    // });

    // contactTimeline.to('.contact-us .group1 .active',{
    //     opacity: 1,
    // }).to('.contact-us .group2 .active',{
    //     opacity: 1,
    // }).to('.contact-us .group3 .active',{
    //     opacity: 1,
    // });

    // 수정 섹션6 - our purpose
    // gsap.registerPlugin(ScrollTrigger);
    // ScrollTrigger.create({
    //     // markers:true,
    //     start:"0% 0%",
    //     end: "100% 0",
    //     trigger:".our-purpose li:nth-child(1)",
    //     toggleClass:{targets:'.our-purpose li:nth-child(1) .motion', className:'active'},
    //     // onUpdate: (self) => console.log(self),
    // });

    // ScrollTrigger.create({
    //     // markers:true,
    //     start:"0% 0%",
    //     end: "100% 0",
    //     trigger:".our-purpose li:nth-child(3)",
    //     toggleClass:{targets:'.our-purpose li:nth-child(3) .motion', className:'active'},
    // });

    // 수정 섹션 7 - expertise
    // const ExpertiseTimeline = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: 'section.expertise', // 스크롤 감지 셀렉터
    //         start: '0% 0%',
    //         end: '30% 100%',
    //         scrub: 1,
    //         ease: 'ease in out',
    //     }
    // });
    ScrollTrigger.create({
        start:"0% 0%",
        end: "100% 0",
        trigger:"section.expertise",
        toggleClass:{targets:'section.expertise', className:'active'},
        once: true,
    });

    const keywordTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: 'section.keyword', // 스크롤 감지 셀렉터
            start: '35% 100%',
            end: '35% 100%',
            scrub: 1,
            ease: 'ease in',
            // markers: true, // 트리거의 끝과 시작점을 화면상에 출력(디버깅용)
        }
    });

    keywordTimeline.to('section.keyword .img-wrap li.active',{
        opacity: 1,
    })
    .to('section.keyword .txt-wrap .center .line', {
        height: '100%',
    })
    .add('mo1')
    .to('section.keyword .txt-wrap .left p:nth-of-type(2) .line', {
        height: '100%',
    }, 'mo1')
    .to('section.keyword .txt-wrap .right p:nth-of-type(1) .line', {
        height: '100%',
    }, 'mo1')
    .add('mo2')
    .to('section.keyword .txt-wrap .left p:nth-of-type(1) .line', {
        height: '100%',
    }, 'mo2')
    .to('section.keyword .txt-wrap .right p:nth-of-type(2) .line', {
        height: '100%',
    }, 'mo2');

    const fnToggleActive = (num) => {
        document.querySelectorAll('.tabs').forEach((li, idx) => {
            let afterIdx = 0;

            if(li.classList.contains('active')){
                afterIdx = idx;
            }

            li.classList.remove('active');

            if(afterIdx != 0) {
                console.log(idx);
                li.classList.remove('prev');
            }
        });

        document.querySelectorAll('.tab-con').forEach(li => {
            li.classList.remove('active');
        });

        document.querySelector(`.business-tabs :nth-child(${num} of li.tabs)`).classList.add('active');
        if(document.querySelector(`.business-tabs :nth-child(${num-1} of li.tabs)`)) {
            document.querySelector(`.business-tabs :nth-child(${num-1} of li.tabs)`).classList.add('prev');
        }
        document.querySelector(`.business-tabs :nth-child(${num} of .tab-con)`).classList.add('active');
    }
    
    window.addEventListener('scroll', () => {
        const scY = window.scrollY;

        if(scY >= businessStart) {
            if(scY >= businessStart && scY < scrollTriggers[0]) {
                fnToggleActive(1);
            } else if(scY >= scrollTriggers[0] && scY < scrollTriggers[1]) {
                fnToggleActive(2);
            } else if(scY >= scrollTriggers[1] && scY < scrollTriggers[2]) {
                fnToggleActive(3);
            } else if(scY >= scrollTriggers[2]) {
                fnToggleActive(4);
            }
        }

        if(scY > businessStart && scY < businessEnd) {
            header.classList.add('up');
        } else {
            header.classList.remove('up');
        }
    });

    document.querySelectorAll('.business-tabs .tabs a').forEach((a, idx) => {
        a.addEventListener('click', e => {
            window.scrollTo({
                top: (scrollTriggers[idx]),
                behavior: 'auto',
            });

            // nToggleActive(idx-1);
        });
    });


    const whatSlider = document.querySelector('.what-we-do .swiper-wrapper');
    const cloneSlideGroup = (parent, activeAll) => {
        console.log('cloneSlideGroup() 호출');
        cloneCnt++;

        if(activeAll.length < 20) {
            const realSlides = [...activeAll].filter(li => li.classList.contains('real-slide'));
            realSlides.forEach(li => {
                const thisClone = li.cloneNode(true);
                thisClone.classList.remove('real-slide');
    
                parent.append(thisClone);
            });

            // 토탈 length가 20을 넘을 때 까지 재귀
            if(document.querySelectorAll('.what-we-do .swiper-wrapper li').length < 20) {
                cloneSlideGroup(document.querySelector('.what-we-do .swiper-wrapper'), realSlides);
            }
        }
    }

    const whatSwiperWrap = document.querySelector('.what-we-do .swiper-wrapper');
    const whatSwiperOrg = document.querySelectorAll('.what-we-do .swiper-slide');
    let prevTab = 'all';
    document.querySelectorAll('.what-we-do .ctgr-tabs a').forEach(a => {
        a.addEventListener('click', e => {
            if(e.target.textContent != prevTab) {
                let whatSlideAll = [];
                const filtetKey = e.target.textContent.replace('·', '').toLowerCase();

                prevTab = e.target.textContent;
                cloneCnt = 0;
    
                mainSwiper1.destroy(true, true); // 기존 스와이퍼 파괴
                whatSwiperWrap.innerHTML = ''; // 기존 슬라이드 삭제
    
                if(filtetKey == 'all') {
                    whatSlideAll = whatSwiperOrg;
                } else {
                    whatSlideAll = [...whatSwiperOrg].filter(li => li.title.includes(`${filtetKey}`));
                }
    
                whatSlideAll.forEach(li => {
                    li.classList.add('real-slide');
                    whatSwiperWrap.append(li);
                });
                
    
                cloneSlideGroup(document.querySelector('.what-we-do .swiper-wrapper'), whatSlideAll);

                console.log('재귀횟수: ' + cloneCnt);
                mainSwiper1 = new Swiper('.what-we-do .swiper-container', setWhatSwpOpt);
            }
        });
    });
});

// window.addEventListener('DOMContentLoaded', () => {
//     if(window.innerWidth <= 640) {
//         const bounceBalls = document.querySelectorAll('.journey .circle-list li');
//         let ballIdx = 0;
//         let ballLength = 8;
    
//         setInterval(() => {
//             if(ballIdx < (ballLength-1)) {
//                 bounceBalls[ballIdx].classList.remove('active');
//                 bounceBalls[ballIdx+1].classList.add('active');
//                 ballIdx++;
//             } else {
//                 bounceBalls[ballIdx].classList.remove('active');
//                 ballIdx = 0;
//                 bounceBalls[ballIdx].classList.add('active');
//             }
//         }, 2000);
//     }
// });

// 롤링배너
const rollBnr1 = document.querySelector('.clients-bnr');
const rollBnr2 = document.querySelectorAll('.rolling-bnr .bnr-list');
const rollMain = document.querySelectorAll('.visual .rolling-txt');
const scDownBtn = document.querySelector('a.sc-down');

fnRollingToggle2(rollBnr1);
fnRollingToggle(rollBnr2);
fnRollingToggle(rollMain);

scDownBtn.addEventListener('click', e => {
    e.preventDefault();
    window.scrollTo({ top: window.innerHeight, behavior: 'smooth' });
});