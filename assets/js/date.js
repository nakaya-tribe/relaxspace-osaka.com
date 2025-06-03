document.addEventListener('DOMContentLoaded', function() {
  // 一週間の曜日(英・日),日付,今日の曜日を取得
  const today = new Date();
  const month = [];
  const date = [];
  const weeksEn = [];
  const weeksJa = [];
  const todayWeek = new Intl.DateTimeFormat('en-US', { weekday: 'short' }).format(today);
  const dayOfWeekJa = ["(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)"];
  const dayOfWeekEn = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

  const dateFormatter = new Intl.DateTimeFormat('en-US', { month: '2-digit', day: '2-digit' });

  function formatMonth(formattedMonth) {
    // 先頭の0を削除
    const monthNumber = parseInt(formattedMonth, 10).toString();
    return monthNumber;
  }

  for (let i = 0; i < 7; i++) {
    const currentDate = new Date(today);
    currentDate.setDate(today.getDate() + i);
    const formattedDate = dateFormatter.format(currentDate);
    const parts = formattedDate.split('/');
    month.push(formatMonth(parts[0]));
    date.push(parts[1]);
    const enWeek = new Intl.DateTimeFormat('en-US', { weekday: 'short' }).format(currentDate);
    weeksEn.push(enWeek);
    weeksJa.push(dayOfWeekJa[dayOfWeekEn.indexOf(enWeek)]);
  }

  // 出勤情報のdate切り替え処理
  const scheduleList = document.querySelector('.schedule__days--list');
  if (scheduleList) {
  const scheduleTabs = scheduleList.querySelectorAll('.scheduleTab');
  if (scheduleTabs.length > 0) {
    scheduleTabs[0].classList.add('dateactive');
  }

  weeksEn.forEach((week, index) => {
    const scheduleTab = scheduleTabs[index];
    const monthElement = scheduleTab.querySelector('.scheduleTab__date--month');
    const dayElement = scheduleTab.querySelector('.scheduleTab__date--day');
    const weekElement = scheduleTab.querySelector('.scheduleTab__date--week');

    scheduleTab.classList.add(week);
    scheduleTab.querySelector('.scheduleTab__date').classList.add(week);
    weekElement.classList.add(week);

    monthElement.textContent = month[index];
    dayElement.textContent = date[index];
    weekElement.textContent = weeksJa[index];

    scheduleTab.addEventListener('click', function(event) {
      scheduleTabs.forEach(tab => tab.classList.remove('dateactive'));
      this.classList.add('dateactive');
      const girlCards = document.querySelectorAll('.girlCard');
      girlCards.forEach(card => card.classList.remove('block'));
      const currentGirlCards = document.querySelectorAll(`.girlCard.${week}`);
      currentGirlCards.forEach(card => card.classList.add('block'));
    });
  });
}

  // 初期表示時に今日の曜日のgirlCardにblockクラスを付与
  const initialGirlCards = document.querySelectorAll(`.girlCard.${todayWeek}`);
  initialGirlCards.forEach(card => card.classList.add('block'));
  
});