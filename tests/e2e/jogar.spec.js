// Group quiz end-to-end: several browser contexts = several phones.
const { test, expect } = require('@playwright/test');
const fs   = require('fs');
const path = require('path');

const LESSON = 'cosmos_001';
const QUIZ   = JSON.parse(fs.readFileSync(path.join(__dirname, '../../data/quizzes/001_cosmos_01.json'), 'utf8'));
const TOTAL  = QUIZ.questions.length;

async function createRoom(browser, { role, pace, name }) {
  const ctx  = await browser.newContext();
  const page = await ctx.newPage();
  await page.goto(`jogar.php?criar=${LESSON}`);
  await page.locator('label.choice', { hasText: role === 'play' ? 'Vou jogar' : 'Só apresento' }).click();
  await page.locator('label.choice', { hasText: pace === 'timed' ? 'Com tempo' : 'Sem pressa' }).click();
  if (name) await page.fill('#create-name', name);
  await page.click('#create-form button[type=submit]');
  await page.waitForURL(/\?c=[A-Z0-9]{4}$/);
  await expect(page.locator('#s-lobby')).toBeVisible();
  await expect(page.locator('#code-modal')).toBeHidden();
  const code = new URL(page.url()).searchParams.get('c');
  return { page, code };
}

async function joinRoom(browser, code, name) {
  const ctx  = await browser.newContext();
  const page = await ctx.newPage();
  await page.goto(`jogar.php?c=${code}`);
  await page.fill('#join-name', name);
  await page.click('#join-form button[type=submit]');
  return page;
}

function option(page, i) {
  return page.locator('#q-options button').nth(i);
}

function wrongOf(i) { return (QUIZ.questions[i].correct + 1) % 4; }

test('3 phones play a full timed game to the same podium', async ({ browser }) => {
  const { page: host, code } = await createRoom(browser, { role: 'play', pace: 'timed', name: 'Mãe' });
  const ana = await joinRoom(browser, code, 'Ana');
  const rui = await joinRoom(browser, code, 'Rui');
  await expect(host.locator('#lobby-players .chip')).toHaveCount(3);

  await host.click('#btn-start');

  // Room code popup (for late joiners) opens and closes
  await host.locator('#q-host .btn-show-code').click();
  await expect(host.locator('#code-modal')).toBeVisible();
  await host.click('#btn-modal-close');
  await expect(host.locator('#code-modal')).toBeHidden();

  for (let i = 0; i < TOTAL; i++) {
    for (const p of [host, ana, rui]) {
      await expect(p.locator('#q-progress')).toHaveText(`Pergunta ${i + 1} / ${TOTAL}`);
    }
    await option(ana, QUIZ.questions[i].correct).click();
    await option(rui, wrongOf(i)).click();
    await option(host, QUIZ.questions[i].correct).click();

    for (const p of [host, ana, rui]) await expect(p.locator('#s-reveal')).toBeVisible();
    await expect(ana.locator('#r-feedback')).toContainText('Acertaste');
    await expect(rui.locator('#r-feedback')).toContainText('Erraste');
    await expect(ana.locator('#r-explanation-text')).toHaveText(QUIZ.questions[i].explanation);

    await host.click('#btn-next');
  }

  for (const p of [host, ana, rui]) {
    await expect(p.locator('#s-podium')).toBeVisible();
    await expect(p.locator('#p-ranking .rank-row').last()).toContainText('Rui');
  }
  await expect(rui.locator('#p-me')).toContainText(`0 / ${TOTAL} certas`);
  await expect(ana.locator('#p-me')).toContainText(`${TOTAL} / ${TOTAL} certas`);
});

test('player reloading mid-game keeps identity and score', async ({ browser }) => {
  const { page: host, code } = await createRoom(browser, { role: 'present', pace: 'relaxed' });
  const ana = await joinRoom(browser, code, 'Ana');
  await expect(host.locator('#lobby-players .chip')).toHaveCount(1);
  await host.click('#btn-start');

  await option(ana, QUIZ.questions[0].correct).click();
  await expect(ana.locator('#s-reveal')).toBeVisible();
  await host.click('#btn-next');
  await expect(ana.locator('#q-progress')).toHaveText(`Pergunta 2 / ${TOTAL}`);

  await ana.reload();
  await expect(ana.locator('#s-question')).toBeVisible();
  await expect(ana.locator('#q-progress')).toHaveText(`Pergunta 2 / ${TOTAL}`);
  await option(ana, QUIZ.questions[1].correct).click();
  await expect(ana.locator('#r-ranking .rank-row.me')).toContainText('2000');
});

test('late joiner waits, then plays the next question', async ({ browser }) => {
  const { page: host, code } = await createRoom(browser, { role: 'present', pace: 'relaxed' });
  const ana = await joinRoom(browser, code, 'Ana');
  await expect(host.locator('#lobby-players .chip')).toHaveCount(1);
  await host.click('#btn-start');
  await expect(ana.locator('#s-question')).toBeVisible();

  const rui = await joinRoom(browser, code, 'Rui');
  await expect(rui.locator('#s-wait')).toBeVisible();

  await option(ana, QUIZ.questions[0].correct).click();
  await expect(host.locator('#s-reveal')).toBeVisible();
  await expect(rui.locator('#r-feedback')).toContainText('Entras na próxima');
  await host.click('#btn-next');

  await expect(rui.locator('#s-question')).toBeVisible();
  await option(rui, QUIZ.questions[1].correct).click();
  await option(ana, QUIZ.questions[1].correct).click();
  await expect(rui.locator('#r-feedback')).toContainText('Acertaste');
});

test('solo quiz still renders and scores (shared option CSS, textContent rendering)', async ({ page }) => {
  await page.goto(`quiz.php?id=${LESSON}`);
  await expect(page.locator('#options-list .option-btn')).toHaveCount(4);
  for (let i = 0; i < TOTAL; i++) {
    await page.locator('#options-list .option-btn').nth(QUIZ.questions[i].correct).click();
    await expect(page.locator('#options-list .option-btn.correct .feedback-icon')).toHaveText('✓');
    await page.click('#next-btn');
  }
  await expect(page.locator('#score-text')).toHaveText(`${TOTAL} / ${TOTAL}`);
  await expect(page.locator('#result-breakdown > div')).toHaveCount(TOTAL);
});

test('lesson quiz tab offers "Jogar em grupo" next to "Começar Quiz"', async ({ page }) => {
  await page.goto(`lesson.php?id=${LESSON}`);
  await page.click('#tab-btn-mob-quiz');
  await expect(page.locator('#tab-quiz a', { hasText: 'Começar Quiz' })).toBeVisible();
  await page.locator('#tab-quiz a', { hasText: 'Jogar em grupo' }).click();
  await expect(page).toHaveURL(/jogar\.php\?criar=cosmos_001$/);
  await expect(page.locator('#create-form')).toBeVisible();
});
