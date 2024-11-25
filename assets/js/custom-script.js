'use strict'

// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 
// parallaxライブラリの実行
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ 
function rellax() {
	document.addEventListener('DOMContentLoaded', () => {
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
	});
}
rellax();
