const fnRollingToggle = (targetUl, act = 'add') => {
    targetUl.forEach(ul => {
        const bnrItem1 = ul.querySelector('li');
        let bnrItem2 = null;
        let bnrItem3 = null;

        console.log(bnrItem1);

        if(ul.querySelectorAll('li').length >= 3) {
            bnrItem2 = ul.querySelector('li:nth-child(2)');
            bnrItem3 = ul.querySelector('li:nth-child(3)');
        } else if(ul.querySelectorAll('li').length >= 2) {
            bnrItem2 = ul.querySelector('li:nth-child(2)');
            bnrItem3 = bnrItem1.cloneNode(true);
        } else {
            bnrItem2 = bnrItem1.cloneNode(true);
            bnrItem3 = bnrItem1.cloneNode(true);
            ul.append(bnrItem2, bnrItem3);
        }

        bnrItem1.classList.add('active');
        bnrItem2.classList.add('active');
        bnrItem3.classList.add('active');
    });
}

const fnRollingToggle2 = (targetUl) => {
    const cloneUl = targetUl.cloneNode(true);
    const cloneUl2 = targetUl.cloneNode(true);

    targetUl.closest('.bnr-wrap').append(cloneUl, cloneUl2);

    targetUl.classList.add('active');
    cloneUl2.classList.add('active');
    cloneUl.classList.add('active');
}

window.addEventListener('DOMContentLoaded', () => {
    const topBtn = document.querySelector('#top');
    // const header = document.querySelector('#header');
    const gnb = document.querySelector('#gnb');
    
    topBtn.addEventListener('click', e => {
        e.preventDefault();
    
        window.scrollTo({ top: 0, behavior: 'smooth', });
    });
    
    // gnb 여닫기
    document.querySelector('.close-gnb').addEventListener('click', e => {
        e.preventDefault();
    
        e.currentTarget.closest('.center-shape').classList.remove('active');
    });
    document.querySelector('.open-gnb').addEventListener('click', e => {
        e.preventDefault();
    
        gnb.querySelector('.center-shape').classList.add('active');
    });
    
    // 탭메뉴
    if(document.querySelector('.tabs')) {
        const tabs = document.querySelectorAll('.tabs a');
        
        tabs.forEach((tab, idx) => {
            tab.addEventListener('click', e => {
                e.preventDefault();
    
                if(!tab.closest('section.business')) { // 메인 비즈니스 섹션 별도
                    const thisTabs = tab.closest('.tabs');
                    let thisCons = tab.closest('.tab-section').querySelectorAll('.tab-con-list>li');
        
                    thisTabs.querySelectorAll('a').forEach((thisTab, tabIdx) => {
                        if(thisTab == e.currentTarget){
                            thisTab.closest('li').classList.add('active');
                            if(thisCons.length > 0) thisCons[tabIdx].classList.add('active');
                        } else {
                            thisTab.closest('li').classList.remove('active');
                            if(thisCons.length > 0) thisCons[tabIdx].classList.remove('active');
                        }
                    });
                }
            });
        });
    }

    // 사이드 fixed 메뉴
    const listOpenBtn = document.querySelector('.sns-btn-wrap .list-open');

    if (listOpenBtn) {
        listOpenBtn.addEventListener('click', e => {
            e.preventDefault();

            const list = e.currentTarget.closest('div').querySelector('ul');
            const bg = e.currentTarget.closest('div').querySelector('.bg');

            if (e.currentTarget.classList.contains('active')) {
                e.currentTarget.classList.remove('active');
                list.classList.remove('active');
                bg.classList.remove('active');
            } else {
                e.currentTarget.classList.add('active');
                list.classList.add('active');
                bg.classList.add('active');
            }
        });
    } else {
        console.warn("🚨 '.sns-btn-wrap .list-open' 요소를 찾을 수 없습니다!");
    }
});
