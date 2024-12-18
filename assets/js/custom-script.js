'use strict';
handleHeaderOnScroll()
document.addEventListener('DOMContentLoaded', () => {

	handleFvMessageOpen()
	rellax();
});

// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 
// parallaxライブラリの実行
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 
function rellax() {
	// document.addEventListener('DOMContentLoaded', () => {
	const rellaxElements = document.querySelectorAll('.rellax');

	// Rellaxを個々の要素に対して初期化
	rellaxElements.forEach(element => {
		const speed = element.getAttribute('data-rellax-speed') || -2; // データ属性からスピードを取得
		// データ属性からオプションを取得
		const zIndex = parseInt(element.dataset.rellaxZindex) || -1;
		new Rellax(element, {
			speed: speed,
			center: true,
			vertical: true,
			horizontal: false,
			zIndex: zIndex
		});
	});
	// });
}

function handleHeaderOnScroll() {
	const header = document.querySelector('.l-header');
	const headerHeight = header.offsetHeight;
	let startPos = 0;

	if (!header) return;

	function handleScroll() {
		const scrollPos = window.scrollY || document.documentElement.scrollTop;

		if (scrollPos > startPos && scrollPos > headerHeight) {
			// if (scrollPos > headerHeight) {
			// 下にスクロールした場合
			header.style.top = `-${headerHeight}px`;
		} else {
			// 上にスクロールした場合
			header.style.top = '0';
		}

		startPos = scrollPos;
	}
	window.addEventListener('load', handleScroll);
	window.addEventListener('scroll', handleScroll);
}
// handleHeaderOnScroll()

// グローバルスコープで呼び出し可能にする
// window.handleHeaderOnScroll = handleHeaderOnScroll;

// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 
// 関数｜ハンバーガーメニュー制御
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 

function setHamburgerMenu(hamburgerSelector, navSelector) {
	const hamburger = document.querySelector(hamburgerSelector);
	const nav = document.querySelector(navSelector);
	const body = document.body;

	if (!hamburger) {
		console.error('ハンバーガーメニューまたはナビゲーション要素が見つかりません');
		return;
	}

	hamburger.addEventListener('click', function () {
		this.classList.toggle('is-active');
		nav.classList.toggle('is-active');
		body.classList.toggle('nav-open');
	});
}

// setHamburgerMenu('.p-hamburger', '.l-header__nav');
setHamburgerMenu('.p-hamburger', '.p-header__nav-sp');

function handleFvMessageOpen() {
	// document.addEventListener('DOMContentLoaded', function () {
	const moreBtns = document.querySelectorAll('.p-fv__message__more-btn');
	const moreContent = document.querySelector('.p-fv__message__next');

	// 上下のボタンを変数に分けて管理
	const readMoreBtn = moreBtns[0]; // 「続きを読む」ボタン
	const closeBtn = moreBtns[1];    // 「閉じる」ボタン

	// 初期状態では閉じるボタンは表示しない
	// closeBtn.style.display = 'none';
	closeBtn.style.opacity = 0;

	// 「続きを読む」をクリックした場合
	readMoreBtn.addEventListener('click', function () {
		moreContent.classList.add('is-active');
		// readMoreBtn.style.display = 'none';
		readMoreBtn.style.opacity = 0;
		// closeBtn.style.display = 'inline-block';
		closeBtn.style.opacity = 0.3;
	});

	// 「閉じる」をクリックした場合
	closeBtn.addEventListener('click', function () {
		moreContent.classList.remove('is-active');
		// readMoreBtn.style.display = 'inline-block';
		// closeBtn.style.display = 'none';
		readMoreBtn.style.opacity = 0.3;
		closeBtn.style.opacity = 0;
	});
	// });
}
