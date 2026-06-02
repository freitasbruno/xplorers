(function () {
  'use strict';

  var questions = QUIZ_DATA.questions;
  var total     = questions.length;
  var current   = 0;
  var score     = 0;
  var answers   = [];
  var letters   = ['A', 'B', 'C', 'D'];

  function renderQuestion() {
    var q = questions[current];

    document.getElementById('question-text').textContent = q.question;
    document.getElementById('quiz-progress-label').textContent = (current + 1) + ' / ' + total;
    document.getElementById('quiz-progress-bar').style.width = (((current + 1) / total) * 100) + '%';

    var list = document.getElementById('options-list');
    list.innerHTML = '';
    q.options.forEach(function (opt, i) {
      var btn = document.createElement('button');
      btn.className = 'option-btn';
      btn.innerHTML =
        '<span class="option-letter">' + letters[i] + '</span>' +
        '<span>' + opt + '</span>';
      btn.addEventListener('click', function () { selectAnswer(i); });
      list.appendChild(btn);
    });

    document.getElementById('explanation-box').classList.add('hidden');
    document.getElementById('next-btn').classList.add('hidden');
  }

  function selectAnswer(idx) {
    var q    = questions[current];
    var btns = document.querySelectorAll('.option-btn');

    btns.forEach(function (b) { b.disabled = true; });

    if (idx === q.correct) {
      btns[idx].classList.add('correct');
      btns[idx].insertAdjacentHTML('beforeend', '<span class="feedback-icon">✓</span>');
      score++;
      answers.push(true);
    } else {
      btns[idx].classList.add('wrong');
      btns[idx].insertAdjacentHTML('beforeend', '<span class="feedback-icon">✗</span>');
      btns[q.correct].classList.add('reveal');
      btns[q.correct].insertAdjacentHTML('beforeend', '<span class="feedback-icon">✓</span>');
      answers.push(false);
    }

    document.getElementById('explanation-text').textContent = q.explanation;
    document.getElementById('explanation-box').classList.remove('hidden');

    var isLast  = current === total - 1;
    var nextBtn = document.getElementById('next-btn');
    nextBtn.textContent = isLast ? 'Ver resultado →' : 'Próxima pergunta →';
    nextBtn.classList.remove('hidden');
  }

  function nextQuestion() {
    current++;
    if (current >= total) {
      showResults();
    } else {
      renderQuestion();
    }
  }

  function showResults() {
    document.getElementById('screen-question').classList.remove('active');
    document.getElementById('screen-results').classList.add('active');
    document.getElementById('quiz-progress-label').textContent = '✓';
    document.getElementById('quiz-progress-bar').style.width = '100%';

    document.getElementById('score-text').textContent = score + ' / ' + total;

    var pct   = score / total;
    var emoji = pct === 1 ? '🏆' : pct >= 0.5 ? '👍' : '📚';
    document.getElementById('result-emoji').textContent = emoji;
    document.getElementById('score-label').textContent  = score === 1 ? 'Correta' : 'Corretas';

    var breakdown = document.getElementById('result-breakdown');
    breakdown.innerHTML = '';
    questions.forEach(function (q, i) {
      var row = document.createElement('div');
      row.className = 'flex items-start gap-3';
      row.innerHTML =
        '<span class="text-lg flex-shrink-0 mt-0.5">' + (answers[i] ? '✅' : '❌') + '</span>' +
        '<span class="text-sm text-slate-700 leading-snug">' + q.question + '</span>';
      breakdown.appendChild(row);
    });
  }

  function retryQuiz() {
    current = 0; score = 0; answers = [];
    document.getElementById('screen-results').classList.remove('active');
    document.getElementById('screen-question').classList.add('active');
    renderQuestion();
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('next-btn').addEventListener('click', nextQuestion);
    document.getElementById('retry-btn').addEventListener('click', retryQuiz);
    renderQuestion();
  });
}());
