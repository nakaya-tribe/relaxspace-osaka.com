const imgRes = document.querySelectorAll('.img_res img');

function switchImage() {
  const windowWidth = window.innerWidth;

  imgRes.forEach(img => {
    const src = img.src;
    if (src.includes('_pc') || src.includes('_tab')) {
      if (windowWidth <= 768) {
        img.src = src.replace('_pc', '_tab');
      } else {
        img.src = src.replace('_tab', '_pc');
      }
    }
  });
}

// ページ読み込み時とウィンドウサイズ変更時に実行
window.addEventListener('DOMContentLoaded', switchImage);
window.addEventListener('resize', switchImage);